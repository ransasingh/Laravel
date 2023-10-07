<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <form class="form-control" id="todo" method="post">

        <table>
            <tr>
                <td><label for="Title" class="form-control">Title</label></td>

                <td><input type="text" id="Title" name="Title"></td>
            </tr>
            <td><label for="Status" class="form-control">status</label></td>
            <td>
                <select name="Status" id="Status">
                    <option selected>--select--</option>
                    <option value="Pending">Pending</option>
                    <option value="Active">Active</option>
                    <option value="Complete">Complete</option>
                </select>
            </td>
            <tr>
                <td>
                    <input type="file" name="image" type="image">
                    <button type="button" onclick="SaveimageFile()">Upload</button>
                </td>
            </tr>
            <tr>
                <td><input type="submit" id="addtodo" name="addtodo" value="Add" class="btn btn-success"></td>
            </tr>


        </table>
    </form>
    <hr>
    <div class="table-responsive-sm">
        <table class="table table-striped">
            <thead>

                <td>Sno</td>
                <td>Title</td>
                <td>Status</td>
                
                <td>Action</td>
            </thead>
            <tbody id="showall"></tbody>
        </table>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


        <script>
            // document.getElementById('todo').addEventListener('submit', function(event) {
            // console.log("Called");
            // //    alert("add");
            $("#todo").on("submit", function(event) {
                event.preventDefault();
                // let FormData = $('#todo').serialize()
                // let FormData = $('#todo').serializeArray()
                //  console.log(FormData);

                tododata = {}

                $.each($('#todo').serializeArray(), function() {
                    tododata[this.name] = this.value;
                })
                console.log(tododata);
                fetch("http://localhost/Laravel/API_Task/Backend/Todoadd", {
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: JSON.stringify(tododata)
                }).then((res) => res.json()).then((Response => {
                    // console.log(Response);
                    showall();

                }))
            });
            async function showall() {
                const response = await fetch("http://localhost/Laravel/API_Task/Backend/showall");
                // console.log(response)
                const data = await response.json();
                // console.log(data.Data);
                let Htmllist = ""
                i = 1
                data.Data.forEach(element => {
                    //  console.log(element);
                    Htmllist += `<tr><td>${i}</td><td>${element.Title}</td>
                <td>${element.Status}</td>
                <td>
                <button onclick ="edittodo(${element.id})">Edit</button>
                <button onclick ="deletetodo(${element.id})">Delete</button>      
                </td>              
                </tr>`
                    i++
                });
                document.getElementById("showall").innerHTML = Htmllist

            }
            showall();

            async function edittodo(id) {
                let Selecttodo = await fetch(`http://localhost/Laravel/API_Task/backend/selecttodo?id=${id}`)
                // console.log(Selecttodo);
                let SelecttodoRes = await Selecttodo.json()
                console.log(SelecttodoRes.Data[0]);
                console.log(document.getElementById("Status").value);


                document.getElementById("Title").value = SelecttodoRes.Data[0].Title
                document.getElementById("Status").value = SelecttodoRes.Data[0].Status
                document.getElementById('addtodo').setAttribute('onclick', `showHide(${SelecttodoRes.Data[0].id})`);
                document.getElementById('addtodo').value = "Update";
                document.getElementById("todo").id = "update";
                // document.getElementById("addtodo").type = "click";


            };

            async function showHide(id) {

                document.getElementById("update").addEventListener("submit", function(e) {
                    e.preventDefault();
                    // console.log("calll", id);\
                    updatedata = {}

                    $.each($('#update').serializeArray(), function() {
                        updatedata[this.name] = this.value;
                    })
                    console.log(updatedata);
                    console.log(id)
                    //return false;
                    //delete(updatedata['addtodo']);
                    fetch(`http://localhost/Laravel/API_Task/backend/updatetodo?id=${id}`, {
                        headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json'
                        },
                        method: "PUT",
                        body: JSON.stringify(updatedata)

                    }).then((res) => res.json()).then((result) => {
                        console.log(result);
                        showall();
                    })

                })

            }

            function deletetodo(id) {
                fetch(`http://localhost/Laravel/API_Task/backend/Delete?id=${id}`, {
                        headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json'
                        },
                        method: "DELETE",
                        // body: JSON.stringify(FormData)
                    })
                    .then((res) => res.json()).then((result) => {
                        // .then(function (res) { return res.json() }).then((result)=>{
                        console.log("result", result);
                        showall()
                    })

            }

            function SaveimageFile() {
                const form_data = new FormData();

            form_data.append('sample_image', $("#image")[0].files[0]);

            fetch("http://localhost/Laravel/API_Task/backend/uploadimage", {
                method: "POST",
                body: form_data
            }).then(function(response) {
                return response.json();
            }).then(function(responseData) {

                document.getElementById('uploaded_image').innerHTML = '<div class="alert alert-success">Image Uploaded Successfully</div> <img src="' + responseData.image_source + '" class="img-thumbnail" />';

                document.getElementsByName('sample_image')[0].value = '';
                // console.log(document.getElementById('uploaded_image'));
              exit;

            });
            }
        </script>


</body>

</html>
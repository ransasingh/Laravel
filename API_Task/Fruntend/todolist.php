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

                <td><input type="text" id="	Title" name="Title"></td>
            </tr>
            <td><label for="status" class="form-control">status</label></td>
            <td>
                <select name="Status" id="Status">
                    <option value="select">--select--</option>
                    <option value="Pending">Pending</option>
                    <option value="Active">Active</option>
                    <option value="Complete">Complete</option>
                </select>
            </td>
            <tr>
                <td><input type="submit" id="addtodo" name="addtodo" value="Add"></td>
            </tr>


        </table>
    </form>
    <hr>
    <div class="table-responsive-sm">
        <table class="table table-striped">
            <thead>
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
            })
            async function showall() {
                const response = await fetch("http://localhost/Laravel/API_Task/Backend/showall");
                // console.log(response)
                const data = await response.json();
                // console.log(data.Data);
                let Htmllist = ""
                data.Data.forEach(element => {
                    console.log(element);
                    Htmllist += `<tr><td>${element.Title}</td>
                <td>${element.Status}</td>
                <td>
                <button type="button"  class="btn btn-link">Edit</button>
                <button type="button" class="btn btn-link">Delete</button>                 
                </td>              
                </tr>`
                });
                document.getElementById("showall").innerHTML = Htmllist

            }
            showall();
        </script>


</body>

</html>
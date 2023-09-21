<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->

    <div class="container mt-3 p-3 mb-2 bg-yellow text-dark">
        <div class="text-center">
            <h2><b>Add Product</b></h2>
        </div>
        <form class="form-horizontal">

            <div class="form-group">
                <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>
                <div class="col-md-4">
                    <input id="product_name" name="product_name" class="form-control input-md" required="" type="text">

                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="product_categorie">PRODUCT CATEGORY</label>
                <div class="col-md-4">
                    <select id="product_categorie" name="product_categorie" class="form-control">
                        <option value="tel">Select</option>
                        <option value="tel">Television</option>
                        <option value="Mobile">Mobile</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="PRODUCT Description">PRODUCT Description</label>
                <div class="col-md-4">
                    <input id="" name="PRODUCT Description" class="form-control input-md" required="" type="text">

                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="PRODUCT Quantity">PRODUCT Quantity</label>
                <div class="col-md-4">
                    <input id="" name="PRODUCT Quantity" class="form-control input-md" required="" type="text">

                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="PRODUCT Quantity">PRODUCT Price</label>
                <div class="col-md-4">
                    <input id="" name="PRODUCT Price" class="form-control input-md" required="" type="text">

                </div>
            </div>
            <div class="form-group">
                <div class="text-center">
                    <div class="col-md-6 offset-4">

                        <button type="submit" name="Add Product" class="btn btn-primary">ADD PRODUCT</button>
                        <button type="reset" value="Cancel" class="btn btn-danger">RESET</button>
                    </div>
                </div>
            </div>
    </div>


    </form>
</body>

</html>
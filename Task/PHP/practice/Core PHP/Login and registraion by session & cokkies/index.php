<?php
include("header.php");
// echo "<pre>";
// print_r($_SERVER);
// print_r($_COOKIE);
// echo "</pre>";
if (isset($_REQUEST['prod1-submit'])) {
    $_SESSION['cartData']=array("prod_title"=>$_REQUEST['prod_title'],"prod_price"=>$_REQUEST['prod_price'],"prod_quantity"=>$_REQUEST['prod_quantity'],"prod_image"=>$_REQUEST['prod_image']);
}
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <div class="row">
        <div class="col-lg-3">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="images/01.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Best product of shirts.</p>
                    <form method="post">
                        <div class="row">
                            <div class="col">
                                <span>&#8377;1235</span>
                            </div>
                            <div class="col">
                                <input type="hidden" name="prod_title" value="prod1" id="">
                                <input type="hidden" name="prod_price" value="1235" id="">
                                <input type="hidden" name="prod_image" value="1.jpg" id="">
                                <input type="number" class="form-control" name="prod_quantity" value="1" id="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-sm btn-primary" type="submit" name="prod1-submit">Add To cart <i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="images/02.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Best product of shirts.</p>
                    <form method="post">
                        <div class="row">
                            <div class="col">
                                <span>&#8322;1000</span>
                            </div>
                            <div class="col">
                                <input type="hidden" name="prod_title" value="prod1" id="">
                                <input type="hidden" name="prod_price" value="1235" id="">
                                <input type="hidden" name="prod_image" value="1.jpg" id="">
                                <input type="number" class="form-control" name="prod_quantity" value="1" id="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-sm btn-primary" type="submit" name="prod1-submit">Add To cart <i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>  
    </body>
    </html>
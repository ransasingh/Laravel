<?php
include("header.php");
if (isset($_REQUEST['prod1'])) {
    $_SESSION['cartData']['prod1']=array("prod_title"=>$_REQUEST['prod_title'],"prod_price"=>$_REQUEST['prod_price'],"prod_quantity"=>$_REQUEST['prod_quantity'],"prod_image"=>$_REQUEST['prod_image']);
}


?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Welcome to my page</h2>
        
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="images/img1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Iphone 11 pro</h5>
                    <p class="card-text">256GB, Navy Blue</p>
                    <form method="post">
                        <div class="row">
                            <div class="col">
                                <span>&#8377;10000</span>
                            </div>
                            <div class="col">
                                <input type="hidden" name="prod_title" value="Iphone 11" id="">
                                <input type="hidden" name="prod_price" value="10000" id="">
                                <input type="hidden" name="prod_image" value="img1.jpg" id="">
                                <input type="number" class="form-control" name="prod_quantity" value="" id="">
                            </div>
                            <div class="row">
                            <div class="col">
                                <button class="btn btn-sm btn-primary" type="submit" name="prod1">Add To cart <i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                        </div>
                        </div>
                        
                        
                        <div class="row">
        <div class="col-lg-3">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="images/img2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Samsung galaxy Note 10</h5>
                    <p class="card-text">256GB, Navy Blue</p>
                    <form method="post">
                        <div class="row">
                            <div class="col">
                                <span>&#8377;9000</span>
                            </div>
                            <div class="col">
                                <input type="hidden" name="prod_title" value="Samsung galaxy Note 10" id="">
                                <input type="hidden" name="prod_price" value="9000" id="">
                                <input type="hidden" name="prod_image" value="img2.jpg" id="">
                                <input type="number" class="form-control" name="prod_quantity" value="1" id="">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-sm btn-primary" type="submit" name="prod2">Add To cart <i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                        </div>
                        <div class="col-lg-3">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="images/img3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Canon EOS M50</h5>
                    <p class="card-text">Onyx Black</p>
                    <form method="post">
                        <div class="row">
                            <div class="col">
                                <span>&#8377;9000</span>
                            </div>
                            <div class="col">
                                <input type="hidden" name="prod_title" value="Canon EOS M50" id="">
                                <input type="hidden" name="prod_price" value="9000" id="">
                                <input type="hidden" name="prod_image" value="img3.jpg" id="">
                                <input type="number" class="form-control" name="prod_quantity" value="1" id="">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-sm btn-primary" type="submit" name="prod3">Add To cart <i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                        </div>
                        <div class="col-lg-3">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="images/img4.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">MacBook Pro</h5>
                    <p class="card-text">1TB, Graphite</p>
                    <form method="post">
                        <div class="row">
                            <div class="col">
                                <span>&#8377;9000</span>
                            </div>
                            <div class="col">
                                <input type="hidden" name="prod_title" value="MacBook Pro" id="">
                                <input type="hidden" name="prod_price" value="9000" id="">
                                <input type="hidden" name="prod_image" value="img4.jpg" id="">
                                <input type="number" class="form-control" name="prod_quantity" value="1" id="">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-sm btn-primary" type="submit" name="prod4">Add To cart <i class="fa-solid fa-cart-shopping"></i></button>
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
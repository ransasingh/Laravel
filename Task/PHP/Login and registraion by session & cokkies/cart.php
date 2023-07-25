<?php
require_once "header.php";
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

if (isset($_REQUEST['emptycart'])) {
  unset($_SESSION['cartData']);
  header("lcoation:cart.php");
}

?><section class="h-100 h-custom" style="background-color: #eee;">
<div class="container py-5 h-100">
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col">
      <div class="card">
        <div class="card-body p-4">

          <div class="row">

            <div class="col-lg-7">
              <h5 class="mb-3"><a href="index.php" class="text-body"><i
                    class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
              <hr>
<?php

if (isset($_SESSION['cartData'])) { ?>

<div class="card mb-3">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                      <div>
                        <img
                          src="images/02.jpg"
                          class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                      </div>
                      <div class="ms-3">
                        <h5>Shirts</h5>
                        <p class="small mb-0">regular</p>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center">
                      <div style="width: 50px;">
                        <h5 class="fw-normal mb-0">1</h5>
                      </div>
                      <div style="width: 80px;">
                        <h5 class="mb-0">$1235</h5>
                      </div>
                      <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card mb-3">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                      <div>
                        <img
                          src="images/01.jpg"
                          class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                      </div>
                      <div class="ms-3">
                        <h5>Shirt </h5>
                        <p class="small mb-0">Blue</p>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center">
                      <div style="width: 50px;">
                        <h5 class="fw-normal mb-0">1</h5>
                      </div>
                      <div style="width: 80px;">
                        <h5 class="mb-0">$1200</h5>
                      </div>
                      <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- <div class="card mb-3">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                      <div>
                        <img
                          src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img3.webp"
                          class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                      </div>
                      <div class="ms-3">
                        <h5>Canon EOS M50</h5>
                        <p class="small mb-0">Onyx Black</p>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center">
                      <div style="width: 50px;">
                        <h5 class="fw-normal mb-0">1</h5>
                      </div>
                      <div style="width: 80px;">
                        <h5 class="mb-0">$1199</h5>
                      </div>
                      <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                    </div>
                  </div>
                </div>
              </div> -->

              <!-- <div class="card mb-3 mb-lg-0">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                      <div>
                        <img
                          src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img4.webp"
                          class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                      </div>
                      <div class="ms-3">
                        <h5>MacBook Pro</h5>
                        <p class="small mb-0">1TB, Graphite</p>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center">
                      <div style="width: 50px;">
                        <h5 class="fw-normal mb-0">1</h5>
                      </div>
                      <div style="width: 80px;">
                        <h5 class="mb-0">$1799</h5>
                      </div>
                      <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                    </div>
                  </div>
                </div> -->
              </div>

<?php } else{?> 
Your cart is empty
<?php }  ?>

            </div>
       
          </div>
          <form method="post">
            <button name="emptycart">Empty Cart</button>
          </form>
   
        </div>
      </div>
    </div>
  </div>
</div>
</section>
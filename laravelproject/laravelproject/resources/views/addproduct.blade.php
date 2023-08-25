@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h2 class="text-center">ADD PRODUCT FORM</h2>
        <form action="saveproduct" method="post">
            @csrf
                <div class="row">
                    <div class="col-6 offset-3">
                        <label for="product_name" class="label-control mb-1">Product Name</label>
                        <input type="text" class="form-control" name="product_name" id="product_name"  >
                    </div>
                    <div class="col-6 offset-3 mt-2">
                        <label for="product_discripation" class="label-control mb-1">Product Discripation</label>
                        <input type="text" class="form-control" name="product_discripation" id="product_discripation" >
                    </div>
                    <div class="col-6 offset-3 mt-2">
                        <label for="product_price" class="label-control mb-1">Product Price</label>
                        <input type="tel" class="form-control" name="product_price" id="product_price" >
                    </div>
                    <div class="col-6 offset-3 mt-2">
                        <label for="product_quantity" class="label-control mb-1">Product Quantity</label>
                        <inPut type="tel" class="form-control" name="product_quantity" id="product_quantity" >
                    </div>
                    <div class="col-6 offset-3 mt-2">
                       <input type="submit" class="btn btn-success" value="ADD PRODUCT" name="addproduct">&nbsp;
                       <input type="reset" class="btn btn-danger" value="CANCEL" >
                    </div>
                </div>

        </form>
    </div>
</div>
@endsection

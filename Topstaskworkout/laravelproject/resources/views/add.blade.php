@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h2 class="text-center">PRODUCT FORM</h2>
        <form action="addproduct" method="post">

            <div class="row">
                <div class="col-6 offset-3">
                    <label for=product_title" class="label-control mb-1">product_title</label>
                    <input type="text" class="form-control" name="product_title" id="product_title">
                </div>
                <div class="col-6 offset-3">
                    <label for=product_name" class="label-control mb-1">product_name</label>
                    <input type="text" class="form-control" name="product_name" id="product_name">
                </div>
                <div class="col-6 offset-3 mt-2">
                    <label for="product_price" class="label-control mb-1">price</label>
                    <input type="tel" class="form-control" name="product_price" id="product_price">
                </div>
                <div class="col-6 offset-3 mt-2">
                    <label for="product_quantity" class="label-control mb-1">quantity</label>
                    <inPut type="tel" class="form-control" name="product_quantity" id="product_quantity">
                </div>
                <div class="col-6 offset-3 mt-2">
                    <label for=product_description" class="label-control mb-1">product_discripation</label>
                    <input type="text" class="form-control" name="product_description" id="product_description">
                </div>
                <div class="col-6 offset-3 mt-2">
                    <input type="submit" class="btn btn-success" value="ADD PRODUCT" name="addproduct">&nbsp;
                    <input type="reset" class="btn btn-danger" value="CANCEL">
                </div>
            </div>

        </form>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <a class="btn btn-sm btn-primary" href="add">Add New</a>
                <div class="card-header">{{ __('product') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        <!-- {{ session('status') }} -->
                        {{ session('status') }}
                    </div>
                    @endif
                 

                    {{ __('All product list') }}
                  
                    <div class="p-6 text-gray-900 dark:text-gray-100">

                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            @foreach( $productsList as $prod)
                            <tr>
                                <td>{{$prod->product_title}}</td>
                                <td>{{$prod->product_name}}</td>
                                <td>{{$prod->product_price}}</td>
                                <td>{{$prod->product_quantity}}</td>
                                <td>{{$prod->product_description}}</td>
                                <td>
                                    <a href="editproduct/{{ $prod->id}}">Edit</a>
                                    &nbsp;&nbsp; <a href="deleteproduct/{{ $prod->id}}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
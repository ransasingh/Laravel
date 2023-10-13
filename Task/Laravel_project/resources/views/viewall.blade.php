@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <a href="addproduct">Add Product</a>
                <!-- {{ $products }} -->
                <div class="card-body">
                    <h3 class="text-center">All Product</h3>
                    <table class="table table-striped">
                        <thead>

                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($products as $data)
                            <tr>
                                <td>{{$data->name}}</td>
                                <td>{{$data->price}}</td>
                                <td>{{$data->quantity}}</td>

                                <td>
                                    <a href="editproduct/{{ $data['id'] }}">Edit</a> &nbsp;&nbsp;
                                    <a href="deleteproduct/{{ $data['id'] }}">Delete</a>

                                </td>
                            </tr>
                            @endforeach













                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
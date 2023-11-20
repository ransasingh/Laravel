@extends('layouts.app')

@section('content')
<a href="Add">Add</a>
<div class="container">
    <!-- <div class="row justify-content-center"> -->
    <table class="table table-bordered">
            {{--$allproduct--}}
            <thead>
                <tr>
                    <th>product_title</th>
                    <th>product_decription</th>
                    <th>price</th>
                    <th>quantity</th>
                    <th>product_image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($allproduct as $data)
                <tr>
                    <td>{{ $data->product_title}}</td> 
                    <td>{{ $data->product_decription}}</td> 
                    <td>{{ $data->price}}</td> 
                    <td>{{ $data->quantity}}</td>
                    <td>  <img src="/upload/{{ $data->product_pic}}" width="80" alt="">
</td>
                    <td>
                        <a href="editproduct/{{ $data->id}}">Edit</a>
                      &nbsp;&nbsp;  <a href="deleteproduct/{{ $data->id}}">Delete</a>
</td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <a href="createproduct">Add Product</a>
                    <!-- {{ __('You are logged in!') }} -->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>product_name</th>
                                <th>product_discripation</th>
                                <th>product_price</th>
                                <th>product_quantity</th>
                                <th>action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($allProducts as $data)
                            <tr>
                                <td>{{ $data->product_name }}</td>
                                <td>{{ $data->product_discripation }}</td>
                                <td>{{ $data->product_price }}</td>
                                <td>{{ $data->product_quantity }}</td>
                                <td>
                                    <a href="editproduct/{{ $data->id }}">Edit</a><br>
                                    <a href="deleteproduct/{{ $data->id }}">Delete</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
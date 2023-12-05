@extends('layouts.homelayout')

@section('home')

<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div>{{$error}}</div>
                        @endforeach
                        @endif
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Signup</h3>
                        <form action="register" method="post">
                            @csrf

                            <div class="row">
                                <div class="col-md-8 mb-4">

                                    <div class="form-outline">
                                        <input type="text" id="name" name="name" class="form-control form-control-lg" placeholder="Enter Your User Name" />

                                    </div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-8 mb-4">

                                    <div class="form-outline">
                                        <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Enter Your Email" />

                                    </div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-8 mb-4">

                                    <div class="form-outline">
                                        <input type="password" id="Password" name="password" class="form-control form-control-lg" placeholder="Enter Your Password" />

                                    </div>


                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-8 mb-4">

                                    <div class="form-outline">
                                        <input type="password" id="password_confirm" name="password_confirm" class="form-control form-control-lg" placeholder="Enter Your Confirm Password" />

                                    </div>


                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-2 mb-4">


                                    <div class="form-outline">
                                        <button type="submit" class="btn btn-primary" value="Signup" name="Signup">Signup</button>

                                    </div>


                                </div>
                                <div class="col-md-2 mb-4">


                                    <div class="form-outline">
                                        <button type="submit" class="btn btn-danger" value="Canecl">Cancel</button>

                                    </div>


                                </div>




                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
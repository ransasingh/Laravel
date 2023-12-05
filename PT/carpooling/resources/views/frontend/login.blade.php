@extends('layouts.homelayout')

@section('home')

<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Login</h3>
                        <form>

                            <div class="row">
                                <div class="col-md-8 mb-4">

                                    <div class="form-outline">
                                        <input type="text" id="username" class="form-control form-control-lg" placeholder="Enter Your User Name" />

                                    </div>

                                </div>
                              
                            </div>
                            <div class="row">
                                <div class="col-md-8 mb-4">

                                    <div class="form-outline">
                                        <input type="password" id="Paassword" class="form-control form-control-lg" placeholder="Enter Your Password" />

                                    </div>
                                 

                                </div>
                              
                            </div>
                            <div class="row">
                                <div class="col-md-2 mb-4">

                 
                                    <div class="form-outline">
                                    <button type="submit" class="btn btn-primary" value="Login" name="Login">Login</button>

                                    </div>
                                 

                                </div>

                                <a href="signup">create a new account</a>
                                
                              
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
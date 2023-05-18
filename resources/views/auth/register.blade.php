@extends('layouts.app')
@section('title','Register')
@section('content')
<div class="authentication">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <form class="card auth_form" action="{{route('register')}}" method="post">
                    @csrf
                    <div class="header">
                        <img class="logo" src="{{asset('Assets/img/logo.svg')}}" alt="Company Logo">
                        <h5>Sign Up</h5>
                        <span>Register a new membership</span>
                    </div>
                    <div class="body">
                        <!-- <div class="input-group mb-3">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <a href="#name">
                                        <i class="fa-solid fa-user"></i>
                                    </a>
                                </span>
                            </div>
                        </div> -->
                        <div class="input-group mb-3">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <a href="#email">
                                        <i class="fa-solid fa-paper-plane"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Enter Password">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <a href="#name">
                                        <i class="fa-solid fa-lock"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                class="form-control" placeholder="Re-type Password">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <a href="#password_confirmation">
                                        <i class="fa-solid fa-lock"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                     
                        <button class="btn btn-primary btn-block waves-effect waves-light">SIGN UP</button>
                        <div class="signin_with mt-3">
                        Already have an account ? <a href="{{route('login')}}"> Login </a>
                        </div>
                    </div>
                </form>
                <div class="copyright text-center">
                    &copy;
                    <script>
                    document.write(new Date().getFullYear())
                    </script>,
                    <span><a href="templatespoint.net">Templates Point</a></span>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <img src="{{asset('Assets/img/signup.svg')}}" alt="Sign Up" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
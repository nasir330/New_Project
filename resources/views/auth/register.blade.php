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
                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Enter Name">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Enter Email">
                            <span class="input-group-text"><i class="zmdi zmdi-email"></i></span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Enter Password">
                            <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Re-type Password">
                            <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                        </div>
                        <div class="checkbox">
                            <input id="remember_me" type="checkbox">
                            <label for="remember_me">I read and agree to the <a href="javascript:void(0);">terms of
                                    usage</a></label>
                        </div>
                        <button class="btn btn-primary btn-block waves-effect waves-light">SIGN UP</button>
                        <div class="signin_with mt-3">
                            <a class="link" href="sign-in.html">You already have a membership?</a>
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
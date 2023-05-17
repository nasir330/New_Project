@extends('layouts.app')
@section('title','Login')
@section('content')

<div class="authentication">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <form class="card auth_form" action="{{route('login')}}" method="post">
                    @csrf
                    <div class="header">
                        <img class="logo" src="{{asset('Assets/img/logo.svg')}}" alt="Company Logo">
                        <h5>Log in</h5>
                    </div>
                    <div class="body">
                        <div class="input-group mb-3">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <a href="#email">
                                        <i class="fa-solid fa-envelope"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" id="password" name="password" class="form-control"
                                placeholder="Password">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <a href="#password">
                                        <i class="fa-solid fa-key"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="checkbox">
                            <input id="remember_me" type="checkbox">
                            <label for="remember_me">Remember Me</label>
                        </div>
                        <button class="btn btn-primary btn-block waves-effect waves-light">
                            SIGN IN
                        </button>
                        <div class="signin_with mt-3">
                           Don't have an account ? <a href="{{route('register')}}"> Create </a> here..
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
                    <img src="{{asset('Assets/img/signin.svg')}}" alt="Sign In" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
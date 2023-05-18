@extends('layouts.header')
@section('title','Add New Contacts')
@section('content')

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Add New Contacts</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active"> <a href="{{route('contacts.list')}}">
                                <i class="fa-solid fa-address-book"></i>
                                Contacts
                            </a>
                        </li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                            class="fa-solid fa-bars"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 d-flex justify-content-end">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i
                            class="fa-solid fa-arrows-left-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="col-auto">
                                <h2><strong>Add New Contacts</strong> </h2>
                            </div>
                            <div class="col-auto">
                                @if(session()->has('success'))
                                <div id="errorMsg" class="text-center p-1">
                                    {{session('success')}}
                                </div>
                                @endif
                            </div>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form action="{{route('add.contacts')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-3 col-md-6 mb-3">
                                        <p class="mb-0"> <b>Name</b> </p>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-3">
                                        <p class="mb-0"> <b>Email</b> </p>
                                        <input type="text" name="email" class="form-control"
                                            placeholder="Enter Email address">
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-3">
                                        <p class="mb-0"> <b>Phone</b> </p>
                                        <input type="text" name="phone" class="form-control"
                                            placeholder="Enter Phone number">
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-3">
                                        <p class="mb-0"> <b>User Type</b> </p>
                                        <select name="userType" class="form-control show-tick ms select2"
                                            data-placeholder="Select">
                                            <option></option>
                                            @foreach($userTypes as $key=> $userType)
                                            <option value="{{$userType->id}}">{{$userType->type}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-3">
                                        <p class="mb-0"> <b>Business Name</b> </p>
                                        <input type="text" name="company" class="form-control"
                                            placeholder="Enter Business Name">
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-3">
                                        <p class="mb-0"> <b>Address</b> </p>
                                        <input type="text" name="address" class="form-control"
                                            placeholder="Enter Address">
                                    </div>

                                    <div class="col-lg-3 col-md-6 mb-3">
                                        <p class="mb-0"> <b>User Photo</b> </p>
                                        <input type="file" name="photo" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 mb-3">
                                        <button type="submit"
                                            class="btn btn-primary btn-block waves-effect waves-light">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
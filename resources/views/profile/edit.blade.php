@extends('layouts.header')
@section('title','Dashboard')
@section('content')

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Profile Setting</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <a href="{{route('dashboard')}}">
                                <i class="fa-solid fa-home"></i>
                                Dashboard
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
            <div class="row">
                @if(session()->has('success'))
                <div class="alert-success d-flex justify-content-center">{{session('success')}}</div>
                @endif
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <form action="{{route('update.contacts')}}" method="POST">
                                @csrf
                                <div class="card mcard_3">
                                    <div class="body">
                                        <span id="photoEdit" class="photo-edit-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon fa-solid fa-camera p-2"></i>
                                            </a>
                                        </span>
                                        <img src="{{asset('')}}{{Auth::user()->contactsList->photo}}"
                                            class="rounded-circle shadow mb-4" alt="profile-image">
                                        <div class="mb-3">
                                            <input type="hidden" name="contactId"
                                                value="{{Auth::user()->contactsList->id}}">
                                            <input class="form-control mb-2" type="text" name="name"
                                                value="{{Auth::user()->contactsList->name}}">
                                        </div>
                                        <div class="mb-3">                                           
                                            <input class="form-control mb-2" type="text" name="name"
                                                value="{{Auth::user()->email}}">
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control mb-2" type="text" name="company"
                                                value="{{Auth::user()->contactsList->company}}">
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control mb-2" type="text" name="phone"
                                                value="{{Auth::user()->contactsList->phone}}">
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control mb-2" type="text" name="address"
                                                value="{{Auth::user()->contactsList->address}}">
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-8 col-md-12">
                            <div class="card">
                                <div class="body">
                                    <div class="card-header mb-3">
                                        <h5> Password update section</h5>
                                    </div>
                                    <x-input-error :messages="$errors->updatePassword->get('current_password')"
                                        style="list-style:none;" class="text-danger mt-2" />
                                    <x-input-error :messages="$errors->updatePassword->get('password')"
                                        style="list-style:none;" class="text-danger mt-2" />
                                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')"
                                        style="list-style:none;" class="text-danger mt-2" />
                                    <form action="{{route('password.update')}}" method="post">
                                        @csrf
                                        @method('put')
                                        <div class="mb-3">
                                            <label for="current_password">Current Password</label>
                                            <div class="input-group">
                                                <input type="hidden" name="id"
                                                    value="{{Auth::user()->contactsList->id}}">
                                                <input type="password" name="current_password" class="form-control"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="password">New Password</label>
                                            <div class="input-group">
                                                <input type="password" name="password" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="password_confirmation">Confirm Password </label>
                                            <div class="input-group">
                                                <input type="password" name="password_confirmation" class="form-control"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary">Update</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form action="{{route('update.contacts.photo')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload Photo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <input type="hidden" name="contactId" value="{{Auth::user()->contactsList->id}}">
                    <input type="file" name="photo" class="form-control" required>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
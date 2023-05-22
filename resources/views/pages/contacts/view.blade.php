@extends('layouts.header')
@section('title','Dashboard')
@section('content')

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Profile</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <a href="{{route('contacts.list')}}">
                                <i class="fa-solid fa-home"></i>
                                Contacts List
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
                <div class="col-lg-4 col-md-12">
                    <div class="card mcard_3">
                        <div class="body">
                            @if(empty($contactDetails->photo))
                            <span class="photo-edit-btn">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="icon fa-solid fa-camera p-2"></i>
                                </a>
                            </span>
                            @else
                            <a href="profile.html">
                                <img src="{{asset('')}}{{$contactDetails->photo}}" class="rounded-circle shadow "
                                    alt="profile-image">
                            </a>
                            @endif
                            <h4 class="m-t-10">{{$contactDetails->name}}</h4>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card-header">
                                        <span>{{$contactDetails->company}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="body">
                            <small class="text-muted">Phone: </small>
                            <p><a href="tel:{{$contactDetails->phone}}">{{$contactDetails->phone}}</a></p>
                            <hr>
                            <small class="text-muted">Email address: </small>
                            <p>{{$contactDetails->users->email}}</p>
                            <hr>
                            <small class="text-muted">Address: </small>
                            <p>{{$contactDetails->address}}</p>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Transactions</strong> Overview</h2>
                        </div>
                        <div class="body">

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
            <form action="#" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload Photo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <input type="hidden" name="memberId" value="{{Auth::user()->id}}">
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
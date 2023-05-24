@extends('layouts.header')
@section('title','Add New Contacts')
@section('content')

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Add New Purchase</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active"> <a href="{{route('purchase.list')}}">
                                <i class="fa-solid fa-address-book"></i>
                                Purchase List
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
                        </div>
                        <div class="body">
                            <!-- Search contact start -->
                            <form id="selectContact-form" action="#">
                                <div class="row mb-3">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="input-group mb-3">
                                            <input id="searchContact" type="text" name="searchContact"
                                                class="form-control">
                                            <button id="btn-selectContact"
                                                class="btn-primary input-group-text">Select</button>
                                        </div>
                                        <div id="search-name">

                                        </div>
                                    </div>
                                    <div id="contactsData" class="col-lg-4 col-md-6">

                                    </div>
                                </div>
                            </form>
                            <!-- Search contact end -->

                            <form id="add-purchase-form" action="#">
                                <div class="row clearfix">
                                    <div class="col-lg-3 col-md-6 mb-3">
                                        <p class="mb-0"> <b>Description</b> </p>
                                        <input id="sellerId" type="hidden" name="sellerId">
                                        <input type="text" name="description" class="form-control"
                                            placeholder="Item description">
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-3">
                                        <p class="mb-0"> <b>Item Rate</b> </p>
                                        <input type="text" name="itemRate" class="form-control"
                                            placeholder="Enter Item rate">
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-3">
                                        <p class="mb-0"> <b>Item Quantity</b> </p>
                                        <input type="text" name="itemQty" class="form-control"
                                            placeholder="Enter Item Quantity">
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-3">
                                        <p class="mb-0"> <b style="color:transparent;">blank</b> </p>
                                        <div class="input-group">
                                            <button id="add-purchaseItem" class="btn-primary input-group-text">Add
                                                Items</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- purchase item list start -->
                        <div class="table-responsive">
                            <table
                                class="table table-bordered table-striped table-hover dataTable js-exportable text-nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Description</th>
                                        <th>#Item Rate</th>
                                        <th>Item Quantity</th>
                                        <th>Total</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody id="purchased-items">

                                </tbody>
                            </table>
                        </div>
                        <!-- purchase item list end -->
                        <form action="{{route('submit.purchase')}}" method="post">
                            @csrf
                            <div class="col-lg-3 col-md-4 mb-2 table-responsive float-end">
                                <!-- total calculation start -->
                                <table
                                    class="table table-bordered table-striped table-hover dataTable js-exportable text-nowrap">
                                    <tbody id="calculation">

                                    </tbody>
                                </table>
                                <!-- total calculation end -->
                            </div>
                            <div class="col-lg-3 col-md-4 mb-3">
                                <div class="input-group">
                                    <button type="submit" class="btn-primary input-group-text">Submit Purchase</button>
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
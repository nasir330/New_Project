@extends('layouts.header')
@section('title','Dashboard')
@section('content')

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Purchase Details</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active"> <a href="{{route('purchase.list')}}">
                                <i class="fa-solid fa-home"></i>
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
                            <h2><strong>Contacts list</strong> </h2>
                            @if(session()->has('success'))
                            <div class="alert-success d-flex justify-content-center">{{session('success')}}</div>
                            @endif
                            @if(session()->has('delete'))
                            <div class="alert-danger d-flex justify-content-center">{{session('delete')}}</div>
                            @endif
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Seller</th>
                                            <th>Date</th>
                                            <th>Invoice No.</th>
                                            <th>Description</th>
                                            <th>Rate</th>
                                            <th>Qty.</th>
                                            <th>Total.</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($purchaseDetails as $key => $item)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$item->contacts->name}}</td>
                                            <td>{{Carbon\Carbon::parse($item->purchaseDate)->toFormattedDateString()}}
                                            </td>
                                            <td>{{$item->invoiceId}}</td>
                                            <td>{{$item->description}}</td>
                                            <td>{{$item->itemRate}}</td>
                                            <td>{{$item->itemQty}}</td>
                                            <td>{{$item->total}}</td>
                                            <td>
                                            <a class="invoice-remove text-danger"
                                                    href="{{route('remove.purchase.item',['id'=>$item->id])}}">X</a>
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
        </div>
    </div>
</section>

@endsection
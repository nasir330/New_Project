@extends('layouts.app')
@section('title','Aero Admin Template')
@section('content')

@if(empty($appData))
@include('auth.register')
@else
@include('auth.login')
@endif
@endsection
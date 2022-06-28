@if(Auth::User()->role=='admin')
@extends('layouts.template')

@section('content')
@include('users.table')
@endif
@endsection

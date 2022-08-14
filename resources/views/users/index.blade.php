@if(Auth::User()->role=='admin')
@extends('layouts.template')

@section('content')
@include('users.table')
@endsection

@elseif(Auth::User()->role=='guardian')
@extends('layouts.ftracktemp')


@include('users.table')
@endif


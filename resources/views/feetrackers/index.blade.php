@if(Auth::User()->role=='guardian')
@extends('layouts.ftracktemp')


@include('feetrackers.table')


@elseif(Auth::User()->role=='admin' )
@extends('layouts.template')

@section('content')
@include('feetrackers.table')
@endsection

@endif
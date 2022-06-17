@if(Auth::User()->role=='admin')

@extends('layouts.template')

@section('content')
@include('subjects.table')
@endsection
@elseif(Auth::User()->role=='guardian')
@extends('layouts.ftracktemp')
@include('subjects.table')
@endif
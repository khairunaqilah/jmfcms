@if(Auth::User()->role=='guardian')
@extends('layouts.ftracktemp')


@include('students.table')


@elseif(Auth::User()->role=='admin' )
@extends('layouts.template')

@section('content')
@include('students.table')
@endsection

@endif
@if(Auth::User()->role=='admin')

@extends('layouts.template')

@section('content')
@include('subjects.table')
@endsection

@elseif(Auth::User()->role=='guardian')
@extends('layouts.ftracktemp')
@include('subjects.table')

@elseif(Auth::User()->role=='teachers')
@extends('layouts.cikgu')

@section('content')
@include('subjects.table')
@endsection

@endif
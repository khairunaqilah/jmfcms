@if(Auth::User()->role=='guardian')
@extends('layouts.ftracktemp')


@include('students_subjects.table')


@elseif(Auth::User()->role=='teacher' )
@extends('layouts.cikgu')

@section('content')
@include('students_subjects.table')
@endsection

@endif
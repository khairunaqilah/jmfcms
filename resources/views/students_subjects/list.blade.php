@if(Auth::User()->role=='guardian')
@extends('layouts.ftracktemp')


@include('students_subjects.table2')


@elseif(Auth::User()->role=='teacher' )
@extends('layouts.cikgu')

@section('content')
@include('students_subjects.table2')
@endsection

@endif
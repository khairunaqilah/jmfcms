@if(Auth::User()->role=='teacher')
@extends('layouts.cikgu')


@include('lessonschedules.table')
@elseif(Auth::User()->role=='guardian')
@extends('layouts.ftracktemp')


@include('lessonschedules.table')
@endif
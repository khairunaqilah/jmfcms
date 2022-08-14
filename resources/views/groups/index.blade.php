@if(Auth::User()->role=='teacher')
@extends('layouts.cikgu')
@include('groups.table')
@elseif(Auth::User()->role=='guardian')
@extends('layouts.ftracktemp')
@include('groups.table')
@endif
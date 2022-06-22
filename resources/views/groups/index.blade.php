@if(Auth::User()->role=='teacher')
@extends('layouts.cikgu')


@include('groups.table')
@endif
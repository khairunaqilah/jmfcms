@if(Auth::User()->role=='teacher')
@@extends('layouts.template')

@elseif(Auth::User()->role=='admin')
extends('layouts.template')

@elseif(Auth::User()->role=='guardian')
@extends('layouts.jmftemp')
@endsection
@endif
@extends('layouts.page')

@section('content')
    <h1 style="font-size:30pt;position:absolute;
        top:50%;bottom:45%;left:45%;right:45%;">
        Bienvenue {{ Auth::user()->name }} !    
    </h1>
@endsection
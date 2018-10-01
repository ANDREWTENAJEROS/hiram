@extends('layouts.app')

@section('content')
@include('inc.navbarcss')
    @if(!Auth::guest())
        <div class="jumbotron text-center">
            <h1>{{$title}}</h1>
            <p>Rental Platform for Students</p>
        </div>
    @else   
     <div class="jumbotron text-center">
            <h1>{{$title}}</h1>
            <p> Rental Platform for Students </p>
            </br>
        <div class="row">
        <div class="col s12 m6"  > <a class="login100-form-btn" href="/login" >Login</a></div>
        <div class="col s12 m6"  ><a class="login100-form-btn" href="/register"> Register</a></div>
<!--             
            <a class="login100-form-btn" href="/login"><div class="col s12 m3" href="/login"> Download for Android</div></a>
            <a class="login100-form-btn" href="/login"><div class="col s12 m3" href="/login">Download for IOS</div></a> -->
        </div>
        </div>
    @endif
@endsection
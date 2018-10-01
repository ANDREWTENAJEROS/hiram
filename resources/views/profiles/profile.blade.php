@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="../../../vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../../fonts/themify/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="../../../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../../../fonts/elegant-font/html-css/style.css">
	<link rel="stylesheet" type="text/css" href="../../../vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../../../vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="../../../vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="../../../vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../../../vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="../../../vendor/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="../../../vendor/lightbox2/css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="../../../css/util.css">
	<link rel="stylesheet" type="text/css" href="../../../css/main.css">
    <link rel="stylesheet" type="text/css" href="../../../vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../../vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../../../vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="../../../vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../../../css/util.css">
    <link rel="stylesheet" type="text/css" href="../../../css/main.css">


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                <!-- <div class="card-header">Your Items</div> -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach($posts as $post)
                    <h3>This is {{$post->user->name}}!</h3> </br>
                    @break
                    @endforeach
                        <div class="row">
                                <div class="col s12 m3"> <a href="/posts/create" class="header-wrapicon1 dis-block">
					            	<img src="../../images/icons/icon-lend.png" class="header-icon1" alt="edit profile"></br>lend item</a> 
                                </div>
                                <div class="col s12 m3"> <a href="/about" class="header-wrapicon1 dis-block">
					                <img src="../../images/icons/icon-report-01.png" class="header-icon1" alt="Report"> </br>report user </a> 
                                </div><div class="col s12 m3"> <a href="{{ route('logout') }}" class="header-wrapicon1 dis-block">
						<img src="../../images/icons/icon-logout.png" href="{{ route('logout') }}" class="header-icon1" alt="Logout"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();"> </br>logout
					</a> </div>
                        </div>
                        @if(count($posts) > 0)  
                        </br></br></br>
                        <div class="row justify-content-center">
                            <table class="table">
                                <tr>
                                    <th>{{$post->user->name}}'s items</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach($posts as $post)
                                    <tr>
                                        <td><a href="/posts/{{$post->id}}"><h6>{{$post->title}}</h6></a></td>
                                        <td><a href="/posts/{{$post->id}}/" >View</a></td>
                                    </tr>
                                @endforeach 
                            </table>
                        </div>   
                        
                        @else
                            </br>
                          <p>You have not lend any items yet.</p>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
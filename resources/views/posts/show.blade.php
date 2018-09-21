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


    <!-- <a href="/posts" class="btn btn-dark">Go back</a> -->
    <div class="row">
            <div class="col s12 m6">
            </br>
            <!-- <img src="{{ URL::to('/') }}/storage/cover_images/{{$post->cover_image}}" alt="{{$post->title}}" /> -->
            <img src="/storage/cover_images/{{$post->cover_image}}" />
                <!-- <img class="responsive-image" src="URL::to('/storage/cover_images/{{$post->cover_image}}')"> -->
                 </br>
            </div>
        <br><br>
        <div class="col s12 m6">
            </br>
            <h1>{{$post->title}}</h1>
            </br>
            <div> 
                    {!!$post->body!!}
                <hr><small>Price per hour {{$post->price}}  Price per day {{$post->price}}</small>
                </br>
                <small>Category {{$post->category}}</small>
            </div>
            <hr>
            <small>Terms and Conditions: </br> {{$post->condition}}</small>
            </hr>
            <hr>
            <small>Uploaded on {{$post->created_at}} </br> by {{$post->user->name}}</small>
            <hr>
            </br>
            <small>image loc: /storage/cover_images/{{$post->cover_image}}</small>

        </div>
    </div>
    @if(!Auth::guest())
     
        @if(Auth::user()->id == $post->user->id)

            <div class="row">
                
                <div class="col s12 m6">
                    <!-- {{Form::submit('EDIT', ['class' => 'login100-form-btn'])}} -->
                    <a href="/posts/{{$post->id}}/edit">
                        <button class="login100-form-btn">
                            EDIT
                        </button>
                    </a>
                </div>

                <div class="col s12 m6">
                        <!-- {{Form::submit('DELETE', ['class' => 'login100-danger-btn'])}} -->
                        <a>
                            {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST'])!!} 
                            <button class="login100-danger-btn">
                                {{Form::hidden('_method', 'DELETE')}}
                                DELETE
                                {!!Form::close()!!}
                            </button>
                        </a>
                </div>

            </div>

            </br> </br>
         
        @else 
        <br>
            <div class="row">

                <div class="col s12 m6">
                    <a href="tel:{{$post->user->mobile}}">
                        <button class= "login100-form-btn">
                            CALL
                        </button>
                    </a>
                </div>
                
                <div class="col s12 m6">
                    <a href="sms:{{$post->user->mobile}}?body=hi {{$post->user->name}}, This is {{(Auth::user()->name)}} and I am interested on renting your {{$post->title}}">
                        <button class= "login100-form-btn">
                            MESSAGE
                        </button>
                    </a>
                </div>
                
            </div> 
            <br>
            <div class="col s12 m6 centered" style="width: 80%">
                
                <a href="/about">
                    <button class= "login100-form-btn">
                        REPORT
                    </button>
                </a>
            </div>
            </br> </br>
        @endif
    @else
    </br>
            <div class="col s12 m6">
                    <a href="/login">
                        <button class= "login100-form-btn centered" style=" width: 300px;">
                            Login to Hiram to rent
                        </button>
                    </a>
                </div>
                </br> </br>
    @endif    
@endsection
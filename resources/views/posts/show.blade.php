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

    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=2008481492505313&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <div class="row">
            <div style="margin: 0 auto;" class="col s12 m6">
            </br>
        <img  style="width: 100%; margin: 0 auto;" src="https://s3-ap-southeast-1.amazonaws.com/hiramstorage/{{$post->cover_image}}" />

                 </br>
            </div>
        <br><br>
        <div class="col s12 m6" style=" margin: 0 auto;">
            </br>
            <h1>{{$post->title}}</h1>
            </br>
            <div> 
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
            <div class="fb-like" style="width:100%;" data-href="http://hiram.herokuapp.com/posts/{{$post->id}}" data-layout="button" data-action="recommend" data-size="large" data-show-faces="true" data-share="true"></div>
            <div class="fb-comments" style="width:100%;" data-href="http://hiram.herokuapp.com/posts/{{$post->id}}" data-numposts="4"></div>

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
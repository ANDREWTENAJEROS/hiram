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

    <!-- <a href="/posts" class="btn btn-dark">Go back</a> -->
    <div class="row">
            <div class="col s12 m6">
            </br>
            <!-- <img src="{{ URL::to('/') }}/storage/cover_images/{{$post->cover_image}}" alt="{{$post->title}}" /> -->
            <!-- <img src="/storage/cover_images/{{$post->cover_image}}" /> -->
            <img  style="width: 300px;" src="https://vfveqg.bn.files.1drv.com/y4mOKO9kyGQPENwvxIK_rFd5Wy2STZ9A-3n-zG4Nh7MxNqCSXDXd74tkSwkSGcmi1fr5ThvLe5n4ecCx1x76q8FlFlGB889N2HfX2PbC2npII847MYovW0oKpAWY4t8Lo7ugy48vgLeKNd1TGslJ7lK2dhfhWa4acdCLOKXFCP_vWhrkM0Y2ooLnbrVfTjCbNkt-sEYEpJil9fWGE2B12EMIw?width=1250&height=830&cropmode=none" />

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
                <hr><small>Price per hour {{$post->price}} Price per day {{$post->price}}</small>
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
            <div class="fb-like" data-href="http://hiram.herokuapp.com/posts/{{$post->id}}" data-layout="button" data-action="recommend" data-size="large" data-show-faces="true" data-share="true"></div>
            <div class="fb-comments" data-href="http://hiram.herokuapp.com/posts/{{$post->id}}" data-numposts="4"></div>

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
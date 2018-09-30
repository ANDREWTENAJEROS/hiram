@extends('layouts.app')

@section('content')

    <link rel="icon" type="image/png" href="images/icons/favicon.png"/> 
	<link rel="stylesheet" type="text/css" href="../../vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../fonts/themify/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="../../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../../fonts/elegant-font/html-css/style.css">
	<link rel="stylesheet" type="text/css" href="../../vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../../vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="../../vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="../../vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../../vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="../../vendor/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="../../vendor/lightbox2/css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/util.css">
	<link rel="stylesheet" type="text/css" href="../../css/main.css">
    <link rel="stylesheet" type="text/css" href="../../vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">


    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'input100','required' => 'required', 'placeholder' => 'Title'])}}
       
                <div class="input-100">
                </br>
                {{Form::label('body', 'Description and specifications')}}
                {{Form::textarea('body', $post->body, ['rows' => '3', 'required' => 'required','class' => 'input100', 'data-validate-minlength' => '40', 'data-validate-mexlength' => '700', 'placeholder' => 'Description'])}}
                </div>
                <div class="input-100">
                </br>
                {{Form::label('location', 'Location')}}
                {{Form::text('location', $post->location, ['class' => 'input100','required' => 'required', 'placeholder' => 'City/zipcode'])}}
                </div>
                </br>
                <h3>Rental Rates</h3>	

                <div class="row">
                        <div class="col s12 m6">
                                {{Form::label('price', 'Price per hour')}}
                                {{Form::text('price_per_hour', $post->price_per_hour, ['class' => 'input100','required' => 'required', 'input type'=>'number', 'placeholder' => '₱'])}}
                        </div>
                        <div class="col s12 m6">
                                {{Form::label('price', 'Price per day')}}
                                {{Form::text('price_per_day', $post->price_per_day , ['class' => 'input100','required' => 'required', 'input type'=>'number', 'placeholder' => '₱'])}}
                        </div>
                        </div>       
                <div class="input-100">
                </br>
                {{Form::label('Terms and Conditions', 'Terms and Conditions')}}
                {{Form::textarea('condition', $post->condition, ['rows' => '3', 'required' => 'required', 'class' => 'input100', 'data-validate-minlength' => '40', 'data-validate-mexlength' => '1800', 'placeholder' => 'Use of item, condition of item, return of item, charges and payments, general provisions, privacy and protection'])}}
                </div>
                <div class="input-100">
                </br>
                {{Form::label('category', 'Category')}}
                    <div class="row">
                        <div class="col s12 m3">
                        {{ Form::radio('category', 'Books and references' , false) }}Books and references
                        </div>
                        <div class="col s12 m3">
                        {{ Form::radio('category', 'Devices and instruments' , false) }}Devices and instruments
                        </div>
                        <div class="col s12 m3">
                        {{ Form::radio('category', 'Apparel and Accesories' , false) }}Apparel and Accesories
                        </div>
                        <div class="col s12 m3">
                        {{ Form::radio('category', 'General Supplies' , true) }}General Supplies
                        </div>
                    </div>
                </div>
                </br>
                <center>
                    <div>
                    <div class="row">
                                <div class="col s12 m6">
                                
                                 Choose an image (Max file size: 1mb)
                                 </br>
                                 Choose at least one image 
                                          </br></br>
                                 </div>
                                 <div class="col s12 m6">

                                 <ul>

                                         <li>                                 {{Form::file('cover_image', ['required' => 'required'])}}

                                         </li>
                                          </br>
                                         <li>                                 {{Form::file('image1')}}

                                         </li>
                                         </br>
                                         <li>                                 {{Form::file('image2')}}

                                         </li>
                                 </ul>
                                 </div>
                                
                        </div>
                    </div>
                </center>
                </br>
                {{Form::hidden('_method', 'PUT')}}
                {{Form::submit('Submit', ['class' => 'login100-form-btn'])}}
            {!! Form::close() !!}
@endsection
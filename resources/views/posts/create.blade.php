@extends('layouts.app')

@section('content')

    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <div class="jumbotron text-center">
        <h1>Upload Product to Lend</h1>
        
        {!! Form::open(['action' => 'PostController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                {{-- <div>
                <form action="/action_page.php">
                <input type="file" name="pic" accept="image/*">
                </form>
                
                </div> --}}
                <div class="input-100">
                </br>
                {{Form::label('title', 'What are item are you lending?')}}
                {{Form::text('title', '', ['class' => 'input100', 'placeholder' => 'Ex: 360 Pin Solderless Breadboard'])}}
                </div>

                <div class="input-100">
                {{Form::label('body', 'Description and specifications')}}
                {{Form::textarea('body', '', ['rows' => '3', 'class' => 'input100', 'data-validate-minlength' => '40', 'data-validate-mexlength' => '700', 'placeholder' => 'Description'])}}
                </div>
                </br>
                <h3>Rental Rates</h3>	

                <div class="row">
                        <div class="col s12 m6">
                                {{Form::label('price', 'Price per hour')}}
                                {{Form::text('price', '', ['class' => 'input100', 'input type'=>'number', 'placeholder' => '₱'])}}
                        </div>
                        <div class="col s12 m6">
                                {{Form::label('price_day', 'Price per day')}}
                                {{Form::text('price', '', ['class' => 'input100', 'input type'=>'number', 'placeholder' => '₱'])}}
                        </div> 
                </div>
                <div class="input-100">
                
                {{Form::label('Terms and Conditions', 'Terms and Conditions')}}
                {{Form::textarea('condition', '', ['rows' => '3', 'class' => 'input100', 'data-validate-minlength' => '40', 'data-validate-mexlength' => '1800', 'placeholder' => 'Use of item, condition of item, return of item, charges and payments, general provisions, privacy and protection'])}}
                </div>
                <div class="input-100">
                        {{Form::label('category', 'Category')}}
                        {{Form::text('category', '', ['class' => 'input100', 'placeholder' => 'Category'])}}
                </div>
                </br>
                <div >
                         <div class="row">
                                 <div class="col s12 m6">
                                 {{Form::file('cover_image' , ['class' => ''])}}
                                 </div>
                                 <!-- <div class="col s12 m6">
                                 {{Form::file('cover_image' , ['class' => ''])}}
                                 </div> -->
                        </div>

               
                </div>
                        </br>
                <div class="form-group">
                        {{Form::submit('Lend Item', ['class' => 'login100-form-btn'])}}
                        {!! Form::close() !!}
                </div>
        </div>
@endsection
@extends('layouts.app')

@section('content')
@include('inc.navbarcss1')

    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['ProfileController@update', $user->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            <h3>{{$user->name}}</h3> </br></br>
            {{Form::label('mobile', 'Mobile Phone')}}
            {{Form::text('mobile', $user->mobile, ['class' => 'input100', 'input type' => 'number', 'required' => 'required', 'placeholder' => '09xxxxxxxxx'])}}
        </div>
        <div class="input-100">
            </br>
            {{Form::label('email', 'Email')}}
            {{Form::text('email', $user->email, ['required' => 'required', 'input type' => 'text', 'class' => 'input100', 'placeholder' => 'Email'])}}
        </div>
        <div class="input-100">
            </br>
            {{Form::label('address', 'Address')}}
            {{Form::text('address', $user->address, ['class' => 'input100','required' => 'required', 'placeholder' => 'Address'])}}
        </div>
        </br>
        <div class="row">
            <div class="col s12 m6">
                {{Form::label('birthday', 'Birthday')}}
                {{Form::text('birthday', $user->birthday, ['class' => 'input100','required' => 'required', 'type'=>'date',
                'placeholder' => 'MM/DD/YYYY', 'style' => 'width:80%; padding-left: 25px;padding-right: 20px;'])}}
            </div>
        </div>
        <div class="input-100">
            </br>
            {{Form::label('sex', 'Sex')}}
            <div class="row">
                    <div class="col s12 m3">
                    {{ Form::radio('sex', 'Mail' , false) }}Male
                    </br>
                    {{ Form::radio('sex', 'Female' , false) }}Female
                    </div>
            </div>
        </div>
        </br>
        <div >
            <div class="row">
                <div class="col s12 m6">
                    <ul>
                        <li>                                 
                            {{Form::file('profile_image', ['require' => 'required'])}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </br>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'login100-form-btn'])}}
    </br> </br>
            {!! Form::close() !!}
@endsection
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
                            {{Form::file('profile_image')}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </br>

        <div class="row">
            <div class="col m3 m6">
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Submit', ['class' => 'login100-form-btn'])}}
                    </br> </br>
                    {!! Form::close() !!}
            </div>
            
             <!-- Button trigger modal -->
             <div class="col s12 m6">
                    <a>
                    <button type="button" class="login100-danger-btn" data-toggle="modal" data-target="#exampleModal">
                            Delete
                    </button>
                    </a>
            </div>
                    
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete Profile</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            Are your sure you want to delete your Profile?
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            {!!Form::open(['action' => ['ProfileController@destroy', $user->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
                            </div>
                    </div>
                    </div>
            </div>
        </div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">Your Items</div> -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Hi {{(Auth::user()->name)}}!</h3> </br>
                        <div class="row">
                                <div class="col s12 m3"> <a href="/posts/create" class="header-wrapicon1 dis-block">
					            	<img src="images/icons/icon-lend.png" class="header-icon1" alt="edit profile"></br>lend item</a> 
                                </div>
                                <div class="col s12 m3"> <a href="/dashboard" class="header-wrapicon1 dis-block">
					            	<img src="images/icons/icon-header-01.png" class="header-icon1" alt="edit profile"></br>edit profile </a> 
                                </div>
                                <div class="col s12 m3"> <a href="/about" class="header-wrapicon1 dis-block">
					                <img src="images/icons/icon-report-01.png" class="header-icon1" alt="Report"> </br>report user </a> 
                                </div><div class="col s12 m3"> <a href="{{ route('logout') }}" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-logout.png" href="{{ route('logout') }}" class="header-icon1" alt="Logout"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();"> </br>logout
					</a> </div>


                        </div>
                        @if(count($posts) > 0)  
                        </br></br></br>
                        <div class="row justify-content-center">
                            <table class="table">
                                <tr>

                                    <th>Your items</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach($posts as $post)
                                    <tr>
                                        <!-- <td>{{$post->title}}</td> -->
                                        <td><a href="/posts/{{$post->id}}"><h4>{{$post->title}}</h4></a></td>

                                        <td><a href="/posts/{{$post->id}}/edit" class="login100-form-btn">Edit</a></td>
                                        <td>
                                            {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('Delete', ['class' => 'login100-danger-btn'])}}
                                            {!!Form::close()!!}
                                        </td>
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
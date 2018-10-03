@extends('layouts.app')

@section('content')
@include('inc.navbarcss')
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
                            <img style=" margin: 0 auto; " width="100" lenght="100" src="https://s3-ap-southeast-1.amazonaws.com/hiramstorage/{{$post->user->profile_image}}"  alt=""/>
                        </br></br>
                            @break
                    @endforeach
                    <h3>Hi {{(Auth::user()->name)}}!</h3> </br>
                        <div class="row">
                                <div class="col s12 m3"> <a href="/posts/create" class="header-wrapicon1 dis-block">
					            	<img src="images/icons/icon-lend.png" class="header-icon1" alt="lend item"></br>lend item</a> 
                                </div>                               
                                <div class="col s12 m3"> <a href="/profiles/{{auth()->user()->id}}/edit" class="header-wrapicon1 dis-block">
                                    <img src="images/icons/icon-header-01.png" class="header-icon1" alt="edit profile"></br>edit profile </a> 
                                </div>
                                <div class="col s12 m3"> <a href="{{ route('logout') }}" class="header-wrapicon1 dis-block">
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
                                        <td><a href="/posts/{{$post->id}}"><h6>{{$post->title}}</h6></a></td>
                                        <td><a href="/posts/{{$post->id}}/edit">Edit</a></td>
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
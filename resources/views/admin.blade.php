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
                        <img style=" margin: 0 auto; " width="100" lenght="100" src="https://s3-ap-southeast-1.amazonaws.com/hiramstorage/{{(Auth::user()->profile_image)}}" onerror="this.onerror=null;this.src='https://static.listionary.com/core/img/default-user.png';"  alt=""/>
                        </br></br>
                    <h3>Hi {{(Auth::user()->name)}}!</h3> </br>
                        <div class="row">                           
                            <div class="col s12 m3"> <a href="{{ route('logout') }}" class="header-wrapicon1 dis-block">
                                <img src="images/icons/icon-logout.png" href="{{ route('logout') }}" class="header-icon1" alt="Logout"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"> </br>logout </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
                    </div>

                        </div>
                        @if(count($users) > 0)  
                        </br></br></br>
                        <strong> <h3>User Profile</h3> </strong>
                        </br>
                        <div class="row justify-content-center">
                            <table class="table">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile Number</th>
                                </tr>
                                @foreach($users as $user)
                                    <tr>
                                        @if($user->email !== "admin@admin.com")
                                            <td><a href="/admin/{{$user->id}}"><h6>{{$user->name}}</h6></a></td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->mobile}}</td>
                                        @endif
                                    </tr>
                                @endforeach 
                            </table>
                        </div>   
                        
                        @else
                            </br>
                          <p>No User Profile yet</p>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
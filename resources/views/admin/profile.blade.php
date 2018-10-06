@extends('layouts.app')

@section('content')
@include('inc.navbarcss1')

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
                        <img style=" margin: 0 auto; " width="100" lenght="100" src="https://s3-ap-southeast-1.amazonaws.com/hiramstorage/{{$post->user->profile_image}}" />
                        </br></br>
                        <h3>{{$post->user->name}}'s Profile</h3> </br>
                        @break
                    @endforeach
                    <div class="row">
                        {{-- Delete Modal --}}
                        <!-- Button trigger modal -->
                        {{-- <div class="col s12 m6"> --}}
                            <div  data-toggle="modal" data-target="#exampleModal" class="col s12 m3"> <a  data-toggle="modal" data-target="#exampleModal" href="/profiles/{{auth()->user()->id}}/edit" class="header-wrapicon1 dis-block">
                                <img src="../../images/icons/icon-header-01.png" class="header-icon1" alt="edit profile"></br>delete profile </a> 
                            </div>
                        {{-- </div> --}}
                                
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
                                        Are your sure you want to delete this Profile?
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        {!!Form::open(['action' => ['ProfileController@destroy', $post->user_id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                        </div>
                                </div>
                                </div>
                            </div>
                            {{-- end modal --}}
                        <div class="col s12 m3"> <a href="{{ route('logout') }}" class="header-wrapicon1 dis-block">
                            <img src="../../images/icons/icon-logout.png" href="{{ route('logout') }}" class="header-icon1" alt="Logout"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> </br>logout </a> 
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                            </form>
                    </div>
            </div>
                        @if(count($posts) > 0)  
                        </br></br></br>
                        <strong> <h3>{{$post->user->name}}'s items</h3></strong>
                        <div class="row justify-content-center">
                            <table class="table">
                                <tr>
                                    <th>Item's name</th>
                                    <th>Image</th>
                                    <th>Report</th>
                                </tr>
                                @foreach($posts as $post)
                                    <tr>
                                        <td><a href="/admin/{{$post->user->id}}/{{$post->id}}"><h6>{{$post->title}}</h6></a></td>
                                        <td> <img style=" margin: 0 auto; " width="100" lenght="100"
                                            src="https://s3-ap-southeast-1.amazonaws.com/hiramstorage/{{$post->cover_image}}" /></td>
                                        <td>{{$post->report_id}}</td>
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
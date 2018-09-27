@extends('layouts.app')

@section('content')

    <h1>{{$post->user_id}}</h1>

    {{-- @if(count($posts) > 0)
        <h1>{{$post->id}},</h1>
        <h1>{{$post->user->name}}</h1>
    @else
        <p class="centered">No posts found</p>
    @endif	 --}}

@endsection

@extends('layouts.app')

@section('content')

    @if(count($posts) > 0)

        @foreach($posts as $post)
            <h1>{{$post->user_id}} post {{$post->id}}</h1>
        @endforeach

    @else
        <h3>No post found</h3>
    @endif
    
@endsection
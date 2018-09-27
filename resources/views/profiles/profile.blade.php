@if(count($posts) > 0)
    
<h1>if</h1>

    @foreach($posts as $post)
        <h1>{{$post->user_id}}</h1>
    @endforeach

@else
<h3>No post found</h3>
@endif

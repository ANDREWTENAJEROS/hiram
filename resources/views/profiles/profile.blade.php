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
                        <img style=" margin: 0 auto; " width="100" lenght="100" onerror="this.onerror=null;this.src='https://static.listionary.com/core/img/default-user.png';"  src="https://s3-ap-southeast-1.amazonaws.com/hiramstorage/{{$post->user->profile_image}}" />
                        </br></br>
                        <h3>This is {{$post->user->name}}!</h3> </br>
                        @break
                    @endforeach
                  
<script type="text/javascript">(function(d, t, e, m){
    
    // Async Rating-Widget initialization.
    window.RW_Async_Init = function(){
                
        RW.init({
            huid: "416621",
            uid: "ae1f0e2b22bff82cbade96615846e26c",
            options: { "style": "oxygen" } 
        });
        RW.render();
    };
        // Append Rating-Widget JavaScript library.
    var rw, s = d.getElementsByTagName(e)[0], id = "rw-js",
        l = d.location, ck = "Y" + t.getFullYear() + 
        "M" + t.getMonth() + "D" + t.getDate(), p = l.protocol,
        f = ((l.search.indexOf("DBG=") > -1) ? "" : ".min"),
        a = ("https:" == p ? "secure." + m + "js/" : "js." + m);
    if (d.getElementById(id)) return;              
    rw = d.createElement(e);
    rw.id = id; rw.async = true; rw.type = "text/javascript";
    rw.src = p + "//" + a + "external" + f + ".js?ck=" + ck;
    s.parentNode.insertBefore(rw, s);
    }(document, new Date(), "script", "rating-widget.com/"));</script>
    <div class="rw-ui-container" data-title="{{$post->user->id}}"></div>
                        @if(count($posts) > 0)  
                        </br></br></br>
                        <div class="row justify-content-center">
                            <table class="table">
                                <tr>
                                    <th>{{$post->user->name}}'s items</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach($posts as $post)
                                    <tr>
                                        <td><a href="/posts/{{$post->id}}"><h6>{{$post->title}}</h6></a></td>
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
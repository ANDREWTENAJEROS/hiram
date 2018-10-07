@extends('layouts.app')

@section('content')
@include('inc.navbarcss1')

    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=2008481492505313&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


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

    <div class="row">
    <!-- class="col s12 m6" -->
            <div  style="margin: 0 auto;" class="col s12 m6">
            </br>
            <ul>
                <li>
             <img  style="width:350px" src="https://s3-ap-southeast-1.amazonaws.com/hiramstorage/{{$post->cover_image}}" alt=""/>
                </li>
                <li>
             <img  style="width:350px" src="https://s3-ap-southeast-1.amazonaws.com/hiramstorage/{{$post->image1}}" alt=""/>
                </li>
                <li>
             <img  style="width:350px" src="https://s3-ap-southeast-1.amazonaws.com/hiramstorage/{{$post->image2}}" alt=""/>
                </li>
                 </br>
</ul>   
            </div>
        <br><br>
        <div class="col s12 m6" style=" margin: 0 auto;">
            </br>
            <h1>{{$post->title}}</h1>

            @if(Auth::guest() == false)
            </br>
            @if(Auth::guest())
                <a href="/profile/{{$post->user_id}}">Owner {{$post->user->name}}</a>
            @elseif(Auth::user()->id == $post->user->id)
                <a href="/dashboard">Owner {{$post->user->name}}</a>
               
            @else
                <a href="/profile/{{$post->user_id}}">Owner {{$post->user->name}}</a>
            </br>   <div class="rw-ui-container" data-title="{{$post->user->id}}"></div>

            @endif


                {{-- <small>Owner:</small>
                </br>
                <small>{{$post->user->name}}</small> --}}
            </br>
            </br>
            <!-- availability -->
            @if($post->status == "Not Available" && $post->user_id == Auth::user()->id)
                 <small>Set item as avaiable when it is returned</small>
                 @elseif($post->user_id == Auth::user()->id)
                 <small>Set return day and borrower's name for this item when it is borrowed</small>
                @endif
            <div class="row">

            {!!Form::open(['action' => ['DateController@update', $post->id], 'method' => 'POST'])!!}
                @if($post->status == "Available" && $post->user_id == Auth::user()->id)
                    <div class="col-md-6">
                        <input id="due_date" type="date" placeholder="MM/DD/YYYY" style="padding-left: 10px;padding-right: 0px; width: 100%;  margin-top:10px; margin-bottom:10px;" class="input100" name="due_date" required>
                    </div>
                @endif

                @if($post->status == "Not Available" && $post->user_id == Auth::user()->id)
                <div class="col-md-4">
                        {{Form::hidden('_method', 'PUT')}}
                        {{Form::submit('Returned', ['class' => 'login100-form-btn', 'style'=>'width:100%; margin-top:10px; margin-bottom:10px;' ])}}
                    {!!Form::close()!!}
                    </div>
                    <div class="col-md-6">
                    <h6 style=" width:100%; margin-top:10px; margin-bottom:10px; ">Borrowed by: {{$post->borrower}}</h6>
                    </div>
                @elseif($post->user_id == Auth::user()->id)
                <div class="col-md-6">
                    <div class="row" >
                        <div class="col-md-8" >
                            {{Form::hidden('_method', 'PUT')}}
                            {{Form::text('borrower', '', ['class' => 'input100', 'placeholder' => 'Borrower\'s name','required' => 'required','style'=>'padding-left: 5px;padding-right: 0px; width: 100%;  margin-top:10px; margin-bottom:10px;'])}}
                        </div>
                        <div class="col-md-4">
                            {{Form::submit('Set', ['class' => 'login100-form-btn',  'style'=>'width:100%; margin-top:10px; margin-bottom:10px;'])}}
                        </div>
                    </div>
                    {!!Form::close()!!}
                </div>
                @endif
      </div>
      <!-- <div class="col-md-4">
                    <small style=" margin-top:15px; margin-bottom:10px;">Status: {{--$post->status--}}</small>
                    </div> -->
            @endif 
            </br>
            <div> 
            <small>{{$post->body}}</small>
                <hr><small>Price per day ₱ {{$post->price_per_day}}</small>
            </hr>
            </br>
            <hr><small>Insurance Deposit ₱ {{$post->deposit}}</small>
            </hr>
            </br>
            <hr>
               <small>Category:</small>
            </hr>
            </br>
                <small>{{$post->category}}</small>
            </div>
            
            <hr>
               <small>Location:</small>

               <iframe width="100%" height="250" frameborder="0" style="border:0; margin-top:10px;" src="https://www.google.com/maps/embed/v1/place?q={{$post->location}}&key=AIzaSyDOBddUvKMDMhNKIc6eSrIOJJwsIlsfWOo" allowfullscreen></iframe>
            </hr>
            </br>
            <div>
                <small>{{$post->location}}</small>
            </div>
            <hr>
            <small>Terms and Conditions: </br> {{$post->condition}}</small>
            </hr>
            <hr>
            <small>Uploaded on {{$post->created_at}} </br> by {{$post->user->name}}</small>
            <hr>
            </br>
           
       
    @if(!Auth::guest())
     
    <div class="fb-like" style="width:100%;" data-href="http://hiram.herokuapp.com/posts/{{$post->id}}" data-layout="button" data-action="recommend" data-size="large" data-show-faces="true" data-share="true"></div>
            <div class="fb-comments" style="width:90%;" data-href="http://hiram.herokuapp.com/posts/{{$post->id}}" data-numposts="4"></div>
            </div>
    </div>
        @if(Auth::user()->id == $post->user->id)

            <div class="row">
                
                <div class="col s12 m6">
                    <!-- {{Form::submit('EDIT', ['class' => 'login100-form-btn'])}} -->
                    <a href="/posts/{{$post->id}}/edit">
                        <button class="login100-form-btn">
                            EDIT
                        </button>
                    </a>
                </div>
                <div class="col s12 m6">
                 <a  href="/agreement" target="_blank" >
                 <button class="login100-form-btn">Print agreement</button>
                </a>
                </div>
            </div>
            </br> </br>
         
        @else 
        <br>
            <div class="row">

                <div class="col s12 m6">
                    <a href="tel:{{$post->user->mobile}}">
                        <button class= "login100-form-btn">
                            CALL
                        </button>
                    </a>
                </div>
                
                <div class="col s12 m6">
                    <a href="sms:{{$post->user->mobile}}?body=Hi {{$post->user->name}}, This is {{(Auth::user()->name)}} and I am interested on renting your {{$post->title}}">
                        <button class= "login100-form-btn">
                            MESSAGE
                        </button>
                    </a>
                </div>
                
            </div> 
            <br>
            <div class="row">
            <div class="col s12 m6">
                    <a href="mailto:{{$post->user->email}}?body=Hi {{$post->user->name}}, This is {{(Auth::user()->name)}} and I am interested on renting your {{$post->title}}">
                        <button class= "login100-form-btn">
                            e-mail

                        </button>
                    </a>
                </div>
                
                <!-- Button trigger modal -->
                <div class="col s12 m6">
                    <a>
                        <button type="button" class="login100-danger-btn" data-toggle="modal" data-target="#exampleModal">
                                Report
                        </button>
                    </a>
                </div>
                        
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Report Post</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are your sure you want to report this post?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                {!!Form::open(['action' => ['PostController@update', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                    {{Form::hidden('_method', 'PUT')}}
                                    {{Form::submit('Report', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
            </br> </br>
        @endif

        
    @else
    </div>
    </div>
    </br>
            <div class="col s12 m6">
                    <a href="/login">
                        <button class= "login100-form-btn centered" style=" width: 300px;">
                            Login to Hiram to rent
                        </button>
                    </a>
                </div>
                </br> </br>
    @endif    
    @include('inc.footer')
    </footer>
@endsection
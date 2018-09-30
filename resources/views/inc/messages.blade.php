@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        </br>
        </br>
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-danger">
    </br>
        </br>
        {{'success'}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
    </br>
        </br>
        {{'error'}}
    </div>
@endif
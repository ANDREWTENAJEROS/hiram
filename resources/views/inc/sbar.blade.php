
<div >
<form action="{{route('posts.index')}}" method="GET" role="search">
        {{-- {!! Form::open(['action' => 'PostController@search', 'method' => 'POST', 'role' => 'search'])!!} --}}
        {{csrf_field()}}
        
    <div style="position: fixed; z-index: 100; bottom: 0; left: 0;
            right: 0;
            margin-left: auto;
            margin-right: auto; width: 80%;">

        <input class="input100" type="text" name="search_product" style="margin-bottom: 10px;" 
            placeholder="Search Products..." value="{{ isset($search_product) ? $search_product : '' }}">

        <button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4 ">
            <i class="fs-12 fa fa-search" aria-hidden="true"></i>
        </button>
    </div>

    <ul class="main_menu">
            <li class="p-b-9">
            <li class="p-b-9">
            <a href="#" class="s-text7">
                All
            </a>
          </li>
            <button type="link" value="{{ isset('Books and references') ? 'Books and references' : '' }}" class="s-text7">
                Books and references
            </button>
            </li>
           <li class="p-b-9">
            <a href="#" class="s-text7">
                Devices and instruments
            </a>
          </li>

          <li class="p-b-9">
            <a href="#"   class="s-text7">
                Apparel and Accesories
            </a>
        </li>

        <li class="p-b-9">
            <a href="#" class="s-text7">
                General Supplies and others
            </a>
        </li>
        </ul>
        @guest
				
        
        @else



        @csrf

    	@endguest
</div>




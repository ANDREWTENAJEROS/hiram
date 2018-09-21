
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
{{-- </form> --}}

    <ul class="main_menu">

        <li class="p-b-9">
            <a href="/posts">All</a>
        </li>

        <li class="p-b-9">
            <input type="submit" name="search_category" style="background-color:white;" 
                value="Books and references">
        </li>

        <li class="p-b-9">
        <input type="submit" name="search_category" style="background-color:white;" 
                value="Devices and instruments">
        </li>

        <li class="p-b-9">
        <input type="submit" name="search_category" style="background-color:white;" 
                value="Apparel and Accesories">
        </li>

        <li class="p-b-9">
            <input type="submit" name="search_category" style="background-color:white;" 
                value="General Supplies">
        </li>
    </ul>
        @guest
				
        
        @else



        @csrf

    	@endguest
</div>




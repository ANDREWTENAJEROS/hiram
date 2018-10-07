{{-- input[type=text] {
    width: 200px;
    box-sizing: border-box;
    border: 2px solid #696969;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
} --}}

<form action="{{route('posts.index')}}" method="GET" role="search">
{{csrf_field()}}
<div>
    <input class="input100" type="text" name="search_location" style="margin-bottom: 10px;" 
        placeholder="Search by location..." value="{{ isset($search_location) ? $search_location : '' }}">

    <button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4 ">
        <i class="fs-12 fa fa-search" aria-hidden="true"></i>
    </button>
</div>
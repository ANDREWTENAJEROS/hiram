<form action="{{route('posts.index')}}" method="GET" role="search">
{{csrf_field()}}
<div class="row" >

    <div class="col-md-11">
    <input class="input100 pull-right" type="text" name="search_location" placeholder="Search by location..." style="width:95%; right:0;" value="{{ isset($search_location) ? $search_location : '' }}">
     </div>
     <div class="col-md-1">
        <button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4 ">
        <i style="margin-bottom:30px; padding-right:50px" class="fs-12 fa fa-search" aria-hidden="true"></i>
    </button>
    </div>

</div>
</form>
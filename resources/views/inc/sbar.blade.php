
<div >
<div style="position: fixed; z-index: 100; bottom: 0; left: 0;
    right: 0;
    margin-left: auto;
    margin-right: auto; width: 80%;">
                                <input class="input100" type="text" name="search-product" style="margin-bottom: 10px;" placeholder="Search Products...">

                                <button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4 ">
                                    <i class="fs-12 fa fa-search" aria-hidden="true"></i>
                                </button>
                            </div>
        @guest
				
        
        @else



        @csrf

    	@endguest
</div>




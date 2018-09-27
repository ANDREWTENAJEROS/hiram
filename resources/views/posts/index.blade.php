@extends('layouts.app')

@section('content')
    <body class="animsition">

     
                        </div>
                    </div>
                </div> 
            </div>
        </header>   
        <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/heading-pages-02.jpg);">
            <h2 class="l-text2 t-center">
                HIRAM
            </h2>
            <p class="m-text13 t-center">
                Rent items now!
            </p>
        </section>
        
        <section class="bgwhite p-t-55 p-b-65" style="padding-top: 0px;">
      
            <div class="container" >
                    @include('inc.sbar')
                        
                </br>       
                
                <div class="row">
                
                      <div>

                        <!-- Product -->
                        <div class="row" style="margin-right: 0px; align:center; ">
                        </br>
                            @if(count($posts) > 0)
                                @foreach($posts as $post)
                                    <div class="col-sm-12 col-md-4 col-lg-3 p-b-50">
                                        <!-- Block2 -->
                                        <div class="block2"  style="margin: 10px; align:center; ">
                                            <div style="width:100%; margin: 0 auto;"  class="block2-img wrap-pic-w of-hidden pos-relative">
                                                
                                                <img style=" margin: 0 auto; " src="https://s3-ap-southeast-1.amazonaws.com/hiramstorage/{{$post->cover_image}}" />

                                                <div style=" margin: 0 auto; " class="block2-overlay trans-0-4">
                                                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                                    </a>
                                                    <div style=" margin: 0 auto; " class="block2-btn-addcart w-size1 trans-0-4">
                                                             <a style=" margin: 0 auto; " href="/posts/{{$post->id}}" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4"  > View item</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style=" margin: 0 auto; ">
                                                <a href="/posts/{{$post->id}}"><h3 style="text-align:center; padding-top: 10px;">{{$post->title}}</h3></a>
                                                <h5 style="text-align:center;">₱ {{$post->price}}/hr</h5>

                                           </div>
                                           <div style="text-align:center; margin: 0 auto;">
                                           <small>Posted by {{$post->user->name}}</small>
                                           </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p class="centered">No posts found</p>
                            @endif	

                           
                        </div>

                        <!-- Pagination -->
                        <div class="pagination flex-m flex-w p-t-26" style="margin-right: 0px;">
                               {{$posts->links()}}		
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
            <div class="flex-w p-b-90">
                <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
                    <h4 class="s-text12 p-b-30">
                        GET IN TOUCH
                    </h4>

                    <div>
                        <p class="s-text7 w-size27">
                            Any questions? Let us know University of the Immaculate Conception ITRZ Davao City, DVO 8000 or call us on (+63) 960 200 98
                        </p>

                        <div class="flex-m p-t-30">
                            <a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                            <a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
                            <a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
                            <a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
                            <a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
                        </div>
                    </div>
                </div>

                <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
                    <h4 class="s-text12 p-b-30">
                        Categories
                    </h4>

                    <ul>
                        <li class="p-b-9">
                            <a href="#" class="s-text7">
                                Books and references
                            </a>
                        </li>
                        <li class="p-b-9">
                            <a href="#" class="s-text7">
                                Devices and instruments
                            </a>
                        </li>

                        <li class="p-b-9">
                            <a href="#" class="s-text7">
                                Apparel and Accesories
                            </a>
                        </li>

                        <li class="p-b-9">
                            <a href="#" class="s-text7">
                                General Supplies
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
                    <h4 class="s-text12 p-b-30">
                        Links
                    </h4>

                    <ul>
                        </li>

                        <li class="p-b-9">
                            <a href="/about" class="s-text7">
                                About Us
                            </a>
                        </li>

                        <li class="p-b-9">
                            <a href="/about" class="s-text7">
                                Contact Us
                            </a>
                        </li>

                    </ul>
                </div>

                <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
                    <h4 class="s-text12 p-b-30">
                        Help
                    </h4>

                    <ul>
                        <li class="p-b-9">
                            <a href="/policy" class="s-text7">
                                Terms & Conditions
                            </a>
                        </li>

                        <li class="p-b-9">
                            <a href="#" class="s-text7">
                                Returns
                            </a>
                        </li>

                        <li class="p-b-9">
                            <a href="#" class="s-text7">
                                Shipping
                            </a>
                        </li>

                        <li class="p-b-9">
                            <a href="#" class="s-text7">
                                FAQs
                            </a>
                        </li>
                    </ul>
                </div>

              
            </div>

            <div class="t-center p-l-15 p-r-15">
                <div class="t-center s-text8 p-t-20">
                    Copyright © 2018 All rights reserved. | H I R A M ©
                </div>
            </div>
            </br></br>
        </footer>



        <!-- Back to top -->
        <div class="btn-back-to-top bg0-hov" id="myBtn" style="margin-bottom: 60px;">
            <span class="symbol-btn-back-to-top">
                <i class="fa fa-angle-double-up" aria-hidden="true"></i>
            </span>
        </div>
        
        <!-- Container Selection -->
        <div id="dropDownSelect1"></div>
        <div id="dropDownSelect2"></div>



    <!--===============================================================================================-->
        <script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="vendor/select2/select2.min.js"></script>
        <script type="text/javascript">
            $(".selection-1").select2({
                minimumResultsForSearch: 20,
                dropdownParent: $('#dropDownSelect1')
            });

            $(".selection-2").select2({
                minimumResultsForSearch: 20,
                dropdownParent: $('#dropDownSelect2')
            });
        </script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
        <script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
        <script type="text/javascript" src="js/slick-custom.js"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
        <script type="text/javascript">
            $('.block2-btn-addcart').each(function(){
                var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
                $(this).on('click', function(){
                    swal(nameProduct, "is added to cart !", "success");
                });
            });

            $('.block2-btn-addwishlist').each(function(){
                var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
                $(this).on('click', function(){
                    swal(nameProduct, "is added to wishlist !", "success");
                });
            });
        </script>

    <!--===============================================================================================-->
      
    <!--===============================================================================================-->
        <script src="js/main.js"></script>

    </body>
    
@endsection

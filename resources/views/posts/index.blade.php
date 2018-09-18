@extends('layouts.app')

@section('content')
@include('inc.sbar')
    <body class="animsition">

     
                        </div>
                    </div>

                     
                </div> 
            </div>

         
        </header>

        <!-- Title Page -->
        <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/heading-pages-02.jpg);">
            <h2 class="l-text2 t-center">
                HIRAM
            </h2>
            <p class="m-text13 t-center">
                Rent items now!
            </p>
        </section>
        

        <!-- Content page -->
        
        <section class="bgwhite p-t-55 p-b-65" style="padding-top: 0px;">
      
            <div class="container" >
                        <ul class="main_menu">
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
                            <!-- <div id="search" class="search-product pos-relative bo4 of-hidden"> OLD SEARCH -->
                        
                </br>       
                
                <div class="row">
                     <!--<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                        <div class="leftbar p-r-20 p-r-0-sm">
                            
                                
                            </div>
                        </div> -->

                    
                        <!-- <div class="col-sm-6 col-md-8 col-lg-9 p-b-50"> -->
                      <div>

                        <!-- Product -->
                        <div class="row" style="margin-right: 0px;">
                        </br>
                            @if(count($posts) > 0)
                                @foreach($posts as $post)
                                    <div class="col-sm-12 col-md-4 col-lg-3 p-b-50">
                                        <!-- Block2 -->
                                        <div class="block2" style="margin: 10px;">
                                            <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                                <img href="/posts/{{$post->id}}" style="width:100%" src="URL::to('/storage/cover_images/{{$post->cover_image}}')">

                                                <div class="block2-overlay trans-0-4">
                                                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                                    </a>

                                                    <div class="block2-btn-addcart w-size1 trans-0-4">
                                                        <!-- Button -->
                                                        
                                                            <a href="/posts/{{$post->id}}"> <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4"  > View item</button> </a>
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="centered">
                                                <a href="/posts/{{$post->id}}"><h3>{{$post->title}}</h3></a>
                                                <small>₱ {{$post->price}}/hr</small>
                                                </br>
                                                <small>image loc: /storage/cover_images/{{$post->cover_image}}</small>
                                           </div>
                                           <div>
                                                <small>By {{$post->user->name}}</small>
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

                <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
                    <h4 class="s-text12 p-b-30">
                        Newsletter
                    </h4>

                    <form>
                        <div class="effect1 w-size9">
                            <input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
                            <span class="effect1-line"></span>
                        </div>

                        <div class="w-size2 p-t-20">
                            <!-- Button -->
                            <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                                Subscribe
                            </button>
                        </div>

                    </form>
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
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name')}}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9197878935414975",
    enable_page_level_ads: true
  });
</script>

<script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body>
    <div id="app">
   
        <main>
             <!-- @include('inc.navbar')  -->
            <div class="container">
                @include('inc.messages')
                <div style="margin-top: 70px">
                @yield('content')
                </div>
            </div>
        </main>
    </div>
    
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
   
</body>
</html>

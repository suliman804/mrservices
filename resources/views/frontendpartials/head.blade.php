<!doctype html>
<html class="no-js" lang="">

<head>
    <!-- META KEYS -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta_section')
    <!-- TITLE -->
    <title>{{optional($info_sections_f)->site_title}}@yield('page_title')</title>

    <!-- NORMALIZE CSS -->
    <link rel="stylesheet" href="{{asset('public/theme/css/normalize.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('public/logo/logo-2.png')}}" >
    <link href="{{asset('public/theme/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <!-- <link href="{{asset('public/theme/css2/normalize2.css')}}" rel="stylesheet" type="text/css"> -->
    <link href="{{asset('public/theme/css/owl.carousel.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/theme/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/theme/css/ionicons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/theme/css/flaticon.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/theme/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('public/theme/css/jquery-ui.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('public/theme/css/jquery.fancybox.css')}}" rel="stylesheet" type="text/css">
    <!--Main Slider-->
    <link href="{{asset('public/theme/css/settings.css')}}" type="text/css" rel="stylesheet" media="screen">
    <link href="{{asset('public/theme/css/layers.css')}}" type="text/css" rel="stylesheet" media="screen">

    <link href="{{asset('public/theme/css/style.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('public/theme/css/index.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('public/theme/css/header.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('public/theme/css/footer.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('public/theme-color/default.css')}}" rel="stylesheet" type="text/css" id="theme-">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119595512-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-119595512-1');
        </script>
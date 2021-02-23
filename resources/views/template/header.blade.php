<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <title>{{trans('home/header.title')}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="house of development , hod , {{trans('home/header.title')}}">
    <meta content="" name="{{__('home/index.over_view')}}">
    <meta content="Author" name="aaysha1420@gmail.com">
    <!-- Favicons -->
    <link href="{{asset('site')}}/img/favicon.png" rel="icon">
    <link href="{{asset('site')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kufam&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS File -->
    @if(app()->getLocale() == 'en')
    <link href="{{asset('site')}}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    @else
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.0.0/css/bootstrap.min.css" integrity="sha384-P4uhUIGk/q1gaD/NdgkBIl3a6QywJjlsFJFk7SPRdruoGddvRVSwv5qFnvZ73cpz" crossorigin="anonymous">
    @endif
        <!-- Libraries CSS Files -->
    <link href="{{asset('site')}}/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('site')}}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{asset('site')}}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="{{asset('site')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('site')}}/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="{{asset('site')}}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('site')}}/css/style.css" rel="stylesheet">
</head>

<body id="body">

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<!-- Mirrored from htmldesigntemplates.com/html/travelin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 May 2023 09:47:33 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travelin - Travel Tour Booking HTML Templates</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ url('frontend/images/favicon.png') }}">

    <link href="{{ url('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ url('frontend/css/style.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ url('frontend/css/plugin.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="{{ url('frontend/fonts/line-icons.css') }}" type="text/css">
</head>

<body>
@include('frontend.layouts.header')
@yield('main-container')

@include('frontend.layouts.footer')
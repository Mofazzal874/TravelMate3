<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<!-- Mirrored from htmldesigntemplates.com/html/travelin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 May 2023 09:47:33 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Travelin - Travel Tour Booking HTML Templates</title>

<link rel="shortcut icon" type="image/x-icon" href="{{url('frontend/images/favicon.png')}}">

<link href="{{url('frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

<link href="{{url('frontend/css/style.css')}}" rel="stylesheet" type="text/css">

<link href="{{url('frontend/css/plugin.css')}}" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="{{url('frontend/fonts/line-icons.css')}}" type="text/css">
</head>
<body>

<header class="main_header_area">
<div class="header-content py-1 bg-theme">
<div class="container d-flex align-items-center justify-content-between">
<div class="links">
<ul>
<li><a href="#" class="white"><i class="icon-calendar white"></i> Tuesday, May 16, 2023</a>
</li>
<li><a href="#" class="white"><i class="icon-location-pin white"></i> Kathmandu, Nepal</a>
</li>
<li><a href="#" class="white"><i class="icon-clock white"></i> Sun-Fri: 10 AM – 5 PM</a></li>
</ul>
</div>
<div class="links float-right">
<ul>
<li><a href="#" class="white"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
<li><a href="#" class="white"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
<li><a href="#" class="white"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
<li><a href="#" class="white"><i class="fab fa-linkedin " aria-hidden="true"></i></a></li>
</ul>
</div>
</div>
</div>

<div class="header_menu" id="header_menu">
<nav class="navbar navbar-default">
<div class="container">
<div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-3 pt-3">

<div class="navbar-header">
<a class="navbar-brand" href="index.html">
<img src="{{url('frontend/images/logo.png')}}" alt="image">
</a>
</div>

<div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav" id="responsive-menu">
    
<li><a href="{{url('/')}}">Home</a></li>
<li><a href="{{url('/about')}}">About Us</a></li>
<li><a href="{{url('/tour')}}">Tours</a></li>
<li><a href="{{url('/destination')}}">Destination</a></li>
<li class="submenu dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <i class="icon-arrow-down" aria-hidden="true"></i></a>
<ul class="dropdown-menu">
<li><a href="{{url('/booking')}}">Booking</a></li>
<li><a href="{{url('/service')}}">Services</a></li>
<li><a href="{{url('/gallery')}}">Gallery</a></li>
<li><a href="{{url('/contact')}}">Contact Us</a></li>
</ul>
</li>
<li><a href="{{url('/blog')}}">Blogs</a></li>
<li><a href="{{url('/contact')}}">Contact</a></li>

</ul>
</div>
<div class="register-login d-flex align-items-center">
<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="me-3">
<i class="icon-user"></i> Login/Register
</a>
<a href="{{url('/booking')}}" class="nir-btn white">Book Now</a>
</div>
<div id="slicknav-mobile"></div>
</div>
</div>
</nav>
</div>

</header>

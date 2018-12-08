<!DOCTYPE html>
<html lang="en">
<head>
<title>Trang Chu</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('lib/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('lib/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('lib/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('lib/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('lib/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="lib/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="lib/styles/responsive.css">
</head>
<body>
<div class="super_container">
  <!-- Header -->
  <header class="header">
    <!-- Top Bar -->
    <div class="top_bar">
      <div class="container">
        <div class="row">
          <div class="col d-flex flex-row">
            <div class="phone">+84 342 8989 57</div>
            <div class="social">
              <ul class="social_list">
                <li class="social_list_item"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li class="social_list_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li class="social_list_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li class="social_list_item"><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                <li class="social_list_item"><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                <li class="social_list_item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
            <div class="user_box ml-auto">
              <div class="user_box_login user_box_link"><a href="#">login</a></div>
              <div class="user_box_register user_box_link"><a href="#">register</a></div>
            </div>
          </div>
        </div>    
      </div>
    </div>
    <!-- Main Navigation -->

    <nav class="main_nav">
      <div class="container">
        <div class="row">
          <div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
            <div class="logo_container">
              <div class="logo"><a href="/"><img src="images/logo.png" alt="">Dragondy.vn</a></div>
            </div>
            <div class="main_nav_container ml-auto">
              <ul class="main_nav_list">
                <li class="main_nav_item"><a href="{{url('home')}}">Trang chủ</a></li>
                <li class="main_nav_item"><a href="about.html">Tin tức</a></li>
                <li class="main_nav_item"><a href="offers.html">Giới thiệu</a></li>
                <li class="main_nav_item"><a href="{{url('lienhe')}}">liên hệ</a></li>
              </ul>
            </div>
            

            <form id="search_form" class="search_form bez_1">
              <input type="search" class="search_content_input bez_1">
            </form>

            <div class="hamburger">
              <i class="fa fa-bars trans_200"></i>
            </div>
          </div>
        </div>
      </div>  
    </nav>

  </header>

  <div class="menu trans_500">
    <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
      <div class="menu_close_container"><div class="menu_close"></div></div>
      <div class="logo menu_logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
      <ul>
        <li class="menu_item"><a href="#">trang chủ</a></li>
        <li class="menu_item"><a href="about.html">tin tức </a></li>
        <li class="menu_item"><a href="offers.html">giới thiệu</a></li>
        <li class="menu_item"><a href="{{url('lienhe')}}">liên hệ</a></li>
      </ul>
    </div>
  </div>

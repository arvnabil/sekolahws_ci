<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="<?php echo base_url().'theme/img/favicon/favicon.ico'?>">
        <link rel="apple-touch-icon" type="image/png" sizes="152x152" href="<?php echo base_url().'theme/img/favicon/apple-icon-152x152.png'?>">
        <!-- Author Meta -->
        <meta name="author" content="colorlib">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>SMK Walisongo Jakarta</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
            <!-- CSS ============================================= -->
            <link rel="stylesheet" href="<?php echo base_url().'theme/css/linearicons.css'?>">
            <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
            <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.css'?>">
            <link rel="stylesheet" href="<?php echo base_url().'theme/css/magnific-popup.css'?>">
            <link rel="stylesheet" href="<?php echo base_url().'theme/css/nice-select.css'?>">                          
            <link rel="stylesheet" href="<?php echo base_url().'theme/css/animate.min.css'?>">
            <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.css'?>">         
            <link rel="stylesheet" href="<?php echo base_url().'theme/css/jquery-ui.css'?>">            
            <link rel="stylesheet" href="<?php echo base_url().'theme/css/main.css'?>">
            <?php
                function limit_words($string, $word_limit){
                    $words = explode(" ",$string);
                    return implode(" ",array_splice($words,0,$word_limit));
                }
            ?>   
    </head>
<body>    
<header id="header" id="home">
    <!-- <div class="header-top"> -->
        <!-- <div class="container" style="margin-top: 35px;">
            <div class="row"> -->
                <!-- <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UC0MOQKiJ2YGkjWAdWq88Fwg"><i class="fa fa-youtube"></i></a></li>
                    </ul>           
                </div> -->
<!--             </div>                              
        </div> -->
    <!-- </div> -->
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
          <div id="logo">
            <a href="<?php echo site_url('');?>"><img src="<?php echo base_url().'theme/img/logo.png'?>" alt="" title="" /></a>
          </div>
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li class="nav-item"><a href="<?php echo site_url('');?>">Home</a></li>
              <li class="menu-has-children"><a href="">Profile</a>
                <ul>
                    <li><a href="<?php echo site_url('Kepala_Sekolah');?>">Kepala Sekolah</a></li>
                    <li><a href="<?php echo site_url('fasilitas');?>">Fasilitas</a></li>
                    <li><a href="<?php echo site_url('about');?>">About us</a></li>

                </ul>
              </li> 
              <li><a href="<?php echo site_url('galeri');?>">GALERI</a></li>
              <li class="menu-has-children"><a href="">Blog</a>
                <ul>
                    <li><a href="<?php echo site_url('blog');?>">Blog</a></li>
                    <li><a href="<?php echo site_url('pengumuman');?>">Pengumuman</a></li>
                </ul>
              </li> 
              <li><a href="<?php echo site_url('agenda');?>">Event</a></li>
              <li><a href="<?php echo site_url('contact');?>">Contact US</a></li>
            </ul>
          </nav><!-- #nav-menu-container -->                    
        </div>
    </div>
</header><!-- #header --> 
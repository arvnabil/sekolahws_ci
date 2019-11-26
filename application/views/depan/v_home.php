<!--Header-->
<?php
$this->load->view('depan/v_header');

?> 

        <!-- start banner Area -->
        <section class="banner-area relative" id="home">
            <div class="overlay overlay-bg"></div>  
            <div class="container">
                <div class="row fullscreen d-flex align-items-center justify-content-between">
                    <div class="banner-content col-lg-9 col-md-12">
                        <h1 class="text-uppercase">SMK Walisongo Jakarta</h1>
                        <p class="pt-10 pb-10">
                        SMK Walisongo Jakarta  beralamat di Jl. Kalibata  Timur (Empang Tiga) Pancoran Jakarta Selatan. Sekolah ini berada di bawah naungan  Yayasan Pendidikan HJ. Dardjah Amin.
                        </p>
                        <a href="<?php echo site_url('artikel');?>" class="primary-btn text-uppercase">Lihat Artikel</a>
                    </div>                                      
                </div>
            </div>                  
        </section>
        <!-- End banner Area -->

        <!-- Start feature Area -->
        <section class="feature-area pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-feature">
                            <div class="title">
                                <h4>Teknik Komputer Jaringan</h4>
                            </div>
                            <div class="desc-wrap">
                                <img src="<?php echo base_url().'theme/img/chart-icon_2.png'?>" class="img-fluid" alt="chart_icon">
                                <br><br>
                                <p>Total : <span class="counter"><?php echo $tot_siswa;?></span> Siswa</p>
                                <!-- <a href="<?php echo site_url('siswa');?>">Lihat Selengkapnya</a>                                     -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-feature">
                            <div class="title">
                                <h4>Administrasi Perkantoran</h4>
                            </div>
                            <div class="desc-wrap">
                                <img src="<?php echo base_url().'theme/img/chart-icon_2.png'?>" class="img-fluid" alt="chart_icon">
                                <br><br>
                                <p>Total : <span class="counter"><?php echo $tot_siswa;?></span> Siswa</p>
                                <!-- <a href="<?php echo site_url('guru');?>">Lihat Selengkapnya</a>                                     -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-feature">
                            <div class="title">
                                <h4>Akuntansi</h4>
                            </div>
                            <div class="desc-wrap">
                                <img src="<?php echo base_url().'theme/img/chart-icon_2.png'?>" class="img-fluid" alt="chart_icon">
                                <br><br>
                                <p>Total : <span class="counter"><?php echo $tot_siswa;?></span> Siswa</p>
                                <!-- <a href="<?php echo site_url('kelas');?>">Lihat Selengkapnya</a>                                     -->
                            </div>
                        </div>
                    </div>                                              
                </div>
            </div>  
        </section>
        <!-- End feature Area --> 
                    
        <!-- Start upcoming-event Area -->
        <section class="upcoming-event-area section-gap" style="margin-top: -100px;">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Event Terbaru</h1>
                            <p>Event Terbaru</p>
                        </div>
                    </div>
                </div>                              
                <div class="row">
                    <div class="active-upcoming-event-carusel">
                        <?php foreach ($agenda->result() as $row):?>
                        
                        <div class="single-carusel row align-items-center">
                            <div class="col-12 col-md-6 thumb">
                                <img class="img-fluid" src="<?php echo base_url().'assets/images/89296085bd6c53d9d2f6955f02266035.jpg'?>" alt="">
                            </div>
                            <div class="detials col-12 col-md-6">
                                <p><?php echo date('d F Y', strtotime($row->agenda_tanggal));?></p>
                                <a href="<?php echo site_url('agenda');?>"><h4><?php echo $row->agenda_nama;?></h4></a>
                                <p>
                                    <?php echo substr($row->agenda_deskripsi, 0, 60)." "."..."; ?>
                                </p>
                            </div>
                        </div>
                        <?php endforeach;?>                                                                           
                    </div>
                </div>
            </div>  
        </section>
        <!-- End upcoming-event Area -->
            
        <!-- Start cta-one Area -->
        <section class="cta-one-area relative section-gap">
            <div class="container">
                <div class="overlay overlay-bg"></div>
                <div class="row justify-content-center">
                    <div class="wrap">
                        <h1 class="text-white">SMK Walisongo Jakarta</h1>
                        <p>
                        SMK Walisongo Jakarta  beralamat di Jl. Kalibata  Timur (Empang Tiga) Pancoran Jakarta Selatan. Sekolah ini berada di bawah naungan  Yayasan Pendidikan HJ. Dardjah Amin.
                        </p>
                        <a class="primary-btn wh" href="<?php echo site_url('about');?>">About Us</a>                               
                    </div>                  
                </div>
            </div>  
        </section>
        <!-- End cta-one Area -->

        <!-- Start blog Area -->
        <section class="blog-area section-gap" id="blog">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Blog Terbaru</h1>
                            <p>Blog Terbaru SMK Walisongo jakarta.</p>
                        </div>
                    </div>
                </div>                  
                <div class="row">
                    <?php foreach ($berita->result() as $row) :?>
                    <div class="col-lg-3 col-md-6 single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" alt="">                             
                        </div>
                        <p class="meta"><?php echo date('d F Y', strtotime($row->tulisan_tanggal));?>  |  By <a href="#"><?php echo $row->tulisan_author;?></a></p>
                        <a href="blog-single.html">
                            <h5><?php echo $row->tulisan_judul;?></h5>
                        </a>
                        <p><?php echo substr($row->tulisan_isi, 0, 60)." "."..."; ?></p>
                        <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>  
                    </div>
                    <?php endforeach;?>             
                </div>
            </div>  
        </section>
        <!-- End blog Area -->          
            

    <!-- Start cta-two Area -->
    <section class="cta-two-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 cta-left">
                    <h1>Ingin Tahu Perkembangan Teknologi Saat ini?</h1>
                </div>
                <div class="col-lg-4 cta-right">
                    <a class="primary-btn wh" href="<?php echo site_url('artikel');?>" class="primary-btn text-uppercase">view our blog</a>
                </div>
            </div>
        </div>  
    </section>
    <!-- End cta-two Area -->
                    
<!--Footer-->
<?php

$this->load->view('depan/v_footer');
?> 
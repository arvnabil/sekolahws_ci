<!--Header-->
<?php
$this->load->view('depan/v_header');
?>
        
      <!-- start banner Area -->
      <section class="banner-area relative about-banner" id="home"> 
        <div class="overlay overlay-bg"></div>
        <div class="container">       
          <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
              <h1 class="text-white">
                Pengumuman        
              </h1> 
              <p class="text-white link-nav"><a href="<?php base_url('/') ?>">Home </a>  <span class="lnr lnr-arrow-right"></span>Pengumuman</p>
            </div>  
          </div>
        </div>
      </section>
      <!-- End banner Area -->  
        
      <!-- Start events-list Area -->
      <section class="events-list-area section-gap event-page-lists">
        <div class="container">
          <div class="row align-items-center">
            <?php foreach($data->result() as $row):?>
            <div class="col-lg-6 pb-30">
              <div class="single-carusel row align-items-center">
                <div class="col-12 col-md-6 thumb">
                  <img class="img-fluid" src="<?php echo base_url().'assets/images/89296085bd6c53d9d2f6955f02266035.jpg'?>" alt="">
                </div>
                <div class="detials col-12 col-md-6">
                  <p><?php echo date("d", strtotime($row->pengumuman_tanggal));?> <span><?php echo date("M Y", strtotime($row->pengumuman_tanggal));?></span></p>
                  <!-- <p>Waktu : <?php echo $row->pengumuman_waktu;?></p> -->
                  <a href="#"><h4><?php echo $row->pengumuman_judul;?></h4></a>
                  <p><?php echo $row->pengumuman_deskripsi;?></p>
                </div>
              </div>
            </div>
            <?php endforeach;?>                                    
            <!-- <a href="#" class="text-uppercase primary-btn mx-auto mt-40">Load more courses</a>     -->
          </div>
        </div>  
      </section>
      <!-- End events-list Area -->
        
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
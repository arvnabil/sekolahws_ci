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
                Fasilitas       
              </h1> 
              <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>Fasilitas</p>
            </div>  
          </div>
        </div>
      </section>
      <!-- End banner Area -->  
        
      <!-- Start gallery Area -->
      <section class="gallery-area section-gap">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <a href="<?php echo base_url().'assets/images/perpustakaan.jpg'?>" class="img-gal">
                <div class="single-imgs relative">    
                  <div class="overlay overlay-bg"></div>
                  <div class="relative">        
                    <img class="img-fluid" src="<?php echo base_url().'assets/images/perpustakaan.jpg'?>" alt="">       
                  </div>
                </div>
                <p class="text-center mt-3"><span>Perpustakaan</span>
                <br>Ruang Perpustakaan</p>
              </a>
            </div>
            <div class="col-lg-4">
              <a href="<?php echo base_url().'assets/images/labkomputer.jpg'?>" class="img-gal">
                <div class="single-imgs relative">    
                  <div class="overlay overlay-bg"></div>
                  <div class="relative">        
                    <img class="img-fluid" src="<?php echo base_url().'assets/images/labkomputer.jpg'?>" alt="">       
                  </div>
                </div>
                <p class="text-center mt-3"><span>Lab Komputer</span>
                <br>Ruang Lab Komputer</p>
              </a>
            </div>
            <div class="col-lg-4">
              <a href="<?php echo base_url().'assets/images/labbahasa.jpg'?>" class="img-gal">
                <div class="single-imgs relative">    
                  <div class="overlay overlay-bg"></div>
                  <div class="relative">        
                    <img class="img-fluid" src="<?php echo base_url().'assets/images/labbahasa.jpg'?>" alt="">       
                  </div>
                </div>
                <p class="text-center mt-3"><span>Lab Bahasa</span>
                <br>Ruang Lab Bahasa</p>
              </a>
            </div>
          </div>
        </div>  
      </section>
      <!-- End gallery Area -->

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
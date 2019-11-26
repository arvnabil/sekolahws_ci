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
                Guru       
              </h1> 
              <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>Guru</p>
            </div>  
          </div>
        </div>
      </section>
      <!-- End banner Area -->  
        
      <!-- Start gallery Area -->
      <section class="gallery-area section-gap">
        <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h2 class="mb-5 text-center">Guru Kami</h2>
              </div>
          </div>
          <div class="row">
            <?php foreach ($data->result() as $row) : ?>
            <div class="col-lg-4">

              <a href="<?php echo base_url().'assets/images/'.$row->guru_photo;?>" class="img-gal" value="<?php echo $row->guru_nama;?>">
                <div class="single-imgs relative">    
                  <div class="overlay overlay-bg"></div>
                  <div class="relative">        
                    <?php if(empty($row->guru_photo)):?>
                    <img class="img-fluid" src="<?php echo base_url().'assets/images/blank.png';?>" alt="">      
                    <?php else:?>
                      <img class="img-fluid" src="<?php echo base_url().'assets/images/'.$row->guru_photo;?>" alt="">      
                    <?php endif;?> 
                  </div>
                </div>
                <p class="text-center mt-3"><span><?php echo $row->guru_nama;?></span>
                <br> <?php echo $row->guru_mapel;?></p>
              </a>
            </div>
            <?php endforeach;?>
          </div>
        </div>  
        <nav><?php echo $page;?></nav>
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
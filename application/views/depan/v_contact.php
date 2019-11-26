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
                Contact Us        
              </h1> 
              <p class="text-white link-nav"><a href="<?php echo site_url('');?>">Home </a>  <span class="lnr lnr-arrow-right"></span>Contact Us</p>
            </div>  
          </div>
        </div>
      </section>
      <!-- End banner Area -->          

      <!-- Start contact-page Area -->
      <section class="contact-page-area section-gap">
        <div class="container">
          <div class="row">
            <!-- <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div> -->
            <div class="col-lg-4 d-flex flex-column address-wrap">
              <div class="single-contact-address d-flex flex-row">
                <div class="icon">
                  <span class="lnr lnr-home"></span>
                </div>
                <div class="contact-details">
                  <h5>Pasar Minggu, Jakarta Selatan</h5>
                  <p>
                  Jl. Kalibata Timur No.30, RT.9/RW.8, Kalibata, Kec. Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12740
                  </p>
                </div>
              </div>
              <div class="single-contact-address d-flex flex-row">
                <div class="icon">
                  <span class="lnr lnr-phone-handset"></span>
                </div>
                <div class="contact-details">
                  <h5>(021) 12345678</h5>
                  <p>Mon to Fri 9am to 8pm</p>
                </div>
              </div>
              <div class="single-contact-address d-flex flex-row">
                <div class="icon">
                  <span class="lnr lnr-envelope"></span>
                </div>
                <div class="contact-details">
                  <h5>admin@smkwalisongojakarta.sch.id </h5>
                  <p>Send us your query anytime!</p>
                </div>
              </div>                            
            </div>
            <div class="col-lg-8">
              <form class="form-area contact-form text-right" action="<?php echo site_url('contact/kirim_pesan');?>" method="post">
                <div class="row"> 
                  <div class="col-lg-6 form-group">
                    <input type="text" name="xnama" placeholder="Enter your name" class="common-input mb-20 form-control" required>
                  
                    <input type="email" name="xemail" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" class="common-input mb-20 form-control" required>

                    <input type="text" name="xphone" placeholder="Enter Phone" class="common-input mb-20 form-control" required>
                  </div>
                  <div class="col-lg-6 form-group">
                    <textarea class="common-textarea form-control" name="xmessage" placeholder="Enter Messege" required=""></textarea>       
                  </div>
                  <div class="col-lg-12">
                    <div><?php echo $this->session->flashdata('msg');?></div>
                    <button class="genric-btn primary" type="submit" style="float: right;">Send Message</button>                      
                  </div>
                </div>
              </form> 
            </div>
          </div>
        </div>  
      </section>
      <!-- End contact-page Area -->

<!--Footer-->
<?php
$this->load->view('depan/v_footer');
?> 
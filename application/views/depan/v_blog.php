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
                          Blog                
                      </h1>   
                      <p class="text-white link-nav"><a href="<?php echo site_url('');?>">Home </a>  <span class="lnr lnr-arrow-right"></span>Blog</p>
                  </div>  
              </div>
          </div>
      </section>
      <!-- End banner Area -->             
      <section>
        <br>
      </section>
      <!-- Start post-content Area -->
      <section class="post-content-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 posts-list">
              <?php echo $this->session->flashdata('msg');?>
              <?php foreach ($data->result() as $row) : ?>
              <div class="single-post row">
                <div class="col-lg-3  col-md-3 meta-details">
                  <ul class="tags">
                    <li><a href="#"><?php echo $row->tulisan_kategori_nama;?></a></li>
                  </ul>
                  <div class="user-details row">
                    <p class="user-name col-lg-12 col-md-12 col-6"><a href="#"><?php echo $row->tulisan_author;?></a> <span class="lnr lnr-user"></span></p>
                    <p class="date col-lg-12 col-md-12 col-6"><a href="#"><?php echo $row->tanggal;?></a> <span class="lnr lnr-calendar-full"></span></p>
                    <p class="view col-lg-12 col-md-12 col-6"><a href="#"><?php echo $row->tulisan_views;?> Views</a> <span class="lnr lnr-eye"></span></p>      
                  </div>
                </div>
                <div class="col-lg-9 col-md-9 ">
                  <div class="feature-img">
                    <img class="img-fluid" src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" alt="">
                  </div>
                    <ul style="display: inline-block;">
                        <li> Author Like : 
                        <a href="#"><i class="fa fa-facebook"> Facebook |</i></a>
                        <a href="#"><i class="fa fa-twitter"> Twitter |</i></a>
                        <a href="#"><i class="fa fa-linkedin"> Linkedin |</i></a>
                        <a href="#"><i class="fa fa-google-plus"> Google Plus</i></a></li>
                    </ul>     
                  <a class="posts-title" href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>"><h3><?php echo $row->tulisan_judul;?></h3></a>
                  <p class="excert"><?php echo limit_words($row->tulisan_isi,10).'...';?></p>
                  <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>" class="primary-btn">View More</a>
                </div>
              </div>
              <?php endforeach;?>                           
            </div>
            <div class="col-lg-4 sidebar-widgets">
              <div class="widget-wrap">
                <div class="single-sidebar-widget search-widget">
                  <form class="search-form" action="<?php echo site_url('blog/search');?>" method="get">
                    <input placeholder="Search Posts" name="keyword" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'" required>
                    <button type="submit"><i class="fa fa-search"></i></button>
                 </form>
                </div>
<!--                 <div class="single-sidebar-widget ads-widget">
                  <a href="#"><img class="img-fluid" src="img/blog/ads-banner.jpg" alt=""></a>
                </div> -->
                <div class="single-sidebar-widget post-category-widget">
                  <h4 class="category-title">Post Catgories</h4>
                  <ul class="cat-list">
                    <?php foreach ($category->result() as $row) : ?>
                    <li>
                      <a href="<?php echo site_url('blog/kategori/'.str_replace(" ","-",$row->kategori_nama));?>" class="d-flex justify-content-between">
                        <p><?php echo $row->kategori_nama;?></p>
                      </a>
                    </li>
                    <?php endforeach;?>                        
                  </ul>
                </div> 
                <div class="single-sidebar-widget popular-post-widget">
                  <h4 class="popular-title">Popular Posts</h4>
                  <div class="popular-post-list">
                    <?php foreach ($populer->result() as $row) :?>
                    <div class="single-post-list d-flex flex-row align-items-center">
                      <div class="thumb"></div>
                      <div class="details">
                        <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>"><h6><?php echo limit_words($row->tulisan_judul,3).'...';?></h6></a>
                        <p><?php echo limit_words($row->tulisan_isi,5).'...';?></p>
                      </div>
                    </div>
                    <?php endforeach;?>                       
                  </div>
                </div>              
              </div>
            </div>
          </div>
        </div>  
      </section>
      <!-- End post-content Area -->
      
<!--Footer-->
<?php
$this->load->view('depan/v_footer');
?> 
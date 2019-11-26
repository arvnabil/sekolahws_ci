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
                      <p class="text-white link-nav"><a href="<?php echo site_url('');?>">Home </a>  <span class="lnr lnr-arrow-right"></span><?php echo $title;?></p>
                  </div>  
              </div>
          </div>
      </section>
      <!-- End banner Area -->                  
      
      <!-- Start post-content Area -->
      <section class="post-content-area single-post-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 posts-list">
              <div class="single-post row">
                <div class="col-lg-12">
                  <div class="feature-img">
                    <img class="img-fluid" src="<?php echo base_url().'assets/images/'.$image?>" alt="">
                  </div>                  
                </div>
                <div class="col-lg-3  col-md-3 meta-details">
                  <ul class="tags">
                    <li><a href="#"><?php echo $kategori;?></a></li>
                  </ul>
                  <div class="user-details row">
                    <p class="user-name col-lg-12 col-md-12 col-6"><a href="#"><?php echo $author;?></a> <span class="lnr lnr-user"></span></p>
                    <p class="date col-lg-12 col-md-12 col-6"><a href="#"><?php echo $tanggal;?></a> <span class="lnr lnr-calendar-full"></span></p>
                    <ul class="social-links col-lg-12 col-md-12 col-6">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>                                       
                  </div>
                </div>
                <div class="col-lg-9 col-md-9">
                  <h3 class="mt-20 mb-20"><?php echo $title;?></h3>
                  <p class="excert">
                    <?php echo $blog;?>
                  </p>
                  <div class="row mt-30 mb-30">              
                  </div>
                </div>
              </div>

<!--               <div class="navigation-area">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                    <div class="thumb">
                      <a href="#"><img class="img-fluid" src="img/blog/prev.jpg" alt=""></a>
                    </div>
                    <div class="arrow">
                      <a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
                    </div>
                    <div class="detials">
                      <p>Prev Post</p>
                      <a href="#"><h4>Space The Final Frontier</h4></a>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                    <div class="detials">
                      <p>Next Post</p>
                      <a href="#"><h4>Telescopes 101</h4></a>
                    </div>
                    <div class="arrow">
                      <a href="#"><span class="lnr text-white lnr-arrow-right"></span></a>
                    </div>
                    <div class="thumb">
                      <a href="#"><img class="img-fluid" src="img/blog/next.jpg" alt=""></a>
                    </div>                    
                  </div>                  
                </div>
              </div> -->
              <div class="comments-area">
                <h4>Komentar</h4>
                <?php echo $this->session->flashdata('msg');?>
                <?php
                $colors = array(
                    '#ff9e67',
                    '#10bdff',
                    '#14b5c7',
                    '#f98182',
                    '#8f9ce2',
                    '#ee2b33',
                    '#d4ec15',
                    '#613021',
                );
                foreach ($show_komentar->result() as $row) :
                shuffle($colors);
              ?>
              <div class="row">
                <div class="col-md-12">
                      <div class="row">
                          <div class="col-md-2">
                              <div class="blodpost-tab-img" style="background-color:<?php echo reset($colors);?>;width: 65px;height: 65px;border-radius:50px 50px 50px 50px;">
                                  <center><h2 style="padding-top:20%;color:#fff;"><?php echo substr($row->komentar_nama,0,1);?></h2></center>
                              </div>
                          </div>
                          <div class="col-md-10">
                              <div class="blogpost-tab-description">
                                  <h6><?php echo $row->komentar_nama;?></h6><small><em><?php echo date("d M Y H:i", strtotime($row->komentar_tanggal));?></em></small>
                                  <p><?php echo $row->komentar_isi;?></p>
                              </div>
                              <hr>
                          </div>
                      </div>
                  </div>
              </div>
                <?php
                    $komentar_id=$row->komentar_id;
                    $query=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='1' AND komentar_parent='$komentar_id' ORDER BY komentar_id ASC");
                    foreach ($query->result() as $res) :
                      shuffle($colors);
                ?>
                <div class="comment-list">
                    <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                            <div class="thumb">
                                <img src="img/blog/c1.jpg" alt="">
                            </div>
                            <div class="desc">
                                <h5><a href="#"><?php echo substr($row->komentar_nama,0,1);?></a></h5>
                                <p class="date"><?php echo date("d M Y H:i", strtotime($res->komentar_tanggal));?></p>
                                <p class="comment"><?php echo $res->komentar_isi;?></p>
                            </div>
                        </div>
                    </div>
                </div>  
                <?php endforeach;?>

                <?php endforeach;?>
              <div class="comment-form">
                <h4>Leave a Comment</h4>
                <form action="<?php echo site_url('blog/komentar');?>"" method="post">
                  <div class="form-group form-inline">
                    <div class="form-group col-lg-6 col-md-12 name">
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
                    </div>
                    <div class="form-group col-lg-6 col-md-12 email">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                    </div>                    
                  </div>
<!--                   <div class="form-group">
                    <input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
                  </div> -->
                  <div class="form-group">
                    <textarea class="form-control mb-10" rows="5" name="komentar"  name="komentar" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                  </div>
                  <input type="hidden" name="id" value="<?php echo $id;?>" required>
                  <button type="submit" class="primary-btn text-uppercase">Post Comment</button>
                </form>
              </div>
            </div>
          </div>

            <div class="col-lg-4 sidebar-widgets">
              <div class="widget-wrap">
                <div class="single-sidebar-widget search-widget">
                  <form class="search-form" action="<?php echo site_url('blog/search');?>" method="get">
                      <input placeholder="Search Posts" name="keyword" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'" >
                      <button type="submit"><i class="fa fa-search"></i></button>
                  </form>
                </div>
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
                <div class="single-sidebar-widget ads-widget">
                  <a href="#"><img class="img-fluid" src="img/blog/ads-banner.jpg" alt=""></a>
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
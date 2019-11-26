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
                   Kepala Sekolah                
                </h1>   
                <p class="text-white link-nav"><a href="<?php echo site_url('');?>">Home </a>  <span class="lnr lnr-arrow-right"></span>Kepala Sekolah</p>
            </div>  
        </div>
    </div>
</section>
<!-- End banner Area -->    
<br>   

<!-- Start info Area -->
<section class="info-area pb-120">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-5 no-padding info-area-left">
                <img class="img-fluid" src="<?php echo base_url().'theme/img/teacher.png'?>" style="margin-left: 30px;" alt="">
            </div>
            <div class="col-lg-6 info-area-right">
                <h1>SYAHLANI</h1>
                <h3>Lahir: JAKARTA, 1961-04-23</h3>
                <h3 style="margin-top: 20px">Kata Sambutan</h3>
                <p>Puji syukur kami panjatkan ke hadirat Tuhan Yang Maha Esa atas karunia dan hidayah-Nya, sehingga kita semua dapat membaktikan segala hal yang kita miliki untuk kemajuan dunia pendidikan. Apapun bentuk dan sumbangsih yang kita berikan, jika dilandasi niat yang tulus tanpa memandang imbalan apapun akan menghasilkan mahakarya yang agung untuk bekal kita dan generasi setelah kita. Pendidikan adalah harga mati untuk menjadi pondasi bangsa dan negara dalam menghadapi perkembangan zaman.</p>
                <br>
                <p>
                   Hal ini seiring dengan penguasaan teknologi untuk dimanfaatkan sebaik mungkin, sehingga menciptakan iklim kondusif dalam ranah keilmuan. Dengan konsep yang kontekstual dan efektif, kami mengejewantahkan nilai-nilai pendidikan yang tertuang dalam visi misi M-School, sebagai panduan hukum dalam menjabarkan tujuan hakiki pendidikan.
                </p>
            </div>
        </div>
    </div>  
</section>
<!-- End info Area -->  
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
@extends('landing.layout.app')

@section('title')
Bukti Pembayaran
@endsection

@push('after-style')

@endpush

@section('content')
<div id="page-wrapper">
    <!-- ==== Slider ==== -->
    <div class="container-fluid p-0">
       <!-- Slider -->
       <div id="slider" class="slider-full" style="width:1200px;height:750px;margin:0 auto;margin-bottom: 0px;">
          <!-- Slide 1 -->
          <div class="ls-slide" data-ls="duration:4000; transition2d:7;">
             <!-- bg image  -->
             <img src="img/slider/slide1.jpg" class="ls-bg" alt="" />
             <!-- text  -->
             <div class="ls-l header-wrapper " data-ls="offsetyin:150; durationin:700; delayin:200; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; durationout:400;">
                <div class="header-text text-light">
                   <span class="text-light">Welcome to</span> 
                   <h1>Montessori Kindergarten</h1>
                   <!--the div below is hidden on small screens  -->
                   <div class="hidden-small">
                      <p class="header-p">We offer high quality Montessori Kindergarten Services, contact us or visit us today for more information</p>
                      <a class="btn btn-quaternary" href="contact.html">Contact us</a>
                   </div>
                   <!--/d-none  -->
                </div>
                <!-- header-text  -->
             </div>
             <!-- ls-l  -->
          </div>
          <!-- ls-slide -->
          <!-- Slide 2 -->
          <div class="ls-slide" data-ls="duration:4000; transition2d:7;">
             <!-- bg image  -->
             <img src="img/slider/slide2.jpg" class="ls-bg" alt="" />
             <!-- text  -->
             <div class="ls-l header-wrapper " data-ls="offsetyin:150; durationin:700; delayin:200; easingin:easeOutQuint; rotatexin:20; scalexin:1.4;durationout:400;">
                <div class="header-text text-light">
                   <span class="text-light">Fun & Safe</span> 
                   <h1>Montessori Kindergarten</h1>
                   <!--the div below is hidden on small screens  -->
                   <div class="hidden-small">
                      <p class="header-p">Get inspired by seeing the children excited about learning, book a visit and experience our curriculum in action</p>
                      <a class="btn btn-secondary " href="contact.html">Contact us</a>
                   </div>
                   <!--/d-none  -->
                </div>
                <!-- header-text  -->
             </div>
             <!-- ls-l  -->
          </div>
          <!-- ls-slide -->
          <!-- Slide 3 -->
          <div class="ls-slide" data-ls="duration:4000; transition2d:7;">
             <!-- bg image  -->
             <img src="img/slider/slide3.jpg" class="ls-bg" alt="" />
             <!-- text  -->
             <div class="ls-l header-wrapper " data-ls="offsetyin:150; durationin:700; delayin:200; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; durationout:400;">
                <div class="header-text text-light">
                   <span class="text-light">Social & Fun</span> 
                   <h1>Environment</h1>
                   <!--the div below is hidden on small screens  -->
                   <div class="hidden-small">
                      <p class="header-p">ABC Tots ignite children’s natural curiosity to be self-learners in engaging environments and activities.</p>
                      <a class="btn btn-primary" href="about.html">About us</a>
                   </div>
                   <!--/d-none  -->
                </div>
                <!-- header-text  -->
             </div>
             <!-- ls-l  -->
          </div>
          <!-- ls-slide -->
          <!-- Slide 4 -->
          <div class="ls-slide" data-ls="duration:4000; transition2d:7;">
             <!-- bg image  -->
             <img src="img/slider/slide4.jpg" class="ls-bg" alt="" />
             <!-- text  -->
             <div class="ls-l header-wrapper " data-ls="offsetyin:150; durationin:700; delayin:200; easingin:easeOutQuint; rotatexin:20; scalexin:1.4;durationout:400;">
                <div class="header-text text-light">
                   <span class="text-light">Nurturing</span> 
                   <h1>Teachers</h1>
                   <!--the div below is hidden on small screens  -->
                   <div class="hidden-small">
                      <p class="header-p">Meet our highly qualified caring teachers and staff</p>
                      <a class="btn btn-secondary" href="about.html">About us</a>
                   </div>
                   <!--/d-none  -->
                </div>
                <!-- header-text  -->
             </div>
             <!-- ls-l  -->
          </div>
          <!-- ls-slide -->
       </div>
       <!-- /slider -->
       <svg version="1.1" id="divider"  class="slider-divider" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          viewBox="0 0 1440 126" preserveAspectRatio="none slice" xml:space="preserve">
          <path class="st0" d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z"/>
       </svg>
       <!-- /Slider ends -->
    </div>
    <!-- /container-fluid -->
    <!-- ==== Page Content ==== -->
    <div class="container">
       <!-- section -->  
       <section id="intro-cards"  class="row pb-0">
          <!-- card 1 -->  
          <div class="col-lg-4" data-aos="zoom-out">
             <div class="card card-flip">
                <!-- front of card  -->  
                <div class="card bg-secondary text-light ">
                   <div class="p-5">
                      <h5 class="card-title text-light">Montesori</h5>
                      <p class="card-text">
                        metode pembelajaran yang membebaskan anak untuk memilih aktivitas sesuai minat dan bakatnya
                      </p>
                      <!-- button show on mobile only,where flip is disabled -->
                      <a href="contact.html" class="btn d-lg-none">Contact us</a>
                   </div>
                   <!-- /p-5 -->
                   <!-- image -->
                   <img class="card-img" src="img/intro1.jpg" alt="">
                </div>
                <!-- /card -->
                <!-- back of card -->  			
                <div class="card bg-secondary text-light card-back">
                   <div class="card-body d-flex justify-content-center align-items-center">
                      <div class="p-4">
                         <h5 class="card-title text-light">Montesori</h5>
                         <p class="card-text">Montessori adalah metode pembelajaran yang menitikberatkan pada pengembangan potensi individu dengan memberikan kebebasan belajar dan menggunakan peralatan belajar yang sesuai dengan tingkat perkembangan siswa.
                         </p>
                         <!-- button -->
                         <a href="contact.html" class="btn">contact us</a>
                      </div>
                      <!-- /p-4 -->
                   </div>
                   <!-- /card-body -->
                </div>
                <!-- /card -->
             </div>
             <!--/col-lg -->
          </div>
          <!--/card 1 -->  
          <!-- card 2-->  
          <div class="col-lg-4" data-aos="zoom-out" data-aos-delay="300">
             <div class="card card-flip ">
                <!-- front of card  -->  
                <div class="card bg-primary text-light">
                   <div class="p-5">
                      <h5 class="card-title text-light">Kurikulum Merdeka</h5>
                      <p class="card-text">
                        pendidikan yang menekankan pada pembelajara pada pengembangan pribadi dan sosial peserta didik. 
                      </p>
                      <!-- button show on mobile only,where flip is disabled -->
                      <a href="services.html" class="btn d-lg-none">Our Services</a>
                   </div>
                   <!-- /p-5 -->
                   <!-- image -->
                   <img class="card-img" src="img/intro2.jpg" alt="">
                </div>
                <!-- /card -->
                <!-- back of card -->  			
                <div class="card bg-primary text-light card-back">
                   <div class="card-body d-flex justify-content-center align-items-center">
                      <div class="p-4">
                         <h5 class="card-title text-light">Kurikulum Merdeka</h5>
                         <p class="card-text">Kurikulum Merdeka adalah sebuah pendekatan pendidikan yang menekankan pada pembelajaran yang lebih kontekstual, berbasis kompetensi, dan berfokus pada pengembangan pribadi dan sosial peserta didik. Pendekatan Bermain: Kurikulum Merdeka mengakui pentingnya bermain dalam pembelajaran anak-anak
                         </p>
                        
                      </div>
                      <!-- /p-4 -->
                   </div>
                   <!-- /card-body -->
                </div>
                <!-- /card -->
             </div>
             <!--/card 2 -->
          </div>
          <!--/col-lg -->
          <!-- card 3-->  
          <div class="col-lg-4" data-aos="zoom-out" data-aos-delay="600">
             <div class="card card-flip ">
                <!-- front of card  -->  
                <div class="card bg-tertiary text-light">
                   <div class="p-5">
                      <h5 class="card-title text-light">Pengajar Profesional</h5>
                      <p class="card-text">
                        pengajar yang menyusun materi serta kegiatan yang kreatif, mendidik dan mengajar siswa.
                      </p>
                      <!-- button show on mobile only,where flip is disabled -->
                      <a href="team.html" class="btn d-lg-none">Our Team</a>
                   </div>
                   <!-- /p-5 -->
                   <!-- image -->
                   <img class="card-img" src="img/intro3.jpg" alt="">
                </div>
                <!-- /card -->
                <!-- back of card -->  			
                <div class="card bg-tertiary text-light card-back">
                   <div class="card-body d-flex justify-content-center align-items-center">
                      <div class="p-4">
                         <h5 class="card-title text-light">Pengajar Profesioal</h5>
                         <p class="card-text">dapat menyusun materi serta kegiatan yang kreatif, mendidik dan mengajar siswa serta menganalisis perkembangan anak didik sesuai tahapanperkembangannya
                         </p>
                         <!-- button -->
                         <a href="team.html" class="btn">Our Team</a>
                      </div>
                      <!-- /p-4 -->
                   </div>
                   <!-- /card-body -->
                </div>
                <!-- /card -->
             </div>
             <!--/card 3 -->
          </div>
          <!--/col-lg -->
       </section>
       <!-- #intro-cards --> 
    </div>
    <!-- /container -->  
    <!-- section -->
    <section id="about-home" class="container-fluid pb-0">
       <div class="container">
          <!-- section heading -->  
          <div class="section-heading text-center">
             <h2>Tentang Kami</h2>
             <p class="subtitle">Yuk Kenal Kami</p>
          </div>
          <!-- /section-heading -->
          <div class="row">
             <div class="col-lg-7 ">
                <h3>SEJARAH SINGKAT </h3>
                <P>Pada tanggal 1 Agustus 1957, berdirilah Taman Kanak-kanak Kristen Pirngadi (Montessori Kindergarten), sebuah lembaga pendidikan yang didirikan dengan tujuan mulia untuk memberikan pendidikan dasar yang berkualitas bagi anak-anak. Sejak awal pendiriannya, TK Kristen Pirngadi (Montessori Kindergarten) telah berkomitmen untuk menanamkan nilai-nilai keagamaan, moral, dan akademis yang kuat, membentuk fondasi kokoh bagi perkembangan karakter dan pengetahuan anak-anak didiknya. Dengan semangat dan dedikasi yang tinggi dari para pendidik dan staf, TK Kristen Pirngadi terus berusaha menciptakan lingkungan belajar yang menyenangkan dan inspiratif, sehingga setiap anak dapat tumbuh dan berkembang dengan optimal.</P>
                <a href="contact.html" class="btn btn-secondary ">Kontak Kami</a>
             </div>
             <!-- /col-lg -->
             <div class="col-lg-5 res-margin">
                <!-- image -->
                <img class="img-fluid rounded" src="img/about/about2.jpg" alt="">
                <!-- ornament starts-->
                <div class="ornament-rainbow" data-aos="zoom-out"></div>
             </div>
             <!-- /col-lg -->
          </div>
          
       </div>
       <!-- /container-->
       <!-- whale in water scene -->
       <!-- whale -->
       <img src="img/ornaments/whale.png" class="floating-whale" alt="">
       <!-- waves -->
       <div class="waveHorizontals">
          <div id="waveHorizontal1" class="waveHorizontal"></div>
          <div id="waveHorizontal2" class="waveHorizontal"></div>
          <div id="waveHorizontal3" class="waveHorizontal"></div>
       </div>
       <!-- sea -->
       <div class="sea"></div>
       <!--/ whale in water scene ends -->
    </section>
    <!-- /section ends -->
    <!-- section --> 
    <section id="features" class="bg-secondary text-light">
       <div class="container">
          <!-- section heading -->  
          <div class="section-heading text-center">
             <h2>TK KRISTEN PIRNGADI</h2>
             <p class="subtitle">PROFESIONAL</p>
          </div>
          <!-- /section-heading -->
          <!-- features -->
          <div class="row ">
             <div class="col-lg-8">
                <div class="row ">
                   <div class="col-md-6 col-lg-6">
                      <!-- feature -->
                      <div class="feature-with-icon">
                         <div class="icon-features">
                            <!-- icon -->
                            <i class="flaticon-maternity text-primary"></i>
                         </div>
                         <h5>Lingkungan yang Aman</h5>
                         <p>
                           Lingkungan aman di taman kanak-kanak dapat belajar dan bermain tanpa merasa takut atau terancam. </p>
                      </div>
                      <!-- /feature-with-icon-->
                      <!-- feature -->
                      <div class="feature-with-icon mt-5">
                         <div class="icon-features">
                            <!-- icon -->
                            <i class="flaticon-open-book-1 text-primary"></i>
                         </div>
                         <h5>Kegiatan pendidikan  montesori</h5>
                         <p>Kegiatan pendidikan Montessori adalah serangkaian aktivitas yang dirancang untuk mendukung perkembangan holistik anak, mencakup aspek kognitif, sosial, emosional, dan fisik. </p>
                      </div>
                      <!-- /feature-with-icon-->
                   </div>
                   <div class="col-md-6 col-lg-6">
                      <!-- feature -->
                      <div class="feature-with-icon">
                         <div class="icon-features">
                            <!-- icon -->
                            <i class="flaticon-classroom-1 text-primary"></i>
                         </div>
                         <h5>Guru yang berkualifikasi</h5>
                         <p>Guru yang berkualifikasi adalah pilar utama dalam dunia pendidikan, terutama di tingkat dasar dan menengah. </p>
                      </div>
                      <!-- /feature-with-icon-->
                      <!-- feature -->
                      <div class="feature-with-icon mt-5">
                         <div class="icon-features">
                            <!-- icon -->
                            <i class="flaticon-baby-boy text-primary"></i>
                         </div>
                         <h5>Perawatan Anak</h5>
                         <p>memastikan bahwa anak-anak tumbuh dan berkembang dalam lingkungan yang sehat, aman, dan mendukung. </p>
                      </div>
                      <!-- /feature-with-icon-->
                   </div>
                   <!-- /col-l -->
                </div>
                <!-- /row-->
             </div>
             <!-- /col-l -->
             <div class="col-lg-4 features-bg">
                <!-- image -->
                <img src="img/features.png" alt="" class="img-fluid"  data-aos="zoom-out"   data-aos-delay="300"/>
             </div>
             <!-- /col-l -->
          </div>
          <!-- /row -->
       </div>
       <!-- /container -->
    </section>
    <!-- /section ends -->
    <!-- section -->
    <section id="services-home" class="container-fluid">
       <div class="container pb-5">
          <!-- section heading -->  
          <div class="section-heading text-center">
             <h2>Fasilitas</h2>
             <p class="subtitle">Ruang Lingkup TK</p>
          </div>
          <!-- /section heading -->
          <!-- row -->
          <div class="row vertical-tabs">
             <div class="col-lg-12">
                <!-- navigation -->
                <div class="tabs-with-icon">
                   <nav>
                      <div class="nav nav-tabs" id="nav-tab" role="tablist">
                         <a class="nav-item nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1"><i class="flaticon-abc-block"></i>Tempat Bermain</a>
                         <a class="nav-item nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" ><i class="flaticon-kids-1"></i>Halaman Bermain</a>
                         <a class="nav-item nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" ><i class="flaticon-smiling-baby"></i>Uks & Tempat Tidur</a>
                         <a class="nav-item nav-link" id="tab4-tab" data-toggle="tab" href="#tab4"><i class="flaticon-blackboard"></i>Kelas</a>
                         <a class="nav-item nav-link" id="tab5-tab" data-toggle="tab" href="#tab5" ><i class="flaticon-kids"></i>Ruang Aktivitas</a>
                      </div>
                   </nav>
                   <!-- tab-content -->
                   <div class="tab-content block-padding bg-light" id="nav-tabContent">
                      <div class="tab-pane active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                         <!-- row -->
                         <div class="row">
                            <div class="col-lg-6">
                               <!-- image -->
                               <img src="img/services/service1.jpg" alt="" class="rounded img-fluid">
                               <!-- ornament starts-->
                               <div class="ornament-rainbow" data-aos="fade-right"></div>
                            </div>
                            <!-- col-lg -->
                            <div class="col-lg-6">
                               <h3>Area Bermain yang Aman</h3>
                               <p>Area luar ruangan dengan rumput, pohon, dan taman bermain yang memungkinkan anak-anak untuk berlari, bermain, dan berinteraksi dengan alam.</p>
                               <ul class="custom pl-0">
                                  <li>Mainan dan peralatan bermain yang bebas dari bahan berbahaya dan sesuai dengan usia anak.</li>
                                  <li>Tempat yang mudah diawasi oleh guru atau pendamping untuk memastikan keselamatan anak-anak.</li>
                                  
                               </ul>
                               <!-- Button -->	 
                               <a href="services-single.html" class="btn btn-secondary mt-4">Daftar Sekarang</a>
                            </div>
                            <!-- /col-lg -->
                         </div>
                         <!-- row -->
                      </div>
                      <!-- ./Tab-pane -->
                      <div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                         <div class="row">
                            <div class="col-lg-6">
                               <h3>Ruang Terbuka</h3>
                               <p>Ruangan yang selalu bersih dan rapi untuk memastikan kesehatan anak-anak.</p>
                               <ul class="custom pl-0">
                                  <li>Fasilitas yang mudah diakses oleh semua anak, termasuk anak dengan kebutuhan khusus.</li>
                                  <li>Mainan edukatif tempat bermain untuk anak dengan area dan fasilitas aman dan area yang selalu di jaga.</li>
                                
                               </ul>
                               <!-- Button -->	 
                               <a href="services-single.html" class="btn btn-secondary mt-4">Daftar Sekarang</a>
                            </div>
                            <!-- /col-lg -->
                            <div class="col-lg-6 res-margin">
                               <!-- image -->
                               <img src="img/services/service2.jpg" alt="" class="rounded img-fluid">
                               <!-- ornament starts-->
                               <div class="ornament-stars" data-aos="fade-right"></div>
                            </div>
                            <!-- col-lg -->
                         </div>
                         <!-- row -->
                      </div>
                      <!-- ./Tab-pane -->
                      <div class="tab-pane" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                         <div class="row">
                            <div class="col-lg-6">
                               <!-- image -->
                               <img src="img/services/service3.jpg" alt="" class="rounded img-fluid">
                               <!-- ornament starts-->
                               <div class="ornament-bubbles" data-aos="fade-right"></div>
                            </div>
                            <!-- col-lg -->
                            <div class="col-lg-6">
                               <h3>Uks & Tempat Istirahat Anak</h3>
                               <p>UKS adalah fasilitas yang disediakan di sekolah untuk memastikan kesehatan dan keselamatan anak-anak. Berikut adalah elemen-elemen penting yang seharusnya ada di UKS TK</p>
                               <ul class="custom pl-0">
                                  <li>Seorang petugas kesehatan atau perawat yang terlatih dalam penanganan pertama dan kesehatan anak-anak.</li>
                                  <li>Program bimbingan kesehatan untuk anak-anak, seperti mencuci tangan yang benar, sikat gigi, dan menjaga kebersihan diri.</li>
                                  <li>Tempat tidur atau ranjang untuk anak yang sakit atau merasa tidak enak badan agar dapat beristirahat sementara menunggu dijemput oleh orang tua.</li>
                               </ul>
                               <!-- Button -->	 
                               <a href="services-single.html" class="btn btn-secondary mt-4">Daftar Sekarang</a>
                            </div>
                            <!-- /col-lg -->
                         </div>
                         <!-- row -->
                      </div>
                      <!-- ./Tab-pane -->
                      <div class="tab-pane" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                         <div class="row">
                            <div class="col-lg-6">
                               <h3>Ruang Kelas</h3>
                               <p>Ruang kelas TK (Taman Kanak-Kanak) / Montessori Kindergarten
                                 harus dirancang dengan mempertimbangkan kebutuhan fisik, kognitif, sosial, dan emosional anak-anak.</p>
                               <ul class="custom pl-0">
                                  <li>Area yang luas dan terbuka dengan fleksibilitas untuk mengatur berbagai zona aktivitas.</li>
                                  <li>Jendela besar untuk memungkinkan cahaya alami masuk, yang dapat meningkatkan suasana hati dan konsentrasi anak-anak.</li>
                                  <li>Meja dan kursi kecil yang sesuai dengan ukuran anak-anak untuk aktivitas menulis, menggambar, dan membuat kerajinan.</li>
                               </ul>
                               <!-- Button -->	 
                               <a href="services-single.html" class="btn btn-secondary mt-4">Daftar Sekarang</a>
                            </div>
                            <!-- /col-lg -->
                            <div class="col-lg-6 res-margin">
                               <!-- image -->
                               <img src="img/services/service4.jpg" alt="" class="rounded img-fluid">
                               <!-- ornament starts-->
                               <div class="ornament-stars" data-aos="fade-right"></div>
                            </div>
                            <!-- col-lg -->
                         </div>
                         <!-- row -->
                      </div>
                      <!-- ./Tab-pane -->
                      <div class="tab-pane" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
                         <div class="row">
                            <div class="col-lg-6">
                               <!-- image -->
                               <img src="img/services/service5.jpg" alt="" class="rounded img-fluid">
                               <!-- ornament starts-->
                               <div class="ornament-rainbow" data-aos="fade-right"></div>
                            </div>
                            <!-- col-lg -->
                            <div class="col-lg-6">
                               <h3>Ruang Aktivitas Anak</h3>
                               <p>Ruang aktivitas di TK adalah area yang dirancang untuk mendukung berbagai jenis kegiatan anak-anak, baik yang bersifat edukatif, kreatif, maupun fisik. .</p>
                               <ul class="custom pl-0">
                                  <li>Tempat untuk kegiatan seni dan kerajinan yang mengembangkan kreativitas dan keterampilan motorik halus anak.</li>
                                  <li>Rak atau kotak untuk menyimpan bahan-bahan seni dan hasil karya anak.</li>
                                  <li>Mainan edukatif seperti blok bangunan, puzzle, dan permainan peran.</li>
                               </ul>
                               <!-- Button -->	 
                               <a href="services-single.html" class="btn btn-secondary mt-4">Read More</a>
                            </div>
                            <!-- /col-lg -->
                         </div>
                         <!-- row -->
                      </div>
                      <!-- ./Tab-pane -->
                   </div>
                   <!-- ./Tab-content -->
                </div>
                <!-- vertical-tabs -->
             </div>
             <!-- /col-lg-6 -->
          </div>
          <!-- /row --> 
       </div>
       <!-- /container -->
    </section>

    <section id="team-home" class="container">
       <!-- section heading -->  
       <div class="section-heading text-center">
          <h2>Guru</h2>
          <p class="subtitle">Guru Professionals</p>
       </div>
       <!-- /section-heading -->  
       <div class="row">
          <div class="col-lg-7">
             <h3>Guru profesional TK-Kristen</h3>
             <p>memainkan peran kunci dalam perkembangan awal anak-anak. Mereka tidak hanya mengajar, tetapi juga membimbing, mendukung, dan menciptakan lingkungan belajar yang positif. </p>
             <ul class="checkmark pl-0 font-weight-bold">
                <li>Kualifikasi dan Pendidikan</li>
                <li>Pengetahuan dan Keterampilan</li>
                <li>Kualitas Pribadi</li>
             </ul>
             <!-- /ul-->
          </div>
          <!-- /col-lg-->
          <div class="col-lg-5 res-margin">
             <img src="img/team/team-home.jpg" alt="" class="img-fluid blob2">
             <!-- ornament starts-->
             <div class="ornament-stars" data-aos="fade-down"></div>
          </div>
          <!-- /col-lg-->
          <div class="col-lg-12">
             <!-- team carousel -->  
             <div class="carousel-4items owl-carousel owl-theme mt-5">
                <!-- Team member 1 -->
                <div class="col-md-12 team-style1 notepad">
                   <div class="team_img">
                      <a href="team-single.html">
                      <img src="img/team/team1.jpg" class="img-fluid" alt="">
                      </a>
                      <!-- social icons -->
                      <ul class="social">
                         <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                         <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                         <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                         <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                      </ul>
                   </div>
                   <!-- /team_img -->
                   <div class="team-content">
                      <a href="team-single.html">
                         <h5 class="title">Dra Sarje Kristiani</h5>
                      </a>
                      <span class="post">Kepala Sekolah & Guru</span>
                     
                   </div>
                   <!-- /team-content -->
                </div>
                <!-- /team-style1 -->
                <!-- Team member 2 -->
                <div class="col-md-12 team-style1 notepad">
                   <div class="team_img">
                      <a href="team-single.html">
                      <img src="img/team/team2.jpg" class="img-fluid" alt="">
                      </a>
                      <!-- social icons -->
                      <ul class="social">
                         <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                         <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                         <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                         <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                      </ul>
                   </div>
                   <!-- /team_img -->
                   <div class="team-content">
                      <a href="team-single.html">
                         <h5 class="title">Ms Iren</h5>
                      </a>
                      <span class="post">Guru Tk</span>
                     
                   </div>
                   <!-- /team-content -->
                </div>
                <!-- /team-style1 -->
                <!-- Team member 3 -->
                <div class="col-md-12 team-style1 notepad">
                   <div class="team_img">
                      <a href="team-single.html">
                      <img src="img/team/team3.jpg" class="img-fluid" alt="">
                      </a>
                      <!-- social icons -->
                      <ul class="social">
                         <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                         <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                         <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                         <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                      </ul>
                   </div>
                   <!-- /team_img -->
                   <div class="team-content">
                      <a href="team-single.html">
                         <h5 class="title">Mr Yogi</h5>
                      </a>
                      <span class="post">Guru TK</span>
                     
                   </div>
                   <!-- /team-content -->
                </div>
                <!-- /team-style1 -->
                <!-- Team member 4 -->
                <div class="col-md-12 team-style1 notepad">
                   <div class="team_img">
                      <a href="team-single.html">
                      <img src="img/team/team4.jpg" class="img-fluid" alt="">
                      </a>
                      <!-- social icons -->
                      <ul class="social">
                         <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                         <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                         <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                         <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                      </ul>
                   </div>
                   <!-- /team_img -->
                   <div class="team-content">
                      <a href="team-single.html">
                         <h5 class="title">Ms. Sisil</h5>
                      </a>
                      <span class="post">Guru Tk</span>
                      
                   </div>
                   <!-- /team-content -->
                </div>
                <!-- /team-style1 -->
                <!-- Team member 5 -->
                
                <!-- /team-style1 -->
             </div>
             <!-- /owl-team--> 
          </div>
          <!-- /col-lg-->
       </div>
       <!-- /row-->
    </section>
    <!-- /section ends-->
    <!-- section --> 
    <section id="gallery-home" class="container-fluid bg-tertiary no-bg-sm">
       <div class="container">
          <!-- section heading -->  
          <div class="section-heading text-center text-light">
             <h2>Gallery</h2>
             <p class="subtitle">Our facilities</p>
          </div>
          <!-- /section-heading -->
          <!-- centered Gallery navigation -->
          <ul class="nav nav-pills category-isotope center-nav">
             <li class="nav-item">
                <a class="nav-link active" href="#" data-toggle="tab" data-filter="*">All</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="tab" data-filter=".school">Sekolah</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="tab" data-filter=".activities">Kegiatan</a>
             </li>
          </ul>
          <!-- /ul -->
          <!-- Gallery -->
          <div id="gallery-isotope" class="row mt-5 magnific-popup">
             <!-- Image 1 -->
             <div class="col-sm-6 col-md-6 col-lg-4 activities">
                <div class="portfolio-item">
                   <div class="gallery-thumb">
                      <img class="img-fluid " src="img/gallery/gallery1.jpg" alt="">
                      <span class="overlay-mask"></span>
                      <a href="img/gallery/gallery1.jpg" class="link centered" title="You can add caption to pictures.">
                      <i class="fa fa-expand"></i></a>
                   </div>
                </div>
             </div>
             <!-- Image 2 -->
             <div class="col-sm-6 col-md-6 col-lg-4 school">
                <div class="portfolio-item">
                   <div class="gallery-thumb">
                      <img class="img-fluid " src="img/gallery/gallery2.jpg" alt="">
                      <span class="overlay-mask"></span>
                      <a href="img/gallery/gallery2.jpg" class="link centered" title="You can add caption to pictures.">
                      <i class="fa fa-expand"></i></a>
                   </div>
                </div>
             </div>
             <!-- Image 3 -->
             <div class="col-sm-6 col-md-6 col-lg-4 school">
                <div class="portfolio-item">
                   <div class="gallery-thumb">
                      <img class="img-fluid " src="img/gallery/gallery3.jpg" alt="">
                      <span class="overlay-mask"></span>
                      <a href="img/gallery/gallery3.jpg" class="link centered" title="You can add caption to pictures.">
                      <i class="fa fa-expand"></i></a>
                   </div>
                </div>
             </div>
             <!-- Image 4 -->
             <div class="col-sm-6 col-md-6 col-lg-4 activities">
                <div class="portfolio-item">
                   <div class="gallery-thumb">
                      <img class="img-fluid " src="img/gallery/gallery4.jpg" alt="">
                      <span class="overlay-mask"></span>
                      <a href="img/gallery/gallery4.jpg" class="link centered" title="You can add caption to pictures.">
                      <i class="fa fa-expand"></i></a>
                   </div>
                </div>
             </div>
             <!-- Image 5 -->
             <div class="col-sm-6 col-md-6 col-lg-4 school">
                <div class="portfolio-item">
                   <div class="gallery-thumb">
                      <img class="img-fluid " src="img/gallery/gallery5.jpg" alt="">
                      <span class="overlay-mask"></span>
                      <a href="img/gallery/gallery5.jpg" class="link centered" title="You can add caption to pictures.">
                      <i class="fa fa-expand"></i></a>
                   </div>
                </div>
             </div>
             <!-- Image 6 -->
             <div class="col-sm-6 col-md-6 col-lg-4 school">
                <div class="portfolio-item">
                   <div class="gallery-thumb">
                      <img class="img-fluid " src="img/gallery/gallery6.jpg" alt="">
                      <span class="overlay-mask"></span>
                      <a href="img/gallery/gallery6.jpg" class="link centered" title="You can add caption to pictures.">
                      <i class="fa fa-expand"></i></a>
                   </div>
                </div>
             </div>
             <!-- Image 7 -->
             <div class="col-sm-6 col-md-6 col-lg-4 activities">
                <div class="portfolio-item">
                   <div class="gallery-thumb">
                      <img class="img-fluid " src="img/gallery/gallery7.jpg" alt="">
                      <span class="overlay-mask"></span>
                      <a href="img/gallery/gallery7.jpg" class="link centered" title="You can add caption to pictures.">
                      <i class="fa fa-expand"></i></a>
                   </div>
                </div>
             </div>
             <!-- Image 8 -->
             <div class="col-sm-6 col-md-6 col-lg-4 activities">
                <div class="portfolio-item">
                   <div class="gallery-thumb">
                      <img class="img-fluid " src="img/gallery/gallery8.jpg" alt="">
                      <span class="overlay-mask"></span>
                      <a href="img/gallery/gallery8.jpg" class="link centered" title="You can add caption to pictures.">
                      <i class="fa fa-expand"></i></a>
                   </div>
                </div>
             </div>
             <!-- Image 9 -->
             <div class="col-sm-6 col-md-6 col-lg-4 school">
                <div class="portfolio-item">
                   <div class="gallery-thumb">
                      <img class="img-fluid " src="img/gallery/gallery9.jpg" alt="">
                      <span class="overlay-mask"></span>
                      <a href="img/gallery/gallery9.jpg" class="link centered" title="You can add caption to pictures.">
                      <i class="fa fa-expand"></i></a>
                   </div>
                </div>
             </div>
             <!-- Image 10 -->
             <div class="col-sm-6 col-md-6 col-lg-4 school">
                <div class="portfolio-item">
                   <div class="gallery-thumb">
                      <img class="img-fluid " src="img/gallery/gallery10.jpg" alt="">
                      <span class="overlay-mask"></span>
                      <a href="img/gallery/gallery10.jpg" class="link centered" title="You can add caption to pictures.">
                      <i class="fa fa-expand"></i></a>
                   </div>
                </div>
             </div>
             <!-- Image 11 -->
             <div class="col-sm-6 col-md-6 col-lg-4 school">
                <div class="portfolio-item">
                   <div class="gallery-thumb">
                      <img class="img-fluid " src="img/gallery/gallery11.jpg" alt="">
                      <span class="overlay-mask"></span>
                      <a href="img/gallery/gallery11.jpg" class="link centered" title="You can add caption to pictures.">
                      <i class="fa fa-expand"></i></a>
                   </div>
                </div>
             </div>
             <!-- Image 12 -->
             <div class="col-sm-6 col-md-6 col-lg-4 school">
                <div class="portfolio-item">
                   <div class="gallery-thumb">
                      <img class="img-fluid " src="img/gallery/gallery12.jpg" alt="">
                      <span class="overlay-mask"></span>
                      <a href="img/gallery/gallery12.jpg" class="link centered" title="You can add caption to pictures.">
                      <i class="fa fa-expand"></i></a>
                   </div>
                </div>
             </div>
          </div>
          <!-- /gallery-isotope-->	   
       </div>
       <!-- /container-->
    </section>
    <!-- /section ends -->
    <!-- section -->
   

    <section id="contact-home" class="container">
       <div class="row">
          <div class="col-lg-10 offset-lg-1 text-center">
             <!-- section heading -->  
             <div class="section-heading text-center">
                <h2>Kontak Kami</h2>
               
             </div>
             <!-- /section-heading -->  
             <!-- contact info boxes start-->
             <div class="contact-info res-margin">
                <div class="row res-margin">
                   <div class="col-lg-4">
                      <div class="contact-icon bg-secondary text-light">
                         <!---icon-->
                         <i class="fa fa-envelope top-icon"></i>
                         <!-- contact-icon info-->
                         <div class="contact-icon-info">
                            <h5>Alamat Email</h5>
                            <p><a href="mailto:email@yoursite.com">sekretariat@pirngadi.sch.id</a></p>
                         </div>
                      </div>
                      <!-- /contact-icon-->
                   </div>
                   <!-- /col-lg-->
                   <div class="col-lg-4 res-margin">
                      <div class="contact-icon bg-secondary text-light">
                         <!---icon-->
                         <i class="fa fa-map-marker top-icon"></i>
                         <!-- contact-icon info-->
                         <div class="contact-icon-info">
                            <h5>Alamat</h5>
                            <p>Jl.Pirngadi  No 4- 6 - Surabaya</p>
                         </div>
                      </div>
                      <!-- /contact-icon-->
                   </div>
                   <!-- /col-lg -->
                   <div class="col-lg-4 res-margin">
                      <div class="contact-icon bg-secondary text-light">
                         <!---icon-->
                         <i class="fa fa-phone top-icon"></i>
                         <!-- contact-icon info-->
                         <div class="contact-icon-info">
                            <h5>Telepon</h5>
                            <p>+62 811-3400-986</p>
                         </div>
                      </div>
                      <!-- /contact-icon-->
                   </div>
                   <!-- /col-lg-->
                </div>
                <!-- /row -->
             </div>
             <!-- /contact-info-->
          </div>
          <!-- /col-lg-->
          <!--notepad -->
          <div class="col-lg-12 mt-5 block-padding force notepad pl-5 pr-5" >
             <div class="row">
                <div class="col-lg-7">
                   <!-- contact-info-->
                   <h4>Send us a message</h4>
                   <!-- Form Starts -->
                   <div id="contact_form">
                      <div class="form-group">
                         <div class="row">
                            <div class="col-md-6">
                               <label>Name<span class="required">*</span></label>
                               <input type="text" name="name" class="form-control input-field" required=""> 
                            </div>
                            <div class="col-md-6">
                               <label>Email Address <span class="required">*</span></label>
                               <input type="email" name="email" class="form-control input-field" required=""> 
                            </div>
                         </div>
                         <div class="row">
                            <div class="col-md-12">
                               <label>Subject</label>
                               <input type="text" name="subject" class="form-control input-field"> 
                            </div>
                            <div class="col-md-12">
                               <label>Message<span class="required">*</span></label>
                               <textarea name="message" id="message" class="textarea-field form-control" rows="3"  required=""></textarea>
                            </div>
                         </div>
                         <button type="submit" id="submit_btn" value="Submit" class="btn btn-tertiary">Send message</button>
                      </div>
                      <!-- /form-group-->
                      <!-- Contact results -->
                      <div id="contact_results"></div>
                   </div>
                   <!-- /contact-form-->
                </div>
                <!-- /contact-info-->
                <div class="col-lg-5">
                   <!-- map-->
                   <div id="map-canvas" class="mt-5 rounded"></div>
                </div>
                <!-- ornament starts-->
                <div class="ornament-stars mt-8" data-aos="zoom-out"></div>
             </div>
             <!-- /row-->
          </div>
          <!-- /col-lg-->
       </div>
       <!-- /.row-->
    </section>
    <!-- /Section -->
 </div>
@endsection

@push('after-script')


@endpush
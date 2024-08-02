@extends('landing.layout.app')

@section('title')
Bukti Pembayaran
@endsection

@push('after-style')

@endpush

@section('content')
<div id="page-wrapper">
    <!-- Jumbotron -->
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
    <!-- /page -->
 </div>

@endsection

@push('after-script')


@endpush
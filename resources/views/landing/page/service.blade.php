@extends('landing.layout.app')

@section('title')
Bukti Pembayaran
@endsection

@push('after-style')

@endpush

@section('content')
<div id="page-wrapper">
    <!-- Jumbotron -->
    <div class="jumbo-heading" data-aos="fade-down">
      <h1>Montessori Kindergarten</h1>
      <!-- Breadcrumbs -->
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Fasilitas Montessori Kindergarten</li>
         </ol>
      </nav>
      <!-- /breadcrumb -->
   </div>
    <!-- /jumbotron -->
    <!-- ==== Page Content ==== -->
    <div class="page">
       <div class="container block-padding">
          <!-- row starts -->
          <div class="row">
             <div class="col-lg-5">
                <h2>Layanan Berkualitas</h2>
                <span class="h7 mt-3">TK kami menawarkan lingkungan belajar yang Aman dan Sehat untuk semua anak</span>
             </div>
             <!-- /col-lg-->
             <div class="col-lg-7">
                <p class="mt-2">
                  Fasilitas AC, keamanan, dan ruang lingkup kesehatan yang baik di TK membantu menciptakan lingkungan belajar yang optimal, aman, dan nyaman bagi anak-anak.
                </p>
             </div>
             <!-- /col-lg -->
          </div>
          <!-- /row -->
          <div class="mt-5">
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
          <!-- /mt-5 -->	  
       </div>
       <!-- /container -->
    </div>
    <!-- /page -->
 </div>
@endsection

@push('after-script')


@endpush
@extends('landing.layout.app')

@section('title')
Bukti Pembayaran
@endsection

@push('after-style')

@endpush

@section('content')
<div id="page-wrapper">
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
       <div class="container" >
          <div class="jumbo-heading" data-aos="fade-down">
             <h1>Gallery</h1>
             <!-- Breadcrumbs -->
             <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                   <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                   <li class="breadcrumb-item active" aria-current="page">Gallery </li>
                </ol>
             </nav>
             <!-- /breadcrumb -->
          </div>
          <!-- /jumbo-heading -->
       </div>
       <!-- /container -->
    </div>
    <!-- /jumbotron -->
    <!-- ==== Page Content ==== -->
    <div class="page container">
       <div class="row">
          <div class="col-lg-6 text-center offset-lg-3 mb-5">
             <h2>Our Photo Gallery</h2>
             <p>Abadikan Momen dengan Montessori Kindergarten</p>
          </div>
          <!-- /col-lg -->
       </div>
       <!-- /row -->
       <!-- centered Gallery navigation -->
       <ul class="nav nav-pills category-isotope center-nav">
          <li class="nav-item">
             <a class="nav-link active" href="#" data-toggle="tab" data-filter="*">All</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="#" data-toggle="tab" data-filter=".school">Our School</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="#" data-toggle="tab" data-filter=".activities">Activities</a>
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
    <!-- /page -->
 </div>

@endsection

@push('after-script')


@endpush
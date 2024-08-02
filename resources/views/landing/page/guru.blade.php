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
            <h1>Our Team</h1>
            <!-- Breadcrumbs -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Our Team</li>
                </ol>
            </nav>
            <!-- /breadcrumb -->
        </div>
        <!-- /jumbotron -->
        <!-- ==== Page Content ==== -->
        <div class="page container">
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
        </div>
        <!-- /page -->
    </div>
@endsection

@push('after-script')
@endpush

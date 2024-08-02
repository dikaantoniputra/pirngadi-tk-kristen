@extends('landing.layout.app')

@section('title')
Bukti Pembayaran
@endsection

@push('after-style')

@endpush

@section('content')

<div id="page-wrapper">
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
 </div>

@endsection

@push('after-script')


@endpush
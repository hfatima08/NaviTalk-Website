@extends('layouts.index')

@section('title')
NaviTalk | Contact Us
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
    <div class="contact">
    <section id="hero" class="d-flex align-items-center hero2">
  
      <div class="container">
        <div class="row">
          <div class="col-lg-2"></div>
          <div class="col-lg-4 d-flex flex-column justify-content-center  pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h1>Contact Us</h1>
            <h2>we are always here to assist you, get in touch with us now!</h2>
            <div class="d-flex justify-content-center justify-content-lg-start">
              <a href="#contact" class="btn-get-started scrollto" style="margin-top:-20px">Call Now</a>
             
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
            <img src="{{URL::to('assets/img/contact.png')}}" class="img-fluid animated" alt=""style=" margin-left:30px">
          </div>
        </div>
      </div>
  
    </section><!-- End Hero -->

 
    <div class="bg-contact100" style="background-image: url('assets/img/img-01.png')">
		<div class="container-contact100" >
			<div class="wrap-contact100" >
      <div class="px-lg-5" >
        <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5">Contact Us</h1>
        </div>
        <div class="row gy-5 gx-4 justify-content-center">
            <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp steps" data-wow-delay="0.1s">
                <div class="position-relative bg-light rounded pt-5 pb-4 px-4 steps-item">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                        <i class="fa fa-phone fa-3x text-white"></i>
                    </div>
                    <h5 class="mt-4 mb-3">Call</h5>
                   
                    <p class="mb-0">(92-21) 36620857-59</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp steps" data-wow-delay="0.5s">
                <div class="position-relative bg-light rounded pt-5 pb-4 px-4 steps-item">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                        <i class="fa fa-compass fa-3x text-white" ></i>
                    </div>
                    <div>
                    <h5 class="mt-4 mb-3">Location</h5>
                    <p class="mb-0">Jinnah University for Women 
                      5C, Nazimabad,
                      Karachi – 74600</p>
</div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp steps" data-wow-delay="0.3s">
                <div class="position-relative bg-light rounded pt-5 pb-4 px-4 steps-item">
                    <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                        <i class="fa fa-envelope fa-3x text-white"></i>
                    </div>
                    <h5 class="mt-4 mb-3">Email</h5>
                   <p class="mb-0">navitalkapp@gmail.com</p>
                </div>
            </div>
        </div>

  
</div>
</div>
</div>









</div>
    @endsection
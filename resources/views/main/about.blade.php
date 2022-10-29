@extends('layouts.index')

@section('title')
NaviTalk | About
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center hero2">
  
      <div class="container">
        <div class="row">
          <div class="col-lg-2"></div>
          <div class="col-lg-4 d-flex flex-column justify-content-center  pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h1>ABOUT US</h1>
            <h2>want to learn more about 'NaviTalk'? It's all about lightening the blind's life </h2>
            <div class="d-flex justify-content-center justify-content-lg-start">
              <a href="#about" class="btn-get-started scrollto" style="margin-top:-20px">Start Reading</a>
             
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
            <img src="{{URL::to('assets/img/about.png')}}" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>
  
    </section><!-- End Hero -->

   

    <!-- About Start -->
<div class="container-xxl py-5" >
    <div class="container py-5 px-lg-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="text-primary-gradient fw-medium">About App</h5>
                <h1 class="mb-4">Sightless Wayfinder</h1>
                <p class="mb-4" style="text-align: justify;">It is not easy for blind people to independently move. Most of the blind people in the world are not able to perceive their surroundings. Therefore, the objective of this project is to build a navigation system that will be able to guide a blind person safely and with ease, in an indoor environment. It will detect the objects present within the indoor environment also it will allow the blind person to avoid objects through voice feedback. The application listens to your commands and then responds with voice commands. There are still tasks that require assistance from humans. NaviTalk allows blind people to request assistance from relatives and friends i.e. from those who they can rely on by making a video call.</p>
                <div class="row g-4 mb-4">
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="d-flex">
                            <i class="fa fa-blind fa-2x text-primary-gradient flex-shrink-0 mt-1"></i>
                            <div class="ms-3">
                                <h2 class="mb-0" data-toggle="counter-up">391,196</h2>
                                <p class="text-primary-gradient mb-0">Blind People</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                        <div class="d-flex">
                            <i class="fa fa-user fa-2x  text-secondary-gradient flex-shrink-0 mt-1"></i>
                            <div class="ms-3">
                                <h2 class="mb-0" data-toggle="counter-up">261,720</h2>
                                <p class="text-secondary-gradient mb-0">Volunteers</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{route('about')}}" class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill mt-3">Read More</a>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" src="{{URL::to('assets/img/ss0.png')}}">
            </div>
        </div>
    </div>
</div>
<!-- About End -->

  <!-- more  -->
  <div id="about"  style="background-color: rgb(240, 245, 255);">
    <div class="container  px-lg-5">
        <div class="row g-5 align-items-center" >         
            <div class="col-lg-6" >
                <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" src="{{URL::to('assets/img/more.png')}}">
            </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="text-primary-gradient fw-medium">more to know</h5>
                <p class="mb-4" style="text-align: justify;">Vision is one of the very essential human senses and it plays the most important role in human perception about surrounding environment. According to the World Health Organization, there are approximately 285 million people who are visually impaired. Main constrain that visually impair face are object detection, awareness about the indoor surroundings and navigation restricted by their inability to recognize their surroundings. <br> In order to improve the quality of life for visual impaired or blind people, this work has focused to help these persons to access the indoor environment in particular such as their room, home and other indoor utility. Therefore this work intends to play a special role in this field providing as much information as possible for visually impaired or blind people, which allows them to take a comfortable navigation and can even request for a visual assistance.</p>
</div>
        </div>
    </div>
</div>
<!-- more End -->

<!-- mission vision -->
    <div class="container-xxl py-5" >
    <div class="container px-lg-5">
        <div class="row g-5 align-items-center" style="text-align:center;">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="text-primary-gradient fw-medium">Our vision, Our best service</h5>
                <h1 class="mb-4">Our Vision</h1>
                <p class="mb-4" style="text-align: center;">Our vision is to make the world more accessible and enhance the lives of blind and low vision people.</p>
                <div class="row g-4 mb-4">
                    
                    
                </div>
               
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="text-primary-gradient fw-medium">Let the blind see</h5>
                <h1 class="mb-4">Our Mission</h1>
                <p class="mb-4" style="text-align: center;">Our mission is to assist blind and low-vision people to perceive their surroundings by providing object detection, navigation & live visual assistance.</p>
                <div class="row g-4 mb-4">
                    
                    
                </div>
               
            </div>
        </div>
    </div>
</div>


<!-- mission vision end -->
    @endsection
@extends('layouts.index')

@section('title')
NaviTalk - let the sightless perceive 
@endsection

@section('content')

  
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center hero1" >
  
      <div class="container">
        <div class="row">
         
          <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h1>UNITE TO FIGHT BLINDNESS</h1>
            <h2>making the world more accessible & providing a new experience to the blind</h2>
            <div class="d-flex justify-content-center justify-content-lg-start">
              <a href="#process" class="btn-get-started scrollto">Get Started</a>
             
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
            <img src="{{URL::to('assets/img/navigation.png')}}" class="img-fluid animated" alt="">
          </div>
       
        </div>
      </div>
  
    </section><!-- End Hero -->
    
<!-- About Start -->
<div class="container-xxl py-5" id="about">
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
                <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" src="{{URL::to('assets/img/ss0.png')}}" height=100%>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- features start-->
<div id="features" class="our-portfolio section" style="background-color: rgb(240, 245, 255);padding-bottom: 100px; padding-top: 30px;">
    <div class="container">
      <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
        <h5 class="text-primary-gradient fw-medium">What We Offer</h5>
        <h1 class="mb-5">Features</h1>
    </div>

      <div class="row " >

        <div class="col-lg-4 col-sm-7 section">
         
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="hidden-content">
                <h4>Object Detection</h4>
                <p>NaviTalk can identify the blind user's desired object through voice commands. The application's voice over then speaks the detected object aloud.</p>
              </div>
              <div class="showed-content">
                <img src="{{URL::to('assets/img/detect.png')}}" width="150px" alt="">
              </div>
            </div>
        
        </div>
        <div class="col-lg-4 col-sm-7 section">
         
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
              <div class="hidden-content">
                <h4>Indoor Navigation</h4>
                <p>After detection, the application's voice over will let the blind user know whether he/she is near the object or needs to move forward step wise.</p>
              </div>
              <div class="showed-content">
                <img src="{{URL::to('assets/img/navigate.svg')}}" width="125px"  alt="">
              </div>
            </div>
         
        </div>
        <div class="col-lg-4 col-sm-7">
        
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="hidden-content">
                <h4>Visual Assistance</h4>
                <p>The blind user can request assistance from volunteers (family or close friends). The user can add the volunteer by sharing it's assigned assistance code.</p>
              </div>
              <div class="showed-content">
                <img src="{{URL::to('assets/img/call.jpg')}}" width="175px" alt="">
              </div>
            </div>
        
        </div>
      
      </div>
    </div>
  </div>

  <!-- features end-->

<!-- Screenshot Start -->
 
<div class="container-xxl py-5" >
  <div class="container py-5 px-lg-5">
    <div class="row g-5 align-items-center">
        <div class="col-lg-8 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="text-primary-gradient fw-medium">Screenshot</h5>
            <h1 class="mb-4">User Friendly interface And Very Easy To Use App</h1>
            <p class="mb-4">'NaviTalk' provides an accessible & easy to use interface for both of it's users. Decreases search time and increases satisfaction, fulfilling their needs in a fast and efficient way</p>
            <p><i class="fa fa-check text-primary-gradient me-3"></i>Fully Voice Activated</p>
            <p><i class="fa fa-check text-primary-gradient me-3"></i>Smooth Touch</p>
            <p class="mb-4"><i class="fa fa-check text-primary-gradient me-3"></i>Easy To Understand</p>
            <p class="mb-4"><i class="fa fa-check text-primary-gradient me-3"></i>Easy To Learn</p>
        </div>
        <div class="col-lg-4  col-sm-6 d-flex justify-content-center justify-content-lg-end wow fadeInUp" data-wow-delay="0.3s">
            <div class="owl-carousel screenshot-carousel">
                <img class="img-fluid" src="{{URL::to('assets/img/ss10.png')}}" alt="">
                <img class="img-fluid" src="{{URL::to('assets/img/ss20.png')}}" alt="">
                <img class="img-fluid" src="{{URL::to('assets/img/ss30.png')}}" alt="">
                <img class="img-fluid" src="{{URL::to('assets/img/detect.jpg')}}" alt="">
                <img class="img-fluid" src="{{URL::to('assets/img/ss50.png')}}" alt="">
            </div>
        </div>
    </div>
    </div>
</div>

<!-- Screenshot End -->


<!-- Process Start -->
    <div class=" py-5" style="background-color: rgb(240, 245, 255);padding-top: 30px;padding-bottom: 50px" id="process">
      <div class="container py-5 px-lg-5">
        <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="text-primary-gradient fw-medium">How It Works</h5>
            <h1 class="mb-5">3 Easy Steps</h1>
        </div>
        <div class="row gy-5 gx-4 justify-content-center">
            <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp steps" data-wow-delay="0.1s">
                <div class="position-relative bg-light rounded pt-5 pb-4 px-4 steps-item">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                        <i class="fa fa-cog fa-3x text-white"></i>
                    </div>
                    <h5 class="mt-4 mb-3">Install the App</h5>
                    <p class="mb-0">You can easily install our app from playstore by searching 'NaviTalk'</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp steps" data-wow-delay="0.3s">
                <div class="position-relative bg-light rounded pt-5 pb-4 px-4 steps-item">
                    <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                        <i class="fa fa-address-card fa-3x text-white"></i>
                    </div>
                    <h5 class="mt-4 mb-3">Setup Your Profile</h5>
                    <p class="mb-0">Register <br> Setup your profile as a blind person or a volunteer</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp steps" data-wow-delay="0.5s">
                <div class="position-relative bg-light rounded pt-5 pb-4 px-4 steps-item">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                        <i class="fa fa-check fa-3x text-white"></i>
                    </div>
                    <h5 class="mt-4 mb-3">Enjoy The Features</h5>
                    <p class="mb-0">Login <br> Enjoy the incredible features provided by 'NaviTalk'</p>
                </div>
            </div>
        </div>
    </div>
    </div>
<!-- Process Start -->


<!-- Download Start -->
<div class="container-xxl py-5" style="margin-bottom:-80px">
    <div class="container py-5 px-lg-5" >
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <img class="img-fluid wow fadeInUp" data-wow-delay="0.1s" src="{{URL::to('assets/img/download1.png')}}" width="450px">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h5 class="text-primary-gradient fw-medium">Download</h5>
                <h1 class="mb-4">Download The Latest Version Of Our App</h1>
                <p class="mb-4">You can install apps, games, and digital content on your device from the Google Play Store. NaviTalk is a free app that enable blind people to detect and navigate objects and connects them with sighted volunteers for visual assistance through a live video call. Download the latest version of 'NaviTalk' now!</p>
                <div class="row g-4">
             
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                        <a href="" class="d-flex bg-secondary-gradient rounded py-3 px-4">
                            <i class="fab fa-android fa-3x text-white flex-shrink-0"></i>
                            <div class="ms-3">
                                <p class="text-white mb-0">Available On</p>
                                <h5 class="text-white mb-0">Play Store</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
<!-- Download End -->

<!-- Team start -->


  <div class="container py-5 px-lg-5" id="team">
    <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s" >
        <h5 class="text-primary-gradient fw-medium">We Are Together</h5>
        <h1 class="mb-5">Our Team</h1>
    </div>

  <div class="row">
    
    <div class="col-lg-3 col-sm-7 section center">
      <div class="profile-card col-sm-6">
        <div class="img">
           <img src="{{URL::to('assets/img/img-1.jpg')}}">
        </div>
        <div class="caption">
          <h3>Fatima Hussain</h3>
         <div class="social-links">
           <a href="https://www.facebook.com/profile.php?id=100006511148116" target="_blank"><i class="fab fa-facebook"></i></a>
           <a href="https://instagram.com/hfatima_08?utm_medium=copy_link" target="_blank"><i class="fab fa-instagram"></i></a>
           <a href="https://www.linkedin.com/in/fatima-hussain-841548222/" target="_blank"><i class="fab fa-linkedin"></i></a>
         </div>
       </div>
     </div>
</div>

    <div class="col-lg-3 col-sm-7 section center">
      <div class="profile-card col-sm-6">
        <div class="img">
           <img src="{{URL::to('assets/img/img-1.jpg')}}">
        </div>
        <div class="caption">
          <h3>Muneeba Awan</h3>
         <div class="social-links">
           <a href="https://www.facebook.com/muneeba.awan.927" target="_blank"><i class="fab fa-facebook"></i></a>
           <a href="https://instagram.com/muneeba.awan.137?r=nametag" target="_blank"><i class="fab fa-instagram"></i></a>
           <a href="https://www.linkedin.com/in/muneeba-awan-b76779219" target="_blank"><i class="fab fa-linkedin"></i></a>
         </div>
       </div>
     </div>
</div>


<div class="col-lg-3 col-sm-7 section center">
  <div class="profile-card col-sm-6">
    <div class="img">
       <img src="{{URL::to('assets/img/img-1.jpg')}}">
    </div>
    <div class="caption">
      <h3>Rabiya Arif</h3>
     <div class="social-links">
       <a href="https://www.facebook.com/profile.php?id=100076786899552" target="_blank"><i class="fab fa-facebook"></i></a>
       <a href="https://instagram.com/__rabiya_arif__?utm_medium=copy_link" target="_blank"><i class="fab fa-instagram"></i></a>
       <a href="www.linkedin.com/in/rabiya-arif-b4692b212" target="_blank"><i class="fab fa-linkedin"></i></a>
     </div>
   </div>
 </div>
</div>

<div class="col-lg-3 col-sm-7 section center">
  <div class="profile-card col-sm-6">
    <div class="img">
       <img src="{{URL::to('assets/img/img-1.jpg')}}">
    </div>
    <div class="caption">
      <h3>Savera Zubair</h3>
     <div class="social-links">
       <a href="https://www.facebook.com/Savera.zubair" target="_blank"><i class="fab fa-facebook"></i></a>
       <a href="https://www.instagram.com/savera_zubair/" target="_blank"><i class="fab fa-instagram"></i></a>
       <a href="https://www.linkedin.com/mwlite/in/savera-zubair-0a1a91236" target="_blank"><i class="fab fa-linkedin"></i></a>
     </div>
   </div>
 </div>
</div>


</div>
</div>

@endsection
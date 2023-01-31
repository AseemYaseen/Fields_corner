@extends('puplicUser.layout.master')
@section('title')
about
@endsection
@section('css')

@endsection


{{--============= showCase ===============--}}
@section('showCase')

@endsection

{{--============= contant ===============--}}
@section('contant')

<section class="probootstrap-slider flexslider probootstrap-inner">
    <ul class="slides">
       <li style="background-image:url(img/img_15.jpg);" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="probootstrap-slider-text text-center">
                  <h1 class="probootstrap-heading probootstrap-animate">About Us</h1>
                  {{-- <div class="probootstrap-animate probootstrap-sub-wrap">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</div> --}}
                </div>
              </div>
            </div>
          </div>
        </li>
    </ul>
  </section>

  {{--  --}}


 <section id="about" class="about">
  <div class="container" data-aos="fade-up">

    {{-- <div class="row position-relative"> --}}
    <div class="row lb">


      <div class="col-lg-5 about-img "><img src="https://th.bing.com/th/id/R.44559f09bae933392d8a8e0577a9750f?rik=dMtVnj9AAjiguQ&riu=http%3a%2f%2fwww.jordantimes.com%2fsites%2fdefault%2ffiles%2fgolf_7.jpg&ehk=wV1ZcNMdtseKDJSK8pNqDWwBYxXGzKQzv57xOl7Q7us%3d&risl=&pid=ImgRaw&r=0" style="margin: 0.25rem -2rem;" width="500px" height="349px" alt=""> </div>

      <div class="col-lg-7 " style="margin-top:0.25rem ;background-color: rgba(255,255,255,.6);">
        {{-- <h2 class="text-center">Aqaba Fields Corner</h2> --}}
        <div class="our-story" style="padding-left: 20px;">
          {{-- <h4>Est 1988</h4> --}}
          <h3>Our Vision</h3>
          <p>Field corner is a project based on the collection of Aqaba sports stadiums of all kinds and forms, as it contains many stadiums and sports facilities, such as:</p>
          <ul>
            <li><i class="bi bi-check-circle"></i> <span>Internationally accredited five-a-side football fields</span></li>
            <li><i class="bi bi-check-circle"></i> <span>Basketball courts</span></li>
            <li><i class="bi bi-check-circle"></i> <span>Golf courses</span></li>
            <li><i class="bi bi-check-circle"></i> <span>Swimming facilities</span></li>

          </ul>
          <p>So,our vision represents in providing platforms that view Aqaba Fields</p>

          <div class="watch-video d-flex align-items-center position-relative">
            <i class="bi bi-play-circle"></i>
            {{-- <button><a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox stretched-link">Watch Video</a></button> --}}
          </div>
        </div>
      </div>

    </div>

  </div>
</section>


<section class="probootstrap-section probootstrap-section-dark">
    <div class="container">
      <div class="row" style="margin-top: 15rem">
        <div class="col-md-12 text-center">
          <h2 class="mt0">Why Choose Us?</h2>
          <br>
          {{-- <p class="mb50"><img src="img/curve.svg" class="svg" alt="Free HTML5 Bootstrap Template"></p> --}}
        </div>
        <div class="col-md-4">
          <div class="service left-icon left-icon-sm probootstrap-animate">
            <div class="icon">
              <i class="icon-check"></i>
            </div>
            <div class="text">
              <h3>One place to book</h3>
              <p>we offer multiple choices to book for different types of fields</p>
              {{-- <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p> --}}
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon left-icon-sm probootstrap-animate">
            <div class="icon">
              <i class="icon-check"></i>
            </div>
            <div class="text">
              <h3>Easy Place to Book</h3>
              <p>Our website is easy to use with an easy to access user interface</p>
              {{-- <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p> --}}
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon left-icon-sm probootstrap-animate">
            <div class="icon">
              <i class="icon-check"></i>
            </div>
            <div class="text">
              <h3>Without commissions</h3>
              <p>You can book hours through our website without any other costs such as commission</p>
              {{-- <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<!-- ======= Our Team Section ======= -->

<section class="probootstrap-section ">
    <div class="container">
      <div class="row lb">
        <div class="section-header text-center">
          <h2>Our Team</h2><br>
          {{-- <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p> --}}
        </div><br>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="probootstrap-room">
            <a href="#"><img src="img/asem.png" alt="Free Bootstrap Template by uicookies.com" style="width: 200px; height:200px;margin-left:78px;" class="img-responsive"></a>
            <div class="text text-center">
              <h3>Aseem Yaseen</h3>
              <p>Web-Developer</p>
              <div class="post-meta mb30">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="probootstrap-room">
            <a href="#"><img src="img/obida.png" alt="Free Bootstrap Template by uicookies.com" style="width: 200px; height:200px;margin-left:78px;" class="img-responsive"></a>
            <div class="text text-center">
              <h3>Obaida Al-thunibat</h3>
              <p>Web-Developer</p>
              <div class="post-meta mb30">
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="probootstrap-room">
            <a href="#"><img src="img/shaima.png" alt="Free Bootstrap Template by uicookies.com" style="width: 200px; height:200px;margin-left:78px;" class="img-responsive"></a>
            <div class="text text-center">
              <h3>Shimaa Al-shlouh</h3>
              <p>Web-Developer</p>
              <div class="post-meta mb30">
              </div>
            </div>
          </div>
        </div>
        <div class="row">

        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="probootstrap-room">
            <a href="#"><img src="img/wala.png" alt="Free Bootstrap Template by uicookies.com"  style="width: 200px; height:200px;margin-left:195px;" class="img-responsive"></a>
            <div class="text text-center">
              <h3>Walaa Obeidat</h3>
              <p>Web-Developer</p>
              <div class="post-meta mb30">

              </div>
            </div>
          </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="probootstrap-room">
            <a href="#"><img src="img/nooralhuda.png" alt="Free Bootstrap Template by uicookies.com" style="width: 200px; height:200px;margin-left:195px;" class="img-responsive"></a>
            <div class="text text-center">
              <h3>Noorelhuda Al-shebailat</h3>
              <p>Web-Developer</p>
              <div class="post-meta mb30">
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>
  <!-- End Our Team Section -->


@endsection




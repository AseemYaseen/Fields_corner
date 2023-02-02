@extends('puplicUser.layout.master')
@section('title')
   home
@endsection
@section('css')

@endsection


{{--============= showCase ===============--}}
@section('showCase')

@endsection

{{--============= contant ===============--}}
@section('contant')

<section class="probootstrap-slider flexslider">
    <ul class="slides">
       <li style="background-image: url(img/slider_1.jpg);" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="probootstrap-slider-text text-center">
                  <h1 class="probootstrap-heading probootstrap-animate">Welcome to fields corner</h1>
                  <div class="probootstrap-animate probootstrap-sub-wrap">Enjoy The Only Golf Field In The Kingdom</div>
                  <br>
                  <br>
                  <div class="box">
                    <form name="search" action="{{ route('search') }}" method="post">
                      @csrf
                        <input type="text" class="input" name="search" onmouseout="this.value = ''; this.blur();">
                    </form>
                    <i class="fas fa-search"></i>
                </div>
                <button class="btn btn-primary"><a href="{{url('publicUser.fields')}}" style="color: white">Explore</a></button>
              </div>
            </div>
          </div>
        </li>
        <li style="background-image: url(img/slider_2.jpg);" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="probootstrap-slider-text text-center">
                  <h1 class="probootstrap-heading probootstrap-animate">Enjoy Luxury Experience</h1>
                  <div class="probootstrap-animate probootstrap-sub-wrap">Let's Enjoy Football Through The Best Sports Facilities That Meet The Highest Standards Of Quality, Protection, And Safety</div>
                  <br>
                  <br>
                  <div class="box">
                    <form name="search" action="{{ route('search') }}" method="post">
                      @csrf
                        <input type="text" class="input" name="search" onmouseout="this.value = ''; this.blur();">
                    <i class="fas fa-search"></i>
                    </form>
            
                </div>
                <button class="btn btn-primary"><a href="{{url('publicUser.fields')}}" style="color: white">Explore</a></button>
              </div>
            </div>
          </div>

        </li>
        <li style="background-image: url(img/slider_3.jpg);" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-10 col-md-offset-1">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">Enjoy Luxury Experience</h1>
                    <div class="probootstrap-animate probootstrap-sub-wrap">Where To Experience Swimming In The Aqaba</div>
                    <br>
                    <br>
                    <div class="box">
                      <form name="search" action="{{ route('search') }}" method="post">
                        @csrf
                          <input type="text" class="input" name="search" onmouseout="this.value = ''; this.blur();">
                      </form>
                      <i class="fas fa-search"></i>
                  </div>
                  <button class="btn btn-primary"><a href="{{url('publicUser.fields')}}" style="color: white">Explore</a></button>
                </div>
              </div>
            </div>
          </li>
    </ul>
  </section>


   <section class="probootstrap-section ">
    <div class="container">
        <div class="row">
          <div class="col-md-12 probootstrap-relative">
            <h3 class="mt0 mb30">The Fields Categories</h3>
            <ul class="probootstrap-owl-navigation absolute right">
              <li><a href="#" class="probootstrap-owl-prev"><i class="icon-chevron-thin-left"></i></a></li>
              <li><a href="#" class="probootstrap-owl-next"><i class="icon-chevron-thin-right"></i></a></li>
            </ul>
          </div>
        </div>


        <div class="row">
          <div class="col-md-12 probootstrap-relative">
            <div class="owl-carousel owl-carousel-carousel">

              {{-- {{$data=isset($categories)?$categories:[]}} --}}
              @foreach ($categories as $categorie)
              <div class="item">
                <div class="probootstrap-room">
                  {{-- <a href="{{route('fields.show',['field'=>$categorie['id']])}}"><img src="{{URL::asset("storage/image/$categorie->image")}}"style="width:400px; height:200px" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a> --}}
                      <a href="{{route('fields.show',$categorie->id)}}"><img src="{{URL::asset("storage/image/$categorie->image")}}"style="width:500px; height:220px; border-radius:8px 8px 0 0;" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a>
                  <div class="text">
                    <h3>{{$categorie->name}}</h3>
                    <div class="post-meta">
                    </div>
                  </div>
                </div>
              </div>
              {{-- <div class="item">
                <div class="probootstrap-room">
                  <a href="#"><img src="img/img_5.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a>
                  <div class="text">
                    <h3>Soccer Fields</h3>
                    <div class="post-meta">
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="probootstrap-room">
                  <a href="#"><img src="img/img_8.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a>
                  <div class="text">
                    <h3>Basketball Fields</h3>
                    <div class="post-meta">
                    </div>
                  </div>
                 </div> --}}
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



  <section class="probootstrap-section probootstrap-section-dark">
    <div class="container">
      <div class="row mb30">
        <div class="col-md-8 col-md-offset-2 probootstrap-section-heading text-center">
          <h2>Aqaba Golf Field</h2>
          {{-- <p class="lead">...................</p> --}}
          {{-- <p><img src="img/curve.svg" class="svg" alt="Free HTML5 Bootstrap Template"></p> --}}
        </div>
      </div>
      <div class="row probootstrap-gutter10">
        <div class="col-md-12">
          <div class="probootstrap-block-image-text">
            <figure>
              <a href="img/img_2.jpg" class="image-popup">
              <img src="img/img_2.jpg" alt="Free HTML5 Bootstrap Template by uicookies.com" class="img-responsive">
              </a>
              <div class="actions">
                <a href="https://vimeo.com/220607649" class="popup-vimeo"><i class="icon-play2"></i></a>
              </div>
            </figure>
            <div class="text">
              {{-- <h3><a href="#">Ultra Superior Room</a></h3> --}}
              <div class="post-meta">
                <ul>
                  {{-- <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252 Reviews</li> --}}
                  {{-- <li><i class="icon-user2"></i> 3 Guests</li> --}}
                </ul>
              </div>
              Home to Jordan’s first 18-hole championship golf course and 9-hole golf academy is Ayla’s Signature Golf course, designed by legendary Greg Norman. Having built premium golf courses in Dubai, Oman, and Egypt, Greg took on the challenge of designing the first championship course in Jordan. With over 800,000 square meters of rolling green fairways, both beginner and expert golfers are welcome to enjoy this one-of-a-kind eco-friendly golf course overlooking Aqaba’s captivating mountain landscape.
              <p><a href="{{route('book',9)}}" class="btn btn-primary">More Details</a></p>
            </div>
          </div>
      </div>
    </div>
  </section>


<section >
<div class="container" style="margin-top: 5rem;
">
  <div class="row mb30">
    <div class="col-md-8 col-md-offset-2 probootstrap-section-heading text-center">
      <h2>what we offer</h2>
      {{-- <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
      {{-- <p><img src="img/curve.svg" class="svg" alt="Free HTML5 Bootstrap Template"></p> --}}
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="service left-icon probootstrap-animate">
        <div class="icon">
          <img style="height: 50px !important; width: 50px !important;" src="img/img_19.png" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
        </div>
        <div class="text">
          <h3>One place to book </h3>
          <p>we offer multiple choices to book for different types of fields</p>
          {{-- <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p> --}}
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="service left-icon probootstrap-animate">
        <div class="icon">
          <img style="height: 50px !important; width: 50px !important;" src="img/img_10.png" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
        </div>
        <div class="text">
          <h3>Easy Place to Book</h3>
          <p>Our website is easy to use with an easy to access user interface</p>
          {{-- <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p> --}}
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="service left-icon probootstrap-animate">
        <div class="icon">
          <img style="height: 50px !important; width: 50px !important;" src="img/img_11.png" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
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



<section class="probootstrap-half">
<div class="image" style="background-image: url(img/slider_2.jpg);"></div>
<div class="text">
  <div class="probootstrap-animate fadeInUp probootstrap-animated">
    <h2 class="mt0">Most Famous Field</h2>
    {{-- <p><img src="img/curve_white.svg" class="seperator" alt="Free HTML5 Bootstrap Template"></p> --}}
    <div class="row">
      <div class="col-md-6">
        <p>Aqaba Stadium<br>
            Aqaba Facilities Management Company, in order to maintain the classification of Aqaba Stadium as an international stadium where international matches are held, has made modifications to the field and technical improvements, in implementation of the recommendations of the Jordanian Football Association to comply with the international standards approved for stadiums.

        </p>
      </div>
      <div class="col-md-6">
        <p>

            - An international stadium<br>
            - Five-a-side courts 2<br>
            - VIP platform<br>
            - Management Offices<br>
            - Meeting room and press equipment<br>
            - Spare parts for players<br>
            - Emergency medical clinic<br>
            - Car parking<br>

        </p>
      </div>
    </div>
    <p><a href="{{route('book',7)}}" class="link-with-icon white">Show Details <i class=" icon-chevron-right"></i></a></p>
  </div>
</div>
</section>

@endsection


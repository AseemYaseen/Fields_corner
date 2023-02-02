@extends('puplicUser.layout.master')
@section('title')
   fields
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
     <li style="background-image: url(/img/services.jpeg);" class="overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="probootstrap-slider-text text-center">
                {{-- <p><img src="img/curve_white.svg" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p> --}}
                <h1 class="probootstrap-heading probootstrap-animate">Fields</h1>
                {{-- <div class="probootstrap-animate probootstrap-sub-wrap">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</div> --}}
              </div>
            </div>
          </div>
        </div>
      </li>
  </ul>
</section>

<section class="probootstrap-section">
  <div class="container">
    <div class="row">
      @foreach($playgrounds as $Playground)
      <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="probootstrap-room">
              {{-- <img src="{{URL::asset("storage/image/$Playground->image")}} --}}
              <a href=""><img src={{URL::asset("storage/image/$Playground->image")}} style="width:450px; height:250px; border-radius:8px 8px 0 0;" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a>
              <div class="text">
              {{-- {{dd($Playground)}}  --}}
                <h4>{{$Playground->name}}</h4>
                <p> {{$Playground->Categories->name}} <strong>{{$Playground->price}} JOD </strong></p>
                {{-- <div class="post-meta mb30">
                </div> --}}
                <p><a href="{{route('book', $Playground->id)}}" class="btn btn-primary" role="button"> Book for Hour {{$Playground->price}} JOD</a></p>
              {{-- </div>
            </div> --}}
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection


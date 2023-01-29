@extends('puplicUser.layout.master')
@section('reservation')
   reservation
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
       <li style="background-image: url(img/slider_1.jpg);" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="probootstrap-slider-text text-center">
                  <p><img src="img/curve_white.svg" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p>
                  <h1 class="probootstrap-heading probootstrap-animate">Book your Corner</h1>
                  <div class="probootstrap-animate probootstrap-sub-wrap">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</div>
                </div>
              </div>
            </div>
          </div>
        </li>
    </ul>
</section>

  <section class="probootstrap-section">
    <div class="container">
      <div class="row probootstrap-gutter40">
        <div class="col-md-6">
          <h2 class="mt0">Reservation Form</h2>
          <form action="#" method="post" class="probootstrap-form">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fname">First Name</label>
                  <input type="text" class="form-control" id="fname" name="fname">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lname">Last Name</label>
                  <input type="text" class="form-control" id="lname" name="lname">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <div class="form-field">
                <i class="icon icon-mail"></i>
                <input type="email" class="form-control" id="email" name="email">
              </div>
            </div>
            <div class="form-group">
                <label for="email">Phone</label>
                <div class="form-field">
                  <input type="text" class="form-control" id="email" name="email">
                </div>
              </div>
            {{-- <div class="form-group">
              <label for="room">Fields</label>
              <div class="form-field">
                <i class="icon icon-chevron-down"></i>
                <select name="room" id="room" class="form-control">
                  <option value="">Select a Field</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </div>
            </div> --}}
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="date-arrival">Start Date</label>
                  <div class="form-field">
                    {{-- <i class="icon icon-calendar2"></i> --}}
                    {{-- <input type="date" class="form-control" id="date-arrival" name="date-arrival"> --}}
                    <input type="datetime-local" class="form-control" id="date-arrival" name="date-arrival">

                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="date-departure">End Date</label>
                  <div class="form-field">
                    {{-- <i class="icon icon-calendar2"></i> --}}
                    {{-- <input type="date" class="form-control" id="date-departure" name="date-departure"> --}}
                    <input type="datetime-local" class="form-control" id="date-departure" name="date-departure">

                  </div>
                </div>
              </div>
            </div>

            {{-- <div class="row mb30"> --}}
              {{-- <div class="col-md-6">
                <div class="form-group">
                  <label for="adults">Adults</label>
                  <div class="form-field">
                    <i class="icon icon-chevron-down"></i>
                    <select name="adults" id="adults" class="form-control">
                      <option value="">Number of Adults</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4+</option>
                    </select>
                  </div>
                </div>
              </div> --}}
              {{-- <div class="col-md-6">
                <div class="form-group">
                  <label for="children">Numbers</label>
                  <div class="form-field">
                    <i class="icon icon-chevron-down"></i>
                    <select name="children" id="children" class="form-control">
                      <option value="">Number of visitor</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4+</option>
                    </select>
                  </div> --}}

                {{-- </div> --}}
              {{-- </div>
            </div> --}}
            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Reserve">
            </div>
          </form>
        </div>
        {{-- <div class="col-md-4">
          <h2 class="mt0">Feedback</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p><a href="#" class="btn btn-primary" role="button">Send Message</a></p>
        </div> --}}

        <div class="col-md-6">

            <div class="card">
                <div class="row" style="margin-top:5em;">
                    <div class="col-md-6" >
                        <div class="images p-3">
                            <div class="text-center p-4"> <img id="main-image" src="https://i.imgur.com/Dhebu4F.jpg" width="250" /> </div>
                            {{-- <div class="thumbnail text-center"> <img onclick="change_image(this)" src="https://i.imgur.com/Rx7uKd0.jpg" width="70"> <img onclick="change_image(this)" src="https://i.imgur.com/Dhebu4F.jpg" width="70"> </div> --}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            {{-- <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i> <span class="ml-1">Back</span> </div> <i class="fa fa-shopping-cart text-muted"></i>
                            </div> --}}
                            {{-- <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">Orianz</span> --}}
                                <h5 class="text-uppercase">Men's slim fit t-shirt</h5>

                            {{-- </div> --}}
                            <p class="about">Shop from a wide range of t-shirt from orianz. Pefect for your everyday use, you could pair it with a stylish pair of jeans or trousers complete the look.</p>

                        </div>
                    </div>
                </div>
            </div>

    </div>
  </section>
@endsection

@extends('layouts.master')

@section('content')
<!-- Start Feature Area -->
<section class="featured-area">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="single-feature d-flex flex-wrap justify-content-between">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="lnr lnr-sun"></span>
          </div>
          <div class="desc">
            <h6 class="title text-uppercase">Affiliates</h6>
            <p>
              @foreach ($benefit_affiliates as $benefit_affiliate)
              {{ $benefit_affiliate->id.'.'.$benefit_affiliate->content }} <br/>
              @endforeach
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="single-feature d-flex flex-wrap justify-content-between">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="lnr lnr-clock"></span>
          </div>
          <div class="desc">
            <h6 class="title text-uppercase">Providers</h6>
            <p>
              @foreach ($benefit_providers as $benefit_provider)
              {{ $benefit_provider->id.'.'.$benefit_provider->content }} <br/>
              @endforeach
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Feature Area -->
<!-- Start Service Area -->
<section class="service-area">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h3 class="text-white">Our Offered Services</h3>
          <span class="text-white text-uppercase">Re-imagining the way</span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <div class="single-service">
          <div class="thumb" style="background: url(img/s1.jpg);">
            <div class="overlay overlay-content d-flex justify-content-center align-items-center">
              <a href="#" class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></a>
            </div>
          </div>
          <div class="desc">
            <h6 class="text-uppercase text-white">Creative Design</h6>
            <p class="text-white">WordPress, the premier free open-source blogging utility, has gone through several upgrades in</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="single-service">
          <div class="thumb" style="background: url(img/s2.jpg);">
            <div class="overlay overlay-content d-flex justify-content-center align-items-center">
              <a href="#" class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></a>
            </div>
          </div>
          <div class="desc">
            <h6 class="text-uppercase text-white">Driving Lesson</h6>
            <p class="text-white">The buying of large-screen TVs has absolutely skyrocketed lately. It seems that everyone wants one – </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="single-service">
          <div class="thumb" style="background: url(img/s3.jpg);">
            <div class="overlay overlay-content d-flex justify-content-center align-items-center">
              <a href="#" class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></a>
            </div>
          </div>
          <div class="desc">
            <h6 class="text-uppercase text-white">Climbing Stairs</h6>
            <p class="text-white">Having used discount toner cartridges for twenty years, there have been a lot of changes in the </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="single-service">
          <div class="thumb" style="background: url(img/s4.jpg);">
            <div class="overlay overlay-content d-flex justify-content-center align-items-center">
              <a href="#" class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></a>
            </div>
          </div>
          <div class="desc">
            <h6 class="text-uppercase text-white">Bike Accident</h6>
            <p class="text-white">Every avid independent filmmaker has dre amed about making that special interest documentary, or </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="single-service">
          <div class="thumb" style="background: url(img/s5.jpg);">
            <div class="overlay overlay-content d-flex justify-content-center align-items-center">
              <a href="#" class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></a>
            </div>
          </div>
          <div class="desc">
            <h6 class="text-uppercase text-white">Car Driving</h6>
            <p class="text-white">Looking to buy a new computer Overwhelmed by all of the options available to you? Stressed by the </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="single-service">
          <div class="thumb" style="background: url(img/s6.jpg);">
            <div class="overlay overlay-content d-flex justify-content-center align-items-center">
              <a href="#" class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></a>
            </div>
          </div>
          <div class="desc">
            <h6 class="text-uppercase text-white">Beach HoTel</h6>
            <p class="text-white">Shure’s Music Phone Adapter (MPA) is our favorite iPhone solution, since it lets you use the headphones </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="single-service">
          <div class="thumb" style="background: url(img/s7.jpg);">
            <div class="overlay overlay-content d-flex justify-content-center align-items-center">
              <a href="#" class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></a>
            </div>
          </div>
          <div class="desc">
            <h6 class="text-uppercase text-white">Under Passway</h6>
            <p class="text-white">Over 92% of computers are infected with Adware and spyware. Such software is rarely accompanied by</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="single-service">
          <div class="thumb" style="background: url(img/s8.jpg);">
            <div class="overlay overlay-content d-flex justify-content-center align-items-center">
              <a href="#" class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></a>
            </div>
          </div>
          <div class="desc">
            <h6 class="text-uppercase text-white">Dawn to dusk</h6>
            <p class="text-white">Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Service Area -->
<!-- Start Amazing Works Area -->
</div>
<div class="main-wrapper">
  <section class="amazing-works-area">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h3>Our Amazing Works</h3>
          <span class="text-uppercase">Re-imagining the way</span>
        </div>
      </div>
    </div>
    <div class="active-works-carousel mt-40">
      <div class="item">
        <div class="thumb" style="background: url(img/w1.jpg);"></div>
        <div class="caption text-center">
          <h6 class="text-uppercase">Vector Illustration</h6>
          <p>LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to</p>
        </div>
      </div>
      <div class="item">
        <div class="thumb" style="background: url(img/w1.jpg);"></div>
        <div class="caption text-center">
          <h6 class="text-uppercase">Vector Illustration</h6>
          <p>LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to</p>
        </div>
      </div>
      <div class="item">
        <div class="thumb" style="background: url(img/w1.jpg);"></div>
        <div class="caption text-center">
          <h6 class="text-uppercase">Vector Illustration</h6>
          <p>LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to</p>
        </div>
      </div>
      <div class="item">
        <div class="thumb" style="background: url(img/w1.jpg);"></div>
        <div class="caption text-center">
          <h6 class="text-uppercase">Vector Illustration</h6>
          <p>LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to</p>
        </div>
      </div>
      <div class="item">
        <div class="thumb" style="background: url(img/w1.jpg);"></div>
        <div class="caption text-center">
          <h6 class="text-uppercase">Vector Illustration</h6>
          <p>LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to</p>
        </div>
      </div>
    </div>
  </section>
</div>
<div class="main-wrapper">
  <!-- End Amazing Works Area -->
  <!-- Start Story Area -->
  <section class="story-area">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-3">
          <div class="story-title">
            <h3 class="text-white">Our Untold Story</h3>
            <span class="text-uppercase text-white">Re-imagining the way</span>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="story-box">
            <h6 class="text-uppercase">From the part of beginning</h6>
            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and the power of globalization. Societies are becoming more inter-connected. Thoughts from different</p>
            <a href="#" class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Story Area -->
  <!-- Start Subscription Area -->
  <section class="subscription-area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title text-center">
            <h3>Subscribe for our Newsletter</h3>
            <span class="text-uppercase">Re-imagining the way</span>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div id="mc_embed_signup">
            <form target="_blank" novalidate action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&id=92a4423d01" method="get" class="subscription relative">
              <input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required>
              <div style="position: absolute; left: -5000px;">
                <input type="text" name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="">
              </div>
              <button class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></button>
              <div class="info"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Subscription Area -->
  <!-- Start Footer Widget Area -->
  <section class="footer-widget-area">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="single-widget d-flex flex-wrap justify-content-between">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="lnr lnr-pushpin"></span>
            </div>
            <div class="desc">
              <h6 class="title text-uppercase">Address</h6>
              <p>56/8, panthapath, west <br> dhanmondi, kalabagan, <br>Dhaka - 1205</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-widget d-flex flex-wrap justify-content-between">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="lnr lnr-earth"></span>
            </div>
            <div class="desc">
              <h6 class="title text-uppercase">Email Address</h6>
              <div class="contact">
                <a href="mailto:info@dataarc.com">info@dataarc.com</a> <br>
                <a href="mailto:support@dataarc.com">support@dataarc.com</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-widget d-flex flex-wrap justify-content-between">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="lnr lnr-phone"></span>
            </div>
            <div class="desc">
              <h6 class="title text-uppercase">Phone Number</h6>
              <div class="contact">
                <a href="tel:1545">012 4562 982 3612</a> <br>
                <a href="tel:54512">012 6321 956 4587</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Footer Widget Area -->
  @endsection

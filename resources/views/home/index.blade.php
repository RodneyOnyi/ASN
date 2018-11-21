@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/timeline.css') }}">
<link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
@endsection

@section('scripts')
<script src="{{ asset('js/carousel.js') }}"></script>
@endsection

@section('content')
<!-- Start Feature Area -->
<section class="featured-area">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="section-title text-center">
        <h3>Benefits you'll love</h3>
      </div>
    </div>
  </div>
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
              {{ $benefit_affiliate->id.'. '.$benefit_affiliate->content }} <br/>
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
            <h6 class="title text-uppercase">Service Providers</h6>
            <p>
              @foreach ($benefit_providers as $benefit_provider)
              {{ $benefit_provider->id.'. '.$benefit_provider->content }} <br/>
              @endforeach
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Feature Area -->

<!-- Start Amazing Works Area -->
<section class="amazing-works-area">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="section-title text-center">
        <h3>How the ASN Works</h3>
      </div>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-lg-10">
      <ul class="timeline">
        <li>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title"></h4>
            </div>
            <div class="timeline-body">
              <p>An affiliate matches client needs with the right service provider listed on ASN.</p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title"></h4>
            </div>
            <div class="timeline-body">
              <p>Affliate contacts the service provider for details & confirms with the client.</p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title"></h4>
            </div>
            <div class="timeline-body">
              <p>The affliate makes the order for the client on confirmation.</p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <!--<div class="timeline-badge "></div>-->
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title"></h4>
            </div>
            <div class="timeline-body">
              <p>The client pays directly to the service provider & enjoys the services!.</p>
            </div>
          </div>
        </li>

      </ul>
    </div>
  </div>
</section>
<!-- End Amazing Works Area -->

<!-- Start Service Area -->
<section class="service-area">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h3 class="text-white text-uppercase">The ASN Experience</h3>
          <h3 class="text-white text-uppercase">What people are saying about ASN</h3>
        </div>
      </div>
    </div>

    <!-- Testimonials -->
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div id="carouselTestimonials" class="carousel slide" data-ride="carousel" data-interval="9000" style="color:white;">
          <div class="carousel-inner row w-100 mx-auto" role="listbox">
            <div class="carousel-item col-md-3  active">
              <div class="panel panel-default">
                <div class="panel-thumbnail">
                  <div class="timeline-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-3 ">
              <div class="panel panel-default">
                <div class="panel-thumbnail">
                  <div class="timeline-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-3 ">
              <div class="panel panel-default">
                <div class="panel-thumbnail">
                  <div class="timeline-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-3 ">
              <div class="panel panel-default">
                <div class="panel-thumbnail">
                  <div class="timeline-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-3 ">
              <div class="panel panel-default">
                <div class="panel-thumbnail">
                  <div class="timeline-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-3 ">
              <div class="panel panel-default">
                <div class="panel-thumbnail">
                  <div class="timeline-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-3 ">
              <div class="panel panel-default">
                <div class="panel-thumbnail">
                  <div class="timeline-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h3 class="text-white text-uppercase">Service Providers working with ASN</h3>
        </div>
      </div>
    </div>
    <!-- -->
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div id="carouselProviders" class="carousel slide" data-ride="carousel" data-interval="9000">
          <div class="carousel-inner row w-100 mx-auto" role="listbox">
            <div class="carousel-item col-md-3  active">
              <div class="panel panel-default">
                <div class="panel-thumbnail">
                  <a href="#" title="image 1" class="thumb">
                    <img class="img-fluid mx-auto d-block" src="img/s1.jpg?text=1" alt="slide 1">
                  </a>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-3 ">
              <div class="panel panel-default">
                <div class="panel-thumbnail">
                  <a href="#" title="image 3" class="thumb">
                    <img class="img-fluid mx-auto d-block" src="img/s1.jpg?text=2" alt="slide 2">
                  </a>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-3 ">
              <div class="panel panel-default">
                <div class="panel-thumbnail">
                  <a href="#" title="image 4" class="thumb">
                    <img class="img-fluid mx-auto d-block" src="img/s1.jpg?text=3" alt="slide 3">
                  </a>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-3 ">
              <div class="panel panel-default">
                <div class="panel-thumbnail">
                  <a href="#" title="image 5" class="thumb">
                    <img class="img-fluid mx-auto d-block" src="img/s1.jpg?text=4" alt="slide 4">
                  </a>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-3 ">
              <div class="panel panel-default">
                <div class="panel-thumbnail">
                  <a href="#" title="image 6" class="thumb">
                    <img class="img-fluid mx-auto d-block" src="img/s1.jpg?text=5" alt="slide 5">
                  </a>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-3 ">
              <div class="panel panel-default">
                <div class="panel-thumbnail">
                  <a href="#" title="image 7" class="thumb">
                    <img class="img-fluid mx-auto d-block" src="img/s1.jpg?text=6" alt="slide 6">
                  </a>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-3 ">
              <div class="panel panel-default">
                <div class="panel-thumbnail">
                  <a href="#" title="image 8" class="thumb">
                    <img class="img-fluid mx-auto d-block" src="img/s1.jpg?text=7" alt="slide 7">
                  </a>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselProviders" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next text-faded" href="#carouselProviders" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>

  </div>
</section>
<!-- End Service Area -->

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
            <p>China Wu Yi Plaza, Galana road.</p>
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
              <a href="mailto:info@asnnetwork.co">info@asnnetwork.co</a>
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
              <a href="tel:1545">+254 7xx xxx xxx</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Footer Widget Area -->
@endsection

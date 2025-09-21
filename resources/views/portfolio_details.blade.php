@extends('includes.layout')
@section('content')
    <div class="page-title">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">{{$portfolio->title}}</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="current">{{$portfolio->title}}</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper init-swiper">

              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>

              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img loading="lazy" src="{{asset('storage/'.$portfolio->image)}}" alt="">
                </div>

                <div class="swiper-slide">
                  <img loading="lazy" src="{{asset('storage/'.$portfolio->image)}}" alt="">
                </div>

                <div class="swiper-slide">
                  <img loading="lazy" src="{{asset('storage/'.$portfolio->image)}}" alt="">
                </div>

                <div class="swiper-slide">
                  <img loading="lazy" src="{{asset('storage/'.$portfolio->image)}}" alt="">
                </div>

              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Project information</h3>
              <ul>
                <li><strong>Title</strong>: {!!$portfolio->title!!}</li>
                <li><strong>Client</strong>: {!!$portfolio->client_name!!}</li>
                @if($portfolio?->link)
                <li><strong>Project URL</strong>: <a href="#">{{$portfolio?->link}}</a></li>
                @endif
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
              <h2>{!!$portfolio->short_description!!}</h2>
              <p>
                {!!$portfolio?->description!!}
              </p>
            </div>  
          </div>

        </div>

      </div>

    </section>
@endsection
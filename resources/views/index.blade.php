@extends('includes.layout')
@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section bg-white">
        <div class="container">
            <div class="row gy-4 align-items-center">

                <!-- Left Content -->
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
                    <h1>
                        Elegant and <span class="highlight">Creative</span> Solutions
                    </h1>
                    <p class="lead text-muted">
                        Protechmasters is a full-service technology and creative solutions company offering innovative
                        software
                        development and digital design services. We help businesses bring their ideas to life with powerful,
                        user-friendly software and engaging creative content.
                    </p>
                    <div class="d-flex gap-3 mt-3">
                        <a href="#about" class="btn-get-started">Get Started</a>
                        <a href="#services" class="btn-learn-more">Learn More</a>
                    </div>
                </div>

                <!-- Right Image -->
                <div class="col-lg-6 order-1 order-lg-2 hero-png text-center" data-aos="zoom-out" data-aos-delay="100">
                    <img loading="lazy" loading="lazy" src="assets/img/hero-img.png" class="img-fluid animated"
                        alt="Requirement Analysis Image">
                </div>

            </div>
        </div>
    </section>

    <!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-clipboard-check"></i></div>
                        <h4><a href="" class="stretched-link">Requirement Analysis/Planning</a></h4>
                        <p>Requirement Analysis is the first and most important step in the software development life cycle.
                            At
                            this stage, we closely interact with clients to understand their goals, challenges, and
                            expectations.
                        </p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-code-slash"></i></div>
                        <h4><a href="" class="stretched-link">Development</a></h4>
                        <p>Development is the stage where ideas and designs turn into reality through coding. Our skilled
                            developers use modern frameworks, clean coding practices, and version control.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-cloud-upload"></i></div>
                        <h4><a href="" class="stretched-link">Testing and Deployment</a></h4>
                        <p>Deployment is the process of releasing the finished software into production. We ensure a smooth
                            launch
                            using automated pipelines, cloud hosting, and monitoring tools.</p>
                    </div>
                </div><!-- End Service Item -->

            </div>
        </div>
    </section>
    <!-- /Featured Services Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>About Protechmasters</h2>
            <p>Innovative technology and creative solutions to help your business grow and stand out in the digital world.
            </p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4">

                <!-- Left: Image with Video -->
                <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                    <img loading="lazy" src="assets/img/about.png" class="img-fluid rounded shadow"
                        alt="About Protechmasters">
                    <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
                </div>

                <!-- Right: Content -->
                <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                    <h3>Who We Are</h3>
                    <p>
                        Protechmasters is a full-service technology and creative solutions company offering
                        innovative software development and digital design services. We bring your ideas to life
                        with powerful, user-friendly software and engaging creative content.
                    </p>

                    <h4 class="mt-4">What We Do</h4>
                    <ul>
                        <li><i class="bi bi-check2-all text-primary"></i>
                            <span><b>Software Development:</b> Custom web & mobile apps, SaaS solutions, enterprise
                                software, cloud
                                integration, AI-driven applications.</span>
                        </li>
                        <li><i class="bi bi-check2-all text-primary"></i>
                            <span><b>Creative Design & Branding:</b> Logo design, brand identity, UI/UX design, and graphics
                                for
                                digital & print.</span>
                        </li>
                        <li><i class="bi bi-check2-all text-primary"></i>
                            <span><b>Photo & Video Editing:</b> Professional editing for businesses, social media, and
                                marketing
                                campaigns.</span>
                        </li>
                        <li><i class="bi bi-check2-all text-primary"></i>
                            <span><b>Digital Marketing Support:</b> Visual content creation that boosts brand awareness and
                                engagement.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /About Section -->
    <!-- Mission, Vision & Core Values Section -->
    <section id="mission-vision-values" class="mission-vision-values section bg-light py-5">
        <div class="container">

            <!-- Section Title -->
            <div class="section-title text-center mb-5" data-aos="fade-up">
                <span>Our Philosophy</span>
                <h2>Mission, Vision & Core Values</h2>
                <p>Guiding principles that shape everything we do at Protechmasters.</p>
            </div>

            <div class="row g-4">

                <!-- Mission -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-box h-100">
                        <div class="icon bg-primary"><i class="bi bi-bullseye"></i></div>
                        <h4>Our Mission</h4>
                        <p>
                            To empower businesses with modern software solutions and creative digital assets
                            that drive growth, innovation, and customer engagement.
                        </p>
                    </div>
                </div>

                <!-- Vision -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-box h-100">
                        <div class="icon bg-success"><i class="bi bi-lightbulb"></i></div>
                        <h4>Our Vision</h4>
                        <p>
                            To be a global leader in technology and creative solutions, recognized for innovation,
                            reliability, and excellence in helping brands succeed in the digital era.
                        </p>
                    </div>
                </div>

                <!-- Core Values -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-box h-100">
                        <div class="icon bg-warning"><i class="bi bi-gem"></i></div>
                        <h4>Our Core Values</h4>
                        <p>
                            Innovation • Creativity • Reliability • Transparency • Customer-Centric Approach
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services section py-5">
        <!-- Section Title -->
        <div class="container section-title text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold">Our Services</h2>
            <p class="text-muted">We provide creative, scalable, and professional solutions to help your business grow.</p>
        </div>

        <div class="container">
            <div class="row g-4 text-center">

                <!-- Web Applications -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="icon bg-primary"><i class="bi bi-window-stack"></i></div>
                        <h5>Web Applications</h5>
                        <p>Custom and scalable web applications built with modern frameworks to meet business needs.</p>
                    </div>
                </div>

                <!-- Websites -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="icon bg-success"><i class="bi bi-globe2"></i></div>
                        <h5>Websites</h5>
                        <p>Responsive and SEO-friendly websites designed to provide great user experience and performance.
                        </p>
                    </div>
                </div>

                <!-- Mobile Applications -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="icon bg-warning"><i class="bi bi-phone"></i></div>
                        <h5>Mobile Applications</h5>
                        <p>Cross-platform mobile apps with engaging UI/UX for Android and iOS platforms.</p>
                    </div>
                </div>

                <!-- Video Editing -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="icon bg-danger"><i class="bi bi-camera-reels"></i></div>
                        <h5>Video Editing</h5>
                        <p>Professional video editing services to create impactful promotional and brand content.</p>
                    </div>
                </div>

                <!-- Logo Design -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="icon bg-info"><i class="bi bi-palette"></i></div>
                        <h5>Logo Design</h5>
                        <p>Creative and unique logo designs that reflect your brand identity and vision.</p>
                    </div>
                </div>

                <!-- Thumbnail Design -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="icon bg-secondary"><i class="bi bi-image"></i></div>
                        <h5>Thumbnail Design</h5>
                        <p>Eye-catching thumbnails designed to grab attention and boost clicks on your content.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    </div>

    </div>

    </section><!-- /Services Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span>Portfolios</span>
            <h2>Portfolios</h2>
            <p>Our Valuable Products – A showcase of projects we’ve built with creativity and innovation.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">               

                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($portfolios as $portfolio)
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-applications">
                        <img src="{{asset($portfolio->image)}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{!!$portfolio->title!!}</h4>
                            {{-- <p>Build your dream PC with top-quality components. OwnPC.in offers processors, motherboards,
                                RAM,
                                storage & custom build services across India.</p> --}}
                            <a href="{{asset($portfolio->image)}}" title="App 1"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="{{url("portfolio/$portfolio->id")}}" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div><!-- End Portfolio Container -->

            </div>

        </div>

    </section>
    <!-- /Portfolio Section -->

    <!-- Testimonials Section -->
    <!-- <section id="testimonials" class="testimonials section light-background">

          <div class="container section-title" data-aos="fade-up">
            <span>Testimonials</span>
            <h2>Testimonials</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
          </div>

          <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper" data-speed="600" data-delay="5000"
              data-breakpoints="{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 40 } }">
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
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                }
              }
            }
          </script>
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-item" "="">
                <p>
                  <i class=" bi bi-quote quote-icon-left"></i>
                    <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                      Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <img loading="lazy" src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid malis quorum
                        velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <img loading="lazy" src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis
                        minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <img loading="lazy" src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat dolor enim
                        duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <img loading="lazy" src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam sunt
                        culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <img loading="lazy" src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                  </div>
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>

        </section> -->
    <!-- Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span>Section Title</span>
            <h2>Contact</h2>
            <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-5">

                    <div class="info-wrap">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>Gudiyatham, Vellore, TN 632602</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>+917339158045</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>info@protechmasters.com</p>
                            </div>
                        </div><!-- End Info Item -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.3561220756674!2d78.8116867!3d12.9490491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bad737f7bf649b3%3A0xc7863339794c94cf!2sProtech%20Masters!5e0!3m2!1sen!2sin!4v1758035314087!5m2!1sen!2sin"
                            frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="col-lg-7">
                    <form action="{{url('contact-us')}}">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <label for="name-field" class="pb-2">Your Name</label>
                                <input type="text" name="name" id="name-field" class="form-control"
                                    required="">
                            </div>

                            <div class="col-md-6">
                                <label for="email-field" class="pb-2">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email-field"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <label for="subject-field" class="pb-2">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject-field"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <label for="message-field" class="pb-2">Message</label>
                                <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->
@endsection

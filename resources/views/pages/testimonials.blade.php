@extends('layouts.app')

@section('content')

@include('includes.header')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/image31.jpg);">
      <div class="container position-relative">
        <h1 style="font-size: 5rem;">TESTIMONIALS</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">Testimonials</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Testimonials Section -->
    <section class="testimonials-12 testimonials section" id="testimonials">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>TESTIMONIALS</h2>
        {{-- <p>Necessitatibus eius consequatur</p> --}}
      </div><!-- End Section Title -->

      <div class="testimonial-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-6 mb-4 mb-md-4">
              <div class="testimonial">
                <img src="assets/img/testimonials/testimonials-1.jpg" alt="Testimonial author">
                <blockquote>
                  <p>
                    "Makoine Foods and Farms Ltd has transformed our community by providing modern 
                    farming tools and fair pricing for our produce. We are now more productive and financially 
                    secure."
                  </p>
                </blockquote>
                <p class="client-name">Smallholder Farmer, <br> Atebubu Amantin Municipality.</p>
              </div>
            </div>
            <div class="col-md-6 mb-4 mb-md-4">
              <div class="testimonial">
                <img src="assets/img/testimonials/testimonials-2.jpg" alt="Testimonial author">
                <blockquote>
                  <p>
                    "Their commitment to sustainability and quality is unparalleled. Makoine Foods truly sets 
                    a benchmark for agribusiness in Ghana."
                  </p>
                </blockquote>
                <p class="client-name">Partner Institution Representative</p>
              </div>
            </div>
            {{-- <div class="col-md-6 mb-4 mb-md-4">
              <div class="testimonial">
                <img src="assets/img/testimonials/testimonials-3.jpg" alt="Testimonial author">
                <blockquote>
                  <p>
                    “Lorem ipsum dolor sit, amet consectetur adipisicing
                    elit. Provident deleniti iusto molestias, dolore vel fugiat
                    ab placeat ea?”
                  </p>
                </blockquote>
                <p class="client-name">Claire Anderson</p>
              </div>
            </div> --}}
            {{-- <div class="col-md-6 mb-4 mb-md-4">
              <div class="testimonial">
                <img src="assets/img/testimonials/testimonials-4.jpg" alt="Testimonial author">
                <blockquote>
                  <p>
                    “Lorem ipsum dolor sit, amet consectetur adipisicing
                    elit. Provident deleniti iusto molestias, dolore vel fugiat
                    ab placeat ea?”
                  </p>
                </blockquote>
                <p class="client-name">Dan Smith</p>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </section><!-- /Testimonials Section -->

    <!-- Call To Action Section -->
    @include('includes.blog-letter')
    <!-- /Call To Action Section -->

  </main>

  @include('includes.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

@endsection
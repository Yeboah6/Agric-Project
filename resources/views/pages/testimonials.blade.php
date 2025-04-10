@extends('layouts.app')

@section('content')

@include('includes.header')



<style>
  .container .test {
    font-size: 6rem;
}
  @media (max-width: 550px) {
      .container .test {
      font-size: 3.5rem;
    }

    .testimonial-words {
      padding: 25px;
    }
  }

    @media (max-width: 450px) {
      .container .test {
      font-size: 3rem;
    }
  }
</style>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/image31.jpg);">
      <div class="container position-relative">
        <h1 class="test">TESTIMONIALS</h1>
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
      </div><!-- End Section Title -->

      <div class="testimonial-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-6 mb-4 mb-md-4 testimonial-words">
              <div class="testimonial">
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
            <div class="col-md-6 mb-4 mb-md-4 testimonial-words">
              <div class="testimonial">
                <blockquote>
                  <p>
                    "Their commitment to sustainability and quality is unparalleled. Makoine Foods truly sets 
                    a benchmark for agribusiness in Ghana."
                  </p>
                </blockquote>
                <p class="client-name">Partner Institution Representative</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Testimonials Section -->

    <!-- About 3 Section -->
    <section id="about-3" class="about-3 section">

      <div class="container">
        <div class="row gy-4 justify-content-between align-items-center">
          <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
            <img src="assets/img/image35.jpg" alt="Image" class="img-fluid" style="border-radius: 15px;">
          </div>
          <div class="col-lg-5 order-lg-1 testimonial-words" data-aos="fade-up" data-aos-delay="100">
            <h2 class="content-title mb-4" style="text-align:center">COMPLIANCE AND REGULATORY AFFILIATIONS</h2>
            <p class="mb-4">
              Makoine Foods and Farms Ltd maintains strong relationships with key regulatory 
              institutions, underscoring our commitment to excellence and compliance. These 
              affiliations not only enhance our credibility but also ensure that our operations meet both Makoine Foods and Farms Ltd maintains strong relationships with key regulatory 
              institutions, underscoring our commitment to excellence and compliance. 
            </p>
            <p class="mb-4">
              These affiliations not only enhance our credibility but also ensure that our operations meet both 
              local and international standards. Through these partnerships, we adhere to best 
              practices in sustainable agriculture, quality assurance, and ethical production, 
              positioning us as a trusted leader in the agribusiness sector.
            </p>
            <strong>Local Affiliations</strong>
            <ul>
              <li>Ghana Grain Council (GGC)</li>
              <li>Ghana Export Promotion Council (GEPC)</li>
              <li>Ministry of Food and Agriculture (MoFA)</li>
            </ul>
            <strong>Global Affiliations</strong>
            <ul>
              <li>Food and Agriculture Organization (FAO)</li>
              <li>International Organization for Standardization (ISO 9001 & 14001) </li>
              <li>Good Agricultural Practices (GAP) certification bodies</li>
            </ul>
            <br>
          </div>
        </div>
      </div>
    </section>
    <!-- /About 3 Section -->

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
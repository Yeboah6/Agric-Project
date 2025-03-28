@extends('layouts.app')

@section('content')

@include('includes.header')


  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="assets/img/image4.jpg" alt="">
          <div class="carousel-container">
            <h2 style="font-size: 5rem;text-align:center;">Makoine Foods and Farms</h2>
            {{-- <p>Makoine Foods and Farms Ltd is a trailblazing agribusiness based in Ghana, passionately 
              committed to transforming the grains industry. </p> --}}
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/image3.jpg" alt="">
          <div class="carousel-container">
            <h2 style="font-size: 5rem;text-align:center;">Organic Food is good for health</h2>
            {{-- <p>We specialize in empowering smallholder 
              farmers through innovative farming techniques, capacity-building programs, and 
              sustainable practices that uplift communities while enhancing food security. </p> --}}
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/image2.jpg" alt="">
          <div class="carousel-container">
            <h2 style="font-size: 4.2rem;text-align:center;">Providing Fresh Produce Every Single Day</h2>
            {{-- <p>With a strong focus on quality, we ensure that our products meet both local and international 
              standards, positioning ourselves as leaders in the agricultural sector.</p> --}}
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/image29.jpg" alt="">
          <div class="carousel-container">
            <h2 style="font-size: 4.6rem;text-align:center;">Farming as a Passione</h2>
            {{-- <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius.</p> --}}
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/image41.jpg" alt="">
          <div class="carousel-container">
            <h2 style="font-size: 5rem;text-align:center;">Good Food For All</h2>
            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> --}}
          </div>
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section><!-- /Hero Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>WHO WE ARE</h2>
        <p>Makoine Foods and Farms Ltd is a trailblazing agribusiness based in Ghana, passionately 
          committed to transforming the grains industry. We specialize in empowering smallholder 
          farmers through innovative farming techniques, capacity-building programs, and 
          sustainable practices that uplift communities while enhancing food security. With a 
          strong focus on quality, we ensure that our products meet both local and international 
          standards, positioning ourselves as leaders in the agricultural sector.
        </p>
      </div>
      <!-- End Section Title -->
    </section><!-- /Services Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
              <img src="assets/img/image1.jpg" alt="Image " class="img-fluid img-overlap" data-aos="zoom-out" style="border-radius: 10px;">
            </div>
            <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
              <h3 class="content-subtitle text-white opacity-50">OUR SUCCESS METRICS</h3>

              <div class="row my-5">
                <div class="col-lg-12 d-flex align-items-start mb-4">
                  <i class="bi bi-shop me-4 display-6"></i>
                  <div>
                    <h4 class="m-0 h5 text-white">Empowering Farmers</h4>
                    <p class="text-white opacity-50">
                      By 2030, Makoine Foods aims to equip over 10,000 
                      smallholder farmers with advanced tools, modern agricultural techniques, and 
                      access to training programs tailored to their specific needs. This empowerment 
                      will enable them to enhance productivity, reduce post-harvest losses, and 
                      achieve sustainable farming practices.
                    </p>
                  </div>
                </div>
                <div class="col-lg-12 d-flex align-items-start mb-4">
                  <i class="bi bi-shop me-4 display-6"></i>
                  <div>
                    <h4 class="m-0 h5 text-white">Market Leadership</h4>
                    <p class="text-white opacity-50">
                      Establishing Makoine Foods as the foremost leader in 
                      grains production in Ghana by ensuring consistency in product quality, 
                      maintaining competitive pricing, and leveraging strategic partnerships to access 
                      both regional and international markets. This includes penetrating high-demand 
                      export destinations while solidifying our reputation as a reliable supplier.
                    </p>
                  </div>
                </div>
                <div class="col-lg-12 d-flex align-items-start">
                  <i class="bi bi-shop me-4 display-6"></i>
                  <div>
                    <h4 class="m-0 h5 text-white">Sustainable Growth</h4>
                    <p class="text-white opacity-50">
                      Implementing innovative farming technologies and 
                      environmentally friendly practices to achieve a 30% increase in crop yields. 
                      Additionally, reducing the environmental footprint of agricultural activities by 20% 
                      through the adoption of renewable energy solutions, organic farming inputs, and 
                      precision agriculture techniques.
                    </p>
                  </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="col-lg-12 d-flex align-items-start">
                  <i class="bi bi-shop me-4 display-6"></i>
                  <div>
                    <h4 class="m-0 h5 text-white">Economic Impact</h4>
                    <p class="text-white opacity-50">
                      Enhancing farmer incomes by 50% through fair and 
                      transparent pricing mechanisms, access to premium markets, and financial 
                      literacy programs. By creating value-added products and ensuring supply chain 
                      efficiency, we aim to maximize profitability for all stakeholders involved in the 
                      agricultural ecosystem.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /About Section -->

    <!-- About 3 Section -->
    <section id="about-3" class="about-3 section">

      <div class="container">
        <div class="row gy-4 justify-content-between align-items-center">
          <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
            <img src="assets/img/image14.jpg" alt="Image" class="img-fluid" style="border-radius: 15px;">
          </div>
          <div class="col-lg-5 order-lg-1" data-aos="fade-up" data-aos-delay="100">
            <h2 class="content-title mb-4">Plants Make Life Better</h2>
            <p class="mb-4">
              Makoine Foods and Farms Ltd is steadfast in its mission to redefine agriculture in Ghana 
              and beyond. Through strategic investments in innovation, sustainability, and community 
              upliftment, we are tackling the challenges of food security while opening transformative 
              opportunities for thousands of farmers.
            </p>
            <p class="mb-4">
              By fostering a resilient agricultural ecosystem built on cutting-edge technologies, eco-friendly practices, 
              and inclusive growth, we are paving the way for a prosperous and 
              sustainable future. We invite you to be part of this journey-shaping the future of 
              agribusiness together.
            </p>
            <br>
            <p><a href="/contact" class="btn-cta">Get in touch</a></p>
          </div>
        </div>
      </div>
    </section><!-- /About 3 Section -->

    <!-- Services 2 Section -->
 <section id="services-2" class="services-2 section dark-background">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Services</h2>
    {{-- <p>Necessitatibus eius consequatur</p> --}}
  </div><!-- End Section Title -->

  <div class="services-carousel-wrap">
    <div class="container">
      <div class="swiper init-swiper">
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
            "navigation": {
              "nextEl": ".js-custom-next",
              "prevEl": ".js-custom-prev"
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 1,
                "spaceBetween": 40
              },
              "1200": {
                "slidesPerView": 3,
                "spaceBetween": 40
              }
            }
          }
        </script>
        <button class="navigation-prev js-custom-prev">
          <i class="bi bi-arrow-left-short"></i>
        </button>
        <button class="navigation-next js-custom-next">
          <i class="bi bi-arrow-right-short"></i>
        </button>
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="service-item">
              {{-- <img src="assets/img/image8.jpg" alt="Image" class="img-fluid service-image" style="border-radius: 10px;cursor: pointer;"> --}}
              <img src="assets/img/image19.jpg" alt="Image" class="img-fluid service-image" style="border-radius: 10px;cursor: pointer;">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="service-item">
              <img src="assets/img/image36.jpg" alt="Image" class="img-fluid service-image" style="border-radius: 10px;cursor: pointer;">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="service-item">
              <img src="assets/img/image43.jpg" alt="Image" class="img-fluid service-image" style="border-radius: 10px;cursor: pointer;">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="service-item">
              <img src="assets/img/image38.jpg" alt="Image" class="img-fluid service-image" style="border-radius: 10px;cursor: pointer;">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="service-item">
              <img src="assets/img/image39.jpg" alt="Image" class="img-fluid service-image" style="border-radius: 10px;cursor: pointer;">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="service-item">
              <img src="assets/img/image25.jpg" alt="Image" class="img-fluid service-image" style="border-radius: 10px;cursor: pointer;">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="service-item">
              <img src="assets/img/image12.jpg" alt="Image" class="img-fluid service-image" style="border-radius: 10px;cursor: pointer;">
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
</section>

    <!-- Image Modal -->
    <div id="imageModal" class="modal">
      <span class="close">&times;</span>
      <img class="modal-content" id="modalImage">
    </div>

    <!-- CSS for Modal -->
    <style>
      .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        padding-top: 50px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.9);
      }

      .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
      }

      .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        cursor: pointer;
      }
    </style>

    <!-- JavaScript for Image Popup -->
    <script>
      document.addEventListener('DOMContentLoaded', function() {
      // Get the modal
      var modal = document.getElementById('imageModal');
      var modalImg = document.getElementById('modalImage');
      var closeBtn = document.getElementsByClassName('close')[0];
      
      // Get all images with the service-image class
      var images = document.getElementsByClassName('service-image');
    
      // Add click event to each image
      for (var i = 0; i < images.length; i++) {
        images[i].onclick = function() {
          modal.style.display = "block";
          modalImg.src = this.src;
        }
      }

      // Close the modal when the close button is clicked
      closeBtn.onclick = function() {
        modal.style.display = "none";
      }

      // Close the modal when clicking outside the image
      modal.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
    });
    </script>
      <!-- Services Section -->

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
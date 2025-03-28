@extends('layouts.app')

@section('content')

@include('includes.header')

<style>

.services .row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px; /* Space between video items */
            justify-content: center;
            padding: 20px;
        }

        /* Individual Video Wrapper */
        .video-wrapper {
            position: relative;
            width: calc(25% - 20px); /* Responsive width with gap consideration */
            margin-bottom: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 10px;
            overflow: hidden;
        }

        /* Responsive adjustments */
        @media (max-width: 1200px) {
            .video-wrapper {
                width: calc(33.333% - 20px); /* 3 videos per row on medium screens */
            }
        }

        @media (max-width: 768px) {
            .video-wrapper {
                width: calc(50% - 20px); /* 2 videos per row on small screens */
            }
        }

        @media (max-width: 480px) {
            .video-wrapper {
                width: 100%; /* 1 video per row on extra small screens */
            }
        }

        /* Hover and Interactive Effects */
        .video-wrapper:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
            z-index: 10;
        }

        .vid2 {
            width: 100%;
            height: auto;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.3);
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
        }

        .video-wrapper:hover .video-overlay {
            opacity: 1;
        }

  .ser-vid {
    width: 620px; 
    height:240px;
    margin-left: -80px;
  }


@media screen and (max-width: 700px) {
  .ser-vid {
    width: 375px; 
    height: 240px;
    margin-left: -5px;
    }
}

</style>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/image31.jpg);">
      <div class="container position-relative">
        <h1 style="font-size: 5rem;">SERVICES</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">Services</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>SERVICES</h2>
        <p>Providing Fresh Produce Every Single Day</p>
      </div><!-- End Section Title -->
      <div class="content">
        <div class="container">
          <div class="row g-0">
            <div class="col-lg-3 col-md-6">
              <div class="service-item">
                <span class="number">01</span>
                <div class="service-item-icon">
                </div>
                <div class="service-item-content">
                  <h3 class="service-heading">Integrated Agro-input Solutions</h3>
                  <p>
                    Supplying high-quality fertilizers, 
                    certified seeds, and agro-chemicals while offering expert guidance on their 
                    effective use. This ensures farmers have the necessary tools to achieve optimal 
                    yields.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="service-item">
                <span class="number">02</span>
                <div class="service-item-icon">
                </div>
                <div class="service-item-content">
                  <h3 class="service-heading">Farmer Training and Capacity Building</h3>
                  <p>
                    Organizing comprehensive 
                    training programs that focus on modern farming practices, financial literacy, and 
                    the adoption of sustainable agricultural techniques. These programs empower 
                    farmers to enhance productivity and profitability.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="service-item">
                <span class="number">03</span>
                <div class="service-item-icon">
                </div>
                <div class="service-item-content">
                  <h3 class="service-heading">Market Access and Pricing Support</h3>
                  <p>
                    Facilitating connections between 
                    farmers and profitable markets, both locally and internationally, while providing 
                    pricing advisory services to ensure fair compensation for their produce.
                    <br>
                    <br>
                    <br>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="service-item">
                <span class="number">04</span>
                <div class="service-item-icon">
                </div>
                <div class="service-item-content">
                  <h3 class="service-heading">Logistics and Advisory Services</h3>
                  <p>
                    Offering end-to-end logistics solutions, 
                    including transportation and distribution of farm produce, to minimize post-harvest losses. 
                    Additionally, providing real-time crop monitoring and tailored 
                    advisory services to address specific farming challenges.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="service-item">
                <span class="number">05</span>
                <div class="service-item-icon">
                </div>
                <div class="service-item-content">
                  <h3 class="service-heading">Livestock & Aquaculture Production</h3>
                  <p>
                    Operating diverse farming ventures 
                    including catfish, snails, and poultry production. These ventures complement 
                    crop farming and create additional income streams.
                    <br>
                    <br>
                    <br>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="service-item">
                <span class="number">06</span>
                <div class="service-item-icon">
                </div>
                <div class="service-item-content">
                  <h3 class="service-heading">Crop Production and Export Services</h3>
                  <p>
                    Specializing in cultivating and 
                    exporting maize, rice, soybeans, sorghum, and millet. With a focus on meeting 
                    international quality standards, we ensure market competitiveness and expanded 
                    reach.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Services Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="content">
        <div class="container">
          <div class="row">
              <div class="col-lg-6 mb-4 mb-lg-0">
                <video class="ser-vid" controls>
                  <source src="assets/img/video11.mp4" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
            </div>
            
            <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
              <h3 class="content-subtitle text-white opacity-50">Why Choose Us</h3>
              <h2 class="content-title mb-4">
                <strong>Experience</strong> in agriculture industry
              </h2>
              <div class="row my-5">
                <div class="col-lg-12 d-flex align-items-start mb-4">
                  <i class="bi bi-shop me-4 display-6"></i>
                  <div>
                    <h4 class="m-0 h5 text-white">Proven Impact</h4>
                    <p class="text-white opacity-50">With over 470 farmers already supported, we have achieved 
                      measurable improvements in their income levels and productivity. This 
                      demonstrates our ability to create tangible benefits for smallholder farmers and 
                      establish sustainable agricultural models.
                    </p>
                  </div>
                </div>
                <div class="col-lg-12 d-flex align-items-start mb-4">
                  <i class="bi bi-shop me-4 display-6"></i>
                  <div>
                    <h4 class="m-0 h5 text-white">Diverse Operations</h4>
                    <p class="text-white opacity-50">Our expertise spans across grains production, livestock 
                      farming, and agro chemical exports. This diversified portfolio ensures resilience 
                      against market fluctuations and provides multiple revenue streams for long-term 
                      growth.</p>
                  </div>
                </div>
                <div class="col-lg-12 d-flex align-items-start">
                  <i class="bi bi-shop me-4 display-6"></i>
                  <div>
                    <h4 class="m-0 h5 text-white">Sustainability Focus</h4>
                    <p class="text-white opacity-50">We prioritize environmental stewardship by employing 
                      innovative farming practices that reduce ecological footprints. From organic 
                      fertilizers to water-efficient techniques, we are committed to sustainable 
                      solutions that balance productivity with conservation.
                    </p>
                  </div>
                </div>
                <div class="col-lg-12 d-flex align-items-start">
                  <i class="bi bi-shop me-4 display-6"></i>
                  <div>
                    <h4 class="m-0 h5 text-white">Strong Partnerships</h4>
                    <p class="text-white opacity-50">Collaborating with leading research institutions, NGOs, 
                      and government bodies allows us to integrate global best practices into our 
                      operations. These partnerships strengthen our technical capabilities and 
                      enhance our outreach efforts.
                    </p>
                  </div>
                </div>
                <div class="col-lg-12 d-flex align-items-start">
                  <i class="bi bi-shop me-4 display-6"></i>
                  <div>
                    <h4 class="m-0 h5 text-white">Market Reach</h4>
                    <p class="text-white opacity-50">With a strategic focus on both regional and global expansion, 
                      we ensure that our products meet international standards of quality and reliability. 
                      This enables us to access new markets while building a reputation as a trusted supplier.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /About Section -->

    <!-- Testimonials Section -->
    <section class="testimonials-12 testimonials section" id="testimonials">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>STRATEGIC GROWTH ROADMAP</h2>
      </div><!-- End Section Title -->

      <div class="testimonial-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-6 mb-4 mb-md-4">
              <div class="testimonial">
                <p class="client-name">Regional Expansion</p>
                <blockquote>
                  <p>
                    Makoine Foods aims to extend its presence to 
                    underserved regions across Ghana, prioritizing areas with untapped agricultural 
                    potential. This includes securing additional arable land, establishing satellite 
                    offices, and integrating more smallholder farmers into its network.
                  </p>
                </blockquote>
              </div>
            </div>
            <div class="col-md-6 mb-4 mb-md-4">
              <div class="testimonial">
                <p class="client-name">International Growth</p>
                <blockquote>
                  <p>
                    The company is set to penetrate high-demand export 
                    markets in Europe, Asia, and North America. This involves adhering to 
                    international quality standards, developing efficient supply chains, and leveraging 
                    partnerships to enhance global visibility.
                  </p>
                </blockquote>
              </div>
            </div>
            <div class="col-md-6 mb-4 mb-md-4">
              <div class="testimonial">
                <p class="client-name">Technology Integration</p>
                <blockquote>
                  <p>
                    To boost productivity and reduce waste, Makoine 
                    Foods will invest in cutting-edge technologies such as precision farming tools, 
                    real-time crop monitoring systems, and advanced data analytics platforms like 
                    the Blockchain technology. These innovations will support informed decision-making and resource optimization.
                  </p>
                </blockquote>
                
              </div>
            </div>
            <div class="col-md-6 mb-4 mb-md-4">
              <div class="testimonial">
                <p class="client-name">Community Engagement</p>
                <blockquote>
                  <p>
                    Beyond farming, Makoine Foods plans to 
                    implement programs that foster rural development. This includes building 
                    educational centers, providing vocational training for youth and women, and 
                    improving local infrastructure such as roads and storage facilities.
                  </p>
                </blockquote>
              </div>
            </div>
            <div class="col-md-6 mb-4 mb-md-4">
              <div class="testimonial">
                <p class="client-name">Sustainability Initiatives</p>
                <blockquote>
                  <p>
                    The roadmap also emphasizes environmental 
                    stewardship through the promotion of organic farming, water conservation 
                    techniques, and the development of climate-resilient crop varieties. These efforts 
                    align with global sustainability goals and enhance long-term ecological balance.
                  </p>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Testimonials Section -->

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
              <img src="assets/img/image8.jpg" alt="Image" class="img-fluid service-image" style="border-radius: 10px;cursor: pointer;">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="service-item">
              <img src="assets/img/image42.jpg" alt="Image" class="img-fluid service-image" style="border-radius: 10px;cursor: pointer;">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="service-item">
              <img src="assets/img/image6.jpg" alt="Image" class="img-fluid service-image" style="border-radius: 10px;cursor: pointer;">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="service-item">
              <img src="assets/img/image47.jpg" alt="Image" class="img-fluid service-image" style="border-radius: 10px;cursor: pointer;">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="service-item">
              <img src="assets/img/image11.jpg" alt="Image" class="img-fluid service-image" style="border-radius: 10px;cursor: pointer;">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="service-item">
              <img src="assets/img/image50.jpg" alt="Image" class="img-fluid service-image" style="border-radius: 10px;cursor: pointer;">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="service-item">
              <img src="assets/img/image35.jpg" alt="Image" class="img-fluid service-image" style="border-radius: 10px;cursor: pointer;">
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
        <!-- /Services 2 Section -->


        <section id="services" class="services section">
          <div class="content">
            <div class="container">
              <div class="row g-0">
                      <!-- Video Columns with Wrapper -->
                      <div class="col-lg-3 col-md-6 video-wrapper">
                          <div class="video-overlay">Play Video</div>
                          <video class="vid2" controls>
                              <source src="assets/img/video1.mp4" type="video/mp4">
                              Your browser does not support the video tag.
                          </video>
                      </div>
                      <div class="col-lg-3 col-md-6 video-wrapper">
                          <div class="video-overlay">Play Video</div>
                          <video class="vid2" controls>
                              <source src="assets/img/video2.mp4" type="video/mp4">
                              Your browser does not support the video tag.
                          </video>
                      </div>
                      <div class="col-lg-3 col-md-6 video-wrapper">
                          <div class="video-overlay">Play Video</div>
                          <video class="vid2" controls>
                              <source src="assets/img/video7.mp4" type="video/mp4">
                              Your browser does not support the video tag.
                          </video>
                      </div>
                      
                      <div class="col-lg-3 col-md-6 video-wrapper">
                        <div class="video-overlay">Play Video</div>
                        <video class="vid2" controls>
                            <source src="assets/img/video11.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    </div>
                    <div class="row g-0">
                      <div class="col-lg-3 col-md-6 video-wrapper">
                          <div class="video-overlay">Play Video</div>
                          <video class="vid2" controls>
                              <source src="assets/img/video9.mp4" type="video/mp4">
                              Your browser does not support the video tag.
                          </video>
                      </div>
                      <div class="col-lg-3 col-md-6 video-wrapper">
                          <div class="video-overlay">Play Video</div>
                          <video class="vid2" controls>
                              <source src="assets/img/video8.mp4" type="video/mp4">
                              Your browser does not support the video tag.
                          </video>
                      </div>
                      <div class="col-lg-3 col-md-6 video-wrapper">
                          <div class="video-overlay">Play Video</div>
                          <video class="vid2" controls>
                              <source src="assets/img/video20.mp4" type="video/mp4">
                              Your browser does not support the video tag.
                          </video>
                      </div>
                      <div class="col-lg-3 col-md-6 video-wrapper">
                          <div class="video-overlay">Play Video</div>
                          <video class="vid2" controls>
                              <source src="assets/img/video19.mp4" type="video/mp4">
                              Your browser does not support the video tag.
                          </video>
                      </div>
                    </div>
                    <div class="row g-0">
                      <div class="col-lg-3 col-md-6 video-wrapper">
                          <div class="video-overlay">Play Video</div>
                          <video class="vid2" controls>
                              <source src="assets/img/video10.mp4" type="video/mp4">
                              Your browser does not support the video tag.
                          </video>
                      </div>
                      <div class="col-lg-3 col-md-6 video-wrapper">
                          <div class="video-overlay">Play Video</div>
                          <video class="vid2" controls>
                              <source src="assets/img/video5.mp4" type="video/mp4">
                              Your browser does not support the video tag.
                          </video>
                      </div>
                      <div class="col-lg-3 col-md-6 video-wrapper">
                          <div class="video-overlay">Play Video</div>
                          <video class="vid2" controls>
                              <source src="assets/img/video6.mp4" type="video/mp4">
                              Your browser does not support the video tag.
                          </video>
                      </div>
                      <div class="col-lg-3 col-md-6 video-wrapper">
                          <div class="video-overlay">Play Video</div>
                          <video class="vid2" controls>
                              <source src="assets/img/video3.mp4" type="video/mp4">
                              Your browser does not support the video tag.
                          </video>
                      </div>
                  </div>
                  <div class="row g-0">
                    <div class="col-lg-3 col-md-6 video-wrapper">
                        <div class="video-overlay">Play Video</div>
                        <video class="vid2" controls>
                            <source src="assets/img/video17.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="col-lg-3 col-md-6 video-wrapper">
                        <div class="video-overlay">Play Video</div>
                        <video class="vid2" controls>
                            <source src="assets/img/video13.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="col-lg-3 col-md-6 video-wrapper">
                        <div class="video-overlay">Play Video</div>
                        <video class="vid2" controls>
                            <source src="assets/img/video14.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="col-lg-3 col-md-6 video-wrapper">
                        <div class="video-overlay">Play Video</div>
                        <video class="vid2" controls>
                            <source src="assets/img/video16.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                </div>
              </div>
          </div>
      </section>

        <!-- About Section -->
    {{-- <section id="about" class="about section"> --}}

      {{-- <div class="content"> --}}
        {{-- <div class="container"> --}}
          {{-- <div class="row"> --}}
              {{-- <div class="col-lg-6 mb-4 mb-lg-0"> --}}
                {{-- <video class="ser-vid" controls> --}}
                  {{-- <source src="assets/img/video11.mp4" type="video/mp4"> --}}
                  {{-- Your browser does not support the video tag. --}}
                {{-- </video> --}}
            {{-- </div> --}}
{{--              --}}
            {{-- <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100"> --}}
              {{-- <h3 class="content-subtitle text-white opacity-50">STRATEGIC PILLARS</h3> --}}
              {{-- {{-- <h2 class="content-title mb-4"> --}}
                {{-- <strong>STRATEGIC PILLARS</strong>  --}}
              {{-- </h2> --}} 
              {{-- <div class="row my-5"> --}}
                {{-- <div class="col-lg-12 d-flex align-items-start mb-4"> --}}
                  {{-- <i class="bi bi-shop me-4 display-6"></i> --}}
                  {{-- <div> --}}
                    {{-- <h4 class="m-0 h5 text-white">Farmer Empowerment</h4> --}}
                    {{-- <p class="text-white opacity-50">Providing tools, training, and resources to  --}}
                      {{-- smallholder farmers to enhance productivity and income. --}}
                      {{-- <br> --}}
                      {{-- <span style="font-weight:500;color:#fff;">a. Access to subsidized inputs such as seeds and fertilizers.</span> --}}
                      {{-- <br> --}}
                      {{-- <span style="font-weight:300">b. Training on modern farming techniques and financial management.</span>  --}}
                      {{-- {{-- This demonstrates our ability to create tangible benefits for smallholder farmers and  --}}
                      {{-- establish sustainable agricultural models. --}}
                    {{-- </p> --}}
                  {{-- </div> --}}
                {{-- </div> --}}
                {{-- <div class="col-lg-12 d-flex align-items-start mb-4"> --}}
                  {{-- <i class="bi bi-shop me-4 display-6"></i> --}}
                  {{-- <div> --}}
                    {{-- <h4 class="m-0 h5 text-white">Diverse Operations</h4> --}}
                    {{-- <p class="text-white opacity-50">Our expertise spans across grains production, livestock  --}}
                      {{-- farming, and agro chemical exports. This diversified portfolio ensures resilience  --}}
                      {{-- against market fluctuations and provides multiple revenue streams for long-term  --}}
                      {{-- growth.</p> --}}
                  {{-- </div> --}}
                {{-- </div> --}}
                {{-- <div class="col-lg-12 d-flex align-items-start"> --}}
                  {{-- <i class="bi bi-shop me-4 display-6"></i> --}}
                  {{-- <div> --}}
                    {{-- <h4 class="m-0 h5 text-white">Sustainability Focus</h4> --}}
                    {{-- <p class="text-white opacity-50">We prioritize environmental stewardship by employing  --}}
                      {{-- innovative farming practices that reduce ecological footprints. From organic  --}}
                      {{-- fertilizers to water-efficient techniques, we are committed to sustainable  --}}
                      {{-- solutions that balance productivity with conservation. --}}
                    {{-- </p> --}}
                  {{-- </div> --}}
                {{-- </div> --}}
                {{-- <div class="col-lg-12 d-flex align-items-start"> --}}
                  {{-- <i class="bi bi-shop me-4 display-6"></i> --}}
                  {{-- <div> --}}
                    {{-- <h4 class="m-0 h5 text-white">Strong Partnerships</h4> --}}
                    {{-- <p class="text-white opacity-50">Collaborating with leading research institutions, NGOs,  --}}
                      {{-- and government bodies allows us to integrate global best practices into our  --}}
                      {{-- operations. These partnerships strengthen our technical capabilities and  --}}
                      {{-- enhance our outreach efforts. --}}
                    {{-- </p> --}}
                  {{-- </div> --}}
                {{-- </div> --}}
                {{-- <div class="col-lg-12 d-flex align-items-start"> --}}
                  {{-- <i class="bi bi-shop me-4 display-6"></i> --}}
                  {{-- <div> --}}
                    {{-- <h4 class="m-0 h5 text-white">Market Reach</h4> --}}
                    {{-- <p class="text-white opacity-50">With a strategic focus on both regional and global expansion,  --}}
                      {{-- we ensure that our products meet international standards of quality and reliability.  --}}
                      {{-- This enables us to access new markets while building a reputation as a trusted supplier. --}}
                    {{-- </p> --}}
                  {{-- </div> --}}
                {{-- </div> --}}
              {{-- </div> --}}
            {{-- </div> --}}
          {{-- </div> --}}
        {{-- </div> --}}
      {{-- </div> --}}
    {{-- </section><!-- /About Section --> --}}


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
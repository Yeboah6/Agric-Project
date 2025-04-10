@extends('layouts.app')

@section('content')

@include('includes.header')

<style>
        /* Base image styles */
        .service-item-content {
            position: relative;
            overflow: hidden;
            margin: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            border-radius: 8px;
        }

        .service-item-content img {
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        /* Hover effect */
        .service-item-content:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
            z-index: 10;
        }

        /* Zoom modal styles */
        .zoom-modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.9);
            align-items: center;
            justify-content: center;
        }

        .zoom-modal-content {
            max-width: 90%;
            max-height: 90%;
            margin: auto;
            display: block;
            width: auto;
            height: auto;
            transition: transform 0.3s ease;
        }

        .zoom-close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }

        /* CSS with updated color scheme */
      .why-choose-us {
        /* background-color: #116530; */
        color: white;
        padding: 60px 0;
      }
      .why-choose-us h2 {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 20px;
        color: #000;
      }
      .emoji-icon {
        margin-top: 10px;
      }
      .tagline {
        text-align: center;
        font-size: 1.2rem;
        line-height: 1.6;
        color: white;
      }
      .benefit-card {
        background-color: black;
        border-radius: 10px;
        padding: 25px;
        height: 100%;
      }
      .number {
        font-size: .9rem;
        font-weight: bold;
        margin-bottom: 15px;
        color: white;
      }
      .benefit-title {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 15px;
        color: white;
      }
      .benefit-description {
        font-size: .9rem;
        line-height: 1.5;
        color: white;
      }

      .container .test {
        font-size: 5rem;
      }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .service-item-content {
                margin: 5px;
            }
        }

        @media (max-width: 550px) {
            .testimonial-words {
              padding: 25px;
            }

            .service-item-content .big {
              height: 400px;
              width: 500px;
            }

            .container .test {
              font-size: 3rem;
            }
        }
    </style>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/image31.jpg);">
      <div class="container position-relative">
        <h1 class="test">ABOUT US</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">About</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- About 3 Section -->
    <section id="about-3" class="about-3 section">

      <div class="container">
        <div class="row gy-4 justify-content-between align-items-center">
          <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
            <img src="assets/img/image33.jpg" alt="Image" class="img-fluid" style="border-radius: 15px;">
          </div>
          <div class="col-lg-5 order-lg-1" data-aos="fade-up" data-aos-delay="100">
            <h2 class="content-title mb-4 testimonial-words" style="font-weight: bolder">ABOUT US</h2>
            <p class="mb-4 testimonial-words" style="line-height: 1.8;letter-spacing: .7px">
              Founded with the mission to revolutionize Ghana's agricultural landscape, Makoine 
              Foods and Farms Ltd operates as a key driver of economic growth and rural development. 
              Our operations span multiple areas, including grains production, livestock farming, and
              agro-chemical exports.
            </p>

            <p class="mb-4 testimonial-words" style="line-height: 1.8;letter-spacing: .7px">
                By leveraging cutting-edge technology and fostering partnerships 
                with local and global stakeholders, we aim to address critical challenges in agriculture 
                such as low productivity, market volatility, and environmental degradation.
            </p>

            <p class="mb-4 testimonial-words" style="line-height: 1.8;letter-spacing: .7px">
                Our efforts 
                are aligned with sustainable development goals to create long-lasting, positive impacts 
                for farmers, communities, and the environment.
            </p>
<br>
            <p><a href="contact" class="btn-cta">Get in touch</a></p>
          </div>
        </div>
      </div>
    </section><!-- /About 3 Section -->

    <!-- Team Section -->
    <section class="why-choose-us section" id="why-choose-us">
      <!-- Section Title -->
      <div class="container">
            <h2 style="text-align: center">Our Team of Experts</h2>
      </div>
      <!-- End Section Title -->
      <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 mb-4">
              <div class="benefit-card">
                <h4 class="benefit-title">CEO</h4>
                <p class="benefit-description">
                  Leading the strategic vision of Makoine Foods and Farms Ltd, the CEO 
                    brings decades of experience in agribusiness management and a proven track 
                    record of establishing successful partnerships. The CEO plays a pivotal role in 
                    aligning the company's goals with emerging global agricultural trends.
                </p>
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <div class="benefit-card">
                <h4 class="benefit-title">Operations Manager</h4>
                <p class="benefit-description">
                  With extensive expertise in supply chain logistics, crop 
                    production, and export operations, the Operations Manager ensures efficient and 
                    seamless delivery of services. Their focus is on optimizing processes to enhance 
                    productivity and minimize costs.
                </p>
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <div class="benefit-card">
                <h4 class="benefit-title">Agricultural Specialists</h4>
                <p class="benefit-description">
                  A team of highly qualified agronomists and 
                    livestock experts specializing in grains, sustainable farming practices, and 
                    livestock management. They provide tailored solutions to farmers, ensuring the 
                    adoption of best practices and maximizing yields.
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 mb-4">
              <div class="benefit-card">
                <h4 class="benefit-title">Market Analysts</h4>
                <p class="benefit-description">
                  These experts monitor market trends and identify profitable 
                    opportunities for produce. They conduct pricing analyses and develop strategies 
                    to connect farmers with lucrative markets, ensuring competitive and fair 
                    compensation.
                </p>
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <div class="benefit-card">
                <h4 class="benefit-title">Training Coordinators</h4>
                <p class="benefit-description">
                  Responsible for designing and executing 
                    comprehensive training programs, these professionals equip farmers with the 
                    knowledge and skills needed for modern farming techniques, financial literacy, 
                    and sustainable agricultural practices.
                </p>
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <div class="benefit-card">
                <h4 class="benefit-title">Financial Experts</h4>
                <p class="benefit-description">
                  Providing farmers and stakeholders with financial 
                    planning, investment strategies, and access to funding options, ensuring 
                    sustainable growth and economic stability across operations.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="benefit-card">
              <h4 class="benefit-title">Technology Advisors</h4>
              <p class="benefit-description">
                Focused on integrating cutting-edge agricultural 
                    technologies like precision farming, data analytics, and mobile advisory 
                    platforms, enabling Makoine Foods and Farms Ltd to maintain a competitive edge 
                    in the industry.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>    <!-- /Team Section -->
        <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>VISION </h2>
        <p style="font-size: 24px;">To be Ghana's leading producer of high-quality grains, driving agricultural innovation and 
          economic growth by empowering smallholder farmers with advanced techniques, fair 
          resource access, and sustainable market opportunities.
        </p>
      </div>

      <div class="container section-title" data-aos="fade-up">
        <h2>MISSION </h2>
        <p style="font-size: 24px;">To produce high-quality grains while enhancing food security and empowering 
          smallholder farmers through modern agricultural practices, capacity-building, and 
          reliable market access. By tackling resource constraints and market challenges, we 
          foster a sustainable and thriving agricultural ecosystem.          
        </p>
      </div>

     
      <!-- End Section Title -->

      <section class="why-choose-us section" id="why-choose-us">
        <div class="container section-title" data-aos="fade-up">
          <h2>CORE VALUES </h2>
        </div>
        <!-- End Section Title -->
        <div class="content">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 mb-4">
                <div class="benefit-card">
                  <h3 class="number">01</h3>
                  <h4 class="benefit-title">Farmer-Centric Approach</h4>
                  <p class="benefit-description">
                    Placing farmers at the center of our operations 
                    by designing tailored programs that address their specific needs. This includes 
                    fostering trust through transparent communication, providing equitable resource 
                    access, and promoting collaboration to ensure their long-term success.
                  </p>
                </div>
              </div>
              <div class="col-lg-4 mb-4">
                <div class="benefit-card">
                  <h3 class="number">02</h3>
                  <h4 class="benefit-title">Innovation</h4>
                  <p class="benefit-description">
                    Continuously adopting and integrating cutting-edge technologies 
                    such as precision farming, crop monitoring systems, and data analytics to 
                    enhance agricultural productivity and efficiency. Innovation extends to our 
                    business processes, ensuring scalability and adaptability in a dynamic sector.
                  </p>
                </div>
              </div>
              <div class="col-lg-4 mb-4">
                <div class="benefit-card">
                  <h3 class="number">03</h3>
                  <h4 class="benefit-title">Sustainability</h4>
                  <p class="benefit-description">
                    Committed to sustainable agriculture by advocating for 
                    practices that minimize environmental harm. This includes the use of organic 
                    inputs, water conservation methods, and crop diversification to maintain 
                    ecological balance and resilience against climate change.
                  </p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 mb-4">
                <div class="benefit-card">
                  <h3 class="number">04</h3>
                  <h4 class="benefit-title">Quality Excellence</h4>
                  <p class="benefit-description">
                    Maintaining stringent quality standards in every aspect of 
                    our operations—from seed selection to post-harvest processing. By leveraging 
                    advanced techniques and global best practices, we ensure that our products 
                    meet both local and international market expectations.
                  </p>
                </div>
              </div>
              <div class="col-lg-4 mb-4">
                <div class="benefit-card">
                  <h3 class="number">05</h3>
                  <h4 class="benefit-title">Community Engagement</h4>
                  <p class="benefit-description">
                    Actively working to uplift rural communities by 
                    providing educational workshops, creating employment opportunities, and 
                    supporting infrastructure development. We believe in inclusive growth that 
                    empowers women, youth, and marginalized groups to participate meaningfully in 
                    agriculture.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
    <!-- /Services Section -->


    <section id="services" class="services section">
      <div class="content">
          <div class="container">
              <div class="row g-0">
                  <!-- Image Columns -->
                  <div class="col-lg-3 col-md-6">
                      <div class="service-item-content" onclick="openZoomModal(this)">
                          <img src="assets/img/image44.jpg" alt="Image" class="img-fluid">
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                      <div class="service-item-content" onclick="openZoomModal(this)">
                          <img src="assets/img/image31.jpg" alt="Image" class="img-fluid">
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                      <div class="service-item-content" onclick="openZoomModal(this)">
                          <img src="assets/img/image22.jpg" alt="Image" class="img-fluid">
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                      <div class="service-item-content" onclick="openZoomModal(this)">
                          <img src="assets/img/image39.jpg" alt="Image" class="img-fluid">
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                      <div class="service-item-content" onclick="openZoomModal(this)">
                          <img src="assets/img/image32.jpg" alt="Image" class="img-fluid">
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                      <div class="service-item-content" onclick="openZoomModal(this)">
                          <img src="assets/img/image16.jpg" alt="Image" class="img-fluid">
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                      <div class="service-item-content" onclick="openZoomModal(this)">
                          <img src="assets/img/image27.jpg" alt="Image" class="img-fluid">
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                      <div class="service-item-content" onclick="openZoomModal(this)">
                          <img src="assets/img/image52.jpg" alt="Image" class="img-fluid">
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="service-item-content" onclick="openZoomModal(this)">
                        <img src="assets/img/image5.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="service-item-content" onclick="openZoomModal(this)">
                      <img src="assets/img/image20.jpg" alt="Image" class="img-fluid big" style="height: 190px;">
                  </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="service-item-content" onclick="openZoomModal(this)">
                    <img src="assets/img/image21.jpg" alt="Image" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="service-item-content" onclick="openZoomModal(this)">
                  <img src="assets/img/image12.jpg" alt="Image" class="img-fluid">
              </div>
          </div>
              </div>
          </div>
      </div>

      <!-- Zoom Modal -->
      <div id="zoomModal" class="zoom-modal">
          <span class="zoom-close" onclick="closeZoomModal()">&times;</span>
          <img class="zoom-modal-content" id="zoomedImage">
      </div>
  </section>

  <script>
      function openZoomModal(element) {
          // Get the modal and the image
          const modal = document.getElementById('zoomModal');
          const modalImg = document.getElementById('zoomedImage');
          
          // Set the modal image source to the clicked image
          modalImg.src = element.querySelector('img').src;
          
          // Display the modal
          modal.style.display = 'flex';
      }

      function closeZoomModal() {
          // Hide the modal
          document.getElementById('zoomModal').style.display = 'none';
      }

      // Close the modal if user clicks outside the image
      window.onclick = function(event) {
          const modal = document.getElementById('zoomModal');
          if (event.target === modal) {
              modal.style.display = 'none';
          }
      }
  </script>
    <!-- End of Picture Section Title -->

     <!-- Services Section -->
     <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>EXECUTIVE SUMMARY</h2>
        <p style="font-size: 24px;">
          Makoine Foods and Farms Ltd is a Ghanaian agribusiness dedicated to revolutionizing 
          the grains industry by empowering smallholder farmers and advancing food security. 
          Through innovative agricultural practices, tailored capacity-building programs, and a 
          steadfast commitment to sustainable development, the company strives to enhance 
          livelihoods and foster economic growth. By adhering to stringent regulatory standards 
          and cultivating strong partnerships with both local and global stakeholders, Makoine 
          Foods and Farms Ltd is uniquely positioned to expand its footprint and drive impactful 
          change across Africa and the international agribusiness sector.
        </p>
      </div>
      <!-- End Section Title -->
    </section><!-- /Services Section -->

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
@extends('layouts.app')

@section('content')

@include('includes.header')

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
    </section><!-- /Services Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="content">
        <div class="container">
          <div class="row">
              <div class="col-lg-6 mb-4 mb-lg-0">
                <video width="620" height="240" controls style="margin-left: -80px;">
                  <source src="assets/img/video11.mp4" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
            </div>
            
            <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
              <h3 class="content-subtitle text-white opacity-50">Why Choose Us</h3>
              <h2 class="content-title mb-4">
                More than <strong>50 year experience</strong> in agriculture
                industry
              </h2>
              <div class="row my-5">
                <div class="col-lg-12 d-flex align-items-start mb-4">
                  <i class="bi bi-cloud-rain me-4 display-6"></i>
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
                  <i class="bi bi-heart me-4 display-6"></i>
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
        {{-- <p>Necessitatibus eius consequatur</p> --}}
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
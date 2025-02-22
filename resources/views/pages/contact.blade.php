@extends('layouts.app')

@section('content')

@include('includes.header')

<style>

.text-area {
  height: 250px;
}

</style>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/image31.jpg);">
      <div class="container position-relative">
        <h1>Contact</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">Contact</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="mb-5">
        <iframe style="width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen=""></iframe>
      </div><!-- End Google Maps -->

      <div class="container" data-aos="fade">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info">
              <h3>Get in touch</h3>
              <p>By fostering a resilient agricultural ecosystem built on cutting-edge technologies, eco—friendly practices, and inclusive growth, 
                we are paving the way for a prosperous and 
                sustainable future. We invite you to be part of this journey—shaping the future of 
                agribusiness together.
              </p>

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p> New Achimota, Accra <br>
                  P.O. Box 307, Abeka Lapaz-Accra</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <a href="mailto:makoinefarmsltd@gmail.com"><p>makoinefarmsltd@gmail.com</p></a>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p> +233 55 340 0073 <br> +233 24 475 8130 <br> +233 24 352 2962 </p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-instagram flex-shrink-0"></i>
                <div>
                  <h4>Follow Us:</h4>
                  <a href="">@makoine_farms</a>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-facebook flex-shrink-0"></i>
                <div>
                  <h4>Follow Us:</h4>
                  <a href="">@makoine_farms</a>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-8">
            <form id="contactForm">
              <style>

                /* Spinner Animation */
                .spinner {
                    display: inline-block;
                    width: 20px;
                    height: 20px;
                    border: 3px solid rgba(255, 255, 255, 0.3);
                    border-top: 3px solid #fff;
                    border-radius: 50%;
                    animation: spin 1s linear infinite;
                    margin-right: 8px;
                    vertical-align: middle;
                }
                
                @keyframes spin {
                    0% { transform: rotate(0deg); }
                    100% { transform: rotate(360deg); }
                }
                
                </style>
    
                @csrf
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control text-area" name="message" id="message" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading" style="display: none;">
                      <span class="spinner"></span> Sending...
                  </div>
                  <div class="error-message text-danger" style="display: none;"></div>
                  <div class="sent-message text-success" style="display: none;">Your message has been sent. Thank you!</div>
                </div>
              
                <div class="text-center">
                    <button type="submit" id="sendMessageBtn" class="btn" style="background-color: #116530;color:#fff;">Send Message</button>
                </div>
            </form>
        </div>
        
        <!-- ✅ AJAX Script -->
        <script>
          document.addEventListener("DOMContentLoaded", function() {
              document.getElementById("contactForm").addEventListener("submit", function(event) {
                  event.preventDefault(); // Prevent page reload
              
                  let formData = new FormData(this);
                  let sendMessageBtn = document.getElementById("sendMessageBtn");
                  let loading = document.querySelector(".loading");
                  let errorMessage = document.querySelector(".error-message");
                  let sentMessage = document.querySelector(".sent-message");
              
                  sendMessageBtn.disabled = true;
                  loading.style.display = "block";
                  errorMessage.style.display = "none";
                  sentMessage.style.display = "none";
              
                  fetch("{{ url('/contact') }}", {
                      method: "POST",
                      body: formData,
                      headers: {
                          "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
                      }
                  })

                  .then(response => response.json())
                  .then(data => {
                      sendMessageBtn.disabled = false;
                      loading.style.display = "none";
                      if (data.success) {
                          sentMessage.style.display = "block";
                          document.getElementById("contactForm").reset(); // Reset form
                      } else {
                          errorMessage.style.display = "block";
                          errorMessage.innerHTML = data.message;
                      }
                  })
                  .catch(error => {
                      sendMessageBtn.disabled = false;
                      loading.style.display = "none";
                      errorMessage.style.display = "block";
                      errorMessage.innerHTML = "Something went wrong. Please try again.";
                  });
              });
          });
        </script>
        
        </div>

      </div>

    </section>
    <!-- /Contact Section -->

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
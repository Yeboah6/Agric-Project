@extends('layouts.app')

@section('content')

@include('includes.header')

    <!-- CSS (for rotating loader) -->
    <style>
      /* Rotating spinner */
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
      .ser-vid {
        width: 620px; 
        height:240px;
      }

      @media screen and (max-width: 700px) {
      .ser-vid {
        width: 310px;
        height: 240px;
        margin-left: -15px;
        }
      }

      .container .test {
        font-size: 5rem;
      }

      @media (max-width: 550px) {
        .container .test {
          font-size: 3rem;
        }
      }
      
    </style>


  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(../assets/img/image31.jpg);">
      <div class="container position-relative">
        <h1 class="test">BLOG DETAILS</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">Blog Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <div class="container">
      
      <div class="row">

        <div class="col-lg-8">

          <!-- Blog Details Section -->
          <section id="blog-details" class="blog-details section">
            <div class="container">
              <button onclick="history.back()" style="background-color: #116530;color: #fff" class="btn">Back</button>
              <br>
              <br>
              <article class="article">

                <div class="post-img">
                  <img src="{{ asset('../uploads/blog-images/'.$blogDetails -> image) }}" alt="Applicant_image" style="width: 100%">
                </div>

                <h2 class="title">{{ $blogDetails -> title}}</h2>

                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> {{ $blogDetails -> author}}</li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time datetime="2020-01-01">{{ $blogDetails -> created_at -> format('F d, Y')}}</time></li>
                    <br>
                    <br>
                  </ul>
                </div>
                <!-- End meta top -->

                {{-- <div class="content"> --}}
                  <p>
                    {{ $blogDetails -> message}}
                  </p>
                  <br>
                  <br>
                  @if($blogDetails -> video)
                    <blockquote>
                      <video class="ser-vid" controls>
                          <source src="{{ asset('uploads/blog-videos/' . $blogDetails -> video) }}" type="video/mp4">
                          Your browser does not support the video tag.
                      </video>
                    </blockquote>
                  @endif
                {{-- </div> --}}
                <!-- End post content -->

              </article>

            </div>
          </section>
          <!-- /Blog Details Section -->

          <!-- Blog Comments Section -->
          <section id="commentList" class="blog-comments section">

            <div class="container">

              <h4 class="comments-count"> {{ $commentcount }} Comments</h4>

              @if ($comments -> count() > 0)
                @foreach ($comments as $comment)
                  <div id="comment-1" class="comment">
                <div class="d-flex">
                  <div>
                    <h5><a href="">{{ $comment -> name}}</a></h5>
                    <time datetime="2020-01-01">{{ $comment -> created_at -> format('d M Y, h:i A')}}</time>
                    <p>
                      {{$comment -> comment}}
                    </p>
                  </div>
                </div>
              </div>
              @endforeach
                @else
                  <p>No comments yet. Be the first to comment!</p>
              @endif

              </div>
              <!-- End comment #2-->

            </div>

          </section>
          <!-- /Blog Comments Section -->

          <!-- Comment Form Section -->
          <section id="comment-form" class="comment-form section" style="width: 900px;">
            <div class="container">
                <form id="commentForm">
                    <h4>Post Comment</h4>
                    <p>Your email address will not be published. Required fields are marked *</p>
        
                    <input type="text" class="form-control" hidden name="post_id" value="{{ $blogDetails->id }}">
                    <br>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input name="name" type="text" class="form-control" placeholder="Your Name*" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="email" type="email" class="form-control" placeholder="Your Email*" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-group">
                            <textarea name="comment" class="form-control" placeholder="Your Comment*" required></textarea>
                        </div>
                    </div>
        
                    <!-- Status Messages -->
                    <div class="my-3">
                      <div class="error-message text-danger" style="display: none;"></div>
                      <div class="sent-message text-success" style="display: none;text-align: center;">Your comment has been posted!</div>
                    </div>
                  
                  <div class="text-center">
                      <button type="submit" id="commentBtn" class="btn btn-primary">
                          Post Comment
                      </button>
                  </div>
                </form>
            </div>
        </section>
        
        <!-- JavaScript -->
        <script>
          document.addEventListener("DOMContentLoaded", function() {
              document.getElementById("commentForm").addEventListener("submit", function(event) {
                  event.preventDefault(); // Prevent page reload
          
                  let formData = new FormData(this);
                  let sendMessageBtn = document.getElementById("commentBtn");
                  let loadingImg = `<img class="spinner" src="{{ asset('../assets/img/icons8-spinner.gif') }}" alt="Loading..." width="25">`;
          
                  let originalBtnText = sendMessageBtn.innerHTML; // Store original text
                  sendMessageBtn.innerHTML = loadingImg; // Replace text with spinner
                  sendMessageBtn.disabled = true; // Disable button
          
                  fetch("{{ url('/comment') }}", {
                      method: "POST",
                      body: formData,
                      headers: {
                          "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
                      }
                  })
                  .then(response => response.json())
                  .then(data => {
                      sendMessageBtn.innerHTML = originalBtnText; // Restore button text
                      sendMessageBtn.disabled = false;
                      if (data.success) {
                          document.querySelector(".sent-message").style.display = "block";
                          document.getElementById("commentForm").reset(); // Reset form
                      } else {
                          let errorMessage = document.querySelector(".error-message");
                          errorMessage.style.display = "block";
                          errorMessage.innerHTML = data.message;
                      }
                  })
                  .catch(error => {
                      sendMessageBtn.innerHTML = originalBtnText; // Restore button text
                      sendMessageBtn.disabled = false;
                      let errorMessage = document.querySelector(".error-message");
                      errorMessage.style.display = "block";
                      errorMessage.innerHTML = "Something went wrong. Please try again.";
                  });
              });
          });
          </script>
          
        
      <!-- CSS (for rotating loader) -->
        <style>
            /* Rotating spinner */
            .spinner {
              width: 25px;
              height: 25px;
              filter: red; /* Change color */
            }

        </style>
        
          <!-- /Comment Form Section -->

        </div>

        <div class="col-lg-4 sidebar">

          <div class="widgets-container">
            <!-- Recent Posts Widget 2 -->
            <div class="recent-posts-widget-2 widget-item">

              <h3 class="widget-title">Recent Posts</h3>

              @foreach ($recentPost as $recent)
                <div class="post-item">
                <h4><a href="{{ url ('/blog-details/'.$recent -> id)}}">{{ $recent -> title}}</a></h4>
                <time datetime="2020-01-01">{{ $recent -> created_at -> format('F Y')}}</time>
              </div>
              @endforeach

            </div>
            <!--/Recent Posts Widget 2 -->

          </div>

        </div>

      </div>
    </div>

  </main>

      @include('includes.blog-letter')

  @include('includes.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

@endsection
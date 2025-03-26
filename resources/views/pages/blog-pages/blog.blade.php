@extends('layouts.app')

@section('content')

@include('includes.header')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/image31.jpg);">
      <div class="container position-relative">
        <h1 style="font-size: 5rem;">BLOGS</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">Blogs</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Blog Posts 2 Section -->
    <section id="blog-posts-2" class="blog-posts-2 section">

      <div class="container">
        <div class="row gy-4">

          @foreach ($blogs as $blog)
                <div class="col-lg-4">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="{{ asset('../uploads/blog-images/'.$blog -> image) }}" class="img-fluid" alt="Applicant_image" style="width: 100%">
              </div>

              <div class="meta d-flex align-items-end">
              <span class="post-date">
                <span>{{ $blog->created_at->format('d') }}</span> {{ $blog->created_at->format('F') }}
              </span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">{{ $blog -> author}}</span>
                </div>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">{{ $blog -> title }}</h3>
                <a href="{{ url ('/blog-details/'.$blog -> id)}}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </article>
          </div>

          @endforeach

      
          <!-- End post list item -->

        </div>
      </div>

    </section><!-- /Blog Posts 2 Section -->

    <!-- Blog Pagination Section -->
    <section id="blog-pagination" class="blog-pagination section">

      <!-- Blog Pagination Section -->
      {{-- <div class="d-flex justify-content-center mt-4">
        {{ $blogs->links() }}
      </div> --}}

    </section>
    <!-- /Blog Pagination Section -->

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
@extends('layouts.main')
@section('main')

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Website (16 Posts)</h2>
            <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>

            <a class="cta-btn" href="/contact">Available for hire</a>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">
        <div class="row gy-4 justify-content-center">
          @foreach ($posts as $post )
            <div class="container">
              <div class="card bg-dark mt-1">
                <div class="row g-0">
                  <div class="col-md-3 mx-2">
                    <a href="#"><img src="assets/img/gallery/gallery-1.jpg" class="img-fluid rounded-start m-2" alt="..."></a>
                  </div>
                  <div class="col-md-7">
                    <div class="card-body">
                      <h5 class="card-title">{{ $post->judul }}</h5>
                      <p class="card-text">{{ $post->body }}</small></p>
                      <a href="/gallery">{{ $post->category }}</a>
                      <p>Update: {{ $post->created_at }}</p>
                      <a href="/gallery-single" class="btn btn-sm btn-success"><i>Reed more..</i></a>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="text-success">
            </div>
          @endforeach
        </div>
      </div>
    </section><!-- End Gallery Section -->
    
    
  </main><!-- End #main -->
@endsection
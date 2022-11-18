@extends('layouts.main')
@section('main')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>I<b class="text-success">'</b>m <span>Aswawal</span> a Professional Web Devlopers from Indonesia</h2>
          <p>Mari menciptakan Indonesia lebih maju dan berkembang dengan kemudahan kemudahan yang saya kembangkan.</p>
          <a href="/contact" class="btn-get-started">Available for hire</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main" data-aos="fade" data-aos-delay="1500">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-10">
        <div class="card mb-3">
          <img src="assets/img/gallery/gallery-1.jpg" class="card-img-top" alt="..." height="400">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section id="gallery" class="gallery">
    <div class="container-fluid">
      <div class="row gy-3 justify-content-center">
        @foreach ($posts as $post )
          <div class="col-xl-3 col-lg-4 col-md-4">
            <div class="card bg-dark h-100">
              <img src="assets/img/gallery/gallery-1.jpg" class="card-img-top" alt="...">
              <div class="card-body bg-dark">
                <h5 class="card-title">{{ $post->judul }}</h5>
                <p>upload {{ $post->created_at }}</p>
                <p class="card-text">{{ $post->body }}</p>
                <a href="#" class="btn btn-sm btn-success"><i>Reed more..</i></a>
              </div>
            </div>
          </div>
        @endforeach
      </div><!-- End Gallery Item -->
    </div>
  </section>

  </main><!-- End #main -->



  @endsection
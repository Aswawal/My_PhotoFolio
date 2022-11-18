@extends('layouts.main')
@section('main')

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>About</h2>
            <p>Merancang, mendesain, mengembangkan dan memodifikasi situs web. Menganalisa kebutuhan pengguna untuk penerapan konten, grafis, fitur kerja, dan kapasitas pada sebuah situs Web internet/intranet/extranet.</p>

            <a class="cta-btn" href="/contact">Available for hire</a>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 content">
            <h2>Full Stack Devlopers from Indonesia</h2>
            <div class="row">
              <div class="col-lg-4">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>02 Januari 1997</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+62 822 5522 4620</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Nunukan, KalTara</span></li>
                </ul>
              </div>
              <div class="col-lg-8">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>25 year</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Skill:</strong> <span>HTML - CSS - JS - PHP (LARAVEL)</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>aswawal97@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span><a href="/contact" class="fw-bold">Available</a></span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">
              lahir di Bone 02 Januari 1997, saat ini saya tinggal di Kabupaten Nunukan, Kalimantan Utara dan pernah menjadi siswa di SMA Negeri 01 Nunukan Selatan jurusan IPA. Lulus pada tahun 2016 di umur {{ 2016-1997 }} tahun.
              <br>
              Sekarang saya bekerja di salah satu perusahaan yang bergerak di bidang pertambangan batu bara di kabupaten Nunukan dengan posisi Staff Admin produksi ( MCC ) atau yang biasa di kenal dengan "Main Control Center". saya bertanggung jawab untuk perhitungan produksi OB ( bcm ) maupun COAL ( batu bara ) dalam perusahaan dan mengontrol performens ( PA & UA ) unit yang beroperasi maupun yang tidak beroperasi/Berackdown.
              <br>
              Dalam pekerjaan saya selalu berhadapan dengan layar monitor dan berkomunikasi lelaui Handy talkie ( HT ), Hal itu menguntungkan saya belajar banyak tentang komputer dan lama kelamaan senang dengan pemograman
              <br>
              Belajar Outodidak tentang Pemograman hampir dua tahun sampai di tahun 2022 dengan umur {{2022-1997}} saya memutuskan lanjut kuliah di <b>Universitas Siber Asia</b> untuk menambah ilmu di jurusan Teknik Informatika ( TI ) sekalian berharap mendapatkan gelar <b>Aswawal Skom</b> :) walaupun itu bukan tujuan utama saya.
            </p>
            <p class="m-1">
              Sekarang saya sedang membuat suatu Project besar untuk memudahkan banyak orang, sangat sadar Project yang sedang saya kembangkan sangat sulit untuk di buat seorang diri namun saya akan tetap melakukanya walaupun Project ini bakalan gagal hahaha
              <br>1% keberhasilan akan kubuat 99% kegagalan tertutupi, yo bisa yo 
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>What they are saying</p>
        </div>
        
        <div class="slides-3 swiper">
          <div class="swiper-wrapper">

            @foreach ($users as $user )
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>{{ $user->comment }}</p>
                  <div class="profile mt-auto">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                    <h3>{{ $user->name }}</h3>
                    <h4>{{ $user->email }}</h4>
                  </div>
                </div>
              </div><!-- End testimonial item -->
            @endforeach

          </div>
        <div class="swiper-pagination"></div>
      </div>

    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

@endsection
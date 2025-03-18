@extends('layouts.welcome')

@section('content')
        <!-- Hero Section -->
        <section id="hero" class="hero section">

          <div class="container">
              <div class="row gy-4">
                  <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
                      data-aos="fade-up">
                      <h1>Inspektorat Masa kini</h1>
                      <p>SIPIKAT (Sistem Informasi Pengawasan Inspektorat) Menggabungkan teknologi dan kreativitas
                          untuk layanan yang lebih efektif dan responsif.</p>
                      <div class="d-flex">
                          <a href="{{ route('login') }}" class="btn-get-started">Login</a>
                      </div>
                  </div>


                  <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
                      <img src="{{ asset('enno/assets/img/5.png') }}" class="img-fluid animated fadeInUp"
                          alt="Welcome Image">

                  </div>
              </div>
          </div>

      </section><!-- /Hero Section -->

      <div class="container">


      </div>

      {{-- </section><!-- /Featured Services Section --> --}}

      <!-- About Section -->
      <section id="about" class="about section">

          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
              <span>Tentang Kita<br></span>
              <h2>Tentang Kita</h2>
              <p>
                  Sipikat atau <b>Sistem Informasi Pengawasan Inspektorat</b> adalah lembaga pengawas internal
                  pemerintahan yang bertanggung jawab dalam memastikan akuntabilitas, transparansi, dan efektivitas
                  penyelenggaraan pemerintahan daerah. Kami berkomitmen untuk menjalankan pengawasan yang independen,
                  objektif, dan profesional guna mendukung tata kelola pemerintahan yang bersih dan berintegritas.
              </p>
          </div><!-- End Section Title -->

          <div class="container">

              <div class="row gy-4">
                  <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                      {{-- <img src="assets/img/about.png" class="img-fluid" alt=""> --}}
                      {{-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a> --}}
                  </div>
                  <div class="col-xl-12 content" data-aos="fade-up" data-aos-delay="200">
                      <h3>Mewujudkan pengawasan yang transparan dan akuntabel untuk pemerintahan yang lebih baik.</h3>
                      <p class="fst-italic">
                          Mengapa Kami Ada?
                      </p>
                      <ul>
                          <li><i class="bi bi-check2-all"></i> <span> <b>Pengawasan Berkualitas</b> – Memastikan
                                  kebijakan dan program daerah berjalan sesuai peraturan yang berlaku.</span></li>
                          <li><i class="bi bi-check2-all"></i> <span> <b>Transparansi & Akuntabilitas</b> – Mengawal
                                  penggunaan anggaran agar dikelola secara efektif dan efisien.</span></li>
                          <li><i class="bi bi-check2-all"></i> <span> <b>Peningkatan Kinerja</b> – Memberikan
                                  rekomendasi strategis untuk perbaikan sistem pemerintahan daerah.</span></li>
                      </ul>
                      <p>
                          Dengan tim yang berpengalaman dan berintegritas, Inspektorat Daerah siap membangun tata
                          kelola pemerintahan yang lebih baik demi kemajuan bersama! 💡✨
                      </p>
                  </div>
              </div>

          </div>

        </section>

      <!-- Contact Section -->
      <section id="contact" class="contact section">

          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
              <span>Kontak</span>
              <h2>Kontak</h2>
              <p>Hubungi kami untuk informasi lebih lanjut atau jika Anda memiliki pertanyaan terkait layanan kami.
              </p>
          </div><!-- End Section Title -->

          <div class="container" data-aos="fade-up" data-aos-delay="100">

              <div class="row gy-4">

                  <div class="col-xl-12">

                      <div class="info-wrap">
                          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                              <i class="bi bi-geo-alt flex-shrink-0"></i>
                              <div>
                                  <h3>Alamat</h3>
                                  <p>Kantor Pemerintahan Terpadu, Jl. Proklamasi No.77 Lantai 4, Silenggang, Pasar
                                      Batang, Brebes, Brebes Regency, Central Java 52212</p>
                              </div>
                          </div><!-- End Info Item -->

                          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                              <i class="bi bi-telephone flex-shrink-0"></i>
                              <div>
                                  <h3>Telephon</h3>
                                  <p>08123456789</p>
                              </div>
                          </div><!-- End Info Item -->

                          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                              <i class="bi bi-envelope flex-shrink-0"></i>
                              <div>
                                  <h3>Email Us</h3>
                                  <p>info@example.com</p>
                              </div>
                          </div><!-- End Info Item -->

                          <iframe
                              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d990.3181499522487!2d109.0496657!3d-6.8578953!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fba86d49961d3%3A0x678eb6f9206495a6!2sInspektorat%20Daerah%20Kabupaten%20Brebes!5e0!3m2!1sid!2sid!4v1741439330729!5m2!1sid!2sid"
                              width="1050" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                              referrerpolicy="no-referrer-when-downgrade"></iframe>

                      </div>
                  </div>

              </div><!-- End Contact Form -->

          </div>

          </div>

      </section><!-- /Contact Section -->
@endsection
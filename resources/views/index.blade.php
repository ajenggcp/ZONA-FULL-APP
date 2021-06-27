<!--
  
RUN

php -S localhost:8000 -t public 

-->


@extends('layouts.headerindex')
@section('title', 'Home')
@section('content')
@stack('css')

<!-- ======= Hero Section ======= -->
<div id="content">
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Let your pictures useful.</h1>
          <h2>
            Pamerkan karya terbaikmu dan dapatkan penghargaan dari orang
            banyak!
          </h2>
          <div class="d-lg-flex">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=Zo1nt_j0NBo" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true">
              Watch Video <i class="icofont-play-alt-2"></i></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/camera.png" class="img-fluid animated" alt="" />
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Selamat datang di website kami yang menyediakan berbagai macam
              gambar yang indah, elegan, dan pastinya berkualitas dari
              berbagai fotografer handal / kontributor kami. Website ini
              dibuat untuk
            </p>
            <ul>
              <li>
                <i class="ri-check-double-line"></i> Memberikan kemudahan
                kepada anda dalam mendapatkan gambar yang sesuai dengan
                kebutuhan anda.
              </li>
              <li>
                <i class="ri-check-double-line"></i> Memberikan referensi
                dalam belajar fotografi
              </li>
              <li>
                <i class="ri-check-double-line"></i> Memberikan ide dalam
                belajar fotografi
              </li>
              <li>
                <i class="ri-check-double-line"></i> Menyelesaikan masalah
                anda dalam permasalahan copyright dari penggunaan sebuah
                gambar
              </li>
              <li>
                <i class="ri-check-double-line"></i> Memberikan sarana kepada
                para fotografer untuk dapat membagikan hasil terbaiknya
              </li>
              <li>
                <i class="ri-check-double-line"></i> Menyelesaikan UTS
                Pemrograman Website
              </li>
              <li>
                <i class="ri-check-double-line"></i> Dan lain sebagainya.
              </li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              ZONA adalah singkatan dari Zamah Octa Navira Ajeng yang tidak
              lain merupakan tim pembuat website ini. Zona juga berarti zona/
              area yang dimana memuat banyak gambar dengan berbagai macam tema
              dari kita yang telah disediakan oleh kami.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1">
            <div class="content">
              <h3>Mengapa memilih <strong>ZONA</strong>?</h3>
              <p>Kami memiliki beberapa kelebihan yaitu :</p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-toggle="collapse" class="collapse" href="#accordion-list-1"><span>01</span> Memiliki jaminan copyright/hak cipta
                    untuk semua kontributor<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                    <p>
                      Setiap kontributor yang mengirimkan gambarnya kepada
                      kami akan mendapatkan hak copyright untuk menghindari
                      adanya pencurian karya kecuali kontributor tersebut
                      ingin memberikan gambar tersebut tanpa copyright
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#accordion-list-2" class="collapsed"><span>02</span> Terdapat banyak pilihan format file
                    <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                    <p>
                      Kami memiliki pilihan format file yang beragam yaitu
                      jpg, png, pdf, psd, TIFF, SVG, WebP, BMP, Raw, Exif,
                      ICO, dan HEIF.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#accordion-list-3" class="collapsed"><span>03</span> Mudah diakses oleh siapa saja
                    <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                    <p>
                      ZONA dapat diakses dimanapun dan kapanpun serta dapat
                      digunakan oleh siapa saja yang membutuhkan referensi
                      atau sumber foto yang berkualitas.
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style="background-image: url('assets/img/why-us.png')" data-aos="zoom-in" data-aos-delay="150">
            &nbsp;
          </div>
        </div>
      </div>
    </section>

    <!-- End Why Us Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>Ayo Berlangganan!</h3>
            <p>Dapatkan banyak penawaran terbaik dari kami sekarang juga!</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Berlangganan</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>
            Ganti suasanamu menjadi penuh warna dengan gambar-gambar pada gallery kami!
          </p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-makanan">Makanan</li>
          <li data-filter=".filter-ff">Flora & Fauna</li>
          <li data-filter=".filter-otomotif">Otomotif</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-4 col-md-6 portfolio-item filter-makanan">
            <div class="portfolio-img">
              <img src="assets/img/portfolio/makanan 1.jpeg" class="img-fluid" alt="" />
            </div>
            <div class="portfolio-info">
              <h4>Lunch</h4>
              <p>Makan Pagi adalah yang terbaik!</p>
              <a href="assets/img/portfolio/makanan 1.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-makanan">
            <div class="portfolio-img">
              <img src="assets/img/portfolio/makanan 3.jpeg" class="img-fluid" alt="" />
            </div>
            <div class="portfolio-info">
              <h4>Tamarine</h4>
              <p>Kecut tetapi menyegarkan</p>
              <a href="assets/img/portfolio/makanan 3.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-makanan">
            <div class="portfolio-img">
              <img src="assets/img/portfolio/makanan 5.jpeg" class="img-fluid" alt="" />
            </div>
            <div class="portfolio-info">
              <h4>Breakfast</h4>
              <p>Stay Health guys!</p>
              <a href="assets/img/portfolio/makanan 5.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-ff">
            <div class="portfolio-img">
              <img src="assets/img/portfolio/flora & fauna 1.jpeg" class="img-fluid" alt="" />
            </div>
            <div class="portfolio-info">
              <h4>Lavender View</h4>
              <p>Bunga dengan warna ungunya yang menawan</p>
              <a href="assets/img/portfolio/flora & fauna 1.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-ff">
            <div class="portfolio-img">
              <img src="assets/img/portfolio/flora & fauna 3.jpeg" class="img-fluid" alt="" />
            </div>
            <div class="portfolio-info">
              <h4>Kupu-Kupu</h4>
              <p>Indahnya Kupu-Kupu</p>
              <a href="assets/img/portfolio/flora & fauna 3.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-ff">
            <div class="portfolio-img"><img src="assets/img/portfolio/flora & fauna 4.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Bunga & Burung</h4>
              <p>Burung lapar akan memakan nektar bunga</p>
              <a href="assets/img/portfolio/flora & fauna 4.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>

          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-otomotif">
            <div class="portfolio-img"><img src="assets/img/portfolio/otomotif 1.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Vibes</h4>
              <p>Jangan lupa refresh otak!</p>
              <a href="assets/img/portfolio/otomotif 1.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-otomotif">
            <div class="portfolio-img">
              <img src="assets/img/portfolio/otomotif 2.jpeg" class="img-fluid" alt="" />
            </div>
            <div class="portfolio-info">
              <h4>Ferari</h4>
              <p>Insyaallah dapat!</p>
              <a href="assets/img/portfolio/otomotif 2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-otomotif">
            <div class="portfolio-img">
              <img src="assets/img/portfolio/otomotif 3.jpeg" class="img-fluid" alt="" />
            </div>
            <div class="portfolio-info">
              <h4>Motor</h4>
              <p>Riding kuy!</p>
              <a href="assets/img/portfolio/otomotif 3.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Team</h2>
          <p>
            Hai! kami merupakan tim pembuat website 'ZONA', website ini
            dibuat oleh kami untuk menyelesaikan UTS Pemrograman Web. Banyak
            hambatan dan cobaan dalam pembuatan website ini, tetapi kami yakin
            website ini akan menjadi yang terbaik bagi kami dan kalian.
          </p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic">
                <img src="assets/img/team/pak zamah.jpg" class="img-fluid" alt="" />
              </div>
              <div class="member-info">
                <h4>Zamah Sari, ST., MT</h4>
                <span>Chief Executive Officer</span>
                <p>Dosen Universitas Muhammadiyah Malang</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic">
                <img src="assets/img/team/navira.jpg" class="img-fluid" alt="" />
              </div>
              <div class="member-info">
                <h4>Navira Rahma Salsabila</h4>
                <span>Product Manager</span>
                <p>Mahasiswi Universitas Muhammadiyah Malang</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic">
                <img src="assets/img/team/ajeng.jpg" class="img-fluid" alt="" />
              </div>
              <div class="member-info">
                <h4>Ajeng Cahyaning Prameswari</h4>
                <span>CTO</span>
                <p>Mahasiswi Universitas Muhammadiyah Malang</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic">
                <img src="assets/img/team/octa.jpg" class="img-fluid" alt="" />
              </div>
              <div class="member-info">
                <h4>Dyah Rizky Octavia</h4>
                <span>Accountant</span>
                <p>Mahasiswi Universitas Muhammadiyah Malang</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Pricing</h2>
          <p>
            Registrasi dan berlangganan untuk mendapatkan penawaran terbaik
            kami!
          </p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Free Plan</h3>
              <h4><sup>Rp</sup>0<span>per bulan</span></h4>
              <ul>
                <li>
                  <i class="bx bx-check"></i> Akses gambar dengan kategori
                  yang terbatas
                </li>
                <li>
                  <i class="bx bx-check"></i> Mengunduh 2 gambar bebas
                  copyright perhari
                </li>
                <li>
                  <i class="bx bx-check"></i> Mengunduh gambar dengan format
                  JPG, JPEG dan PNG
                </li>
                <li class="na">
                  <i class="bx bx-x"></i>
                  <span>Mengirim gambar dan mendapatkan hak copyright</span>
                </li>
                <li class="na">
                  <i class="bx bx-x"></i>
                  <span>Mengakses lebih banyak gambar ekslusif</span>
                </li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Business Plan</h3>
              <h4><sup>Rp</sup>79.000<span>per bulan</span></h4>
              <ul>
                <li>
                  <i class="bx bx-check"></i> Akses gambar dengan kategori
                  yang lebih banyak
                </li>
                <li>
                  <i class="bx bx-check"></i> Mengunduh 50 gambar bebas
                  copyright perhari
                </li>
                <li>
                  <i class="bx bx-check"></i> Mengirim 20 gambar perhari dan
                  mendapatkan hak copyright
                </li>
                <li><i class="bx bx-check"></i> Mengakses lebih</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Developer Plan</h3>
              <h4><sup>Rp</sup>159.000<span>per bulan</span></h4>
              <ul>
                <li>
                  <i class="bx bx-check"></i> Akses gambar semua kategori yang
                  terjadi
                </li>
                <li>
                  <i class="bx bx-check"></i> Mengunduh 100 gambar bebas
                  copyright perhari
                </li>
                <li>
                  <i class="bx bx-check"></i> Mengunduh gambar dengan format
                  JPG, JPEG, PNG, PDF, PSD, TIFF, WebP, BMP (Bitmap), Raw,
                  Exif, ICO, dan HEIF
                </li>
                <li>
                  <i class="bx bx-check"></i> Mengirim 50 gambar perhari dan
                  mendapatkan hak copyright
                </li>
                <li>
                  <i class="bx bx-check"></i> Mengakses semua gambar eksklusif
                </li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>
            Pertanyaan-pertanyaan yang sering ditanyakan oleh user dan semoga
            membantu menjawab pertanyaan anda!
          </p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i>
              <a data-toggle="collapse" class="collapse" href="#faq-list-1">Bagaimana cara mencari foto dengan tema yang diinginkan?
                <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                <p>
                  Klik button yang terdapat pilihan sperti All, makanan,
                  otomotif, dll pada Gallery. Pilihan tersebut merupakan tema
                  yang tersedia.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i>
              <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Berapa ukuran gambar yang tersedia untuk diunduh pada ZONA?
                <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>
                  Gambar ZONA tersedia dalam beberapa ukuran sehingga Anda
                  dapat memilih yang paling sesuai dengan kebutuhan Anda.
                  Semua gambar tersedia dalam ukuran Kecil, Sedang, dan Besar.
                  File ukuran besar selalu asli, seperti yang dikirimkan oleh
                  kontributor. Ini adalah opsi kualitas terbaik yang tersedia.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i>
              <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Bagaimana cara mendaftar menjadi kontributor ZONA?
                <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                <p>
                  Pada pricing pilih Business Plan atau bisa juga pilih
                  Developer Plan sesuai dengan kebutuhan anda, kemudian klik
                  Get Started
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i>
              <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Apa saja format yang tersedia yang dapat diunduh pada ZONA?
                <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                <p>
                  • Member free dapat dapat mendownload gambar dengan format
                  gambar png dan jpeg.
                </p>
                <p>
                  • Member Business Plan dapat mendownload gambar dengan
                  format gambar jpg, png, pdf, psd, dan TIFF.
                </p>
                <p>
                  • Member Developer Plan dapat mendownload gambar dengan
                  format gambar jpg, png, pdf, psd, TIFF, SVG, WebP, BMP, Raw,
                  Exif, ICO, dan HEIF.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i>
              <a data-toggle="collapse" href="#faq-list-5" class="collapsed">Bagaimana jika terdapat pertanyaan yang masih belum terjawab?
                <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                <p>
                  Anda dapat menghubungi kontak kami pada menu Contact yang
                  tersedia, lalu isi nama, email, subject, dan message atau
                  pesan yang akan anda tanyakan.
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Contact</h2>
          <p>
            Hubungi kami dengan cara kirim pesan pada tabel dibawah ini
          </p>
        </div>

        <div class="row">
          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>
                  Jalan Raya Tlogomas No. 246 Tlogomas, Babatan, Tegalgondo,
                  Kec. Lowokwaru, Kota Malang, Jawa Timur 65144
                </p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>zona@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>(0341) 464318</p>
              </div>

              <iframe src="https://maps.google.com/maps?q=Jalan+Raya+Tlogomas+No.+246+Tlogomas,+Babatan,+Tegalgondo,+Kec.+Lowokwaru,+Kota+Malang,+Jawa+Timur+65144&output=embed" width="100%" height="290px9o" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">
                  Your message has been sent. Thank you!
                </div>
              </div>
              <div class="text-center">
                <button type="submit">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->
</div>
</main>
<!-- End #main -->

<style>
  .profilenav {
    display: none;
  }
</style>

@endsection
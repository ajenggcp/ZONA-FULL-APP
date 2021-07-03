

<script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />


@extends('layouts.headerindex')
@section('title', 'Home')
@section('content')
@stack('css')

<!-- ======= Hero Section ======= -->
<div id="content">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1495374412936-30689e318a1f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1778&q=80" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1516357231954-91487b459602?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=752&q=80" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1438109491414-7198515b166b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- End Hero -->



    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Gallery</h2>
                <p>
                    Ganti suasanamu menjadi penuh warna dengan gambar-gambar pada gallery kami!
                </p>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200" style="margin-top: 5%;">
                <div>

                    @foreach($tasks as $task)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-makanan">
                        <div class="portfolio-img">
                            <img src="{{ $task->image }}" class="img-fluid" alt="" />
                        </div>
                        <div class="portfolio-info">
                            <h2 style="color: white;">{{ $task->description }}</h2>
                        </div>
                    </div>
                    @endforeach
                </div>
            <div style="text-decoration: none;">
                {{ $tasks->links() }}
            </div>
            </div>
        </div>
    </section>




    <!-- ======= Portfolio Section ======= -->
    <!-- <section id="portfolio" class="portfolio">
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
    </section> -->
    <!-- End Portfolio Section -->


</div>
</main>
<!-- End #main -->

<style>
    .get-started-btn {
        display: none;
    }

    .aboutnav {
        display: none;
    }

    .gallerynav {
        display: none;
    }

    .teamnav {
        display: none;
    }

    .contactnav {
        display: none;
    }

    .nav-menu {
        display: none;
    }

    .min-h-screen {
        display: none;
    }
</style>


<script src="js/jquery.js"></script>
<script src="js/jquery-ui-1.10.4.min.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


@endsection

<x-app-layout style="display: none;">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

    </x-slot>
</x-app-layout>
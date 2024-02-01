@extends('partials.main')

@section('container')
<!--Carousel-->
<section class="ftco-section">
    <div style="margin-left:auto;margin-right:auto;margin-bottom:0px;" class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="featured-carousel owl-carousel">
                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(images/gb2.jpg);">
                                <a href="#" class="icon d-flex align-items-center justify-content-center">
                                    <span class="ion-ios-search"></span>
                                </a>
                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <span>Instalasi Pengolahan Air Ogan 1</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(images/gbq.jpg);">
                                <a href="#" class="icon d-flex align-items-center justify-content-center">
                                    <span class="ion-ios-search"></span>
                                </a>
                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <h2><a href="#" style="color: black;">Selamat Datang</a></h2>
                                <h3><span>Layanan Pengaduan PDAM Tirta Musi Palembang</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(images/gbr.jpg);">
                                <a href="#" class="icon d-flex align-items-center justify-content-center">
                                    <span class="ion-ios-search"></span>
                                </a>
                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <span>Instalasi Pengolahan Rambutan</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(images/GCG.jpg);" >
                                <a href="#" class="icon d-flex align-items-center justify-content-center">
                                    <span class="ion-ios-search"></span>
                                </a>
                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <span>Sosialisasi Good Corporate Governance</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(images/NP.jpg);">
                                <a href="#" class="icon d-flex align-items-center justify-content-center">
                                    <span class="ion-ios-search"></span>
                                </a>
                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <span>Nota Kesepakatan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END-->

<!--Card-->
<div class="card mb-3" style="max-width: 85%;margin:auto;padding-bottom:20px;">
    <div class="row g-0">
     
      <div class="col-md-8">
        <div class="card-body">
          <h5 style="padding-top:40px;font-size: 48px;"class="card-title">Layanan Informasi dan Pengaduan </h5>
          <p class="card-text">Pusat Layanan Informasi dan Pengaduan PDAM Tirta Musi Palembang, Masyarakat dapat menggunakan layanan tersebut  </p>
          <a style="margin-top:20px"href="/pengaduan" class="btn btn-primary">Pengaduan</a>
        </div>
      </div>
      <div class="col-md-4">
        <img style="margin-top:80px" src="images/Group 1.png" class="img-fluid rounded-start" alt="...">
        
      </div>
      
    </div>
    
  </div>
<!--end-->

@endsection
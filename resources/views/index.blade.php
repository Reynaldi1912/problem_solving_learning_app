@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
   <!-- ======= Why Us Section ======= -->
   <section id="why-us" class="why-us  pt-5 mt-5">
      <div class="container-fluid pt-5" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2">
            <div class="content" id="hero">
              <h1 class="text-start">Ga Usah Bingung Cari Ide Ngoding Lagi</h1>
                <div class="pencarian">
                  <div class=" border border-dark p-3 rounded">
                    <div class="row">
                      <div class="col-4">
                        <p class="text-dark"><strong>Topik</strong></p>
                        <input class="form-control ps-3"  type="text" placeholder="Topik">
                      </div>
                      <div class="col-3">
                        <p class="text-dark"><strong>Kategori</strong></p>
                          <select class="form-select ps-2" aria-label="Default select example">
                                <option selected>Kategori</option>
                                <option value="1">Mobile</option>
                                <option value="2">Website</option>
                                <option value="3">IoT</option>
                          </select>
                      </div>
                      <div class="col-3">
                        <p class="text-dark"><strong>Level</strong></p>
                        <select class="form-select ps-2"  aria-label="Default select example">
                              <option selected>Level</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                      </div>
                        <div class="col-2">
                          <p class="invisible" aria-label=>button</p>
                          <button class="btn ps-3"style="background-color:#F67451; color:white;"><i class="fas fa-search pe-3"></i>Cari</button>
                        </div>
                    </div>
                  
                  </div>
                </div>
            </div>
          </div>
          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section>
 

  <main id="main">
    
    <section id="keuntungan" class="services why-us">
      <div class="container-fluid" data-aos="fade-up">
            <div class="content">
              <h1 class="text-secondary">Keuntungan</h1>
            </div>
            <div class="row ps-3 pt-5 ms-5">
              <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                  <div class="icon">
                    <div class="row">
                      <i class="bx col"><img src="assets/img/circle-icon.png" alt=""></i>
                    </div>
                  </div>
                  <h4 class="mt-5"><a href="">Ide Menarik & Beragam</a></h4>
                  <p>Temukan ide-ide proyek yang menarik dari
                   teknologi berbeda mulai dari Fullstack,
                   Web,Front-en Web,Back-end Web, dan Mobile
                </div>
              </div>

            <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon">
                  <div class="row">
                    <i class="bx col"><img src="assets/img/calender-icon.png" alt=""></i>
                  </div>
                </div>
                <h4 class="mt-5"><a href="">Kerjakan Dengan Waktu Fleksible</a></h4>
                <p>Kamu bisa atur jadwal pengerjaan sesuai keinginanmu dan bisa mendapatkan jadwal yang sudah disediakan</p>
              </div>
            </div>

            <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box">
                <div class="icon">
                  <div class="row">
                    <i class="bx col"><img src="assets/img/shape-icon.png" alt=""></i>
                  </div>
                </div>
                <h4 class="mt-5"><a href="">Cocok buat tugas & Portofolio</a></h4>
                <p>Ide yang kamu kerjakan bisa jadi portofolio supaya makin percaya diri jadi programmer</p>
              </div>
            </div>
          </div>
          </div>          
      </div>
    </section>
    <!-- End Of Keuntungan -->
   
    <!-- ======= Ide Populer Section ======= -->
    <section id="ide-populer" class="why-us">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-7 d-flex flex-column align-items-stretch  order-2 order-lg-1">
            <div class="content">
              <h1 class="text-secondary">Ide Populer</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam laudantium, repellat veniam sequi quod, cupiditate recusandae id vero consequuntur impedit optio saepe <br>
                maxime necessitatibus perspiciatis sapiente pariatur iste quidem provident. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus maiores amet, omnis distinctio <br>
                 saepe nesciunt recusandae, nihil rem cupiditate officia iste! Ipsum obcaecati dicta odit vitae voluptates alias sunt quasi?</p>
                 <button class="btn text-white" style="background-color:#F67451;">Jelajahi Lebih Lanjut <i class="fa fa-arrow-right"></i></button>
            </div>
          </div>


               
            <div class="col-lg-5 align-items-stretch order-2 order-lg-1 border border-dark" style="background-color:#F99E85">
              <div class="button mt-3 text-end">
                <button class="control-prev btn btn-outline-danger section-bg" style="color:#F67451" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="fas fa-arrow-left" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="control-next btn btn-outline-danger section-bg" style="color:#F67451" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="fas fa-arrow-right" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
              </div>
               

              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-interval="false">
                <div class="carousel-inner" data-interval="false">
                  <div class="carousel-item active pt-3 ps-5 pe-5 pb-3">
                    <div class="container border-dark bg-white">
                      <div class="row">
                        <img src="assets/img/ide.png" class="p-4 rounded" alt="">
                      </div>
                      <div class="row">
                        <div class="col-9 ms-4">
                          <a class="text-info"href="#">FULLSTACK WEBSITE</a>
                        </div>
                        <div class="col-2 border" height="10px">
                            <div class=" p-2 row text-dark">
                              <img class="col-6 text-end" src="assets/img/icon small/small-puzzle-icon.png" style="height:20px" alt="">
                              Rook
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <h1 class="ms-4">Website Portal Magang</h1>
                      </div>
                      <div class="row ms-3">
                        <p>Dengan sudah dekatnya bulan-bulan magang dan pastinya akan terjadi pembludakan mahasiswa yang mencari tempat magang, akan sangat menarik apabila kita bisa membuat...</p>
                      </div>
                      <div class="row">
                        <button class="btn bg-white text-end" style="color:#F67451">Lihat Detail <i class="fa fa-arrow-right"></i></button>
                      </div>
                      <div class="row ms-3 pt-3">
                        <div class="col-1">

                      </div>
                        <div class="col">
                          <h5><strong>Surya Dinata</strong></h5>
                          <p style="color:#747474">2 Minggu Lalu</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="carousel-item pt-3 ps-5 pe-5 pb-3">
                    <div class="container border-dark bg-white">
                        <div class="row">
                          <img src="assets/img/ide.png" class="p-4 rounded" alt="">
                        </div>
                        <div class="row">
                          <div class="col-9 ms-4">
                            <a class="text-info"href="#">FULLSTACK WEBSITE</a>
                          </div>
                          <div class="col-2 border" height="10px">
                              <div class=" p-2 row text-dark">
                                <img class="col-6 text-end" src="assets/img/icon small/small-puzzle-icon.png" style="height:20px" alt="">
                                Rook
                              </div>
                          </div>
                        </div>
                        <div class="row">
                          <h1 class="ms-4">Website Portal Magang</h1>
                        </div>
                        <div class="row ms-3">
                          <p>Dengan sudah dekatnya bulan-bulan magang dan pastinya akan terjadi pembludakan mahasiswa yang mencari tempat magang, akan sangat menarik apabila kita bisa membuat...</p>
                        </div>
                        <div class="row">
                          <button class="btn bg-white text-end" style="color:#F67451">Lihat Detail <i class="fa fa-arrow-right"></i></button>
                        </div>
                        <div class="row ms-3 pt-3">
                          <div class="col-1">
                        </div>
                          <div class="col">
                            <h5><strong>Surya Dinata</strong></h5>
                            <p style="color:#747474">2 Minggu Lalu</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
        </div>
      </div>
    </section><!-- End Why Us Section -->

   
    <section id="level-ide" class="services why-us">
    <div class="content pb-5">
          <h1 class="text-secondary">Level Ide</h1>
        </div>
      <div class="container" data-aos="fade-up">
        <div class="row">

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon">
                <div class="row pb-5">
                  <i class="bx col"><img src="assets/img/small-puzzle-icon.png" alt=""></i>
                  <h3 class="col text-end " style="font-size:50px"><strong>01</strong></h3>
                </div>
              </div>
              <h4><a href="">Rook</a></h4>
              <p>Ide-ide yang cocok untuk pemula yang ingin mencoba mengerjakan proyek pertamanya</p>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon">
                <div class="row pb-5">
                  <i class="bx col"><img src="assets/img/medium-puzzle-icon.png" alt=""></i>
                  <h3 class="col text-end" style="font-size:50px"><strong>02</strong></h3>
                </div>
              </div>
              <h4><a href="">Pro</a></h4>
              <p>Ide-ide yang cocok untuk kamu yang sudah berkecimpung di dunia pemrograman kurang lebih setahun</p>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon">
                <div class="row pb-5">
                  <i class="bx col"><img src="assets/img/big-puzzle-icon.png" alt=""></i>
                  <h3 class="col text-end" style="font-size:50px"><strong>03</strong></h3>
                </div>
            </div>
              <h4><a href="">Vet</a></h4>
              <p>Ide-ide yang cocok untuk kamu yang sudah jago dan suka dengan tantangan baru</p>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Why Us Section -->

  
    <!-- ======= Why Us Section ======= -->
    <section id="review-saran" class="why-us">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-5 d-flex flex-column  align-items-stretch  order-2 order-lg-1">
            <div class="content">
              <h1 class="text-secondary">Minta , Beri ,Atau <br> Review Ide</h1>
              <p>Tidak terbatas pada ide-ide yang disediakan , kamu juga bisa berkreasi dan memvalidasi idemu disini dengan bantuan orang lain jika kamu memiliki keraguan</p>
                 <button class="btn text-white" style="background-color:#F67451;">Jelajahi Lebih Lanjut <i class="fa fa-arrow-right"></i></button>
            </div>
          </div>
               
            <div class="col-lg-5 align-items-stretch order-2 order-lg-1 ps-5">
              
              <div class="row text-end">
                  <div class="col-4"></div>
                  <div class="col text-end">
                    <a href="">Permintaan Saran Ide</a>
                  </div>
                  <div class="col-4 text-start">
                    <a href="">Perimintaan Review Ide</a>
                  </div>
                </div>

                <div class="row border border-dark p-2 rounded mt-5">
                <div class="row mt-2">
                  <div class="col-1">
                    <div class="row">
                      <button class="btn btn-outline-danger"><i class="fas fa-angle-up"></i></button>
                    </div>
                    <div class="row text-center pt-2">
                      <h6><strong>34</strong></h6>
                    </div>
                    <div class="row">
                      <button class="btn btn-outline-danger"><i class="fas fa-angle-down"></i></button>
                    </div>
                  </div>
                  <div class="col-11">
                    <img src="assets/img/gambar-review.png" width="600px" alt="">
                    <h2 class="pt-3">Apikasi Pemantau Tingkat Stress</h2>
                    <p style="color:#747474">Dengan kondisi pandemi yang mengharuskan semua orang harus menjalankan normal baru dalam...</p>
                  </div>
                </div>

                <div class="row mt-4">
                    <div class="col">
                      <button class="btn bg-white">
                        <i class="fas fa-comment-dots pe-3"></i>23 Komentar
                      </button>
                    </div>
                    <div class="col text-end">
                      <button class="btn bg-white text-end" style="color:#F67451">Lihat Detail <i class="fa fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="row mt-3">
                  <div class="col-1">

                  </div>
                  <div class="col">
                      <h5>Surya Dinata</h5>
                      <p style="color:#747474">2 Minggu Lalu</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

  
        
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section text-center">
          <h2>Tunggu Apa Lagi ?</h2>
          <p class="pt-5 pb-5">
            Ayo mulai ide-ide proyek yang ada , semakin banyak <br> portofoliomu , semakin percaya dirilah kamu jadi seorang <br> Programmer !
          </p>
            <a href="{{ url('/register') }}">
            <button class="btn text-white" style="background-color:#F67451;">Daftar Sekarang</button>
            </a>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
</html>
@endsection

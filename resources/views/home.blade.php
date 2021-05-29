@extends('layouts.app')

@section('content')
<div class="mt-5 pt-1">
    <div class="row border-2 border-top border-bottom text-center mt-5 pt-3 pb-2">
        <div class="container row">
            <ul  class="list-inline">
                <li class="list-inline-item pe-3"><a class="text-dark" href="#">Full Stack Web</a></li>
                <li class="list-inline-item pe-3"><a class="text-dark" href="#">Front-End Web</a></li>
                <li class="list-inline-item pe-3"><a class="text-dark" href="#">Back-End Web</a></li>
                <li class="list-inline-item pe-3"><a class="text-dark" href="#">Mobile</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="container mt-5 pt-5"> 

<!-- IDE POPULER -->
<div class="order-2 order-lg-1">
    <div class="row">
        <div class="col-6">
            <h3 class="text-secondary"><strong>Ide Populer</strong></h3>
        </div>
        <div class="col-6">
            <h5 class="text-secondary">Ide Populer Lainya</h5>
        </div>
    </div>
    <div class="row mt-4">
    <a href="{{ route('gambaran-ide.show',$ide->id) }}">
        <div class="col-5">
            <div class="row border border-3 border-dark rounded-3">
                    <img src="{{$ide->img}}" alt="">
            </div>
            <div class="row pt-3">
                <div class="col-10">
                    <a class="{{$ide->kategori->color}}" href="#">{{$ide->kategori->nama_kategori}}</a>
                </div>
                <div class="col-2 border border-2 text-center">
                    <img src="{{$ide->level->icon}}" style="height:20px" alt="">
                    {{$ide->level->nama_level}}
                </div>
            </div>
            <div class="row pt-3">
                <a href="{{ route('gambaran-ide.show',$ide->id) }}">
                    <h4 class="text-dark"><strong>{{$ide->judul}}</strong></h4>
                </a>

            </div>
            <div class="row">
                <p style="color:#747474">Dengan sudah dekatnya bulan-bulan magang dan pastinya akan terjadi pembludakan mahasiswa yang mencari tempat magang, akan sangat menarik apabila kita bisa membuat...</p>
            </div>
           
        </div>
        </a>

        <div class="col-1"></div>
        <div class="col-6">
        @foreach($popular as $popular)
            <div class="row pt-3">
                <div class="col-4">
                    <img class="border border-3 border-dark rounded-3" src="assets/img/ide.png" width="200px" alt="">
                </div>
                <div class="col-8 row">
                    <div class="{{$ide->kategori->color}} col-9">
                        {{$popular->kategori->nama_kategori}}
                    </div>
                    <div class="col-3 border border-2 text-center" >
                        <img src="{{$ide->level->icon}}" width="20px" alt="">
                        {{$popular->level->nama_level}}
                    </div>
                    <div class="row">
                        <a href="{{ route('gambaran-ide.show',$popular->id) }}">
                            <h5 class="pt-3">{{$popular->judul}}</h5>
                        </a>
                    </div>
                    <div class="row">
                        <p>Dengan sudah dekatnya bulan-bulan magang dan pastinya akan terjadi pembludakan...</p>
                    </div>
                </div>
            </div>
        @endforeach
           
        </div>
    </div>
<!-- END OF IDE POPULER -->

<!-- IDE -->
    <div class="row pt-5">
        <div class="col-1"><h3 class="text-secondary"><strong>Ide</strong></h3></div>
        <div class="col-1"><a href="#">Selengkapnya</a></div>
        <div class="col-10">
            <div class="button mt-3 text-end">
                <button class="control-prev btn btn-outline-danger" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="fas fa-arrow-left" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="control-next btn btn-outline-danger" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="fas fa-arrow-right" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
              </div>
        </div>
    </div>

    <div class="row">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-interval="false">
            <div class="carousel-inner" data-interval="false">
                <div class="carousel-item active pt-3 ps-5 pe-5 pb-3">
                    <div class="row">
                        
                        <div class="col-6">
                            <div class="border border-2 border-dark rounded-2">
                                <div class="content p-3">
                                    <div class="row">
                                        <img class="rounded" src="assets/img/ide.png" width="350px">
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col">
                                                <a class="fullstack-web" href="#">FULLSTACK WEBSITE</a>
                                        </div>
                                        <div class="col-3 border border-2 text-center" >
                                            <img src="assets/img/icon small/small-puzzle-icon.png" width="20px" alt="">
                                            Rook
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <h5>Website Portal Magang</h5>
                                    </div>
                                    <div class="row" style="color:#747474">
                                        <p>Dengan sudah dekatnya bulan-bulan magang dan pastinya akan terjadi pembludakan mahasiswa yang mencari tempat magang, akan sangat menarik apabila kita bisa membuat...</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-8"></div>
                                        <div class="col-4">
                                            <button class="btn text-end" style="color:#F67451;">Lihat Detail <i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col-2">
                                        
                                        </div>
                                        <div class="col">
                                            <h6><strong>Surya Dinata</strong></h6>
                                            <p style="color:#747474">2 Minggu Lalu</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="border border-2 border-dark rounded-2">
                                <div class="content p-3">
                                    <div class="row">
                                        <img class="rounded" src="assets/img/ide.png" width="350px">
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col">
                                                <a class="fullstack-web" href="#">FULLSTACK WEBSITE</a>
                                        </div>
                                        <div class="col-3 border border-2 text-center" >
                                            <img src="assets/img/icon small/small-puzzle-icon.png" width="20px" alt="">
                                            Rook
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <a href="#">
                                            <h5>Website Portal Magang</h5>
                                        </a>
                                    </div>
                                    <div class="row" style="color:#747474">
                                        <p>Dengan sudah dekatnya bulan-bulan magang dan pastinya akan terjadi pembludakan mahasiswa yang mencari tempat magang, akan sangat menarik apabila kita bisa membuat...</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-8"></div>
                                        <div class="col-4">
                                            <button class="btn text-end" style="color:#F67451;">Lihat Detail <i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col-2">
                                        
                                        </div>
                                        <div class="col">
                                            <h6><strong>Surya Dinata</strong></h6>
                                            <p style="color:#747474">2 Minggu Lalu</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="carousel-item pt-3 ps-5 pe-5 pb-3">
                    <div class="row">
                        
                        <div class="col-6">
                            <div class="border border-2 border-dark rounded-2">
                                <div class="content p-3">
                                    <div class="row">
                                        <img class="rounded" src="assets/img/ide.png" width="350px">
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col">
                                                <a class="fullstack-web" href="#">FULLSTACK WEBSITE</a>
                                        </div>
                                        <div class="col-3 border border-2 text-center" >
                                            <img src="assets/img/icon small/small-puzzle-icon.png" width="20px" alt="">
                                            Rook
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <h5>Website Portal Magang</h5>
                                    </div>
                                    <div class="row" style="color:#747474">
                                        <p>Dengan sudah dekatnya bulan-bulan magang dan pastinya akan terjadi pembludakan mahasiswa yang mencari tempat magang, akan sangat menarik apabila kita bisa membuat...</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-8"></div>
                                        <div class="col-4">
                                            <button class="btn text-end" style="color:#F67451;">Lihat Detail <i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col-2">
                                        
                                        </div>
                                        <div class="col">
                                            <h6><strong>Surya Dinata</strong></h6>
                                            <p style="color:#747474">2 Minggu Lalu</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="border border-2 border-dark rounded-2">
                                <div class="content p-3">
                                    <div class="row">
                                        <img class="rounded" src="assets/img/ide.png" width="350px">
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col">
                                                <a class="fullstack-web" href="#">FULLSTACK WEBSITE</a>
                                        </div>
                                        <div class="col-3 border border-2 text-center" >
                                            <img src="assets/img/icon small/small-puzzle-icon.png" width="20px" alt="">
                                            Rook
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <h5>Website Portal Magang</h5>
                                    </div>
                                    <div class="row" style="color:#747474">
                                        <p>Dengan sudah dekatnya bulan-bulan magang dan pastinya akan terjadi pembludakan mahasiswa yang mencari tempat magang, akan sangat menarik apabila kita bisa membuat...</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-8"></div>
                                        <div class="col-4">
                                            <button class="btn text-end" style="color:#F67451;">Lihat Detail <i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col-2">
                                        
                                        </div>
                                        <div class="col">
                                            <h6><strong>Surya Dinata</strong></h6>
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

    <!-- END OF IDE -->


    <!-- PERMINTAAN SARAN IDE -->
    <div class="row pt-5">
        <div class="col-3"><h3 class="text-secondary"><strong>Permintaan Saran Ide</strong></h3></div>
        <div class="col-1"><a href="#">Selengkapnya</a></div>
        <div class="col">
            <div class="button mt-3 text-end">
                <button class="control-prev btn btn-outline-danger "  type="button" data-bs-target="#carouselExampleControlss" data-bs-slide="prev">
                    <span class="fas fa-arrow-left" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="control-next btn btn-outline-danger " type="button" data-bs-target="#carouselExampleControlss" data-bs-slide="next">
                    <span class="fas fa-arrow-right" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
              </div>
        </div>
    </div>

    <div class="row">
        <div id="carouselExampleControlss" class="carousel slide" data-bs-ride="carousel" data-interval="false">
            <div class="carousel-inner" data-interval="false">
                <div class="carousel-item active pt-3 ps-5 pe-5 pb-3">
                    <div class="row">
                        <div class="col-6">
                            <div class="border border-2 border-dark rounded-2">
                                <div class="content p-3">
                                    <div class="row">
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
                                        <div class="col">
                                            <img class="rounded" src="assets/img/ide.png" width="500px">
                                        </div>
                                    </div>
                    
                                    <div class="row pt-3">
                                        <h5>Website Portal Magang</h5>
                                    </div>
                                    <div class="row" style="color:#747474">
                                        <p>Dengan sudah dekatnya bulan-bulan magang dan pastinya akan terjadi pembludakan mahasiswa yang mencari tempat magang, akan sangat menarik apabila kita bisa membuat...</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <button class="btn bg-white">
                                                <i class="fas fa-comment-dots pe-3"></i>23 Komentar
                                            </button>
                                        </div>
                                        <div class="col-4">
                                            <button class="btn text-end" style="color:#F67451;">Lihat Detail <i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col-2">
                                        
                                        </div>
                                        <div class="col">
                                            <h6><strong>Surya Dinata</strong></h6>
                                            <p style="color:#747474">2 Minggu Lalu</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="border border-2 border-dark rounded-2">
                                <div class="content p-3">
                                    <div class="row">
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
                                        <div class="col">
                                            <img class="rounded" src="assets/img/ide.png" width="500px">
                                        </div>
                                    </div>
                    
                                    <div class="row pt-3">
                                        <h5>Website Portal Magang</h5>
                                    </div>
                                    <div class="row" style="color:#747474">
                                        <p>Dengan sudah dekatnya bulan-bulan magang dan pastinya akan terjadi pembludakan mahasiswa yang mencari tempat magang, akan sangat menarik apabila kita bisa membuat...</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <button class="btn bg-white">
                                                <i class="fas fa-comment-dots pe-3"></i>23 Komentar
                                            </button>
                                        </div>
                                        <div class="col-4">
                                            <button class="btn text-end" style="color:#F67451;">Lihat Detail <i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col-2">
                                        
                                        </div>
                                        <div class="col">
                                            <h6><strong>Surya Dinata</strong></h6>
                                            <p style="color:#747474">2 Minggu Lalu</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="carousel-item pt-3 ps-5 pe-5 pb-3">
                    <div class="row">
                        
                        <div class="col-6">
                            <div class="border border-2 border-dark rounded-2">
                                <div class="content p-3">
                                    <div class="row">
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
                                        <div class="col">
                                            <img class="rounded" src="assets/img/ide.png" width="500px">
                                        </div>
                                    </div>
                    
                                    <div class="row pt-3">
                                        <h5>Website Portal Magang</h5>
                                    </div>
                                    <div class="row" style="color:#747474">
                                        <p>Dengan sudah dekatnya bulan-bulan magang dan pastinya akan terjadi pembludakan mahasiswa yang mencari tempat magang, akan sangat menarik apabila kita bisa membuat...</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <button class="btn bg-white">
                                                <i class="fas fa-comment-dots pe-3"></i>23 Komentar
                                            </button>
                                        </div>
                                        <div class="col-4">
                                            <button class="btn text-end" style="color:#F67451;">Lihat Detail <i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col-2">
                                        
                                        </div>
                                        <div class="col">
                                            <h6><strong>Surya Dinata</strong></h6>
                                            <p style="color:#747474">2 Minggu Lalu</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="border border-2 border-dark rounded-2">
                                <div class="content p-3">
                                    <div class="row">
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
                                        <div class="col">
                                            <img class="rounded" src="assets/img/ide.png" width="500px">
                                        </div>
                                    </div>
                    
                                    <div class="row pt-3">
                                        <h5>Website Portal Magang</h5>
                                    </div>
                                    <div class="row" style="color:#747474">
                                        <p>Dengan sudah dekatnya bulan-bulan magang dan pastinya akan terjadi pembludakan mahasiswa yang mencari tempat magang, akan sangat menarik apabila kita bisa membuat...</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <button class="btn bg-white">
                                                <i class="fas fa-comment-dots pe-3"></i>23 Komentar
                                            </button>
                                        </div>
                                        <div class="col-4">
                                            <button class="btn text-end" style="color:#F67451;">Lihat Detail <i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col-2">
                                        
                                        </div>
                                        <div class="col">
                                            <h6><strong>Surya Dinata</strong></h6>
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
    <!-- END OF PERMINTAAN SARAN IDE -->

    <!-- PERMINTAAN REVIEW IDE -->
    <div class="row pt-5">
        <div class="col-3"><h3 class="text-secondary"><strong>Permintaan Saran Ide</strong></h3></div>
        <div class="col-1"><a href="#">Selengkapnya</a></div>
        <div class="col">
            <div class="button mt-3 text-end">
                <button class="control-prev btn btn-outline-danger"  type="button" data-bs-target="#carouselExampleControlsss" data-bs-slide="prev">
                    <span class="fas fa-arrow-left" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="control-next btn btn-outline-danger "  type="button" data-bs-target="#carouselExampleControlsss" data-bs-slide="next">
                    <span class="fas fa-arrow-right" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
              </div>
        </div>
    </div>


    <div class="row">
        <div id="carouselExampleControlsss" class="carousel slide" data-bs-ride="carousel" data-interval="false">
            <div class="carousel-inner" data-interval="false">
                <div class="carousel-item active pt-3 ps-5 pe-5 pb-3">
                    <div class="row">
                        <div class="col-6">
                            <div class="border border-2 border-dark rounded-2">
                                <div class="content p-3">
                                    <div class="row">
                                        <img class="rounded" src="assets/img/ide.png" width="500px">
                                    </div>
                                    <div class="row pt-3">
                                        <a href="#" class="fullstack-web">FULLSTACK WEBSITE</a>
                                    </div>
                                    <div class="row pt-3">
                                        <h5>Website Portal Magang</h5>
                                    </div>
                                    <div class="row pt-2">
                                        <div class="col-4">
                                            <button>
                                                <i class="fas fa-laptop-code"></i>
                                                Hasil Pengerjaan
                                            </button>
                                        </div>                                       
                                    </div>
                                    <div class="row pt-3" style="color:#747474">
                                        <p>Dengan sudah dekatnya bulan-bulan magang dan pastinya akan terjadi pembludakan mahasiswa yang mencari tempat magang, akan sangat menarik apabila kita bisa membuat...</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <button class="btn bg-white">
                                                <i class="fas fa-comment-dots pe-3"></i>23 Komentar
                                            </button>
                                        </div>
                                        <div class="col-4">
                                            <button class="btn text-end" style="color:#F67451;">Lihat Detail <i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col-2">
                                        
                                        </div>
                                        <div class="col">
                                            <h6><strong>Surya Dinata</strong></h6>
                                            <p style="color:#747474">2 Minggu Lalu</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="border border-2 border-dark rounded-2">
                                <div class="content p-3">
                                    <div class="row">
                                        <img class="rounded" src="assets/img/ide.png" width="500px">
                                    </div>
                                    <div class="row pt-3">
                                        <a href="#" class="fullstack-web">FULLSTACK WEBSITE</a>
                                    </div>
                                    <div class="row pt-3">
                                        <h5>Website Portal Magang</h5>
                                    </div>
                                    <div class="row pt-2">
                                        <div class="col-4">
                                            <button>
                                                <i class="fas fa-laptop-code"></i>
                                                Hasil Pengerjaan
                                            </button>
                                        </div>                                       
                                    </div>
                                    <div class="row pt-3" style="color:#747474">
                                        <p>Dengan sudah dekatnya bulan-bulan magang dan pastinya akan terjadi pembludakan mahasiswa yang mencari tempat magang, akan sangat menarik apabila kita bisa membuat...</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <button class="btn bg-white">
                                                <i class="fas fa-comment-dots pe-3"></i>23 Komentar
                                            </button>
                                        </div>
                                        <div class="col-4">
                                            <button class="btn text-end" style="color:#F67451;">Lihat Detail <i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col-2">
                                        
                                        </div>
                                        <div class="col">
                                            <h6><strong>Surya Dinata</strong></h6>
                                            <p style="color:#747474">2 Minggu Lalu</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="carousel-item pt-3 ps-5 pe-5 pb-3">
                    <div class="row">
                        
                        <div class="col-6">
                            <div class="border border-2 border-dark rounded-2">
                                <div class="content p-3">
                                    <div class="row">
                                        <img class="rounded" src="assets/img/ide.png" width="500px">
                                    </div>
                                    <div class="row pt-3">
                                        <a href="#" class="fullstack-web">FULLSTACK WEBSITE</a>
                                    </div>
                                    <div class="row pt-3">
                                        <h5>Website Portal Magang</h5>
                                    </div>
                                    <div class="row pt-2">
                                        <div class="col-4">
                                            <button>
                                                <i class="fas fa-laptop-code"></i>
                                                Hasil Pengerjaan
                                            </button>
                                        </div>                                       
                                    </div>
                                    <div class="row pt-3" style="color:#747474">
                                        <p>Dengan sudah dekatnya bulan-bulan magang dan pastinya akan terjadi pembludakan mahasiswa yang mencari tempat magang, akan sangat menarik apabila kita bisa membuat...</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <button class="btn bg-white">
                                                <i class="fas fa-comment-dots pe-3"></i>23 Komentar
                                            </button>
                                        </div>
                                        <div class="col-4">
                                            <button class="btn text-end" style="color:#F67451;">Lihat Detail <i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col-2">
                                        
                                        </div>
                                        <div class="col">
                                            <h6><strong>Surya Dinata</strong></h6>
                                            <p style="color:#747474">2 Minggu Lalu</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="border border-2 border-dark rounded-2">
                                <div class="content p-3">
                                    <div class="row">
                                        <img class="rounded" src="assets/img/ide.png" width="500px">
                                    </div>
                                    <div class="row pt-3">
                                        <a href="#" class="fullstack-web">FULLSTACK WEBSITE</a>
                                    </div>
                                    <div class="row pt-3">
                                        <h5>Website Portal Magang</h5>
                                    </div>
                                    <div class="row pt-2">
                                        <div class="col-4">
                                            <button>
                                                <i class="fas fa-laptop-code"></i>
                                                Hasil Pengerjaan
                                            </button>
                                        </div>                                       
                                    </div>
                                    <div class="row pt-3" style="color:#747474">
                                        <p>Dengan sudah dekatnya bulan-bulan magang dan pastinya akan terjadi pembludakan mahasiswa yang mencari tempat magang, akan sangat menarik apabila kita bisa membuat...</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <button class="btn bg-white">
                                                <i class="fas fa-comment-dots pe-3"></i>23 Komentar
                                            </button>
                                        </div>
                                        <div class="col-4">
                                            <button class="btn text-end" style="color:#F67451;">Lihat Detail <i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col-2">
                                        
                                        </div>
                                        <div class="col">
                                            <h6><strong>Surya Dinata</strong></h6>
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
    <!-- END OF PERMINTAAN REVIEW IDE -->
</div>

@endsection

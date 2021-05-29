@extends('layouts.detail')

@section('content-detail')

        <!-- cerita section  -->
            <div class="container">
                <div class="row">
            
            <!-- sidebar  -->
                    <div class="col-2">
                    <ul class="list-unstyled">
                            <li class="pb-3"><a href="#bahasa-program">Bahasa Program</a></li>
                            <li class="pb-3"><a href="#framework">Framework</a></li>
                            <li class="pb-3"><a href="#database">Database</a></li>
                            <li class="pb-3"><a href="#version-control">Version Control</a></li>
                    </ul>
                    </div>
            <!-- -end of side bar -->

            <!-- bahasa program -->
                <div class="col-6">
                    <div id="bahasa-program">
                        <h4><strong>Bahasa Program</strong></h4>
                        <p>Kamu bisa memilih beberapa Bahasa Pemrograman yang bisa diimplementasikan pada ide proyek ini sesuai yang nyaman denganmu.</p>
                        <div class="row pb-3">
                            <div class="col-11">
                                <div class="button mt-3 text-end">
                                    <button class="control-prev btn btn-outline-danger "  type="button" data-bs-target="#carouselExampleControlsss" data-bs-slide="prev">
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
                            <div id="carouselExampleControlsss" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @for ($i=1 ; $i <= count($bahasa_program)/2 ; $i++)
                                        @if($i==1)
                                            <div class="carousel-item active">
                                        @else
                                            <div class="carousel-item">
                                        @endif
                                        <div class="row p-3">
                                            <?php
                                                $a=($i-1)*2;
                                                $b=$a+2;
                                            ?>
                                        @for($j=$a; $j < $b ; $j++)
                                            <div class="col-5 box">
                                                <div class="row content border border-2 border-dark rounded-3 p-4">
                                                    <div class="col">
                                                        <h5>{{$bahasa_program[$j]->nama_bahasa}}</h5>
                                                    </div>
                                                    <div class="col-3">
                                                        <a href="javascript:void();" class="readmore-btn text-end">
                                                            <button class="btn btn-outline-danger" id="click">
                                                                <i id="button-click" class="fas fa-arrow-down"></i>
                                                            </button>
                                                        </a>   
                                                    </div>
                                                    <br>
                                                        <p class="p-3">{{$bahasa_program[$j]->keterangan}}</p> 
                                                </div>
                                            </div>
                                            <div class="col-1"></div>
                                        @endfor
                                            
                                        </div>
                                    </div>
                                @endfor

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end of bahasa program -->
                    
                    <!-- framework -->
                    <div id="framework" class="pt-5">
                        <h4><strong>Framework</strong></h4>
                        <p>Apabila kamu sudah memiliki pengalaman dengan beberapa framework sesuai bahasa program yang kamu kuasai, kamu bisa memilihnya juga.</p>
                        <div class="row pb-3">
                            <div class="col-3">
                                <select class="form-select ps-2 mt-3" aria-label="Default select example">
                                    <option value="1">PHP</option>
                                    <option value="2">Javascript</option>
                                </select>
                            </div>
                            <div class="col-4"></div>
                            <div class="col-4 text-end">
                                <div class="button mt-3 text-end">
                                    <button class="control-prev btn btn-outline-danger "  type="button" data-bs-target="#carouselExampleControlsss1" data-bs-slide="prev">
                                        <span class="fas fa-arrow-left" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="control-next btn btn-outline-danger " type="button" data-bs-target="#carouselExampleControlsss1" data-bs-slide="next">
                                        <span class="fas fa-arrow-right" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div id="carouselExampleControlsss1" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @for ($i=1; $i <= count($framework)/2 ; $i++)
                                        @if($i==1)
                                            <div class="carousel-item active">
                                        @else
                                            <div class="carousel-item">
                                        @endif
                                        <div class="row p-3">
                                            <?php
                                                $a=($i-1)*2;
                                                $b=$a+2;
                                            ?>
                                        @for($j=$a; $j < $b ; $j++)
                                            <div class="col-5 box">
                                                <div class="row content border border-2 border-dark rounded-3 p-4">
                                                    <div class="col">
                                                        <h5>{{$framework[$j]->nama_framework}}</h5>
                                                    </div>
                                                    <div class="col-3">
                                                        <a href="javascript:void();" class="readmore-btn text-end">
                                                            <button class="btn btn-outline-danger" id="click">
                                                                <i id="button-click" class="fas fa-arrow-down"></i>
                                                            </button>
                                                        </a>   
                                                    </div>
                                                    <br>
                                                        <p class="p-3">{{$framework[$j]->keterangan}}</p> 
                                                </div>
                                            </div>
                                            <div class="col-1"></div>
                                        @endfor
                                            
                                        </div>
                                    </div>
                                @endfor

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end of framework -->

                    <!-- database -->
                    <div id="database" class="pt-5">
                        <h4><strong>Database</strong></h4>
                        <p>Apabila kamu sudah memiliki pengalaman dengan beberapa framework sesuai bahasa program yang kamu kuasai, kamu bisa memilihnya juga.</p>
                        <div class="row pb-3">
                            <div class="col-11">
                                <div class="button mt-3 text-end">
                                    <button class="control-prev btn btn-outline-danger"  type="button" data-bs-target="#carouselExampleControlsss2" data-bs-slide="prev">
                                        <span class="fas fa-arrow-left" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="control-next btn btn-outline-danger "  type="button" data-bs-target="#carouselExampleControlsss2" data-bs-slide="next">
                                        <span class="fas fa-arrow-right" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div id="carouselExampleControlsss2" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                @for ($i=1; $i <= count($database_ide)/2 ; $i++)
                                        @if($i==1)
                                            <div class="carousel-item active">
                                        @else
                                            <div class="carousel-item">
                                        @endif
                                        <div class="row p-3">
                                            <?php
                                                $a=($i-1)*2;
                                                $b=$a+2;
                                            ?>
                                        @for($j=$a; $j < $b ; $j++)
                                            <div class="col-5 box">
                                                <div class="row content border border-2 border-dark rounded-3 p-4">
                                                    <div class="col">
                                                        <h5>{{$database_ide[$j]->nama_database}}</h5>
                                                    </div>
                                                    <div class="col-3">
                                                        <a href="javascript:void();" class="readmore-btn text-end">
                                                            <button class="btn btn-outline-danger" id="click">
                                                                <i id="button-click" class="fas fa-arrow-down"></i>
                                                            </button>
                                                        </a>   
                                                    </div>
                                                    <br>
                                                        <p class="p-3">{{$database_ide[$j]->keterangan}}</p> 
                                                </div>
                                            </div>
                                            <div class="col-1"></div>
                                        @endfor
                                            
                                        </div>
                                    </div>
                                @endfor


                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end of database -->

                    <!-- version control -->
                    <div id="version-control" class="pt-5">
                        <h4><strong>Version Control</strong></h4>
                        <p>Apabila kamu sudah memiliki pengalaman dengan beberapa framework sesuai bahasa program yang kamu kuasai, kamu bisa memilihnya juga.</p>
                        <div class="row pb-3">
                            <div class="col-3">
                                <select class="form-select ps-2 mt-3" aria-label="Default select example">
                                    <option value="1">PHP</option>
                                    <option value="2">Javascript</option>
                                </select>
                            </div>
                            <div class="col-4"></div>
                            <div class="col-4 text-end">
                                <div class="button mt-3 text-end">
                                    <button class="control-prev btn btn-outline-danger" type="button" data-bs-target="#carouselExampleControlsss3" data-bs-slide="prev">
                                        <span class="fas fa-arrow-left" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="control-next btn btn-outline-danger"  type="button" data-bs-target="#carouselExampleControlsss3" data-bs-slide="next">
                                        <span class="fas fa-arrow-right" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div id="carouselExampleControlsss3" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                @for ($i=1; $i <= count($version_control)/2 ; $i++)
                                        @if($i==1)
                                            <div class="carousel-item active">
                                        @else
                                            <div class="carousel-item">
                                        @endif
                                        <div class="row p-3">
                                            <?php
                                                $a=($i-1)*2;
                                                $b=$a+2;
                                            ?>
                                        @for($j=$a; $j < $b ; $j++)
                                            <div class="col-5 box">
                                                <div class="row content border border-2 border-dark rounded-3 p-4">
                                                    <div class="col">
                                                        <h5>{{$version_control[$j]->nama_version_control}}</h5>
                                                    </div>
                                                    <div class="col-3">
                                                        <a href="javascript:void();" class="readmore-btn text-end">
                                                            <button class="btn btn-outline-danger" id="click">
                                                                <i id="button-click" class="fas fa-arrow-down"></i>
                                                            </button>
                                                        </a>   
                                                    </div>
                                                    <br>
                                                        <p class="p-3">{{$version_control[$j]->keterangan}}</p> 
                                                </div>
                                            </div>
                                            <div class="col-1"></div>
                                        @endfor
                                            
                                        </div>
                                    </div>
                                @endfor


                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end of version control -->

                </div>

                

            <!-- ulasan ide -->
            <div class="col-3">
                        <div class="row">
                            <h5 class="text-secondary">Ulasan Ide</h5>
                        </div>

                        <br>
                   
                        <div class="row border border-2 border-dark rounded-3 p-3">
                        @foreach($komentar_ide as $ki)
                            <div class="row">
                                <p><i class="fas fa-star"></i> {{$ki->rating}}</p>
                            </div>
                            <div class="row">
                                <h6><b>{{$ki->komentar}}</b></h6>
                            </div>
                            <div class="row">
                                <p>{{$ki->keterangan}}</p>
                            </div>
                            <div class="row pt-3">
                                <div class="col-2">
                                    
                                </div>
                                <div class="col">
                                    <h6><b>{{$ki->user->username}}</b></h6>
                                    <p class="text-secndary">2 Hari Lalu</p>
                                </div>
                            </div>

                            <hr>
                        @endforeach
                        {{$komentar_ide->links()}}
                        </div>
                    </div>
                <!-- end of ulasan ide -->

                </div>
            </div>
            <!-- end of cerita section -->
@endsection
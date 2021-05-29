@extends('layouts.app')

@section('content')
    <br><br><br><br><br>
    <div class="container mt-5">
        <h5 class="{{$ide->kategori->color}}">{{$ide->kategori->nama_kategori}}</h5>
        <div class="row pt-4">
            <div class="col text-start">
                <h3 class="text-dark"><b>{{$ide->judul}}</b></h3>
            </div>
            <div class="col text-end">
                <a href="{{ route('kerjakan2',$ide->id) }}">
                    <button class="btn" style="color:#F67451">
                        <i class="fas fa-arrow-left"></i>
                        Sebelumnya
                    </button>
                </a>
                <span class="pe-2"></span>
                <a href="{{ route('kerjakan4',$ide->id) }}">
                    <button class="btn text-white" style="background-color:#F67451">
                        Selanjutnya
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </a>
            </div>
        </div>
        <div class="row pt-3">
                <ul class="list-inline">
                    <li class="list-inline-item pe-1"> <i class="fas fa-star"></i> {{$ide->rating}}</li>
                    <li class="list-inline-item pe-1"> <i class="fas fa-clock"></i> {{$ide->hari}}</li>
                    <li class="list-inline-item pe-1"> 
                    <div class="border border-2 p-1">
                        <img src="/{{$ide->level->icon}}" style="height:20px" alt="">
                        {{$ide->level->nama_level}}
                    </div>    
                    </li>
                </ul>
            </div>
            <div class="row pt-5">
              
                <ul class="list-inline ">
                    <li class="list-inline-item pe-4 text-dark"><i class="dot"></i><strong> Pilih Teknologi & Tools</strong></li>
                    <li class="list-inline-item pe-4 text-secondary"><hr width="20px" style="border: 1px solid black"></li>
                    <li class="list-inline-item pe-4 text-secondary"> <i class="dot"></i> <strong>Pilih Fitur</strong></li>
                    <li class="list-inline-item pe-4 text-secondary"><hr width="20px" style="border: 1px solid black"></li>
                    <li class="list-inline-item pe-4 text-secondary"> <i class="dot-active"></i><strong> Tentukan Deliverables</strong></li>
                    <li class="list-inline-item pe-4 text-secondary"><hr width="20px" style="border: 1px solid black"></li>
                    <li class="list-inline-item pe-4 text-secondary"> <i class="dot"></i> <strong>Tentukan Jadwal Pengerjaan</strong></li>
                </ul>
            </div>

            <main class="pt-5">
                <div class="row">
                    <div class="col-8">
                        <div class="row">
                            <h3><strong>Tentukan Deliverables</strong></h3>
                            <p>Tentukan diagram proses dan pilihan desain apa saja untuk bisa membantu memberikan gambaran lebih jelas.</p>
                        </div>
                        <div class="row pt-5">
                            <div class="col-3"></div>
                            <div class="col">
                                <h5 class="text-secondary"><span class="text-danger">*</span> Wajib Dipilih</h5>
                            </div>
                        </div>

                        <div class="row pt-3">
                            <div class="col-3">
                                <ul class="list-unstyled">
                                    <li><a href="#diagram-proses">Diagram Proses</a></li>
                                    <br>
                                    <li><a href="#desain">Desain</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <div id="diagram-proses">
                                <h3 class="text-dark"><strong>Flowchart</strong></h3>
                                <p>Untuk bisa memahami keseluruhan alur dari proyek ini, kamu bisa melihat diagram Flowchart yang sudah kami sediakan di bawah ini.</p>

                                <label class="container-radio1">
                                    <div id="flowchart">
                                        <div class="embed p-4 border border-2 border-dark rounded-3">
                                            <div class="row ps-2">
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </div>
                                            <br><br>
                                            <div class="row">
                                                <div class="col"><h5><i class="fas fa-paperclip"></i> Flowchart</h5></div>
                                                <div class="col text-end"><a href="https://drive.google.com/file/d/1iQLrPBDNkmGOvwVVJgaZSTPh3ufEqKpt/view?usp=sharing" style="color:#F67451">Selengkapnya <i class="fas fa-arrow-right"></i></a></div>
                                            </div>
                                            <div class="embed-file pt-3">
                                                <div class="row" style="height:250px">
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        <iframe class="embed-responsive-item" src="https://drive.google.com/file/d/1iQLrPBDNkmGOvwVVJgaZSTPh3ufEqKpt/view?usp=sharing" allowfullscreen width="100%" height="100%"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                                <br><br>                                        
                                <h3 class="text-dark"><strong>Activity Diagram</strong></h3>
                                <p>Selain memahami alur dari proses, kamu juga harus bisa memahami siapa saja yang terlibat dalam proses tersebut dalam Activity Diagram.</p>

                                <label class="container-radio1">
                                    <div id="activity-diagram">
                                        <div class="embed p-4 border border-2 border-dark rounded-3">
                                            <div class="row ps-2">
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </div>
                                            <br><br>
                                            <div class="row">
                                                <div class="col"><h5><i class="fas fa-paperclip"></i> Activity Diagram</h5></div>
                                                <div class="col text-end"><a href="https://drive.google.com/file/d/1iQLrPBDNkmGOvwVVJgaZSTPh3ufEqKpt/view?usp=sharing" style="color:#F67451">Selengkapnya <i class="fas fa-arrow-right"></i></a></div>
                                            </div>
                                            <div class="embed-file pt-3">
                                                <div class="row" style="height:250px">
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        <iframe class="embed-responsive-item" src="https://drive.google.com/file/d/1iQLrPBDNkmGOvwVVJgaZSTPh3ufEqKpt/view?usp=sharing" allowfullscreen width="100%" height="100%"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                                <br><br>                                        
                                <h3 class="text-dark"><strong>ERD</strong></h3>
                                <p>Tabel-tabel yang digunakan dan kolom-kolomnya bisa kamu lihat pada ERD dibawah ini.</p>

                                <label class="container-radio1">
                                    <div id="erd">
                                        <div class="embed p-4 border border-2 border-dark rounded-3">
                                            <div class="row ps-2">
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </div>
                                            <br><br>
                                            <div class="row">
                                                <div class="col"><h5><i class="fas fa-paperclip"></i> ERD</h5></div>
                                                <div class="col text-end"><a href="https://drive.google.com/file/d/1iQLrPBDNkmGOvwVVJgaZSTPh3ufEqKpt/view?usp=sharing" style="color:#F67451">Selengkapnya <i class="fas fa-arrow-right"></i></a></div>
                                            </div>
                                            <div class="embed-file pt-3">
                                                <div class="row" style="height:250px">
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        <iframe class="embed-responsive-item" src="https://drive.google.com/file/d/1iQLrPBDNkmGOvwVVJgaZSTPh3ufEqKpt/view?usp=sharing" allowfullscreen width="100%" height="100%"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                                </div>
                                
                            </div>
                        </div>
                    </div>


                    <!-- Cara Mengerjakan -->
                    <div class="col-1"></div>
                    <div class="col-3">
                        <h5 class="text-secondary">Cara Mengerjakan</h5>
                        <br>
                        <div class="border border-1 border-dark rounded p-3">
                            <div class="row">
                                <div class="col-2">
                                    <h5 class="text-dark">01</h5>
                                </div>
                                <div class="col-10">
                                    <h5 class="text-dark">Pilih Teknologi & Tools</h5>
                                    <p class="text-secondary">
                                    Tentukanlah terlebih dahulu teknologi & tools yang akan kamu gunakan untuk mengerjakan proyek pilihanmu.
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-2">
                                    <h5 class="text-dark">02</h5>
                                </div>
                                <div class="col-10">
                                    <h5 class="text-dark">Pilih Fitur</h5>
                                    <p class="text-secondary">
                                        Tentukan fitur-fitur apa saja yang akan kamu kerjakan                                    
                                    </p>
                                </div>
                            </div>
                                <hr>
                            <div class="row">
                                <div class="col-2">
                                    <h5 class="text-dark">03</h5>
                                </div>
                                <div class="col-10">
                                    <h5 class="text-dark">Tentukan Deliverables</h5>
                                    <p class="text-secondary">
                                        Tentukan diagram proses, dan desain-desain yang akan membantu pengerjaanmu.                                    
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-2">
                                    <h5 class="text-dark">04</h5>
                                </div>
                                <div class="col-10">
                                    <h5 class="text-dark">Tentukan Jadwal Pengerjaan</h5>
                                    <p class="text-secondary">
                                    Atur jadwal pengerjaan sesuai keinginanmu                                    
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
    </div>
    
@endsection
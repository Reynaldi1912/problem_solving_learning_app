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
            <a href="{{ route('kerjakan1',$ide->id) }}">
                <button class="btn" style="color:#F67451">
                    <i class="fas fa-arrow-left"></i>
                    Sebelumnya
                </button>
            </a>

                <span class="pe-2"></span>
                <a href="{{ route('kerjakan3',$ide->id) }}">
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
                    <li class="list-inline-item pe-4 text-secondary"> <i class="dot-active"></i> <strong>Pilih Fitur</strong></li>
                    <li class="list-inline-item pe-4 text-secondary"><hr width="20px" style="border: 1px solid black"></li>
                    <li class="list-inline-item pe-4 text-secondary"> <i class="dot"></i><strong> Tentukan Deliverables</strong></li>
                    <li class="list-inline-item pe-4 text-secondary"><hr width="20px" style="border: 1px solid black"></li>
                    <li class="list-inline-item pe-4 text-secondary"> <i class="dot"></i> <strong>Tentukan Jadwal Pengerjaan</strong></li>
                </ul>
            </div>

            <main class="pt-5">
                <div class="row">
                    <div class="col-8">
                        <h3 class="text-dark"><strong>Pilih Fitur</strong></h3>
                        <p>Tentukan fitur-fitur apa saja yang menurutmu cocok dan bisa diimplementasikan pada proyek ini.</p>

                        <br><br>
                        <p class="text-secondary"><span class="text-danger">*</span> Wajib Dipilih</p>
                        <label class="container-radio1 row">
                            <h4><strong>Fitur Utama</strong><span class="text-danger">*</span></h4>
                            <br>

                            <div class="content border border-2 border-dark rounded-3 p-3">
                                <div class="row">
                                    <div class="row ps-4">
                                        <input type="radio" name="fitur_utama">
                                        <span class="checkmark"></span>
                                    </div>
                                    <br><br>
                                    <div class="row">
                                        <div class="col-9">
                                            <h5><b>Fitur Memilih Tempat Magang</b></h5>
                                        </div>
                                        <div class="col-3 text-secondary text-end">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fas fa-clock"></i></li>
                                                <li class="list-inline-item"><h5> 15 - 30 Hari</h5></li>
                                            </ul> 
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col-10">
                                            <h5><i class="fas fa-check-circle" style="color:green"></i> Menampilkan Informasi Tempat Magang</h5>
                                        </div>
                                        <div class="col-2 text-secondary text-end"><h6> 3 - 5 Hari</h6></div>
                                        <p class="p-body pt-2 text-secondary">Tortor ac cursus pretium ultricies hendrerit porta. Aenean sem mauris consequat ridiculus mi. Praesent odio enim, vel, sed volutpat. Nam ultrices sed duis nisi.
                                            Velit, nibh sem egestas sit urna curabitur leo. Convallis ullamcorper lectus duis magna non ultricies adipiscing odio urna. Neque ut mi blandit eget nulla eget 
                                            pellentesque. Ut urna nunc arcu id tempor.</p>
                                    </div>  

                                    <div class="row pt-3">
                                        <div class="col-10">
                                            <h5><i class="fas fa-check-circle" style="color:green"></i> Menampilkan Informasi Tempat Magang</h5>
                                        </div>
                                        <div class="col-2 text-secondary text-end"><h6> 3 - 5 Hari</h6></div>
                                        <p class="p-body pt-2 text-secondary">Tortor ac cursus pretium ultricies hendrerit porta. Aenean sem mauris consequat ridiculus mi. Praesent odio enim, vel, sed volutpat. Nam ultrices sed duis nisi.
                                            Velit, nibh sem egestas sit urna curabitur leo. Convallis ullamcorper lectus duis magna non ultricies adipiscing odio urna. Neque ut mi blandit eget nulla eget 
                                            pellentesque. Ut urna nunc arcu id tempor.</p>
                                    </div>  

                                    <div class="row pt-3">
                                        <div class="col-10">
                                            <h5><i class="fas fa-check-circle" style="color:green"></i> Menampilkan Informasi Tempat Magang</h5>
                                        </div>
                                        <div class="col-2 text-secondary text-end"><h6> 3 - 5 Hari</h6></div>
                                        <p class="p-body pt-2 text-secondary">Tortor ac cursus pretium ultricies hendrerit porta. Aenean sem mauris consequat ridiculus mi. Praesent odio enim, vel, sed volutpat. Nam ultrices sed duis nisi.
                                            Velit, nibh sem egestas sit urna curabitur leo. Convallis ullamcorper lectus duis magna non ultricies adipiscing odio urna. Neque ut mi blandit eget nulla eget 
                                            pellentesque. Ut urna nunc arcu id tempor.</p>
                                    </div>  
                                </div>
                            </div>
                        </label>

                        <label class="container-radio1 row">
                            <br>
                            <div class="content border border-2 border-dark rounded-3 p-3">
                                <div class="row">
                                    <div class="row ps-4">
                                        <input type="radio" name="fitur_utama">
                                        <span class="checkmark"></span>
                                    </div>
                                    <br><br>
                                    <div class="row">
                                        <div class="col-9">
                                            <h5><b>Fitur Memilih Tempat Magang</b></h5>
                                        </div>
                                        <div class="col-3 text-secondary text-end">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fas fa-clock"></i></li>
                                                <li class="list-inline-item"><h5> 15 - 30 Hari</h5></li>
                                            </ul> 
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col-10">
                                            <h5><i class="fas fa-check-circle" style="color:green"></i> Menampilkan Informasi Tempat Magang</h5>
                                        </div>
                                        <div class="col-2 text-secondary text-end"><h6> 3 - 5 Hari</h6></div>
                                        <p class="p-body pt-2 text-secondary">Tortor ac cursus pretium ultricies hendrerit porta. Aenean sem mauris consequat ridiculus mi. Praesent odio enim, vel, sed volutpat. Nam ultrices sed duis nisi.
                                            Velit, nibh sem egestas sit urna curabitur leo. Convallis ullamcorper lectus duis magna non ultricies adipiscing odio urna. Neque ut mi blandit eget nulla eget 
                                            pellentesque. Ut urna nunc arcu id tempor.</p>
                                    </div>  

                                    <div class="row pt-3">
                                        <div class="col-10">
                                            <h5><i class="fas fa-check-circle" style="color:green"></i> Menampilkan Informasi Tempat Magang</h5>
                                        </div>
                                        <div class="col-2 text-secondary text-end"><h6> 3 - 5 Hari</h6></div>
                                        <p class="p-body pt-2 text-secondary">Tortor ac cursus pretium ultricies hendrerit porta. Aenean sem mauris consequat ridiculus mi. Praesent odio enim, vel, sed volutpat. Nam ultrices sed duis nisi.
                                            Velit, nibh sem egestas sit urna curabitur leo. Convallis ullamcorper lectus duis magna non ultricies adipiscing odio urna. Neque ut mi blandit eget nulla eget 
                                            pellentesque. Ut urna nunc arcu id tempor.</p>
                                    </div>  

                                    <div class="row pt-3">
                                        <div class="col-10">
                                            <h5><i class="fas fa-check-circle" style="color:green"></i> Menampilkan Informasi Tempat Magang</h5>
                                        </div>
                                        <div class="col-2 text-secondary text-end"><h6> 3 - 5 Hari</h6></div>
                                        <p class="p-body pt-2 text-secondary">Tortor ac cursus pretium ultricies hendrerit porta. Aenean sem mauris consequat ridiculus mi. Praesent odio enim, vel, sed volutpat. Nam ultrices sed duis nisi.
                                            Velit, nibh sem egestas sit urna curabitur leo. Convallis ullamcorper lectus duis magna non ultricies adipiscing odio urna. Neque ut mi blandit eget nulla eget 
                                            pellentesque. Ut urna nunc arcu id tempor.</p>
                                    </div>  
                                </div>
                            </div>
                        </label>

                        <label class="container-radio1 row pt-5">
                            <h4><strong>Fitur Tambahan</strong><span class="text-danger">*</span></h4>
                            <br>
                            <div class="content border border-2 border-dark rounded-3 p-3">
                                <div class="row">
                                    <div class="row ps-4">
                                        <input type="radio" name="sub_fitur">
                                        <span class="checkmark"></span>
                                    </div>
                                    <br><br>
                                    <div class="row">
                                        <div class="col-9">
                                            <h5><b>Fitur Memilih Tempat Magang</b></h5>
                                        </div>
                                        <div class="col-3 text-secondary text-end">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fas fa-clock"></i></li>
                                                <li class="list-inline-item"><h5> 15 - 30 Hari</h5></li>
                                            </ul> 
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col-10">
                                            <h5><i class="fas fa-check-circle" style="color:green"></i> Menampilkan Informasi Tempat Magang</h5>
                                        </div>
                                        <div class="col-2 text-secondary text-end"><h6> 3 - 5 Hari</h6></div>
                                        <p class="p-body pt-2 text-secondary">Tortor ac cursus pretium ultricies hendrerit porta. Aenean sem mauris consequat ridiculus mi. Praesent odio enim, vel, sed volutpat. Nam ultrices sed duis nisi.
                                            Velit, nibh sem egestas sit urna curabitur leo. Convallis ullamcorper lectus duis magna non ultricies adipiscing odio urna. Neque ut mi blandit eget nulla eget 
                                            pellentesque. Ut urna nunc arcu id tempor.</p>
                                    </div>  

                                    <div class="row pt-3">
                                        <div class="col-10">
                                            <h5><i class="fas fa-check-circle" style="color:green"></i> Menampilkan Informasi Tempat Magang</h5>
                                        </div>
                                        <div class="col-2 text-secondary text-end"><h6> 3 - 5 Hari</h6></div>
                                        <p class="p-body pt-2 text-secondary">Tortor ac cursus pretium ultricies hendrerit porta. Aenean sem mauris consequat ridiculus mi. Praesent odio enim, vel, sed volutpat. Nam ultrices sed duis nisi.
                                            Velit, nibh sem egestas sit urna curabitur leo. Convallis ullamcorper lectus duis magna non ultricies adipiscing odio urna. Neque ut mi blandit eget nulla eget 
                                            pellentesque. Ut urna nunc arcu id tempor.</p>
                                    </div>  

                                    <div class="row pt-3">
                                        <div class="col-10">
                                            <h5><i class="fas fa-check-circle" style="color:green"></i> Menampilkan Informasi Tempat Magang</h5>
                                        </div>
                                        <div class="col-2 text-secondary text-end"><h6> 3 - 5 Hari</h6></div>
                                        <p class="p-body pt-2 text-secondary">Tortor ac cursus pretium ultricies hendrerit porta. Aenean sem mauris consequat ridiculus mi. Praesent odio enim, vel, sed volutpat. Nam ultrices sed duis nisi.
                                            Velit, nibh sem egestas sit urna curabitur leo. Convallis ullamcorper lectus duis magna non ultricies adipiscing odio urna. Neque ut mi blandit eget nulla eget 
                                            pellentesque. Ut urna nunc arcu id tempor.</p>
                                    </div>  
                                </div>
                            </div>
                        </label>
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
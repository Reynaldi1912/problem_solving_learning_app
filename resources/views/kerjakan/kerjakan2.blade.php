@extends('layouts.app')

@section('content')
     <br><br><br><br><br>
     @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ada Yang Belum Kamu Isi.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}(Belum Diisi)</li>
                    @endforeach
                </ul>
            </div>
    @endif
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
            <form method="post" action="{{ route('fitur.store',$ide->id) }}" enctype="multipart/form-data">
            @csrf

            <span class="pe-2"></span>
                <a href="{{ route('kerjakan3',$ide->id) }}">
                    <button class="btn text-white" type="submit" style="background-color:#F67451">
                        Selanjutnya
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </a>
            </div>
        </div>
        <div class="row pt-3">
                <ul class="list-inline">
                    <li class="list-inline-item pe-1"> <i class="fas fa-star"></i> {{$ide->rating}}</li>
                    <li class="list-inline-item pe-1"> <i class="fas fa-clock"></i> {{$ide->hari}} Hari</li>
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
                    <li class="list-inline-item pe-4 text-secondary"><i class="dot"></i><strong> Pilih Teknologi & Tools</strong></li>
                    <li class="list-inline-item pe-4 text-secondary"><hr width="20px" style="border: 1px solid black"></li>
                    <li class="list-inline-item pe-4 text-dark"> <i class="dot-active"></i> <strong>Pilih Fitur</strong></li>
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
                        <h4><strong>Fitur Utama</strong><span class="text-danger">*</span></h4>

                       
                        @foreach($fitur as $fitur)
                            @if($fitur->isUtama=="0")
                        <label class="container-radio1 row">
                            <br>
                            <div class="content border border-2 border-dark rounded-3 p-3">
                                <div class="row">
                                    <div class="row ps-4">
                                    @foreach($cek1 as $c)
                                        @if($c->users_id == $user->id && $c->ide_id == $ide->id)
                                        <input type="radio" name="fitur_utama_id" value="{{$fitur->id}}" {{$fitur->id == $validation->fitur_utama_id ? 'checked' : ''}}>
                                        @else
                                        <input type="radio" name="fitur_utama_id" value="{{$fitur->id}}">
                                        @endif
                                    @endforeach
                                    <span class="checkmark"></span>

                                    </div>
                                    <br><br>
                                    <div class="row">
                                        <div class="col-9">
                                            <h5><b>{{$fitur->nama}}</b></h5>
                                        </div>
                                        <div class="col-3 text-secondary text-end">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fas fa-clock"></i></li>
                                                <li class="list-inline-item"><h5> {{$fitur->estimasi_waktu}} Hari</h5></li>
                                            </ul> 
                                        </div>
                                    </div>
                                    @foreach($sub_fitur as $sb)
                                        @if($sb->fitur_id==$fitur->id)
                                            <div class="row pt-3">
                                                <div class="col-10">
                                                    <h5><i class="fas fa-check-circle" style="color:green"></i> {{$sb->nama}}</h5>
                                                </div>
                                            <div class="col-2 text-secondary text-end"><h6>  {{$sb->estimasi_waktu}} Hari</h6></div>
                                            <p class="p-body pt-2 text-secondary"> {{$sb->deskripsi}}</p>
                                    </div>
                                        @endif  
                                    @endforeach   
                                </div>
                            </div>
                        </label>
                        @endif
                        @endforeach
                        <br><br>
                        <h4><strong>Fitur Tambahan</strong><span class="text-danger">*</span></h4>
                            <br>
                           
                        @foreach($fitur_tambahan as $ft)
                                @if($ft->isUtama=="1")
                        <label class="container-radio1 row pt-5">
                            <div class="content border border-2 border-dark rounded-3 p-3">
                                <div class="row">
                                    <div class="row ps-4">
                                    @foreach($cek1 as $c)
                                        @if($c->users_id == $user->id && $c->ide_id == $ide->id)
                                        <input type="radio" name="sub_fitur_id" value="{{$ft->id}}" {{$ft->id == $validation->fitur_tambahan_id ? 'checked' : ''}}>
                                        @else
                                        <input type="radio" name="sub_fitur_id" value="{{$ft->id}}">
                                        @endif
                                    @endforeach
                                   
                                        <span class="checkmark"></span>
                                    </div>
                                    <br><br>
                                    <div class="row">
                                        <div class="col-9">
                                            <h5><b>{{$ft->nama}}</b></h5>
                                        </div>
                                        <div class="col-3 text-secondary text-end">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fas fa-clock"></i></li>
                                                <li class="list-inline-item"><h5> {{$ft->estimasi_waktu}} Hari</h5></li>
                                            </ul> 
                                        </div>
                                    </div>
                                    <?php
                                    $length=count($ft->sub_fitur);
                                        ?>
                                    @for ($i=0; $i < $length ; $i++)
                                    <div class="row pt-3">
                                        <div class="col-10">
                                            <h5><i class="fas fa-check-circle" style="color:green"></i> {{$ft->sub_fitur[$i]->nama}}</h5>
                                        </div>
                                        <div class="col-2 text-secondary text-end"><h6> {{$ft->sub_fitur[$i]->estimasi_waktu}} Hari</h6></div>
                                        <p class="p-body pt-2 text-secondary">{{$ft->sub_fitur[$i]->deskripsi}}</p>
                                    </div>  
                                    @endfor 
                                </div>
                            </div>
                        </label>
                        @endif
                        @endforeach
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
        </form>

    </div>
    
@endsection
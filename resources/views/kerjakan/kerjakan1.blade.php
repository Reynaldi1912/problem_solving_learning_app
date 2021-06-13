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
                <button class="btn" style="color:#F67451">
                    <i class="fas fa-arrow-left"></i>
                    Sebelumnya
                </button>
                <span class="pe-2"></span>
                <form method="post" action="{{ route('teknologi.store',$ide->id) }}" enctype="multipart/form-data">
                @csrf
                <a href="{{ route('kerjakan2',$ide->id) }}">
                    <button class="btn text-white" type="submit" style="background-color:#F67451">
                        Selanjutnya
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </a>
            </div>
        </div>
            <div class="row pt-3">
                <ul class="list-inline">
                    <li class="list-inline-item pe-1"> <i class="fas fa-star"></i>  {{$ide->rating}}</li>
                    <li class="list-inline-item pe-1"> <i class="fas fa-clock"></i>  {{$ide->hari}} Hari</li>
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
                    <li class="list-inline-item pe-4 text-dark"><i class="dot-active"></i><strong> Pilih Teknologi & Tools</strong></li>
                    <li class="list-inline-item pe-4 text-secondary"><hr width="20px" style="border: 1px solid black"></li>
                    <li class="list-inline-item pe-4 text-secondary"> <i class="dot"></i> <strong>Pilih Fitur</strong></li>
                    <li class="list-inline-item pe-4 text-secondary"><hr width="20px" style="border: 1px solid black"></li>
                    <li class="list-inline-item pe-4 text-secondary"> <i class="dot"></i><strong> Tentukan Deliverables</strong></li>
                    <li class="list-inline-item pe-4 text-secondary"><hr width="20px" style="border: 1px solid black"></li>
                    <li class="list-inline-item pe-4 text-secondary"> <i class="dot"></i> <strong>Tentukan Jadwal Pengerjaan</strong></li>
                </ul>
            </div>

            <main class="pt-5">
                <div class="row">
                    <div class="col-8">
                        <h3 class="text-dark"><strong>Pilih Teknologi & Tools</strong></h3>
                        <p>Tentukanlah terlebih dahulu teknologi & tools yang akan kamu gunakan untuk mengerjakan proyek ini.</p>

                        <br><br>
                        <p class="text-secondary"><span class="text-danger">*</span> Wajib Dipilih</p>
                        <div class="content row pb-5">
                            <h4 class="text-dark pb-4">Bahasa Program <span class="text-danger">*</span></h4>
                            @foreach($bahasa_program as $bp)
                            <div class="col boxx pe-5">
                                <label class="container-radio">
                                    <div class="row content border border-2 border-dark rounded-3 p-3 not-Show">
                                        <div class="col-2 pt-2">
                                        @foreach($cek_1 as $c)
                                            @if($c->users_id == $user->id && $c->ide_id == $ide->id)
                                                <input type="radio" name="bahasa-program" value="{{$bp->nama_bahasa}}" {{$bp->nama_bahasa == $validation->bahasa_program ? 'checked' : ''}}>
                                            @else
                                                <input type="radio" name="bahasa-program" value="{{$bp->nama_bahasa}}">
                                            @endif
                                        @endforeach
                                            <span class="checkmark"></span>
                                        </div>
                                        <div class="col text-center pt-2">
                                            <h5>{{$bp->nama_bahasa}}</h5>
                                        </div>
                                        <div class="col-3 ps-1">
                                            <a href="javascript:void();" class="readmore-btn1 text-end">
                                                <button class="btn btn-outline-danger" id="click1">
                                                    <i id="button-click1" class="fas fa-arrow-down text-center"></i>
                                                </button>
                                            </a>   
                                        </div>
                                        <br>
                                            <p class="keterangan1 p-3 d-none">{{$bp->keterangan}}</p> 
                                    </div>
                                </label>
                            </div>
                            @endforeach    
                        </div>

                        <div class="content row pb-5">
                            <h4 class="text-dark pb-4">Framework <span class="text-danger">*</span></h4>
                            @foreach($framework as $fm)
                            <div class="col boxx pe-5">
                                <label class="container-radio">
                                    <div class="row content border border-2 border-dark rounded-3 p-3 not-Show">
                                        <div class="col-2 pt-2">
                                        @foreach($cek_2 as $c)
                                            @if($c->users_id == $user->id && $c->ide_id == $ide->id)
                                            <input type="radio" name="framework" value="{{$fm->nama_framework}}"{{$fm->nama_framework == $validation->framework ? 'checked' : ''}}>
                                            @else
                                            <input type="radio" name="framework" value="{{$fm->nama_framework}}" >
                                            @endif
                                        @endforeach
                                            <span class="checkmark"></span>
                                        </div>
                                        <div class="col text-center pt-2">
                                            <h5>{{$fm->nama_framework}}</h5>
                                        </div>
                                        <div class="col-3 ps-1">
                                            <a href="javascript:void();" class="readmore-btn1 text-end">
                                                <button class="btn btn-outline-danger" id="click1">
                                                    <i id="button-click1" class="fas fa-arrow-down text-center"></i>
                                                </button>
                                            </a>   
                                        </div>
                                        <br>
                                            <p class="keterangan1 p-3 d-none">{{$fm->keterangan}}</p> 
                                    </div>
                                </label>
                            </div>
                            @endforeach
                        </div>
                            
                        <div class="content row pb-5">
                            <h4 class="text-dark pb-4">Database <span class="text-danger">*</span></h4>
                            @foreach($database_ide as $di)
                            <div class="col boxx pe-5">
                                <label class="container-radio">
                                    <div class="row content border border-2 border-dark rounded-3 p-3 not-Show">
                                        <div class="col-2 pt-2">
                                        @foreach($cek_3 as $c)
                                            @if($c->users_id == $user->id && $c->ide_id == $ide->id)
                                            <input type="radio" name="database_ide" value="{{$di->nama_database}}" {{$di->nama_database == $validation->database_ide ? 'checked' : ''}}>
                                            @else
                                            <input type="radio" name="database_ide" value="{{$di->nama_database}}">
                                            @endif
                                        @endforeach
                                            <span class="checkmark"></span>
                                        </div>
                                        <div class="col text-center pt-2 text-line">
                                            <h5>{{$di->nama_database}}</h5>
                                        </div>
                                        <div class="col-3 ps-1">
                                            <a href="javascript:void();" class="readmore-btn1 text-end">
                                                <button class="btn btn-outline-danger" id="click1">
                                                    <i id="button-click1" class="fas fa-arrow-down text-center"></i>
                                                </button>
                                            </a>   
                                        </div>
                                        <br>
                                            <p class="keterangan1 p-3 d-none">{{$di->keterangan}}</p> 
                                    </div>
                                </label>
                            </div>
                            @endforeach
                        </div>

                        <div class="content row pb-5">
                            <h4 class="text-dark pb-4">Version Control <span class="text-danger">*</span></h4>
                            @foreach($version_control as $vc)

                            <div class="col boxx pe-5">
                                <label class="container-radio">
                                    <div class="row content border border-2 border-dark rounded-3 p-3 not-Show">
                                        <div class="col-2 pt-2">
                                        @foreach($cek_4 as $c)
                                            @if($c->users_id == $user->id && $c->ide_id == $ide->id)
                                            <input type="radio" name="version_control" value="{{$vc->nama_version_control}}" {{$vc->nama_version_control == $validation->version_control ? 'checked' : ''}}>
                                            @else
                                            <input type="radio" name="version_control" value="{{$vc->nama_version_control}}">
                                            @endif
                                        @endforeach
                                            <span class="checkmark"></span>
                                        </div>
                                        <div class="col text-center pt-2 text-line">
                                            <h5>{{$vc->nama_version_control}}</h5>
                                        </div>
                                        <div class="col-3 ps-1">
                                            <a href="javascript:void();" class="readmore-btn1 text-end">
                                                <button class="btn btn-outline-danger" id="click1">
                                                    <i id="button-click1" class="fas fa-arrow-down text-center"></i>
                                                </button>
                                            </a>   
                                        </div>
                                        <br>
                                            <p class="keterangan1 p-3 d-none">{{$vc->keterangan}}</p> 
                                    </div>
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
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
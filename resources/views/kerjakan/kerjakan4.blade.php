@extends('layouts.app')

@section('content')
    <br><br><br><br><br>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Ada Yang Belum Kamu Isi .<br><br>
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
                <a href="{{ route('kerjakan3',$ide->id) }}">
                    <button class="btn" style="color:#F67451">
                        <i class="fas fa-arrow-left"></i>
                        Sebelumnya
                    </button>
                </a>
                <span class="pe-2"></span>
                <button class="btn text-white" style="background-color:#F67451"  data-bs-toggle="modal" data-bs-target="#kerjakanAtas">
                        Kerjakan
                        <i class="fas fa-arrow-right"></i>
                    </button>
                <form method="post" action="{{ route('jadwal.store',$ide->id) }}" enctype="multipart/form-data">
                @csrf
                   
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
                    <li class="list-inline-item pe-4 text-secondary"> <i class="dot"></i> <strong>Pilih Fitur</strong></li>
                    <li class="list-inline-item pe-4 text-secondary"><hr width="20px" style="border: 1px solid black"></li>
                    <li class="list-inline-item pe-4 text-secondary"> <i class="dot"></i><strong> Tentukan Deliverables</strong></li>
                    <li class="list-inline-item pe-4 text-secondary"><hr width="20px" style="border: 1px solid black"></li>
                    <li class="list-inline-item pe-4 text-dark"> <i class="dot-active"></i> <strong>Tentukan Jadwal Pengerjaan</strong></li>
                </ul>
            </div>


            <main class="pt-5">
                <div class="row">
                    <div class="col-8">
                        <h4 class="text-dark"><strong>Tentukan Jadwal Pengerjaan</strong></h4>
                        <p>Tentukan jadwal pengerjaan sesuai keinginan dan kenyamanannmu untuk setiap fitur-fitur yang disediakan.</p>

                        <div class="border border-2 border-dark rounded-3 p-3">
                            <label class="container-radio1 row formset">
                                <br>
                                <div class="content">
                                    <div class="row">
                                        <div class="row ps-4">
                                             
                                        <input type="radio" name="fitur_utama_id" value="Yes" class="aboveage2">
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
                                        <?php
                                            $total = count($fitur->sub_fitur);
                                            
                                        ?>
                                        @for($i=0 ; $i<$total ;$i++)
                                        <div class="row pt-3">
                                            <div class="col-10">
                                                <h5><i class="fas fa-check-circle" style="color:green"></i> {{$fitur->sub_fitur[$i]->nama}}</h5>
                                            </div>
                                            <div class="col-2 text-secondary text-end">
                                                <h6>  {{$fitur->sub_fitur[$i]->estimasi_waktu}} Hari</h6></div>
                                                <p class="p-body pt-2 text-secondary"> {{$fitur->sub_fitur[$i]->deskripsi}}</p>
                                            </div>
                                        @endfor
                                        </div>
                                </div>
                            </label>
                            <br><br>
                                <hr>
                            <br><br>
                            <p>Tanggal Mulai</p>
                            <?php
                                $date_now = date("Y-m-d");
                            ?>
                            <input type="date" class="rounded border border-secondary p-2" placeholder="dd-mm-yyyy" name="tanggal_mulai" min="{{$date_now}}" max="2021-12-30">
                            <br><br>
                            <p>Hari Pengerjaan</p>
                            <table>
                                <div class="hari">
                                    <label>
                                        <input type="checkbox" name="senin" value="0">
                                        <span><i class="fas fa-calendar-alt"></i> Senin</span>
                                    </label>
                                    <label>
                                        <input type="checkbox" name="selasa" value="0">
                                        <span><i class="fas fa-calendar-alt"></i> Selasa</span>
                                    </label>
                                    <label>
                                        <input type="checkbox" name="rabu" value="0">
                                        <span><i class="fas fa-calendar-alt"></i> Rabu</span>
                                    </label>
                                    <label>
                                        <input type="checkbox" name="kamis" value="0">
                                        <span><i class="fas fa-calendar-alt"></i> Kamis</span>
                                    </label>
                                    <label>
                                        <input type="checkbox" name="jumat" value="0">
                                        <span><i class="fas fa-calendar-alt"></i> Jumat</span>
                                    </label>
                                    <label>
                                        <input type="checkbox" name="sabtu" value="0">
                                        <span><i class="fas fa-calendar-alt"></i> Sabtu</span>
                                    </label>
                                    <label>
                                        <input type="checkbox" name="minggu" value="0">
                                        <span><i class="fas fa-calendar-alt"></i> Minggu</span>
                                    </label>
                                </div>
                            </table>

                            <table>
                                <ul class="list-unstyled">
                                    <li>
                                        <input type="checkbox" name="seninjumat">
                                        <span> Senin - Jumat</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="sabtuminggu">
                                        <span> Sabtu,Minggu</span> 
                                    </li>
                                    <li>
                                        <input type="checkbox" name="setiaphari">
                                        <span> Setiap Hari</span>
                                    </li>
                                </ul>
                            </table>
                            <table>
                                <span> Estimasi Waktu/Hari</span><br>
                                <select class="form-select ps-2 col-xs-2" aria-label="Default select example" name="estimasi_waktu">
                                    <option selected>Pilih Jam</option>
                                    <option value="1">1 Jam</option>
                                    <option value="3">3 Jam</option>
                                    <option value="5">5 Jam</option>
                                    <option value="8">8 Jam</option>
                                </select>
                            </table>
                            </div>


                        <!-- Modal -->
            <div class="modal fade" id="kerjakanAtas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Action</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda Yakin Ingin Melanjutkan Mengerjakan ? Pilihan anda tidak dapat dirubah setelah menekan tombol <strong>kerjakan</strong> </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Kerjakan</button>
                </div>
                </div>
            </div>
            </div>
                   
                        <br>
                       
                        <div class="border border-2 border-dark rounded-3 p-3">
                            <label class="container-radio1 row formset">
                                <br>
                                <div class="content">
                                    <div class="row">
                                        <div class="row ps-4">
                                            <input type="radio" name="fitur_utama_id" value="No" class="aboveage2"/>
                                            <span class="checkmark"></span>
                                            <div class="row mt-5">
                                                <h4>Tentukan Jadwal Sendiri</h4>
                                            </div>
                                        </div>                                           
                                    </div>
                                </div>
                            </label>
                            <fieldset></p>
                                <ol id="parent2" class="formset">
                                    <div class="row">
                                        <div class="col">
                                            <h4>{{$fitur->nama}}</h4>
                                        </div>
                                        <div class="col-3 text-end">
                                            <p class="text-secondary">Total Hari Pengerjaan</p>
                                            <select class="form-select ps-2 col-xs-2" aria-label="Default select example" name="estimasi_waktu2">
                                                <option value="1" selected>15 Hari</option>
                                                <option value="3">20 Hari</option>
                                                <option value="5">25 Hari</option>
                                                <option value="8">30 Hari</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br><br>
                                        <?php
                                            $total = count($fitur->sub_fitur);
                                        ?>
                                        <input type="hidden" value="{{$fitur->id}}" name="fitur_id">
                                        <input type="hidden" name ="total" value="{{$total}}">
                                        @for($i=0 ; $i<$total ;$i++)
                                        <div class="row pt-3">
                                            <div class="col-10">
                                            <input type="hidden" value="{{$fitur->sub_fitur[$i]->id}}" name="sub_fitur_{{$i}}">
                                                <h5><i class="fas fa-check-circle" style="color:green"></i> {{$fitur->sub_fitur[$i]->nama}}</h5>
                                            </div>
                                            <div class="col-2 text-secondary text-end">
                                                <input type="number" min="1" max="30" placeholder="Hari" name="hari_{{$i}}">
                                            </div>
                                                <p class="p-body pt-2 text-secondary"> {{$fitur->sub_fitur[$i]->deskripsi}}</p>
                                            </div>
                                        @endfor


                                        <div class="row pt-5">
                                        <div class="col">
                                            <h4>{{$fitur_tambahan->nama}}</h4>
                                        </div>
                                        <div class="col-3 text-end">
                                            <p class="text-secondary">Total Hari Pengerjaan</p>
                                            <select class="form-select ps-2 col-xs-2" aria-label="Default select example" name="estimasi_waktu2">
                                                <option selected>Pilih Hari</option>
                                                <option value="1">15 Har</option>
                                                <option value="3">20 Hari</option>
                                                <option value="5">25 Hari</option>
                                                <option value="8">30 Hari</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br><br>
                                        <?php
                                            $total1 = count($fitur_tambahan->sub_fitur);
                                            
                                        ?>
                                        <input type="hidden" value="{{$fitur_tambahan->id}}" name="fitur_tambahan_id">
                                        <input type="hidden" value="{{$total1}}" name="total1">
                                        @for($i=0 ; $i<$total1 ;$i++)
                                        <div class="row pt-3">
                                            <div class="col-8">
                                                <h5><i class="fas fa-check-circle" style="color:green"></i> {{$fitur_tambahan->sub_fitur[$i]->nama}}</h5>
                                                <input type="hidden" value="{{$fitur_tambahan->sub_fitur[$i]->id}}" name="sub_fitur_tambahan_{{$i}}">
                                            </div>
                                            <div class="col-4 text-secondary text-end">
                                               <input type="number" min="1" max="30" placeholder="Hari" name="hari_tambahan_{{$i}}">
                                            </div>
                                                <p class="p-body pt-2 text-secondary"> {{$fitur_tambahan->sub_fitur[$i]->deskripsi}}</p>
                                        </div>
                                        @endfor
                                    </ol>
                                </fieldset>
                            </div>
                        </div>
                    </form>


                    <!-- Cara Mengerjakan -->
                    <div class="col-1">
                        
                    </div>
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
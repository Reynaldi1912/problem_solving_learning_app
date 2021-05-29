@extends('layouts.detail')

@section('content-detail')

<!-- cerita section  -->
    <div class="container">
        <div class="row">
    

    <!-- cerita ide dan tantangan -->
            <div id="fitur" class="col-9 p-body">
                <h4><strong>Fitur Utama</strong></h4>
                <p>Fitur-fitur utama yang harus dimiliki sistem untuk bisa mencapai Minimum Viable Product(MVP) sesuai dengan tujuan dari ide proyek.
                    Kamu ditantang untuk bisa menyelesaikan fitur-fitur ini ketika kamu memilihnya nanti.</p>

                    @foreach($fitur as $fitur)
                        @if($fitur->isUtama=="0")
                            <div class="content border border-2 border-dark rounded-3 p-3">
                                <div class="row">
                                    <div class="row text-secondary">
                                        <p>FITUR UTAMA</p>
                                    </div>
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
                        @endif
                        <br>

                    @endforeach
                
               <div class="fitur-tambahan mt-5">
                    <h4><strong>Fitur Tambahan</strong></h4>
                    <p>Fitur-fitur utama yang harus dimiliki sistem untuk bisa mencapai Minimum Viable Product(MVP) sesuai dengan tujuan dari ide proyek.
                        Kamu ditantang untuk bisa menyelesaikan fitur-fitur ini ketika kamu memilihnya nanti.</p>
                @foreach($fitur_tambahan as $ft)
                    @if($ft->id==$sb->fitur_id)
                    <div class="content border border-2 border-dark rounded-3 p-3">
                        <div class="row">
                            <div class="row text-secondary">
                                <p>FITUR TAMBAHAN</p>
                            </div>
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
                    <br>
                </div>
                @endif
                @endforeach
            </div>
        
    <!-- end of cerita ide -->

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

@extends('layouts.detail')

@section('content-detail')
        <!-- cerita section  -->
            <div class="container">
                <div class="row">
            
            <!-- sidebar  -->
                    <div class="col-2">
                    <ul class="list-unstyled">
                            <li class="pb-3"><a href="#wireframe">Wireframe</a></li>
                            <li class="pb-3"><a href="#komponen-desain">Komponen Desain</a></li>
                            <li class="pb-3"><a href="#ui-desain">UI Desain</a></li>
                    </ul>
                    </div>
            <!-- -end of side bar -->

            <!-- wireframe -->
            <div class="col-6">
                <div id="wireframe">
                    <h4><strong>Wireframe</strong></h4>
                    <p>Gambaran kasar mengenai tampilan dari ide proyek ini bisa kamu lihat pada Wireframe di bawah.</p>
                    <div class="embed p-4 border border-2 border-dark rounded-3">
                        <div class="row">
                            <div class="col"><h5><b><i class="fas fa-paperclip"></i> Wireframe</b></h5></div>
                            <div class="col text-end"><a href="{{$wireframe->link}}" style="color:#F67451">Selengkapnya <i class="fas fa-arrow-right"></i></a></div>
                        </div>
                        <div class="embed-file pt-3">
                            <div class="row" style="height:250px">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{{$wireframe->link}}" allowfullscreen width="100%" height="100%"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- end of wireframe-->

            <!-- komponen desain -->
                <div id="komponen-desain" class="pt-5">
                    <h4><strong>Komponen Desain</strong></h4>
                    <p>Kamu juga bisa menggunakan komponen desain dan merangkainya menjadi tampilan sesuai keinginanmu.</p>
                    <div class="embed p-4 border border-2 border-dark rounded-3">
                        <div class="row">
                            <div class="col"><h5><b><i class="fas fa-paperclip"></i> Komponen Desain</b></h5></div>
                            <div class="col text-end"><a href="{{$komponen_desain->link}}" style="color:#F67451">Selengkapnya <i class="fas fa-arrow-right"></i></a></div>
                        </div>
                        <div class="embed-file pt-3">
                            <div class="row" style="height:250px">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{{$komponen_desain->link}}" allowfullscreen width="100%" height="100%"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of komponen desain -->

                <!-- ui desain -->
                <div id="ui-desain" class="pt-5">
                    <h4><strong>UI Desain</strong></h4>
                    <p>Jika kamu ingin langsung mulai ngoding tanpa memusingkan tampilan, kamu bisa pakai UI Design ini.</p>
                    <div class="embed p-4 border border-2 border-dark rounded-3">
                        <div class="row">
                            <div class="col"><h5><b><i class="fas fa-paperclip"></i> Ui Desain</b></h5></div>
                            <div class="col text-end"><a href="{{$ui_desain->link}}" style="color:#F67451">Selengkapnya <i class="fas fa-arrow-right"></i></a></div>
                        </div>
                        <div class="embed-file pt-3">
                            <div class="row" style="height:250px">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{{$ui_desain->link}}" allowfullscreen width="100%" height="100%"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of ui-desain -->

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
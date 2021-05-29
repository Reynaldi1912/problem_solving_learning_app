@extends('layouts.detail')

@section('content-detail')
      
        <!-- cerita section  -->
            <div class="container">
                <div class="row">
            
            <!-- sidebar  -->
                    <div class="col-2">
                    <ul class="list-unstyled">
                            <li class="pb-3"><a href="#flowchart">Flowchart</a></li>
                            <li class="pb-3"><a href="#activity-diagram">Activity Diagram</a></li>
                            <li class="pb-3"><a href="#erd">ERD</a></li>
                    </ul>
                    </div>
            <!-- -end of side bar -->

            <!-- flowchart -->
            <div class="col-6">
                <div id="flowchart">
                    <h4><strong>Flowchart</strong></h4>
                    <p>Untuk bisa memahami keseluruhan alur dari proyek ini, kamu bisa melihat diagram Flowchart yang sudah kami sediakan di bawah ini.</p>
                    <div class="embed p-4 border border-2 border-dark rounded-3">
                        <div class="row">
                            <div class="col"><h5><b><i class="fas fa-paperclip"></i> Flowchart</b></h5></div>
                            <div class="col text-end"><a href="{{$flowchart->link}}" style="color:#F67451">Selengkapnya <i class="fas fa-arrow-right"></i></a></div>
                        </div>
                        <div class="embed-file pt-3">
                            <div class="row" style="height:250px">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{{$flowchart->link}}" allowfullscreen width="100%" height="100%"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- end of flowchart-->

            <!-- activity diagram -->
                <div id="activity-diagram" class="pt-5">
                    <h4><strong>Activity Diagram</strong></h4>
                    <p>Selain memahami alur dari proses, kamu juga harus bisa memahami siapa saja yang terlibat dalam proses tersebut dalam Activity Diagram.</p>
                    <div class="embed p-4 border border-2 border-dark rounded-3">
                        <div class="row">
                            <div class="col"><h5><b><i class="fas fa-paperclip"></i> Activity Diagram</b></h5></div>
                            <div class="col text-end"><a href="{{$activity_diagram->link}}" style="color:#F67451">Selengkapnya <i class="fas fa-arrow-right"></i></a></div>
                        </div>
                        <div class="embed-file pt-3">
                            <div class="row" style="height:250px">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{{$activity_diagram->link}}" allowfullscreen width="100%" height="100%"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of activity diagram -->

                <!-- ERD -->
                <div id="erd" class="pt-5">
                    <h4><strong>ERD</strong></h4>
                    <p>Tabel-tabel yang digunakan dan kolom-kolomnya bisa kamu lihat pada ERD dibawah ini.</p>
                    <div class="embed p-4 border border-2 border-dark rounded-3">
                        <div class="row">
                            <div class="col"><h5><b><i class="fas fa-paperclip"></i> ERD</b></h5></div>
                            <div class="col text-end"><a href="{{$erd->link}}" style="color:#F67451">Selengkapnya <i class="fas fa-arrow-right"></i></a></div>
                        </div>
                        <div class="embed-file pt-3">
                            <div class="row" style="height:250px">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{{$erd->link}}" allowfullscreen width="100%" height="100%"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of ERD -->

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
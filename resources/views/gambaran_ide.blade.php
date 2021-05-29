@extends('layouts.detail')

@section('content-detail')

        <!-- cerita section  -->
            <div class="container">
                <div class="row">
            
            </nav> 
                    <div class="col-1">
                    <ul class="list-unstyled">
                            <li><a href="#cerita">Cerita</a></li>
                            <li><a href="#tantangan">Fitur</a></li>
                    </ul>
                    </div>
            <!-- -end of side bar -->

            <!-- cerita ide dan tantangan -->
                    <div id="cerita" class="col-8 pe-5">
                        <h4><strong>{{$gambaran_ide->judul}}</strong></h4>
                        <br>
                        <img src="/assets/img/cerita.png"  class="img-fluid" alt="">
                        <br><br>
                        <p>{{$gambaran_ide->keterangan}}</p>

                        <br>
                        <h4><strong>Tantangan</strong></h4>
                        <br>

                        <?php
                        $x =1;
                        ?>
                        @foreach ($tantangan as $tantangan)
                        <div id="tantangan" class=" box border border-2 border-dark rounded-3 p-4">
                            <div class="row">
                                <div class="col-11">
                                    <h5 class="text-secondary">TANTANGAN 
                                    <?php
                                        echo "$x";
                                    ?>
                                    </h5>
                                </div>
                                <div class="col-1">
                                    <a href="javascript:void();" class="readmore-btn text-end">
                                        <button class="btn btn-outline-danger"  id="click">
                                            <i id="button-click" class="fas fa-arrow-down"></i>
                                        </button>
                                    </a>   
                                </div>
                                <div class="col-12">    
                                    <h5>{{$tantangan->judul_tantangan}}</h5>
                                </div>
                                    <p>{{$tantangan->keterangan}}</p> 
                            </div> 
                        </div>
                        <br>
                        <?php
                            $x++;
                        ?>
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
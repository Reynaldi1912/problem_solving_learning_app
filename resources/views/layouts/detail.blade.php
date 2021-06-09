@extends('layouts.app')

@section('content')
        <div class="container mt-5 pt-5">
            <br><br>
            <div class="row" >
                <div class="col-12">
                    <img src="/assets/img/ide.png" class="img-fluid border border-2 border-dark rounded-2" style="height:400px" width="100%"  alt="">
                </div>
            </div>
        
            <div class="row pt-4">
                <a href="#" class="{{$ide->kategori->color}}">{{$ide->kategori->nama_kategori}}</a>
            </div>
            <div class="row pt-3">
                <div class="col">
                    <h4><strong>{{$ide->judul}}</strong></h4>
                </div>
                <div class="col text-end">
                @if($ada == 1)
                        <a href="{{ route('kerjakan1',$ide->id) }}">
                            <button class="btn text-white" style="background-color:#F67451" >Kerjakan Ide <i class="fas fa-code"></i></button>
                        </a> 
                @elseif($ada == 0)
                    <a href="#" class="disabled">
                        <button class="btn text-white bg-secondary" >Kerjakan Ide <i class="fas fa-code"></i></button>
                    </a> 
                @endif

                </div>
            </div>
            <div class="row pt-3">
                <ul class="list-inline">
                    <li class="list-inline-item pe-1"> <i class="fas fa-star"></i> {{$ide->rating}}</li>
                    <li class="list-inline-item pe-1"> <i class="fas fa-clock"></i> {{$ide->hari}}</li>
                    <li class="list-inline-item pe-1"> 
                        <button class="btn btn-outline-secondary">
                            <img src="/{{$ide->level->icon}}" style="height:20px" alt="">
                            {{$ide->level->nama_level}}
                        </button>
                    </li>
                </ul>
            </div>
        </div>

        <hr >
            <div class="container nav-detail">
                <div class="row">
                    <ul class="list-inline" style="color:#747474">
                        <li class="list-inline-item pe-1"><a href="{{ route('gambaran-ide.show',$ide->id) }}">Gambaran Ide</a></li>
                        <li class="list-inline-item pe-1"><a href="{{ route('fitur.show',$ide->id) }}">Fitur</a></li>
                        <li class="list-inline-item pe-1"><a href="{{ route('teknologi.show',$ide->id) }}">Teknologi Digunakan</a></li>
                        <li class="list-inline-item pe-1"><a href="{{ route('diagramproses.show',$ide->id) }}">Diagram Proses</a></li>
                        <li class="list-inline-item pe-1"><a href="{{ route('desain.show',$ide->id) }}">Desain</a></li>
                        <li class="list-inline-item pe-1"><a href="#" class="disabled">Update</a></li>
                        <li class="list-inline-item pe-1"><a href="#" class="disabled">FAQ</a></li>
                    </ul>
                </div>
            </div>
        <hr>

    <main class="pt-5">
        @yield('content-detail')
    </main>
@endsection
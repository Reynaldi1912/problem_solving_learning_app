@extends('layouts.app')

@section('content')

@if($cek != 0 )
<br><br><br><br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-5 p-4 border border-dark">
                    <div class="row">
                        <div class="col-4">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width:{{$pres}}%" aria-valuenow="22.2" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                                @if($pres==99)
                                    <?php
                                        $pres=100;
                                    ?>
                                @endif
                            <h1>{{$pres}}%</h1>
                        </div>
                        <div class="col">
                            <h4><strong>Pengerjaan</strong></h4>
                            <p class="text-secondary">{{$cc}} Dari {{$cek}} Fitur Dikerjakan</p>
                        </div>
                    </div>
                </div>
                <div class="col p-4 ms-4 border border-dark">
                    <img src="/assets/img/sisa-hari.png" width="60px">
                    <h4 class="pt-2"><strong>{{$ide_judul->hari}}</strong></h4>
                    <p class="text-secondary">Hari Tersisa</p>
                </div>
                <div class="col p-4 ms-4 border border-dark">
                    <img src="/assets/img/jumlah_dikerjakan.png" width="60px">
                    <h4 class="pt-2"><strong>{{count($show)}}</strong></h4>
                    <p class="text-secondary">Ide Dikerjakan</p>
                </div>
            </div>
            <div class="row">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Ide Dikerjakan</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $i=0;
                    ?>
                    @foreach($show as $show)
                        <tr>
                            <td><a href="{{route('dashboard.show', $show->ide_id) }}">{{$show_ide[$i]->ide->judul}}</a></td>
                        </tr>
                        <?php
                            $i++;
                        ?>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="fitur border mt-5 border-dark border-2 p-4">
            <form method="post" action="{{ route('dashboard.update',$ide->ide_id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h3 class="text-center"><strong>{{$ide_judul->judul}}</strong></h3>

                <h4><strong>Fitur Yang Dikerjakan</strong></h4>
                <br>
                <h4>{{$fitur_utama->nama}}</h4>
                <input type="hidden" name="utama" value="{{$fitur_utama->id}}">
                <?php
                    $i=0;
                    $k = 0;
                ?>
                @foreach($sub_fitur_utama as $su)
                    <br>
                    <input type="checkbox" name="isSelesaiUtama_{{$i}}" value="0" {{ $pengerjaan[$k]->isSelesai == null ? '':'checked' }}>
                    <h5>{{$su->nama}}</h5>
                    <p class="text-secondary">{{$su->deskripsi}}</p>
                    <input type="hidden" name="sub_utama_{{$i}}" value="{{$su->id}}">
                    <br>
                <?php
                    $i++;
                    $k++;
                ?>
                <input type="hidden" name="total_utama" value="{{$i}}">
                @endforeach
                <br>
                <h4>{{$fitur_tambahan->nama}}</h4>
                <input type="hidden" name="tambahan" value="{{$fitur_tambahan->id}}">
                <?php
                    $i=0;
                ?>
                @foreach($sub_fitur_tambahan as $su)
                    <br>
                    <input type="checkbox" name="isSelesaiTambahan_{{$i}}" value="0" {{ $pengerjaan[$k]->isSelesai == null ? '':'checked' }}>
                    <h5>{{$su->nama}}</h5>
                    <p class="text-secondary">{{$su->deskripsi}}</p>
                    <input type="hidden" name="sub_tambahan_{{$i}}" value="{{$su->id}}">
                    <br>
                <?php
                    $i++;
                    $k++;
                ?>
                <input type="hidden" name="total_tambahan" value="{{$i}}">
                @endforeach
            </div>

            <button class="btn btn-primary" type="Submit">Simpan Perubahan</button>
            </form>
        </div>
@else
<br><br><br><br><br><br><br>
<h2 class="text-center">Tidak Ada Dikerjakan</h2>
@endif
@endsection
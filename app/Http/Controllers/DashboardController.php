<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\ide;
use App\Models\bahasa_program;
use App\Models\framework;
use App\Models\database_ide;
use App\Models\version_control;
use App\Models\teknologi_kerjakan;
use App\Models\fitur_kerjakan;
use App\Models\delivirabless;
use App\Models\fitur;
use App\Models\sub_fitur;
use App\Models\erd;
use App\Models\flowchart;
use App\Models\activity_diagram;
use App\Models\wireframe;
use App\Models\ui_desain;
use App\Models\komponen_desain;
use App\Models\jadwal_pengerjaan;
use App\Models\jadwal_sendiri;
use App\Models\pengerjaan;



class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $ide = fitur_kerjakan::all()->where('users_id',$user->id)->first();
       

        if($ide == null){
            $cek = 0;
            return view('dashboard',['cek'=>$cek]);

        }else if($ide != null){
            $show =  fitur_kerjakan::all()->where('users_id',$user->id)->all();
            $show_ide =  fitur_kerjakan::with('ide')->where('users_id',$user->id)->get();
            $k = pengerjaan::all()->where('ide_id',$ide->ide_id)->where('user_id',$user->id);
            $ide_judul = ide::all()->where('id',$ide->ide_id)->first();
    

            $cek = count($k);

            $i=0;
            // $pengerjaan[$cek];

            foreach ($k as $p ) {
                $pengerjaan[$i] = $p;
                $i++;
            }

            if($cek != 0){
                $fitur_utama = fitur::all()->where('id',$ide->fitur_utama_id)->first();
                $fitur_tambahan=fitur::all()->where('id',$ide->fitur_tambahan_id)->first();
                $sub_fitur_utama = sub_fitur::all()->where('fitur_id',$fitur_utama->id);
                $sub_fitur_tambahan = sub_fitur::all()->where('fitur_id',$fitur_tambahan->id);
    
                $persentase = floor(100/$cek);
                $pres=0;
                $cc=0;
        
                for ($i=0; $i < $cek ; $i++) { 
                    if($pengerjaan[$i]->isSelesai == null){
                        $pres +=0;
                    }else if($pengerjaan[$i]->isSelesai == 0){
                        $pres += $persentase;
                        $cc +=1;
                    }
                }
                return view('dashboard',['ide'=>$ide,'fitur_utama'=>$fitur_utama,'fitur_tambahan'=>$fitur_tambahan,'sub_fitur_utama'=>$sub_fitur_utama,'sub_fitur_tambahan'=>$sub_fitur_tambahan , 'pres'=>$pres ,'cc'=>$cc , 'pengerjaan'=>$pengerjaan ,'cek'=>$cek, 'show'=>$show , 'ide_judul'=>$ide_judul , 'show_ide'=>$show_ide]);
            }else{
                return view('dashboard',['ide'=>$ide,'fitur_utama'=>$fitur_utama,'fitur_tambahan'=>$fitur_tambahan,'sub_fitur_utama'=>$sub_fitur_utama,'sub_fitur_tambahan'=>$sub_fitur_tambahan , 'pengerjaan'=>$pengerjaan ,'cek'=>$cek,'show'=>$show , 'ide_judul'=>$ide_judul , 'show_ide'=>$show_ide]);
            }
            // return $pengerjaan;
        }
        // return $pengerjaan;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request , $id)
    {
        $user = Auth::user();
        $ide_judul = ide::all()->where('id',$id)->first();
        $ide = fitur_kerjakan::all()->where('ide_id',$id)->where('users_id',$user->id)->first();
        $show_ide =  fitur_kerjakan::with('ide')->where('users_id',$user->id)->get();
        $show =  fitur_kerjakan::all()->where('users_id',$user->id)->all();

        $k = pengerjaan::all()->where('ide_id',$ide->ide_id)->where('user_id',$user->id);
        

        if($ide == null){
            $cek = 0;
            return view('dashboard',['cek'=>$cek]);

        }else if($ide != null){

            $k = pengerjaan::all()->where('ide_id',$ide->ide_id)->where('user_id',$user->id);
            $cek = count($k);

            $i=0;
            // $pengerjaan[$cek];

            foreach ($k as $p ) {
                $pengerjaan[$i] = $p;
                $i++;
            }

            if($cek != 0){
                $fitur_utama = fitur::all()->where('id',$ide->fitur_utama_id)->first();
                $fitur_tambahan=fitur::all()->where('id',$ide->fitur_tambahan_id)->first();
                $sub_fitur_utama = sub_fitur::all()->where('fitur_id',$fitur_utama->id);
                $sub_fitur_tambahan = sub_fitur::all()->where('fitur_id',$fitur_tambahan->id);
                

                $persentase = floor(100/$cek);
                $pres=0;
                $cc=0;
        
                for ($i=0; $i < $cek ; $i++) { 
                    if($pengerjaan[$i]->isSelesai == null){
                        $pres +=0;
                    }else if($pengerjaan[$i]->isSelesai == 0){
                        $pres += $persentase;
                        $cc +=1;
                    }
                }
                // return $pengerjaan;
                return view('dashboard',['ide'=>$ide,'fitur_utama'=>$fitur_utama,'fitur_tambahan'=>$fitur_tambahan,'sub_fitur_utama'=>$sub_fitur_utama,'sub_fitur_tambahan'=>$sub_fitur_tambahan , 'pres'=>$pres ,'cc'=>$cc , 'pengerjaan'=>$pengerjaan ,'cek'=>$cek , 'show'=>$show, 'show_ide'=>$show_ide , 'ide_judul'=>$ide_judul]);
            }else{
                return view('dashboard',['ide'=>$ide,'fitur_utama'=>$fitur_utama,'fitur_tambahan'=>$fitur_tambahan,'sub_fitur_utama'=>$sub_fitur_utama,'sub_fitur_tambahan'=>$sub_fitur_tambahan , 'pengerjaan'=>$pengerjaan ,'cek'=>$cek ,'show'=>$show ,'show_ide'=>$show_ide , 'ide_judul'=>$ide_judul]);
            }

            // return $ide;
        }
        // return $pengerjaan;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $ide = ide::all()->where('id',$id)->first();

        // $pengerjaan = pengerjaan::all()->where('fitur_id',$request->get('utama'))->where('ide_id',$ide->id)->where('user_id',$user->id)->where('sub_fitur_id',9)->first();


        for($i=0 ; $i < $request->get('total_utama') ; $i++){
            $pengerjaan = pengerjaan::all()->where('fitur_id',$request->get('utama'))->where('ide_id',$ide->id)->where('user_id',$user->id)->where('sub_fitur_id',$request->get('sub_utama_'.$i))->first();
            $pengerjaan->isSelesai = $request->get('isSelesaiUtama_'.$i);

            $pengerjaan->save();

        }

        for($i=0 ; $i < $request->get('total_tambahan') ; $i++){
            $pengerjaan = pengerjaan::all()->where('fitur_id',$request->get('tambahan'))->where('ide_id',$ide->id)->where('user_id',$user->id)->where('sub_fitur_id',$request->get('sub_tambahan_'.$i))->first();
            $pengerjaan->isSelesai = $request->get('isSelesaiTambahan_'.$i);
            
            $pengerjaan->save();
        }
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

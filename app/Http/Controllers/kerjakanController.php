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












class kerjakanController extends Controller
{
    public function kerjakan1($id)
    {
        $user = Auth::user();
        $ide = ide::with('level','kategori')->where('id',$id)->get();
        $bahasa_program = bahasa_program::all();
        $framework = framework::all();
        $database_ide = database_ide::all();
        $version_control = version_control::all();
        $validation = teknologi_kerjakan::all()->where('users_id',$user->id)->where('ide_id',$id)->first();
        $cek_1 = teknologi_kerjakan::all();
        $cek_2 = teknologi_kerjakan::all();
        $cek_3 = teknologi_kerjakan::all();
        $cek_4 = teknologi_kerjakan::all();

        // return $cek_2;
        return view('kerjakan.kerjakan1',['user'=>$user,'ide'=>$ide[0],'bahasa_program'=>$bahasa_program,'framework'=>$framework,'database_ide'=>$database_ide,'version_control'=>$version_control,'validation'=>$validation,'cek_1'=>$cek_1,'cek_2'=>$cek_2,'cek_3'=>$cek_3,'cek_4'=>$cek_4]);
    }
    public function kerjakan2($id)
    {
        $user = Auth::user();
        $ide = ide::with('level','kategori')->where('id',$id)->get();
        $fitur =fitur::with('ide')->where('ide_id',$ide[0]->id)->get();
        $fitur_tambahan =fitur::with('ide')->where('ide_id',$ide[0]->id)->get();
        $sub_fitur = sub_fitur::with('fitur')->where('ide_id',$ide[0]->id)->get();
        $sub_fitur_tambahan = fitur::with('sub_fitur')->where('isUtama',1)->where('ide_id',$ide[0]->id)->get();
        $validation = fitur_kerjakan::all()->where('users_id',$user->id)->where('ide_id',$id)->first();
        $cek1 = fitur_kerjakan::all();
        $cek2 = fitur_kerjakan::all();
        // return $validation;
        return view('kerjakan.kerjakan2',['user'=>$user,'ide'=>$ide[0],'fitur'=>$fitur,'sub_fitur'=>$sub_fitur,'sub_fitur_tambahan'=>$sub_fitur_tambahan,'fitur_tambahan'=>$fitur_tambahan,'cek1'=>$cek1 , 'cek2'=>$cek2,'validation'=>$validation]);
    }
    public function kerjakan3($id)
    {
        $user = Auth::user();
        $ide = ide::with('level','kategori')->where('id',$id)->get();
        $flowchart = flowchart::with('ide')->where('ide_id',$ide[0]->id)->get();
        $activity_diagram = activity_diagram::with('ide')->where('ide_id',$ide[0]->id)->get();
        $wireframe = wireframe::with('ide')->where('ide_id',$ide[0]->id)->get();
        $ui_desain = ui_desain::with('ide')->where('ide_id',$ide[0]->id)->get();
        $komponen_desain = komponen_desain::with('ide')->where('ide_id',$ide[0]->id)->get();
        $erd = erd::with('ide')->where('ide_id',$ide[0]->id)->get();
        $validation = delivirabless::all()->where('users_id',$user->id)->where('ide_id',$id)->first();
        $cek1 = delivirabless::all();
        $cek2 = delivirabless::all();
        $cek3 = delivirabless::all();
        $cek4 = delivirabless::all();
        $cek5 = delivirabless::all();
        $cek6 = delivirabless::all();

        // return $user;
        return view('kerjakan.kerjakan3',['user'=>$user,'ide'=>$ide[0],'flowchart'=>$flowchart[0],'activity_diagram'=>$activity_diagram[0],'erd'=>$erd[0],'wireframe'=>$wireframe[0],'ui_desain'=>$ui_desain[0],'komponen_desain'=>$komponen_desain[0],'cek1'=>$cek1 , 'cek2'=>$cek2,'cek3'=>$cek3 , 'cek4'=>$cek4,'cek5'=>$cek5 , 'cek6'=>$cek6,'validation'=>$validation]);
    }
    public function kerjakan4($id)
    {
        $user = Auth::user();
        $ide = ide::with('level','kategori')->where('id',$id)->get();
        $fitur_kerjakan = fitur_kerjakan::all()->where('users_id',$user->id)->where('ide_id',$id)->first();
        $fitur = fitur::with('sub_fitur')->where('id',$fitur_kerjakan->fitur_utama_id)->first();
        $fitur_tambahan = fitur::with('sub_fitur')->where('id',$fitur_kerjakan->fitur_tambahan_id)->first();
        // return $fitur;
        return view('kerjakan.kerjakan4',['user'=>$user,'ide'=>$ide[0],'fitur_kerjakan'=>$fitur_kerjakan,'fitur'=>$fitur,'fitur_tambahan'=>$fitur_tambahan]);
    }
    public function store_teknologi(Request $request , $id){
            $user = Auth::user();
            $teknologi = teknologi_kerjakan::all();
            $validation = teknologi_kerjakan::all()->where('users_id',$user->id)->where('ide_id',$id)->first();

            $total=count($teknologi);
            $ada=true;

            for ($i=0; $i < $total; $i++) { 
                if(($teknologi[$i]->users_id == "$user->id") && ($teknologi[$i]->ide_id ==$id)){
                    $request->validate([
                        'bahasa-program' => 'required',
                        'framework' => 'required',
                        'database_ide' => 'required',
                        'version_control' => 'required',
                        ]);
                
            
                    $teknologi_kerjakan = teknologi_kerjakan::all()->find($validation->id);
    
            
                    $teknologi_kerjakan->bahasa_program = $request->get('bahasa-program');
                    $teknologi_kerjakan->database_ide = $request->get('database_ide');
                    $teknologi_kerjakan->version_control = $request->get('version_control');
                    $teknologi_kerjakan->framework = $request->get('framework');
                    $teknologi_kerjakan->ide_id = $id;
                    $teknologi_kerjakan->users_id = $user->id;   
                    
                    $ada = true;

                    break;
                }else{
                    $ada = false;
                }
               
            }
            if($ada == false){
                $request->validate([
                    'bahasa-program' => 'required',
                    'framework' => 'required',
                    'database_ide' => 'required',
                    'version_control' => 'required',
                    ]);
            
                    $teknologi_kerjakan = new teknologi_kerjakan;
                    
    
                    $teknologi_kerjakan->bahasa_program = $request->get('bahasa-program');
                    $teknologi_kerjakan->database_ide = $request->get('database_ide');
                    $teknologi_kerjakan->version_control = $request->get('version_control');
                    $teknologi_kerjakan->framework = $request->get('framework');
                    $teknologi_kerjakan->ide_id = $id;
                    $teknologi_kerjakan->users_id = $user->id;
            }

                $teknologi_kerjakan->save();

                return redirect()->route('kerjakan2',$id);
        
    }
    public function store_fitur(Request $request , $id){
        $user = Auth::user();
        $fitur_kerjakan= fitur_kerjakan::all();
        $validation = fitur_kerjakan::all()->where('users_id',$user->id)->where('ide_id',$id)->first();

        $total=count($fitur_kerjakan);
        $ada=true;

        for ($i=0; $i < $total; $i++) { 
            if(($fitur_kerjakan[$i]->users_id == "$user->id") && ($fitur_kerjakan[$i]->ide_id ==$id)){
                $request->validate([
                    'fitur_utama_id' => 'required',
                    'sub_fitur_id' => 'required',
                    ]);
            
        
                $fitur_kerjakan = fitur_kerjakan::all()->find($validation->id);

        
                $fitur_kerjakan->fitur_utama_id = $request->get('fitur_utama_id');
                $fitur_kerjakan->fitur_tambahan_id = $request->get('sub_fitur_id');
                $fitur_kerjakan->ide_id = $id;
                $fitur_kerjakan->users_id = $user->id;   
                
                $ada = true;

                break;
            }else{
                $ada = false;
            }
           
        }
        if($ada == false){
            $request->validate([
                'fitur_utama_id' => 'required',
                'sub_fitur_id' => 'required',
                ]);
        
                $fitur_kerjakan = new fitur_kerjakan;
                

                $fitur_kerjakan->fitur_utama_id = $request->get('fitur_utama_id');
                $fitur_kerjakan->fitur_tambahan_id = $request->get('sub_fitur_id');
                $fitur_kerjakan->ide_id = $id;
                $fitur_kerjakan->users_id = $user->id;
        }

            $fitur_kerjakan->save();

            return redirect()->route('kerjakan3',$id);
    
    }
    public function store_delivirables( Request $request ,$id){
        $user = Auth::user();
        $delivirables_kerjakan= delivirabless::all();
        $validation = delivirabless::all()->where('users_id',$user->id)->where('ide_id',$id)->first();

        $total=count($delivirables_kerjakan);
        $ada=true;

        for ($i=0; $i < $total; $i++) { 
            if(($delivirables_kerjakan[$i]->users_id == "$user->id") && ($delivirables_kerjakan[$i]->ide_id ==$id)){
                // $request->validate([
                //     'flowchart' => 'required',
                //     'activity_diagram' => 'required',
                //     'erd' => 'required',
                //     'komponen_desain' => 'required',
                //     'ui_desain' => 'required',
                //     'wireframe' => 'required',

                //     ]);
            
        
                $delivirables_kerjakan = delivirabless::all()->find($validation->id);

        
                $delivirables_kerjakan->flowchart_id = $request->get('flowchart');
                $delivirables_kerjakan->activity_diagram_id = $request->get('activity_diagram');
                $delivirables_kerjakan->erd_id = $request->get('erd');
                $delivirables_kerjakan->komponen_desain_id = $request->get('komponen_desain');  
                $delivirables_kerjakan->ui_desan_id = $request->get('ui_desain');
                $delivirables_kerjakan->wireframe_id = $request->get('wireframe');
                $delivirables_kerjakan->ide_id = $id;
                $delivirables_kerjakan->users_id = $user->id;   
                
                $ada = true;

                break;
            }else{
                $ada = false;
            }
           
        }
        if($ada == false){
            // $request->validate([
            //         'flowchart' => 'required',
            //         'activity_diagram' => 'required',
            //         'erd' => 'required',
            //         'komponen_desain' => 'required',
            //         'ui_desain' => 'required',
            //         'wireframe' => 'required',
            //     ]);
        
                $delivirables_kerjakan = new delivirabless;
                

                $delivirables_kerjakan->flowchart_id = $request->get('flowchart');
                $delivirables_kerjakan->activity_diagram_id = $request->get('activity_diagram');
                $delivirables_kerjakan->erd_id = $request->get('erd');
                $delivirables_kerjakan->komponen_desain_id = $request->get('komponen_desain');  
                $delivirables_kerjakan->ui_desan_id = $request->get('ui_desain');
                $delivirables_kerjakan->wireframe_id = $request->get('wireframe');
                $delivirables_kerjakan->ide_id = $id;
                $delivirables_kerjakan->users_id = $user->id;   
        }

            $delivirables_kerjakan->save();

            return redirect()->route('kerjakan4',$id);
    }
    public function store_jadwal(Request $request , $id){
        $user = Auth::user();

        if($request->get('fitur_utama_id')=="Yes"){
            $request->validate([
                'tanggal_mulai' => 'required',
                'estimasi_waktu' => 'required',
                ]);

                $fitur_kerjakan =fitur_kerjakan::all()->where('ide_id',$id)->where('users_id',$user->id)->first();
                $sub_fitur_utama = sub_fitur::with('fitur')->where('fitur_id',$fitur_kerjakan->fitur_utama_id)->get();
                $sub_fitur_tambahan = sub_fitur::with('fitur')->where('fitur_id',$fitur_kerjakan->fitur_tambahan_id)->get();

                for($i=0 ; $i < count($sub_fitur_utama) ; $i++){
                    $pengerjaan = new pengerjaan;

                    $pengerjaan->sub_fitur_id = $sub_fitur_utama[$i]->id;
                    $pengerjaan->fitur_id = $fitur_kerjakan->fitur_utama_id ;
                    $pengerjaan->user_id = $user->id;
                    $pengerjaan->ide_id = $id;

                    $pengerjaan->save();
                }

                for($i=0 ; $i < count($sub_fitur_tambahan) ; $i++){
                    $pengerjaan = new pengerjaan;

                    $pengerjaan->sub_fitur_id = $sub_fitur_tambahan[$i]->id;
                    $pengerjaan->fitur_id = $fitur_kerjakan->fitur_tambahan_id ;
                    $pengerjaan->user_id = $user->id;
                    $pengerjaan->ide_id = $id;

                    $pengerjaan->save();

                }
        
                $jadwal_pengerjaan = new jadwal_pengerjaan;

                $jadwal_pengerjaan->tanggal_mulai = $request->get('tanggal_mulai');
                $jadwal_pengerjaan->senin = $request->get('senin');
                $jadwal_pengerjaan->selasa = $request->get('selasa');
                $jadwal_pengerjaan->rabu = $request->get('rabu');
                $jadwal_pengerjaan->kamis = $request->get('kamis');
                $jadwal_pengerjaan->jumat = $request->get('jumat');
                $jadwal_pengerjaan->sabtu = $request->get('sabtu');
                $jadwal_pengerjaan->minggu = $request->get('minggu');
                $jadwal_pengerjaan->estimasi_waktu = $request->get('estimasi_waktu');
                $jadwal_pengerjaan->ide_id = $id;
                $jadwal_pengerjaan->user_id = $user->id;

                if($request->get('seninjumat')=='on'){
                    $jadwal_pengerjaan->senin = '0';
                    $jadwal_pengerjaan->selasa = '0';
                    $jadwal_pengerjaan->rabu = '0';
                    $jadwal_pengerjaan->kamis = '0';
                    $jadwal_pengerjaan->jumat = '0';
                }else if($request->get('sabtuminggu')=='on'){
                    $jadwal_pengerjaan->sabtu = '0';
                    $jadwal_pengerjaan->minggu = '0';
                }else if($request->get('setiaphari')=='on'){
                    $jadwal_pengerjaan->senin = '0';
                    $jadwal_pengerjaan->selasa = '0';
                    $jadwal_pengerjaan->rabu = '0';
                    $jadwal_pengerjaan->kamis = '0';
                    $jadwal_pengerjaan->jumat = '0';
                    $jadwal_pengerjaan->sabtu = '0';
                    $jadwal_pengerjaan->minggu = '0';
                }

                $jadwal_pengerjaan->save();

                return redirect()->route('dashboard.index');

        }else if($request->get('fitur_utama_id')=="No"){
            
            $fitur_kerjakan =fitur_kerjakan::all()->where('ide_id',$id)->where('users_id',$user->id)->first();
            $sub_fitur_utama = sub_fitur::with('fitur')->where('fitur_id',$fitur_kerjakan->fitur_utama_id)->get();
            $sub_fitur_tambahan = sub_fitur::with('fitur')->where('fitur_id',$fitur_kerjakan->fitur_tambahan_id)->get();

            for($i=0 ; $i < count($sub_fitur_utama) ; $i++){
                $pengerjaan = new pengerjaan;

                $pengerjaan->sub_fitur_id = $sub_fitur_utama[$i]->id;
                $pengerjaan->fitur_id = $fitur_kerjakan->fitur_utama_id ;
                $pengerjaan->user_id = $user->id;
                $pengerjaan->ide_id = $id;

                $pengerjaan->save();
            }

            for($i=0 ; $i < count($sub_fitur_tambahan) ; $i++){
                $pengerjaan = new pengerjaan;

                $pengerjaan->sub_fitur_id = $sub_fitur_tambahan[$i]->id;
                $pengerjaan->fitur_id = $fitur_kerjakan->fitur_tambahan_id ;
                $pengerjaan->user_id = $user->id;
                $pengerjaan->ide_id = $id;

                $pengerjaan->save();
            }
    
            for ($i=0; $i <$request->get('total') ; $i++) { 
                $jadwal_sendiri = new jadwal_sendiri;

                $jadwal_sendiri->hari = $request->get('hari_'.$i);
                $jadwal_sendiri->sub_fitur_id = $request->get('sub_fitur_'.$i);
                $jadwal_sendiri->fitur_id = $request->get('fitur_id');
                $jadwal_sendiri->user_id = $user->id;
                $jadwal_sendiri->ide_id = $id;

                $jadwal_sendiri->save();
            }


            for ($i=0; $i <$request->get('total1') ; $i++) { 
                $jadwal_sendiri = new jadwal_sendiri;

                $jadwal_sendiri->hari = $request->get('hari_tambahan_'.$i);
                $jadwal_sendiri->sub_fitur_id = $request->get('sub_fitur_tambahan_'.$i);
                $jadwal_sendiri->fitur_id = $request->get('fitur_tambahan_id');
                $jadwal_sendiri->user_id = $user->id;
                $jadwal_sendiri->ide_id = $id;

                $jadwal_sendiri->save();
            }
           
            return redirect()->route('dashboard.index');
        }else{
            return back();
        }
            
    
    }
}

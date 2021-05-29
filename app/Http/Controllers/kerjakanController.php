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
        // return $ide;
        return view('kerjakan.kerjakan2',['user'=>$user,'ide'=>$ide[0]]);
    }
    public function kerjakan3($id)
    {
        $user = Auth::user();
        $ide = ide::with('level','kategori')->where('id',$id)->get();
        // return $ide;
        return view('kerjakan.kerjakan3',['user'=>$user,'ide'=>$ide[0]]);
    }
    public function kerjakan4($id)
    {
        $user = Auth::user();
        $ide = ide::with('level','kategori')->where('id',$id)->get();
        // return $ide;
        return view('kerjakan.kerjakan4',['user'=>$user,'ide'=>$ide[0]]);
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
}

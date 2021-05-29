<?php

namespace App\Http\Controllers;
use App\Models\ide;
use App\Models\kategori;
use App\Models\level;
use App\Models\gambaran_ide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Models\tantangan;
use App\Models\teknologi;
use App\Models\erd;
use App\Models\flowchart;
use App\Models\activity_diagram;
use App\Models\wireframe;
use App\Models\ui_desain;
use App\Models\komponen_desain;
use App\Models\bahasa_program;
use App\Models\framework;
use App\Models\database_ide;
use App\Models\version_control;
use App\Models\komentar_ide;
use App\Models\User;
use App\Models\fitur;
use App\Models\sub_fitur;










class detailController extends Controller
{
    public function detail($id)
    {
        $ide = ide::with('level','kategori')->where('id',$id)->get();
        $gambaran_ide = gambaran_ide::with('ide')->where('ide_id',$ide[0]->id)->get();
        $tantangan = tantangan::with('ide')->where('ide_id',$ide[0]->id)->get();
        $komentar_ide = komentar_ide::with('ide','User')->where('ide_id',$ide[0]->id)
                        ->orderBy('id','desc')
                        ->simplePaginate(2);
        
        return view('gambaran_ide',['ide'=>$ide[0],'gambaran_ide'=>$gambaran_ide[0],'tantangan'=>$tantangan,'komentar_ide'=>$komentar_ide])
        ->with('i',(request()->input('page',1)-1)*5);
    }
    public function fitur($id)
    {
        $ide = ide::with('level','kategori')->where('id',$id)->get();
        $fitur =fitur::with('ide')->where('ide_id',$ide[0]->id)->get();
        $sub_fitur = sub_fitur::with('fitur')->get();
        $sub_fitur_tambahan = fitur::with('sub_fitur')->where('isUtama',1)->get();
        $komentar_ide = komentar_ide::with('ide','User')->where('ide_id',$ide[0]->id)
        ->orderBy('id','desc')
        ->simplePaginate(2);

        // return $sub_fitur_tambahan[0]->sub_fitur[1]->nama;

        return view('fitur',['ide'=>$ide[0],'fitur'=>$fitur,'sub_fitur'=>$sub_fitur,'komentar_ide'=>$komentar_ide ,'fitur_tambahan'=>$sub_fitur_tambahan])
        ->with('i',(request()->input('page',1)-1)*5);
    }
    
    public function teknologi($id)
    {
        $ide = ide::with('level','kategori')->where('id',$id)->get();
        $bahasa_program = bahasa_program::all();
        $framework = framework::all();
        $database_ide = database_ide::all();
        $version_control = version_control::all();
        $komentar_ide = komentar_ide::with('ide','User')->where('ide_id',$ide[0]->id)
        ->orderBy('id','desc')
        ->simplePaginate(2);

        // return $active;
        return view('teknologi_digunakan',['ide'=>$ide[0],'bahasa_program'=>$bahasa_program,'framework'=>$framework,'database_ide'=>$database_ide,'version_control'=>$version_control,'komentar_ide'=>$komentar_ide] )
        ->with('i',(request()->input('page',1)-1)*5);
    }

    public function diagramproses($id)
    {
        $ide = ide::with('level','kategori')->where('id',$id)->get();
        $flowchart = flowchart::with('ide')->where('ide_id',$ide[0]->id)->get();
        $activity_diagram = activity_diagram::with('ide')->where('ide_id',$ide[0]->id)->get();
        $erd = erd::with('ide')->where('ide_id',$ide[0]->id)->get();
        $komentar_ide = komentar_ide::with('ide','User')->where('ide_id',$ide[0]->id)
        ->orderBy('id','desc')
        ->simplePaginate(2);

        // return $activity_diagram->link;
        return view('diagram_proses',['ide'=>$ide[0],'flowchart'=>$flowchart[0],'activity_diagram'=>$activity_diagram[0],'erd'=>$erd[0],'komentar_ide'=>$komentar_ide])
        ->with('i',(request()->input('page',1)-1)*5);
    }
    public function desain($id)
    {
        $ide = ide::with('level','kategori')->where('id',$id)->get();
        $wireframe = wireframe::with('ide')->where('ide_id',$ide[0]->id)->get();
        $ui_desain = ui_desain::with('ide')->where('ide_id',$ide[0]->id)->get();
        $komponen_desain = komponen_desain::with('ide')->where('ide_id',$ide[0]->id)->get();
        $komentar_ide = komentar_ide::with('ide','User')->where('ide_id',$ide[0]->id)
        ->orderBy('id','desc')
        ->simplePaginate(2);

        // return $ui_desain[0]->link;
        return view('desain',['ide'=>$ide[0],'wireframe'=>$wireframe[0],'ui_desain'=>$ui_desain[0],'komponen_desain'=>$komponen_desain[0],'komentar_ide'=>$komentar_ide])
        ->with('i',(request()->input('page',1)-1)*5);
    }

}

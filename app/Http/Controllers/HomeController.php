<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use  Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        
        return view('home',['user'=>$user]);
        // return view('home');
    }
    public function gambaran_ide()
    {
        $user = Auth::user();
        return view('gambaran_ide',['user'=>$user]);
    }
    public function fitur()
    {
        $user = Auth::user();
        return view('fitur',['user'=>$user]);
    }
    public function teknologi_digunakan()
    {
        $user = Auth::user();
        return view('teknologi_digunakan',['user'=>$user]);
    }
    public function diagram_proses()
    {
        $user = Auth::user();
        return view('diagram_proses',['user'=>$user]);
    }
    public function desain()
    {
        $user = Auth::user();
        return view('desain',['user'=>$user]);
    }
}


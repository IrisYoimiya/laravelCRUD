<?php

namespace App\Http\Controllers;

use App\Models\Papper;
use App\Models\Writter;
use Illuminate\Http\Request;
use NunoMaduro\Collision\Writer;

class ResearchController extends Controller
{
    //
    public function home(){
        $pappers = Papper::all();
        $writers = Writter::all();
        return view('homeA', ['title' => 'Create Data', 'writters' => $writers, 'pappers' => $pappers]);
    }
    public function writter(){
        $writers = Writter::all();
        return view('writter', ['title' => 'Penulis', 'writters' => $writers]);
    }
    public function create(){
        return view('create', ['title' => 'Create Data']);
    }
    public function storeWritter(Request $request){
        $data = $request -> validate(
            [
                'nama_lengkap' => 'required|max:255',
                'email' => 'required|email'
            ]
        );

        Writter::create([
            'name' => $data['nama_lengkap'],
            'email' => $data['email']
        ]);
        return redirect() -> route('home.index');
    }

    public function createR(){
        $writers = Writter::all();
        return view('createPapper', ['title' => 'Create Data', 'writters' => $writers]);
    }

    public function storeR(Request $request){
        $data = $request -> validate(
            [
                'writter_id' => 'required',
                'title' => 'required|max:255',
                'abstract' => 'required'
            ]
        );

        Papper::create($data);
        return redirect() -> route('home.index');
    }

    public function deleteW(Writter $writter){
        $writter -> delete();
        return redirect() -> route('writter.index');
    }
    public function deleteP(Papper $papper){
        $papper -> delete();
        return redirect() -> route('home.index');
    }
}

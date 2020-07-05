<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;
use Illuminate\Support\Str;


class ArtikelController extends Controller
{    
    public function create(){
        return view('artikel.form');
    }
    
    public function store(Request $request){
        // dd($request->all());
        $new_artikel = ArtikelModel::save($request->all());
        ArtikelController::create([
            'slug'=>Str::slug($request->judul),
        ]);
        return redirect('/artikel');
    }
    
    public function index(){
        $artikel = ArtikelModel::get_all();
        return view('artikel.index', compact('artikel'));
    }

    public function show($idartikel){
        $artikel = ArtikelModel::find_by_id($idartikel);
        return view('artikel.show', compact('artikel'));
    }

    public function edit($idartikel){
        $artikel = ArtikelModel::find_by_id($idartikel);
            return view('artikel.edit', compact('artikel'));
    }

    public function update($idartikel, Request $request){
        $artikel = ArtikelModel::update($idartikel, $request->all());
        return redirect('/artikel');
    }

    public function destroy($idartikel){
        $deleted = ArtikelModel::destroy($idartikel);
        return redirect('/artikel');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index(){
        return view('home', [
            'data' => Biodata::all(),
            'title' => 'home'
        ]);
    }
    
    public function show(Biodata $biodata){

        $result = $biodata::find($biodata->id);

        return view('detail', [
            'data' => $result,
            'title' => 'detail'
        ]);
    }
}

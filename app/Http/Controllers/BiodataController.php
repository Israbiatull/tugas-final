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

        $data = Biodata::find($biodata->id);

        return view('detail', [
            'data' => $data,
            'title' => 'detail'
        ]);

    }

    public function update(Request $request, Biodata $biodata){

        $data = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'ttl' => $request->ttl,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'status' => $request->status,
            'kewarganegaraan' => $request->kewarganegaraan,
            'pendidikan_terakhir' => $request->pendidikan_terakhir
        ];

        if($request->file('gambar')){

            if($request->oldImg){
                Storage::delete($request->oldImg);
            }

            $data['gambar'] = $request->file('gambar')->store('member');

        }

        Biodata::where('id', $biodata->id)->update($data);

        return redirect("/biodata/$biodata->id")->with('success', 'data berhasil diubah');
    }

    public function destroy(Biodata $biodata){

        Biodata::destroy($biodata->id);
        return redirect("/")->with('success', 'data berhasil dihapus');

    }

}

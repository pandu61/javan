<?php

namespace App\Http\Controllers;

use App\Models\KeluargaBudi;
use Illuminate\Http\Request;
use App\Http\Requests\KeluargaBudiRequest;

class KeluargaBudiController extends Controller
{
    
    public function index()
    {
        $keluarga = KeluargaBudi::get();
        return view('KeluargaBudi.Index', ['keluarga' => $keluarga]);
    }


    public function tree() {
        $lastGeneration = DB::table('keluarga_budi')
            ->select('generasi_ke')
            ->order('generasi_ke', 'desc')
            ->limit(1)
            ->get();

        for($i = 0; $i < $lastGeneration->generasi_ke; $i++) {
            $keluarga 
        }
    }
 
 
    public function create()
    {
        $keluarga = new KeluargaBudi;
        $anggota = KeluargaBudi::get();
        
        return view('KeluargaBudi.create', [
            'keluarga' => $keluarga,
            'anggota' => $anggota
        ]);
    }
 
    public function store(KeluargaBudiRequest $request)
    {
        $keluarga = new KeluargaBudi;
        $keluarga->nama = $request->nama;
        $keluarga->jenis_kelamin = $request->jenis_kelamin;
        $keluarga->generasi_ke = $request->generasi_ke;
        $keluarga->id_ortu = $request->id_ortu;
        $keluarga->save();

        return redirect('/');
    }
 

    public function edit($id)
    {
        $keluarga = KeluargaBudi::find($id);
        $anggota = KeluargaBudi::get();
        
        return view('KeluargaBudi.update', [
            'keluarga' => $keluarga,
            'anggota' => $anggota
        ]);
    }
 
    public function update(KeluargaBudiRequest $request, $id)
    {
        $keluarga = KeluargaBudi::find($id);
        $keluarga->nama = $request->nama;
        $keluarga->jenis_kelamin = $request->jenis_kelamin;
        $keluarga->generasi_ke = $request->generasi_ke;
        $keluarga->id_ortu = $request->id_ortu;
        $keluarga->save();

        return redirect('/');
    }
 
 
    public function destroy($id)
    {
        $keluarga = KeluargaBudi::find($id);
        $keluarga->delete();

        return redirect('/');
    }
}

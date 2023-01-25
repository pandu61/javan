<?php

namespace App\Http\Controllers;

use App\Models\KeluargaBudi;
use Illuminate\Http\Request;
use App\Http\Requests\KeluargaBudiRequest;

class ApiKeluargaController extends Controller
{
    
    public function index()
    {
        $keluarga = KeluargaBudi::get();
        return response()->json($keluarga, 200);
    }

 
    public function store(KeluargaBudiRequest $request)
    {
        $keluarga = new KeluargaBudi;
        $keluarga->nama = $request->nama;
        $keluarga->jenis_kelamin = $request->jenis_kelamin;
        $keluarga->generasi_ke = $request->generasi_ke;
        $keluarga->id_ortu = $request->id_ortu;
        $keluarga->save();

        return response()->json(['status' => 'success'], 200);
    }
 
    public function update(KeluargaBudiRequest $request, $id)
    {
        $keluarga = KeluargaBudi::find($id);
        $keluarga->nama = $request->nama;
        $keluarga->jenis_kelamin = $request->jenis_kelamin;
        $keluarga->generasi_ke = $request->generasi_ke;
        $keluarga->id_ortu = $request->id_ortu;
        $keluarga->save();

        return response()->json(['status' => 'success'], 200);
    }
 
 
    public function destroy($id)
    {
        $keluarga = KeluargaBudi::find($id);
        $keluarga->delete();
        
        return response()->json(['status' => 'success'], 200);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class DokterController extends Controller
{
    public function index() {
        $data = Dokter::all();
        return view('admin', compact('data'));
    }

    public function TambahDataDokter()
    {
        return view('tambahdata');
    }

    public function InsertDataDokter(Request $request){
        //dd($request->all());
        //$request->validate([
            //'nama' => 'required', 
            //'spesialis' => 'required', 
            //'no_telepon' => 'required',
            //'hari_praktik' => 'required',
            //'awal_jam_praktik' => 'required',
            //'akhir_jam_praktik' => 'required'
        //]);
        Dokter::create($request->all());
        return redirect()->route('dokter')->with('success', 'Dokter Berhasil Dibuat');
    }

    public function TampilkanData($id){
        $data = Dokter::find($id);
        //dd($data);
        return view('tampildata', compact('data'));
    }

    public function UpdateData(Request $request, $id){
        $data = Dokter::find($id);
        $data->update($request->all());
        return redirect()->route('dokter')->with('success', 'Dokter Berhasil Diupdate');
    }

    public function DeleteData($id){
        $data = Dokter::find($id);
        $data->delete();
        return redirect()->route('dokter')->with('success', 'Dokter Berhasil Dihapus');
    }
}

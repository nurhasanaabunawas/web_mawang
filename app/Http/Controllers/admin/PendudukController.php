<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penduduk = Penduduk::all();
        return view('admin.penduduk.index', compact('penduduk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'perincian' => 'required',
            'status' => 'required',
            'bulan' => 'required',
            'nama_lingkungan' => 'required',
            'jenis_kelamin' => 'required',
            'nik' => 'required',
            'kk' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'no_akta_kelahiran' => 'required',
            'usia' => 'required',
            'kota' => 'required',
        ]);

        $penduduk = new Penduduk;
        $penduduk->nama = $request->input('nama');
        $penduduk->perincian = $request->input('perincian');
        $penduduk->status = $request->input('status');
        $penduduk->bulan = $request->input('bulan');
        $penduduk->nama_lingkungan = $request->input('nama_lingkungan');
        $penduduk->jenis_kelamin = $request->input('jenis_kelamin');
        $penduduk->nik = $request->input('nik');
        $penduduk->kk = $request->input('kk');
        $penduduk->nama_ayah = $request->input('nama_ayah');
        $penduduk->nama_ibu = $request->input('nama_ibu');
        $penduduk->no_akta_kelahiran = $request->input('no_akta_kelahiran');
        $penduduk->usia = $request->input('usia');
        $penduduk->kota = $request->input('kota');
        $penduduk->save();

        return redirect()->route('penduduk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $penduduk = Penduduk::find($id);

        $this->validate($request,[
            'nama' => 'required',
            'perincian' => 'required',
            'status' => 'required',
            'bulan' => 'required',
            'nama_lingkungan' => 'required',
            'jenis_kelamin' => 'required',
            'nik' => 'required',
            'kk' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'no_akta_kelahiran' => 'required',
            'usia' => 'required',
            'kota' => 'required',
        ]);

        $penduduk->nama = $request->nama;
        $penduduk->perincian = $request->perincian;
        $penduduk->status = $request->status;
        $penduduk->bulan = $request->bulan;
        $penduduk->nama_lingkungan = $request->nama_lingkungan;
        $penduduk->jenis_kelamin = $request->jenis_kelamin;
        $penduduk->nik = $request->nik;
        $penduduk->kk = $request->kk;
        $penduduk->nama_ayah = $request->nama_ayah;
        $penduduk->nama_ibu = $request->nama_ibu;
        $penduduk->no_akta_kelahiran = $request->no_akta_kelahiran;
        $penduduk->usia = $request->usia;
        $penduduk->kota = $request->kota;

        $penduduk->save();

        return redirect()->route('penduduk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penduduk = Penduduk::findOrFail($id);

        if($penduduk->delete()){
            return redirect()->route('penduduk.index');
        }
    }
}

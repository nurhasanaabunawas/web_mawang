<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\wilayahAdmin;
use Illuminate\Http\Request;


class WilayahAdministrasi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wilayah_admin = WilayahAdmin::all();
        return view('admin.wilayah_administrasi.index', compact('wilayah_admin'));
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
            'nama_wilayah' => 'required',
            'nama_ketua_rw' => 'required',
            'nama_ketua_rt' => 'required',
            'rw' => 'required',
            'rt' => 'required',
        ]);
        
        $wilayah = new wilayahAdmin;
        $wilayah->nama_wilayah = $request->input('nama_wilayah');
        $wilayah->nama_ketua_rw = $request->input('nama_ketua_rw');
        $wilayah->nama_ketua_rt = $request->input('nama_ketua_rt');
        $wilayah->rw = $request->input('rw');
        $wilayah->rt = $request->input('rt');

        $wilayah->save();

        return redirect()->route('wilayah_administrasi.index');
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
        $wilayah_admin = WilayahAdmin::find($id);

        $this->validate($request,[
            'nama_wilayah' => 'required',
            'nama_ketua_rw' => 'required',
            'nama_ketua_rt' => 'required',
            'rw' => 'required',
            'rt' => 'required',
        ]);
        $wilayah_admin->nama_wilayah = $request->nama_wilayah;
        $wilayah_admin->nama_ketua_rw = $request->nama_ketua_rw;
        $wilayah_admin->nama_ketua_rt = $request->nama_ketua_rt;
        $wilayah_admin->rw = $request->rw;
        $wilayah_admin->rt = $request->rt;
        $wilayah_admin->save();

        return redirect()->route('wilayah_administrasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wilayah_admin = WilayahAdmin::findOrFail($id);

        if($wilayah_admin->delete()){
            return redirect()->route('wilayah_administrasi.index');
        }
    }
}

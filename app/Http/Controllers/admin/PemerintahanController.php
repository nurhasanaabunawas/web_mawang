<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pemerintahan;
use Illuminate\Http\Request;

class PemerintahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemerintah = Pemerintahan::all();
        return view('admin.pemerintahan.index', compact('pemerintah'));
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
            'nip' => 'required',
            'jabatan' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
        ]);

        $pemerintah = new Pemerintahan;
        $pemerintah->nama = $request->input('nama');
        $pemerintah->nip = $request->input('nip');
        $pemerintah->jabatan = $request->input('jabatan');
        $pemerintah->jenis_kelamin = $request->input('jenis_kelamin');
        $pemerintah->alamat = $request->input('alamat');

        $pemerintah->save();

        return redirect()->route('pemerintahan.index');
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
        $pemerintah = Pemerintahan::find($id);

        $this->validate($request,[
            'nama' => 'required',
            'nip' => 'required',
            'jabatan' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
        ]);

        $pemerintah->nama = $request->nama;
        $pemerintah->nip = $request->nip;
        $pemerintah->jabatan = $request->jabatan;
        $pemerintah->jenis_kelamin = $request->jenis_kelamin;
        $pemerintah->alamat = $request->alamat;

        $pemerintah->save();

        return redirect()->route('pemerintahan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pemerintah = Pemerintahan::findOrFail($id);

        if($pemerintah->delete()){
            return redirect()->route('pemerintahan.index');
        }
    }
}

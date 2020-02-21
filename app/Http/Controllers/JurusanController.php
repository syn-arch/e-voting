<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

// call model
use App\Jurusan;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Session::get('login')) {
            return redirect('auth/login')->with(['pesan' => 'Kamus harus login terlebih dahulu']);
        }

        $data['judul'] = "Data Jurusan";
        $data['jurusan'] = Jurusan::all();

       return view('jurusan/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['judul'] = "Tambah Jurusan";
        return view('jurusan/tambah', $data);
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
            'nm_jurusan' => 'required'
        ]);

        Jurusan::create([
            'nm_jurusan' => $request->nm_jurusan
        ]);

        return redirect('/jurusan')->with(['sukses' => 'Ditambahkan']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['judul'] = "Edit Jurusan";
        $data['jurusan'] = Jurusan::where('id_jurusan', $id)->first();

        return view('jurusan/edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request,[
            'nm_jurusan' => 'required'
        ]);

        $jurusan = Jurusan::where('id_jurusan', $id)->first();
        $jurusan->nm_jurusan = $request->nm_jurusan;
        $jurusan->save();

        return redirect('/jurusan')->with('sukses','Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurusan = Jurusan::where('id_jurusan', $id)->delete();

        return redirect('/jurusan')->with('sukses','dihapus');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Kelas;

class KelasController extends Controller
{
    public function __construct()
    {
        if (!Session::get('login')) {
            return redirect('auth/login')->with(['pesan' => 'Kamus harus login terlebih dahulu']);
        }
    }
    
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

        $data['judul'] = "Data Kelas";
        $data['kelas'] = Kelas::all();

        return view('kelas/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $data['judul'] = "Tambah Kelas";

       return view('kelas/tambah', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nm_kelas' => 'required'
        ]);

        Kelas::create([
            'nm_kelas' => $request->nm_kelas
        ]);

        return redirect('/kelas')->with(['sukses' => 'Ditambah']);
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
        $data['judul'] = "Edit Kelas";
        $data['kelas'] = Kelas::where('id_kelas', $id)->first();

        return view('kelas/edit', $data);
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
        $this->validate($request, [
            'nm_kelas' => 'required'
        ]);

        $kelas = Kelas::where('id_kelas', $id)->first();
        $kelas->nm_kelas = $request->nm_kelas;
        $kelas->save();

        return redirect('/kelas')->with(['sukses' => 'Diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kelas::where('id_kelas', $id)->delete();

        return redirect('/kelas')->with(['sukses' => 'Dihapus']);
    }
}

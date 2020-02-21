<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use App\Kandidat;
use App\Kelas;
use App\Jurusan;

use File;

class KandidatController extends Controller
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

        $data = [
            'judul' => 'Data Kandidat',
            'kandidat' => Kandidat::orderBy('no_urut')->get()
        ];

        
        return view('kandidat/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['judul'] = "Tambah Kandidat";
        $data['kelas'] = Kelas::all();
        $data['jurusan'] = Jurusan::all();

        return view('kandidat/tambah', $data);
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
            'nm_kandidat' => 'required',
            'id_kelas' => 'required',
            'id_jurusan' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'tahun_ajaran' => 'required',
            'no_urut' => 'required',
            'gambar' => 'required|file|image|mimes:jpg,png'
        ]);

        // upload gambar
        $file = $request->file('gambar');
        $nm_gambar = $file->getClientOriginalName();
        $file->move('img/kandidat', $nm_gambar);

        Kandidat::create([
            'nm_kandidat' => $request->nm_kandidat,
            'no_urut' => $request->no_urut,
            'id_kelas' => $request->id_kelas,
            'id_jurusan' => $request->id_jurusan,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'gambar' => $nm_gambar,
            'tahun_ajaran' => $request->tahun_ajaran
        ]);

        return redirect('/kandidat')->with(['sukses' => 'Ditambah']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data['kandidat']   = Kandidat::where('id_kandidat', $id)->first();
        $data['kelas']      = Kelas::all();
        $data['jurusan']    = Jurusan::all();
        $data['judul']      = "Edit Kandidat";

        return view('kandidat/edit', $data);
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
            'nm_kandidat' => 'required',
            'id_kelas' => 'required',
            'id_jurusan' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'tahun_ajaran' => 'required',
            'no_urut' => 'required'
        ]);

         // upload gambar
        $file = $request->file('gambar');

        if ($file != '') {
            // update gambar
            $nm_gambar = $file->getClientOriginalName();
            $file->move('img/kandidat/', $nm_gambar);

            // hapus gambar
            $kandidat = Kandidat::where('id_kandidat', $id)->first();
            File::Delete('img/kandidat/' . $kandidat->gambar);

            $gambar = $nm_gambar;
        }else{
            $gambar = $request->gb_lama;
        }


        $kandidat = Kandidat::where('id_kandidat', $id)->first();
        $kandidat->nm_kandidat = $request->nm_kandidat;
        $kandidat->no_urut = $request->no_urut;
        $kandidat->id_kelas = $request->id_kelas;
        $kandidat->id_jurusan = $request->id_jurusan;
        $kandidat->jk = $request->jk;
        $kandidat->alamat = $request->alamat;
        $kandidat->email = $request->email;
        $kandidat->telepon = $request->telepon;
        $kandidat->visi = $request->visi;
        $kandidat->misi = $request->misi;
        $kandidat->gambar = $gambar;
        $kandidat->tahun_ajaran = $request->tahun_ajaran;
        $kandidat->save();

        return redirect('/kandidat')->with(['sukses' => 'Diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gambar = Kandidat::where('id_kandidat', $id)->first();
        File::Delete('img/kandidat/' . $gambar->gambar);

        Kandidat::where('id_kandidat', $id)->delete();
        return redirect('/kandidat')->with(['sukses', 'Dihapus']);
    }
}

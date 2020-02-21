<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DataPemilihan;
use App\Kandidat;

class LiveController extends Controller
{
    public function index()
    {
    	$data['judul'] = "Live Preview";

    	return view('live', $data);
    }

    public function action( Request $request)
    {
    	$this->validate($request, [
    		'tahun_ajaran' => 'required'
    	]);

    	$tahun_ajaran = $request->tahun_ajaran;

    	$data['judul'] = "Live Preview";
    	$data['data'] = DataPemilihan::all();

    	return view('live', $data);
    }

    public function get_data()
    {

      $data = [];

      $data['jessica'] = count(DataPemilihan::where('id_kandidat', 1)->get());
      $data['bella']   = count(DataPemilihan::where('id_kandidat', 14)->get());
      $data['nezuko']  = count(DataPemilihan::where('id_kandidat', 15)->get());

      echo json_encode($data);
    
    }

    public function result($tahun_ajaran1, $tahun_ajaran2)
    {
      $data['judul'] = "Hasil suara calon ketua OSIS";
      $data['tahun_ajaran'] = $tahun_ajaran1 . '/' . $tahun_ajaran2;
      $data['result'] = Kandidat::where('tahun_ajaran', $data['tahun_ajaran'])->get();

      return view('result', $data);
    }
}

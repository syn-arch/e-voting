<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Pemilih;
use App\Kandidat;
use App\DataPemilihan;

use Alert;

class HomeController extends Controller
{
   public function index()
   {
   		return view('home/landing');
   }

   public function home()
   {
   		if (!Session::get('id_pemilih')) {
        alert()->warning('Anda harus login terlebih dahulu.');
   			return redirect('/login');
   		}

         $data['kandidat'] = Kandidat::orderBy('no_urut', 'ASC')->get();

   		return view('home/index', $data);
   }

   public function login()
   {
	   	if (Session::get('id_pemilih')) {
   			return redirect('/bbc_evoting');	
   		}

   		return view('home/login');
   }

   public function login_action(Request $request)
   {
   		$this->validate($request, [
   			'barcode' => 'required'
   		]);

   		$barcode = $request->barcode;

   		$pemilih = Pemilih::where('barcode', $barcode)->first();

   		if ($pemilih) {
   			Session::put('id_pemilih', $pemilih->id_pemilih);

        alert()->success('Login Berhasil');

   			return redirect('/bbc_evoting');
   		}else{

        alert()->error('Barrcode tidak ditemukan', 'Gagal');
   			return redirect('/login');
   		}
   }

   public function logout()
   {
	   	Session::forget('id_pemilih');
	   	return redirect('/');
   }

   public function vote($id, $tahun_ajaran1, $tahun_ajaran2)
   {
      $id_pemilih = Session::get('id_pemilih');
      $id_kandidat = $id;
      $tahun_ajaran = $tahun_ajaran1 . '/' . $tahun_ajaran2;

      $pemilih = Pemilih::where('id_pemilih', $id_pemilih)->first();

      if ($pemilih->status == 1) {
        alert()->error('Kamu sudah menggunakan hak pilihmu.');
         return redirect('/bbc_evoting');
      }else{

        $pemilih->status = 1;
        $pemilih->save();

        $data_pemilihan = new DataPemilihan;
        $data_pemilihan->id_pemilih = $id_pemilih;
        $data_pemilihan->id_kandidat = $id_kandidat;
        $data_pemilihan->tahun_ajaran = $tahun_ajaran;
        $data_pemilihan->save();


        $kandidat = Kandidat::all()->toArray();

        foreach ($kandidat as $row) {
           $jml_suara = DataPemilihan::where('id_kandidat', $row['id_kandidat'])->where('tahun_ajaran', $tahun_ajaran)->get()->count();

           $kandidat_user = Kandidat::where('id_kandidat', $row['id_kandidat'])->first();
           $kandidat_user->jml_suara = $jml_suara;
           $kandidat_user->save();
        }

        
        Session::forget('id_pemilih');

        alert()->success('Voting berhasil');
      	return redirect('/login');

      }

   }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

use App\UserModel;

use File;


class UserController extends Controller
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
          
        $data['judul'] = "Profile Saya";
        $data['user'] = UserModel::where('id_admin', Session::get('id_admin'))->first();

        return view('user/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['judul'] = "Edit Profile";
        $data['user'] = UserModel::where('id_admin', Session::get('id_admin'))->first();

        return view('user/edit', $data);
    }

    public function ubah_password()
    {
        $data['judul'] = "Ubah Password";

        return view('user/ubah-password', $data);
    }

    public function ubah_password_proses(Request $request)
    {
        $this->validate($request, [
            'pw_lama' => 'required',
            'pw1' => 'required|same:pw2',
            'pw2' => 'required|same:pw1'
        ]);

        $user = UserModel::where('id_admin', Session::get('id_admin'))->first();

        if (Hash::check($request->pw_lama, $user->password)) {
            echo "password ok";
        }else{
            echo "password tidak sama";
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update($id, Request $request) 
    {
        $this->validate($request, [
            'nm_admin' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'jk' => 'required'
        ]);

        $id_admin = $id;
        $nm_admin = $request->nm_admin;
        $alamat = $request->alamat;
        $telepon = $request->telepon;
        $email = $request->email;
        $jk = $request->jk;
        $gb_lama = $request->gb_lama;
        $file = $request->file('gambar');

        if ($file != '') {
            // update gambar
            $nm_gambar = $file->getClientOriginalName();
            $file->move('img/admin/', $nm_gambar);

            // hapus gambar
            $admin = UserModel::where('id_admin', $id)->first();
            File::Delete('img/admin/' . $admin->gambar);

            $gambar = $nm_gambar;
        }else{
            $gambar = $gb_lama;
        }

        $user = UserModel::where('id_admin', $id_admin)->first();
        $user->nm_admin = $nm_admin;
        $user->alamat = $alamat;
        $user->jk = $jk;
        $user->email = $email;
        $user->telepon = $telepon;
        $user->gambar = $gambar;
        $user->save();

        return redirect('user/edit-my-profile')->with(['sukses' => 'Diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

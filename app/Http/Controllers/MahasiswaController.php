<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Laravel\Scout\Searchable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homepage()
    {
        return view('homepage');
    }

    public function loginregister()
    {
        return view('auth/login_register');
    }

    public function loginDB(Request $request)
    {
        $nim = $request->nim;
        $password = $request->password;
        $data = \App\Mahasiswa::where('nim','=',$nim)->first();
        if ($data){
            if ($password = $data->password){
                $request->session()->put('nama',$data->nama);
                $request->session()->put('nim',$data->nim);
                $request->session()->put('login',TRUE);

                return MahasiswaController::table();
            }else{
                echo "NAON 11111111111111111111111";
                return redirect('loginregister')->with('alert','Password atau NIM, Salah !');
            }
        }else{
            echo "NAON 22222222222222222222";
            return redirect('loginregister')->with('alert','NIM tidak terdaftar !');
        }
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('loginregister')->with('alert','Logout berhasil !');
    }

    public function profil($nim)
    {
        $data['data'] = \App\Mahasiswa::where('nim', '=', $nim)->get();
        return view('profil', $data);
    }

    public function table()
    {
        $data['data'] = \App\Mahasiswa::all();
        return view('table', $data);
    }

    public function file()
    {
        return view('file');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateDB(Request $request)
    {
        $mhs = array(
            'nama' => $request->name,
            'jurusan' => $request->jurusan,
            'angkatan' => $request->angkatan
        );

        \App\Mahasiswa::where('nim', '=', $request->nim)->update($mhs);

        // $data['data'] = \App\Mahasiswa::where('nim', '=', $request->nim)->get();
        return MahasiswaController::profil($request->nim);
    }

    public function registerDB(Request $request)
    {
        $mhs = new Mahasiswa;

        if ($request->password == $request->password_confirmation) {
            $mhs->nim = $request->nim;
            $mhs->nama = $request->name;
            $mhs->jurusan = $request->jurusan;
            $mhs->angkatan = $request->angkatan;
            $mhs->password = $request->password;

            $mhs->save();

            return redirect('table');
        } else {
            return redirect('loginregister');
        }
    }

    public function upload(Request $request)
    {
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
        if ($file) {
            // nama file
            $nama = uniqid().".".$file->getClientOriginalExtension();

            // echo 'File Name: ' . $nama;
            // echo '<br>';

            // // ekstensi file
            // echo 'File Extension: ' . $file->getClientOriginalExtension();
            // echo '<br>';

            // // real path
            // echo 'File Real Path: ' . $file->getRealPath();
            // echo '<br>';

            // // ukuran file
            // echo 'File Size: ' . $file->getSize();
            // echo '<br>';

            // // tipe mime
            // echo 'File Mime Type: ' . $file->getMimeType();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'uploads';
            $mhs = array(
                'foto_profil' => $nama,
            );
    
            \App\Mahasiswa::where('nim', '=', $request->nim)->update($mhs);
    
            $file->move($tujuan_upload, $nama);
            return MahasiswaController::profil($request->nim);
            
        }else{
            echo "GAAADAAAAAAAAAAAAAAAA";
        }
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
        //
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

<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Laravel\Scout\Searchable;
use Illuminate\Http\Request;

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
        # code...
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

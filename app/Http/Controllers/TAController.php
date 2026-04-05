<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TAController extends Controller
{
    // Menampilkan halaman form
    public function index()
    {
        return view('TA');
    }

    // Menyimpan data Nama dan NIM ke dalam Session
    //public function store(Request $request)
    //{
     //   $request->session()->put('nama', $request->nama);
      //$request->session()->put('nim', $request->nim);

        //return redirect()->route('form.show');
    //}

    // Mengambil data dari Session dan menampilkannya
    //public function show(Request $request)
    //{
      //  $data = [
        //    'nama' => $request->session()->get('nama'),
          //  'nim' => $request->session()->get('nim')
        //];

       // return view('show', $data);
    //}
}
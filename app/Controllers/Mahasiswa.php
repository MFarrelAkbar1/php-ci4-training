<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function index()
    {
        $data = [
            'nama' => 'Farrel',
            'jurusan' => 'Teknologi Informasi'
        ];

        return view('mahasiswa/index', $data);
    }
}
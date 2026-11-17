<?php

namespace App\Http\Controllers;

class SapaController extends Controller
{
    public function index()
    {
        $nama = 'Monica Pratiwi';

        return view('pages.sapa', [
            'nama' => $nama,
        ]);
    }
}

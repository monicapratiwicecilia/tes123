<?php

namespace App\Http\Controllers;

use App\Models\CategoryProduct;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ambil data kategori dari database, 5 data per halaman
        $kategori = CategoryProduct::paginate(5);

        return view('pages.category.show', [
            'kategori' => $kategori,
        ]);
    }

    // ... method create, store, show, edit, update, destroy biarkan seperti bawaan
}
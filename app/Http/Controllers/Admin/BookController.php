<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){

        return view('admin.buku.index');
    }

    public function create(){

        return view('admin.buku.tambah');
    }
}

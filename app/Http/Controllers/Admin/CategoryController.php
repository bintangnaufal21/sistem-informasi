<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;

class CategoryController extends Controller
{
    // TAMPILKAN SEMUA KATEGORI
    public function index()
    {
        $categories = Kategori::all();
        return view('admin.kategori.index', compact('categories'));
    }

    // FORM TAMBAH KATEGORI
    public function create()
    {
        return view('admin.kategori.tambah');
    }

    // SIMPAN KATEGORI
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255'
        ]);

        Kategori::create([
            'nama' => $request->nama
        ]);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil ditambahkan!');
    }

    // FORM EDIT KATEGORI
    public function edit($id)
    {
        $category = Kategori::findOrFail($id);
        return view('admin.kategori.edit', compact('category'));
    }

    // UPDATE KATEGORI
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255'
        ]);

        $category = Kategori::findOrFail($id);

        $category->update([
            'nama' => $request->nama
        ]);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diupdate!');
    }

    // HAPUS KATEGORI
    public function destroy($id)
    {
        $category = Kategori::findOrFail($id);
        $category->delete();

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dihapus!');
    }
}

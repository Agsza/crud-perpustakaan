<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $bukus = Buku::paginate(10);

        return view('books/index', compact('bukus'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'stock' => 'required|integer|min:0',
        ]);

        // 2. Simpan Data ke Database
        // Menggunakan Mass Assignment untuk membuat record baru
        Buku::create($validatedData);

        // 3. Redirect (Arahkan pengguna kembali setelah berhasil)
        return redirect()->route('buku.index')
                         ->with('success', 'Data buku berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        // 1. Cari data buku berdasarkan ID. 
        // Jika tidak ditemukan, laravel akan otomatis melempar 404.
        $bukus = Buku::findOrFail($id); 

        // 2. Tampilkan view 'books.edit' dan kirim data $book
        return view('books.edit', compact('bukus'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // 1. Validasi Data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'stock' => 'required|integer|min:0',
        ]);

        // 2. Cari dan Perbarui Data
        $bukus = Buku::findOrFail($id);
        $bukus->update($validatedData);

        // 3. Redirect
        return redirect()->route('buku.index')
                         ->with('success', 'Data buku berhasil diperbarui!');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        // 1. Cari data buku berdasarkan ID
        $buku = Buku::findOrFail($id);

        // 2. Hapus data dari database
        $buku->delete();

        // 3. Redirect ke halaman index dengan pesan sukses
        return redirect()->route('buku.index')
                         ->with('success', 'Data buku berhasil dihapus secara permanen.');

    }
}

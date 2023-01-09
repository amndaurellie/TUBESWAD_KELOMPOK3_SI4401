<?php

namespace App\Http\Controllers;

use App\Models\PeminjamanBuku;
use Illuminate\Http\Request;

class PeminjamanBukuController extends Controller
{
    public function index()
    {
        $items = PeminjamanBuku::latest()->get();
        return view('pages.peminjaman-buku.index', [
            'title' => 'Data Peminjaman Buku',
            'items' => $items
        ]);
    }
    public function edit($id)
    {
        $item = PeminjamanBuku::findOrFail($id);
        return view('pages.peminjaman-buku.edit', [
            'title' => 'Edit Peminjaman Buku',
            'item' => $item
        ]);
    }

    public function update($id)
    {

        request()->validate([
            'status' => ['required'],
            'return_date' => ['required']
        ]);
        $item = PeminjamanBuku::findOrFail($id);
        $item->update([
            'return_date' => request('return_date'),
            'status' => request('status')
        ]);

        return redirect()->route('peminjaman-buku.index')->with('success', 'Peminjaman buku berhasil diupdate!');
    }

    public function destroy($id)
    {
        $item = PeminjamanBuku::findOrFail($id);
        $item->delete();
        return redirect()->route('peminjaman-buku.index')->with('success', 'Peminjaman buku berhasil diupdate!');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\PembayaranAsrama;
use Illuminate\Http\Request;

class PembayaranAsramaController extends Controller
{
    public function index()
    {
        $items = PembayaranAsrama::latest()->get();
        return view('pages.pembayaran-asrama.index',[
            'title' => 'Data Pembayaran Asrama',
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pembayaran-asrama.create',[
            'title' => 'Tambah Pembayaran Asrama',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tahun_ajaran' => ['required'],
            'semester' => ['required','numeric'],
            'status' => ['required']
        ]);
        $data = $request->all();

        PembayaranAsrama::create($data);

        return redirect()->route('pembayaran-asrama.index')->with('success','Pembayaran Asrama berhasil ditambahkan!');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = PembayaranAsrama::findOrFail($id);
        return view('pages.pembayaran-asrama.edit',[
            'title' => 'Edit Pembayaran Asrama ' . $item->nama,
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'tahun_ajaran' => ['required'],
            'nominal' => ['required','numeric'],
            'status' => ['required'],
            'semester' => ['required','numeric']
        ]);
        $data = $request->all();
        $item = PembayaranAsrama::findOrFail($id);
       $item->update($data);

        return redirect()->route('pembayaran-asrama.index')->with('success','Pembayaran Asrama berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = PembayaranAsrama::findOrFail($id);
        $item->delete();
        return redirect()->route('pembayaran-asrama.index')->with('success','Pembayaran Asrama berhasil dihapus!');
    }
}

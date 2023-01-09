<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class SiswaController extends Controller
{
    public function index()
    {
        $items = Siswa::orderBy('nama','asc')->get();
        return view('pages.siswa.index',[
            'title' => 'Data Siswa',
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
        return view('pages.siswa.create',[
            'title' => 'Tambah Siswa',
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
            'nama' => ['required'],
            'kelas' => ['required'],
            'nis' => ['required','unique:siswas,nis'],
            'nomor_hp' => ['required'],
            'email' => ['required','unique:users,email'],
            'password' => ['required','min:5']
        ]);
        $data = $request->except(['email','password','nomor_hp']);

        // create user
        $user = User::create([
            'name' => request('nama'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'nomor_hp' => request('nomor_hp'),
            'role' => 'siswa'
        ]);
        $data['user_id'] = $user->id;
        Siswa::create($data);

        return redirect()->route('siswa.index')->with('success','Siswa berhasil ditambahkan!');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Siswa::findOrFail($id);
        return view('pages.siswa.edit',[
            'title' => 'Edit Siswa ' . $item->nama,
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
        $item = Siswa::findOrFail($id);
        $request->validate([
            'nama' => ['required'],
            'kelas' => ['required'],
            'nis' => ['required',Rule::unique('siswas','nis')->ignore($id)],
            'nomor_hp' => ['required'],
            'email' => ['required',Rule::unique('users','email')->ignore($item->user->id)]
        ]);
        $data = $request->except(['email','password','nomor_hp']);

        if(request('password'))
        {
            $password = bcrypt(request('password'));
        }else{
            $password = $item->user->password;
        }
        // cek user
        if($item->user()->count() < 1)
        {
            $user = User::create([
                'name' => request('nama'),
                'email' => request('email'),
                'password' => $password,
                'nomor_hp' => request('nomor_hp'),
                'role' => 'siswa'
            ]);
            $data['user_id'] = $user->id;
        }else{
            $item->user()->update([
                'name' => request('nama'),
                'email' => request('email'),
                'password' => $password,
                'nomor_hp' => request('nomor_hp')
            ]);
        }
       $item->update($data);

        return redirect()->route('siswa.index')->with('success','Siswa berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Siswa::findOrFail($id);
        $item->user()->delete();
        $item->delete();
        return redirect()->route('siswa.index')->with('success','Siswa berhasil dihapus!');
    }
}

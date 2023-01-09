@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-12">
                <h2 class="text-center">Data Ekstrakulikuler</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('ekstrakulikuler.create') }}" class="btn btn-primary mb-4"><i class="fas fa-plus"></i>
                    Tambah Data</a>
                <table class="table table-striped table-hover" id="dTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>Pelatih</th>
                            <th>Pencapaian</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img src="{{ $item->gambar() }}" class="img-fluid" style="max-height:80px" alt="">
                                </td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->jenis }}</td>
                                <td>{{ $item->pelatih }}</td>
                                <td>{!! $item->pencapaian !!}</td>
                                <td>
                                    <a href="{{ route('ekstrakulikuler.edit', $item->id) }}" class="btn btn-info"><i
                                            class="fas fa-edit"></i> Edit</a>
                                    <form action="{{ route('ekstrakulikuler.destroy', $item->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button
                                            class="btn btn-danger"><i class="fas fa-trash"></i>
                                            Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

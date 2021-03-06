@extends('layout.side')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-6">
        <h1 class="mt-3" >DATA KADER BUMDES</h1>
    </div>
    </div>
</div>
        <div class="container">
        <div class="row">
            <div class="col-6">    
                <a href="/bumdescreate" class="btn btn-primary my-3">Tambah Data</a>
            </div>
            <div class="col-6">
        </div>
    </div>

    @if (session('status'))
        <div class="alert alert-success">
        {{ session('status') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-sm table-responsive-sm">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIK</th>
                <th scope="col">NAMA</th>
                <th scope="col">JABATAN</th>
                <th scope="col">PERIODE</th>
                <th scope="col">AKSI</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pemdes  as $pds)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                
                <td>{{$pds->nik}}</td>
                <td>{{$pds->nama}}</td>
                <td>{{$pds->jabatan}}</td>
                <td>{{$pds->periode}}</td>
                
                <td>
                    <a href="/bumdes/bumdesedit/{{ $pds->id }}" class="badge badge-success">Edit</a>
                    <a href="/bumdes/hapus/{{ $pds->id }}" class="badge badge-danger" onsubmit="return confirm('Yakin hapus data?')">Hapus</a>
            </td>
            </tr>
        @endforeach
        </tbody>
        </table>
    </div>

    


@endsection

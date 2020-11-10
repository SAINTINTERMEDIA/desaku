@extends('layout.side')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-6">
        <h1 class="mt-3" >DATA KADER PKK</h1>
    </div>
    </div>
</div>
        <div class="container">
        <div class="row">
            <div class="col-6">    
                <a href="/pkkcreate" class="btn btn-primary my-3">Tambah Data</a>
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
                    <a href="/pkk/pkkedit/{{ $pds->id }}" class="badge badge-success">Edit</a>
                    
                    <a href="/pkk/hapus/{{ $pds->id }}" class="badge badge-danger">Hapus</a>

                    <div class="modal" tabindex="-1">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Modal title</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p>Modal body text goes here.</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
            </td>
            </tr>
        @endforeach
        </tbody>
        </table>
    </div>

    


@endsection

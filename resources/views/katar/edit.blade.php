@extends('layout.side')


@section('createfam')

<div class="container-fluid">
    <h1 class="mt-4">DATA KADER KARANG TARUNA</h1>
    <ol class="breadcrumb mb-8">
        <li class="breadcrumb-item ative">EDIT DATA KADER</li>
    </ol>
                    
                <form method="POST" action="/katarupdate/{{ $pemdes->id }}">
                    
                    {{ csrf_field() }}
                    {{ method_field('put') }}

                        <div class="form-group">
                        <label for="KK" class="mt-8">NOMOR</label>
                        <input type="text" class="form-control @error('nomor') is-invalid @enderror" id="nomor" name="nomor" value="{{$pemdes->id}}" readonly>
                            @error('nommor')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control  @error('nik') is-invalid @enderror" id="nik" placeholder="Masukan NIK" name="nik" value="{{ $pemdes->nik }}">
                            @error('nik')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="nik">NAMA</label>
                            <input type="text" class="form-control  @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{ $pemdes->nama }}">
                            @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="jabatan">JABATAN</label>
                            <select type="text" class="form-control  @error('jabatan') is-invalid @enderror" id="jabatan" placeholder="Masukan Jabatan" name="jabatan" value="{{ $pemdes->jabatan }}">
                                <option placeholder>Pilih satu..</option>
                                <option value="Ketua">Ketua</option>
                                <option value="Wakil">Wakil</option>
                                <option value="Sekretaris 1">Sekretaris 1</option>
                                <option value="Sekretaris 2">Sekretaris 2</option>
                                <option value="Bendahara">Bendahara</option>
                                <option value="Seksi 1">Seksi 1</option>
                                <option value="Seksi 2">Seksi 2</option>
                                <option value="Seksi 3">Seksi 3</option>
                                <option value="Seksi 4">Seksi 4</option>
                                <option value="Seksi 5">Seksi 5</option>
                                <option value="Seksi 6">Seksi 6</option>
                                <option value="Seksi 7">Seksi 7</option>
                                <option value="Seksi 8">Seksi 8</option>
                            @error('jabatan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama">PERIODE</label>
                            <input type="text" class="form-control  @error('periode') is-invalid @enderror" id="peiode" placeholder="Masukan Peridoe" name="periode" value="{{ $pemdes->periode }}">
                            @error('periode')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">JENIS</label>
                            <select type="text" class="form-control  @error('jenis') is-invalid @enderror" id="jenis" placeholder="Masukan Jenis" name="jenis" value="{{ $pemdes->jenis }}">
                            <option selected>Pilih satu..</option>
                            <option value="PKK">PKK</option>
                            <option value="KATAR">KATAR</option>
                            <option value="BUMDES">BUMDES</option>
                            @error('jenis')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </select>
                        </div> 
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </form>
                </div>          
            </div>
        </div>
@endsection

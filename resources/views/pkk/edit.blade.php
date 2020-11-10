@extends('layout.side')


@section('createfam')

<div class="container-fluid">
    <h1 class="mt-4">DATA KADER PKK</h1>
    <ol class="breadcrumb mb-8">
        <li class="breadcrumb-item ative">EDIT DATA KADER</li>
    </ol>
                    
                <form method="POST" action="/pkkupdate/{{ $pemdes->id }}">
                    
                    {{ csrf_field() }}
                    {{ method_field('put') }}

                        <div class="form-group">
                        <label for="KK">NOMOR</label>
                        <input type="text" class="form-control @error('nomor') is-invalid @enderror" id="nomor" name="nomor" value="{{$pemdes->id}}" readonly>
                            @error('nommor')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control  @error('nik') is-invalid @enderror" id="nik" placeholder="Masukan NIK" name="nik" value="{{ $pemdes->nik }}">
                            @error('nik')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        {{-- <div class="form-group">
                            <label for="nik">NAMA</label>
                            <input type="text" class="form-control  @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{ $pemdes->nama }}">
                            @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div> --}}
                        <div class="form-group">
                            <label for="jabatan">JABATAN</label>
                            <select type="text" class="form-control  @error('jabatan') is-invalid @enderror" id="jabatan" placeholder="Masukan Jabatan" name="jabatan" value="{{ $pemdes->jabatan }}">
                                <option placeholder>Pilih Jabatan..</option>
                                <option value="Ketua Umum">Ketua Umum</option>
                                <option value="Ketua Tim Penggerak">Ketua Tim Penggerak</option>
                                <option value="Sekretaris">Sekretaris</option>
                                <option value="Wakil Sekretaris">Wakil Sekretaris</option>
                                <option value="Bendahara">Bendahara</option>
                                <option value="Ketua Pokja 1">Ketua Pokja 1</option>
                                <option value="Ketua Pokja 2">Ketua Pokja 2</option>
                                <option value="Ketua Pokja 3">Ketua Pokja 3</option>
                                <option value="Ketua Pokja 4">Ketua Pokja 4</option>
                                <option value="Angota Pokja 1">Angota Pokja 1</option>
                                <option value="Angota Pokja 2">Angota Pokja 2</option>
                                <option value="Angota Pokja 3">Angota Pokja 3</option>
                                <option value="Angota Pokja 4">Angota Pokja 4</option>
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

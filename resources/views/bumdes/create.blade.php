@extends('layout.side')

@section('createfam')
<div class="container-fluid">
    <h1 class="mt-4">BADAN USAHA MILIK DESA</h1>
    <ol class="breadcrumb mb-8">
        <li class="breadcrumb-item ative">INPUT DATA KADER BUMDES</li>
    </ol>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert">×</button> 
        </div>
    @endif

    <div class="row" >
        <div class="col-12">
            
            <form method="POST" action="/bumdes">
                @csrf
                <div class="form-group">
                <label for="Nomor" class="mt-8">NOMOR</label>
                <input type="text" class="form-control @error('nomor') is-invalid @enderror" id="nomor"  name="nomor" value="{{$pemdes}}" readonly>
                    @error('nomor')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control  @error('nik') is-invalid @enderror Dsnik" id="nik" placeholder="Masukan NIK" name="nik" value="{{ old('nik') }}"
                    data-toggle="modal" data-target="#exampleModal">
                    @error('nik')<div class="invalid-feedback">{{ $message }}</div>@enderror							
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control  @error('nama') is-invalid @enderror Dsnama" id="nama" placeholder="Nama" name="nama" value="{{ old('nama') }}">
                    @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="nama">Tempat lahir</label>
                    <input type="text" class="form-control  @error('tempat_lahir') is-invalid @enderror Dstempatlahir" id="tempat_lahir" placeholder="Tempat Lahir" name="tempat_lahir" value="{{ old('tempat_lahir') }}">
                    @error('tempat_lahir')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="nama">Tanggal Lahir</label>
                    <input type="text" class="form-control  @error('tgl_lahir') is-invalid @enderror Dstgllahir" id="tgl_lahir" placeholder="Tanggal Lahir" name="tgl_lahir" value="{{ old('tgl_lahir') }}">
                    @error('tgl_lahir')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="nama">Jabatan</label>
                    <select type="text" class="form-control  @error('jabatan') is-invalid @enderror Dsjabatan" id="jabatan" placeholder="Masukan Jabtan" name="jabatan" value="{{ old('jabatan') }}">
                        <option placeholder>Pilih satu..</option>
                        <option value="Ketua">Ketua</option>
                        <option value="Sekretaris">Sekretaris</option>
                        <option value="Bendahara">Bendahara</option>
                        <option value="Manajer Unit Usaha">Manajer Unit Usaha</option>
                    @error('jabatan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </select>
                </div>

                <div class="form-group">
                    <label for="nama">Periode</label>
                    <input type="text" class="form-control  @error('periode') is-invalid @enderror Dsperiode" id="periode" placeholder="Masukan Periode" name="periode" value="{{ old('periode') }}">
                    @error('periode')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control  @error('jenis') is-invalid @enderror" id="jenis"  name="jenis" value="BUMDES">
                    @error('jenis')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                    <button type="submit" class="btn btn-secondary btn-lg btn-block">Simpan</button>
            </form>
        </div> 
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DATA PENDUDUK</h5>
            <input type="text" class="form-control  @error('nik') is-invalid @enderror" id="nik" placeholder="Cari NIK" name="nik" >
            @error('nik')<div class="invalid-feedback">{{ $message }}</div>@enderror							
    
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        
        <div class="modal-body">
            <table class="table-responsive table-sm">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col" class="nik">NIK</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">RT</th>
                    <th scope="col">RW</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($kk  as $fm)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td><button class="btnnik" data-id="{{$fm->nik}}" data-nama="{{$fm->nama}}" data-tempat_lahir="{{$fm->tempat_lahir}}" data-tgl_lahir="{{$fm->tgl_lahir}}" data-dismiss="modal">{{$fm->nik}}</button><td>
                        <td>{{$fm->nama}}</td>
                        <td>{{$fm->alamat}}</td>
                        <td>{{$fm->tempat_lahir}}</td>
                        <td>{{$fm->tgl_lahir}}</td>
                        <td>{{$fm->rt}}</td>
                        <td>{{$fm->rw}}</td>
                        <td>
                            {{-- <a href="/familyedit/{{ $fm->id }}" class="badge badge-success">Edit</a>
                            <a href="/family/hapus/{{ $fm->id }}" class="badge badge-danger">Hapus</a> --}}
                    </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
            {{ $kk ->links() }}
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
@endsection
@section('footer')
<script type="text/javascript">
	$(document).ready(function(){
	$('.btnnik').click(function(){
	var $nik = $(this).data("id");
    var $nama = $(this).data("nama");
    var $tempat_lahir = $(this).data("tempat_lahir");
    var $tgl_lahir = $(this).data("tgl_lahir");
    console.log($(this).data("id"))
    $('.Dsnik').val($nik)
    $('.Dsnama').val($nama)
    $('.Dstempatlahir').val($tempat_lahir)
    $('.Dstgllahir').val($tgl_lahir)
	});		
	});
</script>
    
@endsection


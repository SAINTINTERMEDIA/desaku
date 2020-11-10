<?php

namespace App\Http\Controllers;

use App\Katar;
use App\Familycards;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;  
use illuminate\Support\Collection;

class KatarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedes = autonumber_date('pemdes','nomor','pedes','tglentry','tglentry');
        $pemdes = DB::table('pemdes as a')
        ->join('familycards as b','a.nik','=','b.nik')
        ->select('a.id', 'b.nik', 'b.nama', 'a.jabatan', 'a.periode')   
        ->where('jenis','KATAR')
        ->get();
        return view ('katar.index', compact ('pedes', 'pemdes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pemdes = autonumber_date('pemdes','nomor','pedes','tglentry','tglentry');
        $kk = DB::table('familycards')->paginate(10);
        return view('katar.create', compact ('pemdes','kk'));
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
            'jabatan' => 'required',
            'periode'  => 'required',
            'jenis' => 'required'
        ]);
          //CARA KE TIGA
        katar::create($request->all());
        return redirect('/katar')->with('status','Karang Taruna Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Katar  $katar
     * @return \Illuminate\Http\Response
     */
    public function show(Katar $katar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Katar  $katar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pemdes = katar::find($id);
        return view('katar.edit',compact('pemdes'));
    }

    public function delete($id)
        {
            $pemdes = katar::find($id);
            $pemdes->delete();
            return redirect('/katar')->with('status','Data Karang Taruna Berhasil Di Hapus!');
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Katar  $katar
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        
        $this->validate($request,[
            // 'nama' => 'required',
            'jabatan' => 'required',
            'periode'  => 'required',
            'jenis' => 'required'
        ]);
        $pemdes = Katar::find($id);
        // $katar->nama = $request->nama;
        $pemdes->jabatan = $request->jabatan;
        $pemdes->periode = $request->periode;
        $pemdes->jenis = $request->jenis;
        $pemdes->save();
        return redirect('/katar')->with('status','Data Karang Taruna Berhasil Di Ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Katar  $katar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Katar $katar)
    {
        //
    }
}

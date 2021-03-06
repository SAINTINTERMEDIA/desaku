<?php

namespace App\Http\Controllers;

use App\Pkk;
use App\Familycards;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;  
use illuminate\Support\Collection;

class PkkController extends Controller
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
        ->where('jenis','PKK')
        ->get();
        return view ('pkk.index', compact ('pedes', 'pemdes'));
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
        return view('pkk.create', compact ('pemdes','kk'));
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
        pkk::create($request->all());
        return redirect('/pkk')->with('status','PKK Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pkk  $pkk
     * @return \Illuminate\Http\Response
     */
    public function show(Pkk $pkk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pkk  $pkk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pemdes = Pkk::find($id);
        return view('pkk.edit',compact('pemdes'));
    }

    public function delete($id)
        {
            $pemdes = Pkk::find($id);
            $pemdes->delete();
            return redirect('/pkk')->with('status','Data PKK Berhasil Di Hapus!');
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pkk  $pkk
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
        $pemdes = Pkk::find($id);
        // $katar->nama = $request->nama;
        $pemdes->jabatan = $request->jabatan;
        $pemdes->periode = $request->periode;
        $pemdes->jenis = $request->jenis;
        $pemdes->save();
        return redirect('/pkk')->with('status','Data PKK Berhasil Di Ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pkk  $pkk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pkk $pkk)
    {
        //
    }
}

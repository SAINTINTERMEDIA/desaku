<?php

namespace App\Http\Controllers;

use App\Bumdes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;  
use illuminate\Support\Collection;

class BumdesController extends Controller
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
        ->where('jenis','BUMDES')
        ->get();
        return view ('bumdes.index', compact ('pedes', 'pemdes'));
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
        return view('bumdes.create', compact ('pemdes','kk'));
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
        Bumdes::create($request->all());
        return redirect('/bumdes')->with('status','Bumdes Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bumdes  $bumdes
     * @return \Illuminate\Http\Response
     */
    public function show(Bumdes $bumdes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bumdes  $bumdes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pemdes = Bumdes::find($id);
        return view('bumdes.edit',compact('pemdes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bumdes  $bumdes
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request,[
            'jabatan' => 'required',
            'periode'  => 'required',
            'jenis' => 'required'
        ]);
        $pemdes = Bumdes::find($id);
        $pemdes->jabatan = $request->jabatan;
        $pemdes->periode = $request->periode;
        $pemdes->jenis = $request->jenis;
        $pemdes->save();
        return redirect('/bumdes')->with('status','Data BUMDES Berhasil Di Ubah!');
    }

    public function delete($id)
        {
            $pemdes = Bumdes::find($id);
            $pemdes->delete();
            return redirect('/pkk')->with('status','Data PKK Berhasil Di Hapus!');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bumdes  $bumdes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bumdes $bumdes)
    {
        //
    }
}

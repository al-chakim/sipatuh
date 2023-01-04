<?php

namespace Modules\Lingkungan\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Lingkungan\Entities\P8a;
use Illuminate\Contracts\Support\Renderable;

class P8aController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        // return view('lingkungan::index');
        return view('lingkungan::p8.p8a.p8a',[
            'p8as' => P8a::select()->where('user_id', Auth::user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('lingkungan::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
        $document = $request->file('berkas')->store('dokumen');
        if ($request->file('berkas')) {
            $document;
        }
        $query = P8a::select()->get()->count();
        $id = $query + 1;
        P8a::create([
            'id' => $id,
            'user_id' => Auth::user()->id,
            // 'nama' => $request->nama,
            // 'nomer_surat' => $request->nomer_surat,
            'perihal' => $request->perihal,
            'divisi' => $request->divisi,
            'wulan' => $request->wulan,
            'bulan' => $request->bulan,
            'tanggal_dibuat' => $request->tanggal_dibuat,
            'berkas' => $document,
            'keterangan' => $request->keterangan,
            'status' => 'diajukan',

        ]);
        return redirect('/Lingkungan/p8a')->with('status', 'File berhasil diupload');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('lingkungan::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        // return view('lingkungan::edit');
        return view('lingkungan::p8.p8a.edit',[
            'p8a'=>P8a::select()->where('id', $id)->get()->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
        P8a::where('id', $id)->update([
            'id'=>$id,
            // 'jenis'=>$request->jenis,
            // 'nomer_surat'=>$request->nomer_surat,
            'perihal'=>$request->perihal,
            'divisi'=>$request->divisi,
            'wulan'=>$request->wulan,
            'bulan'=>$request->bulan,
            'status'=>$request->status,
            'keterangan'=>$request->keterangan,
            'catatan'=>$request->catatan,
        ]);
        return redirect('Lingkungan/p8a')->with('success', 'Data anda berasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
        P8a::where('id',$id)->delete();
        return redirect('/Lingkungan/p8a')->with('success', 'Data anda berasil dihapus');
    }
}

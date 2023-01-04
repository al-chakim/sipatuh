<?php

namespace Modules\Lingkungan\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Lingkungan\Entities\P1a;
use Modules\Lingkungan\Entities\P1b;
use Modules\Lingkungan\Entities\P2a;
use Modules\Lingkungan\Entities\P9a;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
// use Illuminate\Contracts\Support\Renderable;

class TteController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function tw1()
    {
        // $terima1a = P1a::select()->where('wulan','TW I')->where('status','disetujui')->get();
        // $terima1b = P1b::select()->where('wulan','TW I')->where('status','disetujui')->get();
        // $terima2a = P2a::select()->where('wulan','TW I')->where('status','disetujui')->get();
        $terimabogors = P9a::select()->where('user_id', Auth::user()->id)->where('wulan','TW I')->where('status','disetujui')->get();
        $terimabogor = P9a::select()->get()->first();
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('Terverifikasi oleh Admin Lingkungan'));
        $pdf = PDF::loadview('lingkungan::p9.tte', compact('terimabogors','terimabogor','qrcode'));
        return $pdf->stream('Laporan Surat Lingkungan');
    }

    public function tw2()
    {
        // $terima1a = P1a::select()->where('wulan','TW I')->where('status','disetujui')->get();
        // $terima1b = P1b::select()->where('wulan','TW I')->where('status','disetujui')->get();
        // $terima2a = P2a::select()->where('wulan','TW I')->where('status','disetujui')->get();
        $terimabogors = P9a::select()->where('user_id', Auth::user()->id)->where('wulan','TW II')->where('status','disetujui')->get();
        $terimabogor = P9a::select()->get()->first();
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('Terverifikasi oleh Admin Lingkungan'));
        $pdf = PDF::loadview('lingkungan::p9.tte', compact('terimabogors','terimabogor','qrcode'));
        return $pdf->stream('Laporan Surat Lingkungan');
    }

    public function tw3()
    {
        // $terima1a = P1a::select()->where('wulan','TW I')->where('status','disetujui')->get();
        // $terima1b = P1b::select()->where('wulan','TW I')->where('status','disetujui')->get();
        // $terima2a = P2a::select()->where('wulan','TW I')->where('status','disetujui')->get();
        $terimabogors = P9a::select()->where('user_id', Auth::user()->id)->where('wulan','TW III')->where('status','disetujui')->get();
        $terimabogor = P9a::select()->get()->first();
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('Terverifikasi oleh Admin Lingkungan'));
        $pdf = PDF::loadview('lingkungan::p9.tte', compact('terimabogors','terimabogor','qrcode'));
        return $pdf->stream('Laporan Surat Lingkungan');
    }

    public function tw4()
    {
        // $terima1a = P1a::select()->where('wulan','TW I')->where('status','disetujui')->get();
        // $terima1b = P1b::select()->where('wulan','TW I')->where('status','disetujui')->get();
        // $terima2a = P2a::select()->where('wulan','TW I')->where('status','disetujui')->get();
        $terimabogors = P9a::select()->where('user_id', Auth::user()->id)->where('wulan','TW IV')->where('status','disetujui')->get();
        $terimabogor = P9a::select()->get()->first();
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('Terverifikasi oleh Admin Lingkungan'));
        $pdf = PDF::loadview('lingkungan::p9.tte', compact('terimabogors','terimabogor','qrcode'));
        return $pdf->stream('Laporan Surat Lingkungan');
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
        return view('lingkungan::edit');
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
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}

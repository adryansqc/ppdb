<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\PendaftaranSiswa;
use Illuminate\Http\Request;

class PendaftaranSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $models = Pendaftaran::latest()
            ->paginate(50);
        $data['models'] = $models;
        return view('operator.pendaftaransiswa_index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        // dd($pendaftaran);
        return view('operator.pendaftaransiswa_show', [
        'models' => $pendaftaran,
        'title' => 'Data Lengkap Siswa Yang Mendaftar',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function verifikasi($id)
{
    // Temukan data pendaftaran berdasarkan ID
    $dataPendaftaran = Pendaftaran::findOrFail($id);

    // Ubah status pendaftaran menjadi "Terverifikasi"
    $dataPendaftaran->status_pendaftaran = 'Terverifikasi';
    $dataPendaftaran->save();
    return redirect()->back();

    // Kode lainnya...
}

/**
 * Tandai pendaftaran siswa sebagai "Tidak Sah".
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function tidakSah($id)
{
    // Temukan data pendaftaran berdasarkan ID
    $dataPendaftaran = Pendaftaran::findOrFail($id);

    // Ubah status pendaftaran menjadi "Tidak Sah"
    $dataPendaftaran->status_pendaftaran = 'Tidak Sah';
    $dataPendaftaran->save();
    return redirect()->back();

    // Kode lainnya...
}

}

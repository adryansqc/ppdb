<?php

namespace App\Http\Controllers;

use App\Models\JumlahPesertaDaftar;
use Illuminate\Http\Request;

class JumlahPesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = JumlahPesertaDaftar::latest()
            ->paginate(50);
        $data['models'] = $models;
        return view('operator.jumlah_peserta_index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'model' => new JumlahPesertaDaftar(),
            'method' => 'POST',
            'route' => 'jumlahpeserta.store',
            'namaTombol' => 'SIMPAN',
        ];
        return view('operator.jumlahpeserta_form',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([
            'jumlah_peserta' => 'required',
            'tahun' => 'required',
        ]);
        JumlahPesertaDaftar::create($requestData);
        flash('Data Berhasil Di Simpan');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'model'         => JumlahPesertaDaftar::findOrFail($id),
            'method'        => 'PUT',
            'route'         => ['jumlahpeserta.update',$id],
            'namaTombol'    => 'UPDATE'
        ];
        return view('operator.jumlahpeserta_form',$data);
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
        $requestData = $request->validate([
            'jumlah_peserta' => 'required',
            'tahun' => 'required',
        ]);
        $jumlahpeserta = JumlahPesertaDaftar::findOrFail($id);
        $jumlahpeserta->fill($requestData);
        $jumlahpeserta->save();
        flash('Data Berhasil Di Simpan');
        return back();
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
}

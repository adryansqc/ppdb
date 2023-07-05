<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = Pendaftaran::latest()->paginate(10);
        $data ['models'] = $models;
        return view('operator.pengumumansiswa_index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'model' => new Pendaftaran(),
            'method' => 'POST',
            'route' => 'pengumumansiswa.store',
            'namaTombol' => 'SIMPAN',
        ];
        return view('operator.pengumuman_form',$data);
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
            'tes_tertulis' => 'nullable',
            'tes_bacaan' => 'nullable',
            'hasil' => 'nullable',
        ]);
        Pendaftaran::create($requestData);
        flash('data telah disimpan')->success();
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
            'model' => Pendaftaran::findOrFail($id),
            'method' => 'PUT',
            'route' => ['pengumumansiswa.update', $id],
            'namaTombol' => 'UPDATE'
        ];
        return view('operator.pengumuman_form',$data);
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
            'tes_tertulis' => 'nullable',
            'tes_bacaan' => 'nullable',
            'hasil' => 'nullable',
        ]);
        $hasil = Pendaftaran::findOrFail($id);
        $hasil->fill($requestData);
        $hasil->save();
        flash('data telah disimpan')->success();
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

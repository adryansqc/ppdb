<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePendaftaranRequest;
use App\Http\Requests\UpdatePendaftaranRequest;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::user();
        $pendaftaran = Pendaftaran::where('user_id', $user->id)->paginate(10);
        return view('siswa.pendaftaran', ['pendaftaran' => $pendaftaran]);
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
            'route' => 'pendaftaran.store',
            'namaTombol' => 'SIMPAN',
        ];
        return view('siswa.pendaftaran_form',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePendaftaranRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([
            'jenis_pendaftaran' => 'required|in:baru,pindahan',
            'alamat_asal_sekolah' => 'required',
            'pernah_paud' => 'required|in:iya,tidak',
            'pernah_tk' => 'required|in:iya,tidak',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
            'nisn' => 'nullable',
            'nik' => 'nullable',
            'tempat_lahir' => 'nullable',
            'tanggal_lahir' => 'nullable|date',
            'agama' => 'nullable',
            'kebutuhan_khusus' => 'nullable|in:autis,bakat istimewa,cerdas istimewa,down syndrome,hyper aktif,indigo,kesulitan belajar,lainnya,tidak ada',
            'riwayat_penyakit' => 'nullable',
            'alamat_jalan' => 'nullable',
            'rt' => 'nullable',
            'rw' => 'nullable',
            'alamat_sambung' => 'nullable',
            'nama_kelurahan' => 'nullable',
            'kecamatan' => 'nullable',
            'kota_kabupaten' => 'nullable',
            'kode_pos' => 'nullable',
            'no_hp' => 'nullable',
            'no_tlp' => 'nullable',
            'email' => 'nullable|email',
            'sktm' => 'nullable',
            'no_kks' => 'nullable',
            'no_kps' => 'nullable',
            'no_kip' => 'nullable',
            'no_kis' => 'nullable',
            'kewarganegaraan' => 'required',
            'nama_ayah' => 'nullable',
            'tahun_lahir_ayah' => 'nullable',
            'pendidikan_ayah' => 'nullable|in:D1,D2,D3,S1,S2,S3,putus SD,SD sederajat,SMP sederajat,SMA sederajat,tidak sekolah',
            'pekerjaan_ayah' => 'nullable',
            'penghasilan_ayah' => 'nullable',
            'nama_ibu' => 'nullable',
            'tahun_lahir_ibu' => 'nullable',
            'pendidikan_ibu' => 'nullable|in:D1,D2,D3,S1,S2,S3,putus SD,SD sederajat,SMP sederajat,SMA sederajat,tidak sekolah',
            'pekerjaan_ibu' => 'nullable',
            'penghasilan_ibu' => 'nullable',
            'tinggi_badan' => 'nullable|integer',
            'berat_badan' => 'nullable|integer',
            'jml_saudara_kandung' => 'nullable|integer',
            'ukuran_baju' => 'nullable',
            'ukuran_celana' => 'nullable',
            'foto' => 'nullable|mimes:png,jpg,jpeg|max:5000',
            'bukti_pembayaran' => 'nullable|mimes:png,jpg,jpeg|max:5000',
        ]);
        // $requestData['prestasi'] = $request->file('prestasi')->store('public');
        $requestData['user_id'] = $request->user()->id;

        if ($request->hasFile('bukti_pembayaran')) {
            $requestData['bukti_pembayaran'] = $request->file('bukti_pembayaran')->store('public');
        }

        if ($request->hasFile('foto')) {
            $requestData['foto'] = $request->file('foto')->store('public');
        }

        $pendaftaran = new Pendaftaran;
        $pendaftaran->status_pendaftaran = 'Menunggu Verifikasi';
        $pendaftaran->fill($requestData);
        $pendaftaran->save();

        flash('Data berhasil disimpan');

        return back();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        return view('pendaftaran_show', compact('pendaftaran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'model' => Pendaftaran::findOrFail($id),
            'method' => 'PUT',
            'route' => ['pendaftaran.update', $id],
            'namaTombol' => 'UPDATE'
        ];
        return view('siswa.pendaftaran_form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePendaftaranRequest  $request
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->validate([
            'jenis_pendaftaran' => 'required|in:baru,pindahan',
            'alamat_asal_sekolah' => 'required',
            'pernah_paud' => 'required|in:iya,tidak',
            'pernah_tk' => 'required|in:iya,tidak',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
            'nisn' => 'nullable',
            'nik' => 'nullable',
            'tempat_lahir' => 'nullable',
            'tanggal_lahir' => 'nullable|date',
            'agama' => 'nullable',
            'kebutuhan_khusus' => 'nullable|in:autis,bakat istimewa,cerdas istimewa,down syndrome,hyper aktif,indigo,kesulitan belajar,lainnya,tidak ada',
            'riwayat_penyakit' => 'nullable',
            'alamat_jalan' => 'nullable',
            'rt' => 'nullable',
            'rw' => 'nullable',
            'alamat_sambung' => 'nullable',
            'nama_kelurahan' => 'nullable',
            'kecamatan' => 'nullable',
            'kota_kabupaten' => 'nullable',
            'kode_pos' => 'nullable',
            'no_hp' => 'nullable',
            'no_tlp' => 'nullable',
            'email' => 'nullable|email',
            'sktm' => 'nullable',
            'no_kks' => 'nullable',
            'no_kps' => 'nullable',
            'no_kip' => 'nullable',
            'no_kis' => 'nullable',
            'kewarganegaraan' => 'required|in:wni,wna',
            'nama_ayah' => 'nullable',
            'tahun_lahir_ayah' => 'nullable',
            'pendidikan_ayah' => 'nullable|in:D1,D2,D3,S1,S2,S3,putus SD,SD sederajat,SMP sederajat,SMA sederajat,tidak sekolah',
            'pekerjaan_ayah' => 'nullable',
            'penghasilan_ayah' => 'nullable',
            'nama_ibu' => 'nullable',
            'tahun_lahir_ibu' => 'nullable',
            'pendidikan_ibu' => 'nullable|in:D1,D2,D3,S1,S2,S3,putus SD,SD sederajat,SMP sederajat,SMA sederajat,tidak sekolah',
            'pekerjaan_ibu' => 'nullable',
            'penghasilan_ibu' => 'nullable',
            'tinggi_badan' => 'nullable|integer',
            'berat_badan' => 'nullable|integer',
            'jml_saudara_kandung' => 'nullable|integer',
            'ukuran_baju' => 'nullable',
            'ukuran_celana' => 'nullable',
            'foto' => 'nullable',
            'bukti_pembayaran' => 'nullable',
        ]);

        $pendaftaran = Pendaftaran::findOrFail($id);
        // if ($request->hasFile('prestasi')){
        //     \Storage::delete($pendaftaran->prestasi);
        //     $requestData['prestasi'] = $request->file('prestasi')->store('public');
        // }
        if ($request->hasFile('bukti_pembayaran')){
            \Storage::delete($pendaftaran->bukti_pembayaran);
            $requestData['bukti_pembayaran'] = $request->file('bukti_pembayaran')->store('public');
            $requestData['foto'] = $request->file('foto')->store('public');
        }
        $pendaftaran->fill($requestData);
        $pendaftaran->save();
        flash('Data pendaftaran sudah diubah')->success();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pendaftaran::destroy($id);
        flash('Data pendaftaran sudah dihapus')->success();
        return back();
    }
}

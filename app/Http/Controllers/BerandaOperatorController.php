<?php

namespace App\Http\Controllers;

use App\Models\JumlahPesertaDaftar;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class BerandaOperatorController extends Controller
{
    public function index()
    {
        $kuotapendaftaran = JumlahPesertaDaftar::first()->jumlah_peserta;
        $tahunpendaftaran = JumlahPesertaDaftar::first()->tahun;
        $jumlahpesertadidik = Pendaftaran::count();
        $sisakuota = $kuotapendaftaran - $jumlahpesertadidik;
        $pendaftaranTerbaru = Pendaftaran::latest()->take(3)->get();
        return view('operator.beranda_index', compact('jumlahpesertadidik','kuotapendaftaran', 'sisakuota','tahunpendaftaran','pendaftaranTerbaru'));
    }

}

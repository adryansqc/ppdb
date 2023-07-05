@extends('layouts.app_sneat_operator')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Data Lengkap Siswa Yang Mendaftar</h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <div >
                                    <tr>
                                        <td colspan="2" style="text-align: center; border-style: initial">
                                            <img src="{{\Storage::url($models->foto)}}" alt="{{ $models->nama_lengkap }}" width="150">
                                        </td>
                                    </tr>
                                </div>

                                <tr>
                                    <td width="20%">Nama Lengkap</td>
                                    <td>:{{ $models->nama_lengkap }}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Pendaftaran</td>
                                    <td>:{{ $models->jenis_pendaftaran }}</td>
                                </tr>

                                <tr>
                                    <td>Alamat Asal Sekolah</td>
                                    <td>: {{ $models->alamat_asal_sekolah }}</td>
                                </tr>
                                <tr>
                                    <td>Pernah PAUD</td>
                                    <td>: {{ $models->pernah_paud }}</td>
                                </tr>
                                <tr>
                                    <td>Pernah TK</td>
                                    <td>: {{ $models->pernah_tk }}</td>
                                </tr>
                                <tr>
                                    <td>No. SKLT</td>
                                    <td>
                                        @if ($models->no_sklt)
                                        : {{ $models->no_sklt }}
                                        @else
                                        : -
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>No. Seri Ijazah</td>
                                    <td> @if ($models->no_seri_ijazah)
                                        : {{ $models->no_seri_ijazah }}
                                    @else
                                        : -
                                    @endif
                                        </td>
                                </tr>
                                <tr>
                                    <td>Hobi</td>
                                    <td>: {{ $models->hobi }}</td>
                                </tr>
                                <tr>
                                    <td>Cita-cita</td>
                                    <td>: {{ $models->cita_cita }}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>: {{ $models->jenis_kelamin }}</td>
                                </tr>
                                <tr>
                                    <td>NISN</td>
                                    <td>: {{ $models->nisn }}</td>
                                </tr>
                                <tr>
                                    <td>NIK</td>
                                    <td>: {{ $models->nik }}</td>
                                </tr>
                                <tr>
                                    <td>Tempat Lahir</td>
                                    <td>: {{ $models->tempat_lahir }}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>: {{ $models->tanggal_lahir }}</td>
                                </tr>
                                <tr>
                                    <td>Agama</td>
                                    <td>: {{ $models->agama }}</td>
                                </tr>
                                <tr>
                                    <td>Kebutuhan Khusus</td>
                                    <td>: {{ $models->kebutuhan_khusus }}</td>
                                </tr>
                                <tr>
                                    <td>Riwayat Penyakit</td>
                                    <td>: {{ $models->riwayat_penyakit }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat Jalan</td>
                                    <td>: {{ $models->alamat_jalan }}</td>
                                </tr>
                                <tr>
                                    <td>RT</td>
                                    <td>: {{ $models->rt }}</td>
                                </tr>
                                <tr>
                                    <td>RW</td>
                                    <td>: {{ $models->rw }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat Sambung</td>
                                    <td>: {{ $models->alamat_sambung }}</td>
                                </tr>
                                <tr>
                                    <td>Nama Kelurahan</td>
                                    <td>: {{ $models->nama_kelurahan }}</td>
                                </tr>
                                <tr>
                                    <td>Kecamatan</td>
                                    <td>: {{ $models->kecamatan }}</td>
                                </tr>
                                <tr>
                                    <td>Kota/Kabupaten</td>
                                    <td>: {{ $models->kota_kabupaten }}</td>
                                </tr>
                                <tr>
                                    <td>Kode Pos</td>
                                    <td>: {{ $models->kode_pos }}</td>
                                </tr>
                                <tr>
                                    <td>No. HP</td>
                                    <td>: {{ $models->no_hp }}</td>
                                </tr>
                                <tr>
                                    <td>No. Telepon</td>
                                    <td>: {{ $models->no_tlp }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>: {{ $models->email }}</td>
                                </tr>
                                <tr>
                                    <td>SKTM</td>
                                    <td>: {{ $models->sktm }}</td>
                                </tr>
                                <tr>
                                    <td>No. KKS</td>
                                    <td>: {{ $models->no_kks }}</td>
                                </tr>
                                <tr>
                                    <td>No. KPS</td>
                                    <td>: {{ $models->no_kps }}</td>
                                </tr>
                                <tr>
                                    <td>No. KIP</td>
                                    <td>: {{ $models->no_kip }}</td>
                                </tr>
                                <tr>
                                    <td>No. KIS</td>
                                    <td>: {{ $models->no_kis }}</td>
                                </tr>
                                <tr>
                                    <td>Kewarganegaraan</td>
                                    <td>: {{ $models->kewarganegaraan }}</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <h5 class="card-header">Data Orang Tua (Ayah)</h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <td width="20%">Nama Ayah</td>
                                    <td>:{{ $models->nama_ayah }}</td>
                                </tr>

                                <tr>
                                    <td>Tahun Lahir Ayah</td>
                                    <td>:{{ $models->tahun_lahir_ayah }}</td>
                                <tr>

                                <tr>
                                    <td>Pendidikan Ayah</td>
                                    <td>:{{ $models->pendidikan_ayah }}</td>
                                <tr>

                                <tr>
                                    <td>Pekerjaan Ayah</td>
                                    <td>:{{ $models->pekerjaan_ayah }}</td>
                                <tr>

                                <tr>
                                    <td>Penghasilan Ayah</td>
                                    <td>:{{ $models->penghasilan_ayah }}</td>
                                <tr>

                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <h5 class="card-header">Data Orang Tua (Ibu)</h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <td width="20%">Nama Ibu</td>
                                    <td>:{{ $models->nama_ibu }}</td>
                                </tr>

                                <tr>
                                    <td>Tahun Lahir Ibu</td>
                                    <td>:{{ $models->tahun_lahir_ibu }}</td>
                                <tr>

                                <tr>
                                    <td>Pendidikan Ibu</td>
                                    <td>:{{ $models->pendidikan_ibu }}</td>
                                <tr>

                                <tr>
                                    <td>Pekerjaan Ibu</td>
                                    <td>:{{ $models->pekerjaan_ibu }}</td>
                                <tr>

                                <tr>
                                    <td>Penghasilan Ibu</td>
                                    <td>:{{ $models->penghasilan_ibu }}</td>
                                <tr>
                                <tr>
                                    <td>Bukti Pembayaran</td>
                                    <td>
                                        <a href="#" onclick="popupCenter({url: '{{ \Storage::url($models->bukti_pembayaran) }}', title: 'Bukti Pembayaran', w: 900, h: 500})"> :
                                            Lihat Bukti Bayar
                                        </a>
                                    </td>
                                </tr>

                                <th>
                                    @if ($models->status_pendaftaran == 'Menunggu Verifikasi')
                                        <span class="text-danger">Menunggu Verifikasi</span>
                                    @elseif ($models->status_pendaftaran == 'Terverifikasi')
                                        <span class="text-success" style="font-size: 20px">Terverifikasi</span>
                                    @elseif ($models->status_pendaftaran == 'Tidak Sah')
                                        <span class="text-danger">Tidak Sah</span>
                                    @endif
                                </th>
                                <th>
                                    @if ($models->status_pendaftaran == 'Menunggu Verifikasi')
                                    <a href="{{ route('verifikasi', $models->id) }}" class="btn btn-primary ">Verifikasi</a>
                                    <a href="{{ route('tidakSah', $models->id) }}" class="btn btn-danger">Tidak Sah</a>
                                    @elseif ($models->status_pendaftaran == 'Tidak Sah')
                                    <a href="{{ route('verifikasi', $models->id) }}" class="btn btn-success">Verifikasi Ulang</a>
                                    @endif
                                </th>
                            </thead>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

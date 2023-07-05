@extends('layouts.app_sneat')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header"><b><h3>Data yang Harus Di isi</h3></b></div>
                {!! Form::model($model,[
                    'method' => $method,
                    'route' => $route,
                    'files' => true,
                ]) !!}
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Data Calon Peserta Didik</h5>
                      <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="form-group row mb-3">
                            <label for="jenis_pendaftaran" class="col-sm-2">Jenis Pendaftaran</label>
                            <div class="col-sm-10">
                                {!! Form::select('jenis_pendaftaran', ['baru' => 'Baru', 'pindahan' => 'Pindahan'], null, ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('jenis_pendaftaran') }}</span>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="alamat_asal_sekolah" class="col-sm-2">Alamat Asal Sekolah</label>
                            <div class="col-sm-10">
                                {!! Form::text('alamat_asal_sekolah', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('alamat_asal_sekolah') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="pernah_paud" class="col-sm-2">Pernah PAUD</label>
                            <div class="col-sm-10">
                                {!! Form::select('pernah_paud', ['iya' => 'Iya', 'tidak' => 'Tidak'], null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('pernah_paud') }}</span>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="pernah_tk" class="col-sm-2">Pernah TK</label>
                            <div class="col-sm-10">
                                {!! Form::select('pernah_tk', ['iya' => 'Iya', 'tidak' => 'Tidak'], null, ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('pernah_tk') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="no_sklt" class="col-sm-2">No. SKLT</label>
                            <div class="col-sm-10">
                                {!! Form::text('no_sklt', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('no_sklt') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="no_seri_ijazah" class="col-sm-2">No. Seri Ijazah</label>
                            <div class="col-sm-10">
                                {!! Form::text('no_seri_ijazah', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('no_seri_ijazah') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="hobi" class="col-sm-2">Hobi</label>
                            <div class="col-sm-10">
                                {!! Form::text('hobi', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('hobi') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="cita_cita" class="col-sm-2">Cita Cita</label>
                            <div class="col-sm-10">
                                {!! Form::text('cita_cita', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('cita_cita') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="nama_lengkap" class="col-sm-2">Nama Lengkap</label>
                            <div class="col-sm-10">
                                {!! Form::text('nama_lengkap', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('nama_lengkap') }}</span>
                            </div>

                        </div>
                        <div class="form-group row mb-3">
                            <label for="jenis_kelamin" class="col-sm-2">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                {!! Form::select('jenis_kelamin', ['laki-laki' => 'Laki-laki', 'perempuan' => 'Perempuan'], null, ['class' => 'form-control','placeholder' => 'Pilih Jenis Kelamin']) !!}
                            <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="nisn" class="col-sm-2">NISN</label>
                            <div class="col-sm-10">
                                {!! Form::text('nisn', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('nisn') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="nik" class="col-sm-2">NIK</label>
                            <div class="col-sm-10">
                                {!! Form::text('nik', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('nik') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="tempat_lahir" class="col-sm-2">Tempat Lahir</label>
                            <div class="col-sm-10">
                                {!! Form::text('tempat_lahir', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('tempat_lahir') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="tanggal_lahir" class="col-sm-2">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                {!! Form::date('tanggal_lahir',$models->tanggal_bayar ?? date('Y-m-d'), ['class'=>'form-control' ]) !!}
                            <span class="text-danger">{{ $errors->first('tanggal_lahir') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="agama" class="col-sm-2">Agama</label>
                            <div class="col-sm-10">
                                {!! Form::text('agama', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('agama') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="kebutuhan_khusus" class="col-sm-2">Kebutuhan Khusus</label>
                            <div class="col-sm-10">
                                {!! Form::select('kebutuhan_khusus', ['autis' => 'autis', 'bakat istimewa' => 'bakat istimewa', 'cerdas istimewa' => 'cerdas istimewa', 'down syndrome' => 'down syndrome', 'hyper aktif' => 'hyper aktif', 'indigo' => 'indigo', 'kesulitan belajar' => 'kesulitan belajar', 'lainnya' => 'lainnya','tidak ada' => 'tidak ada' ], null, ['class' => 'form-control', 'placeholder' => 'pilih salah satu']) !!}
                            <span class="text-danger">{{ $errors->first('kebutuhan_khusus') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="riwayat_penyakit" class="col-sm-2">Riwayat Penyakit</label>
                            <div class="col-sm-10">
                                {!! Form::text('riwayat_penyakit', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('riwayat_penyakit') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="alamat_jalan" class="col-sm-2">Alamat Jalan</label>
                            <div class="col-sm-10">
                                {!! Form::text('alamat_jalan', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('alamat_jalan') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="rt" class="col-sm-2">RT</label>
                            <div class="col-sm-10">
                                {!! Form::text('rt', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('rt') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="rw" class="col-sm-2">RW</label>
                            <div class="col-sm-10">
                                {!! Form::text('rw', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('rw') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="alamat_sambung" class="col-sm-2">Alamat Sambung</label>
                            <div class="col-sm-10">
                                {!! Form::text('alamat_sambung', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('alamat_sambung') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="nama_kelurahan" class="col-sm-2">Nama Kelurahan</label>
                            <div class="col-sm-10">
                                {!! Form::text('nama_kelurahan', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('nama_kelurahan') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="kecamatan" class="col-sm-2">Kecamatan</label>
                            <div class="col-sm-10">
                                {!! Form::text('kecamatan', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('kecamatan') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="kota_kabupaten" class="col-sm-2">Kota/Kabupaten</label>
                            <div class="col-sm-10">
                                {!! Form::text('kota_kabupaten', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('kota_kabupaten') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="kode_pos" class="col-sm-2">Kode Pos</label>
                            <div class="col-sm-10">
                                {!! Form::text('kode_pos', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('kode_pos') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="no_hp" class="col-sm-2">No. HP</label>
                            <div class="col-sm-10">
                                {!! Form::text('no_hp', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('no_hp') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="no_tlp" class="col-sm-2">No. Telephon</label>
                            <div class="col-sm-10">
                                {!! Form::text('no_tlp', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('no_tlp') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="email" class="col-sm-2">Email</label>
                            <div class="col-sm-10">
                                {!! Form::text('email', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="sktm" class="col-sm-2">SKTM</label>
                            <div class="col-sm-10">
                                {!! Form::text('sktm', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('sktm') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="no_kks" class="col-sm-2">No. KKS</label>
                            <div class="col-sm-10">
                                {!! Form::text('no_kks', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('no_kks') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="no_kps" class="col-sm-2">No. KPS</label>
                            <div class="col-sm-10">
                                {!! Form::text('no_kps', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('no_kps') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="no_kip" class="col-sm-2">No. KIP</label>
                            <div class="col-sm-10">
                                {!! Form::text('no_kip', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('no_kip') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="no_kis" class="col-sm-2">No. KIS</label>
                            <div class="col-sm-10">
                                {!! Form::text('no_kis', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('no_kis') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="kewarganegaraan" class="col-sm-2">Kewarganegaraan</label>
                            <div class="col-sm-10">
                                {!! Form::select('kewarganegaraan', ['wni' => 'wni', 'wna' => 'wna'], null, ['class' => 'form-control','placeholder' => 'Pilih Kewarganegaraan']) !!}
                            <span class="text-danger">{{ $errors->first('kewarganegaraan') }}</span>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <h5>Data Orang Tua (Ayah)</h5>
                        <br>
                        <div class="form-group row mb-3">
                            <label for="nama_ayah" class="col-sm-2">Nama Ayah</label>
                            <div class="col-sm-10">
                                {!! Form::text('nama_ayah', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('nama_ayah') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="tahun_lahir_ayah" class="col-sm-2">Tahun Lahir Ayah</label>
                            <div class="col-sm-10">
                                {!! Form::text('tahun_lahir_ayah', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('tahun_lahir_ayah') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="pendidikan_ayah" class="col-sm-2">Pendidikan Ayah</label>
                            <div class="col-sm-10">
                                {!! Form::select('pendidikan_ayah', ['D1' => 'D1', 'D2' => 'D2', 'D3' => 'D3', 'S1' => 'S1', 'S2' => 'S2', 'S3' => 'S3', 'putus_sd' => 'Putus SD', 'sd_sederajat' => 'SD Sederajat', 'smp_sederajat' => 'SMP Sederajat', 'sma_sederajat' => 'SMA Sederajat', 'tidak_sekolah' => 'Tidak Sekolah'], null, ['class' => 'form-control', 'placeholder' => 'Pilih Pendidikan Ayah']) !!}
                                <span class="text-danger">{{ $errors->first('pendidikan_ayah') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="penghasilan_ayah" class="col-sm-2">Penghasilan Ayah</label>
                            <div class="col-sm-10">
                                {!! Form::text('penghasilan_ayah', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('penghasilan_ayah') }}</span>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <h5>Data Orang Tua (Ibu)</h5>
                        <br>
                        <div class="form-group row mb-3">
                            <label for="nama_ibu" class="col-sm-2">Nama Ibu</label>
                            <div class="col-sm-10">
                                {!! Form::text('nama_ibu', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('nama_ibu') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="tahun_lahir_ibu" class="col-sm-2">Tahun Lahir Ibu</label>
                            <div class="col-sm-10">
                                {!! Form::text('tahun_lahir_ibu', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('tahun_lahir_ibu') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="pendidikan_ibu" class="col-sm-2">Pendidikan Ibu</label>
                            <div class="col-sm-10">
                                {!! Form::select('pendidikan_ibu', ['D1' => 'D1', 'D2' => 'D2', 'D3' => 'D3', 'S1' => 'S1', 'S2' => 'S2', 'S3' => 'S3', 'putus_sd' => 'Putus SD', 'sd_sederajat' => 'SD Sederajat', 'smp_sederajat' => 'SMP Sederajat', 'sma_sederajat' => 'SMA Sederajat', 'tidak_sekolah' => 'Tidak Sekolah'], null, ['class' => 'form-control', 'placeholder' => 'Pilih Pendidikan Ibu']) !!}
                                <span class="text-danger">{{ $errors->first('pendidikan_ibu') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="penghasilan_ibu" class="col-sm-2">Penghasilan Ibu</label>
                            <div class="col-sm-10">
                                {!! Form::text('penghasilan_ibu', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('penghasilan_ibu') }}</span>
                            </div>
                        </div>
                        <br>
                        <hr>

                        <br>
                        <div class="form-group row mb-3">
                            <label for="tinggi_badan" class="col-sm-2">Tinggi Badan</label>
                            <div class="col-sm-10">
                                {!! Form::text('tinggi_badan', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('tinggi_badan') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="berat_badan" class="col-sm-2">Berat Badan</label>
                            <div class="col-sm-10">
                                {!! Form::text('berat_badan', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('berat_badan') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="jml_saudara_kandung" class="col-sm-2">Jumlah Saudara Kandung</label>
                            <div class="col-sm-10">
                                {!! Form::text('jml_saudara_kandung', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('jml_saudara_kandung') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="ukuran_baju" class="col-sm-2">Ukuran Baju</label>
                            <div class="col-sm-10">
                                {!! Form::text('ukuran_baju', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('ukuran_baju') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="ukuran_celana" class="col-sm-2">Ukuran Celana</label>
                            <div class="col-sm-10">
                                {!! Form::text('ukuran_celana', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('ukuran_celana') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="foto" class="col-sm-2">Foto</label>
                            <div class="col-sm-10">
                                {!! Form::file('foto', ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('foto') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="bukti_pembayaran" class="col-sm-2">Bukti Pembayaran</label>
                            <div class="col-sm-10">
                                {!! Form::file('bukti_pembayaran', ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('bukti_pembayaran') }}</span>
                            </div>
                        </div>
                        </div>
                      </form>
                    </div>
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        {!! Form::submit($namaTombol, ['class'=>'btn btn-primary mt-3']) !!}
                    </div>
                </div>
                <br>
                <br>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

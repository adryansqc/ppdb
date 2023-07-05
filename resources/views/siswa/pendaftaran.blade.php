@extends('layouts.app_sneat')
<style>
    .backgroud {
        background-color: lightsteelblue;
    }
</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header"><b><h3>Pendaftaran Siswa Baru</h3></b></div>
                <div><a href="{{ route('pendaftaran.create') }}" class="btn btn-primary btn-lg" style="margin-left: 25px">DAFTAR</a></div>
                <br>
                <p style="margin-left: 30%">Jika Data Belum ada silahkan Klik Daftar</p>
                <hr>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Asal Sekolah</th>
                                <th>Jenis Kelamin</th>
                                <th>Nisn</th>
                                <th>Status Pendaftar</th>
                                {{-- <th>Aksi</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pendaftaran as $data)
                                <tr>
                                    <td>{{ $loop -> iteration }}</td>
                                    <td>{{ $data -> nama_lengkap }}</td>
                                    <td>{{ $data -> alamat_asal_sekolah }}</td>
                                    <td>{{ $data -> jenis_kelamin }}</td>
                                    <td>{{ $data -> nisn }}</td>
                                    <td>
                                        @if ($data->status_pendaftaran == 'Menunggu Verifikasi')
                                            <p class="btn btn-danger">Menunggu Verifikasi</p>
                                        @elseif ($data->status_pendaftaran == 'Terverifikasi')
                                            <p class="btn btn-success">Sudah Diverifikasi</p>
                                            <p class="text-danger">silahkan lanjutkan ke Tes Tertulis</p>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('pendaftaran.edit', $data -> id) }}" class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit"></i> Edit</a>
                                    </td>
                                    {{-- <td>
                                        {!! Form::open([
                                            'route' => [$routePrefix.'.destroy', $item -> id],
                                            'method' => 'DELETE',
                                            'onsubmit' => 'return confirm("Yakin Ingin Menghapus Data ini?")',
                                        ]) !!}
                                        <a href="{{ route($routePrefix .'.edit', $item -> id) }}" class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit"></i> Edit</a>
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>Hapus
                                        </button>
                                    </td> --}}
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">Data Tidak Ada</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {!! $pendaftaran -> links( ) !!}
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card ">
                <div class="card-body backgroud">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row mb-2">
                                <div class="pt-4 border-bottom-1 pb-3">
                                    <h4 class="text-primary">PROFIL SISWA</h4>
                                </div>
                            </div>
                            @forelse ($pendaftaran as $data)
                            <div class="row mb-2">
                                <div class="col-sm-4 col-6">
                                    <h5 class="f-w-500">Nama</h5>
                                </div>
                                <div class="col-sm-8 col-6">
                                    {{ $data->nama_lengkap }}
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-4 col-6">
                                    <h5 class="f-w-500">Jenis Kelamin</h5>
                                </div>
                                <div class="col-sm-8 col-6">
                                    {{ $data->jenis_kelamin }}
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-4 col-6">
                                    <h5 class="f-w-500">TTL</h5>
                                </div>
                                <div class="col-sm-8 col-6">
                                    {{ $data->tempat_lahir }},
                                    {{ $data->tanggal_lahir }}
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-4 col-6">
                                    <h5 class="f-w-500">Agama</h5>
                                </div>
                                <div class="col-sm-8 col-6">
                                    {{ $data->agama }}
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-4 col-6">
                                    <h5 class="f-w-500">Tinggi Badan</h5>
                                </div>
                                <div class="col-sm-8 col-6">
                                    {{ $data->tinggi_badan }}
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-4 col-6">
                                    <h5 class="f-w-500">Berat Badan</h5>
                                </div>
                                <div class="col-sm-8 col-6">
                                    {{ $data->berat_badan }}
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-4 col-6">
                                    <h5 class="f-w-500">NISN</h5>
                                </div>
                                <div class="col-sm-8 col-6">
                                    {{ $data->nisn }}
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-4 col-6">
                                    <h5 class="f-w-500">NIK</h5>
                                </div>
                                <div class="col-sm-8 col-6">
                                    {{ $data->nik}}
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-4 col-6">
                                    <h5 class="f-w-500">Alamat</h5>
                                </div>
                                <div class="col-sm-8 col-6">
                                    {{ $data->alamat_jalan }}
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-4 col-6">
                                    <h5 class="f-w-500">Email</h5>
                                </div>
                                <div class="col-sm-8 col-6">
                                    {{ $data->email }}
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-4 col-6">
                                    <h5 class="f-w-500">NO. Wa</h5>
                                </div>
                                <div class="col-sm-8 col-6">
                                    {{ $data->no_hp }}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="pt-4 border-bottom-1 pb-5">
                                <img src="{!! \Storage::url($data->foto) !!}" width="250px" height="300" alt="" style="margin-left: 70px">
                            </div>
                        </div>
                    </div>



                        <div class="pt-4 border-bottom-1 pb-3">
                            <h4 class="text-primary">DATA ORANG TUA</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row mb-2">
                                    <div class="col-sm-4 col-6">
                                        <h5 class="f-w-500">Nama Ayah</h5>
                                    </div>
                                    <div class="col-sm-8 col-6">
                                        {{ $data->nama_ayah }}
                                    </div>
                                    <div class="col-sm-4 col-6">
                                        <h5 class="f-w-500">Pendidikan Ayah</h5>
                                    </div>
                                    <div class="col-sm-8 col-6">
                                        {{ $data->pendidikan_ayah }}
                                    </div>
                                    <div class="col-sm-4 col-6">
                                        <h5 class="f-w-500">Pekerjaan Ayah</h5>
                                    </div>
                                    <div class="col-sm-8 col-6">
                                        {{ $data->pekerjaan_ayah }}
                                    </div>
                                    <div class="col-sm-4 col-6">
                                        <h5 class="f-w-500">Penghasilan Ayah</h5>
                                    </div>
                                    <div class="col-sm-8 col-6">
                                        {{ $data->penghasilan_ayah }}
                                    </div>
                                </div>
                            </div>
                            <!--kiri-->
                            <div class="col-lg-6">
                                <div class="row mb-2">
                                    <div class="col-sm-4 col-6">
                                        <h5 class="f-w-500">Nama Ibu</h5>
                                    </div>
                                    <div class="col-sm-8 col-6">
                                        {{ $data->nama_ibu }}
                                    </div>
                                    <div class="col-sm-4 col-6">
                                        <h5 class="f-w-500">Pendidikan Ibu</h5>
                                    </div>
                                    <div class="col-sm-8 col-6">
                                        {{ $data->pendidikan_ibu }}
                                    </div>
                                    <div class="col-sm-4 col-6">
                                        <h5 class="f-w-500">Pekerjaan ibu</h5>
                                    </div>
                                    <div class="col-sm-8 col-6">
                                        {{ $data->pekerjaan_ibu }}
                                    </div>
                                    <div class="col-sm-4 col-6">
                                        <h5 class="f-w-500">Penghasilan ibu</h5>
                                    </div>
                                    <div class="col-sm-8 col-6">
                                        {{ $data->penghasilan_ibu }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="pt-4 border-bottom-1 pb-3">
                            <h4 class="text-primary">DATA REGISTRASI</h4>
                        </div> --}}
                        {{-- <div class="row mb-3">
                            <div class="col-sm-3 col-3">
                                <h5 class="f-w-500">Gelombang</h5>
                                <div class="col-sm-9 col-7">
                                    {{ $viewData->gelombang }}
                                </div>
                            </div>
                            <div class="col-sm-3 col-3">
                                <h5 class="f-w-500">Tahun</h5>
                                <div class="col-sm-9 col-7">
                                    {{ $viewData->tahun_masuk }}
                                </div>
                            </div>
                            <div class="col-sm-3 col-3">
                                <h5 class="f-w-500">Pilhan 1</h5>
                                <div class="col-sm-9 col-7">
                                    @foreach ($viewProdi as $z)
                                        @if ($z->id_prodi == $viewData->pil1)
                                            {{ $z->nama_prodi }}
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-sm-3 col-3">
                                <h5 class="f-w-500">Pilhan 2</h5>
                                <div class="col-sm-9 col-7">
                                    @foreach ($viewProdi as $z)
                                        @if ($z->id_prodi == $viewData->pil2)
                                            {{ $z->nama_prodi }}
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="pt-4 border-bottom-1 pb-3">
                            <h4 class="text-primary">DATA SEKOLAH DAN PENDIDIKAN SEBELUMNYA</h4>
                        </div> --}}
                        {{-- <div class="row mb-3">
                            <div class="col-sm-3 col-3">
                                <h5 class="f-w-500">Nama Sekolah</h5>
                                <div class="col-sm-9 col-7">
                                    @foreach ($viewSekolah as $z)
                                                @if ($z->NPSN == $viewData->id_Sekolah)
                                                    {{ $z->nama_sekolah }}
                                                @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-sm-3 col-3">
                                <h5 class="f-w-500">Jurusan</h5>
                                <div class="col-sm-9 col-7">
                                    {{ $viewData->jurusan }}
                                </div>
                            </div>
                            <div class="col-sm-3 col-3">
                                <h5 class="f-w-500">Semester 1</h5>
                                <div class="col-sm-9 col-7">
                                    {{ $viewData->smt1 }}
                                </div>
                            </div>
                            <div class="col-sm-3 col-3">
                                <h5 class="f-w-500">Semester 2</h5>
                                <div class="col-sm-9 col-7">
                                    {{ $viewData->smt2 }}
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="row mb-3">
                            <div class="col-sm-3 col-3">
                                <h5 class="f-w-500">Semester 3</h5>
                                <div class="col-sm-9 col-7">
                                    {{ $viewData->smt3 }}
                                </div>
                            </div>
                            <div class="col-sm-3 col-3">
                                <h5 class="f-w-500">Semester 4</h5>
                                <div class="col-sm-9 col-7">
                                    {{ $viewData->smt4 }}
                                </div>
                            </div>
                            <div class="col-sm-3 col-3">
                                <h5 class="f-w-500">Semester 5</h5>
                                <div class="col-sm-9 col-7">
                                    {{ $viewData->smt5 }}
                                </div>
                            </div>
                            <div class="col-sm-3 col-3">
                                <h5 class="f-w-500">Dokumen</h5>
                                <div class="col-sm-9 col-7">
                                    <a class="btn btn-light shadow btn-xs sharp me-1" title="Detail Registration"
                                        href="{{ asset($viewData->slip_gaji) }}"><i class="fa fa-file-alt"></i></a>
                                    <a class="btn btn-light shadow btn-xs sharp me-1" title="Detail Registration"
                                        href="{{ asset($viewData->kk) }}"><i class="fa fa-file-alt"></i></a>
                                </div>
                            </div>
                        </div> --}}
                            @empty
                            <tr>
                                <td colspan="4">Data belum Ada</td>
                            </tr>
                            @endforelse

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


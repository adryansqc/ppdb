@extends('layouts.app_sneat_operator')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Data Siswa Yang Mendaftar</h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Asal Sekolah</th>
                                    <th>Jenis Kelamin</th>
                                    <th>NISN</th>
                                    <th>Show Detail</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($models as $item)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <th>{{ $item->nama_lengkap }}</th>
                                        <th>{{ $item->alamat_asal_sekolah }}</th>
                                        <th>{{ $item->jenis_kelamin }}</th>
                                        <th>{{ $item->nisn }}</th>
                                        <th><a href="{{ route('pendaftaransiswa.show', $item -> id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i> Detail</a></th>
                                        <th>
                                            @if ($item->status_pendaftaran == 'Menunggu Verifikasi')
                                                <span class="text-danger">Menunggu Verifikasi</span>
                                            @elseif ($item->status_pendaftaran == 'Terverifikasi')
                                                <span class="text-success">Terverifikasi</span>
                                            @elseif ($item->status_pendaftaran == 'Tidak Sah')
                                                <span class="text-danger">Tidak Sah</span>
                                            @endif
                                        </th>
                                        <th>
                                            @if ($item->status_pendaftaran == 'Menunggu Verifikasi')
                                            <a href="{{ route('verifikasi', $item->id) }}" class="btn btn-primary">Verifikasi</a>
                                            <a href="{{ route('tidakSah', $item->id) }}" class="btn btn-danger">Tidak Sah</a>
                                            @elseif ($item->status_pendaftaran == 'Tidak Sah')
                                            <a href="{{ route('verifikasi', $item->id) }}" class="btn btn-success">Verifikasi Ulang</a>
                                            @endif
                                        </th>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">Data tidak ada</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {!! $models->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

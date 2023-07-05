@extends('layouts.app_sneat')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header"><b><h3>Hasil Pengumuman Siswa</h3></b></div>
                {{-- <div><a href="{{ route('pendaftaran.create') }}" class="btn btn-primary btn-lg">daftar</a></div> --}}
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Asal Sekolah</th>
                                <th>Jenis Kelamin</th>
                                <th>Nisn</th>
                                <th>Hasil</th>
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
                                        @if ($data->hasil == 'Menunggu Verifikasi')
                                            <p class="btn btn-danger">Menunggu Hasil Tes</p>
                                        @elseif ($data->hasil == 'Lulus')
                                            <p class="btn btn-success">Lulus</p>
                                            {{-- <p class="text-danger">silahkan lanjutkan ke Tes Tertulis</p> --}}
                                        @elseif ($data->hasil == 'Tidak Lulus')
                                            <p class="btn btn-success">Tidak Lulus</p>
                                        @endif
                                    </td>
                                    <td>
                                        <th><a href="{{ route('hasilpengumumansiswa.show', $data -> id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i> Detail</a></th>
                                        <th>
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
@endsection

 @extends('layouts.app_sneat_operator')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Hasil Tes Siswa</h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Hasil Tes Tertulis</th>
                                    <th>Hasil Tes Bacaaan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($models as $item)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <th>{{ $item->nama_lengkap }}</th>
                                        <th>{{ $item->tes_tertulis }}</th>
                                        <th>{{ $item->tes_bacaan }}</th>
                                        <th>
                                            @if ($item->hasil == 'Menunggu Verifikasi')
                                                <span class="text-danger">Menunggu Verifikasi</span>
                                            @elseif ($item->hasil == 'Lulus')
                                                <span class="text-success">Lulus</span>
                                            @elseif ($item->hasil == 'Tidak lulus')
                                                <span class="text-danger">Tidak Lulus</span>
                                            @endif
                                        </th>
                                        <th>
                                            <a href="{{ route('pengumumansiswa.edit', $item->id) }}" class="btn btn-warning">Edit Hasil</a>
                                        </th>
                                        {{-- <th>
                                            @if ($item->status_pendaftaran == 'Menunggu Verifikasi')
                                            <a href="{{ route('verifikasi', $item->id) }}" class="btn btn-primary">Verifikasi</a>
                                            <a href="{{ route('tidakSah', $item->id) }}" class="btn btn-danger">Tidak Sah</a>
                                            @elseif ($item->status_pendaftaran == 'Tidak Sah')
                                            <a href="{{ route('verifikasi', $item->id) }}" class="btn btn-success">Verifikasi Ulang</a>
                                            @endif
                                        </th> --}}
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


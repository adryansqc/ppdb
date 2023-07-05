@extends('layouts.app_sneat_operator')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Data Kuota Peserta</h5>
                <a href="{{ route('jumlahpeserta.create') }}" class="btn btn-primary btn-lg" style="margin-left: 25px">Tambah</a>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jumlah Peserta</th>
                                    <th>Tahun</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($models as $item)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <th>{{ $item->jumlah_peserta }}</th>
                                        <th>{{ $item->tahun }}</th>
                                        <th>
                                            <a href="{{ route('jumlahpeserta.edit', $item->id) }}" class="btn btn-warning">Edit</a>
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

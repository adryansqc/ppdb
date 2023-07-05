@extends('layouts.app_sneat_operator')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header"><b><h3>Data Hasil Tes Calon Peserta Didik</h3></b></div>
                {!! Form::model($model,[
                    'method' => $method,
                    'route' => $route,
                    'files' => true,
                ]) !!}
                {{-- <div class="form-group">
                    <label for="jenis_pendaftaran">Nilai Hasil Tes Tertulis</label>
                    {!! Form::select('jenis_pendaftaran', ['baru' => 'Baru', 'pindahan' => 'Pindahan'], null, ['class' => 'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('jenis_pendaftaran') }}</span>
                </div> --}}

                <div class="form-group">
                    <label for="tes_tertulis">Nilai Hasil Tes tertulis</label>
                    {!! Form::text('tes_tertulis', null, ['class' => 'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('tes_tertulis') }}</span>
                </div>
                <div class="form-group">
                    <label for="tes_bacaan">Nilai Hasil Tes Bacaan</label>
                    {!! Form::text('tes_bacaan', null, ['class' => 'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('tes_bacaan') }}</span>
                </div>

                <div class="form-group">
                    <label for="hasil">Hasil Tes Calon Siswa</label>
                    {!! Form::select('hasil', ['Lulus' => 'Lulus', 'Tidak Lulus' => 'Tidak Lulus'], null, ['class' => 'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('hasil') }}</span>
                </div>
                {{-- <div class="form-group">
                    <label for="pernah_tk">Pernah TK</label>
                    {!! Form::select('pernah_tk', ['iya' => 'Iya', 'tidak' => 'Tidak'], null, ['class' => 'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('pernah_tk') }}</span>
                </div>
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    {!! Form::text('nama_lengkap', null, ['class' => 'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('nama_lengkap') }}</span>
                </div> --}}
                <div class="row">
                    {!! Form::submit($namaTombol, ['class'=>'btn btn-primary mt-3']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

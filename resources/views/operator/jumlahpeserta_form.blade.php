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
                ]) !!}
                <div class="form-group">
                    <label for="jumlah_peserta">Kuota Peserta Yang Mendaftar</label>
                    {!! Form::text('jumlah_peserta', null, ['class' => 'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('jumlah_peserta') }}</span>
                </div>
                <div class="form-group">
                    <label for="tahun">Tahun</label>
                    {!! Form::text('tahun', null, ['class' => 'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('tahun') }}</span>
                </div>
                <div class="row">
                    {!! Form::submit($namaTombol, ['class'=>'btn btn-primary mt-3']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

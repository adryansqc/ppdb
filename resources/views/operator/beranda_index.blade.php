@extends('layouts.app_sneat_operator')

<style>
    .progress-bar-lg {
        height: 30px;
        font-size: 18px;
    }
</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">hai, Operator</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <hr>
                    <h5 class="pb-1 mb-4">Aktivitas Hari Ini <p id="datetime" class="card-text" style="font-size: 18px"></p></h5>
                    <div class="row mb-5">
                      <div class="col-md-6 col-lg-4">
                        <div class="card text-center mb-3">
                          <div class="card-body">
                            <h5 class="card-title">Kuota Pendaftaran {{ $tahunpendaftaran }} </h5>
                            <a href=" {{ route('jumlahpeserta.index') }} ">
                                <p class="card-text btn btn-primary" style="font-size: 30px">{{ $kuotapendaftaran }}</p>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                        <div class="card text-center mb-3">
                          <div class="card-body">
                            <h5 class="card-title">Peserta Yang Mendaftar <i class="menu-icon tf-icons bx bx-cube-alt"></i></h5>
                            <a href=" {{ route('pendaftaransiswa.index') }} ">
                                <p class="card-text btn btn-primary" style="font-size: 30px">{{ $jumlahpesertadidik }}</p>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                        <div class="card text-center mb-3">
                          <div class="card-body">
                            <h5 class="card-title">Sisa Kuota Pendaftaran</h5>
                                <p class="card-text btn btn-primary" style="font-size: 30px">{{ $sisakuota }}</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                        <h3 >Presentase Jumlah Peserta Didik Yang Mendaftar {{ number_format(($jumlahpesertadidik / $kuotapendaftaran) * 100, 2) }}%</h3>
                        <div class="demo-vertical-spacing">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: {{ ($jumlahpesertadidik / $kuotapendaftaran) * 100 }}%" aria-valuenow="{{ ($jumlahpesertadidik / $kuotapendaftaran) * 100 }}" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 order-2 mb-4">
                        <div class="card h-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h3 class="card-title m-0 me-2">Update Terbaru</h3>
                            </div>
                            <div class="card-body">
                                <ul class="p-0 m-0">
                                    <li class="d-flex mb-4 pb-1">
                                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h5 class="text-black d-block mb-1">Nama Peserta Didik</h5>
                                                <hr>
                                                @foreach ($pendaftaranTerbaru as $pesertaDidik)
                                                    <h6 class="mb-2">{{ $pesertaDidik->nama_lengkap }}</h6>
                                                @endforeach
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function updateDateTime() {
        var dateTimeElement = document.getElementById("datetime");
        var currentDate = new Date();
        var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric' };
        var formattedDate = currentDate.toLocaleDateString(undefined, options);
        dateTimeElement.innerHTML = formattedDate;
    }

    setInterval(updateDateTime, 1000);
</script>

@endsection

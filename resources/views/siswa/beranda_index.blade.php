@extends('layouts.app_sneat')
<style>
    .center-image {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    .img-zoom {
        transition: transform 0.3s;
    }

    .img-zoom:hover {
        transform: scale(1.05);
    }
    .background {
    background-image: url('{{ asset('sneat/assets/img/gambar/backgroud.avif') }}');
    }
    .latar{
        background: slategray;
    }
    .card1 {
  width: 300px;
  height: 200px;
  background-color: #FF3CAC;
  background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 50%, #2B86C5 100%);
  color: white;
  border-radius: 8px;
  overflow: hidden;
  position: relative;
  perspective: 1000px;
  transition: all 0.5s cubic-bezier(0.23, 1, 0.320, 1);
  cursor: pointer;
  display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;

}

.card-content {
  padding: 20px;
  position: relative;
  z-index: 1;
}

.card1:hover {
  transform: scale(1.05);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.card1:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 60%;
  background-color: rgba(0, 0, 0, 0.1);
  opacity: 0;
  transition: all 0.5s cubic-bezier(0.23, 1, 0.320, 1);
  z-index: 1;
}

.card1:hover:before {
  opacity: 1;
}

.card1 .card-title {
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 8px;
  text-transform: capitalize;
}

.card1 .card-para {
  font-size: 16px;
  opacity: 0.8;
}

.card-content {
  transform: translateY(50%);
  transition: all 0.5s cubic-bezier(0.23, 1, 0.320, 1);
}

.card1:hover .card-content {
  transform: translateY(0%);
}


</style>

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body text-center  mx-3">
                    <div class="loader">
                        <span>SMA Tri Sukses Boarding School </span>
                        <span>SMA Tri Sukses Boarding School </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card background">
                <div class="card-body text-center d-flex align-items-center justify-content-center mx-3">
                    <div class="card1">
                        <div class="card-content">
                          <p class="card-title" style="text-align: center">Kuota Pendaftaran
                          </p><p class="card-para" style="text-align: center">{{ $kuotapendaftaran }} orang</p>
                        </div>
                    </div>
                    <div class="card1">
                        <div class="card-content">
                          <p class="card-title" style="text-align: center">Sisa Kuota
                          </p><p class="card-para" style="text-align: center">{{ $sisakuota }} orang</p>
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
            <div class="card background">
                <div class="card-header"> <h4>Selamat Datang Di SMA Tri Sukses Boarding School Kota Jambi</h4> <div>
                <div class="card-body">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-lg-5 mb-4 order-0">
                                <div class="card">
                                    <div class="d-flex align-items-end row">
                                        <div class="col-sm-5">
                                            <img
                                                src="{{ asset('sneat') }}/assets/img/gambar/Gambar1.png"
                                                height="500"
                                                alt="View Badge User"
                                                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                                data-app-light-img="illustrations/man-with-laptop-light.png"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 mb-4 order-1">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Ketentuan Umum</h5>
                                        <ol>
                                            <li>Membayar biaya Pendaftaran</li>
                                            <li>pendaftaran dapat dilakukan 24 jam melalui website Tri Sukses boarding School</li>
                                            <li>informasi Telp/Wa 08xxxxxxxx</li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="card mt-4">
                                    <div class="card-body">
                                        <h5 class="card-title">Persyaratan Pendaftaran</h5>
                                        <ol>
                                            <li>Membayar biaya Pendaftaran</li>
                                            <li>pendaftaran dapat dilakukan 24 jam melalui website Tri Sukses boarding School</li>
                                            <li>informasi Telp/Wa 08xxxxxxxx</li>
                                            <li>informasi Telp/Wa 08xxxxxxxx</li>
                                            <li>informasi Telp/Wa 08xxxxxxxx</li>
                                            <li>informasi Telp/Wa 08xxxxxxxx</li>
                                            <li>informasi Telp/Wa 08xxxxxxxx</li>
                                            <li>informasi Telp/Wa 08xxxxxxxx</li>
                                            <li>informasi Telp/Wa 08xxxxxxxx</li>
                                            <li>informasi Telp/Wa 08xxxxxxxx</li>
                                            <li>informasi Telp/Wa 08xxxxxxxx</li>
                                            <li>informasi Telp/Wa 08xxxxxxxx</li>
                                            <li>informasi Telp/Wa 08xxxxxxxx</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <h4 class="pb-1 mb-4 text-black" style="text-align: center"><strong>Pilihan Jurusan</strong></h4>
              <div class="row row-cols-1 row-cols-md-3 g-4 mb-5" style="justify-content: center">
                <div class="col">
                  <div class="card h-100">
                    <img class="card-img-top img-zoom" src="{{ asset('sneat') }}/assets/img/gambar/ipa.jpeg" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title"><strong>Jurusan IPA</strong></h5>
                      <p class="card-text">
                        Jurusan yang mempelajari tentang gejala alam melalui metode ilmiah. Maka dari itu, mata pelajaran jurusan Ilmu Pengetahuan Alam tidak jauh dari materi tentang alam dan ekosistem di dalamnya.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img class="card-img-top img-zoom" src="{{ asset('sneat') }}/assets/img/gambar/ips.png" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title"> <strong>Jurusan IPS</strong> </h5>
                      <p class="card-text">
                         Jurusan yang mempelajari tentang hubungan antar manusia dan hubungan manusia dengan lingkungannya, serta berbagai aspek sosial. Hal itu akan dikaji dalam mata pelajaran Sosiologi, Geografi, Ekonomi, dan Sejarah.
                      </p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

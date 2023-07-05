<!DOCTYPE html>
<html>
<head>
<title>SMA Tri Sukses Boarding School jambi</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;

}
.backgraoud {
    background-color: mediumseagreen;
}
</style>
</head>
<body class="backgraoud">

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">SMA TRI SUKSES</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-left w3-hide-small">
      <a href="{{ url('/fasilitas') }}" class="w3-bar-item w3-button">fasilitas</a>
      <a href="#menu" class="w3-bar-item w3-button">Informasi</a>
      <a href="{{ url('/jalurpendaftaran') }}" class="w3-bar-item w3-button">Pendaftaran</a>
    </div>
    <div class="w3-right">
        @if (Route::has('login'))
                <div class="w3-bar-item w3-button">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700  btn btn-primary">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 ">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 ">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="{{ asset('sneat') }}/assets/img/gambar/123.png" alt="Hamburger Catering" width="1600" height="800">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge ">SMA Tri Sukses Boarding School kota Jambi</h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m4 w3-padding-large w3-hide-small">
     <img src="{{ asset('sneat') }}/assets/img/gambar/logo tri sukses.png" class="w3-round w3-image w3-opacity-min" alt="Table Setting" style="width: 700px; height: 400px;">
    </div>

    <div class="w3-col m8 w3-padding-large">
      <h1 class="w3-center">Tentang Sekolah</h1><br>
      <h4> Visi Sekolah :</h4>
      <p class="w3-large">Religius, Cerdas, Berwawasan dan bersaing Global, Terampil IPTEK, Unggul dan Mandiri
      </p>
      <h4> Misi Sekolah :</h4>
      <p class="w3-large">
        <ul>
            <li>Menyelenggarakan pembiasaan ibadah dan perilaku Islami dalam kehidupan sehari hari</li>
            <li>Melaksanakan pembinaan terhadap pserta didik menjadi Muballigh/ghot</li>
            <li>Melaksanakan kegiatan literasi numerasi melalui pembiasaan</li>
            <li>Menyelenggarakan pembelajaran yang PAIKEM (Pembelajaran Aktif, Inofatif, Kreatif, Mentenangkan) serta berorientasi dengan kebutuhan peserta  didik</li>
            <li>Melaksanakan pembelajaran berdiferensiasi yang mengakomodir multiple intelegensia (pembelajaran yang sesuai dengan kemampuan siswa)</li>
            <li>Menanmkan jiwa kebangsaan melalui kegiatan peringatan hari2 besar Nasional, kepramukaan  dan mencintai budaya daerah serta melestarikan budaya gotong royong</li>
            <li>Meningkatkan kompetensi dan kepofesionalan Pendidik dan Tenaga Kependidikan secara  berkesinambungan</li>
            <li>Memberikan pengalaman nyata kepada peserta didik dalam pelaksanaan Projek Penguatan Proﬁl  Pelajar Pancasila</li>
            <li>Mengarahkan peserta didik untuk bisa mengikuti berbagai kegiatan  lingkungan sekitar</li>
            <li>Mengembangkan keunggulan potensi peserta didik dalam bidang akademik  dan non akademik</li>
            <li>Menyiapkan peserta didik untuk melanjutkan pendidikan ke jenjang yang  lebih tinggi</li>
            <li>Menanamkan rasa memiliki terhadap sarana prasarana sekolah</li>
            <li>Menanamkan self esteem (harga diri) pada peserta didik agar lebih baik dalam  memahami, menghargai dan mencintai diri sendiri</li>
            <li>Menanamkan self conﬁdence (kepercayaan) pada peserta didik dalam berbagai aspek  akademik dan non akademik</li>
        </ul>
      </p>
    </div>
  </div>
  <hr>
  <hr>
</div>
</body>
</html>

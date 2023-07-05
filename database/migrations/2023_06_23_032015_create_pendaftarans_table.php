<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis_pendaftaran', ['baru', 'pindahan']);
            $table->string('alamat_asal_sekolah');
            $table->enum('pernah_paud', ['iya', 'tidak']);
            $table->enum('pernah_tk', ['iya', 'tidak']);
            $table->string('no_sklt')->nullable();
            $table->string('no_seri_ijazah')->nullable();
            $table->string('hobi')->nullable();
            $table->string('cita_cita')->nullable();
            $table->string('nama_lengkap');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('nisn')->nullable();
            $table->string('nik')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('agama')->nullable();
            $table->enum('kebutuhan_khusus', ['autis', 'bakat istimewa', 'cerdas istimewa', 'down syndrome', 'hyper aktif', 'indigo', 'kesulitan belajar', 'lainnya'])->nullable();
            $table->text('riwayat_penyakit')->nullable();
            $table->string('alamat_jalan')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('alamat_sambung')->nullable();
            $table->string('nama_kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kota_kabupaten')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('no_tlp')->nullable();
            $table->string('email')->nullable();
            $table->boolean('sktm')->default(false);
            $table->string('no_kks')->nullable();
            $table->string('no_kps')->nullable();
            $table->string('no_kip')->nullable();
            $table->string('no_kis')->nullable();
            $table->enum('kewarganegaraan', ['wni', 'wna']);
            $table->string('nama_ayah')->nullable();
            $table->string('tahun_lahir_ayah')->nullable();
            $table->enum('pendidikan_ayah', ['D1', 'D2', 'D3', 'S1', 'S2', 'S3', 'putus SD', 'SD sederajat', 'SMP sederajat', 'SMA sederajat', 'tidak sekolah'])->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('penghasilan_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('tahun_lahir_ibu')->nullable();
            $table->enum('pendidikan_ibu', ['D1', 'D2', 'D3', 'S1', 'S2', 'S3', 'putus SD', 'SD sederajat', 'SMP sederajat', 'SMA sederajat', 'tidak sekolah'])->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('penghasilan_ibu')->nullable();
            $table->integer('tinggi_badan')->nullable();
            $table->integer('berat_badan')->nullable();
            $table->integer('jml_saudara_kandung')->nullable();
            $table->string('ukuran_baju')->nullable();
            $table->string('ukuran_celana')->nullable();
            $table->string('prestasi')->nullable();
            $table->string('bukti_pembayaran')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftarans');
    }
};

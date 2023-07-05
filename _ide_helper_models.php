<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\JumlahPesertaDaftar
 *
 * @property int $id
 * @property string|null $jumlah_peserta
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|JumlahPesertaDaftar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JumlahPesertaDaftar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JumlahPesertaDaftar query()
 * @method static \Illuminate\Database\Eloquent\Builder|JumlahPesertaDaftar whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JumlahPesertaDaftar whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JumlahPesertaDaftar whereJumlahPeserta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JumlahPesertaDaftar whereUpdatedAt($value)
 */
	class JumlahPesertaDaftar extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Pendaftaran
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $jenis_pendaftaran
 * @property string $alamat_asal_sekolah
 * @property string $pernah_paud
 * @property string $pernah_tk
 * @property string|null $no_sklt
 * @property string|null $no_seri_ijazah
 * @property string|null $hobi
 * @property string|null $cita_cita
 * @property string $nama_lengkap
 * @property string $jenis_kelamin
 * @property string|null $nisn
 * @property string|null $nik
 * @property string|null $tempat_lahir
 * @property string|null $tanggal_lahir
 * @property string|null $agama
 * @property string|null $kebutuhan_khusus
 * @property string|null $riwayat_penyakit
 * @property string|null $alamat_jalan
 * @property string|null $rt
 * @property string|null $rw
 * @property string|null $alamat_sambung
 * @property string|null $nama_kelurahan
 * @property string|null $kecamatan
 * @property string|null $kota_kabupaten
 * @property string|null $kode_pos
 * @property string|null $no_hp
 * @property string|null $no_tlp
 * @property string|null $email
 * @property string|null $sktm
 * @property string|null $no_kks
 * @property string|null $no_kps
 * @property string|null $no_kip
 * @property string|null $no_kis
 * @property string $kewarganegaraan
 * @property string|null $nama_ayah
 * @property string|null $tahun_lahir_ayah
 * @property string|null $pendidikan_ayah
 * @property string|null $pekerjaan_ayah
 * @property string|null $penghasilan_ayah
 * @property string|null $nama_ibu
 * @property string|null $tahun_lahir_ibu
 * @property string|null $pendidikan_ibu
 * @property string|null $pekerjaan_ibu
 * @property string|null $penghasilan_ibu
 * @property int|null $tinggi_badan
 * @property int|null $berat_badan
 * @property int|null $jml_saudara_kandung
 * @property string|null $ukuran_baju
 * @property string|null $ukuran_celana
 * @property string|null $foto
 * @property string|null $bukti_pembayaran
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $status_pendaftaran
 * @property int|null $tes_tertulis
 * @property int|null $tes_bacaan
 * @property string $hasil
 * @method static \Database\Factories\PendaftaranFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereAgama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereAlamatAsalSekolah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereAlamatJalan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereAlamatSambung($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereBeratBadan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereBuktiPembayaran($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereCitaCita($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereFoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereHasil($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereHobi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereJenisKelamin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereJenisPendaftaran($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereJmlSaudaraKandung($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereKebutuhanKhusus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereKecamatan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereKewarganegaraan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereKodePos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereKotaKabupaten($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereNamaAyah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereNamaIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereNamaKelurahan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereNamaLengkap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereNik($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereNisn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereNoHp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereNoKip($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereNoKis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereNoKks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereNoKps($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereNoSeriIjazah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereNoSklt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereNoTlp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran wherePekerjaanAyah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran wherePekerjaanIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran wherePendidikanAyah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran wherePendidikanIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran wherePenghasilanAyah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran wherePenghasilanIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran wherePernahPaud($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran wherePernahTk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereRiwayatPenyakit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereRt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereRw($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereSktm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereStatusPendaftaran($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereTahunLahirAyah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereTahunLahirIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereTanggalLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereTempatLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereTesBacaan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereTesTertulis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereTinggiBadan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereUkuranBaju($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereUkuranCelana($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereUserId($value)
 */
	class Pendaftaran extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PendaftaranSiswa
 *
 * @method static \Illuminate\Database\Eloquent\Builder|PendaftaranSiswa newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PendaftaranSiswa newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PendaftaranSiswa query()
 */
	class PendaftaranSiswa extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $akses
 * @property string|null $nohp
 * @property string|null $nohp_verified_at
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAkses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNohp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNohpVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}


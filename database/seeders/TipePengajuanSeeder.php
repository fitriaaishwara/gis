<?php

namespace Database\Seeders;

use App\Models\TipePengajuan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TipePengajuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            0 => [
                'id' => Str::uuid(),
                'type' =>'Kelengkapan Permohonan Sertifikasi Sistem Manajemen Mutu (ISO 9001:2015)'
            ],
            1 => [
                'id' => Str::uuid(),
                'type' =>'Kelengkapan Permohonan Sertifikasi Sistem Manajemen Anti Penyuapan (SNI ISO 37001:2016)'

            ],
            2 => [
                'id' => Str::uuid(),
                'type' =>'Kelengkapan Permohonan Sertifikasi Standar Keselamatan dan Kesehatan untuk Karyawan (ISO 45001:2018)'
            ],
            3 => [
                'id' => Str::uuid(),
                'type' =>'Kelengkapan Permohonan Sertifikasi Produk (LSPro)'

            ],
            4 => [
                'id' => Str::uuid(),
                'type' =>'Kelengkapan Permohonan Sertifikasi Pasar Rakyat'

            ],
            5 => [
                'id' => Str::uuid(),
                'type' =>'Kelengkapan Permohonan Sertifikasi Layanan Rehabilitasi'

            ],
            6 => [
                'id' => Str::uuid(),
                'type' =>'Kelengkapan Permohonan Sertifikasi Usaha Pariwisata (LSUP)'

            ],
            7 => [
                'id' => Str::uuid(),
                'type' =>'Kelengkapan Permohonan Sertifikasi CHSE'

            ],
            8 => [
                'id' => Str::uuid(),
                'type' =>'Kelengkapan Permohonan ISPO'

            ],



        ];

            TipePengajuan::insert($data);
    }
}

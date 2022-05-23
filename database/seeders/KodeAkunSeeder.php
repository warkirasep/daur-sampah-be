<?php

namespace Database\Seeders;

use App\Models\KodeAkun;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KodeAkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $asset = new KodeAkun();
        $asset->kode = '100';
        $asset->nama_akun = 'Aset';
        $asset->jenis_akun = 'aktiva';
        $asset->parent_id = 0;
        $asset->save();

        $kewajiban = new KodeAkun();
        $kewajiban->kode = '200';
        $kewajiban->nama_akun = 'Kewajiban';
        $kewajiban->jenis_akun = 'utang';
        $kewajiban->parent_id = 0;
        $kewajiban->save();

        $modal = new KodeAkun();
        $modal->kode = '300';
        $modal->nama_akun = 'Modal';
        $modal->jenis_akun = 'modal';
        $modal->parent_id = 0;
        $modal->save();

        $penghasilan = new KodeAkun();
        $penghasilan->kode = '400';
        $penghasilan->nama_akun = 'Penghasilan';
        $penghasilan->jenis_akun = 'penghasilan';
        $penghasilan->parent_id = 0;
        $penghasilan->save();

        $beban = new KodeAkun();
        $beban->kode = '500';
        $beban->nama_akun = 'Beban';
        $beban->jenis_akun = 'beban';
        $beban->parent_id = 0;
        $beban->save();
    }
}

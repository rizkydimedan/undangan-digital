<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GiftPaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gift_pays')->insert([
            [
                'nama_pay' => 'Bank Transfer',
                'icon' => 'assets/images/bank/bank-transfer.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pay' => 'OVO',
                'icon' => 'assets/images/bank/ovo.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pay' => 'GoPay',
                'icon' => 'assets/images/bank/gopay.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pay' => 'DANA',
                'icon' => 'assets/images/bank/dana.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pay' => 'QRIS',
                'icon' => 'assets/images/bank/qris.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pay' => 'ShopeePay',
                'icon' => 'assets/images/bank/shoope-pay.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pay' => 'LinkAja',
                'icon' => 'assets/images/bank/link aja.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pay' => 'BRI',
                'icon' => 'assets/images/bank/BRI.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pay' => 'BCA',
                'icon' => 'assets/images/bank/bca.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pay' => 'BNI',
                'icon' => 'assets/images/bank/bni.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pay' => 'Mandiri',
                'icon' => 'assets/images/bank/mandiri.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pay' => 'CIMB Niaga',
                'icon' => 'assets/images/bank/cimb_niaga.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pay' => 'BTN',
                'icon' => 'assets/images/bank/btn.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pay' => 'Permata Bank',
                'icon' => 'assets/images/bank/permata Bank.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pay' => 'Bank Sinarmas',
                'icon' => 'assets/images/bank/sinarmas.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pay' => 'Bank Danamon',
                'icon' => 'assets/images/bank/danamon.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pay' => 'Bank Mega',
                'icon' => 'assets/images/bank/bank mega.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pay' => 'Bank Jago',
                'icon' => 'assets/images/bank/bank jago.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pay' => 'Bank BTPN',
                'icon' => 'assets/images/bank/btpn.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pay' => 'Bank Muamalat',
                'icon' => 'assets/images/bank/muamalat.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pay' => 'Bank BJB',
                'icon' => 'assets/images/bank/bjb.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pay' => 'Bank Bukopin',
                'icon' => 'assets/images/bank/bukopin.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pay' => 'Bank BPD',
                'icon' => 'assets/images/bank/bpd.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pay' => 'Bank Maybank',
                'icon' => 'assets/images/bank/maybank.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pay' => 'Bank HSBC',
                'icon' => 'assets/images/bank/hsbc.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pay' => 'Bank OCBC NISP',
                'icon' => 'assets/images/bank/ocbc.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
    }
}

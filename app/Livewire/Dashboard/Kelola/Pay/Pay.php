<?php

namespace App\Livewire\Dashboard\Kelola\Pay;

use Midtrans\Snap;
use App\Models\Data;
use Midtrans\Config;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Admin\PaySetting;
use Illuminate\Support\Facades\Auth;
use App\Models\KelolaUndangan\Transaction;
use Exception;

class Pay extends Component
{
    public $dataId;
    public $pay;
    public $nama;
    public $email;
    public $wa;

    public $code;
    public $codee = "CODE12";

    public $harga = 50000;
    public $total = 0;
    public $promo = 0;

    public $channel;


    public function redeem()
    {
        if ($this->code  === $this->codee) {
            $this->total = $this->harga - 10000;
            $this->promo = 10000;
            session()->flash('message', 'Kode Berhasil Dipasang');
        } else {
            $this->promo = 0;
            $this->total = $this->harga;
            session()->flash('message', 'Kode Tidak Berlaku');
        }
    }
    public function mount()
    {
        $this->dataId = Data::all();
        $this->pay = PaySetting::all();
        $this->nama = Auth::user()->name;
        $this->email = Auth::user()->email;
        $this->wa = Auth::user()->phone;
    }
    public function checkout()
    {
        // ambil data DataId
        $selectedDataId = $this->dataId->pluck('id')->first();

        // create Transaction
        $transactions = Transaction::create([
            'invoice' => 'INV-' . Str::random(8),
            'user_id' => Auth::user()->id,
            'data_id' => $selectedDataId,
            'link_snap' => '',
            'price' => $this->harga,
            'promo' => $this->promo,
            'gross_amount' => $this->total,
            'payment_status' => 'PENDING',
            'payment_type' => '',
        ]);
        // session()->flash('message', 'Data Bertambah');
        // // dd($data);

        // Config midtrans
        Config::$serverKey = config('midtrans.serverKey');
        Config::$isProduction = config('midtrans.isProduction');
        Config::$isSanitized = config('midtrans.isSanitized');
        Config::$is3ds = config('midtrans.is3ds');

        // midtrans params
        $midtrans_params = [
            'transaction_details' => [
                'order_id' => $transactions->invoice,
                'gross_amount' => (int) $this->harga,
            ],
            'customer_details' => [
                'first_name' => $this->nama,
                'email' => $this->email,
                'phone' => $this->wa,
            ],
            'enabled_payments' => [$this->channel],
            "credit_card" => [
                "secure" => true
            ],
            'vtweb' => []
        ];


        // link snap payment_url 
        try {
            $paymentUrl = Snap::createTransaction($midtrans_params)->redirect_url;
            // update link payment
            $transactions->update([
                'link_snap' => $paymentUrl,
            ]);
            return redirect()->away($paymentUrl);
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.dashboard.kelola.pay.pay');
    }
}

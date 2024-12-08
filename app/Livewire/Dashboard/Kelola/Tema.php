<?php

namespace App\Livewire\Dashboard\Kelola;

use App\Models\Data;
use App\Models\Theme;
use Livewire\Component;
use Illuminate\Support\Facades\Crypt;
use App\Models\KelolaUndangan\Transaction;

class Tema extends Component
{
    public $dataId;
    public $tema;

    public function mount(){
        $this->tema = Theme::all(); 
        $this->dataId = Data::all();    
    }
    public function pay()
    {
    $selectedDataId = $this->dataId->pluck('id')->first();
     Transaction::create([
        'data_id'=> $selectedDataId,
        'payment_type' => 'qris'
     ]);
        return redirect()->route('dashboard.pay', Crypt::encryptString($this->dataId));
    }
    
    public function render()
    {
        return view('livewire.dashboard.kelola.tema');
    }
}

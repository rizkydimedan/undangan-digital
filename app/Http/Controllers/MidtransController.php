<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MidtransController extends Controller
{

    public function callback(){
        // $transactions = Transaction::with('data', 'user')
    }
    public function success(){
        return view('page.success');
    }
}

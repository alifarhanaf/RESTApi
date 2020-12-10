<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\OrdersCreateJob;

class OrderController extends Controller
{
    public function index(){
        return view('MainPage');
    }
    public function registerWebHook(){
        OrdersCreateJob::dispatch();
        return redirect()->back();
        // return 'Hi';

    }
    public function getWebHookData(Request $request){
        return 'Hi';
    }
}

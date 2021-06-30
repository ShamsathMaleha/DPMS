<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function createTransaction($id)
    {
        $t_info = Appointment::with(['patient'])->find($id);

     return view('user.transaction',compact('t_info'));
    }
    public function payTransaction (Request $request)
    {
        $this->validate($request,[

            't_phone'=>'required|min:11|max:11',
            'payment_method'=>'required',

        ]);

      Transaction::create([
        't_id'=>$request->input('t_id'),
        't_phone'=>$request->input('t_phone'),
        'visit'=>$request->input('visit'),
        'patient_id'=>auth()->user()->id,
        'payment_method'=>$request->input('payment_method')
        ]);

        return redirect()->route('home')->with('success', 'Please wait for the confirmation');
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\AppointmentConfirm;
use App\Models\Appointment;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TransactionController extends Controller
{
    public function transaction()
    {
        $t_info = Transaction::with(['patient'])->paginate(5);

        return view('admin.transaction', compact('t_info'));
    }

    public function handleStatus($id)
    {

        $t_info = Transaction::find($id);
        $a_info = Appointment::find($id);
        $t_check = Transaction::where('pay_status', 'unpaid')->first();
        $a_check= Appointment::where('status', 'pending')->first();


        // dd($t_info);
        if($t_check && $a_check ){
        $t_info->update([
            'pay_status' => 'paid',
        ]);
        $a_info->update([
            'status' =>' Pay Confirm',
        ]);

        }
        else{
            return redirect()->back()->with('error','Already Paid');
        }


     //send email to user
     Mail::to($t_info->patient->email)->send(new AppointmentConfirm($t_info));

        return redirect()->back()->with('success','Successfully Paid');
    }

}

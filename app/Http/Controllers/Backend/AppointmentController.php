<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Doctors;
use App\Models\Patients;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AppointmentController extends Controller
{
    public function appointment()
    {
    // $appointments=Appointment::with(['patient','doctor.user'])->where('doctor_id',auth()->user()->id)->get();

    $doctor = Doctors::where('user_id',auth()->user()->id)->first();
        // dd($doctor->id);
    $appointments=Appointment::with(['patient','doctor.user'])->where('doctor_id',$doctor->id,)->where('status','checked')->orWhere('status',' Pay Confirm')->orWhere('status','cancel')->get();


    return view('admin.appointment',compact('appointments'));
    }




    public function allappointment()
    {
    $appointments=Appointment::with(['patient','doctor.user'])->where('status',' Pay Confirm')->paginate(5);


    return view('admin.allAppointment',compact('appointments'));
    }

    public function pAppointment($id)
    {

    $patients= Patients::all();
    $data=Doctors::with('user')->find($id);




    return view('user.appointment',compact('data','patients'));

    }


    public function pAppointmentForm()
    {
     $appointments=Appointment::all();
    return view('user.appointmentForm',compact('appointments'));
    }







    public function checkout()
    {

        // $patients = auth()->user()->patient->id;

        // dd(auth()->user()->id);
        $checkout = Appointment::where('patient_id', auth()->user()->id)->get();


    return view('user.checkout',compact('checkout'));
    }


    public function Delete($id)
    {
     // dd($id);
        //first get the product
        $appointments = Appointment::find($id);


        //then delete it
        $appointments->delete();

        return redirect()->back();


    }




    public function appointmentCreate(Request $request)
   {

    $this->validate($request,[
        'schedule'=>'required|date|after:today',
        'time'=>'required',
    ]);


    $date = Carbon::parse($request->input('schedule'))->format('Y-m-d');
    $doctor = Doctors::find($request->input('doctor_id'));
    $appointmentCount = Appointment::whereDate('date',$date)->where('doctor_id',$request->input('doctor_id'))->count('id');
    // 2021-05-20


     $time= $request->time;


    $appointmentCheck = Appointment::where('date',$date)->where('doctor_id',$request->input('doctor_id'))->where('time',$time)->count();

  if($appointmentCheck > 0){
    return redirect()->back()->with('status', 'This time is already taken by another.');
  }


if($appointmentCount < $doctor->perDay_visit){
  $appointment =  Appointment::create([
        'doctor_id'=>$request->input('doctor_id'),
        'patient_id'=>auth()->user()->id,
        'time' => $request->time,
        'date'=>$request->schedule,

    ]);
    return redirect()->route('createTransaction',$appointment->id);

}

return redirect()->back()->with('status', 'Appointment Section is Fillup,Please try another Day.');




        // $user->doctor()->create([
        //     'name'=>$request->name,
        //     ]);


}

public function report()
{

    $appointments=Appointment::with(['patient','doctor.user'])->paginate(5);
    // dd($appointments);



        if (isset($_GET['from_date'])) {
            $fromDate = date('Y-m-d', strtotime($_GET['from_date']));
            $toDate = date('Y-m-d', strtotime($_GET['to_date']));

            // dd($toDate);

            $appointments=Appointment::with(['patient','doctor.user'])->whereBetween('date',[$fromDate,$toDate])->get();
        }
     return view('admin.report',compact('appointments'));

}

public function confirmStatus($id)
    {

        // $t_info = Transaction::find($id);
        $a_info = Appointment::find($id);
        // $t_check = Transaction::where('pay_status', 'unpaid')->first();
        $a_check= Appointment::where('status', ' Pay Confirm')->first();


        // dd($t_info);
        if( $a_check ){
        // $t_info->update([
            // 'pay_status' => 'paid',
        // ]);
        $a_info->update([
            'status' =>'checked',
        ]);

        }

            return redirect()->back()->with('success','Checked');

    }
    public function cancelStatus($id)
    {

        // $t_info = Transaction::find($id);
        $a_info = Appointment::find($id);
        // $t_check = Transaction::where('pay_status', 'unpaid')->first();
        $a_check= Appointment::where('status', ' Pay Confirm')->first();
        $b_check= Appointment::where('status', 'checked')->first();
        $c_check= Appointment::where('status', 'cancel')->first();



        // dd($t_info);
        if( $a_check ){
        // $t_info->update([
            // 'pay_status' => 'paid',
        // ]);
        $a_info->update([
            'status' =>'cancel',
        ]);

        }
        elseif($b_check){

            return redirect()->back()->with('error','Already Checked');
        }
// elseif($c_check){
//     return redirect()->back()->with('error','Already Cancel');

// }
            return redirect()->back()->with('success','Cancel');

    }


}

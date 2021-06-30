<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Patients;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class PatientController extends Controller
{

    public function index()
    {
        $patients=User::with('patient')->where('role','patient')->orderBy('id','desc')->paginate(5);

        return view('admin.patient',compact('patients'));
    }

    public function patientCreate(Request $request)
    {


    DB::beginTransaction();
    try{
        $user= User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role' => 'patient',
            'profile_pic'=>$file_name ?? '',
            'phone'=>$request->input('contact')
        ]);

        $user->patient()->create([
            'age'=>$request->age,
            'gender'=>$request->gender,
            'address'=>$request->address,
            'blood_group'=>$request->blood_group,

            ]);

        DB::commit();
        return redirect()->back();
    }catch(Throwable $e){
        DB::rollBack();
        return redirect()->back()->with('success', 'Added');


    }

    }


public function Delete($id)
{
 // dd($id);
    //first get the product
    $patients = Patients::find($id);


    //then delete it
    $patients->delete();


    return redirect()->back();
}

public function update(Request $request, $id)
{
    $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required|min:11|max:11',

    ]);
    //first get the product
    $user = User::find($id);
    $patients = $user->patient;

    $user->update([
    'name' => $request->input('name'),
    'email' => $request->input('email'),
    'phone'=>$request->input('phone'),
    ]);


   $patients->update([
    'age'=>$request->age,
    'gender'=>$request->gender,
    'address'=>$request->address,
    'blood_group'=>$request->blood_group,

   ]);



    return redirect()->back()->with('success', 'Your Profile Updated Successfully');
}

}







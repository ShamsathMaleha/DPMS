<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Doctors;
use App\Models\Specialist;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Throwable;

class DoctorController extends Controller
{
    public function doctor()
    {
        $specialists=Specialist::all();
        $doctors=User::where('role','doctor')->with('doctor')->paginate(4);
        return view('backend.content.doctor',compact('doctors','specialists'));
    }

    public function search(Request $request)
    {
        $search=$request->search;
        if($search){
            $doctors=Doctors::where('user_id','like','%'.$search.'%')->paginate(5);
                            // ->orWhere('category','like','%'.$search.'%')
        }else
        {
            $doctors=Doctors::paginate(5);
        }

        // where(name=%search%)
        $title="Search result";
        return view('backend.content.doctor',compact('doctors','search'));
    }

    public function doctorCreate(Request $request)
   {

// dd($request->all());
    DB::beginTransaction();
    $file_name='';
    // step:1 check req has file

    if($request->hasFile('picture'))
    {
        // file is valid?

        $file=$request->file('picture');
        if($file->isvalid());
  {
            // generate unique file name

            $file_name=date('Ymdhms').'.'.$file->getClientOriginalExtension();

            // store image local directory

            $file->storeAs('photo',$file_name);
        }
    }
    try{

        $user= User::create([


            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role' => 'doctor',
            'profile_pic'=>$file_name ?? '',
            'phone'=>$request->input('contact')
        ]);

        $user->doctor()->create([
            'doctor_id'=>$request->input('doctor_id'),
            'specialist_id'=>$request->input('specialist_id'),
            'visit_fee'=>100,
            'chamber'=>$request->input('chamber'),
            'perDay_visit'=>$request->input('PerDay_visit'),
            'degree'=>$request->input('degree'),

        ]);
        DB::commit();
        return redirect()->back()->with('success', 'Added');
    }catch(Throwable $e){
        DB::rollBack();
        return redirect()->back()->with('sucess', 'sucess');

    }




   }




   public function Delete($id)
   {
    // dd($id);
       //first get the product
       $user = User::find($id);

        $doctor = Doctors::where('user_id',$user->id)->delete();

       //then delete it
       $user->delete();

       return redirect()->back();
   }

 //User




//  public function userDoctor()
//  {

//      return view('user.doctor');
//  }

public function editDoctor($id)
{
    $user = User::find($id);
    $specialists=Specialist::all();

    return view('admin.edit',compact('user','specialists'));
}


public function update(Request $request,$id){

    $user = User::find($id);

    $user->update([
        'name'=>$request->input('name'),
        'phone'=>$request->input('contact'),
        'email'=>$request->input('email'),
        'profile_pic'=>$request->input('picture'),
    ]);

    $user->doctor()->update([
        'specialist_id'=>$request->input('specialist_id'),
        'chamber'=>$request->input('chamber'),
    ]);

    return redirect()->route('doctor')->with('success', 'Updated');

}

public function doctorProfile($id)
    {
        $data=Doctors::with('user','reviews')->find($id);

        // dd($data->reviews);
        return view('user.doctorProfile',compact('data'));
    }



}

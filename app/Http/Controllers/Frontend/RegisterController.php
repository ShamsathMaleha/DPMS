<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Throwable;

class RegisterController extends Controller
{


    public function register()
    {

        return view('user.register');
    }

    public function submit(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|min:11|max:11',
            'password' => 'required|min:4',
            'address'=>'required',
            'age'=>'required',
            'gender'=>'required',
            'blood_group'=>'required',
        ]);

          DB::beginTransaction();
            try{
                $user= User::create([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'password' => bcrypt($request->input('password')),
                    'role' => 'patient',
                    'phone'=>$request->input('phone'),
                ]);

                $user->patient()->create([
                    'age'=>$request->age,
                    'gender'=>$request->gender,
                    'address'=>$request->address,
                    'blood_group'=>$request->blood_group,


                    ]);

                DB::commit();
                return redirect()->route('user.login')->with('success','Successfully Registered');

            }catch(Throwable $e){
                DB::rollBack();
                return redirect()->back();
            }



    }



}

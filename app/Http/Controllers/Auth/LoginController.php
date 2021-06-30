<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    // public function __construct()

    // {
    //     $this->middleware(['guest']);
    // }

    public function index()
    {
        return view('admin.login');
    }

    public function adminPanel()
    {
        $patient_count=User::where('role','patient')->count();
        $doctor_count =User::where('role','doctor')->count();

        $today_app = Appointment::whereDate('created_at',now()->today())->count();
        $all_App = Appointment::count();


        return view('layouts.adminPanel',compact('doctor_count','today_app','patient_count','all_App'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [

            'email' => 'required|email',
            'password' => 'required'
        ]);



        if (Auth::attempt($request->only('email', 'password'), $request->remember)) {

            if(auth()->user()->role == 'admin'){
                return redirect()->route('admin.panel');
            }

            elseif(auth()->user()->role == 'doctor'){
                return redirect()->route('admin.panel');
            }

            elseif(auth()->user()->role == 'patient'){
                return redirect()->route('home');
            }
        }

        return back()->withErrors([
            'email' => 'Invalid Credentials.',
            // 'password' => 'Invalid Credentials.'

        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('admin.login')->with('success', 'Logout Successful.');
    }



}

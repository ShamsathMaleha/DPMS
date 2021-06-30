<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PharIo\Manifest\Author;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $doctors=User::where('role','doctor')->with('doctor')->get();
        $review=Review::all();
     return view('user.home',compact('doctors','review'));
    }

     //login
     public function authenticate(Request $request)
     {

         $request->validate([
             'email' => 'required|email',
             'password' => 'required|min:6'
         ]);
        $credentials = $request->only('email', 'password');


         if (Auth::attempt($credentials)) {
             $request->session()->regenerate();

             if (auth()->user()->role == 'admin') {
                 return redirect()->route('admin.home');
             }


            //  elseif(auth()->user()->role == 'doctor'){
            //     return redirect()->route('home');
            // }

            // elseif(auth()->user()->role == 'patient'){
            //     return redirect()->route('admin.home');
            // }

            //  elseif (auth()->user()->role == 'employee') {
            //      return redirect()->route('employee');
            //  }
         }
  return back()->withErrors([
             'email' => 'Invalid Credentials.'
         ]);
     }

     //logout
     public function logout()
     {
         Auth::logout();

         return redirect()->route('admin.login')->with('success', 'Logout Successful.');
     }


}

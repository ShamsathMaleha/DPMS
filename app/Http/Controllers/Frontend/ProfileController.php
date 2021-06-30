<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Patients;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{


    public function profile()
    {
        $patient = User::with('patient')->find(auth()->user()->id);

        return view('user.profile',compact('patient'));
    }



    public function review()
    {
        $review= Review::with('reviewUser','reviewDoc')->paginate(5);
        return view('admin.review',compact('review'));
    }


    public function editProfile()
    {
        $patient = User::with('patient')->find(auth()->user()->id);
        return view('user.profileCart',compact('patient'));
    }
}

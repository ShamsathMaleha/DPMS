<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    // public function writeReview()
    //     {


    //         return view('user.doctorProfile');

    //     }


        public function submitReview(Request $request)
        {

            Review::create([
                'doctor_id'=>$request->input('doctor_id'),
                'user_id'=>auth()->user()->id,
                'rate'=>$request->input('rate'),
                 'message'=>$request->input('message'),
            ]);
            return redirect()->back();


        }

}

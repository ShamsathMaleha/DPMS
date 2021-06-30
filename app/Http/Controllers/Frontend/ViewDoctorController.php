<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Doctors;
use Illuminate\Http\Request;

class ViewDoctorController extends Controller
{

 public function userDoctor()
 {
    $doctors=Doctors::with('user')->get();

     return view('user.doctor',compact('doctors'));
 }


}

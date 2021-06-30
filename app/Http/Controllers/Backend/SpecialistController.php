<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Specialist;
use Illuminate\Http\Request;

class SpecialistController extends Controller
{
    public function specialist()
    {
     $specialists = Specialist::all();
     return view('admin.specialist',compact('specialists'));
    }

    public function specialistCreate(Request $request)
    {

     Specialist::create([

     'specialist'=>$request->specialist,
     ]);
     return redirect()->back()->with('success','Added');
    }



}

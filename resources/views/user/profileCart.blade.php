@extends('layouts.app')


@section('content')


<h2 class="mt-3 text-center text-decoration-underline" style="color:rgb(10, 69, 136);">Personal Details</h2>
    <div class="card m-auto my-5 rounder shadow " style="width: 27rem; height: 32rem;">
        <div class="m-auto my-3 border shadow">

        </div>
        <div class="card-body my-1 m-auto text-info fst-italic">
          <h4 class="card-text"><b class="" style="color:rgb(10, 69, 136);">Name: {{ $patient->name }}</b> </h4>
          <h5 class="card-text"><b class="" style="color:rgb(10, 69, 136);">Email: {{$patient->email}}</b></h5>
          <h5 class="card-text"><b class="" style="color:rgb(10, 69, 136);">Age: {{$patient->patient->age}}</b> </h5>
          <h5 class="card-text"><b class="" style="color:rgb(10, 69, 136);">Gender: {{$patient->patient->gender}}</b> </h5>
          <h5 class="card-text"><b class="" style="color:rgb(10, 69, 136);">Blood Group: {{$patient->patient->blood_group}}</b> </h5>
          <h5 class="card-text"><b class="" style="color:rgb(10, 69, 136);">Contact: {{auth()->user()->phone}}</b> </h5>
          <h5 class="card-text"><b class="" style="color:rgb(10, 69, 136);">Address: {{$patient->patient->address}}</b> </h5>

            <a class="btn btn-info text-light" href="{{ route('patient.profile') }}" > Edit Profile</a>
        </div>
        </div>
      </div>



      @endsection

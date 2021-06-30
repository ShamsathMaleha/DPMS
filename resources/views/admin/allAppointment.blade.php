@extends('layouts.master')


@section('content')


<div class="container-fluid">
    <div class="row">




<main class="col-md-9 ms-sm-auto col-lg-12 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">All Appointments</h1>

    </div>




    <table class="table table-hover table-striped">

        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">PatientName</th>
            <th scope="col">DoctortName</th>
            <th scope="col">Email</th>
            <th scope="col">Time</th>

            <th scope="col">Date</th>



          </tr>
        </thead>
        <tbody>
            {{-- @dd($appointments) --}}
            @foreach($appointments as $key=>$request)
            {{-- @dd($request->appointmentUser->patientUser) --}}

            <tr>
                 <th scope="row">{{$key+1}} </th>
                <td>{{$request->patient->name}}</td>

                <td>{{$request->doctor->user->name}}</td>
                <td>{{$request->patient->email}}</td>
                <td>{{$request->time}}</td>


                <td>{{$request->date}}</td>





            </tr>




            @endforeach
        </tbody>
      </table>



{{ $appointments->links() }}

</main>

</div>
</div>




@endsection

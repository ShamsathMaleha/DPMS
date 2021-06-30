@extends('layouts.master')


@section('content')
{{--

<div class="container">
    <div class="row"> --}}




<main class="col-md-12 ms-sm-auto col-lg-12 px-md-12">


    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Appointments</h1>
    </div>
    {{-- <div class="row">
        <div class="col-sm-12">


        </div>
    </div>
</div> --}}


    <div class="row">
       <div class="col-sm-12">
        @include('message')
        <div class="card">
            {{-- <div class="card-body"> --}}
                <div class="table-responsive">
                    <table class="datatable table table-hover table-striped table-center mb-0">
        <thead>
          <tr>
            <th >#</th>
            <th >PatientName</th>
            <th >DoctortName</th>
            <th >Email</th>
            <th >Time</th>

            <th >Date</th>
            <th >Status</th>
            <th >Action</th>

          </tr>
        </thead>
        <tbody>
            {{-- @dd($appointments) --}}
            @foreach($appointments as $key=>$request)
            {{-- @dd($request->appointmentUser->patientUser) --}}

            <tr>
                 <th scope="row">{{$key+1}} </th>
                <td>{{$request->patient->name}}</td>

                <td>{{ $request->doctor->user->name }}</td>
                <td>{{$request->patient->email}}</td>
                <td>{{$request->time}}</td>

                <td>{{$request->date}}</td>
                <td>{{$request->status}}</td>







                <td>
                    @if($request->status==' Pay Confirm')
                    <a type="button" class="btn btn-info text-white" href=" {{ route('confim.status',$request->id) }}"> Accept</a>
                    <a class="btn btn-danger" href="{{route('cancel.status', $request->id)}}"> Decline </a>
                    @endif
                </td>


            </tr>




            @endforeach
        </tbody>
      </table>
                {{-- </div> --}}
            </div>
        </div>
    </div>
    </div>


</main>

{{-- </div>
</div> --}}



@endsection

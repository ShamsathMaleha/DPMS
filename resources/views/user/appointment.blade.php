
@extends('layouts.app')


@section('content')


{{-- @include('user.header') --}}


<!-- Page Content -->
<div class="content">
    <div class="container">

        <div class="row">
            @if(session()->has('status'))

<p class="alert alert-danger">{{session('status')}}</p>

@endif
        </div>

        <div class="row">
            <div class="col-12">
{{-- @dd($data) --}}
                <div class="card">
                    <div class="card-body">
                        <div class="booking-doc-info">
                            <a href="doctor-profile.html" class="booking-doc-img">
                                <img src="{{url('/files/photo/'.$data->user->profile_pic)}}" >
                            </a>

                            <div class="booking-info">
                                <h4>Name : {{$data->user->name}}</h4>
                                <h4>Specialist : {{$data->docSpecialist->specialist}}</h4>
                                <h4>Qualification : {{$data->degree}}</h4>

                    </div>
                </div>


            </div>
        </div>
    </div>







<!-- Page Content -->
<div class="content">
    <div class="container">

        <div class="row">
            <div class="col-md-7 col-lg-8">
                <div class="card">
                    <div class="card-body">

                        <!-- Checkout Form -->
                        <form action="{{route('appointmentCreate')}}" method="POST">
                            @csrf
                            <input type="hidden" name="doctor_id" value="{{$data->id}}">
                            <!-- Personal Information -->
                            <div class="info-widget row">
                                <h4 class="card-title">Personal Information</h4>
                               <div class="col-md-6">

                                        <div class="form-group card-label">
                                            <label>First Name</label>
                                            <input name="first_name" value="{{auth()->user()->name}}" class="form-control-sm" type="text">
                                        </div>
                                    {{-- </div> --}}


                                        <div class="form-group card-label">
                                            <label>Email</label>
                                            <input name="name" value="{{auth()->user()->email}}" class="form-control-sm" type="email">

                                        </div>
                                    {{-- </div> --}}


                                        <div class="form-group card-label">
                                            <label>Phone</label>
                                            <input name="phone"  value="{{auth()->user()->phone}}" class="form-control" type="text">
                                        </div>
                                    {{-- </div> --}}
                               </div>

                                    <div class="col-md-6">

                                            <div class="form-group card-label">
                                                <label>Schedule</label>
                                                <input name="schedule" class="form-control" type="date">

                                                @error('schedule')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>



                                            <div class="form-group card-label">
                                                <label>Time</label>
                                                <input name="time"class="form-control" type="time">

                                                @error('time')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        {{-- </div> --}}
                                    </div>
                                </div>


                                {{-- <div class="form-group  ">
                                    <label>First Name</label>
                                    <input class="form-control-sm" type="text">
                                </div> --}}


                                <div class="submit-section proceed-btn text-right">
                                    <button type="submit" class="btn btn-primary">Appointment</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

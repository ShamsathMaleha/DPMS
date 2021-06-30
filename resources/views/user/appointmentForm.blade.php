


@extends('layouts.app')


@section('content')


@include('user.header')




<!-- Page Content -->
<div class="content">
    <div class="container">

        <div class="row">
            <div class="col-md-7 col-lg-8">
                <div class="card">
                    <div class="card-body">

                        <!-- Checkout Form -->
                        <form action="https://dreamguys.co.in/demo/doccure/booking-success.html">

                            <!-- Personal Information -->
                            <div class="info-widget">
                                <h4 class="card-title">Personal Information</h4>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group card-label">
                                            <label>First Name</label>
                                            <input class="form-control-sm" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group card-label">
                                            <label>Last Name</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group card-label">
                                            <label>Email</label>
                                            <input class="form-control" type="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group card-label">
                                            <label>Phone</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group card-label">
                                            <label>Schedule</label>
                                            <input name="schedule" class="form-control" type="date">
                                        </div>


                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group card-label">
                                            <label>Time</label>
                                            <input class="form-control" type="time">
                                        </div>
                                    </div>
                                </div>


                                {{-- <div class="form-group  ">
                                    <label>First Name</label>
                                    <input class="form-control-sm" type="text">
                                </div> --}}


                                <div class="submit-section proceed-btn text-right">
                                    <a href="  {{route('appointment.form')}} " class="btn btn-primary submit-btn">Appointment Now</a>
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

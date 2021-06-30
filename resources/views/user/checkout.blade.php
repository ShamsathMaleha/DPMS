@extends('layouts.app')


@section('content')





<div class="content">
    <div class="container w-50 m-auto">


<div class="row">
</div>
    <div class="col-12">
{{-- @dd($data) --}}
@foreach ($checkout as $data)
        <div class="card ">
            <div class="card-body">


                <h5>Doctor Name: {{$data->doctor->user->name}}</h5>
                <h6>Appointment Date: {{$data->date}}</h6>
                <h6>Appointment Time: {{$data->time}}</h6>

            </div>
        </div>
@endforeach
    </div>



@endsection

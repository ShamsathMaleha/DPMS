


@extends('layouts.master')

@section('content')

{{-- @dd($user) --}}

<form  class="container w-50" method="post" action="{{route('updateDoctor',$user->id)}} ">


    @csrf

<div class="modal-body">
    <div class="form-group">
<label for="exampleInputName">DoctorName</label>
        <input name="name" value="{{$user->name}}" type="text" class="form-control" id="exampleInputName" placeholder="Enter Doctor Name">

    </div>

    <div class="form-group">

        <select name="specialist_id"  class="form-control" required>
            <option selected>Open this select menu</option>
            @foreach ($specialists as $request)
                <option value="{{ $request->id }}">{{ $request->specialist}}</option>
            @endforeach
        </select>
    </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Chamber</label>
            <input name="chamber" value="{{$user->doctor->chamber}}"  type="text" class="form-control" id="exampleInputName" placeholder="Enter Chamber Name">

        </div>






<div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input name="email" type="email" value="{{$user->email}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Doctor Email Address">

    </div>
<div class="form-group">
        <label for="exampleInputPhone">Contact</label>
        <input name="contact" type="number" value="{{$user->phone}}" class="form-control" id="exampleInputPhone" placeholder="Enter Doctor Phone Number">

    </div>
    {{-- <div class="form-group">
        <label for="exampleInputRePicture">Upload Picture</label>
        <input name="picture" type="file" value="{{$user->profile_picture}}" class="form-control" id="exampleInputRePicture" >

    </div> --}}



<div class="modal-footer">
  <button type="submit" class="btn btn-info text-light m-auto" style="margin-right: 385px;">Update</button>
</div>

</form>


@endsection

@extends('layouts.master')


@section('content')


{{-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Patients</h1>
<button type="button" class="btn btn-primary mt-5 mx-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Register New Patients
</button>


            </div> --}}

            <main class="col-md-12 ms-sm-auto col-lg-12 px-md-12">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                  <h1 class="h2">Patients</h1>

                  <button type="button" class="btn btn-primary mt-5 mx-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Register New Patient
                  </button>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            @include('message')

                                    <table class="datatable table table-hover table-center mb-0">

                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">PatientName</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Age</th>

                    <th scope="col">Gender</th>
                    <th scope="col">Address</th>
                    <th scope="col">Blood Group</th>
                    <th scope="col">Email</th>


                  </tr>
                </thead>
                {{-- @dd($patients) --}}
                <tbody>
                    @foreach($patients as $key=>$request)


                    <tr>
                <th scope="row">{{ $key+1 }}</th>

                        <td>{{$request->name}}</td>
                        <td>{{$request->phone}}</td>

                        <td>{{optional($request->patient)->age}}</td>
                        <td>{{optional($request->patient)->gender}}</td>
                        <td>{{optional($request->patient)->address}}</td>
                        <td>{{optional($request->patient)->blood_group}}</td>
                        <td>{{$request->email}}</td>


                    </tr>




                    @endforeach
                </tbody>

              </table>
                                </div>
                            </div>

                </div>
                {{ $patients->links() }}
            </main>





<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel"> Doctor</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
 <form method="POST" enctype="multipart/form-data" action="{{route('patientCreate')}}" >


            @csrf

        <div class="modal-body">
            <div class="form-group">
 <label for="exampleInputName">PatientName</label>
                <input name="name" type="text" class="form-control" id="exampleInputName" placeholder="Enter Patient Name">

            </div>

            <div class="form-group">
                <label for="exampleInputName">Phone</label>
                <input name="contact" type="text" class="form-control" id="exampleInputName" placeholder="Enter Phone Numbers">
                    {{-- <option selected>Open this select menu</option> --}}
                    {{-- @foreach ($designations as $request)
                        <option value="{{ $request->id }}">{{ $request->designation}}</option>
                    @endforeach --}}

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input name="email" type="email" class="form-control" id="exampleInputName" placeholder="Enter Email">

                    </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Age</label>
                    <input name="age" type="text" class="form-control" id="exampleInputName" placeholder="Enter Age">

                </div>
                <div class="form-group">

                    <div class="col-12 col-md-6">
                        <div class="form-group" >
                            <label>Blood Group</label>
                            <select class="form-control select" name="blood_group">
                                <option>A-</option>
                                <option>A+</option>
                                <option>B-</option>
                                <option>B+</option>
                                <option>AB-</option>
                                <option>AB+</option>
                                <option>O-</option>
                                <option>O+</option>
                            </select>
                        </div>
                    </div>

                </div>





<div class="form-group">
                <label for="exampleInputEmail1">Gender</label>
                <select class="form-control" name="gender" id="">
                    <option value="null">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>

            </div>
 <div class="form-group">
                <label for="exampleInputPhone">Address</label>
                <input name="address" type="text" class="form-control" id="exampleInputPhone" placeholder="Enter Patient Address">

            </div>
            <div class="form-group">
                <label for="exampleInputPhone">Description</label>
                <input name="about" type="text" class="form-control" id="exampleInputPhone" placeholder="Enter Description">

            </div>
            <div class="form-group">
                <label for="exampleInputPhone">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword" placeholder="Enter Password">





  <div class="modal-footer">

          <button type="submit" class="btn btn-primary" style="margin-right: 385px;">Register</button>
        </div>

    </form>
 </div>
    </div>
  </div>


@endsection







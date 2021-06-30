@extends('layouts.master')


@section('content')



        <main class="col-md-12 ms-sm-auto col-lg-12 px-md-10">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Doctors</h1>
              <button type="button" class="btn btn-primary mt-5 mx-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Register New Doctor
              </button>




            </div>



            @if(isset($search))
<p>
<span class="alert alert-success"> you are searching for '{{$search}}' , found ({{count($doctors)}})</span>
</p>
@endif




            <div class="row">
                <div class="col-md-12">

                    @include('message')
                    <div class="card">

								<div class="card-body">
									<div class="table-responsive">


        <table class="datatable table table-hover table-center mb-0 table-es-sm">

                <thead>
                  <tr>
                    <th scope="col">Doctor ID</th>
                    <th scope="col">DoctorName</th>
                    <th scope="col">Image</th>
                    <th scope="col">Specialist</th>
                    <th scope="col">Qualifications</th>
                    <th scope="col">PerDay Visit</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Visit Fee</th>
                    <th scope="col">Chamber</th>
                    <th scope="col">Status</th>
                    <th scope="col">Edit/Delete</th>

                  </tr>
                </thead>
                {{-- @dd($specialists) --}}
                <tbody>
                    @foreach($doctors as $request)

{{-- @dd($request) --}}
                    <tr>
                    <th scope="row">{{$request->doctor->doctor_id}} </th>

                        <td>{{$request->name}}</td>

                        <td><img src="{{url('/files/photo/'.$request->profile_pic)}}" style="width:70px; height:60px;" ></td>

                        <td>{{$request->doctor->docSpecialist->specialist}}</td>
                        <td>{{$request->doctor->degree}}</td>
                        <td>{{$request->doctor->perDay_visit}}</td>
                        <td>{{$request->email}}</td>
                        <td>{{$request->phone}}</td>
                        <td>{{$request->doctor->visit_fee}}</td>
                        <td>{{$request->doctor->chamber}}</td>
                        <td>a</td>



                        <td>
                            <a class="btn btn-info text-light" href="{{route('editDoctor', $request->id)}}"> Edit</a>
                            <a class="btn btn-danger" href="{{route('doctorDelete', $request->id)}}"> Delete</a>

                        </td>

                    </tr>




                    @endforeach
                </tbody>
              </table>

                                    </div>
                                </div>
    </div>
</div>
            </div>




        </main>





      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel"> Doctor</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
     <form method="POST" enctype="multipart/form-data" action="{{route('doctorCreate')}}" >


                @csrf


                    <div class="form-group">

                        <input name="doctor_id" type="text" class="form-control" required id="exampleInputName" placeholder="Enter Doctor ID">

                    </div>



                <div class="form-group">

                    <input name="name" type="text" class="form-control"  required id="exampleInputName" placeholder="Enter Doctor Name">


            </div>

                    <div class="form-group">

                        <input name="degree" type="text" class="form-control" id="exampleInputName"  required placeholder="Enter Qualification">

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

                        <input name="chamber" type="text" class="form-control" id="exampleInputName"  required placeholder="Enter Chamber Name">

                    </div>


                    <div class="form-group">

                        <input name="PerDay_visit" type="text" class="form-control" id="exampleInputName"  required placeholder="Enter Per-day Number  ">

                    </div>




    <div class="form-group">

                    <input name="email" type="email" class="form-control" id="exampleInputEmail1"  required placeholder="Enter Doctor Email Address">

                </div>
     <div class="form-group">

                    <input name="contact" type="number" class="form-control" id="exampleInputPhone" required placeholder="Enter Doctor Phone Number">

                </div>
                <div class="form-group">

                    <input name="password" type="password" class="form-control" id="exampleInputPassword" required placeholder="Enter Doctor Password">

                </div>
                <div class="form-group">

                    <input name="picture" type="file" class="form-control" id="exampleInputRePicture" >

                </div>



      <div class="modal-footer">
              <button type="submit" class="btn btn-primary" style="margin-right: 385px;">Register</button>
            </div>

        </form>
     </div>
        </div>
      </div>
      {{ $doctors->links() }}

@endsection

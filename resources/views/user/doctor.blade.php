@extends('layouts.app')


@section('content')







<!-- Page Content -->
@foreach ($doctors as $data)
			<div class="content w-50 m-auto">
				<div class="container">

					<!-- Doctor Widget -->
					<div class="card">
						<div class="card-body">
							<div class="doctor-widget">

								<div class="doc-info-left">


									<div class="doctor-img mx-3">
                                        <img  style="height:100px; "src="{{url('/files/photo/'.$data->user->profile_pic)}}" >
									<div class="doc-info-cont mt-3">
										<h4 class="doc-speciality fs-6">Name : {{$data->user->name}} </h4>
                                        <h5 class="doc-speciality">Qualifications : {{$data->degree}} </h5>
										<h6 class="doc-speciality">Specialist : {{$data->docSpecialist->specialist}}</h6>
                                        <h5 class="doc-speciality">Email : {{$data->user->email}} </h5>
										{{-- <p class="doc-department"><img src="assets/img/specialities/specialities-05.png" class="img-fluid" alt="Speciality">Dentist</p> --}}

									</div>
								</div>
								<div >
									<div class="clini-infos " style="margin-left:220px;">
										<ul>

											<li> <h5>{{$data->visit_fee}} BDT.</h5> </li>
										</ul>
									</div>

                                    <div  style="margin-top:80px;margin-left:220px;">
                                        <a class="btn btn-info text-light" href="{{ route('doctorProfile',$data->id) }} "> Profile</a>
                                    </div>
                                        <div  style="margin-top:20px; margin-left:200px;">
                                            <a class="btn btn-info text-light" href="{{route('user.appointment',$data->id)}} "> Appointment</a>
                                        </div>





								</div>

							</div>
						</div>
					</div>
                </div>
            </div>
        </div>

            @endforeach

@endsection

@extends('layouts.app')


@section('content')






      <!-- Main Wrapper -->
      <div class="main-wrapper">

@include('message')
        <!-- Home Banner -->
                <section class="section section-search">
                    <div class="container-fluid">
                        <div class="banner-wrapper">
                            <div class="banner-header text-center">
                                <h1>Make an Appointment</h1>
                                <p>Discover the best doctors the city nearest to you.</p>
                            </div>



                        </div>
                    </div>
                </section>
                <!-- /Home Banner -->

                <!-- Clinic and Specialities -->
                <section class="section section-specialities">
                    <div class="container-fluid">
                        <div class="section-header text-center">
                            <h2>Specialities</h2>
                            <p class="sub-title">Here you can find the best treatement.</p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-9">
                                <!-- Slider -->
                                <div class="specialities-slider slider">

                                    <!-- Slider Item -->
                                    <div class="speicality-item text-center">
                                        <div class="speicality-img">
                                            <img src={{url("frontend/assets/img/specialities/specialities-01.png")}} class="img-fluid" alt="Speciality">
                                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                        </div>
                                        <p>Urology</p>
                                    </div>
                                    <!-- /Slider Item -->

                                    <!-- Slider Item -->
                                    <div class="speicality-item text-center">
                                        <div class="speicality-img">
                                            <img src={{url("frontend/assets/img/specialities/specialities-02.png")}} class="img-fluid" alt="Speciality">
                                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                        </div>
                                        <p>Neurology</p>
                                    </div>
                                    <!-- /Slider Item -->

                                    <!-- Slider Item -->
                                    <div class="speicality-item text-center">
                                        <div class="speicality-img">
                                            <img src={{url("frontend/assets/img/specialities/specialities-03.png")}} class="img-fluid" alt="Speciality">
                                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                        </div>
                                        <p>Orthopedic</p>
                                    </div>
                                    <!-- /Slider Item -->

                                    <!-- Slider Item -->
                                    <div class="speicality-item text-center">
                                        <div class="speicality-img">
                                            <img src={{url("frontend/assets/img/specialities/specialities-04.png")}} class="img-fluid" alt="Speciality">
                                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                        </div>
                                        <p>Cardiologist</p>
                                    </div>
                                    <!-- /Slider Item -->

                                    <!-- Slider Item -->
                                    <div class="speicality-item text-center">
                                        <div class="speicality-img">
                                            <img src={{url("frontend/assets/img/specialities/specialities-05.png")}} class="img-fluid" alt="Speciality">
                                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                        </div>
                                        <p>Dentist</p>
                                    </div>
                                    <!-- /Slider Item -->

                                </div>
                                <!-- /Slider -->

                            </div>
                        </div>
                    </div>
                </section>
                <!-- Clinic and Specialities -->


                <!-- Popular Section -->
                <section class="section section-doctor">
                    <div class="container-fluid">
                       <div class="row">
                            <div class="col-lg-4">
                                <div class="section-header ">
                                    <h2>Book Our Doctor</h2>
                                    <p>Our team  create a friendly, compassionate, and comfortable chair-side experience. ‍When you choose an implant specialist, you will feel heard, valued, and respected and given the best oral care options that meet your oral care expectations. </p>
                                </div>
                                <div class="about-content">
                                    {{-- <p>#                                    #</p>
                                    <p>#</p> --}}
                                    {{-- <a href="javascript:;">Read More..</a> --}}
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="doctor-slider slider">

            @foreach($doctors as $data)
            <div class="profile-widget">
                <div >

            <img class="img-fluid" alt="User Image" src="{{url('/files/photo/'.$data->profile_pic)}}">


                                </div>
                                {{-- @dd($data->doctor->docSpecialist->specialist) --}}
                                   <div class="pro-content">
                               {{-- <h3 class="title"> --}}
                                <p class="doc-speciality fs-6">Name : {{$data->name}} </p>
                                   {{-- <i class="fas fa-check-circle verified"></i> --}}
                               {{-- </h3> --}}
                               <p class="speciality"> Specialist : {{$data->doctor->docSpecialist->specialist}}</p>
                               <p class="speciality"> Qualification : {{$data->doctor->degree}}</p>
                               {{-- @dd($data->doctor->specialist) --}}
                               <ul class="available-info">


                               <div class="clinic-booking" style="margin-top:70px">
                                <a class="apt-btn" href="{{route('user.appointment',$data->doctor->id)}} "> Appointment</a>
                                </div>
                           </div>
                       </div>
                       @endforeach






                                </div>
                            </div>
                       </div>
                    </div>
                </section>

{{-- // review --}}



                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">



                    {{-- @foreach($review as $data)

                                   <div class="col mt-5">
                                       <div class="card shadow-sm h-100" style="height:250px;width:270px;">
                                           <div class="card-body" >
                                               <p class="card-text">Name:{{$data->reviewUser->name}}</p>
                                               <p class="card-text">Email:{{$data->reviewUser->email}}</p>
                                               <p class="card-text">Rate:{{$data->rate}}</p>
                                                <p class="card-text">Opinion:{{$data->message}}</p>

                                           </div>
                                       </div>
                                   </div>
                                   @endforeach --}}





                               </div>
                           </div>
                       </div>

                <!-- /Popular Section -->
    <!-- Footer -->
    <footer class="footer">

        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">

                        <!-- Footer Widget -->
                        <div class="footer-widget footer-about">
                            <div class="footer-logo">
                                {{-- <img src="assets/img/footer-logo.png" alt="logo"> --}}
                                <h2 class="text-light">MEDIC_BD</h2>
                            </div>
                            <div class="footer-about-content">
                                <p>#</p>

                            </div>
                        </div>
                        <!-- /Footer Widget -->

                    </div>

                    <div class="col-lg-3 col-md-6">

                        <!-- Footer Widget -->
                        <div class="footer-widget footer-menu">
                            <h2 class="footer-title">For Patients</h2>
                            <ul>

                                <li><a href="{{ route('user.login') }}"><i class="fas fa-angle-double-right"></i> Login</a></li>
                                <li><a href="{{ route('register') }} "><i class="fas fa-angle-double-right"></i> Register</a></li>
                                <li><a href="{{ route('user.doctor') }}"><i class="fas fa-angle-double-right"></i> Appointment</a></li>

                            </ul>
                        </div>
                        <!-- /Footer Widget -->

                    </div>

                    <div class="col-lg-3 col-md-6">

                        <!-- Footer Widget -->
                        <div class="footer-widget footer-menu">
                            <h2 class="footer-title">For Doctors</h2>
                            <ul>
                                <li><a href="{{ route('user.doctor') }}"><i class="fas fa-angle-double-right"></i> Appointments</a></li>
                                {{-- <li><a href="chat.html"><i class="fas fa-angle-double-right"></i> Chat</a></li> --}}
                                <li><a href="{{ route('user.login') }}"><i class="fas fa-angle-double-right"></i> Login</a></li>
                                {{-- <li><a href="doctor-register.html"><i class="fas fa-angle-double-right"></i> Register</a></li> --}}

                            </ul>
                        </div>
                        <!-- /Footer Widget -->

                    </div>

                    <div class="col-lg-3 col-md-6">

                        <!-- Footer Widget -->
                        <div class="footer-widget footer-contact">
                            <h2 class="footer-title">Contact Us</h2>
                            <div class="footer-contact-info">

                                <p>
                                    <i class="fas fa-phone-alt"></i>
                                    1246
                                </p>
                                <p class="mb-0">
                                    <i class="fas fa-envelope"></i>
                                    medicbd@gmail.com
                                </p>
                            </div>
                        </div>
                        <!-- /Footer Widget -->

                    </div>

                </div>
            </div>
        </div>
        <!-- /Footer Top -->

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container-fluid">

                <!-- Copyright -->
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">

                        </div>
                        <div class="col-md-6 col-lg-6">


                        </div>
                    </div>
                </div>
                <!-- /Copyright -->

            </div>
        </div>
        <!-- /Footer Bottom -->

    </footer>
    <!-- /Footer -->



<style>
.home_image{
height:100%;



}




</style>




    </main>
  </div>
</div>







    @endsection

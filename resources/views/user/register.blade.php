@extends('layouts.app')


@section('content')




<!-- Page Content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-8 offset-md-2">

                <!-- Register Content -->
                <div class="account-content">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-7 col-lg-6 login-left">
                            <img src={{url("/frontend/assets/img/login-banner.png")}} class="img-fluid" alt="Doccure Register">
                        </div>
                        <div class="col-md-12 col-lg-6 login-right">
                            <div class="login-header">
                                <h3> Register </h3>
                            </div>

                            <!-- Register Form -->
                            <form method="post" action="{{route("register.submit")}} ">
                                @csrf
                                @error('name')
                                <div class="error">
                                 {{ $message }}
                                 </div>
                                 @enderror
                                <div class="form-group form-focus">
                                    <input name="name" type="text" placeholder="Name" class="form-control floating @error('name') alert alert-danger @enderror">
                                    <label class="focus-label">Name</label>
                                </div>


                                @error('email')
                                <div class="error">
                                 {{ $message }}
                                 </div>
                                 @enderror
                                <div class="form-group form-focus">
                                    <input name="email"type="email" class="form-control floating @error('email') alert alert-danger @enderror">
                                    <label class="focus-label">Email</label>

                                </div>
                                @error('gender')
                                <div class="error">
                                 {{ $message }}
                                 </div>
                                 @enderror
                                <div class="form-group form-focus">
                                    <input name="gender" type="text" placeholder="Gender" class="form-control floating @error('gender') alert alert-danger @enderror">
                                    <label class="focus-label">Gender</label>
                                </div>
                                @error('age')
                                <div class="error">
                                 {{ $message }}
                                 </div>
                                 @enderror
                                <div class="form-group form-focus">
                                    <input name="age"type="text" class="form-control floating @error('age') alert alert-danger @enderror">
                                    <label class="focus-label">age</label>
                                </div>
                                @error('address')
                                <div class="error">
                                 {{ $message }}
                                 </div>
                                 @enderror
                                <div class="form-group form-focus">
                                    <input name="address"type="text" class="form-control floating @error('address') alert alert-danger @enderror">
                                    <label class="focus-label">Address</label>
                                </div>
                                @error('phone')
                                <div class="error">
                                 {{ $message }}
                                 </div>
                                 @enderror
                                <div class="form-group form-focus">
                                    <input name="phone"type="number" class="form-control floating @error('phone') alert alert-danger @enderror">
                                    <label class="focus-label">Mobile Number</label>
                                </div>
                                @error('blood_group')
                                <div class="error">
                                 {{ $message }}
                                 </div>
                                 @enderror
                                <div class="form-group form-focus">
                                    <input name="blood_group"type="text" class="form-control floating @error('blood_group') alert alert-danger @enderror">
                                    <label class="focus-label">Blood Group</label>
                                </div>
                                @error('password')
                                <div class="error">
                                 {{ $message }}
                                 </div>
                                 @enderror
                                <div class="form-group form-focus">
                                    <input name="password" type="password" class="form-control floating @error('password') alert alert-danger @enderror">
                                    <label class="focus-label">Create Password</label>
                                </div>

                                <div class="text-right">
                                    <a class="forgot-link" href="{{route('user.login')}} ">Already have an account?</a>
                                </div>
                                <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>


                            </form>
                            <!-- /Register Form -->

                        </div>
                    </div>
                </div>
                <!-- /Register Content -->

            </div>
        </div>

    </div>

</div>
<!-- /Page Content -->

@endsection

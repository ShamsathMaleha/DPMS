
@extends('layouts.app')


@section('content')


{{-- @include('user.header') --}}




<div class="content">
    <div class="container w-50 mt-5">
<div>
<h4>Bkash Number : 01616999999</h4>
<h4>Rocket Number: 016160000000</h4>

</div>
        <div class="row">
            <form action="/action_page.php">


              </form>
                <div class="card">
                    <div class="card-body">

                        <!-- Checkout Form -->
                        <form action="{{route('payTransaction')}} " method="psot">

                            <div class="row d-flex my-2 ml-2">
                                <div class="col-md-6">
                             <input type="checkbox" name="payment_method" value="bkash" >
                             <label for="vehicle1"> <img src="https://media-exp1.licdn.com/dms/image/C510BAQFYQ12drExNfw/company-logo_200_200/0/1567518887113?e=2159024400&v=beta&t=NqOeHA9iax5LN_y6bQmgZx3a2020WUDr_x6JR1rFPIs" style="width:50px; height:50px;" alt="">Bkash</label><br>
                         </div>
                         <div class="col-md-6">
                             <input type="checkbox" name="payment_method" value="rocket" >
                             <label for="vehicle2"> <img src="https://media-exp1.licdn.com/dms/image/C510BAQECvetZN5XgCg/company-logo_200_200/0/1519903960228?e=2159024400&v=beta&t=Cu6k6pul90PHjkNEV6Snx7HXi5OhYe1TF_jKxHSdBjc" style="width:50px; height:50px;" alt="">Rocket</label><br>
                            </div>
                         </div>

                            <!-- Personal Information -->
                            <div class="payment-widget">
                                <!-- Credit Card Payment -->
                                <div class="payment-list">

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group card-label">
                                                <label for="card_name">Transaction-ID</label>
                                                <input  required class="form-control" name="t_id" type="integer">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group card-label">
                                                <label for="card_number">Patient Phone:  </label>

                                                <input required class="form-control @error('t_phone') alert alert-danger @enderror " id="t_phone" name="t_phone"  type="integer">

                                            </div>

                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group card-label">
                                                <label for="card_number">Patient Name: </label>
                                                <input class="form-control"  id="name" value="{{ $t_info->patient->name }}" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group card-label">
                                                <label for="expiry_month">Amount: </label>
                                                <input readonly class="form-control" name="visit" id="expiry_month" value="{{ $t_info->doctor->visit_fee }}" type="decimal">
                                            </div>
                                        </div>


                                        </div>
                                    </div>
                                </div>

                                <!-- Terms Accept -->

                                <!-- /Terms Accept -->

                                <!-- Submit Section -->
                                <div class="submit-section mt-4">
                                    <button type="submit" class="btn btn-primary submit-btn">Confirm and Pay</button>
                                </div>
                                <!-- /Submit Section -->

                            </div>
                        </form>
                        <!-- /Checkout Form -->

                    </div>
                </div>

            </div>




        </div>

    </div>

</div>
<!-- /Page Content -->
@endsection



@extends('layouts.master')


@section('content')

<main class="col-md-12 ms-sm-auto col-lg-12 px-md-12">

        <!-- Page Header -->
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Transactions</h1>
          </div>

        <!-- /Page Header -->

        <div class="row">
            <div class="col-sm-12">
                @include('message')
                <div class="card">
                        {{-- <div class="table-responsive"> --}}
                            <table class="datatable table table-hover table-center mb-0">
                                <thead>
                                    <tr>
                                        <th>Invoice Number</th>

                                        <th>Patient ID</th>
                                        <th>Patient Name</th>
                                        <th>Total Amount</th>
                                        <th>Payment Method</th>
                                        <th>Transaction Number</th>
                                        <th>Transaction ID</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($t_info as $key=>$request)
                                    <tr>
                                        <td>{{$key+1}}</td>

                                        <td>{{$request->patient_id }}</td>
                                        <td>{{$request->patient->name }}</td>

                                        <td>{{$request->visit}}</td>
                                        <td>{{$request->payment_method}}</td>
                                        <td>{{$request->t_phone }}</td>
                                        <td>{{$request->t_id}}</td>
                                        <td>{{$request->pay_status}}</td>
                                        <td>
                                            <a href="{{route('status',$request->id)}}" class="btn btn-primary" >Paid</a>
                                        </td>
                                    </tr>

                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        {{-- </div> --}}

                </div>

            </div>

        </div>
    </div>

<!-- /Page Wrapper -->


@endsection

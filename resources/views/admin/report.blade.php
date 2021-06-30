@extends('layouts.master')


@section('content')


<div class="container-fluid">
    <div class="row">




        <main class="col-md-12 ms-sm-auto col-lg-12 px-md-12">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Appointment Report</h1>

    </div>




<form action={{ route('admin.report') }} method="GET">

        {{-- @csrf --}}

        <div class="row">
            <div class="col-md-8">
                <div class=" row">
                    <div class="col-md-6">
                        <label for="from">Date From:</label>
                        <input id="from" type="date" class="form-control" name="from_date">
                    </div>

                    <div class="col-md-6">
                        <label for="to">Date To:</label>
                        <input id="to" type="date" class="form-control" name="to_date">
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Search</button>
                <button type="button" onclick="printDiv()" class="btn btn-success mx-3">Print</button>
            </div>
        </div>
    </form>

    <div id="printArea">


    <table class="table table-hover table-striped">

        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">PatientName</th>
            <th scope="col">DoctortName</th>
            <th scope="col">Email</th>
            <th scope="col">Time</th>

            <th scope="col">Date</th>

          </tr>
        </thead>
        <tbody>
            {{-- @dd($appointments) --}}
            @if ($appointments->count() > 0)
            @foreach($appointments as $key=>$request)
            {{-- @dd($request->appointmentUser->patientUser) --}}

            <tr>
                 <th scope="row">{{$key+1}} </th>
                <td>{{$request->patient->name}}</td>
                <td>{{$request->doctor->user->name}}</td>
                <td>{{$request->patient->email}}</td>
                <td>{{$request->time}}</td>


                <td>{{$request->date}}</td>







            </tr>




            @endforeach


            @else

            <td>
                <h4>No Data Found!</h4>
            </td>


        @endif
        </tbody>
      </table>
    </div>





</main>

</div>
</div>
<script type="text/javascript">
    function printDiv() {
        var printContents = document.getElementById("printArea").innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }

</script>



@endsection

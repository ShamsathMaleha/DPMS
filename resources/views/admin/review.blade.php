
@extends('layouts.master')


@section('content')




<main class="col-md-12 ms-sm-auto col-lg-12 px-md-12">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Reviews</h1>


    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                @include('message')

                        <table class="datatable table table-hover table-center mb-0">

    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Patient Name</th>
        <th scope="col">Doctor Name</th>
        <th scope="col">Feedback</th>
        <th scope="col">Rating</th>



      </tr>
    </thead>
    {{-- @dd($patients) --}}
    <tbody>
        @foreach($review as $key=>$request)


        <tr>
            <th scope="row">{{ $key+1 }}</th>

            <td>{{$request->reviewUser->name}}</td>
            <td>{{$request->reviewDoc->user->name}}</td>

            <td>{{$request->message}}</td>
            <td>{{$request->rate}}</td>


        </tr>




        @endforeach
    </tbody>

  </table>
                    </div>
                </div>

    </div>
    {{ $review->links() }}
</main>








@endsection

@extends('layouts.master')


@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-7 col-auto">
								<h3 class="page-title">Specialities</h3>

							</div>
							 <!-- Button trigger modal -->
<button type="submit" class="btn btn-primary" style="width:100px; height:50px" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add
  </button>
						</div>
					</div>
					<!-- /Page Header -->
					<div class="row">
						<div class="col-sm-12">
                            @include('message')
							<div class="card">

										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>

													<th>Specialities</th>

												</tr>
											</thead>
											<tbody>
												@foreach($specialists as $request)

        <tr>

            <td>{{$request->specialist}}</td>


        </tr>
        @endforeach
												</tr>
											</tbody>
										</table>
									</div>
								</div>

					</div>
				</div>
			</div>






  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Specialist Type</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action={{route('specialist.create')}} method="post">
            @csrf
        <div class="modal-body">

            <div class="form-group">
                <label for="exampleInputDesignation">Specialist</label>
                <input name="specialist" type="text" class="form-control" id="exampleInputDesignation" placeholder="Enter Specialist">

            </div>
        </div>
        <div class="modal-footer">

          <button type="submit" class="btn btn-primary" style="margin-right: 220px;">Add</button>
        </div>
        </div>
    </form>
      </div>
    </div>
  </div>
                @endsection

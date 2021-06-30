
@extends('layouts.app')


@section('content')




<div class="content">
    <div class="container-fluid w-50">
        <div class="row">
					<!-- Doctor Widget -->
					<div class="card">
						<div class="card-body">
							<div class="doctor-widget">
								<div class="doc-info-left">
									<div class="doctor-img">
                                        <img  style="height:100px; "src="{{url('/files/photo/'.$data->user->profile_pic)}}" >
									</div>
									<div class="doc-info-cont mx-5">
                                        {{-- @dd($data->user->name); --}}

										<h4 class="doc-name">Name : {{$data->user->name}}</h4>
										<p class="doc-speciality">Specialist : {{$data->docSpecialist->specialist}}, {{$data->degree}}</p>



									</div>
								</div>
								<div class="doc-info-right">
									<div class="clini-infos">
										<ul>

											<li><i class="far fa-money-bill-alt text-center my-5"></i> {{$data->visit_fee}} BDT.</li>
										</ul>
									</div>

								</div>
							</div>
						</div>
					</div>
					<!-- /Doctor Widget -->
@auth
					<!-- Doctor Details Tab -->
					<div class="card">
						<div class="card-body pt-0">

							<!-- Tab Menu -->
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">


									<li class="nav-item">
										<a class="nav-link" href="#doc_reviews" data-toggle="tab">Reviews</a>
									</li>

								</ul>
							</nav>
							<!-- /Tab Menu -->

							<!-- Tab Content -->
							<div class="tab-content pt-0">

								<!-- /Locations Content -->

								<!-- Reviews Content -->
								<div role="tabpanel" id="doc_reviews" class="tab-pane fade">

									<!-- Review Listing -->
									<div class="widget review-listing">
										<ul class="comments-list">

											<!-- Comment List -->

											<!-- /Comment List -->

											<!-- Comment List -->
                                            @foreach ($data->reviews as $request)


											<li>

												<div class="comment">

													<div class="comment-body">
														<div class="meta-data">
															<span class="comment-author">Patient Name: {{ $request->reviewUser->name }}</span>


														</div>
														<p class="comment-content">
															Review: {{ $request->message }}
														</p>
                                                        <p class="comment-content">
                                                            Rating: {{ $request->rate }}
                                                        </p>

													</div>
												</div>
											</li>
                                            @endforeach
											<!-- /Comment List -->

										</ul>

									</div>
									<!-- /Review Listing -->

									<!-- Write Review -->
									<div class="write-review">
										<h4>Write a review for <strong> {{$data->user->name}}</strong></h4>

										<!-- Write Review Form -->
										<form action="{{ route('submitReview') }}" method="post">
                                            @csrf


                                            <input type="hidden" name="doctor_id" value="{{ $data->id }}">

											<div class="form-group">
												<label>Your review</label>
												<textarea id="review_desc" maxlength="100" class="form-control" name="message"></textarea>

											  <div class="d-flex justify-content-between mt-3"><small class="text-muted"><span id="chars">100</span> characters remaining</small></div>
											</div>
                                            <div class="pinfo">Rate Doctor</div>



                                            <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-heart"></i></span>
                                             <select name="rate" class="form-control" id="rate">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                              </select>
                                              </div>
											<hr>
											<div class="form-group">
												<div class="terms-accept">

											</div>
											<div class="submit-section">
												<button type="submit" class="btn btn-primary submit-btn">Add Review</button>
											</div>
										</form>
										<!-- /Write Review Form -->

									</div>
									<!-- /Write Review -->

								</div>
								<!-- /Reviews Content -->


						</div>
					</div>
					<!-- /Doctor Details Tab -->

				</div>
                @endauth
			</div>
			<!-- /Page Content -->
@endsection

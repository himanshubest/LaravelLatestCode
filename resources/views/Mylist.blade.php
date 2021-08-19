@extends('ViewProfile1')

@section('hi')
<div class="col-12 col-lg-8">
	<div class="row justify-content-center">
		<div class="col-12 col-sm-10 col-md-6 col-lg-12">
			<a href="{{url('/COHS')}}" class="btn btn-outline-secondary btn-block mb-4 py-4">
				<span class="mr-2">
					<span class="fas fa-plus">
					
				</span></span>Submit New Item</a>


	@foreach($getdata as $item)	


	<div class="card border-light mb-4">
		<div class="row no-gutters align-items-center">
			<div class="col-12 col-lg-6 col-xl-4">
				<a href="../single-space.html">
					<img src="{{$item->Main_Home_Image}}" alt="private office" class="card-img p-2 rounded-xl"></a></div><div class="col-12 col-lg-6 col-xl-8"><div class="card-body py-lg-0"><div class="d-flex no-gutters align-items-center mb-3">
						<div class="col text-left">

						<ul class="list-group mb-0">
							<li class="list-group-item small p-0"><span class="fas fa-medal text-tertiary mr-2"></span>Promoted until: 12 June</li>
						</ul>
						<div class="modal fade bd-example-modal-lg" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-lg" role="document">


												</div>
											</div>
										</div>
										<div class="col text-right">
											<div class="btn-group">
												<button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<span class="icon icon-sm">
														<span class="fas fa-ellipsis-h icon-secondary"></span> 
													</span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<div class="dropdown-menu">
													<a class="dropdown-item" href="{{url('/HUR/'.$item->ID)}}">
														<span class="fas fa-edit mr-2">
															
														</span> Registration </a> 
														<a class="dropdown-item text-danger" href="#">
															<span class="fa fa-trash mr-2" aria-hidden="true">
																
															</span> Disable
														</a> 
														</div>
													</div>
												</div>
											</div>
											<a href="../single-space.html"><h2 class="h5">{{$item->Street_Address}}</h2>
											</a>
											<div class="col d-flex pl-0">
												<span class="text-success font-small mr-3">
													<span class="fas fa-check-circle mr-2"></span>{{$item->Listing_Status}}</span> 
													<span class="text-muted font-small mr-3">
														<span class="fas fa-eye mr-2">Baths</span>
														{{$item->Bath}}
													</span>
													 <span class="text-muted font-small mr-3">
													 	<span class="far fa-heart mr-2">Bed</span>
													{{$item->Bed}}
													</span> 
													<a class="font-small text-dark" href="messages.html">
														<span class="fas fa-envelope mr-2">Listing Price $</span>{{$item->Listing_Price}}
													</a>
													</div>
												</div>
											</div>
										</div>
   </div>
	

	@endforeach		

	


								


													<div class="row">
														<div class="col">
															<nav aria-label="Page navigation example">
																<ul class="pagination justify-content-center mt-5">
																	<li class="page-item">
																		<a class="page-link" href="#">Previous</a>
																	</li>
																	<li class="page-item active">
																		<a class="page-link" href="#">1</a></li><li class="page-item"><a class="page-link" href="#">2</a></li><li class="page-item"><a class="page-link" href="#">3</a></li><li class="page-item"><a class="page-link" href="#">4</a></li><li class="page-item"><a class="page-link" href="#">5</a></li><li class="page-item"><a class="page-link" href="#">Next</a></li></ul></nav></div>

													</div>
		</div>
	</div>
</div>


															
@endsection
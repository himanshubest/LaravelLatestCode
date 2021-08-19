
@extends('ViewProfile1')

@section('hi')
@foreach($getdata as $item)	
<div class="col-12 col-lg-8">

	<form action="{{url('/HURS')}}" method="post" class="card border-light p-4 mb-4">

	<h1 class="h5 mb-4">User Registration</h1>
	<div class="row">
	   <div class="col-12 col-lg-6">
		 <label for="firstname">First Name</label> 
		 <input type="text" placeholder="First Name" class="form-control" id="First_Name" name="First_Name" required="">

	  </div>
	  <div class="col-12 col-lg-6">
		<label for="firstname">Last Name</label> 
		<input type="text" placeholder="First Name" class="form-control" id="Last_Name" name="Last_Name" required="">

	  </div>
    </div>
    <div class="row">
	   <div class="col-12 col-lg-6">
		 <label for="firstname">Email Id</label> 
		 <input type="email" placeholder="Email Id" name="Email_Id" class="form-control" id="Email_Id" required="">

	  </div>
	  <div class="col-12 col-lg-6">
		<label for="firstname">Contact No.</label> 
		<input type="number" placeholder="Contact No." class="form-control" id="Contact_no" name="Contact_no" required="">

	  </div>
    </div>
	
	<div class="form-group">
		<label for="location">Address</label> 
		<input type="text" value="{{$item->Street_Address}},{{$item->City}},{{$item->	State}},{{$item->Zip}},{{$item->County}}" class="form-control" id="Address" name="Address">
	</div>

	<div class="form-group">
		<label for="location">Home ID</label> 
		<input type="text" value="{{$item->ID}}" class="form-control" id="HomeID" name="HomeID" readonly="" >
	</div>

	<div class="row">
		<div class="col-12 col-lg-6">
			<div class="form-group">
				<label for="term">Minimum term</label> 
				<select class="custom-select" id="Min_term" name="Min_term">
					<option value="day">day</option>
					<option value="month">month</option>
					<option value="year" selected="selected">year</option>
				</select>
			</div>
		</div>
		<div class="col-12 col-lg-6">
			<div class="form-group">
				<label for="term_amount">Amount</label> 
				<input type="number" placeholder="1" class="form-control text-gray" id="Ammount" name="Ammount" required="">
			</div>
		</div>
	</div>
	<div class="form-group focused">
		<label for="description">Description</label> <textarea rows="10" class="form-control text-gray" id="Description" name="Description">
                                </textarea>

    </div>




                               <div class="row"><div class="col"><button class="btn btn-primary btn-dark mt-2 animate-up-2 text-right" type="submit">Update</button></div></div>
                           </form></div>
@endforeach	
@endsection
@extends('ViewProfile')

@section('hi')
<div class="col-12 col-lg-12">
	<div class="row">
		<div class="col-lg-12">
			<div class="card card-body bg-white border-light mb-4">
				<h2 class="h5 mb-4">Add Listing Landing Page</h2>
				<hr/>
			<div id="image_div">
              <!--  <img src="https://listing-images.homejunction.com/onekey/3338167/photo_1.jpg" class="rounded float-left" alt="..." style="width: 300px;height: 200px;">-->
            </div>
				 <form action="{{url('/ALSS')}}" method="post">
					<h4>Search Property</h4>
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
								<label for="first_name">MLS ID</label> 
								<input class="form-control" id="MLS_ID_SE" name="MLS_ID_SE" type="text" placeholder="Search MLS ID"></div>
						</div>
						<div class="col-md-3 ">
							<div class="form-group">
								<input type="button" name="Search" id="Search" class="btn btn-primary" value="Search" style="margin-top:30px" onclick="seachdata()">
						</div>
							
					   </div>
					</div>
					<hr/>

					

					<div class="row">

						<div class="col-md-12 mb-3">
							<div class="form-group">
							<label for="gender">Listing Status</label> 
									<select class="custom-select" id="Listing_Status" name="Listing_Status">
										<option disabled="disabled" selected="selected">Select option</option>
										<option value="Active">Active</option>

										<option value="Inactive">Inactive</option>
									</select>
								</div>
						</div>

					</div>
					<hr/>

                     <div class="row">

						<div class="col-md-12 mb-3">
							<div class="form-group">
							<label for="gender">Street Address</label> 
									
									<input type="text" class="form-control" id="Street_Address" name="Street_Address" placeholder="Street Address">
								</div>
						</div>

					</div>
					<div class="row">
						<div class="col-md-3 mb-3">
							<div class="form-group">
								<label for="first_name">City</label> 
								 <input type="text" class="form-control" id="City" name="City" placeholder="City">
								</div>
							</div>
							<div class="col-md-3 mb-3">
								<div class="form-group">
									<label for="last_name">State</label> 
									<input type="text" class="form-control" id="State" name="State" placeholder="State">
								</div>
							</div>
							<div class="col-md-3 mb-3">
								<div class="form-group">
									<label for="last_name">Zip</label> 
									 <input type="text" class="form-control" id="Zip" name="Zip" placeholder="Zip">
								</div>
							</div>
							<div class="col-md-3 mb-3">
								<div class="form-group">
									<label for="last_name">County</label> 
									<input type="text" class="form-control" id="County" name="County" placeholder="County">
								</div>
							</div>
						</div>

						<h3>Listing Information</h3>
                                    <hr/>
                                    <div class="form-row">
                                         <div class="form-group col-md-3">
                                            <label for="inputAddress">Listing Price</label>
                                            <input type="text" class="form-control" id="Listing_Price" name="Listing_Price" placeholder="Listing Price">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputAddress2">Property Taxes(Yearly)</label>
                                            <input type="text" class="form-control" id="Property_Taxes" name="Property_Taxes" placeholder="Property Taxes">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputAddress2">HOA Dues</label>
                                            <input type="text" class="form-control" id="HOA" name="HOA" placeholder="HOA Dues">
                                        </div>
                                         <div class="form-group col-md-3">
                                            <label for="inputAddress2">Year Built</label>
                                            <input type="text" class="form-control" id="Year_Built" name="Year_Built" placeholder="Year Built">
                                        </div>
                                    </div>


                                    <div class="form-row">
                                         <div class="form-group col-md-2">
                                            <label for="inputAddress">Beds</label>
                                            <input type="text" class="form-control" id="Bed" name="Bed" placeholder="Beds">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputAddress2">Baths</label>
                                            <input type="text" class="form-control" id="Bath" name="Bath" placeholder="Baths">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputAddress2">Square Feet</label>
                                            <input type="text" class="form-control" id="Square_Feet" name="Square_Feet" placeholder="Square Feet">
                                        </div>
                                         <div class="form-group col-md-2">
                                            <label for="inputAddress2">Stories</label>
                                            <input type="text" class="form-control" id="Stories" name="Stories" placeholder="Year Stories">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputAddress2">Number Of Units</label>
                                            <input type="text" class="form-control" id="Units" name="Units" placeholder="Number Of Units">
                                        </div>
                                         <div class="form-group col-md-2">
                                            <label for="inputAddress2">Lot Size(sqft)</label>
                                            <input type="text" class="form-control" id="Lot_Size" name="Lot_Size" placeholder="Lot_Size">
                                        </div>
                                    </div>
                                     

                                     <div class="form-row">
                                         <div class="form-group col-md-4">
                                            <label for="inputAddress">Property Type(SFR,Multi)</label>
                                            <input type="text" class="form-control" id="Property_Type" name="Property_Type" placeholder="">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputAddress2">Property Style</label>
                                            <input type="text" class="form-control" id="Property_Style" name="Property_Style" placeholder="">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputAddress2">MLS ID</label>
                                            <input type="text" class="form-control" id="MLD_ID" name="MLD_ID" placeholder="">
                                        </div>
                                         
                                    </div>

                                    <div class="form-row">
                                         <div class="form-group col-md-12">
                                            <label for="inputAddress">Listing ID</label>
                                            <input type="text" class="form-control" id="Listing_ID" name="Listing_ID" placeholder="">
                                        </div>
                                        
                                         <div class="form-group col-md-12">
                                            <label for="inputAddress">Main Home Image</label>
                                            <input type="text" class="form-control" id="Main_Home_Image" name="Main_Home_Image" placeholder="">
                                        </div>
                                         <div class="form-group col-md-12">
                                            <label for="inputAddress">UserID</label>
                                            <input type="text" class="form-control" id="UserID" name="UserID" readonly="" value="{{session('ID')}}" placeholder="">
                                        </div>
                                         
                                    </div>

                                    <h3>Section</h3>
                                    <hr/>
                                    <div class="form-row">
                                         <div class="form-group col-md-12">
                                            <label for="inputAddress">Property Headline</label>
                                            <input type="text" class="form-control" id="Property_Headline" name="Property_Headline" placeholder="">
                                        </div>
                                        
                                         <div class="form-group col-md-12">
                                            <label for="inputAddress">Short Property Descripation</label>
                                            <textarea class="form-control" placeholder="Short Property Descripation" rows="3" id="Short_Descripation" name="Short_Descripation"></textarea>
                                        </div>

                                         <div class="form-group col-md-12">
                                            <label for="inputAddress"> Property Descripation</label>
                                            <textarea class="form-control" placeholder="Property Descripation" rows="3" id="Property_Descripation" name="Property_Descripation"></textarea>
                                        </div>
                                         
                                    </div>
										<div class="mt-3">
											<button type="submit" class="btn btn-primary">Next</button></div>
									</form></div>
								</div></div>

							</div>

<script type="text/javascript">
	
function seachdata()
{
	//alert("hello");
	$('#image_div').empty();
	var  msid = $("#MLS_ID_SE").val();
	var urldata = "https://users.kineticconversions.com/SPLP/Get-SPLP-Result.php/?mlsID="+msid;
	
	$.ajax({
                url: "{{url('https://users.kineticconversions.com/SPLP/Get-SPLP-Result.php')}}",
                
                 method: 'get',
                 data:{mlsID:$("#MLS_ID_SE").val()},
                 dataType: 'json',
                
                 success: function (data) {
                 	//alert(data.success);
                 	//console.log(data.result.listings[0].market);Stories
                 	//console.log(data.result.listings[0].address.deliveryLine);
                 	//console.log(data.result.listings[0].xf_listprice);
                 	console.log(data.result.listings[0].images[0]);

                 	if(data.success==true)
                 	{
                       //alert(data.success);
                       $('#image_div').append(' <img src="'+data.result.listings[0].images[0]+'" class="rounded float-left" alt="..." style="width: 300px;height: 200px;">');
                       $("#Listing_Status").val('Active');
                        $("#Street_Address").val(data.result.listings[0].address.deliveryLine);
	                    $("#City").val(data.result.listings[0].address.city);
	                    $("#State").val(data.result.listings[0].address.state);
	                    $("#Zip").val(data.result.listings[0].address.zip);
	                     $("#County").val(data.result.listings[0].xf_country);
	                    $("#Listing_Price").val(data.result.listings[0].xf_listprice);
	                    $("#Property_Taxes").val(data.result.listings[0].xf_taxannualamount);
	                    $("#Year_Built").val(data.result.listings[0].xf_yearbuiltsource);
	                    $("#Bed").val(data.result.listings[0].beds);
	                    $("#Bath").val(data.result.listings[0].baths.total);
	                    $("#Square_Feet").val(data.result.listings[0].xf_squarefootage);
	                    //$("#Stories").val(data.result.listings[0].xf_squarefootage);
	                     $("#Lot_Size").val(data.result.listings[0].xf_lotsizesquarefeet);
	                     $("#Property_Type").val(data.result.listings[0].xf_propertytype);
	                     $("#Property_Style").val(data.result.listings[0].xf_propertysubtype);
	                     $("#MLD_ID").val(data.result.listings[0].id);
	                     $("#Listing_ID").val(data.result.listings[0].xf_listingid);
	                     $("#Main_Home_Image").val(data.result.listings[0].images[0]);
	                     $("#Short_Descripation").val(data.result.listings[0].xf_publicremarks);
	                      $("#Property_Descripation").val(data.result.listings[0].xf_syndicationremarks);
                 	}
                 	else
                 	{
                       alert("This is wrong MSL ID.");
                 	}
                 	
                },
            })
}

</script>							
@endsection
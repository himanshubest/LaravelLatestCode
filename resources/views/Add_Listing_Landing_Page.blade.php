@extends('MasterPage')

@section('content')


    <div class="card" style="margin-top:10px;">
                                <div class="card-header">
                                    <h4 class="card-title">Add Listing Landing Page</h4>
                                    
                                </div>
                                <hr>
                                <div class="card-body">
                                    <form action="{{url('/ALSS')}}" method="post">

                                           <h4>Search Property</h4>
                                    
                                       
                                            <hr>
                                     <div class="form-row">
                                         <div class="form-group col-md-8">
                                            <label for="inputAddress">MLS ID</label>
                                            <input type="text" class="form-control" id="MLS_ID_SE" name="MLS_ID_SE" placeholder="Search MLS ID">
                                        </div>
                                        
                                         <div class="form-group col-md-4">
                                          <input type="button" name="Search" id="Search" class="btn btn-primary" value="Search" style="margin-top:30px">
                                        </div>
                                         
                                    </div>
                                       
                                                   <h4 >Property Info</h4>
                                    
                                       
                                            <hr>
                                        <div class="form-row">
                                            
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4">Listing Status</label>
                                                
                                                <select id="Listing_Status" class="form-control" name="Listing_Status">
                                                        <option selected="">Listing Status</option>
                                                        <option value="0">Active</option>
                                                        <option value="1">Inactive</option>

                                                    </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputPassword4">Street Address</label>
                                                <input type="text" class="form-control" id="Street_Address" name="Street_Address" placeholder="Street Address">
                                            </div>
                                        </div>
                                    <div class="form-row">

                                        <div class="form-group col-md-3">
                                            <label for="inputAddress">City</label>
                                            <input type="text" class="form-control" id="City" name="City" placeholder="City">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputAddress2">State</label>
                                            <input type="text" class="form-control" id="State" name="State" placeholder="State">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputAddress2">Zip</label>
                                            <input type="text" class="form-control" id="Zip" name="Zip" placeholder="Zip">
                                        </div>
                                         <div class="form-group col-md-3">
                                            <label for="inputAddress2">County</label>
                                            <input type="text" class="form-control" id="County" name="County" placeholder="County">
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
  
                                        
                                        <button type="submit" class="btn btn-primary">Next</button>
                                    </form>
                                </div>
                            </div>


@endsection
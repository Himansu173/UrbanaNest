<?php
    include_once "navbar.php";
?>
<div class="container mt-5">
    <div class="bg-warning p-1 mb-3">
        <h2 class="text-center">List Your Property for Sale/Rent</h2>
    </div>
    <form action="propertyRegister.php" method="post" enctype="multipart/form-data">
        <div class="row mb-3 g-2 shadow-sm p-2 rounded">
            <h5 class="mt-4 text-warning">Listing Details</h5>
            <hr class="">
            <div class="col-md-4">
                <label for="" class="fw-semibold form-label" style="font-size: 0.9rem;">Listing Type</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="listingType" id="rent"  class="btn-check" value="Rent">
                        <label for="rent" class="btn btn-outline-warning">Rent</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="listingType" id="sale"  class="btn-check" value="Sale">
                        <label for="sale" class="btn btn-outline-warning">Sale</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="listingType" id="pg"  class="btn-check" value="PG">
                        <label for="pg" class="btn btn-outline-warning">PG</label>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label fw-semibold" style="font-size: 0.9rem;">Property Type</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="propertyType" id="residensial"  class="btn-check" value="Residential">
                        <label for="residensial" class="btn btn-outline-warning">Residensial</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="propertyType" id="commercial"  class="btn-check" value="Commercial">
                        <label for="commercial" class="btn btn-outline-warning">Commercial</label>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label fw-semibold" style="font-size: 0.9rem;">Building Type</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="buildingType" id="house"  class="btn-check" value="house">
                        <label for="house" class="btn btn-outline-warning">House</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="buildingType" id="apartment"  class="btn-check" value="apartment">
                        <label for="apartment" class="btn btn-outline-warning">Apartment</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="buildingType" id="OfficeSpace"  class="btn-check" value="office">
                        <label for="OfficeSpace" class="btn btn-outline-warning">Office Space</label>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="" class="fw-semibold form-label" style="font-size: 0.9rem;">Listed By</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="listedBy" id="owner"  class="btn-check" value="Owner">
                        <label for="owner" class="btn btn-outline-warning">Owner</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="listedBy" id="builder"  class="btn-check" value="Builder">
                        <label for="builder" class="btn btn-outline-warning">Builder</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="listedBy" id="agent"  class="btn-check" value="Agent">
                        <label for="agent" class="btn btn-outline-warning">Agent</label>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="houseType" class="form-label fw-semibold" style="font-size: 0.9rem;">House Type</label>
                <select class="form-select border-warning" id="houseType">
                    <option selected disabled>Choose House Type</option>
                    <option value="1">1 BHK</option>
                    <option value="2">2 BHK</option>
                    <option value="3">3 BHK</option>
                    <option value="4">4 BHK</option>
                    <option value="5">5 BHK</option>
                </select>
            </div>
        </div>
        <div class="row mb-3 g-2 shadow-sm p-2 rounded">
        <h5 class="mt-4 text-warning">Location Information</h5>
        <hr class="">
            <div class="col-md-4">
                <label for="state" class="fw-semibold form-label" style="font-size: 0.9rem;">State</label>
                <input type="text" name="state" id="state"  class="form-control border-warning">
            </div>
            <div class="col-md-4">
                <label for="city" class="fw-semibold form-label" style="font-size: 0.9rem;">City</label>
                <input type="text" name="city" id="city"  class="form-control border-warning">
            </div>
            <div class="col-md-4">
                <label for="locality" class="fw-semibold form-label" style="font-size: 0.9rem;">Locality</label>
                <input type="text" name="locality" id="locality"  class="form-control border-warning">
            </div>
            <div class="col-md-4">
                <label for="pinCode" class="fw-semibold form-label" style="font-size: 0.9rem;">Pin Code</label>
                <input type="zip" name="pinCode" id="pinCode"  class="form-control border-warning">
            </div>
        </div>
<!-- Property Specification-->
        <div class="row mb-3 g-2 shadow-sm p-2 rounded">
            <h5 class="mt-4 text-warning">Property Specifications</h5>
            <hr class="">
            <div class="col-md-4">
                <label for="area" class="fw-semibold form-label" style="font-size: 0.9rem;">Area</label>
                <input type="text" name="area" id="area"  class="form-control border-warning">
            </div>
            <div class="col-md-4">
                <label for="carpetArea" class="fw-semibold form-label" style="font-size: 0.9rem;">Carpet Area</label>
                <input type="text" name="carpetArea" id="carpetArea"  class="form-control border-warning">
            </div>
            <div class="col-md-4">
                <label for="age" class="fw-semibold form-label" style="font-size: 0.9rem;">Age of Property</label>
                <input type="text" name="age" id="age"  class="form-control border-warning">
            </div>
            <div class="col-md-4">
                <label for="floorNumber" class="fw-semibold form-label" style="font-size: 0.9rem;">Floor Number</label>
                <input type="text" name="floorNumber" id="floorNumber"  class="form-control border-warning">
            </div>
            <div class="col-md-4 ">
                <label for="" class="fw-semibold form-label" style="font-size: 0.9rem;">Furnishing Status</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="furnish" id="fully"  class="btn-check" value="Fully">
                        <label for="fully" class="btn btn-outline-warning">Fully</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="furnish" id="semi"  class="btn-check" value="semi">
                        <label for="semi" class="btn btn-outline-warning">Semi</label>
                    </div> 
                    <div class="form-check form-check-inline">
                        <input type="radio" name="furnish" id="unFurnished"  class="btn-check" value="Unfurnished">
                        <label for="unFurnished" class="btn btn-outline-warning">Unfurnished</label> 
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <label for="" class="fw-semibold form-label" style="font-size: 0.9rem;">Balcony</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="balcony" id="individual"  class="btn-check" value="individual">
                        <label for="individual" class="btn btn-outline-warning">Individual</label>  
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="balcony" id="common"  class="btn-check" value="common">
                        <label for="common" class="btn btn-outline-warning">Common</label> 
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="balcony" id="balconyNa"  class="btn-check" value="NA">
                        <label for="balconyNa" class="btn btn-outline-warning">NA</label>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="" class="fw-semibold form-label" style="font-size: 0.9rem;">Power Backup</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="power" id="available"  class="btn-check" value="available">
                        <label for="available" class="btn btn-outline-warning">Available</label>
                    </div> 
                    <div class="form-check form-check-inline">
                        <input type="radio" name="power" id="powerNa"  class="btn-check" value="not available">
                        <label for="powerNa" class="btn btn-outline-warning">Not Available</label>
                    </div>    
                </div>
            </div>
            <div class="col-md-4">
                <label for="" class="fw-semibold form-label" style="font-size: 0.9rem;">Lift Availability</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="lift" id="liftYes"  class="btn-check" value="Yes">
                        <label for="liftYes" class="btn btn-outline-warning">Yes</label>
                    </div> 
                    <div class="form-check form-check-inline">
                        <input type="radio" name="lift" id="liftNo"  class="btn-check" value="No">
                        <label for="liftNo" class="btn btn-outline-warning">No</label> 
                    </div>     
                </div>
            </div>
            <div class="col-md-4">
                <label for="" class="fw-semibold form-label" style="font-size: 0.9rem;">Parking</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="lift" id="parkingAvailable"  class="btn-check" value="available">
                        <label for="parkingAvailable" class="btn btn-outline-warning">Available</label>
                    </div> 
                    <div class="form-check form-check-inline">
                        <input type="radio" name="lift" id="parkingNa"  class="btn-check" value="not available">
                        <label for="parkingNa" class="btn btn-outline-warning">Not Available</label>
                    </div>    
                </div>
            </div>
        </div>
        <div class="row mb-3 g-2 shadow-sm p-2 rounded">
            <h5 class="mt-4 text-warning">Financial Details</h5>
            <hr class="">
            <div class="col-md-4">
                <label for="rent" class="fw-semibold form-label" style="font-size: 0.9rem;">Rent</label>
                <input type="text" name="rent" id="rent"  class="form-control border-warning">
            </div>
            
            <div class="col-md-4">
                <label for="securityDeposite" class="fw-semibold form-label" style="font-size: 0.9rem;">Security Deposite:</label>
                <input type="text" name="securityDeposite" id="securityDeposite"  class="form-control border-warning">
            </div>
            <div class="col-md-4">
                <label for="" class="fw-semibold form-label" style="font-size: 0.9rem;">Negotiable</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="negotiable" id="negotiableYes"  class="btn-check" value="Yes">
                        <label for="negotiableYes" class="btn btn-outline-warning">Yes</label>
                    </div>
                    <div class="form-check form-check-inline"> 
                        <input type="radio" name="negotiable" id="negotiableNo"  class="btn-check" value="No">
                        <label for="negotiableNo" class="btn btn-outline-warning">No</label> 
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="leasePeriod" class="fw-semibold form-label" style="font-size: 0.9rem;">Lease Period</label>
                <input type="text" name="leasePeriod" id="leasePeriod"  class="form-control border-warning">
            </div>
            <div class="col-md-4">
                <label for="maintenanceCharges" class="fw-semibold form-label" style="font-size: 0.9rem;">Maintenance Charges</label>
                <input type="text" name="maintenanceCharges" id="maintenanceCharges"  class="form-control border-warning">
            </div>
        </div>
        <div class="row mb-3 g-2 shadow-sm p-2 rounded">
        <h5 class="mt-4 text-warning">Availability</h5>
        <hr class="">
            <div class="col-md-4">
                <label for="availabilityDate" class="fw-semibold form-label" style="font-size: 0.9rem;">Availability Date</label>
                <input type="date" name="availabilityDate" id="availabilityDate"  class="form-control border-warning">
            </div>
            
        </div>
        
        <div class="row mb-3 g-2 shadow-sm p-2 rounded">
        <h5 class="mt-4 text-warning">Additional Details</h5>
        <hr class="">
            <div class="col-md-4">
                <label for="photos" class="form-label fw-semibold" style="font-size: 0.9rem;">Upload Photos</label>
                <input type="file" class="form-control border-warning" id="photos" multiple>
            </div>
            <div class="col-md-8">
                <label for="description" class="form-label fw-semibold" style="font-size: 0.9rem;">Additional Information</label>
                <textarea class="form-control border-warning" id="description" rows="4" placeholder="Write any additional information here"></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12 text-end">
                <input type="submit" value="Post now" name="submit" class="btn btn-outline-warning">
            </div>
        </div>
        </div>
    </form>
</div>
<?php

if(isset($_POST['submit'])){
    print_r ($_POST);
}
?>

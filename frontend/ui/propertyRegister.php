<?php
    include_once "navbar.php";
?>
<div class="container mt-5">
    <div class="bg-warning p-1 mb-3">
        <h2 class="text-center">List Your Property for Sale/Rent</h2>
    </div>
    <form action="../../database/add_property.php" method="post" enctype="multipart/form-data" id="formProperty">
        <p class="text-center text-danger">(*) fields indicates mandotary field.</p>
        <div class="row mb-3 g-2 shadow-sm p-2 rounded">
            <h5 class="mt-4 text-warning">Listing Details</h5>
            <hr class="">
            <div class="col-md-4">
                <label for="" class="fw-semibold form-label" style="font-size: 0.9rem;">Listing Type <span class="text-danger">*</span></label>
                <div>
                    <div class="form-check form-check-inline">
                        <input  type="radio" name="listingType" id="rentListing"  class="btn-check" value="Rent" required>
                        <label for="rentListing" class="btn btn-outline-warning">Rent</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input  type="radio" name="listingType" id="sale"  class="btn-check" value="Sale" required>
                        <label for="sale" class="btn btn-outline-warning">Sale</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input  type="radio" name="listingType" id="pg"  class="btn-check" value="PG" required>
                        <label for="pg" class="btn btn-outline-warning">PG</label>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label fw-semibold" style="font-size: 0.9rem;">Property Type <span class="text-danger">*</span></label>
                <div>
                    <div class="form-check form-check-inline">
                        <input  type="radio" name="propertyType" id="residensial"  class="btn-check" value="Residential" required>
                        <label for="residensial" class="btn btn-outline-warning">Residensial</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input  type="radio" name="propertyType" id="commercial"  class="btn-check" value="Commercial" required>
                        <label for="commercial" class="btn btn-outline-warning">Commercial</label>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label fw-semibold" style="font-size: 0.9rem;">Building Type <span class="text-danger">*</span></label>
                <div>
                    <div class="form-check form-check-inline">
                        <input  type="radio" name="buildingType" id="house"  class="btn-check" value="house" required>
                        <label for="house" class="btn btn-outline-warning">House</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input  type="radio" name="buildingType" id="apartment"  class="btn-check" value="apartment" required>
                        <label for="apartment" class="btn btn-outline-warning">Apartment</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input  type="radio" name="buildingType" id="OfficeSpace"  class="btn-check" value="office" required>
                        <label for="OfficeSpace" class="btn btn-outline-warning">Office Space</label>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="" class="fw-semibold form-label" style="font-size: 0.9rem;">Listed By <span class="text-danger">*</span></label>
                <div>
                    <div class="form-check form-check-inline">
                        <input  type="radio" name="listedBy" id="owner"  class="btn-check" value="Owner" required>
                        <label for="owner" class="btn btn-outline-warning">Owner</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input  type="radio" name="listedBy" id="builder"  class="btn-check" value="Builder" required>
                        <label for="builder" class="btn btn-outline-warning">Builder</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input  type="radio" name="listedBy" id="agent"  class="btn-check" value="Agent" required>
                        <label for="agent" class="btn btn-outline-warning">Agent</label>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="houseType" class="form-label fw-semibold" style="font-size: 0.9rem;">House Type <span class="text-danger">*</span></label>
                <select class="form-select border-warning" id="houseType" name="houseType" required>
                    <option selected disabled>Choose House Type</option>
                    <option value="1 BHK">1 BHK</option>
                    <option value="2 BHK">2 BHK</option>
                    <option value="3 BHK">3 BHK</option>
                    <option value="4 BHK">4 BHK</option>
                    <option value="5 BHK">5 BHK</option>
                    <option value="1 Hall">1 Hall</option>
                    <option value="villa">Villa</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
        <div class="row mb-3 g-2 shadow-sm p-2 rounded">
        <h5 class="mt-4 text-warning">Location Information</h5>
        <hr class="">
            <div class="col-md-4">
                <label for="state" class="fw-semibold form-label" style="font-size: 0.9rem;">State <span class="text-danger">*</span></label>
                <input  type="text" name="stateProperty" id="stateProperty"  class="form-control border-warning" required>
            </div>
            <div class="col-md-4">
                <label for="city" class="fw-semibold form-label" style="font-size: 0.9rem;">City <span class="text-danger">*</span></label>
                <input  type="text" name="cityProperty" id="cityProperty"  class="form-control border-warning" required>
            </div>
            <div class="col-md-4">
                <label for="locality" class="fw-semibold form-label" style="font-size: 0.9rem;">Locality <span class="text-danger">*</span></label>
                <input  type="text" name="locality" id="locality"  class="form-control border-warning" required>
            </div>
            <div class="col-md-4">
                <label for="pinCode" class="fw-semibold form-label" style="font-size: 0.9rem;">Pin Code <span class="text-danger">*</span></label>
                <input  type="zip" name="pinCode" id="pinCode"  class="form-control border-warning" required>
                <label for="" id="errorPincode" class="text-danger"></label>
            </div>
        </div>
<!-- Property Specification-->
        <div class="row mb-3 g-2 shadow-sm p-2 rounded">
            <h5 class="mt-4 text-warning">Property Specifications</h5>
            <hr class="">
            <div class="col-md-4">
                <label for="area" class="fw-semibold form-label" style="font-size: 0.9rem;">Area <span class="text-danger">*</span></label>
                <input  type="text" name="area" id="area"  class="form-control border-warning" required>
            </div>
            <div class="col-md-4">
                <label for="carpetArea" class="fw-semibold form-label" style="font-size: 0.9rem;">Carpet Area <span class="text-danger">*</span></label>
                <input  type="text" name="carpetArea" id="carpetArea"  class="form-control border-warning" required>
            </div>
            <div class="col-md-4">
                <label for="age" class="fw-semibold form-label" style="font-size: 0.9rem;">Age of Property</label>
                <input  type="text" name="age" id="age"  class="form-control border-warning">
            </div>
            <div class="col-md-4">
                <label for="floorNumber" class="fw-semibold form-label" style="font-size: 0.9rem;">Floor Number</label>
                <input  type="text" name="floorNumber" id="floorNumber"  class="form-control border-warning" >
            </div>
            <div class="col-md-4 ">
                <label for="" class="fw-semibold form-label" style="font-size: 0.9rem;">Furnishing Status <span class="text-danger">*</span></label>
                <div>
                    <div class="form-check form-check-inline">
                        <input  type="radio" name="furnish" id="fully"  class="btn-check" value="Fully" required>
                        <label for="fully" class="btn btn-outline-warning">Fully</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input  type="radio" name="furnish" id="semi"  class="btn-check" value="semi" required>
                        <label for="semi" class="btn btn-outline-warning">Semi</label>
                    </div> 
                    <div class="form-check form-check-inline">
                        <input  type="radio" name="furnish" id="unFurnished"  class="btn-check" value="Unfurnished" required>
                        <label for="unFurnished" class="btn btn-outline-warning">Unfurnished</label> 
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <label for="" class="fw-semibold form-label" style="font-size: 0.9rem;">Balcony <span class="text-danger">*</span></label>
                <div>
                    <div class="form-check form-check-inline">
                        <input  type="radio" name="balcony" id="individual"  class="btn-check" value="individual" required>
                        <label for="individual" class="btn btn-outline-warning">Individual</label>  
                    </div>
                    <div class="form-check form-check-inline">
                        <input  type="radio" name="balcony" id="common"  class="btn-check" value="common" required>
                        <label for="common" class="btn btn-outline-warning">Common</label> 
                    </div>
                    <div class="form-check form-check-inline">
                        <input  type="radio" name="balcony" id="balconyNa"  class="btn-check" value="NA" required>
                        <label for="balconyNa" class="btn btn-outline-warning">NA</label>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="" class="fw-semibold form-label" style="font-size: 0.9rem;">Power Backup</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input  type="radio" name="power" id="available"  class="btn-check" value="available" >
                        <label for="available" class="btn btn-outline-warning">Available</label>
                    </div> 
                    <div class="form-check form-check-inline">
                        <input  type="radio" name="power" id="powerNa"  class="btn-check" value="not available" >
                        <label for="powerNa" class="btn btn-outline-warning">Not Available</label>
                    </div>    
                </div>
            </div>
            <div class="col-md-4">
                <label for="" class="fw-semibold form-label" style="font-size: 0.9rem;">Lift Availability</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input  type="radio" name="lift" id="liftYes"  class="btn-check" value="Yes">
                        <label for="liftYes" class="btn btn-outline-warning">Yes</label>
                    </div> 
                    <div class="form-check form-check-inline">
                        <input  type="radio" name="lift" id="liftNo"  class="btn-check" value="No">
                        <label for="liftNo" class="btn btn-outline-warning">No</label> 
                    </div>     
                </div>
            </div>
            <div class="col-md-4">
                <label for="" class="fw-semibold form-label" style="font-size: 0.9rem;">Parking</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input  type="radio" name="parking" id="parkingAvailable"  class="btn-check" value="available" >
                        <label for="parkingAvailable" class="btn btn-outline-warning">Available</label>
                    </div> 
                    <div class="form-check form-check-inline">
                        <input  type="radio" name="parking" id="parkingNa"  class="btn-check" value="not available" >
                        <label for="parkingNa" class="btn btn-outline-warning">Not Available</label>
                    </div>    
                </div>
            </div>
        </div>
        <div class="row mb-3 g-2 shadow-sm p-2 rounded">
            <h5 class="mt-4 text-warning">Financial Details</h5>
            <hr class="">
            <div class="col-md-4">
                <label for="rent" class="fw-semibold form-label" style="font-size: 0.9rem;">Rent <span class="text-danger">*</span></label>
                <input  type="text" name="rent" id="rent"  class="form-control border-warning" required>
                <label for="" id="errorRent" class="text-danger"></label>
            </div>
            <div class="col-md-4">
                <label for="securityDeposite" class="fw-semibold form-label" style="font-size: 0.9rem;">Security Deposite <span class="text-danger">*</span></label>
                <input  type="text" name="securityDeposite" id="securityDeposite"  class="form-control border-warning" required>
                <label for="" id="errorSecurityDeposite" class="text-danger"></label>
            </div>
            <div class="col-md-4">
                <label for="" class="fw-semibold form-label" style="font-size: 0.9rem;">Negotiable <span class="text-danger">*</span></label>
                <div>
                    <div class="form-check form-check-inline">
                        <input  type="radio" name="negotiable" id="negotiableYes"  class="btn-check" value="Yes" required>
                        <label for="negotiableYes" class="btn btn-outline-warning">Yes</label>
                    </div>
                    <div class="form-check form-check-inline"> 
                        <input  type="radio" name="negotiable" id="negotiableNo"  class="btn-check" value="No" required>
                        <label for="negotiableNo" class="btn btn-outline-warning">No</label> 
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="leasePeriod" class="fw-semibold form-label" style="font-size: 0.9rem;">Lease Period <span class="text-danger">*</span></label>
                <input  type="text" name="leasePeriod" id="leasePeriod"  class="form-control border-warning" required>
            </div>
            <div class="col-md-4">
                <label for="maintenanceCharges" class="fw-semibold form-label" style="font-size: 0.9rem;">Maintenance Charges <span class="text-danger">*</span></label>
                <input  type="text" name="maintenanceCharges" id="maintenanceCharges"  class="form-control border-warning" required>
                <label for="" id="errorMaintenanceCharges" class="text-danger"></label>
            </div>
        </div>
        <div class="row mb-3 g-2 shadow-sm p-2 rounded">
        <h5 class="mt-4 text-warning">Availability</h5>
        <hr class="">
            <div class="col-md-4">
                <label for="availabilityDate" class="fw-semibold form-label" style="font-size: 0.9rem;">Availability Date <span class="text-danger">*</span></label>
                <input  type="date" name="availabilityDate" id="availabilityDate"  class="form-control border-warning" required>
            </div>
            
        </div>
        
        <div class="row mb-3 g-2 shadow-sm p-2 rounded">
        <h5 class="mt-4 text-warning">Additional Details</h5>
        <hr class="">
            <div class="col-md-4">
                <label for="photos" class="form-label fw-semibold" style="font-size: 0.9rem;">Upload Photos</label>
                <input  type="file" class="form-control border-warning" id="photos" multiple required>
            </div>
            <div class="col-md-8">
                <label for="description" class="form-label fw-semibold" style="font-size: 0.9rem;">Additional Information</label>
                <textarea class="form-control border-warning" id="description" name="description" rows="4" placeholder="Write any additional information here"></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12 text-end">
                <input  type="submit" value="Post now" name="submit" class="btn btn-outline-warning">
            </div>
        </div>
        </div>
    </form>
</div>
<script>
    document.addEventListener("DOMContentLoaded", () => {
    console.log("form loaded");
    const form = document.querySelector("#formProperty");
    const rent = document.querySelector("#rent");
    const securityDeposite = document.querySelector("#securityDeposite");
    const maintenanceCharges = document.querySelector("#maintenanceCharges");
    const pinCode = document.querySelector("#pinCode");

    form.addEventListener("submit", (e) => {
        let isValid = true;
        document.getElementById("errorRent").innerText="";
        document.getElementById("errorSecurityDeposite").innerText="";
        document.getElementById("errorMaintenanceCharges").innerText="";
        document.getElementById("errorPincode").innerText="";
        if(!rent.value.match(/^[0-9]+$/)){
            document.getElementById("errorRent").innerText="contains only numbers";
            isValid = false;
        }
        if(!securityDeposite.value.match(/^\d+$/)){
            document.getElementById("errorSecurityDeposite").innerText="contains only numbers";
            isValid = false;
        }
        if(!maintenanceCharges.value.match(/^\d+$/)){
            document.getElementById("errorMaintenanceCharges").innerText="contains only numbers";
            isValid = false;
        }
        if(!maintenanceCharges.value.match(/^\d+$/)){
            document.getElementById("errorMaintenanceCharges").innerText="contains only numbers";
            isValid = false;
        }
        if(!pinCode.value.match(/^[1-9][0-9]{5}$/)){
            document.getElementById("errorPincode").innerText="Enter a valid Pincode";
            isValid = false;
        }
        if(!isValid){
            e.preventDefault();
        }else{
            form.submit();
        }
    });
});
</script>
<?php require_once "footer.php" ?>





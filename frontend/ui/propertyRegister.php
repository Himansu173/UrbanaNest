<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Register</title>
    <link rel="stylesheet" href="../../bootstrap/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <form action="#" method="post">
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="" class="fw-semibold form-label">Listing Type</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="listingType" id="rent"  class="form-check-input" value="Rent">
                            <label for="rent" class="form-check-label">Rent</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="listingType" id="sale"  class="form-check-input" value="Sale">
                            <label for="sale" class="form-check-label">Sale</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="listingType" id="pg"  class="form-check-input" value="PG">
                            <label for="pg" class="form-check-label">PG</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="" class="form-label fw-semibold">Property Type</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="propertyType" id="residensial"  class="form-check-input" value="Residential">
                            <label for="residensial" class="form-check-label">Residensial</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="propertyType" id="commercial"  class="form-check-input" value="Commercial">
                            <label for="commercial" class="form-check-label">Commercial</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="" class="form-label fw-semibold">Building Type</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="buildingType" id="house"  class="form-check-input" value="house">
                            <label for="house" class="form-check-label">House</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="buildingType" id="apartment"  class="form-check-input" value="apartment">
                            <label for="apartment" class="form-check-label">Apartment</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="buildingType" id="OfficeSpace"  class="form-check-input" value="office">
                            <label for="OfficeSpace" class="form-check-label">Office Space</label>
                        </div>
                    </div>
               </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="city" class="fw-semibold form-label">City</label>
                    <input type="text" name="city" id="city"  class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="locality" class="fw-semibold form-label">Locality</label>
                    <input type="text" name="locality" id="locality"  class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="area" class="fw-semibold form-label">Area</label>
                    <input type="text" name="area" id="area"  class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="carpetArea" class="fw-semibold form-label">Carpet Area</label>
                    <input type="text" name="carpetArea" id="carpetArea"  class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="rent" class="fw-semibold form-label">Rent</label>
                    <input type="text" name="rent" id="rent"  class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="" class="fw-semibold form-label">Negotiable</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="negotiable" id="yes"  class="form-check-input" value="Yes">
                            <label for="yes" class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check form-check-inline"> 
                            <input type="radio" name="negotiable" id="no"  class="form-check-input" value="No">
                            <label for="no" class="form-check-label">No</label> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4 ">
                    <label for="" class="fw-semibold form-label">Furnishing Status</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="furnish" id="fully"  class="form-check-input" value="Fully">
                            <label for="fully" class="form-check-label">Fully</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="furnish" id="semi"  class="form-check-input" value="semi">
                            <label for="semi" class="form-check-label">Semi</label>
                        </div> 
                        <div class="form-check form-check-inline">
                            <input type="radio" name="furnish" id="unFurnished"  class="form-check-input" value="Unfurnished">
                            <label for="unFurnished" class="form-check-label">Unfurnished</label> 
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="age" class="fw-semibold form-label">Age of Property</label>
                    <input type="text" name="age" id="age"  class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="securityDeposite" class="fw-semibold form-label">Security Deposite:</label>
                    <input type="text" name="securityDeposite" id="securityDeposite"  class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="" class="fw-semibold form-label">Balcony</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="balcony" id="individual"  class="form-check-input" value="individual">
                            <label for="individual" class="form-check-label">Individual</label>  
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="balcony" id="common"  class="form-check-input" value="common">
                            <label for="common" class="form-check-label">Common</label> 
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="balcony" id="na"  class="form-check-input" value="NA">
                            <label for="na" class="form-check-label">NA</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="" class="fw-semibold form-label">Power Backup</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="power" id="available"  class="form-check-input" value="available">
                            <label for="available" class="form-check-label">Available</label>
                        </div> 
                        <div class="form-check form-check-inline">
                            <input type="radio" name="power" id="na"  class="form-check-input" value="not available">
                            <label for="na" class="form-check-label">Not Available</label>
                        </div>    
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="" class="fw-semibold form-label">Lift Availability</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="lift" id="yes"  class="form-check-input" value="Yes">
                            <label for="yes" class="form-check-label">Yes</label>
                        </div> 
                        <div class="form-check form-check-inline">
                            <input type="radio" name="lift" id="no"  class="form-check-input" value="No">
                            <label for="no" class="form-check-label">No</label> 
                        </div>     
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="floorNumber" class="fw-semibold form-label">Floor Number</label>
                    <input type="text" name="floorNumber" id="floorNumber"  class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="leasePeriod" class="fw-semibold form-label">Lease Period</label>
                    <input type="text" name="leasePeriod" id="leasePeriod"  class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="maintenanceCharges" class="fw-semibold form-label">Maintenance Charges</label>
                    <input type="text" name="maintenanceCharges" id="maintenanceCharges"  class="form-control">
                </div>
            </div>
            <div class="row mb-3">
            <div class="col-md-4">
                    <label for="" class="fw-semibold form-label">Lift Availability</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="lift" id="available"  class="form-check-input" value="available">
                            <label for="available" class="form-check-label">Available</label>
                        </div> 
                        <div class="form-check form-check-inline">
                            <input type="radio" name="lift" id="na"  class="form-check-input" value="not available">
                            <label for="na" class="form-check-label">Not Available</label>
                        </div>    
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="availabilityDate" class="fw-semibold form-label">Availability Date</label>
                    <input type="date" name="availabilityDate" id="availabilityDate"  class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="houseType" class="form-label fw-semibold">House Type</label>
                    <select class="form-select" id="houseType">
                        <option selected disabled>Choose House Type</option>
                        <option value="1">1 BHK</option>
                        <option value="2">2 BHK</option>
                        <option value="3">3 BHK</option>
                        <option value="4">4 BHK</option>
                        <option value="5">5 BHK</option>
                    </select>
                </div>
            </div>
            
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="photos" class="form-label fw-semibold">Upload Photos</label>
                    <input type="file" class="form-control" id="photos" multiple>
                </div>
                <div class="col-md-8">
                    <label for="description" class="form-label fw-semibold">Additional Information</label>
                    <textarea class="form-control" id="description" rows="4" placeholder="Write any additional information here"></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12 text-end">
                    <input type="submit" value="Complete" name="submit" class="btn btn-outline-warning">
                </div>
            </div>
            </div>
        </form>
    </div>
</body>
</html>
<div class="wide">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-offset-2 col-sm-8 form-container">
                <form class="form-horizontal" role="form">
                
                    <!----search box---->
                    <div class="form-group">
                        <div class="col-sm-10">
                            <input id="address" type="text" class="form-control" placeholder="Address">
                        </div>
                        <div class="col-sm-2">
                            <button id="searchButton" type="button" class="btn btn-warning" value="Search" onclick="searchClicked()">Search</button>
                        </div>
                    </div>

                    <!----categories---->
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-1">
                            <div class="checkbox">
                                <label>
                                <input type="checkbox" id="checkBroadband"><strong>Broadband Internet</strong>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-offset-1 col-sm-3">
                            <div class="checkbox">
                                <label>
                                <input type="checkbox" id="checkSchools"><strong>School Ratings & Distances</strong>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-offset-0 col-sm-2">
                            <div class="checkbox">
                                <label>
                                <input type="checkbox" id="checkDemographics"><strong>Demographics</strong>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-offset-1  col-sm-1">
                            <div class="checkbox">
                                <label>
                                <input type="checkbox" id="checkAir"><strong>Air Quality</strong>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                       <div class="col-sm-offset-2 col-sm-1"> 
                            <div class="checkbox">
                                <label>
                                <input type="checkbox" id="checkPrice"><strong>Home Price</strong>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-offset-1 col-sm-1">
                            <div class="checkbox">
                                <label>
                                <input type="checkbox" id="checkClimate"><strong>Climate</strong>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-offset-1 col-sm-1">
                            <div class="checkbox">
                                <label>
                                <input type="checkbox" id="checkGroceries"><strong>Grocery Stores</strong>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-offset-1 col-sm-1">
                            <div class="checkbox">
                                <label>
                                <input type="checkbox" id="checkHiking"><strong>Hiking</strong>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-1">
                            <div class="checkbox">
                                <label>
                                <input type="checkbox" id="checkHospitals"><strong>Hospitals</strong>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-offset-1 col-sm-2">
                            <div class="checkbox">
                                <label>
                                <input type="checkbox" id="checkBiking"><strong>Bicycling Routes</strong>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-offset-1 col-sm-2">
                            <div class="checkbox">
                                <label>
                                <input type="checkbox" id="checkEmployment"><strong>Employment Rates</strong>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-offset-1 col-sm-1">
                            <div class="checkbox">
                                <label>
                                <input type="checkbox" id="checkHospitals"><strong>Crime Rates</strong>
                                </label>
                            </div>
                        </div>
                    </div>
                </form>     
            </div><!----end col-sm-6 form-container---->
        </div><!----end row---->
    </div><!----end container-fluid---->
</div><!----end wide---->

<!-----collapsible content (RESULTS) ----->
<div class="panel-group row" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default col-sm-6">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-map">
                <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#resultMap" aria-expanded="true" aria-controls="demo">
                Map 
                </button>
            </h4>
        </div>
        <div id="resultMap" class="collapse in">
            <div class="panel-body">
                <!----content----->
                <div class="row">
                    <!----map---->
                    <div id="map-canvas">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default col-sm-6">
        <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#resultBroadband" aria-expanded="true" aria-controls="demo">
                Broadband Details
                </button>
            </h4>
        </div>
        <div id="resultBroadband" class="collapse in">
            <div class="panel-body">
                <!----content----->
                <div id="row">
                    <div id="resultService" class="col-sm-12">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default col-sm-6">
        <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
                <button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#resultSchool" aria-expanded="true" aria-controls="demo">
                School Ratings & Distances
                </button>
            </h4>
        </div>
        <div id="resultSchool" class="collapse in">
            <div class="panel-body">
                <!----content----->
            </div>
        </div>
    </div>
    <div class="panel panel-default col-sm-6">
        <div class="panel-heading" role="tab" id="headingFour">
            <h4 class="panel-title">
                <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#resultDemographics" aria-expanded="true" aria-controls="demo">
                Demographics
                </button>
            </h4>
        </div>
        <div id="resultDemographics" class="collapse in">
            <div class="panel-body">
                <!----content----->
            </div>
        </div>
    </div>
    <div class="panel panel-default col-sm-6">
        <div class="panel-heading" role="tab" id="headingFive">
            <h4 class="panel-title">
                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#resultAir" aria-expanded="true" aria-controls="demo">
                Air Quality
                </button>
            </h4>
        </div>
        <div id="resultAir" class="collapse in">
            <div class="panel-body">
                <!----content----->
            </div>
        </div>
    </div>
    <div class="panel panel-default col-sm-6">
        <div class="panel-heading" role="tab" id="headingSix">
            <h4 class="panel-title">
                <button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#resultPrice" aria-expanded="true" aria-controls="demo">
                Home Price
                </button>
            </h4>
        </div>
        <div id="resultPrice" class="collapse in">
            <div class="panel-body">
                <!----content----->
            </div>
        </div>
    </div>
    <div class="panel panel-default col-sm-6">
        <div class="panel-heading" role="tab" id="headingSeven">
            <h4 class="panel-title">
                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#resultClimate" aria-expanded="true" aria-controls="demo">
                Climate
                </button>
            </h4>
        </div>
        <div id="resultClimate" class="collapse in">
            <div class="panel-body">
                <!----content----->
            </div>
        </div>
    </div>
    <div class="panel panel-default col-sm-6">
        <div class="panel-heading" role="tab" id="headingEight">
            <h4 class="panel-title">
                <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#resultGrocery" aria-expanded="true" aria-controls="demo">
                Grocery Stores
                </button>
            </h4>
        </div>
        <div id="resultGrocery" class="collapse in">
            <div class="panel-body">
                <!----content----->
            </div>
        </div>
    </div>
    <div class="panel panel-default col-sm-6">
        <div class="panel-heading" role="tab" id="headingNine">
            <h4 class="panel-title">
                <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#resultHiking" aria-expanded="true" aria-controls="demo">
                Hiking
                </button>
            </h4>
        </div>
        <div id="resultHiking" class="collapse in">
            <div class="panel-body">
                <!----content----->
            </div>
        </div>
    </div>
    <div class="panel panel-default col-sm-6">
        <div class="panel-heading" role="tab" id="headingTen">
            <h4 class="panel-title">
                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#resultHospitals" aria-expanded="true" aria-controls="demo">
                Hospitals
                </button>
            </h4>
        </div>
        <div id="resultHospitals" class="collapse in">
            <div class="panel-body">
                <!----content----->
            </div>
        </div>
    </div>
    <div class="panel panel-default col-sm-6">
        <div class="panel-heading" role="tab" id="headingEleven">
            <h4 class="panel-title">
                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#resultBicycle" aria-expanded="true" aria-controls="demo">
                Bicycling Routes
                </button>
            </h4>
        </div>
        <div id="resultBicycle" class="collapse in">
            <div class="panel-body">
                <!----content----->
            </div>
        </div>
    </div>
    <div class="panel panel-default col-sm-6">
        <div class="panel-heading" role="tab" id="headingTwelve">
            <h4 class="panel-title">
                <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#resultEmployment" aria-expanded="true" aria-controls="demo">
                Employment Rates
                </button>
            </h4>
        </div>
        <div id="resultEmployment" class="collapse in">
            <div class="panel-body">
                <!----content----->
            </div>
        </div>
    </div>
    <div class="panel panel-default col-sm-6">
        <div class="panel-heading" role="tab" id="headingThirteen">
            <h4 class="panel-title">
                <button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#resultCrime" aria-expanded="true" aria-controls="demo">
                Crime Rates
                </button>
            </h4>
        </div>
        <div id="resultCrime" class="collapse in">
            <div class="panel-body">
                <!----content----->
            </div>
        </div>
    </div>
</div><!-- /collapsible content -->

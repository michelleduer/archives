// declare map
var map;

// user inputted coordinates
var myLatlng;

// declare geocoder
var geocoder;

// declare address
var address;

// declare marker
var marker;

// declare checkConditions
var checkBroadband = false;
var checkSchools = false;
var checkDemographics = false;

// counters
var counterProviders = 0;
var counterService = 1;

// broadband locations variables
var stateFIPS;
var countyFIPS;
var service;
var speedChart;

/**
* clears map markers -  https://developers.google.com/maps/documentation/javascript/examples/marker-remove
*/
//TODO

/**
* autocomplete address from previous searches -- https://developers.google.com/maps/documentation/javascript/examples/places-autocomplete
*/
//TODO

/**
* checks what conditions have been checked and outputs appropriate results
*/
function checkConditions(results) {

    if (!document.getElementById('checkBroadband').checked) {
        console.log("checkBroadband equals false\n");
    }
    else {
        console.log("Broadband API Results - checked\n");
        dataBroadband(
            {county:results[0].address_components[4].long_name},
            function (error, results) {
                console.log(error, results)
            });
    }
    
    if (!document.getElementById('checkSchools').checked) {
        console.log("checkSchools equals false\n");
    }
    else {
        console.log("School Ratings & Distances - checked\n");
        dataGreatSchools(
            {state:results[0].address_components[5].short_name, 
            zip:results[0].address_components[7].short_name}, 
            function (error, results) {
                console.log(error, results)
            });
    }
    
    if (!document.getElementById('checkDemographics').checked) {
        console.log("checkDemographics equals false\n");
    }
    else {
        console.log("Demographics - checked\n");
    }
}

/**
* loads simple map -- https://developers.google.com/maps/documentation/javascript/examples/map-simple
*/
function initialize() {
    geocoder = new google.maps.Geocoder();
    myLatlng = new google.maps.LatLng(43.856129, -68.888476);
    
    var mapOptions = {
        zoom: 8,
        center: myLatlng
    };
    
    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    
    marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: 'Default Location'
    });
}

google.maps.event.addDomListener(window, 'load', initialize);


/**
* when search button is clicked
*/
function searchClicked() {
    codeAddress();
    return false;
}


/**
* geocoding client-side -- https://developers.google.com/maps/articles/geocodestrat
*/
function codeAddress() {
    var address = document.getElementById('address').value;
    geocoder.geocode({'address': address}, function(results, status) {
        
        initialize();
        
        if (status == google.maps.GeocoderStatus.OK) {
            map.setCenter(results[0].geometry.location);
            
            marker = new google.maps.Marker({
                map: map,
                position: results[0].geometry.location,
                title: address
            });
            console.log(results);  
            checkConditions(results);
        } else {
            alert('Geocode was not successful for the following reason: ' + status);
        }
    });
}

/**
* Print Broadband Locations -- retrieve provider details -- http://www.broadbandmap.gov/developer/api/provider-statistics-api-all-providers-within-a-geography
*/
function broadbandLocation(results) {
    console.log("updateBroadband DATA here"); 
    
    stateFIPS = results.stateFIPS;
    countyFIPS = results.countyFIPS;
    var geographyType = results.geographyType;
    
    $.ajax({
        dataType: 'json',
        url: '/proxy.php?url=' + encodeURIComponent('http://www.broadbandmap.gov/broadbandmap/provider/dec2013/providers/state/' + stateFIPS + 
        '/population/county/' + countyFIPS + '?format=json'),
        success: function(data) {
            console.log("success in retrieving provider data", data);
            console.log("length", data.contents.Results.allProviders.length);
            for (var i = 0; i < data.contents.Results.allProviders.length; i++)
            {
                providerDetails(
                    {providerName:data.contents.Results.allProviders[i].holdingCompanyName,
                    providerID:data.contents.Results.allProviders[i].holdingCompanyNumber}
                );
            }
        }
    });
}


/**
* Print ProviderDetails -- retrieve provider details -- http://www.broadbandmap.gov/developer/api/provider-statistics-api-all-providers-within-a-geography
*/
function providerDetails(results)
{
    var providerName = results.providerName;
    var pID = results.providerID;
    
    $.ajax({
        dataType: 'json',
        url: '/proxy.php?url=' + encodeURIComponent('http://www.broadbandmap.gov/broadbandmap/provider/dec2013/stats/state/' + stateFIPS + 
        '/population/county/' + countyFIPS + '/' + pID + '?format=json'),
        success: function(data) {
            var provider = data.contents.Results;
            serviceDetails(provider.providerStatistics, pID); 
        }
    });
    counterProviders++;
}



/**
* Print ServiceDetails -- http://www.broadbandmap.gov/developer/api/provider-statistics-api-provider-within-a-geography
*/

var mbps6 = 0;
var mbps10 = 0;
var mbps25 = 0;
var mbps50 = 0;
var mbps100 = 0;
var gbps1 = 0;

var meanDLSpeed = 0;
var greatestDLSpeed = 0;

function serviceDetails(p, pID)
{
    console.log("pID", pID);
    mbps6 = (p.wirelineDownloadSpeedGreaterThan6000k * 100).toFixed(0);
    mbps10 = (p.wirelineDownloadSpeedGreaterThan10000k * 100).toFixed(0);
    mbps25 = (p.wirelineDownloadSpeedGreaterThan25000k * 100).toFixed(0);
    mbps50 = (p.wirelineDownloadSpeedGreaterThan50000k * 100).toFixed(0);
    mbps100 = (p.wirelineDownloadSpeedGreaterThan100000k * 100).toFixed(0); 
    gbps1 = (p.wirelineDownloadSpeedGreaterThan1Gig * 100).toFixed(0);
    
    var dsl =  (p.dsl * 100).toFixed(0);
    var copper = (p.copper * 100).toFixed(0);
    var cable = (p.cable * 100).toFixed(0);
    var cableDocsis = (p.cableDocsis * 100).toFixed(0);
    var cableOther = (p.cableOther * 100).toFixed(0);
    var opticalFiber = (p.opticalFiber * 100).toFixed(0);
    meanDLSpeed = (p.mostCommonDownloadSpeedPercentage * 100).toFixed(0);
    greatestDLSpeed = (p.greatestDownloadSpeedPercentage * 100).toFixed(0);
    
    if (mbps6 == 0)
    {
        console.log("Not a broadband provider.");
    }
    else
    {
        service += '<div id="' + counterService + '"><div class="col-sm-12"><h4>' + p.holdingCompanyName + '</h4></div><div class="col-sm-12"><p>Population: ' 
        + p.population + '<br>Households: ' + p.households + '</p></div><div class="col-sm-12" id="resultChart"></div><div class="col-sm-4"><p><strong>DSL</strong>: ' + dsl + '%<br><strong>Copper</strong>: ' + copper + 
        '%<br><strong>Cable Modem</strong>: ' + cable + '<br><ul><li>Cable DOCSIS 3: ' + cableDocsis + '%<br><li>Cable - Other: ' + cableOther + 
        '%</li></ul><strong>Optical Fiber</strong>: ' + opticalFiber + '%</p></div><div class="col-sm-3"><p><strong>Download Speeds</strong>:<br>6 Mbps+ : ' + mbps6 + '%<br>10 Mbps+ : ' + mbps10 + '%<br>25 Mbps+ : ' + 
        mbps25 + '%<br>50 Mbps+ : ' + mbps50 + '%<br>100 Mbps+ : ' + mbps100 + '%<br>1 Gig+ : ' + gbps1 + 
        '%</p></div><div class="col-sm-5"><p><strong>Average Download Speed</strong>: ' + 
        p.mostCommonDownloadSpeed + '<br><strong>Average Download Speed %</strong>: ' + meanDLSpeed + 
        '%<br><strong>Greatest Download Speed</strong>: ' + p.greatestDownloadSpeed + '<br><strong>Greatest Download %</strong>: ' + 
        greatestDLSpeed + '%</p></div><div class="col-sm-12"><hr></div></div>';

        
        speedChart += '<div id="chart_' + pID + '" class="chart"></div>';

        $("#resultService").html(service);
        
        $("#resultChart").html(speedChart);
        
        drawChart('chart_' + pID);
    }
    
    counterService++;
}

/**
* Bar Chart -- https://developers.google.com/chart/interactive/docs/gallery/barchart
*/
google.setOnLoadCallback(drawChart);

function drawChart(chartID) {
    
    console.log("chart here", chartID);
    var data = google.visualization.arrayToDataTable([
      ['Speeds (Mbps)', 'Avg', { role: 'style' }],
      ['6 Mbps',  parseInt(mbps6), 'color: #e5e4e2' ],
      ['10 Mbps',  parseInt(mbps10), 'color: #b2beb5' ],
      ['25 Mbps',  parseInt(mbps25), 'color: #98777b' ],
      ['50 Mbps',  parseInt(mbps50), 'color: #79443b' ],
      ['100 Mbps',  parseInt(mbps100), 'color: #3d2b1f' ],
      ['Average',  parseInt(meanDLSpeed), 'color: #0000ff' ],
      ['Highest',  parseInt(greatestDLSpeed), 'color: #551a8b' ]
      //['1 Gbps',  parseInt(gbps1), 'color: #e5e4e2' ]    //TODO: won't accept format for gbps for some reason
    ]);

    var options = {
      title: '% of Customers Receiving Speeds',
      vAxis: {title: 'Speeds',  titleTextStyle: {color: 'black'}}
    };

    var chart = new google.visualization.BarChart(document.getElementById(chartID));

    chart.draw(data, options);
}

/**
* Broadband API -- stateFIPS, countyFIPS, geographyType -- http://www.broadbandmap.gov/developer/api/census-api-by-geography-name
*/
function dataBroadband(options, callback) {
    var county = options.county.toLowerCase();
    var re= / county$/;
    county = county.replace(re,"");
    county = county.replace(" ", "_");
    $.ajax({
        dataType: 'json',
        url: '/proxy.php?url=' + encodeURIComponent('http://www.broadbandmap.gov/broadbandmap/census/county/' + county + '?format=json'),
        success: function(data) {
            console.log("success in Broadband's data", data);
            broadbandLocation(
                {stateFIPS:data.contents.Results.county[0].stateFips,
                countyFIPS:data.contents.Results.county[0].fips,
                geographyType:data.contents.Results.county[0].geographyType}
            );
            callback(null, data);
        },
        error: function(error) {
            console.log("error in function dataBroadband", error);
            callback(error);
        }
    });
}


/**
* Great Schools API -- get data
*/
function dataGreatSchools(options, callback) {
    $.ajax({
        dataType: 'json',
        url: '/proxy.php?url=' + encodeURIComponent('http://api.greatschools.org/schools/nearby?key=/**GreatSchoolsAPIhere**/&state=' + options.state + '&zip=' + options.zip),
        success: function(data) {
            console.log("success in Great Schools data", data);
            callback(null, data);
        },
        error: function(error) {
            console.log("error in function dataGreatSchools", error);
            callback(error);
        }
    });
}


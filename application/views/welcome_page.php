<?php
/**
 *Welcome page for Gig Central
 *
 * @package GIG_CENTRAL
 * @subpackage GIG
 * @author Alexandre Daniels, <adanie04@seattlecentral.edu>, Spencer Echon, John Gilmer
 * @version 2.0 2017/05/09 
 * @link http://newmanix.com/ 
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @todo Make recent gigs display most recent on top
 * @todo Use database.php info to make mapsp request call, simpler pass, credentials not in public folder
 */
$this->load->view($this->config->item('theme') . 'header');
?>
 
<div class="row">
    <div class="box col " style="background-color: red"> </div>
</div>
<!-- the 4 clickable boxes at the top of the page -->
<div id="instruction" class="main-box-container">
    
    <a href="<?php echo base_url().'gig'; ?>">
        <div id="find-gig" class="main-box col-lg-3 col-sm-6 col-xs-12">
        <div class="inner-box">
            <h1><i class="fa fa-search"></i></h1>
            <h3>Find a gig</h3>
            <div class="bar"></div>
            <p>Are you looking for a work that you can sharpen your dev skills? Find who is looking for you.</p>
        </div></div>
    </a>
    
    <a href="<?php echo base_url().'gig/add'; ?>">
        <div id="post-gig" class="main-box col-lg-3 col-sm-6 col-xs-12">
        <div class="inner-box">
            <h1><i class="fa fa-briefcase"></i></h1>
            <h3>Post a gig</h3>
            <div class="bar"></div>
            <p>Are you hiring a developer who can help your website building? Share with us</p>
        </div></div>
    </a>
    
    <a href="<?=base_url()?>venues">
        <div id="post-venue" class="main-box col-lg-3 col-sm-6 col-xs-12">
        <div class="inner-box">
            <h1><i class="fa fa-map-marker"></i></h1>
            <h3>Find a venue</h3>
            <div class="bar"></div>
            <p>Are you a start up looking for a place to gather and work? See our list</p>
        </div></div>
    </a>
    
    <a href="<?=base_url()?>venues/add">
        <div id="post-gig" class="main-box col-lg-3 col-sm-6 col-xs-12">
        <div class="inner-box">
            <h1><i class="fa fa-share-alt"></i></h1>
            <h3>Post a venue</h3>
            <div class="bar"></div>
            <p>Do you know a good place for startups? Please share.</p>
            </div></div>
    </a>
    
</div>

<div class="clear-both"></div>

<!-- this is for the 'Recent Posts section on the page' -->
<div id="data-example" class="main-box-container">
<div class="column col-lg-8 col-sm-12 col-xs-12">
         <div class="inner-column">
             <h2>Recent Gig Posts</h2>
             <div class="post">
                <?php foreach (array_slice($gigs, -3, 3) as $gig): //maybe use something other than array_slice?>
				<h3><?php echo $gig['Name'] ?></h3>
			    <p><?php echo $gig['CompanyCity'] . ", " . $gig['State']?></p>
				<p><?php echo $gig['GigOutline'] ?></p>
				<p><?php echo anchor('gig/'.$gig['GigID'] , 'Read More');?></p>
				<?php endforeach ?>
            </div>
        </div>
    </div>
  
<!-- everything below this point is for the google map on the page -->
    <div class="column col-lg-4 col-sm-12 col-xs-12">
        <div class="inner-column">
             <h2>Startup Venues near you</h2>
            <p><a href="<?=base_url()?>venues"> View More &raquo;</a> </p>
            <div id="map" style="width: 100%; height: 300px"  onload="load()"></div>
        </div>
    </div>
</div>

<div class="clear-both"></div>

<!--begin Javascript-->
<script>

 var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 47.6145, lng: -122.3418},
          zoom: 13
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
              
            infoWindow.setPosition(pos);
            infoWindow.setContent('Your Location.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
      }
</script>

<!--api below, after "key=" is from google on 2017/05/09. Limited use.-->
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=<?php echo $api;?>&callback=initMap">
    </script>
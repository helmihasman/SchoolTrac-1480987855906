<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>School Trac </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- jVectorMap -->
    <link href="css/maps/jquery-jvectormap-2.0.3.css" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/map.css" rel="stylesheet">
    <link href="css/timeline.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/ajaxFunctions.js"></script>
    
       <!-- Datatables -->
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />
<!--      <style>
          #mapid { height:500px; }
          </style>-->
      
  </head>
  
  <?php
echo "<script type='text/javascript' async>
    window.setInterval(function(){
	getDataMap();
            }, 5000);
</script>";
?>

  <!--<body class="nav-md" onload="getDataMap()">-->
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-institution"></i> <span>School Trac</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                  <img src="images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Home </a>
                    
                  </li>
                  <li><a href="map.php"><i class="fa fa-map-marker"></i> Maps </a>
                    
                  </li>
                </ul>
              </div>
             
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <img src="images/user.png" alt="">Admin
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;">  Profile</a>
                    </li>
                    <li>
                      <a href="javascript:;">
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="#"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </li>
                  </ul>
                </li>

                

              </ul>
            </nav>
          </div>

        </div>
        <!-- /top navigation -->


        <!-- page content -->
        <div class="right_col" role="main">

          <!-- top tiles -->
           <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Students</span>
              <div class="count">514</div>
              <span class="count_bottom"><i class="green">4% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Average Attendance</span>
              <div class="count">94.5</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
              <div class="count">300</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
              <div class="count">214</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Absent</span>
              <div class="count">14</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Attendance</span>
              <div class="count">500</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
          </div>
          <!-- /top tiles -->

          <div class="row">
           

          </div>
          <br />

       

          <div class="row">
             
              
<!--              <div id="mapid"></div>-->
<div id="image-map"></div>

              
             
              
          </div>
        </div>
        
        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    
    <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    </div>
                <div class="modal-body">
                    <center>
                    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" id="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                    <h3 class="media-heading" id="student_name"></h3>
                    <h4>Class : 4 Mentari</h4>
                    </center>
                    <hr>
                    <center>
                 <h3>Student's Last Locations</h3>

<br>

<ol class="timeline">
    <li class="timeline__step">
        <input class="timeline__step-radio" id="trigger1{{identifier}}" name="trigger{{identifier}}" type="radio">

        <label class="timeline__step-label" for="trigger1{{identifier}}">
            <span class="timeline__step-content">
                05-12-2016 08:10:50</span>
        </label>
        
        <span class="timeline__step-title">
            School Gate</span>
        
        <i class="timeline__step-marker">1</i>
    </li>
    <li class="timeline__step">
        <input class="timeline__step-radio" id="trigger2{{identifier}}" name="trigger{{identifier}}" type="radio">
        
        <label class="timeline__step-label" for="trigger2{{identifier}}">
            <span class="timeline__step-content">
                05-12-2016 08:40:20</span>
        </label>
        
        <span class="timeline__step-title">
            Classroom 9</span>

        <i class="timeline__step-marker">2</i>
    </li>
    <li class="timeline__step">
        <input class="timeline__step-radio" id="trigger3{{identifier}}" name="trigger{{identifier}}" type="radio">
        
        <label class="timeline__step-label" for="trigger3{{identifier}}">
            <span class="timeline__step-content">
                05-12-2016 09:30:17</span>
        </label>
        
        <span class="timeline__step-title">
            School canteen</span>
        
        <i class="timeline__step-marker">3</i>
    </li>
    <li class="timeline__step">
        <input class="timeline__step-radio" id="trigger4{{identifier}}" name="trigger{{identifier}}" type="radio">
        
        <label class="timeline__step-label" for="trigger4{{identifier}}">
            <span class="timeline__step-content">
                05-12-2016 10:15:09</span>
        </label>
        
        <span class="timeline__step-title">
            Classroom 9</span>
        
        <i class="timeline__step-marker">4</i>
    </li>
</ol>

<br><br>


                    </center>
                </div>
                <div class="modal-footer">
                    
                </div>
            </div>
        </div>
    
  </div>
</div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
           School Trac © Copyright 2016 MDT Innovations Sdn Bhd. All Rights Reserved.
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="vendors/bernii/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="vendors/Flot/jquery.flot.js"></script>
    <script src="vendors/Flot/jquery.flot.pie.js"></script>
    <script src="vendors/Flot/jquery.flot.time.js"></script>
    <script src="vendors/Flot/jquery.flot.stack.js"></script>
    <script src="vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="js/flot/jquery.flot.orderBars.js"></script>
    <script src="js/flot/date.js"></script>
    <script src="js/flot/jquery.flot.spline.js"></script>
    <script src="js/flot/curvedLines.js"></script>
    <!-- jVectorMap -->
    <script src="js/maps/jquery-jvectormap-2.0.3.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="js/moment/moment.min.js"></script>
    <script src="js/datepicker/daterangepicker.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="js/custom.js"></script>

    
      <script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>
 
<!--    <script type="text/javascript">
            var map = L.map('mapid', {
        maxZoom: 24,
        minZoom: 1,
        crs: L.CRS.Simple
    }).setView([0, 0], 1);

    map.setMaxBounds(new L.LatLngBounds([0,500], [500,0]));

    var imageUrl = 'floorplan.jpg'
    var imageBounds = [[250,0], [0,500]];
   

    L.imageOverlay(imageUrl, imageBounds).addTo(map);
    var marker = L.marker([190, 120]).addTo(map);
    marker.bindPopup("<b>Hello world!</b><br>I am a popup.").openPopup();
          </script>-->
    <script type="text/javascript">
    //source => http://codepen.io/zachdunn/pen/VvRXdP
        // Using leaflet.js to pan and zoom a big image.
        // See also: http://kempe.net/blog/2014/06/14/leaflet-pan-zoom-image.html
        // Marker Pin: http://codepen.io/zachdunn/pen/wapEam
        // create the slippy map
        var map = L.map('image-map', {
          minZoom: 1,
          maxZoom: 4,
          center: [0, 0],
          zoom: 1,
          crs: L.CRS.Simple,
          attributionControl: false
        });

        L.control.attribution({
          prefix: false
        }).addAttribution('').addTo(map);
        // House: http://i.imgur.com/cenqiCf.jpg
        // Palace SVG (1280 x 806): https://dl.dropbox.com/s/yhrpnftsuis15z6/Topkapi_Palace_plan.svg
        // dimensions of the image
        var w = 2000 * 2,
        h = 950 * 2,
        url = 'images/icon/floor_plan.png';

        // calculate the edges of the image, in coordinate space
        var southWest = map.unproject([0, h], map.getMaxZoom() - 1);
        var northEast = map.unproject([w, 0], map.getMaxZoom() - 1);
        var bounds = new L.LatLngBounds(southWest, northEast);

        // add the image overlay, 
        // so that it covers the entire map
        L.imageOverlay(url, bounds).addTo(map);

        // tell leaflet that the map is exactly as big as the image
        map.setMaxBounds(bounds);

        // pixel coords
        var m = {
            x: 1300,
            y: 300
          };
          
          var n = {
            x: 2500,
            y: 300
          };
          
          var p = {
            x: 2500,
            y: 2000
          };
          //Add marker
        
//        map.on('click', addMarker);
        var addedOne = false,
          customPin = L.divIcon({
            className: 'location-pin',
            html: '<img src="images/icon/wifi.png"><div class="pin"></div><div class="pulse"></div>',
            iconSize: [30, 30],
            iconAnchor: [18, 30]
          });
          
          
          var userOne = false,
          userPin = L.divIcon({
            className: 'user-pin',
            html: '<img src="images/icon/user.png"><div class="pin2"></div>',
            iconSize: [30, 30],
            iconAnchor: [18, 30]
          });

        function addMarker(e) {
          // Add marker to map at click location; add popup window
          if (userOne) {
            return;
          }

          var newMarker = new L.marker(e.latlng, {
            icon: userPin
          }).addTo(map);
          newMarker.bindPopup("<b>New Room</b><br>Adventures await");
          userOne = true;
        }
        // Lookup neighbors https://github.com/mapbox/leaflet-knn

        var marker1 = L.marker(map.unproject([m.x, m.y], map.getMaxZoom()), {
          icon: customPin
        }).addTo(map);
        // Add pop up for click
        marker1.bindPopup("<b>Classroom 9 Locator</b>");
        
        var marker2 = L.marker(map.unproject([n.x, n.y], map.getMaxZoom()), {
          icon: customPin
        }).addTo(map);
        
        
        var marker2 = L.marker(map.unproject([n.x, n.y], map.getMaxZoom()), {
          icon: customPin
        }).addTo(map);
        // Add pop up for click
        marker2.bindPopup("<b>Classroom 8 Locator</b>");
        
        
        var marker3 = L.marker(map.unproject([p.x, p.y], map.getMaxZoom()), {
          icon: customPin
        }).addTo(map);
        // Add pop up for click
        marker3.bindPopup("<b>Hall Locator</b>");
    </script>
  
  </body>
</html>
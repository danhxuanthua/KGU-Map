<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>KGU Map</title>
      <style type="text/css">
       /* Always set the map height explicitly to define the size of the div
           * element that contains the map. */

          /* Optional: Makes the sample page fill the window. */
          html, body {
            height: 100%;
            margin: 0;
            padding: 0;
          }

          #floating-panel {
            position: absolute;
            top: 10px;
            left: 25%;
            z-index: 5;
            background-color: #fff;
            padding: 5px;
            border: 1px solid #999;
            text-align: center;
            font-family: 'Roboto','sans-serif';
            line-height: 30px;
            padding-left: 10px;
          }
          #right-panel {
            font-family: 'Roboto','sans-serif';
            line-height: 30px;
            padding-left: 10px;
            padding-right: 10px;
          }

          #right-panel select, #right-panel input {
            font-size: 15px;
          }

          #right-panel select {
            width: 100%;
          }

          #right-panel i {
            font-size: 12px;
          }

          #map {
            height: 100%;
            float: left;
            width: 63%;
            height: 100%;
          }
          #right-panel {
            float: right;
            width: 37%;
            height: 100%;
          }
          .panel {
            height: 100%;
            overflow: auto;
          }

     </style>

    <!--Bootstrap CDN-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>

  <body>
    <div class="container-fluid " style="background: #f0f0f0; padding: 15px">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="../public/image/KGU.MAP.png" class="img-responsive center-block" alt="Cinque Terre">
        </div>
      </div>
      <ul class="pager">
          <li class="previous"><a href="../index.php"><span class="glyphicon glyphicon-triangle-left"></span>Quay lại</a></li>
      </ul>
      
    </div>
    <!--Map-->
    <div id="map"></div>
    <!--Chi tiet duong di-->  
    <textarea id="right-panel" cols="50" readonly wrap="soft"> </textarea>
    <!--footer-->
    <div class="text-center" style="background: #f0f0f0; padding: 15px">KGU Map © 2018 Danh Xuân Thừa-Huỳnh Nhựt Nam</div>

<!--Connect database-->
<?php require "../site/database/database.php"; db_connect();
  //Lay id
  if(isset($_GET['id'])){
    $id=$_GET['id'];  
  }
  //dua vao iD de select database
  $sql_makers = "SELECT * FROM `markers` WHERE id=$id";
  $data_makers = db_get_row($sql_makers);
?>
    <script>
      //Ham chinh  
      function initMap() {
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var directionsService = new google.maps.DirectionsService;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,//do zoom cua ban do

        });

        //Hien thi vi tri dang dung
        infoWindow = new google.maps.InfoWindow;
        directionsDisplay.setMap(map);

          //Lay vi tri dang dung
          if (navigator.geolocation) {

              navigator.geolocation.getCurrentPosition(function(position){
                  var  pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                  };
                  //vi do dang dung
                  var get_lat = position.coords.latitude;
                  //kinh do dang dung
                  var get_lng = position.coords.longitude;

                 
                  infoWindow.setPosition(pos);
                  //Xuat thong bao
                  infoWindow.setContent('<img src=if_location_718953.png>Bạn đang ở đây');
                  infoWindow.open(map);
                  map.setCenter(pos);

                  //Hien thi thong tin duong di
                  calculateAndDisplayRoute(directionsService, directionsDisplay);
                  directionsDisplay.setPanel(document.getElementById('right-panel'));
                  
                  //ve duong di
                  function calculateAndDisplayRoute(directionsService, directionsDisplay) {
                    var selectedMode = 'WALKING';//Hinh thuc di chuyen
                    directionsService.route({
                        // vi tri hien tai
                        origin:{lat:  parseFloat(get_lat), lng: parseFloat(get_lng)},
                        // vi tri diem dich  
                        destination: {lat: <?php echo $data_makers['lat']?>, lng: <?php echo $data_makers['lng'] ?>},  
                        //Dat ten cho markers
                        travelMode: google.maps.TravelMode[selectedMode],
                      },function(response, status) {
                          
                          if (status == 'OK') {
                            directionsDisplay.setDirections(response);
                          } else {
                            window.alert('Yêu cầu chỉ đường không thành công do: ' + status);
                          }

                        }
                    );

                  }

              }, function() {
                handleLocationError(true, infoWindow, map.getCenter());
              });

          } else {
            // Trinh duyet khong ho tro dinh vi
            handleLocationError(false, infoWindow, map.getCenter());
          }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
          infoWindow.setPosition(pos);
          infoWindow.setContent(browserHasGeolocation ?'Lỗi: Dịch vụ vị trí địa lý không thành công.':'Lỗi: Trình duyệt bạn không\'t Hỗ trợ định vị.');
          infoWindow.open(map);
        }

      }

    </script>
    
    <!--Key Map API-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCh2Adrm3A-vH0hkoWesAPdx2KcBbMHkc&callback=initMap" async defer></script>
  
  </body>

</html>


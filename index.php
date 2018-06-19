<!--Connect Database -->
<?php require "./site/database/database.php"; db_connect();
  //select data
  $sql_makers = "SELECT * FROM `markers` WHERE 1";
  $data_makers = db_get_list($sql_makers);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>KGU Map</title>
    <!-- My CSS -->    
    <link rel="stylesheet" type="text/css" href="./public/css/index.css">
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
           <img src="./public/image/KGU.MAP.png" class="img-responsive center-block" alt="Cinque Terre">
        </div>
      </div>

    </div>
    <div id="map"></div>
    <div class="text-center" style="background: #f0f0f0; padding: 15px">KGU Map © 2018 Danh Xuân Thừa-Huỳnh Nhựt Nam</div>

    
  
    <script>
      //Danh dau dia diem
      
      var map, infoWindow;
      function initMap() {
        <?php   
          for ($i=0; $i <count($data_makers) ; $i++) { 
            echo 'var uluru'.$i.'= {lat:'.$data_makers[$i]['lat'].', lng: '.$data_makers[$i]['lng'].'};';

          } 
        ?>
        // var uluru0 = {lat: 9.9161579, lng: 105.1422907}; // khu giang duong
        // var uluru1 = {lat: 9.9162545, lng: 105.1436216}; //Khoa quoc phong an ninh
        // var uluru2 = {lat: 9.9172903, lng: 105.1452905}; //Thu vien
        // var uluru3 = {lat: 9.9136959, lng: 105.1442879}; //ky tuc xa
        // var uluru4 = {lat: 9.9170064, lng: 105.1420278}; // nha xe A
        // var uluru5 = {lat: 9.9172614, lng: 105.1428293}; // Nha xe B

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: uluru0,
        });


        //infoWindow = new google.maps.InfoWindow; // Neu bat len thi hien thi vi tri dang dung

        //Tao maksers tu database
        <?php 
            for ($i=0; $i <count($data_makers) ; $i++) { 
              echo  'var marker'.$i.' = new google.maps.Marker({
                    position: uluru'.$i.',
                    map: map,
                    icon: "if_constr_bank_office_1267304.png",
                    label:{ 
                        text: "'.$data_makers[$i]['name'].'",
                        color: "#0081bf",
                        fontSize: "14px",
                        fontWeight: "bold",
                      }
                  });';
            }
        ?>

        // var marker = new google.maps.Marker({
        //   position: uluru0,
        //   map: map,
        //   label: "Khu Giảng đường"
        // });


        // var marker = new google.maps.Marker({
        //   position: uluru1,
        //   map: map,
        //   label: "Khoa Quốc phòng-An ninh"
        // });
        // var marker = new google.maps.Marker({
        //   position: uluru2,
        //   map: map,
        //   label: "Thư Viện"
        // });
        // var marker = new google.maps.Marker({
        //   position: uluru3,
        //   map: map,
        //   label: "Ký túc xá"
        // });
        // var marker = new google.maps.Marker({
        //   position: uluru4,
        //   map: map,
        //   label: "Nhà xe A"
        // });
        // var marker = new google.maps.Marker({
        //   position: uluru5,
        //   map: map,
        //   label: "Nhà xe B"
        // });

        <?php 
            for ($i=0; $i <count($data_makers) ; $i++) { 
              echo'var infowindow'.$i.' = new google.maps.InfoWindow({
                    content:"<a href=./system/ChiDuong.php?id='.$data_makers[$i]['id'].'><img src=office.png>Chỉ đường đến đây</a>"
                  });';
        
            }
        ?>

        <?php 
            for ($i=0; $i <count($data_makers) ; $i++) { 
              echo'google.maps.event.addListener(marker'.$i.', "click", function() {
                    infowindow'.$i.'.open(map,marker'.$i.');
                  });';
            }
        ?>
        
        //Lay vi tri hien tai (Cai nay khong can thiet co the xoa)
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);

          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Trình duyệt không hỗ trợ Vị trí địa lý
          handleLocationError(false, infoWindow, map.getCenter());
        }
              
        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
          infoWindow.setPosition(pos);
          infoWindow.setContent(browserHasGeolocation ?
                                'Lỗi: dịch vụ vị trí địa lí không thành công.' :
                                'Lỗi: trình duyệt của bạn không\'t hỗ trợ vị trí địa lí.');
          infoWindow.open(map);
        }

      }
    </script>

    <!-- Key Google Map API-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCh2Adrm3A-vH0hkoWesAPdx2KcBbMHkc&callback=initMap" async defer></script>
  </body>
</html>
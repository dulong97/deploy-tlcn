
<html ng-app="ionic.example">
  <head>
    <meta charset="utf-8">
    <title>Map</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    <link rel="stylesheet" type="text/css" href="{{asset('css/mapcanvas.css')}}">
    <link href="https://code.ionicframework.com/nightly/css/ionic.css" rel="stylesheet">
    <script src="https://code.ionicframework.com/nightly/js/ionic.bundle.js"></script>

    <!-- google maps javascript -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzbS2nerrvbdvNlsyQO9cDWFNthdoswRU"></script>

  </head>
  <body ng-controller="MapCtrl">
    <ion-header-bar class="bar-dark" >
      <h1 class="title">Quán Chay MAP</h1>
    </ion-header-bar>
    <ion-content>
      <div id="map" data-tap-disabled="true"></div>
      <script>
      	var myLatlng = new google.maps.LatLng(10.7696,106.7084);
      	
		var mapOptions = {
        center: myLatlng,
        zoom: 16,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
     	var map = new google.maps.Map(document.getElementById("map"),
          mapOptions);	
     	@foreach($quanans as $quanan)
     	var myLatlng1 = new google.maps.LatLng({{$quanan->address[0]->lat}},
     		{{$quanan->address[0]->lng}});

     	var marker = new google.maps.Marker({
          position: myLatlng1,
          map: map,
          title: '{{$quanan->name}}'
        });
        google.maps.event.addListener(marker, 'click', function() {
          infowindow.open(map,marker);
        });
        @endforeach
      //   var myLatlng1 = new google.maps.LatLng(10.772,106.714);
     	// var marker = new google.maps.Marker({
      //     position: myLatlng1,
      //     map: map,
      //     title: 'Uluru (Ayers Rock)'
      //   });
      //   google.maps.event.addListener(marker, 'click', function() {
      //     infowindow.open(map,marker);
      //   });
      //   var myLatlng1 = new google.maps.LatLng(10.7677,106.7094);
     	// var marker = new google.maps.Marker({
      //     position: myLatlng1,
      //     map: map,
      //     title: 'Uluru (Ayers Rock)'
      //   });
      //   google.maps.event.addListener(marker, 'click', function() {
      //     infowindow.open(map,marker);
      //   });

      </script>
    </ion-content>
    <ion-footer-bar class="bar-dark">
      <a ng-click="centerOnMe()" class="button button-icon icon ion-navigate">Vị trí của bạn</a>
    </ion-footer-bar>
  </body>

  <script src="{{asset('js/mapscanvas.js')}}"></script>

</html>
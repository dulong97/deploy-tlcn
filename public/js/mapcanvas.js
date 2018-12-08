// angular.module('ionic.example', ['ionic'])

//     .controller('MapCtrl', function($scope, $ionicLoading, $compile) {
//       var myLatlng = new google.maps.LatLng(10.7696,106.7084);
//       var mapOptions = {
//         center: myLatlng,
//         zoom: 16,
//         mapTypeId: google.maps.MapTypeId.ROADMAP
//       };
//       var map = new google.maps.Map(document.getElementById("map"),
//           mapOptions);
//       function initialize() {
//         //Marker + infowindow + angularjs compiled ng-click
//         var contentString = "<div><a ng-click='clickTest()'>Click me!</a></div>";
//         var compiled = $compile(contentString)($scope);

//         var infowindow = new google.maps.InfoWindow({
//           content: compiled[0]
//         });

//         var marker = new google.maps.Marker({
//           position: myLatlng,
//           map: map,
//           title: 'Uluru (Ayers Rock)'
//         });
//         google.maps.event.addListener(marker, 'click', function() {
//           infowindow.open(map,marker);
//         });
//         $scope.map = map;
//       }

//       google.maps.event.addDomListener(window, 'load', initialize);
      
//     $scope.centerOnMe = function() {
      
//       infoWindow = new google.maps.InfoWindow;
//          if (navigator.geolocation) {
//           navigator.geolocation.getCurrentPosition(function(position) {
//             var pos = {
//               lat: position.coords.latitude,
//               lng: position.coords.longitude
//             };

//             infoWindow.setPosition(pos);
//             var marker = new google.maps.Marker({
//               position: pos,
//               map: map,
//               title: 'Vị trí của bạn'
//             });
//             google.maps.event.addListener(marker, 'click', function() {
//               infowindow.open(map,marker);
//              });
//             map.setCenter(pos);
//           }, function() {
//             handleLocationError(true, infoWindow, map.getCenter());
//           });
//         } else {
//           // Browser doesn't support Geolocation
//           handleLocationError(false, infoWindow, map.getCenter());
//         }
//         navigator.geolocation.getCurrentPosition(function(pos) {
//           $scope.map.setCenter(new google.maps.LatLng(pos.coords.latitude, pos.coords.longitude));
//           $scope.loading.hide();
//         }, function(error) {
//           alert('Unable to get location: ' + error.message);
//         });
//       };
//       $scope.clickTest = function() {
//         alert('Example of infowindow with ng-click')
//       };       
//       function handleLocationError(browserHasGeolocation, infoWindow, pos) {
//         infoWindow.setPosition(pos);
//         infoWindow.setContent(browserHasGeolocation ?
//                               'Error: The Geolocation service failed.' :
//                               'Error: Your browser doesn\'t support geolocation.');
//         infoWindow.open(map);
//       }
        
//     });
@extends('layouts.wisatawan.master')


<head>
    <title>Kuliner</title>

    <script src="{{asset('js_wisatawan/google-map.js')}}"></script>
    <script type="text/javascript">
    var map ;
    var posisi = {lat:<?= $kuliner->latitude ?>, lng: <?= $kuliner->longitude?>};
    var gambar = "http://icons.iconarchive.com/icons/paomedia/small-n-flat/32/map-marker-icon.png";
    var isiInfo = "<b><?= $kuliner->nama_kuliner ?></b> </br>"+
    "Kabupaten : <?= $kuliner->kabupaten->nama_kabupaten ?> </br>" +
    "Lokasi : <?= $kuliner->lokasi?>";

    function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
              zoom: 14,
              center: posisi
            });
            var marker = new google.maps.Marker({
              position:posisi,
              map: map,
              draggable: true,
              title: '<?= $kuliner->nama_objek_wisata ?>',
              icon: gambar,
       });
       var infoWindow = new google.maps.InfoWindow({
       content: isiInfo,
       });
       marker.addListener('click',function() {
       infoWindow.open(map,marker);
       });
    }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqk0o7gAPnf-hWOKtlFPjYtvWBKgDo33o&callback=initMap">
    </script>
</head>
    

@section('content')
    <div class="jumbotron" style="background-image: url(<?= $kuliner->foto ?>);
background-size: cover;
height: 70%;">
    </div>

    <div class="container">
      <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">{{ $kuliner->nama_kuliner}}</h2>
            <hr>
          </div>
      </div>
      <p>
        <?= $kuliner->deskripsi ?>
      </p>
      <p>
       
    </div>

     <div class="container">
       <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h4 class="mb-4">Map</h2>
          </div>
      </div> 
       <div id="map" style="height: 500px"></div>
     </div>
     <br>
   

	
    <style type="text/css">
        .kabupaten{
            margin-bottom: 20px;
        }
    </style>
@endsection
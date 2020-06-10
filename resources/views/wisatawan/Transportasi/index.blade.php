@extends('layouts.wisatawan.master')
@section('title')
    <title>Transportation Navigation</title>
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
    <script src="https://api.mapbox.com/mapbox-gl-js/v1.10.1/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.10.1/mapbox-gl.css" rel="stylesheet" />
    <style>
      #map { height: 500px; width: 100%; }
    </style>
@endsection

@section('content')
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.0.2/mapbox-gl-directions.js"></script>
    <link
        rel="stylesheet"
        href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.0.2/mapbox-gl-directions.css"
        type="text/css"
    />
    <div class="jumbotron" style="background-image: url(images_wisatawan/bg_3.jpg);background-size: cover;height: 700px;"></div>

    <div class="container">
      <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Transportasi</h2>
          </div>
      </div>
      
      <div class="fluid-container">
        <div id="map"></div>
      </div>  
    </div>
    <br>


  
    <style type="text/css">
        .kabupaten{
            margin-bottom: 20px;
        }
    </style>
    <script>
      // TO MAKE THE MAP APPEAR YOU MUST
      // ADD YOUR ACCESS TOKEN FROM
      // https://account.mapbox.com
      mapboxgl.accessToken = 'pk.eyJ1IjoiYW5kcmVhczEwMDkiLCJhIjoiY2tiNGV0NzNyMGl0MTJ0bzhhNHM4NG40NyJ9._rnTijdsx8Rysc27SrGyxg';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [99.083252, 2.3337119],
            zoom: 13
        });

        map.addControl(
            new MapboxDirections({
                accessToken: mapboxgl.accessToken
            }),
            'top-left'
        );
    </script>

@endsection
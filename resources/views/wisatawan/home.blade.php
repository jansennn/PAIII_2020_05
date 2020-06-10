@extends('layouts.wisatawan.master')

@section('title')
    <title>Home Kepariwisataan</title>
    <!-- Font Awesome -->

@endsection

@section('content')
	<div class="hero-wrap js-fullheight" style="background-image: url({{URL::asset('/images_wisatawan/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p class="caps" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Travel to the any corner of the world, without going around in circles</p>
            <h1 data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Danau Toba, Negeri Indah Kepingan Surga</h1>
          </div>
        </div>
      </div>
    </div>


	<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
	  	<div class="row">
				<div class="col-md-12">
					<div class="search-wrap-1 ftco-animate p-4">
						<form action="/Search" method="POST" class="search-property-1">
              {{ csrf_field() }}
           		<div class="row">
          			<div class="col-lg-10 align-items-end">
          				<div class="form-group">
          					<label for="#">Search Objek Wisata, Kuliner, Event, Akomodasi, Budaya</label>
          				  <div class="form-field">
             					<div class="icon"><span class="ion-ios-search"></span></div>
        				        <select id="search" name="input" class="form-control">
                          @foreach($objekWisatas as $objekWisata)
                            <option value="{{ $objekWisata->nama_objek_wisata}}" type="1">{{ $objekWisata->nama_objek_wisata}}</option>
                          @endforeach
                          @foreach($kuliners as $kuliner)
                            <option value="{{ $kuliner->nama_kuliner}}" type="2">{{ $kuliner->nama_kuliner}}</option>
                          @endforeach
                          @foreach($events2 as $event2)
                            <option value="{{ $event2->nama_event}}" type="3">{{ $event2->nama_event}}</option>
                          @endforeach
                          @foreach($akomodasis as $akomodasi)
                            <option value="{{ $akomodasi->nama_akomodasi}}" type="1">{{ $akomodasi->nama_akomodasi}}</option>
                          @endforeach
                          @foreach($budayas as $budaya)
                            <option value="{{ $budaya->nama_budaya}}" type="1">{{ $budaya->nama_budaya}}</option>
                          @endforeach
                      </select>
        				      </div>
        			    </div>
        		    </div>
        		    <div class="col-lg-2 align-self-end">
        		    	<div class="form-group">
        		        <div class="form-field">
        				      <input type="submit" value="Search" class="form-control btn btn-primary">
        				    </div>
        			    </div>
        		    </div>
        		  </div>
		        	</form>
		        </div>
					</div>
	    	</div>
	    </div>
    </section>



		<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Best Place Destination</h2>
          </div>
        </div>
        <div class="row">
          @foreach ($kabupatens as $kabupaten)
            <div class="col-md-3 ftco-animate" >
              <div class="project-destination"  style="margin-bottom: 20px;" id="kab">
                <a href="{{url('Kab',['id' => $kabupaten->id])}}" class="img" style="background-image: url(Kab/<?= $kabupaten->gambar_kabupaten?>);" >
                  <div class="text">
                    <h3><?= $kabupaten->nama_kabupaten?></h3>
                    <span>Cek </span>
                  </div>
                </a>
              </div>
            </div> 
          @endforeach 
        </div>
    	</div>
    </section>

   

    <section class="ftco-section ftco-no-pt" id="sec">
    	<div class="container">
    		<div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Objek Wisata</h2>
          </div>
        </div>

          <div class="row">
            <div class="col-md-12 col-center m-auto">
              <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                <!-- Carousel indicators -->
                 
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                  <div class="item carousel-item active">
                    <div class="row">
                      @foreach($objekWisatas1 as $objekWisata1)
                        <div class="col-sm-4">
                          <div class="project-wrap" id="card1">
                            <a href="#" class="img" style="background-image: url(Kab/information/ObjekWisata/{{$objekWisata1->foto}});"></a>
                            <div class="text p-4">
                              <span class="price">Explore</span>
                              <span class="days"><span class="badge badge-warning">Objek Wisata</span></span>
                              <span class="days"> {{ $objekWisata1->kabupaten->nama_kabupaten}} </span>
                              <h3><a href="#">{{ $objekWisata1->nama_objek_wisata}}</a></h3>
                              <p class="location"><span class="ion-ios-map"></span> {{ $objekWisata1->lokasi}}</p>
                            </div>
                          </div>
                        </div>
                      @endforeach
                      
                    </div>
                  </div>

                  <div class="item carousel-item">
                    <div class="row">
                      @foreach($objekWisatas2 as $objekWisata2)
                       <div class="col-sm-4">
                          <div class="project-wrap" id="card1">
                            <a href="#" class="img" style="background-image: url(Kab/information/ObjekWisata/{{$objekWisata2->foto}});"></a>
                            <div class="text p-4">
                              <span class="price">Explore</span>
                              <span class="days"><span class="badge badge-warning">Objek Wisata</span></span>
                              <span class="days"> {{ $objekWisata2->kabupaten->nama_kabupaten}} </span>
                              <h3><a href="#">{{ $objekWisata2->nama_objek_wisata}}</a></h3>
                              <p class="location"><span class="ion-ios-map"></span> {{ $objekWisata2->lokasi}}</p>
                            </div>
                          </div>
                        </div>
                      @endforeach
                    </div>
                  </div>
                  
                </div>
                <!-- Carousel controls -->
                <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                  <i class="fa fa-chevron-left"></i>
                </a>
                <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                  <i class="fa fa-chevron-right"></i>
                </a>
              </div>
            </div>
          </div>
    	</div>
    </section>

    <section class="ftco-section">
        <main class="main">
          <section class="info1">
            <h2 id="tit">No Place like Toba</h2>
            <p>Some Text goes here, some text goes here, some text goes here, some text goes here.</p>
            <a href="#" class="info-link">Learn more...</a>
          </section>
          <figure class="figure1">
             <img class="figure-img" src="https://images.unsplash.com/photo-1570066709052-24943d5c0717?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjF9" alt="a kitten">
          </figure>
          <figure class="figure2">
             <img class="figure-img" src="https://images.unsplash.com/photo-1553513377-9c685bc148e0?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjF9" alt="a kitten">
          </figure>
          <figure class="figure3">
             <img class="figure-img" src="https://images.unsplash.com/photo-1560675599-f0432d4ffc2d?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjF9" alt="a kitten">
          </figure>
          <figure class="figure4">
             <img class="figure-img" src="https://images.unsplash.com/photo-1560675599-f0432d4ffc2d?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjF9" alt="a kitten">
          </figure>
          <figure class="figure5">
             <img class="figure-img" src="https://images.unsplash.com/photo-1570099891251-cb2fcb895de3?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjF9" alt="a kitten">
          </figure>
          <figure class="figure6">
             <img class="figure-img" src="https://images.unsplash.com/photo-1585371979158-0e577cf0204e?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjF9" alt="a kitten">
          </figure>
          <section class="info2">
            <h2 id="tit">Explore now</h2>
            <p>Some Text goes here, some text goes here, some text goes here, some text goes here.</p>
            <a href="#" class="info-link">Learn more...</a>
          </section>
          <figure class="figure7">
             <img class="figure-img" src="https://images.unsplash.com/photo-1545884085-7adec6c688c4?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjF9" alt="a kitten">
          </figure>
          <figure class="figure7">
             <img class="figure-img" src="https://images.unsplash.com/photo-1553513377-9c685bc148e0?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjF9" alt="a kitten">
          </figure>
        </main>
    </section>
    


    <section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Event</h2>
          </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="Kab/information/Event/c1.jpg" alt="First slide">
            </div>
            @foreach($events as $event)
            <div class="carousel-item">
              <img class="d-block w-100" src="Kab/information/Event/{{ $event->foto}}" alt="Second slide">
            </div>
            @endforeach
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <br>
        <div class="row d-flex">
        @foreach($events as $event)
          <div class="col-md-4 d-flex ftco-animate" id="card1">
            <div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url(Kab/information/Event/{{ $event->foto }});">
              </a>
              <div class="text mt-3 float-right d-block">
                <div class="d-flex align-items-center mb-4 topp">
                  <div class="one">
                    <span class="day">21</span>
                  </div>
                  <div class="two">
                    <span class="yr">2019</span>
                    <span class="mos">August</span>
                  </div>
                </div>
                <h3 class="heading"><a href="#">{{ $event->nama_event }}</a></h3>
                <p class="location"><span class="ion-ios-map"></span> {{ $event->lokasi}}</p>
              </div>
            </div>
          </div>
        @endforeach

        </div>
      </div>
    </section>


    <div class="parallax"></div>
   

    <style type="text/css">
        .kabupaten{
            margin-bottom: 20px;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script type="text/javascript">
            $('#search').select2();
    </script> 
    <link rel="stylesheet" href="{{ asset('css_wisatawan/home.css') }}">


@endsection
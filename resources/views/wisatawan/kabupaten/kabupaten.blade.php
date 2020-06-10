@extends('layouts.wisatawan.master')

@section('title')
    <title>Kabupaten</title>
@endsection

@section('content')
  <section class="hero-wrap hero-wrap-1" id="sect1" data-stellar-background-ratio="0.5">
    <img src="./<?= $kabupaten->gambar_kabupaten?>" id="img_kabupaten" alt="Snow" data-stellar-background-ratio="0.5">
    <div class="centered"><font face="Times New Roman"  style="color: white;font-size: 100px"><?= $kabupaten->nama_kabupaten?></font></div>
  </section>


  <section class="ftco-section ftco-no-pt">
    	<div class="container">
    		<div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Objek Wisata</h2>
          </div>
        </div>
        <div class="row">
        	@foreach($objekWisatas as $objekWisata)
        		<div class="col-md-4 ftco-animate" >
		    		<div class="project-wrap" id="card1">
		    			<a href="{{url('Kab/Information/ObjekWisata',['id' => $objekWisata->id])}}" class="img" style="background-image: url(information/ObjekWisata/<?= $objekWisata->foto?>);"></a>
		    			<div class="text p-4">
		    				<span class="days"><span class="badge badge-warning">Objek Wisata</span></span>
		    				<h3><a href="#"><?= $objekWisata->nama_objek_wisata ?></a></h3>
		    				<p class="location"><span class="ion-ios-map"></span> <?= $objekWisata->lokasi ?></p>
		    				<ul>
		    					<li><span class="flaticon-shower"></span>Read more...</li>
		    				</ul>
		    			</div>
		    		</div>
		    	</div>
        	@endforeach
        	
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pt">
    	<div class="container">
    		<div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Akomodasi</h2>
          </div>
        </div>
        <div class="row">
        	@foreach($akomodasis as $akomodasi)
        		<div class="col-md-4 ftco-animate" >
		    		<div class="project-wrap" id="card1">
		    			<a href="{{url('Kab/Information/Akomodasi',['id' => $akomodasi->id])}}" class="img" style="background-image: url(information/Akomodasi/<?= $akomodasi->foto?>);"></a>
		    			<div class="text p-4">
		    				<span class="days"><span class="badge badge-warning">Akomodasi</span></span>
		    				<h3><a href="#"><?= $akomodasi->nama_akomodasi ?></a></h3>
		    				<p class="location"><span class="ion-ios-map"></span> <?= $akomodasi->lokasi ?></p>
		    				<ul>
		    					<li><span class="flaticon-shower"></span>Read more...</li>
		    				</ul>
		    			</div>
		    		</div>
		    	</div>
        	@endforeach
        	{{ $akomodasis->links() }}	
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pt">
    	<div class="container">
    		<div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Budaya</h2>
          </div>
        </div>
        <div class="row">
        	@foreach($budayas as $budaya)
        		<div class="col-md-4 ftco-animate" >
		    		<div class="project-wrap" id="card1">
		    			<a href="#" class="img" style="background-image: url(information/Budaya/<?= $budaya->foto?>);"></a>
		    			<div class="text p-4">
		    				<span class="days"><span class="badge badge-warning">Budaya</span></span>
		    				<h3><a href="#"><?= $budaya->nama_budaya ?></a></h3>
		    				<p class="location"><span class="ion-ios-map"></span> <?= $budaya->lokasi ?></p>
		    				<ul>
		    					<li><span class="flaticon-shower"></span>Read more...</li>
		    				</ul>
		    			</div>
		    		</div>
		    	</div>
        	@endforeach
        	
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pt">
    	<div class="container">
    		<div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Kuliner</h2>
          </div>
        </div>
        <div class="row">
        	@foreach($kuliners as $kuliner)
        		<div class="col-md-4 ftco-animate" >
		    		<div class="project-wrap" id="card1">
		    			<a href="{{url('Kab/Information/Kuliner',['id' => $kuliner->id])}}" class="img" style="background-image: url(information/Kuliner/<?= $kuliner->foto?>);"></a>
		    			<div class="text p-4">
		    				<span class="days"><span class="badge badge-warning">Kuliner</span></span>
		    				<h3><a href="#"><?= $kuliner->nama_kuliner ?></a></h3>
		    				<p class="location"><span class="ion-ios-map"></span> <?= $kuliner->lokasi ?></p>
		    				<ul>
		    					<li><span class="flaticon-shower"></span>Read more...</li>
		    				</ul>
		    			</div>
		    		</div>
		    	</div>
        	@endforeach
        	
        </div>
    	</div>
    </section>
   

@endsection
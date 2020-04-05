@extends('layouts.wisatawan.master')

@section('title')
    <title>Home Kepariwisataan</title>
@endsection

@section('content')
	<div class="hero-wrap js-fullheight" style="background-image: url('Wisatawan/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
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
							<form action="#" class="search-property-1">
        		        		<div class="row">
        		        			<div class="col-lg-10 align-items-end">
        		        				<div class="form-group">
        		        					<label for="#">Search</label>
        		          				    <div class="form-field">
        		          					   <div class="icon"><span class="ion-ios-search"></span></div>
        				                        <input type="text" class="form-control" placeholder="Search Objek Wisata , Event, Akomodasi, Kuliner, Transportasi">
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
        	<?php 
               foreach ($kabupaten as $kabupatens) {
                    ?>
                       <div class="col-md-3 ftco-animate" >
                            <div class="project-destination" style="margin-bottom: 20px;">
                                <a href="#" class="img" style="background-image: url(images/<?= $kabupatens->gambar_kabupaten?>);">
                                    <div class="text">
                                        <h3><?= $kabupatens->gambar_kabupaten?></h3>
                                        <span>Cek </span>
                                    </div>
                                </a>
                            </div>
                        </div> 
                    <?php 
                } 
            ?>

        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pt">
    	<div class="container">
    		<div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Tour Destination</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-4 ftco-animate">
        		<div class="project-wrap">
        			<a href="#" class="img" style="background-image: url(Wisatawan/images/destination-1.jpg);"></a>
        			<div class="text p-4">
        				<span class="price">$300/person</span>
        				<span class="days">8 Days Tour</span>
        				<h3><a href="#">Bali, Indonesia</a></h3>
        				<p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
        				<ul>
        					<li><span class="flaticon-shower"></span>2</li>
        					<li><span class="flaticon-king-size"></span>3</li>
        					<li><span class="flaticon-mountains"></span>Near Mountain</li>
        				</ul>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="project-wrap">
        			<a href="#" class="img" style="background-image: url(images/destination-2.jpg);"></a>
        			<div class="text p-4">
        				<span class="price">$300/person</span>
        				<span class="days">10 Days Tour</span>
        				<h3><a href="#">Bali, Indonesia</a></h3>
        				<p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
        				<ul>
        					<li><span class="flaticon-shower"></span>2</li>
        					<li><span class="flaticon-king-size"></span>3</li>
        					<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
        				</ul>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="project-wrap">
        			<a href="#" class="img" style="background-image: url(images/destination-3.jpg);"></a>
        			<div class="text p-4">
        				<span class="price">$300/person</span>
        				<span class="days">7 Days Tour</span>
        				<h3><a href="#">Bali, Indonesia</a></h3>
        				<p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
        				<ul>
        					<li><span class="flaticon-shower"></span>2</li>
        					<li><span class="flaticon-king-size"></span>3</li>
        					<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
        				</ul>
        			</div>
        		</div>
        	</div>

        	<div class="col-md-4 ftco-animate">
        		<div class="project-wrap">
        			<a href="#" class="img" style="background-image: url(images/destination-4.jpg);"></a>
        			<div class="text p-4">
        				<span class="price">$300/person</span>
        				<span class="days">8 Days Tour</span>
        				<h3><a href="#">Bali, Indonesia</a></h3>
        				<p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
        				<ul>
        					<li><span class="flaticon-shower"></span>2</li>
        					<li><span class="flaticon-king-size"></span>3</li>
        					<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
        				</ul>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="project-wrap">
        			<a href="#" class="img" style="background-image: url(images/destination-5.jpg);"></a>
        			<div class="text p-4">
        				<span class="price">$300/person</span>
        				<span class="days">10 Days Tour</span>
        				<h3><a href="#">Bali, Indonesia</a></h3>
        				<p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
        				<ul>
        					<li><span class="flaticon-shower"></span>2</li>
        					<li><span class="flaticon-king-size"></span>3</li>
        					<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
        				</ul>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="project-wrap">
        			<a href="#" class="img" style="background-image: url(images/destination-6.jpg);"></a>
        			<div class="text p-4">
        				<span class="price">$300/person</span>
        				<span class="days">7 Days Tour</span>
        				<h3><a href="#">Bali, Indonesia</a></h3>
        				<p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
        				<ul>
        					<li><span class="flaticon-shower"></span>2</li>
        					<li><span class="flaticon-king-size"></span>3</li>
        					<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
        				</ul>
        			</div>
        		</div>
        	</div>
        </div>
    	</div>
    </section>

    <section class="ftco-section testimony-section bg-bottom" style="background-image: url(images/bg_3.jpg);">
      <div class="container">
        <div class="row justify-content-center pb-4">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">Tourist Feedback</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Recent Post</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
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
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
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
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
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
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <style type="text/css">
        .kabupaten{
            margin-bottom: 20px;
        }
    </style>
@endsection
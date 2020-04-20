@extends('layouts.wisatawan.master')

 

@section('content')
    <div class="jumbotron" style="background-image: url(images_wisatawan/bg_3.jpg);
background-size: cover;
height: 700px;">
    </div>
    <script>
  (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      js = d.createElement(s); js.id = id;
      js.src = "https://widgets.moovit.com/wtp/en";
      fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'moovit-jsw'));
</script>

    <div class="container">
      <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Transportasi</h2>
          </div>
      </div>
      
      <div class="mv-wtp"
       data-metro="121"
       data-lang="en" style="height: 800px">
      </div>   
    </div>


  
    <style type="text/css">
        .kabupaten{
            margin-bottom: 20px;
        }
    </style>
@endsection
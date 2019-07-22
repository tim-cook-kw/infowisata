<!DOCTYPE html>
<html lang="en">
<head>

	<title>Wisata Jogja</title>

  	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
  	<meta name="description" content="">

	<!-- stylesheets css -->
	<link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/loaders.css') }}"/>
  	<link rel="stylesheet" href="{{ asset('asset/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('asset/css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('asset/css/font-awesome.min.css') }}">
  	<link rel="stylesheet" href="{{ asset('asset/css/nivo-lightbox.css') }}">
  	<link rel="stylesheet" href="{{ asset('asset/css/nivo_themes/default/default.css') }}">
  	<link rel="stylesheet" href="{{ asset('asset/css/hover-min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/contact-input-style.css') }}">
    @stack('css')

  	
</head>
<body>
 <div class="loader loader-bg">
        <div class="loader-inner ball-pulse-rise">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>

@include('homepage::layouts.partial.header')
@yield('content')

<!------------ todo Section ------------>
<section id="todo" class="parallax">
  <div class="container">
    <div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 text-center">
          <div class="wow fadeInUp section-title" data-wow-delay="0.6s">
            <h2>Check your To-Do List<small>Preparing for a Road Trip Checklist</small></h2>
          </div>
      </div>

      <div class="clearfix"></div>

      <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="feature-thumb">
          <div class="feature-icon">
             <span><img class="img-responsive" src="images/todo-icon-01.png" /></span>
          </div>
          <h3>Visa/Papers</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
        <div class="feature-thumb">
          <div class="feature-icon">
            <span><img class="img-responsive" src="images/todo-icon-02.png" /></span>
          </div>
          <h3>Hotel Booking</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
        <div class="feature-thumb">
          <div class="feature-icon">
            <span><img class="img-responsive" src="images/todo-icon-03.png" /></span>
          </div>
           <h3>Luxury</h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus.</p>
        </div>
      </div>
        
        <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="feature-thumb">
          <div class="feature-icon">
             <span><img class="img-responsive" src="images/todo-icon-04.png" /></span>
          </div>
          <h3>Shopping</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
        <div class="feature-thumb">
          <div class="feature-icon">
            <span><img class="img-responsive" src="images/todo-icon-05.png" /></span>
          </div>
          <h3>Sport</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
        <div class="feature-thumb">
          <div class="feature-icon">
            <span><img class="img-responsive" src="images/todo-icon-06.png" /></span>
          </div>
           <h3>Support</h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus.</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!------------ Video section ------------>
<section id="video-sec" class="parallax">
  <div class="overlay"></div>
    <div class="container">
      <div class="row">

          <div class="col-md-offset-2 col-md-8 col-sm-12">
              <h2 class="wow fadeInUp" data-wow-delay="0.5s">Watch the video<small>All journeys have secret destinations of which the traveler is unaware.</small></h2>
              <small><em>Video by: Bali Vacation Travel Guide | Expedia</em></small>
              <video width="400" height="300" controls autoplay>
                <source src="video/Bali.mp4" type="video/mp4">
              <!-- <a class="popup-youtube" href="https://youtu.be/CB70skVw3nU" ><i class="fa fa-play"></i></a> -->
          </div>

      </div>
    </div>
</section>

<!------------ Menu section ------------>
<section id="location" class="parallax">
  <div class="container">
    <div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
         <div class="wow fadeInUp section-title" data-wow-delay="1s">
            <h2>Top Locations <small>Every day is a journey, and the journey itself is home.</small></h2>
        </div>
      </div>

      <div class="col-md-6 col-sm-12">
        <div class="media wow fadeInUp" data-wow-delay="0.5s">
          <div class="media-object pull-left">
            <img src="images/location-01.jpg" class="img-responsive" alt="Food Menu">
          </div>
          <div class="media-body">
            <h3 class="media-heading">Yogyakarta</h3>
            <p>Yogyakarta City is the capital and center of government of the Special Region of Yogyakarta, Indonesia. The city of Yogyakarta is the residence of Sultan Hamengkubuwana and Adipati Paku Alam.</p>
              <a href="#" class="btn btn-capsul btn-transparent-prime">Explore Now</a>
          </div>
        </div>

        <div class="media wow fadeInUp" data-wow-delay="0.9s">
          <div class="media-object pull-left">
            <img src="images/location-02.jpg" class="img-responsive" alt="Food Menu">
          </div>
          <div class="media-body">
            <h3 class="media-heading">Bali</h3>
            <p>Bali is a province in Indonesia. The provincial capital is Denpasar. Bali is also one of the islands in the Nusa Tenggara Islands.At the beginning of Indonesia's independence.</p>
             <a href="#" class="btn btn-capsul btn-transparent-prime">Explore Now</a>
          </div>
        </div>

        <div class="media wow fadeInUp" data-wow-delay="0.9s">
          <div class="media-object pull-left">
            <img src="images/location-05.jpg" class="img-responsive" alt="Food Menu">
          </div>
          <div class="media-body">
            <h3 class="media-heading">Wakatobi</h3>
            <p>Wakatobi is also the name of the national park area established in 1996, with a total area of ​​1.39 million hectares, concerning marine biodiversity, scale and coral conditions which occupy one of the highest priority positions of marine conservation in Indonesia.</p>
             <a href="#" class="btn btn-capsul btn-transparent-prime">Explore Now</a>
          </div>
        </div>

      </div>

      <div class="col-md-6 col-sm-12">
        <div class="media wow fadeInUp" data-wow-delay="0.5s">
          <div class="media-object pull-left">
            <img src="images/location-03.jpg" class="img-responsive" alt="Food Menu">
           </div>
          <div class="media-body">
            <h3 class="media-heading">Gunung Bromo</h3>
            <p>Mount Bromo or in Tengger language spelled "Brama", is an active volcano in East Java, Indonesia. This mountain has an altitude of 2,329 meters above sea level.</p>
              <a href="#" class="btn btn-capsul btn-transparent-prime">Explore Now</a>
          </div>
        </div>

        <div class="media wow fadeInUp" data-wow-delay="0.9s">
          <div class="media-object pull-left">
            <img src="images/location-04.jpg" class="img-responsive" alt="Food Menu">
          </div>
          <div class="media-body">
            <h3 class="media-heading">Raja Ampat</h3>
            <p>Raja Ampat is a group of islands on the western tip of Papua in Indonesia, famous for its diving experience. Most of the world's coral reefs biodiversity and rare species of marine life can easily be found in.</p>
              <a href="#" class="btn btn-capsul btn-transparent-prime">Explore Now</a>
          </div>
        </div>

        <div class="media wow fadeInUp" data-wow-delay="0.9s">
          <div class="media-object pull-left">
            <img src="images/location-06.jpg" class="img-responsive" alt="Food Menu">
          </div>
          <div class="media-body">
            <h3 class="media-heading">Danau Toba</h3>
            <p> Lake Toba is a large natural lake in Indonesia in the Caldera of the Super Volcano. This lake has a length of 100 kilometers (62 miles), a width of 30 kilometers (19 mi), and a depth of 505 meters (1657 ft).</p>
              <a href="#" class="btn btn-capsul btn-transparent-prime">Explore Now</a>
          </div>
        </div>

      </div>
    </div>
  </div>
  </div>
</section>


<!------------ Contact section ------------>
<section id="contact-sec" class=" content">
  <div class="overlay"></div>
	<div class="container form-block">
                <div class="row">
                <div class="col-lg-12 text-center"><h2>Get in Touch<small>Stay in touch for more information</small></h2></div>
				<div class="col-lg-4 col-md-4 col-sm-12">
                <span class="input input-hoshi">
					<input class="input_field input_field-hoshi" type="text" id="input-4" />
					<label class="input_label input_label-hoshi input_label-hoshi-color-1" for="input-4">
						<span class="input_label-content input_label-content-hoshi">Name</span>
					</label>
				</span>
                </div>
				<div class="col-lg-4 col-md-4 col-sm-12">
                <span class="input input-hoshi">
					<input class="input_field input_field-hoshi" type="text" id="input-4" />
					<label class="input_label input_label-hoshi input_label-hoshi-color-1" for="input-4">
						<span class="input_label-content input_label-content-hoshi">Phone</span>
					</label>
				</span>
                </div>
				<div class="col-lg-4 col-md-4 col-sm-12">
                <span class="input input-hoshi">
					<input class="input_field input_field-hoshi" type="text" id="input-4" />
					<label class="input_label input_label-hoshi input_label-hoshi-color-1" for="input-4">
						<span class="input_label-content input_label-content-hoshi">Email</span>
					</label>
				</span>
                </div>
                
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <span class="t-area input-hoshi">
                <textarea class="input_field input_field-hoshi" rows="1"></textarea>
						<label class="input_label input_label-hoshi input_label-hoshi-color-1" for="input-4">
						<span class="input_label-content input_label-content-hoshi">Email</span>
					</label>
				</span>
                <a href="#" class="btn btn-capsul btn-transparent-white">Submit</a>
                </div>
                
                </div>
                </div>
</section>

@include('homepage::layouts.partial.footer')


<script src="{{ asset('asset/js/jquery.js') }}"></script>
<script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('asset/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('asset/js/jquery.backstretch.min.js') }}"></script>
<script src="{{ asset('asset/js/isotope.js') }}"></script>
<script src="{{ asset('asset/js/imagesloaded.min.js') }}"></script>
<script src="{{ asset('asset/js/nivo-lightbox.min.js') }}"></script>
<script src="{{ asset('asset/js/jquery.parallax.js') }}"></script>
<script src="{{ asset('asset/js/smoothscroll.js') }}"></script>
<script src="{{ asset('asset/js/wow.min.js') }}"></script>
<script src="{{ asset('asset/js/core.js') }}"></script>
@stack('js')


</body>
</html>
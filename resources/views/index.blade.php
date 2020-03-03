
@include('layouts.header')
<section class="text-center">
<video autoplay muted loop id="myVideo">
  <source src="img/video.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<div class="content">
  <div class="row">
                <div class="col-lg-12 m-auto searchBar">
                    <form class="form-inline" method="POST" action="{{route('brand.Search')}}">

                        @csrf
                        <div class="form-group">
                            <select class="form-control form-control-lg" id="sel1" value="" name="brand">
                    <option value="">Select Brand</option>
                    @foreach($brand as $bn)
                    <option value="{{$bn->id}}">{{$bn->brand}}</option>
                    @endforeach
                    </select>
                         
                        </div>
                        <div class="form-group ml-2">
                                        <select class="form-control form-control-lg" id="sel1" value="" name="car_model">
                    <option value="">Select Model</option>
                    @foreach($car_model as $md)
                    <option value="{{$md->id}}">{{$md->car_model}}</option>
                    @endforeach
        
                    </select>
                        </div>

                        <div class="form-group ml-2">
                            <select class="form-control form-control-lg" id="sel1" value="" name="color">
                    <option value="">Select Color</option>
                    @foreach($color as $cl)
                    <option value="{{$cl->id}}">{{$cl->color}}</option>
                    @endforeach
        
                    </select>
                        </div>

                        <div class="form-group ml-2">
                            <input type="submit" class="btn btn-primary btn-lg btn-serch" value="Search">
                        </div>
                    </form>
                </div>
            </div>
</div>
	</section>
    <!-- serach down -->
<div class="modal fade bd-example-modal-lg" id="search_car" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Wild West Hoodie</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="col-md-6">
            <img src="img/white-lamborghini-wallpaper-4.jpg" class="img-fluid">
        </div>
        <div class="col-md-6">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- serach up -->
	<section class="features bg-light text-center">
    <div class="container">
        <h2 class="mb-5">Latest Products</h2>
        <div class="slider slick-carousel">
    <div class="slide"><img src="img/11206.jpg" class="img-fluid"></div>
    <div class="slide"><img src="img/43064.jpg" class="img-fluid"></div>
    <div class="slide"><img src="img/459359.jpg" class="img-fluid"></div>
    <div class="slide"><img src="img/car-wallpaper-7.jpg" class="img-fluid"></div>
    <div class="slide"><img src="img/chevrolet-cruze-2016-detaied-interior-03.jpg" class="img-fluid"></div>
  </div>
    </div>
</section>

<section class="upcoming bg-light text-center">
    <div class="container">
        <h2 class="mb-5">Upcoming Products</h2>
        <div class="slider slick-carousel">
    <div class="slide"><img src="img/ferrari_red_cars_sport_95424_1920x1080.jpg" class="img-fluid"></div>
    <div class="slide"><img src="img/qG7kFeQ.jpg" class="img-fluid"></div>
    <div class="slide"><img src="img/thumb-1920-291473.jpg" class="img-fluid"></div>
    <div class="slide"><img src="img/white-lamborghini-wallpaper-4.jpg" class="img-fluid"></div>
    <div class="slide"><img src="img/ytuEqsy.jpg" class="img-fluid"></div>
  </div>
    </div>
</section>
	
<section class="showdiv">
	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-6 order-lg-2 showdiv-img1"></div>
			<div class="col-lg-6 order-lg-1 text-center showdiv-text">

				<h2>Some Content Here</h2>
				<p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam in dapibus odio. Praesent ac dignissim ante, a placerat velit. Donec pretium nisi at mauris finibus rutrum eu a leo. Maecenas non diam lacus.</p>
			</div>
		</div>
	</div>

	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-6 showdiv-img2"></div>
			<div class="col-lg-6 text-center showdiv-text">

				<h2>Some Content Here</h2>
				<p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam in dapibus odio. Praesent ac dignissim ante, a placerat velit. Donec pretium nisi at mauris finibus rutrum eu a leo. Maecenas non diam lacus.</p>
			</div>
		</div>
	</div>

	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-6 order-lg-2 showdiv-img3"></div>
			<div class="col-lg-6 order-lg-1 text-center showdiv-text">

				<h2>Some Content Here</h2>
				<p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam in dapibus odio. Praesent ac dignissim ante, a placerat velit. Donec pretium nisi at mauris finibus rutrum eu a leo. Maecenas non diam lacus.</p>
			</div>
		</div>
	</div>
</section>

<section class="carousel-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="carousel slide" data-ride="carousel" id="myCar" data-interval="2000">
                    <div class="carousel-inner">
                        <div class="carousel-item active text-right">
                            <h1>City Car Bazar</h1>
                        </div>
                        <div class="carousel-item text-left">
                            <h1>City Car Bazar</h1>
                        </div>
                        <div class="carousel-item text-right">
                            <h1>City Car Bazar</h1>
                        </div>
                        <div class="carousel-item text-center">
                            <h1>City Car Bazar</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>	


<section class="clients bg-light text-center">
<div class="container client">
	<h2 class="">What Clients Say About Us</h2>
	<div class="row">
		<div class="col-lg-4">
			<div class="clients-item">
				<img src="img/ClientImage(2).png" class="img-fluid rounded-circle" width="150px">
				<h5>Client 1</h5>
				<p class="">Good Website, fantastic to use</p>
			</div>
		</div>

		<div class="col-lg-4">
			<div class="clients-item">
				<img src="img/clientimage.jpg" class="img-fluid rounded-circle" width="150px">
				<h5>Client 2</h5>
				<p class="">Good Website, fantastic to use</p>
			</div>
		</div>

		<div class="col-lg-4">
			<div class="clients-item">
				<img src="img/Wickenden-Phil.Soherestheplan.2014-CUTOUT-e1520435620452-370x302.jpg" class="img-fluid rounded-circle" width="150px">
				<h5>Client 3</h5>
				<p class="">Good Website, fantastic to use</p>
			</div>
		</div>
	</div>
</div>

</section>
@include('layouts.footer')

</body>
</html>
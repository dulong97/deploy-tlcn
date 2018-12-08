@extends('layout.user.master')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('lib/styles/single_listing_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('lib/styles/single_listing_responsive.css')}}">
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" style="background-image:url({{asset('images/single_background.jpg')}})">
		</div>
		<div class="home_content">
			<div class="home_title">thông tin quán ăn</div>
		</div>
	</div>

	<!-- Offers -->

	<div class="listing">

		<!-- Search -->
		<!-- Single Listing -->

		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="single_listing">
						
						<!-- Hotel Info -->

						<div class="hotel_info">

							<!-- Title -->
							<div class="hotel_title_container d-flex flex-lg-row flex-column">
								<div class="hotel_title_content">
									<h1 class="hotel_title">{{$quanan->name}}</h1>
									<div class="rating_r rating_r_4 hotel_rating">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<div class="hotel_location">{{$address->name}} Đường {{$address->streets->name}} {{$address->wards->_prefix}}
											{{$address->wards->name}} {{$address->districts->_prefix}} {{$address->districts->name}} 
											<b> {{$address->provinces->name}}</b></div>
								</div>
								<div class="hotel_title_button ml-lg-auto text-lg-right">
									<div class="hotel_map_link_container">
										<div class="hotel_map_link">See Location on Map</div>
									</div>
								</div>
							</div>

							<!-- Listing Image -->

							<div class="hotel_image">
								<img src="{{asset('images/'.$quanan->image)}}" alt="">
								<div class="hotel_review_container d-flex flex-column align-items-center justify-content-center">
									<div class="hotel_review">
										<div class="hotel_review_content">
											<div class="hotel_review_title">very good</div>
											<div class="hotel_review_subtitle">100 reviews</div>
										</div>
										<div class="hotel_review_rating text-center">8.1</div>
									</div>
								</div>
							</div>

							<!-- Hotel Info Tags -->

							<div class="hotel_info_tags">
								<ul class="hotel_icons_list">
									<li class="hotel_icons_item"><img src="images/post.png" alt=""></li>
									<li class="hotel_icons_item"><img src="images/compass.png" alt=""></li>
									<li class="hotel_icons_item"><img src="images/bicycle.png" alt=""></li>
									<li class="hotel_icons_item"><img src="images/sailboat.png" alt=""></li>
								</ul>
							</div>

						</div>
						
						<!-- Rooms -->
						<div class="location_on_map_title">Danh sách món ăn quán</div>
						<div class="rooms">
							@foreach($monans as $monan)
							<!-- Room -->
							<div class="room">

								<!-- Room -->
								<div class="row">
									<div class="col-lg-2">
										<div class="room_image"><img src="{{asset('images/'.$monan->image)}}" alt="https://unsplash.com/@grovemade"></div>
									</div>
									<div class="col-lg-7">
										<div class="room_content">
											<div class="room_title">{{$monan->name}}</div>
											<div class="room_price">{{number_format($monan->price)}} VND/{{$monan->moTa}}</div>
											<!-- <div class="room_text">FREE cancellation before 23:59 on 20 December 2017</div>
											<div class="room_extra">Breakfast $7.50</div> -->
										</div>
									</div>
									<!-- <div class="col-lg-3 text-lg-right">
										<div class="room_button">
											<div class="button book_button trans_200"><a href="#">book<span></span><span></span><span></span></a></div>
										</div>
									</div> -->
								</div>	
							</div>
							@endforeach
						</div>

						<!-- Reviews -->

						<div class="reviews">
							<div class="reviews_title">reviews</div>
							<div class="reviews_container">

								<!-- Review -->
								<div class="review">
									<div class="row">
										<div class="col-lg-1">
											<div class="review_image">
												<img src="images/review_1.jpg" alt="https://unsplash.com/@saaout">
											</div>
										</div>
										<div class="col-lg-11">
											<div class="review_content">
												<div class="review_title_container">
													<div class="review_title">"We loved the services"</div>
													<div class="review_rating">9.5</div>
												</div>
												<div class="review_text">
													<p>Tetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vulputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer elementum orci eu vehicula pretium. Donec bibendum tristique condimentum.</p>
												</div>
												<div class="review_name">Christinne Smith</div>
												<div class="review_date">12 November 2017</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Review -->
								<div class="review">
									<div class="row">
										<div class="col-lg-1">
											<div class="review_image">
												<img src="images/review_2.jpg" alt="Image by Andrew Robles">
											</div>
										</div>
										<div class="col-lg-11">
											<div class="review_content">
												<div class="review_title_container">
													<div class="review_title">"Nice staff and great location"</div>
													<div class="review_rating">9.5</div>
												</div>
												<div class="review_text">
													<p>Tetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vulputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer elementum orci eu vehicula pretium. Donec bibendum tristique condimentum.</p>
												</div>
												<div class="review_name">Christinne Smith</div>
												<div class="review_date">12 November 2017</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>

						<!-- Location on Map -->

						<div class="location_on_map">
							<div class="location_on_map_title">location on map</div>

							<!-- Google Map -->
		
							<div class="travelix_map">
								<div id="google_map" class="google_map">
									<div class="map_container">
										<div id="map"></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	@endsection
@extends('layout.user.master')
@section('content')
	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->
		
		<div class="home_slider_container">
			
			<div class="owl-carousel owl-theme home_slider">
	
				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/adv/home_slider2.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>tìm quán chay</h1>
							<h1>dragondy.vn</h1>
						</div>
						<div class="mouse_scroll">
							<div class="mouse">
								<div class="wheel"></div>
							</div>
							<div>
								<span class="m_scroll_arrows unu"></span>
								<span class="m_scroll_arrows doi"></span>
								<span class="m_scroll_arrows trei"></span>
							</div>
						</div>
					</div>

				</div>
				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@anikindimitry -->
					<div class="home_slider_background" style="background-image:url(images/adv/home_slider.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>cơm trộn</h1>
							<h1> bách thảo</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">Chi tiết<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/adv/home_slider1.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>khai trương</h1>
							<h1>thiên di quán</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">Chi tiết<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>
				
			</div>
			
			
			<!-- Home Slider Dots -->

			<div class="home_slider_dots">
				<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
					<li class="home_slider_custom_dot active"><div></div>01.</li>
					<li class="home_slider_custom_dot"><div></div>02.</li>
					<li class="home_slider_custom_dot"><div></div>03.</li>
				</ul>
			</div>
			
		</div>
		
</div>
	</div>

	<!-- Search -->

	<div class="search">
		

		<!-- Search Contents -->
		
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="col fill_height">

					<!-- Search Tabs -->

					<div class="search_tabs_container">
						<div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/suitcase.png" alt=""><span>Tìm quán theo địa điểm</span></div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/bus.png" alt="">tìm quán theo dánh giá</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/bus.png" alt="">tìm món ăn</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/cruise.png" alt="">tìm trên bản đồ</div>
						</div>		
					</div>
					<!-- Search Panel -->
					<div class="search_panel active">
						<form action="{{url('timkiem')}}" method="post" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								@csrf
								<div>tỉnh</div>
								<select name="province" id="province_1" class="dropdown_item_select search_input" required>
									<option disabled selected value>Chọn địa điểm</option>
									@foreach($provinces as $province)
									<option value="{{$province->id}}">{{$province->_name}}</option>
									@endforeach
								</select>
							</div>
							<div class="search_item">
								<div>quận/huyện</div>
								<select name="district" id="district_1" class="dropdown_item_select search_input">
									
								</select>
							</div>
							<div class="search_item">
								<div>xã/phường</div>
								<select name="ward" id="ward_1" class="dropdown_item_select search_input">
								
								</select>
							</div>
							<div class="search_item">
								<div>đường/phố</div>
								<select name="street" id="street_1" class="dropdown_item_select search_input">
									
								</select>
							</div>
							<button class="button search_button">find<span></span><span></span><span></span></button>
						</form>
					</div>
					
					<!-- Search Panel -->

					<div class="search_panel">
						<form action="#" id="search_form_2" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>destination</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_2" class="dropdown_item_select search_input">
									<option>01</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_2" class="dropdown_item_select search_input">
									<option>0</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<button class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Quan An -->
	
	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
						<h2 class="intro_title text-center">Quán ăn nổi tiếng</h2>
				</div>
			</div>
			<!-- <div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="intro_text text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. </p>
					</div>
				</div>
			</div> -->
			<div class="row intro_items">

				<!-- Quan An Item -->
			@foreach($quanans as $quanan)
				<div class="col-lg-4 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<!-- Image by https://unsplash.com/@dnevozhai -->
						<div class="intro_item_background" style="background-image:url(images/{{$quanan->image}})"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							<div class="intro_date">{{$quanan->created_at}}</div>
							<div class="button intro_button"><div class="button_bcg"></div><a href="{{action('U_homepageController@quanan', $quanan->_id)}}">see more<span></span><span></span><span></span></a></div>
							<div class="intro_center text-center">
								<h1>{{$quanan->name}}</h1>
								<div class="intro_price">{{$quanan->soLike}} likes</div>
								<div class="rating rating_4">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			@endforeach
				</div>
			</div>
		</div>



	<!-- Mon An -->

	<div class="offers">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h2 class="section_title">Món ăn nổi tiếng </h2>
				</div>
			</div>
			<div class="row offers_items">

				<!-- Mon An Item -->
				@foreach($monans as $monan)
				<div class="col-lg-6 offers_col">
					<div class="offers_item">
						<div class="row">
							<div class="col-lg-6">
								<div class="offers_image_container">
									<!-- Image by https://unsplash.com/@kensuarez -->
									<div class="offers_image_background" style="background-image:url(images/{{$monan->image}})"></div>
									<div class="offer_name"><a href="#">{{$monan->name}}</a></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="offers_content">
									<div class="offers_price">{{number_format($monan->price)}} VND</div>
									<div class="rating_r rating_r_4 offers_rating">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p class="offers_text">{{$monan->quanans->name}}.</p>
									<div class="offers_icons">
										<ul class="offers_icons_list">
											<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
										</ul>
									</div>
									<div class="offers_link"><a href="offers.html">read more</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection
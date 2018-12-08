@extends('layout.user.master')
@section('content')
	<!-- Home -->

	<div class="home_timkiem">
		<div class="home_background parallax-window" data-parallax="scroll" style="background-image:url(../images/blog_background.jpg)"></div>
		<div class="home_content">
			<div class="home_title"></div>
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
								<select name="province" id="province_1" class="dropdown_item_select search_input" ">
									<option disabled selected value>Chọn địa điểm</option>
									@foreach($provinces as $province)
									<option value="{{$province->id}}">{{$province->_name}}</option>
									@endforeach
								</select>
							</div>
							<div class="search_item">
								<div>quận/huyện</div>
								<select name="district" id="district_1" class="dropdown_item_select search_input">
									<!-- @foreach($districts as $district)
									<option value="{{$district->id}}">{{$district->_name}}</option>
									@endforeach -->
								</select>
							</div>
							<div class="search_item">
								<div>xã/phường</div>
								<select name="ward" id="ward_1" class="dropdown_item_select search_input">
									<!-- @foreach($wards as $ward)
									<option value="{{$ward->id}}">{{$ward->_name}}</option>
									@endforeach -->
								</select>
							</div>
							<div class="search_item">
								<div>đường/phố</div>
								<select name="street" id="street_1" class="dropdown_item_select search_input">
									<!-- @foreach($streets as $street)
									<option value="{{$street->id}}">{{$street->_name}}</option>
									@endforeach -->
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

	<!-- Offers  -->
	<div style="min-height: 500px">
		<div class="col-lg-12">
					<!-- Offers Grid -->

			<div class="offers_grid">

						<!-- Offers Item -->
					@if(isset($message))
						<div class="notfound">Không tìm thấy quán chay nào ở địa chỉ này </div>
					@else
					@foreach($addresses as $address)
						<div class="offers_item rating_4">
							<div class="row">
								<div class="col-lg-1 temp_col"></div>
								<div class="col-lg-3 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@kensuarez -->
										<div class="offers_image_background" style="background-image:url(images/offer_1.jpg)"></div>
										<div class="offer_name"><a href="single_listing.html">{{$address->quanans->name}}</a></div>
									</div>
								</div>
								<div class="col-lg-8">
									<div class="offers_content">
										<div class="offers_price">{{$address->quanans->name}}</div>
										<div class="rating_r rating_r_4 offers_rating" data-rating="4">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">
											{{$address->name}} Đường {{$address->streets->name}} {{$address->wards->_prefix}}
											{{$address->wards->name}} {{$address->districts->_prefix}} {{$address->districts->name}} 
											<b> {{$address->provinces->name}}</b>
										</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
											</ul>
										</div>
										<div class="button book_button"><a href="#">chi tiết<span></span><span></span><span></span></a></div>
										<div class="offer_reviews">
											<div class="offer_reviews_content">
												<div class="offer_reviews_title">Tổng Đánh giá</div>
												<div class="offer_reviews_subtitle">49 đánh giá & nhận xét</div>
											</div>
											<div class="offer_reviews_rating text-center">{{$address->quanans->vote1}}</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach
						@endif
						<div class="text-center">
						</div>
						
					</div>
			</div>
	</div>
	

@endsection
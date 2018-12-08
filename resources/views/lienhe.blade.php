@extends('layout.user.master')
@section('content')
	<!-- Home -->

	<div class="home_timkiem">
		<div class="home_background parallax-window" data-parallax="scroll" style="background-image:url(../images/blog_background.jpg)"></div>
		<div class="home_content">
			<div class="home_title"></div>
		</div>
	</div>
	<!-- Contact -->

	<div class="contact_form_section">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Contact Form -->
					<div class="contact_form_container">
						<div id="title_contact" class="contact_title text-center">CHia sẽ quán ăn</div>
						<div id="form-messages" class="contact_address_name"></div>
						<div id="contact_div">
							<form  method="post" id="contact_form" class="contact_form text-center" action="quanan/add">
								@csrf
								<input type="text" id="name"  name="tenquanan" class="contact_form_name input_field" placeholder="Nhập vào tên quán ăn" data-error="Name is required." required>
								<!-- <textarea id="message"  name="message" class="text_field contact_form_message" rows="4" placeholder="Thông tin quán ăn"  data-error="Please, write us a message."></textarea> -->
								<button type="submit" id="form_submit_button" class="form_submit_button button trans_200">Tiếp theo <span></span><span></span><span></span></button>
							</form>	
						</div>
						<div id="address_div">
							<form   style="display: none;" method="post" id="address_form" class="contact_form text-center" action="quanan/add-address">
							@csrf
							<div id="form-address" class="select_contact d-flex justify-content-lg-between">
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
							 </div>
							<button type="submit" id="form_submit_button" class="form_submit_button button trans_200">Tiếp theo<span></span><span></span><span></span></button>
						</form>
					</div>
					</div>
				</div>
					<!-- Contact Form -->
					
					

				</div>
			</div>
		</div>
	</div>
	<div id="form-messages"></div>
@endsection
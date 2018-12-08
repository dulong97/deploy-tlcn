<select name="province" id="province_1" class="dropdown_item_select search_input" onchange="choice1(this)">
	@foreach($provinces as $province)
	<option value="{{$province->id}}">{{$province->_name}}</option>
	@endforeach
</select>
{{ HTML::script('js/validfun.js') }}
{{ HTML::script('js/countries.js') }}
{{ HTML::script('js/jcallback2.js') }}
{{ Form::open(['id' => 'callbackforminquerydiv']) }}
<div class="footerinq">
<div class="col-sm-12">
	
<div class="freq">
<img src="{{Theme::asset()->url('images/f-request.png');}}">
<div class="col-sm-2"> 
	<div class="form-field councode"> 
		<input type="text" value="+91" class="field-input" name="country_code1" id="country_code1" >
		<div id="codediv" style="color:red"></div>
		</div> 

	</div>
	<div class="col-sm-6">
	<div class="form-search clearfix"> 
		<div class="form-field field-destination"> 
			<input type="tel" class="field-input" placeholder="Request A Callback" name="mobile1" id="mobile1" pattern="[0-9]{10,10}" maxlength="10" required> 
			<div id="errordiv1" style="color:red"></div>
		</div> 
		
 		
		




</div>
	</div>
	<!-- <a class="awe-btn awe-btn-1 awe-btn-small f-inqreq" href="#" name="submitcallback" id="submitcallback">Submit</a> -->
	<button type="button" class="awe-btn awe-btn-1 awe-btn-small f-inqreq" id="submitcallback2" onclick="callbackValid1()">Submit</button>
	
	</div>

	{{ Form::close() }}
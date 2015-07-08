{{ HTML::script('js/validfun.js') }}
{{ HTML::script('js/jcallback.js') }}
{{ Form::open(['id' => 'callbackform']) }}
<div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModal" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">Request a Callback</h4>
						  </div>
						  <div class="modal-body">
							<div class="row">
							<div class="cart-number payment-form">
								<div class="col-xs-4">
									<div class="form-field">
										<input type="text" class="field-input" value="+91" id="country_code" name="country_code">
									</div>
								</div>
								<div class="col-xs-8">
									<div class="form-field">
										<input type="tel" class="field-input" placeholder=" Enter Your Mobile No" id="mobile" name="mobile" pattern="[0-9]{10,10}" maxlength="10" required >
									</div><div id="errordiv" style="color:red","font-family:courier"></div>
									
								</div>
							</div>
							</div>
						  </div>
						  <div class="modal-footer">
							<button type="button" class="awe-btn awe-btn-2 awe-btn-smallawe-btn awe-btn-2 awe-btn-small" id="submitcallback" onclick="callbackValid()">Submit</button>
						  </div>
						</div>
					  </div>
				</div>
				{{Form::close()}}
<!-- {{ HTML::script('js/jcallback.js') }} -->

{{ HTML::script('js/inqueryshow.js') }}
<div class="title-wrap indutab">
			<div class="container">
				<div class="travel-title float-left">
					<!-- <h2>Inquiry</h2> -->
					<div class="title-inq"><h2 id="Inquiry">Send An Inquiry</h2></div>
				</div>
			</div>
		</div>
		<div class="inq-back">
		<div class="container">
        <div class="element-cn">
		<!--	<ul class="tabs-head nav-tabs-one">
				<li class="active"><a data-toggle="tab" href="#section1">1</a></li>
				<li><a data-toggle="tab" href="#section2">2</a></li>
				<li><a data-toggle="tab" href="#section3">3</a></li>
			</ul> -->
			<div class="tab-content">
				<div id="section1" class="tab-pane fade in active inq payment-form">
					<div class="col-sm-12">
					
								{{ Theme::partial('inqueryform') }}
								<div class="col-sm-6">
									{{ Theme::partial('callbackforminquerydiv') }}
									</div>
									<div class="col-sm-12">
										<div class="fcall">
										<img src="{{Theme::asset()->url('images/f-phone.png');}}"><span>+91 9825081806</span>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="fmail">
										<img src="{{Theme::asset()->url('images/f-email.png');}}"><a href="world@flamingotravels.co.in">world@flamingotravels.co.in
</a>									
									</div>
									</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="widget col-md-12 kd-followus-widget">
										<!-- <div class="kd-widget-title"><h2>Follow Us</h2></div> -->
										<ul>
										  <li><a href="#" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
										  <li><a href="#" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
										  <li><a href="#" data-original-title="Google-Plus"><i class="fa fa-google-plus"></i></a></li>
										  <li><a href="#" data-original-title="Youtube"><i class="fa fa-youtube"></i></a></li>
										  <li><a href="#" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
										  <li><a href="#" data-original-title="instagram"><i class="fa fa-instagram"></i></a></li>
										  <li><a href="#" data-original-title="skype"><i class="fa fa-skype"></i></a></li>
										</ul>
									  </div>
								</div>
								</div>
								
								
								
								
									<!--<label for="inputPassword3" class="col-sm-4 control-label">Your City<span class="star">*</span></label>-->
                            
							<!-- <div class="form-group">
                                <div class="col-sm-6">
								<div class="form-search clearfix">
                                    <div class="form-field field-destination">
									<label for="name">
											Travel to Destination
											<sup>*</sup>
									</label>
										<input type="text" class="field-input">
									</div>
									</div>
                                </div>
								<div class="col-sm-6">
									<div class="form-search clearfix">
										<div class="form-field field-date">
											<input type="text" class="field-input calendar-input" placeholder="Travel Date">
										</div>
									</div>
                                </div>
								</div> -->
								
								<!-- <div class="form-group">
								<div class="col-sm-6">
										<div class="form-search clearfix">
											<div class="form-field">
												<div class="select">
												<span>Travel Month</span>
													<select>
													<option value="January" selected>January</option>
													<option value="February" selected>February</option>
													<option value="March" selected>March</option>
													<option value="April" selected>April</option>
													<option value="May" selected>May</option>
													<option value="June" selected>June</option>
													<option value="July" selected>July</option>
													<option value="August" selected>August</option>
													<option value="September" selected>September</option>
													<option value="October" selected>October</option>
													<option value="November" selected>November</option>
													<option value="December" selected>December</option>
												</select>
												</div>
											</div>
										</div>
								</div>
								<div class="col-sm-6">
										<div class="form-search clearfix">
											<div class="form-field">
												<div class="select">
												<span>Reference</span>
													<select>
													<option value="Google Search" selected>Google Search</option>
													<option value="Live Chat On Our Website" selected>Live Chat On Our Website</option>
													<option value="News & Media" selected>News & Media</option>
													<option value="Google Advert" selected>Google Advert</option>
													<option value="Phone Call" selected>Phone Call</option>
													<option value="Your Friend" selected>Your Friend</option>
												</select>
												</div>
											</div>
										</div>
								</div>
								</div> -->

                            <!-- <div class="form-group">
                                <div class="col-sm-12">
								<div class="form-search clearfix">
                                    <div class="form-field field-destination">
									<label for="name">
											Remarks
									</label>
										<input type="text" class="field-input">
									</div>
								</div>
                                </div>
                            </div> -->
                            
                            </form>
                        </div>
						<div id="section2" class="tab-pane fade inq payment-form">
                            <!--<p>Second tab content...</p>-->
                            <form class="form-horizontal padding-all" role="form" method="post" action=""
                            enctype="multipart/form-data" id="ticket">
                            
                                <!--<label for="inputEmail3" class="col-sm-4 control-label">Name<span class="star">*</span></label>-->
                                <div class="row">
								<div class="col-sm-6">
                                    <div class="form-search clearfix">
										<div class="form-field field-destination">
										<label for="name">
											Travel to Destination
											<sup>*</sup>
										</label>
											<input type="text" class="field-input">
										</div>
									</div>
                                </div>
								</div>
								<div class="row">
                                <div class="col-sm-6">
                                    
										<div class="form-search clearfix">
											<div class="form-field">
												<div class="select">
												<span>Travel Month</span>
													<select>
													<option value="January" selected>January</option>
													<option value="February" selected>February</option>
													<option value="March" selected>March</option>
													<option value="April" selected>April</option>
													<option value="May" selected>May</option>
													<option value="June" selected>June</option>
													<option value="July" selected>July</option>
													<option value="August" selected>August</option>
													<option value="September" selected>September</option>
													<option value="October" selected>October</option>
													<option value="November" selected>November</option>
													<option value="December" selected>December</option>
												</select>
												</div>
											</div>
										</div>
								
                                </div>
								</div>
                            
                            <div class="row">
								<div class="col-sm-6">
                                    <div class="form-search clearfix">
										<div class="form-field">
											<div class="select">
											<span>Theme</span>
										<select>
											<option>Theme</option>
											<option value="Leisure " selected>Leisure</option>
											<option value="Historical " selected>Historical</option>
											<option value="Adventure " selected>Adventure</option>
										</select>
											</div>
										</div>
									</div>
                                </div>
								</div>
                                <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-search clearfix">
										<div class="form-field">
											<div class="select">
											<span>Budget</span>
										<select>
											<option>Budget</option>
											<option value="Delhi" selected>Rs 50,000</option>
											<option value="Mumbai" selected>Rs 100,000</option>
											<option value="Mumbai" selected>Rs 200,000</option>
											<option value="Mumbai" selected>Rs 300,000</option>
										</select>
											</div>
										</div>
									</div>
                                </div>
								</div>
								
                            
                            
                           <!-- <div class="form-group">
                                <div class="col-sm-3">
                                    <div class="form-search clearfix">
										<div class="form-field">
											<div class="select">
											<span>Trip Type <sup>*</sup></span>
											<select>
												<option value="Alaska" selected>Domestic</option>
												<option value="Australia" selected>International </option>
											</select>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="form-search clearfix">
										<div class="form-field">
											<input type="radio" name="way" value="One Way" onclick="javascript:yesnoCheck();"
												id="yesCheck" checked />
												One Way&nbsp;&nbsp;
											<input type="radio" name="way" value="Round Trip" onclick="javascript:yesnoCheck();"
												id="noCheck" />
												Round Trip
										</div>
									</div>
								</div>
								<div class="col-sm-3">
                                    <div class="form-search clearfix">
										<div class="form-field">
											<div class="select">
											<span>Form City <sup>*</sup></span>
										<select>
											<option value="Ahmedabad" selected>Ahmedabad</option>
											<option value="Rajkot" selected>Rajkot</option>
										</select>
											</div>
										</div>
									</div>
                                </div>
								<div class="col-sm-3">
                                    <div class="form-search clearfix">
										<div class="form-field">
											<div class="select">
											<span>To City</span>
										<select>
											<option value="Delhi" selected>Delhi</option>
											<option value="Mumbai" selected>Mumbai</option>
										</select>
											</div>
										</div>
									</div>
                                </div>
								</div>  -->
								
								<!-- <div class="form-group">
									<div class="col-sm-3">
										<div class="form-search clearfix">
											<div class="form-field field-date">
												<input type="text" class="field-input calendar-input" placeholder="Travel Date">
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-search clearfix">
											<div class="form-field field-date">
												<input type="text" class="field-input calendar-input" placeholder="Return Date">
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-search clearfix">
											<div class="form-field">
												<div class="select">
												<span>Travel Month</span>
													<select>
													<option value="January" selected>January</option>
													<option value="February" selected>February</option>
													<option value="March" selected>March</option>
													<option value="April" selected>April</option>
													<option value="May" selected>May</option>
													<option value="June" selected>June</option>
													<option value="July" selected>July</option>
													<option value="August" selected>August</option>
													<option value="September" selected>September</option>
													<option value="October" selected>October</option>
													<option value="November" selected>November</option>
													<option value="December" selected>December</option>
												</select>
												</div>
											</div>
										</div>
								</div>
								</div>  -->
								
								
								<!-- <div class="form-group">
								<div class="col-sm-6">
                                    <div class="form-search clearfix">
										<div class="form-field">
											<div class="select">
											<span>Reference</span>
										<select>
											<option value="Google Search" selected>Google Search</option>
											<option value="Live Chat On Our Website" selected>Live Chat On Our Website</option>
											<option value="News & Media" selected>News & Media</option>
											<option value="Google Advert" selected>Google Advert</option>
											<option value="Phone Call" selected>Phone Call</option>
											<option value="Your Friend" selected>Your Friend</option>
										</select>
											</div>
										</div>
									</div>
									</div>
                                <div class="col-sm-6">
                                    <div class="form-search clearfix">
										<div class="form-field field-destination">
										<label for="name">
											Remarks
										</label>
											<input type="text" class="field-input">
										</div>
									</div>
                                </div>
                            
							</div> -->
                            <div class="bg-form-footer set-bg-form-footer">
                                <!--<button class="btn btn-danger" type="submit" id="btnsubmit">Submit</button>-->
                                <input type="submit" class="awe-btn awe-btn-1 awe-btn-small" id="btnsubmit" value="Submit" name="submit" />
                            </div>
                            </form>
                        
				</div>
				<div id="section3" class="tab-pane fade inq payment-form">
					
                            <form class="form-horizontal padding-all" role="form" method="post" action=""
                            enctype="multipart/form-data" id="visa">
                            
                                
                                <div class="row">
								<div class="col-sm-6">
									<div class="form-search clearfix">
										<div class="form-field">
											<div class="select">
											<span>Your Preferred Communication Mode</span>
											<select>
											  <option>Your Preferred Communication Mode</option>
											  <option value="Call">Call</option>
											  <option value="Email">Email</option>
											  <option value="Personal Visit">Personal Visit</option>
											</select>
											</div>
										</div>
									</div>
								</div>
								</div>
                            
                                <div class="row">
                                <div class="col-sm-6">
									<div class="form-search clearfix">
										<div class="form-field">
											<div class="select">
											<span>Your Preferred Communication Time</span>
											<select>
											  <option>Your Preferred Communication Time</option>
											  <option value="Morning">Morning</option>
											  <option value="Afternoon">Afternoon</option>
											  <option value="Evening">Evening</option>
											</select>
											</div>
										</div>
									</div>
								</div>
								</div>
                            
							<div class="row">
								<div class="col-sm-6">
									<div class="form-search clearfix">
										<div class="form-field">
											<div class="select">
											<span>How did you discover us?</span>
											<select>
											  <option>How did you discover us?</option>
											  <option value="Google Search">Google Search</option>
											  <option value="Live Chat On Our Website">Live Chat On Our Website</option>
										      <option value="News & Media">News & Media</option>
										      <option value="Google Advert" selected>Google Advert</option>
										      <option value="Phone Call" selected>Phone Call</option>
										      <option value="Your Friend" selected>Your Friend</option>
											</select>
											</div>
										</div>
									</div>
								</div>
								</div>
								<div class="row">
                                <div class="col-sm-6">
                                    <div class="form-search clearfix">
										<div class="form-field field-destination">
										<label for="name">
											Remarks
										</label>
											<input type="text" class="field-input">
										</div>
									</div>
                                </div>
								</div>
                            
							
							
							<!-- <div class="form-group">
                                
                                <div class="col-sm-6">
                                    <div class="form-search clearfix">
										<div class="form-field field-destination">
										<label for="name">
											Your City
											<sup>*</sup>
										</label>
											<input type="text" class="field-input">
										</div>
									</div>
                                </div>
                                <div class="col-sm-6">
								<div class="form-search clearfix">
                                    <div class="form-field field-destination">
										<label for="name">
											Travel to Destination
											<sup>*</sup>
										</label>
										<input type="text" class="field-input">
									</div>
									</div>
                                </div>
                            </div> -->
							
							
                           <!-- <div class="form-group">
                                
                                <div class="col-sm-3">
                                    <div class="form-search clearfix">
                                    <div class="form-field">
										<div class="select">
											<span>Visa Type <sup>*</sup></span>
											<select>
												  <option value="Domestic" selected>Domestic</option>
												  <option value="International" selected>International</option>
											</select>
										</div>
									</div>
								</div>
                                </div>
                                
                                <div class="col-sm-3">
                                    <div class="form-search clearfix">
                                    <div class="form-field field-destination">
										<label for="name">
											Purpose
										</label>
										<input type="text" class="field-input">
									</div>
								</div>
                                </div>
								<div class="col-sm-6">
                                    <div class="form-search clearfix">
										<div class="form-field field-date">
											<input type="text" class="field-input calendar-input" placeholder="Travel Date">
										</div>
									</div>
                                </div>
                            </div>  -->
							
							
                            <!-- <div class="form-group">
                            
                                <div class="col-sm-6">
										<div class="form-search clearfix">
											<div class="form-field">
												<div class="select">
												<span>Travel Month</span>
												<select>
												  <option value="January">January</option>
												  <option value="February">February</option>
												  <option value="March">March</option>
												  <option value="May" selected>May</option>
												  <option value="June" selected>June</option>
												  <option value="July" selected>July</option>
												  <option value="August" selected>August</option>
												  <option value="September" selected>September</option>
												  <option value="October" selected>October</option>
												  <option value="November" selected>November</option>
												  <option value="December" selected>December</option>
												</select>
												</div>
											</div>
										</div>
								</div>
                            
								<div class="col-sm-6">
                                    <div class="form-search clearfix">
										<div class="form-field">
										<div class="select">
											<span>Select Reference</span>
										<select>
										  <option value="volvo">Google Search</option>
										  <option value="saab">Live Chat On Our Website</option>
										  <option value="vw">News & Media</option>
										  <option value="audi" selected>Google Advert</option>
										  <option value="audi" selected>Phone Call</option>
										  <option value="audi" selected>Your Friend</option>
										</select>
										</div>
										</div>
									</div>
                                </div>
                            </div>  -->
							
                            <!-- <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="form-search clearfix">
										<div class="form-field field-destination">
										<label for="name">
											Remarks
										</label>
											<input type="text" class="field-input">
										</div>
									</div>
                                </div>
                            </div> -->
                            <div class="bg-form-footer set-bg-form-footer">
                                <!--<button class="btn btn-danger" type="submit" id="btnsubmit">Submit</button>-->
                                <input type="submit" class="awe-btn awe-btn-1 awe-btn-small" id="btnsubmit" value="Submit" name="submit" />
                            </div>
                            </form>
				</div>
			</div>
		</div>
		</div>
		</div>
<footer id="footer-widget">
      <div class="container">
        <div class="row">
          
          <div class="widget col-md-3 kd-textwidget">
            <div class="kd-widget-title"><h2>INTERNATIONAL</h2></div>
            <div class="kd-contactinfo">
				<a href="">Europe Holiday Packages</a><br>
				<a href="">Scandinavia Holiday Packages</a><br>
				<a href="">Australia Holiday Packages</a><br>
				<a href="">Hongkong Holiday Packages</a><br>
				<a href="">Japan Holiday Packages</a><br>
				<a href="">Kenya Holiday packages</a><br>
				<a href="">Newzeland Holiday Packages</a><br>
				<a href="">Singapore Holiday Packages</a><br>
				<a href="">South Africa Holiday Packages</a><br>
				<a href="">Thailand Holiday Packages</a><br>
				<a href="">Dubai Holiday Packages</a><br>
				<a href="">USA Holiday Packages</a><br>
            </div>
          </div>
		  
		  <div class="widget col-md-3 kd-textwidget">
            <div class="kd-widget-title"><h2>INDIA</h2></div>
            <div class="kd-contactinfo">
				<a href="">Andamans Holiday Packages</a><br>
				<a href="">Goa Holiday Packages</a><br>
				<a href="">Himachal Pradesh Holiday Packages</a><br>
				<a href="">Jammu & Kashmir Holiday Packages</a><br>
				<a href="">Karnataka Holiday Packages</a><br>
				<a href="">Kerala Holiday Packages</a><br>
				<a href="">Rajasthan Holiday Packages</a><br>
				<a href="">Uttranchal Holiday Packages</a><br>
				<a href="">West Bengal And Sikkim Holiday </a><br>
				<a href="">Packages</a><br>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 right-footer-border">
			<div class="kd-widget-title"><h2>Other Services</h2></div>
	 			<ul>
	 				<li><a href="">Flight</a></li>
	 				<li><a href="">FAQs</a></li>
					<li><a href="">Corporate</a></li>
	 				<li><a href="">Visa</a></li>
					<li><a href="">Sitemap</a></li>
	 				<li><a href="">Video Sitemap</a></li>
	 			</ul> 			
	 			<div class="kd-widget-title"><h2>Join Us</h2></div>
                <ul>
					<li><a href="">Blog</a></li>
					<li><a href="">News</a></li>
					<li><a href="">Career</a></li>
					<li><a href="">About Us</a></li>
					<li><a href="">Partner with Us</a></li>
					<li><a href="">Advertise With Us</a></li>
                    
				</ul>
 			
		<!-- <div class="widget col-md-12 kd-followus-widget">
            <div class="kd-widget-title"><h2>Follow Us</h2></div>
            <ul>
              <li><a href="#" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#" data-original-title="instagram"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#" data-original-title="Rss"><i class="fa fa-rss"></i></a></li>
              <li><a href="#" data-original-title="Youtube"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
              <li><a href="#" data-original-title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#" data-original-title="Google-Plus"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#" data-original-title="skype"><i class="fa fa-skype"></i></a></li>
            </ul>
          </div> -->
</div>
		  <div class="widget col-md-3 kd-userinfo-widget">
            <div class="kd-widget-title"><h2>Find US AT NEAR BY YOU</h2></div>
	 			<ul>
		 			<li class="form-group">
						 <select id="branch_id" name="branch_id" onchange="getBranch(this.value)" class="form-control">
						 	<option>--select city--</option>
																<option selected="" value="8">Ahmedabad</option>
																<option value="38">Porbander</option>
																<option value="39">Jodhpur - Rajasthan</option>
																<option value="40">Ahmedabad � Bodakdev</option>
																<option value="9">Ahmedabad - Prahaladnagar</option>
																<option value="10">Ahmedabad -Chandkheda</option>
																<option value="11">Anand - Shree Kala</option>
																<option value="12">Baroda</option>
																<option value="13">Bharuch</option>
																<option value="14">Bhavnagar</option>
																<option value="15">Bhuj</option>
																<option value="16">Gandhidham</option>
																<option value="17">Jamnagar</option>
																<option value="18">Junagadh</option>
																<option value="19">Mehsana</option>
																<option value="20">Morbi</option>
																<option value="21">Nadiad</option>
																<option value="22">Palanpur</option>
																<option value="23">Patan</option>
																<option value="24">Pune</option>
																<option value="25">Rajkot</option>
																<option value="26">Surat</option>
																<option value="27">Surendranagar</option>
																<option value="28">Vadodara</option>
																<option value="30">Vapi</option>
																<option value="32">Udaipur</option>
																<option value="33">Mumbai</option>
																<option value="37">Chennai</option>
																<option value="34">Bangalore</option>
																<option value="36">Unjha</option>
									 	
						 </select>
				 	</li>
				 
				 <li>
				 <div id="ajax_branch_detail">
					<h5>Flamingo Transworld Pvt. Ltd.</h5>
		 		 	<p>201/202, Gala Business Centre, St. Xaviers College Corner, Near Classic Gold Hotel, Off C. G. Road, Ahmedabad 380 009, Gujarat, India.</p>
	 		 		
		 		 	<h5>Mr. Alap Patel</h5>
	 		 			<p><img src="{{Theme::asset()->url('images/mobile.png');}}">&nbsp;&nbsp;&nbsp;0091 9825081806<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;079 40001500</p>
 		 			<p><img src="{{Theme::asset()->url('images/mail.png');}}">&nbsp;&nbsp;<a href="mailto:world@flamingotravels.co.in">world@flamingotravels.co.in</a></p></div>				 
						 			
	 				</li>
		 		</ul>
		 	</div>
          </div>
        </div>
      </div>
    </footer>
    <!--// Footer //-->
	<div class="footerlogo">
		<img src="{{Theme::asset()->url('images/client.png');}}">
	</div>
    <!--// CopyRight //-->
    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-6"><p>Copyright © 2015 Flamingo Transworld Pvt. Ltd. All Rights Reserved.</p>
								<p>Desinged and Developed by <a href="http://www.ambait.com/">Amba Infotech</a></p></div>
          <div class="col-md-6">
            <nav class="footer-nav">
              <ul>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Condition</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!--// CopyRight //-->
        <!-- End Footer -->
        
    </div>
    <a href="#0" class="cd-top">Top</a>
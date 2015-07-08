<!-- {{ HTML::script('js/jregister.js') }}
{{ HTML::script('js/regvalid.js') }} -->
<div class="headerpart">
<div id="topheader" class="topheader topbar">
	<div class="container">
		<div class="pull-left">
			<ul class="topbar-drops list-inline">
				<a href=""><li><i class="fa fa-envelope"></i>world@flamingotravels.co.in</li></a>
				<li><i class="fa fa-phone"></i>+91 9825081806</li>
			</ul><!-- end list-style -->
		</div><!-- end left -->
		<div class="pull-right">
			<ul class="topbar-social list-inline">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
				<li><span><a href="#" data-toggle="modal" data-target="#smallModal">Request a callback</a></span>
				<!-- <li><a href="#" data-toggle="modal" data-target="#largeModal">REGISTER</a> -->

				{{ Theme::partial('callbackform') }}
				<!-- {{ Theme::partial('registers')}} -->

				</li>
				<li><a href="">Register</a></li>
				<li><a href="">Login</a></li>
			</ul><!-- end list-style -->
		</div><!-- end right -->
	</div><!-- end container -->
</div>
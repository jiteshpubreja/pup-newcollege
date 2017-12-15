<div class="container ">
	<div class="navbar-header ">
		<div class="navbar-inverse hidden-lg">
			<div class="brand hidden-lg">
				<span style="color:white;">External Links</span>         
				<button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#myNavbar2">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
		</div>
		<div class="navbar-collapse collapse" id="myNavbar2">
			<ul class="nav nav-pills nav-stacked" id="myNavbar">
				<li class="{{ is_active('introduction') }}"><a href="{{ route('introduction') }}">Introduction</a></li>
				<li><a href="{{asset('VC_Biodata.pdf')}}" target="_blank">Meet the VC </a></li>
				<li class="{{ is_active('infrastructure') }}"><a href="{{ route('infrastructure') }}">Infrastructure</a></li>
				<li class="{{ is_active('agrade') }}"><a href="{{ route('agrade') }}">'A' Grade Status</a></li>
				<li class="{{ is_active('publication') }}"><a href="{{ route('publication') }}">Publication Bureau</a></li>
				<li class="{{ is_active('museum') }}"><a href="{{ route('museum') }}">Museum</a></li>

			</ul>
		</div>
	</div>
</div>
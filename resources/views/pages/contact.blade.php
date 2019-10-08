@extends('master')
@section('title', 'Contact')
@section('content')
	<div id="index-banner" class="parallax-container">
		<div class="section no-pad-bot">
			<div class="container">
				<br><br>
				<h1 class="header center text-border animated slideInDown">@lang('contact.contact')</h1>
			</div>
		</div>
		<div class="parallax"><img src="{{url('/images/contact.jpg')}}" alt="Background Image"></div>
	</div>
	
	<div class="container">
		<div class="section">
			
			<div class="row">
				<div class="col s12 center">
					<h1><i class="fas fa-envelope animated rotateIn"></i></h1>
					<p>
						@lang('contact.contact_me')
						<br>
						<a href="mailto:mail@ivoreumkens.nl">mail@ivoreumkens.nl</a>
					</p>
				</div>
			</div>
		
		</div>
	</div>
@stop
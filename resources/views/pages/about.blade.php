@extends('master')
@section('title', 'Over')
@section('content')
	<div id="index-banner" class="parallax-container">
		<div class="section no-pad-bot">
			<div class="container">
				<br><br>
				<h1 class="header center text-border animated slideInDown">@lang('about.about')</h1>
			</div>
		</div>
		<div class="parallax">
			<img src="{{url('/images/aboutme_2018.jpg')}}" alt="Background Image">
		</div>
	</div>

	<div class="container">
		<div class="section">

			<div class="row">
				<div class="col s12">
					<h1 class="center"><i class="fas fa-info-circle animated rotateIn"></i></h1>
                    <p>{{__('about.about_me_p_first', ['age' => $age])}}</p>
                    <p>@lang('about.about_me_p_second')</p>
                    <p>@lang('about.about_me_p_third')</p>
				</div>
			</div>

		</div>
	</div>
@stop

@extends('master')
@section('title', __('projects.' . $project . '_' . 'title') )
@section('content')
	<div id="index-banner" class="parallax-container">
		<div class="section no-pad-bot">
			<div class="container">
				<br><br>
				<h1 class="header center text-border animated slideInDown">@lang('projects.' . $project . '_' . 'title')</h1>
			</div>
		</div>
		<div class="parallax blur-image"><img src="{{url('/images/projects/'.$project.'.jpg')}}" alt="Background Image"></div>
	</div>
	
	<div class="container">
		<div class="section">
			
			<div class="row">
				<div class="col s12 animated fadeIn">
					
					<h3 class="center">@lang('projects.description')</h3>
					<p>
						@lang('projects.' . $project . '_' . 'description')
					</p>
					<p>
						<i class="fas fa-link font-weight-bold"></i> :
						@if (__('projects.' . $project . '_' . 'url') == '')
							<span class="font-weight-light">@lang('projects.no_link')</span>
						@else
							<a href="@lang('projects.' . $project . '_' . 'url')" target="_blank">
								@lang('projects.' . $project . '_' . 'url')
							</a>
						@endif
					</p>
				</div>
			</div>
		
		</div>
	</div>
@stop
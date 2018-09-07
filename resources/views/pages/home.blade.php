@extends('master')
@section('title', 'Home')
@section('head')
	<link href="/css/masthead.css" type="text/css" rel="stylesheet"/>
@stop
@section('content')
	
	<div class="masthead">
		<div class="masthead-contents">
			<div class="masthead-text">
				<h1 class="animated slideInDown">Ivo Reumkens</h1>
				<p class="animated slideInDown">@lang('work.undertitle')</p>
				<div class="masthead-arrow-container animated rotateIn">
					<div class="masthead-arrow"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="masthead-placeholder"></div>
	
	<div class="extra-background" id="work">
		<div class="container" id="Projects">
			
			<div class="section">
				
				<div class="row">
					<div class="col s12 m4">
						<div class="icon-block">
							
							<div class="center project_photo_box">
								<a href="/work/attent">
									<img src="/images/projects/attent_big.jpg" class="project_photo"/>
								</a>
							</div>
							
							<h5 class="center">@lang('projects.attent_title')</h5>
							
							<p class="light">@lang('projects.attent_description_short')</p>
							<div class="center hide-on-med-and-up">
								<a href="/work/attent" class="waves-effect waves-light btn orange">
									@lang('work.more_information')
								</a>
								<br><br>
							</div>
						</div>
					</div>
					
					<div class="col s12 m4">
						<div class="icon-block">
							
							<div class="center project_photo_box">
								<a href="/work/ubuntufan">
									<img src="/images/projects/ubuntufan_big.jpg" class="project_photo"/>
								</a>
							</div>
							
							<h5 class="center">@lang('projects.ubuntufan_title')</h5>
							
							<p class="light">
								@lang('projects.ubuntufan_description_short')
							</p>
							<div class="center hide-on-med-and-up">
								<a href="/work/ubuntufan" class="waves-effect waves-light btn orange">
									@lang('work.more_information')
								</a>
								<br><br>
							</div>
						</div>
					</div>
					
					<div class="col s12 m4">
						<div class="icon-block">
							
							<div class="center project_photo_box">
								<a href="/work/timeline">
									<img src="/images/projects/timeline_big.jpg" class="project_photo"/>
								</a>
							</div>
							
							<h5 class="center">@lang('projects.timeline_title')</h5>
							
							<p class="light">
								@lang('projects.timeline_description_short')
							</p>
							<div class="center hide-on-med-and-up">
								<a href="/work/timeline" class="waves-effect waves-light btn orange">
									@lang('work.more_information')
								</a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row center hide-on-small-and-down">
					<div class="col s12 m4">
						<a href="/work/attent" class="waves-effect waves-light btn orange">
							@lang('work.more_information')
						</a>
					</div>
					<div class="col s12 m4">
						<a href="/work/ubuntufan" class="waves-effect waves-light btn orange">
							@lang('work.more_information')
						</a>
					</div>
					<div class="col s12 m4">
						<a href="/work/timeline" class="waves-effect waves-light btn orange">
							@lang('work.more_information')
						</a>
					</div>
					<br><br><br>
				</div>
				
				<div class="row">
					<div class="col s12 m4">
						<div class="icon-block">
							
							<div class="center project_photo_box">
								<a href="/work/dionscape">
									<img src="/images/projects/dionscape.jpg" class="project_photo"/>
								</a>
							</div>
							
							<h5 class="center">@lang('projects.dionscape_title')</h5>
							
							<p class="light">
								@lang('projects.dionscape_description_short')
							</p>
							<div class="center hide-on-med-and-up">
								<a href="/work/dionscape" class="waves-effect waves-light btn orange">
									@lang('work.more_information')
								</a>
								<br><br>
							</div>
						</div>
					</div>
					
					<div class="col s12 m4">
						<div class="icon-block">
							
							<div class="center project_photo_box">
								<a href="/work/sudoku">
									<img src="/images/projects/sudoku.jpg" class="project_photo"/>
								</a>
							</div>
							
							<h5 class="center">@lang('projects.sudoku_title')</h5>
							
							<p class="light">
								@lang('projects.sudoku_description_short')
							</p>
							<div class="center hide-on-med-and-up">
								<a href="/work/sudoku" class="waves-effect waves-light btn orange">
									@lang('work.more_information')
								</a>
								<br><br>
							</div>
						</div>
					</div>
					
					<div class="col s12 m4">
						<div class="icon-block">
							
							<div class="center project_photo_box">
								<a href="/work/famouspeopleriddle">
									<img src="/images/projects/famouspeopleriddle.jpg" class="project_photo"/>
								</a>
							</div>
							
							<h5 class="center">@lang('projects.famouspeopleriddle_title')</h5>
							
							<p class="light">
								@lang('projects.famouspeopleriddle_description_short')
							</p>
							<div class="center hide-on-med-and-up">
								<a href="/work/famouspeopleriddle" class="waves-effect waves-light btn orange">
									@lang('work.more_information')
								</a>
								<br><br>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row center hide-on-small-and-down">
					<div class="col s12 m4">
						<a href="/work/dionscape" class="waves-effect waves-light btn orange">
							@lang('work.more_information')
						</a>
					</div>
					<div class="col s12 m4">
						<a href="/work/sudoku" class="waves-effect waves-light btn orange">
							@lang('work.more_information')
						</a>
					</div>
					<div class="col s12 m4">
						<a href="/work/famouspeopleriddle" class="waves-effect waves-light btn orange">
							@lang('work.more_information')
						</a>
					</div>
				</div>
			
			</div>
		</div>
	</div>
	
	<div class="parallax-container valign-wrapper">
		<div class="section no-pad-bot">
			<div class="container">
				<div class="row center">
					<h5 class="header col s12 light"></h5>
				</div>
			</div>
		</div>
		<div class="parallax"><img src="/images/contact.jpg" alt="Background"></div>
	</div>
@stop
@section('scripts')
	{{-- Text fade-in/out script --}}
	<script>
        $(window).scroll(function () {
            $(".masthead-text").css("opacity", 1 - $(window).scrollTop() / 400);
        });
	</script>
@stop

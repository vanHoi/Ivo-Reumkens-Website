@extends('master')
@section('head')
	<title>Ivo Reumkens</title>
@stop
@section('content')
	
	<div id="index-banner" class="parallax-container">
		<div class="section no-pad-bot">
			<div class="container">
				<br><br>
				<h1 class="header center orange-text text-darken-3">Fout - 404</h1>
				<div class="row center">
					<h5 class="header col s11 orange-text text-darken-4">Er is iets mis gegaan! We konden deze pagina niet vinden.</h5>
				</div>
				<div class="row center">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/t3otBjVZzT0?rel=0" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="row center">
					<a href="{{url('/')}}" class="btn-large waves-effect waves-light orange lighten-1">Terug naar home</a>
				</div>
				<br><br>
			
			</div>
		</div>
		<div class="parallax"><img src="{{url('/images/background1.jpg')}}" alt="Background Image"></div>
	</div>

@stop
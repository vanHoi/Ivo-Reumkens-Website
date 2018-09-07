<!DOCTYPE html>
<html lang="{{ $language }}">
<head>
	@include('includes.head')
	<title>Ivo Reumkens - @yield('title')</title>
	@yield('head')
</head>
<body class="site">

<header>
	@include('includes.menu')
</header>

<main class="site-content">
	@yield('content')
</main>

@include('includes.footer')

@include('includes.scripts')
@yield('scripts')

</body>
</html>

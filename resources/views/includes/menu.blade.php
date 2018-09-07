<nav class="white" role="navigation">
	<div class="nav-wrapper container">
		<a id="logo-container" href="/" class="brand-logo">
			<img src="/images/logo.png" height="25px" alt="Ivo Reumkens"/>
		</a>
		<ul class="right hide-on-med-and-down">
			<li><a href="/">@lang('menu.work')</a></li>
			{{--<li><a href="/">@lang('menu.home')</a></li>
			<li><a href="/#work">@lang('menu.work')</a></li>--}}
			<li><a href="/about">@lang('menu.about')</a></li>
			<li><a href="/contact">@lang('menu.contact')</a></li>
			<li>
				<div class="vertical-line"></div>
			</li>
			<li class="language-icons">
				<a href="/locale/en">
					<div class="chip right">
						<img src="/images/languages/en.png" alt="@lang('menu.english')">
						@lang('menu.english_short')
					</div>
				</a>
			</li>
			<li class="language-icons">
				<a href="/locale/nl">
					<div class="chip right">
						<img src="/images/languages/nl.png" alt="@lang('menu.dutch')">
						@lang('menu.dutch_short')
					</div>
				</a>
			</li>
		</ul>
		
		<ul id="nav-mobile" class="sidenav">
			<li><a href="/">@lang('menu.work')</a></li>
			{{--<li><a href="/">@lang('menu.home')</a></li>
			<li><a href="/#work">@lang('menu.work')</a></li>--}}
			<li><a href="/about">@lang('menu.about')</a></li>
			<li><a href="/contact">@lang('menu.contact')</a></li>
			<li><hr></li>
			<li class="center">
				<a href="/locale/en">
					<div class="chip">
						<img src="/images/languages/en.png" alt="@lang('menu.english')">
						@lang('menu.english_short')
					</div>
				</a>
			</li>
			<li class="center">
				<a href="/locale/nl">
					<div class="chip">
						<img src="/images/languages/nl.png" alt="@lang('menu.dutch')">
						@lang('menu.dutch_short')
					</div>
				</a>
			</li>
		</ul>
		<a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
	</div>
</nav>
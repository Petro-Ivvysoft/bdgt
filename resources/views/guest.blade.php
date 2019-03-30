<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials.head')
</head>
<body>
	<div class="flex flex-col min-h-screen">
		<div id="app" class="flex-grow">
			@include('partials.nav')

			<div class="w-5/6 lg:w-1/2 mx-auto pt-8">
				@yield('top-content')

				<div class="row">
					@yield('content')
				</div>
			</div>
		</div>

		@include('partials.footer')
	</div>

	@include('partials.scripts')
</body>
</html>

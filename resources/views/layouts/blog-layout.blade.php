<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.includes.head')
</head>
<body class="animsition">
	
	<!-- Header -->
	@include('layouts.includes.header')

	<!-- Product -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('/assets/images/bg-02.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Blog
		</h2>
	</section>	

	<section class="bg0 p-t-62 p-b-60">
		<div class="container">
			<div class="row">
				@yield('content')

				@include('layouts.blog.sidebar')
			</div>
		</div>
	</section>	

	<!-- Footer -->
	@include('layouts.includes.footer')

	<!-- Modal1 -->
	@include('layouts.includes.modal')
	@include('layouts.includes.footer-scripts')

</body>
</html>

	

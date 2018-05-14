<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.includes.head')
</head>
<body class="animsition">
	
	<!-- Header -->
	@include('layouts.includes.header')
	
	<!-- Slider -->
	@include('layouts.includes.slider') 

	<!-- Banner -->
	@include('layouts.includes.banner')

	<!-- Product -->
	@yield('content')

	@include('layouts.includes.blog-view')
	<!-- Footer -->
	@include('layouts.includes.footer')


	<!-- Modal1 -->
	@include('layouts.includes.modal')
	@include('layouts.includes.footer-scripts')
	

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.includes.head')
</head>
<body class="animsition">
	
	<!-- Header -->
	@include('layouts.includes.header')

	<!-- Product -->
	@yield('content')


	<!-- Footer -->
	@include('layouts.includes.footer')

	<!-- Modal1 -->
	@include('layouts.includes.modal')
	@include('layouts.includes.footer-scripts')
	

</body>
</html>
@include('layout.header')
@include('layout.footer')
<!DOCTYPE html>
<html>
<head>
	<title>Layout default</title>
	<?php
	echo Asset::styles();
	echo Asset::container('bootstrapper')->styles();
	?>
</head>
<body>


	@yield('header')
	@yield('content')
	@yield('footer')

	<?php
	echo Asset::container('bootstrapper')->scripts();
	echo Asset::scripts();
	?>
</body>
</html>
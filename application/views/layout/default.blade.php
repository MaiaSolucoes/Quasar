<!DOCTYPE html>
<html>
<head>
	<title>Layout default</title>
	{{ Asset::styles() }}
	{{ Asset::scripts() }}
</head>
<body>
	@yield('content')
	<div id='footer'>
		Copyright &copy; 2013. {{ HTML::link('http://www.maiasolucoes.com.br', 'Maia Soluções Inteligentes'); }}
	</div>
</body>
</html>
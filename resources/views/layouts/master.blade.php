<!DOCTYPE html>
<html lang="es">
<head>
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  	<meta name="viewport" content="width=device-width, initial-scale=1"/>
  	<title>Segasi</title>
	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<meta name="description" content="Una compañía dedicada al desarrollo de aplicaciones, enfocados en entregar soluciones rápidas, confiables e intuitivas">
</head>
<body>
	@include('layouts.nav')
    <main>
        @yield('content')
    </main>
	@include('layouts.footer')
</body>
</html>
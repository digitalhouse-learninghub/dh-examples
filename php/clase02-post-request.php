<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
<?php

	// los paises que manejamos
	if($_POST['country'] == 'Argentina') echo "Bienvenid@";
	if($_POST['country'] == 'US') echo "Welcome";
	
	// los paises que no manejamos
	if($_POST['country'] != 'US' && $_POST['country'] != 'Argentina') {
		echo "No hablamos tu idioma. Prueba uno de estos...<br/>";
		
		$countries = ['Argentina', 'US'];
		for($i=0 ; $i < count($countries) ; $i++) { 
			echo $countries[$i].'<br/>';
		}
	}

?>
</body>
</html>
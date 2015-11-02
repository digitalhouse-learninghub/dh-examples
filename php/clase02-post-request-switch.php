<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
<?php

	switch ($_POST['country']) {
	// los paises que manejamos
		case 'Argentina':
			echo "Bienvenid@";
			break;
		
		case 'US':
			echo "Welcome";
			break;
			
	// los paises que no manejamos
		default:
			echo "No hablamos tu idioma. Prueba uno de estos...<br/>";
		
			$countries = ['Argentina', 'US'];
			for($i=0 ; $i < $countries ; $i++) { 
				echo $countries[$i].'<br/>';
			}
			break;
	}

?>
</body>
</html>
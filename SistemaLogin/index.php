<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Página Inicial</title>
</head>
<body>
	<?php

		$login_cookie = $_COOKIE['login'];
		if (isset($login_cookie)) {
			# code...
			echo "Bem-vindo, $login_cookie <br />";
			echo "Essa informações  <font color='red'>PODEM</font> ser acessadas por você!!";
		}
		else{
			echo "Bem-vindo,convidado <br />";
			echo "Essa informações  <font color='red'> NÃO PODEM</font> ser acessadas por você!!";
			echo "<br /><a href='login.html'>Faça login</a> para ler o conteúdo";

		}



	?>
	
</body>
</html>
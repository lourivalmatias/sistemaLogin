<?php
	
	$login = $_POST['login'];
	$entrar = $_POST['entrar'];
	$senha = MD5 ($_POST['senha']);
	$connect = mysql_connect('localhost', 'root', 'root');
	$db = mysql_select_db('login');
	
	if (isset($entrar)) {
		# code...
		$verifica = mysql_query("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'")
		or die ("Erro ao selecionar");
		if (mysql_num_rows($verifica) <= 0) {
			# code...
			echo "<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
			die();
		}
		else{
			setcookie("login",$login);
			header("Location:index.php");
		}
	}




?>
<?php
	
	$login = $_POST['login'];
	$senha = MD5 ($_POST['senha']);
	$connect = mysql_connect('localhost', 'root', 'root');
	$db = mysql_select_db('login');
	$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
	$select = mysql_query($query_select, $connect);
	$array = mysql_fetch_array($select);
	$logarray = $array['login'];
	if ($login == "" || $login == null) {
		# code...
		echo "<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";
	}
	else{

		if ($logarray == $login) {
			# code...
			echo "<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";
			die();
		}
		else{
			$query = "INSERT INTO usuarios (login, senha) VALUES ('$login', '$senha')";
			$insert = mysql_query($query, $connect);
			if ($insert) {
				# code...
				echo "<script language='javascript' type='text/javascript'>alert('Usuário Cadastrado com sucesso!');window.location.href='login.html'</script>";
			}
			else{
				echo "<script language='javascript' type='text/javascript'>alert('Não foi possivel cadastrado  o usuário!');window.location.href='cadastro.html'</script>";
			}

		}
	}
?>
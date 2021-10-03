<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-cadastrar'])) {
		
		$nome = mysqli_escape_string($connection,$_POST['nome']);
		$nomereal = mysqli_escape_string($connection,$_POST['figurado']);
		$avalia = mysqli_escape_string($connection,$_POST['classifica']);
		$time = mysqli_escape_string($connection,$_POST['time']);

		$sql = "INSERT INTO heroes(nome,realname,rating,teamaffiliation) VALUES('$nome','$nomereal','$avalia','$time')";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Cadastrado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Sem êxito no Cadastro";

			header('Location: ../index.php');	
		}
	}

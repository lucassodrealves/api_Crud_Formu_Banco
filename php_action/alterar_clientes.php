<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-alterar'])) {
		
		$nome = mysqli_escape_string($connection,$_POST['nome']);
		$nomereal = mysqli_escape_string($connection,$_POST['figurado']);
		$avalia = mysqli_escape_string($connection,$_POST['classifica']);
		$time = mysqli_escape_string($connection,$_POST['time']);
		$id = mysqli_escape_string($connection,$_POST['id']);

		$sql = "UPDATE heroes SET nome = '$nome', realname = '$nomereal', rating = '$avalia', teamaffiliation = '$idade' WHERE id = '$id'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Alterado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Sem êxito na alteração.";

			header('Location: ../index.php');	
		}
	}

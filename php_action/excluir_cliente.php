<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-excluir'])) {
				
		$id = mysqli_escape_string($connection,$_POST['id']);

		$sql = "DELETE FROM heroes WHERE id = '$id'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Apagado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Sem êxito ao excluir.";

			header('Location: ../index.php');	
		}
	}

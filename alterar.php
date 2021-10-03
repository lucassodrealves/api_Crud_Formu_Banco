<?php 
	include_once 'php_action/conexao_bd.php';
	//cabeçalho
	include_once 'includes/header.php';

	if (isset($_GET['id'])) {

		$id = mysqli_escape_string($connection, $_GET['id']);

		$sql = "SELECT * FROM heroes WHERE id = '$id'";

		$resultado = mysqli_query($connection,$sql);

		$dados = mysqli_fetch_array($resultado);



	}

?>
	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Alterar herói ou heroína</h3>
			
			<form action="php_action/alterar_clientes.php" method="POST">

				<input type="hidden" name = "id" value="<?php echo $dados['id']; ?>">
				
				<div class="input-field col s12">
					<input type="text" name="nome" id="nome" value="<?php echo $dados['name']; ?>">
					<label for="nome">Nome</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="figurado" id="figurado" value="<?php echo $dados['realname']; ?>"
					>
					<label for="figurado">Nome Real</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="classifica" id="classifica" value="<?php echo $dados['rating']; ?>">
					<label for="classifica">Avaliação</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="time" id="time" value="<?php echo $dados['teamaffiliation']; ?>">
					<label for="time">Time</label>
				</div>

				<button type="submit" name="btn-alterar" class="btn">Alterar</button>
				
				<a href="index.php" class="btn green">Lista de Heróis</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>
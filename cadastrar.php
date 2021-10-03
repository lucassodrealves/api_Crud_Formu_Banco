<?php 
	//cabeçalho
	include_once 'includes/header.php';
?>

	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Novo Herói ou Heroína</h3>
			
			<form action="php_action/criar_clientes.php" method="POST">
				
				<div class="input-field col s12">
					<input type="text" name="nome" id="nome">
					<label for="Nome">Nome</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="figurado" id="figurado">
					<label for="Figurado">Nome Real</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="classifica" id="classifica">
					<label for="Classifica">Avaliação</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="time" id="time">
					<label for="time">Time</label>
				</div>

				<button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
				
				<a href="index.php" class="btn green">Lista de Heróis</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>
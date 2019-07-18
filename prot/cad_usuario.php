<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link href="css/form.css" rel="stylesheet">
		<title>CRUD - Cadastrar</title>
	</head>
	<body>
		<div class="container0">
			<div class="bg-img">
				<div class="row">
					<div class="column">
						<div class="card">
				      <div name=login class="container">
								<?php
								if(isset($_SESSION['msg'])){
									echo $_SESSION['msg'];
									unset($_SESSION['msg']);
								}
								?>
								<form method="POST" action="proc_cad_usuario.php">
									<label>Cliente</label>
									<input type="text" name="cliente" placeholder="Cliente..">
									<label>Mês</label>
									<input type="text" name="mes" placeholder="mês.." >
									<label>Periodo</label>
									<input type="text" name="periodo" placeholder="Periodo..">
									<label>Departamento</label>
									<input type="text" name="departamento" placeholder="Departamento..">
									<label>WBS</label>
									<input type="text" name="WBS"placeholder="WBS..">
									<label>Projeto</label>
									<input type="text" name="projeto"placeholder="Projeto..">
									<label>Local</label>
									<input type="text" name="local"placeholder="Local..">
									<label>Valor</label>
									<input type="text" name="valor"placeholder="Valor..">
									<label>PO</label>
									<input type="text" name="PO"placeholder="PO..">
									<label>Requisição</label>
									<input type="text" name="requisicao"placeholder="Requisição..">
									<label>Executante</label>
									<input type="text" name="executante"placeholder="Executante..">
									<label>Data de envio</label>
									<input class="date1" type="date" name="data_envio"placeholder="dd/mm/aa..">
									<label>Data de pagamento</label>
									<input class="date2" type="date" name="data_pag"placeholder="dd/mm/aa..">
									<label>Nota</label>
									<input type="text" name="nota"placeholder="Nota..">
									<label>Responsável</label>
									<input type="text" name="PM_responsavel"placeholder="Responsável..">
									<label>Status</label>
									<input type="text" name="status"placeholder="Status..">
									<label>Data envio p/conferencia</label>
									<input type="text" name="conferencia"placeholder="Data envio p/ conferencia..">
									<input type="submit" value="Cadastrar">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Listar</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body style="background-color:#161d30;">
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}

		//Receber o número da página
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

		//Setar a quantidade de itens por pagina
		$qnt_result_pg = 1000;

		//calcular o inicio visualização
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;



		$result_usuarios = "SELECT * FROM receber LIMIT $inicio, $qnt_result_pg";
		$resultado_usuarios = mysqli_query($conn, $result_usuarios);
		?>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1 style="color: white;">Ordem de serviço</h1>
			</div>
			<div class="dropdown">
				<span style="color: white;"class="glyphicon glyphicon-cog btn-lg text-success" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></span>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					<li><a href="cad_usuario.php">Cadastrar</a></li>
					<li><a href="gerar_planilha.php">Gerar Relatório Excel</a></li>
					<li><a href="#">Gerar Relatório PDF</a></li>
				</ul>
			</div>
			<div class="row espaco">
				<div class="pull-right">
					<a href="cad_usuario.php"><button type='button' class='btn btn-sm btn-success'>Cadastrar</button></a>
					<a href="gerar_planilha.php"><button type='button' class='btn btn-sm btn-success'>Gerar Excel</button></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr style="color: white; font-size:10px;">
								<th class="text-center">Id</th>
								<th class="text-center">Cliente</th>
								<th class="text-center">Mês</th>
								<th class="text-center">Periodo</th>
								<th class="text-center">Departamento</th>
								<th class="text-center">WBS</th>
								<th class="text-center">Projeto</th>
								<th class="text-center">Local</th>
								<th class="text-center">Valor</th>
								<th class="text-center">PO</th>
								<th class="text-center">Requisição</th>
								<th class="text-center">Executante</th>
								<th class="text-center">Data de envio</th>
								<th class="text-center">Data de pagamento</th>
								<th class="text-center">Nota</th>
								<th class="text-center">Responsavel</th>
								<th class="text-center">Status</th>
								<th class="text-center">Data de envio p/ contato</th>
								<th class="text-center">Editar</th>
							</tr>
						</thead>
						<tbody>
							<?php while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){?>
								<tr style="background-color: white; color: black; font-size:10px;">
									<td class="text-center"><?php	echo $row_usuario['id']; ?></td>
									<td class="text-center"><?php echo  $row_usuario['cliente']?></td>
									<td class="text-center"><?php echo  $row_usuario['mes']?></td>
									<td class="text-center"><?php echo  $row_usuario['periodo']?></td>
									<td class="text-center"><?php echo  $row_usuario['departamento']?></td>
									<td class="text-center"><?php echo  $row_usuario['WBS']?></td>
									<td class="text-center"><?php echo  $row_usuario['projeto']?></td>
									<td class="text-center"><?php echo  $row_usuario['local']?></td>
									<td class="text-center">R$<?php echo  $row_usuario['valor']?></td>
									<td class="text-center"><?php echo  $row_usuario['PO']?></td>
									<td class="text-center"><?php echo  $row_usuario['requisicao']?></td>
									<td class="text-center"><?php echo  $row_usuario['executante']?></td>
									<td class="text-center"><?php echo  $row_usuario['data_envio']?></td>
									<td class="text-center"><?php echo  $row_usuario['data_pag']?></td>
									<td class="text-center"><?php echo  $row_usuario['nota']?></td>
									<td class="text-center"><?php echo  $row_usuario['PM_responsavel']?></td>
									<td class="text-center"><?php echo  $row_usuario['status']?></td>
									<td class="text-center"><?php echo  $row_usuario['conferencia']?></td>
									<td class="text-center">
									<?php	echo "<a href='edit_usuario.php?id=" . $row_usuario['id'] . "'><span  class='glyphicon glyphicon-pencil text-warning' aria-hidden='true'></span></a>";?>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>

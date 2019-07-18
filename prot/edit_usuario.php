<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM receber WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link href="css/form.css" rel="stylesheet">
		<title>CRUD - Editar</title>
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
								<form method="POST" action="proc_edit_usuario.php">
									<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
									<label>Cliente</label>
									<input type="text" name="cliente" placeholder="Cliente.."value="<?php echo $row_usuario['cliente']; ?>">
									<label>Mês</label>
									<input type="text" name="mes" placeholder="mês.."value="<?php echo $row_usuario['mes']; ?>" >
									<label>Periodo</label>
									<input type="text" name="periodo" placeholder="Periodo.."value="<?php echo $row_usuario['periodo']; ?>">
									<label>Departamento</label>
									<input type="text" name="departamento" placeholder="Departamento.."value="<?php echo $row_usuario['departamento']; ?>">
									<label>WBS</label>
									<input type="text" name="WBS"placeholder="WBS.."value="<?php echo $row_usuario['WBS']; ?>">
									<label>Projeto</label>
									<input type="text" name="projeto"placeholder="Projeto.."value="<?php echo $row_usuario['projeto']; ?>">
									<label>Local</label>
									<input type="text" name="local"placeholder="Local.."value="<?php echo $row_usuario['local']; ?>">
									<label>Valor</label>
									<input type="text" name="valor"placeholder="Valor.."value="<?php echo $row_usuario['valor']; ?>">
									<label>PO</label>
									<input type="text" name="PO"placeholder="PO.."value="<?php echo $row_usuario['PO']; ?>">
									<label>Requisição</label>
									<input type="text" name="requisicao"placeholder="Requisição.."value="<?php echo $row_usuario['requisicao']; ?>">
									<label>Executante</label>
									<input type="text" name="executante"placeholder="Executante.."value="<?php echo $row_usuario['executante']; ?>">
									<label>Data de envio</label>
									<input class="date1" type="date" name="data_envio"placeholder="dd/mm/aa.."value="<?php echo $row_usuario['data_envio']; ?>">
									<label>Data de pagamento</label>
									<input class="date2" type="date" name="data_pag"placeholder="dd/mm/aa.."value="<?php echo $row_usuario['data_pag']; ?>">
									<label>Nota</label>
									<input type="text" name="nota"placeholder="Nota.."value="<?php echo $row_usuario['nota']; ?>">
									<label>Responsável</label>
									<input type="text" name="PM_responsavel"placeholder="Responsável.."value="<?php echo $row_usuario['PM_responsavel']; ?>">
									<label>Status</label>
									<input type="text" name="status"placeholder="Status.."value="<?php echo $row_usuario['status']; ?>">
									<label>Data envio p/conferencia</label>
									<input type="text" name="conferencia"placeholder="Data envio p/ conferencia.."value="<?php echo $row_usuario['conferencia']; ?>">
									<input type="submit" value="editar">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

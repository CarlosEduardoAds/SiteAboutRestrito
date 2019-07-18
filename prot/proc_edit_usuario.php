<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$cliente = filter_input(INPUT_POST, 'cliente', FILTER_SANITIZE_EMAIL);
$mes = filter_input(INPUT_POST, 'mes', FILTER_SANITIZE_EMAIL);
$periodo = filter_input(INPUT_POST, 'periodo', FILTER_SANITIZE_EMAIL);
$departamento = filter_input(INPUT_POST, 'departamento', FILTER_SANITIZE_EMAIL);
$WBS = filter_input(INPUT_POST, 'WBS', FILTER_SANITIZE_EMAIL);
$projeto = filter_input(INPUT_POST, 'projeto', FILTER_SANITIZE_EMAIL);
$local = filter_input(INPUT_POST, 'local', FILTER_SANITIZE_EMAIL);
$valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_EMAIL);
$PO = filter_input(INPUT_POST, 'PO', FILTER_SANITIZE_EMAIL);
$requisicao = filter_input(INPUT_POST, 'requisicao', FILTER_SANITIZE_EMAIL);
$executante = filter_input(INPUT_POST, 'executante', FILTER_SANITIZE_EMAIL);
$data_envio = filter_input(INPUT_POST, 'data_envio', FILTER_SANITIZE_EMAIL);
$data_pag = filter_input(INPUT_POST, 'data_pag', FILTER_SANITIZE_EMAIL);
$nota = filter_input(INPUT_POST, 'nota', FILTER_SANITIZE_EMAIL);
$PM_responsavel = filter_input(INPUT_POST, 'PM_responsavel', FILTER_SANITIZE_EMAIL);
$status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_EMAIL);
$conferencia = filter_input(INPUT_POST, 'conferencia', FILTER_SANITIZE_EMAIL);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "UPDATE receber SET cliente='$cliente', mes='$mes', periodo='$periodo', departamento='$departamento', WBS='$WBS', projeto='$projeto', local='$local',
valor='$valor', PO='$PO', requisicao='$requisicao', executante='$executante', data_envio='$data_envio', data_pag='$data_pag', nota='$nota',
PM_responsavel='$PM_responsavel', status='$status', conferencia='$conferencia', modified=NOW() WHERE id='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	header("Location: editar.php?id=$id");
}

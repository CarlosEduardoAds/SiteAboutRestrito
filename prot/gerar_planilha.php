<!--**
 * @author Cesar Szpak - Celke -   cesar@celke.com.br
 * @pagina desenvolvida usando framework bootstrap,
 * o código é aberto e o uso é free,
 * porém lembre -se de conceder os créditos ao desenvolvedor.
 *-->
 <?php
	session_start();
	include_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>controle</title>
	<head>
	<body>
		<?php
		// Definimos o nome do arquivo que será exportado
		$arquivo = 'msgcontatos.xls';

		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
    $html .= '<table>';
      $html .='<tr>';
        $html .='<td></td>';
        $html .='<td></td>';
        $html .='<td></td>';
        $html .='<td></td>';
        $html .='<td></td>';
        $html .='<td></td>';
        $html .='<td></td>';
        $html .='<td></td>';
        $html .='<td></td>';
        $html .='<td>2019-C.R.</td>';
        $html .='<td></td>';
        $html .='<td></td>';
        $html .='<td></td>';
        $html .='<td></td>';
        $html .='<td></td>';
        $html .='<td></td>';
        $html .='<td></td>';
      $html  .='</tr>';
      $html .='<tr>';
        $html .='<td></td>';
        $html .='<td></td>';
        $html .='<td></td>';
        $html .='<td></td>';
        $html .='<td></td>';
        $html .='<td></td>';
        $html .='<td></td>';
        $html .='<td></td>';
        $html .='<td></td>';
        $html .='<td></td>';
        $html .='<td></td>';
        $html .='<td></td>';
        $html .='<td></td>';
        $html .='<td></td>';
        $html .='<td></td>';
        $html .='<td></td>';
        $html .='<td></td>';
      $html  .='</tr>';
    $html .= '</table>';
		$html .= '<table border="1">';
		  $html .= '<tr>';
  		$html .= '<td><b>ID</b></td>';
  		$html .= '<td><b>Cliente</b></td>';
  		$html .= '<td><b>Mês</b></td>';
  		$html .= '<td><b>Periodo</b></td>';
  		$html .= '<td><b>Departamento</b></td>';
      $html .= '<td><b>WBS</b></td>';
    	$html .= '<td><b>Projeto</b></td>';
    	$html .= '<td><b>Local</b></td>';
    	$html .= '<td><b>Valor</b></td>';
    	$html .= '<td><b>PO</b></td>';
    	$html .= '<td><b>Requisição</b></td>';
    	$html .= '<td><b>Executante</b></td>';
    	$html .= '<td><b>Data de envio</b></td>';
    	$html .= '<td><b>Data de pagamento</b></td>';
    	$html .= '<td><b>Nota</b></td>';
      $html .= '<td><b>Responsavel</b></td>';
    	$html .= '<td><b>Status</b></td>';
    	$html .= '<td><b>Data de envio p/ conferencia</b></td>';
		$html .= '</tr>';

		//Selecionar todos os itens da tabela
		$result_msg_contatos = "SELECT * FROM receber";
		$resultado_msg_contatos = mysqli_query($conn , $result_msg_contatos);

		while($row_msg_contatos = mysqli_fetch_assoc($resultado_msg_contatos)){
			$html .= '<tr>';
			$html .= '<td>'.$row_msg_contatos["id"].'</td>';
			$html .= '<td>'.$row_msg_contatos["cliente"].'</td>';
      $html .= '<td>'.$row_msg_contatos["mes"].'</td>';
      $html .= '<td>'.$row_msg_contatos["periodo"].'</td>';
      $html .= '<td>'.$row_msg_contatos["departamento"].'</td>';
      $html .= '<td>'.$row_msg_contatos["WBS"].'</td>';
      $html .= '<td>'.$row_msg_contatos["projeto"].'</td>';
      $html .= '<td>'.$row_msg_contatos["local"].'</td>';
      $html .= '<td> <a>R$</a>'.$row_msg_contatos["valor"].'</td>';
      $html .= '<td>'.$row_msg_contatos["PO"].'</td>';
      $html .= '<td>'.$row_msg_contatos["requisicao"].'</td>';
      $html .= '<td>'.$row_msg_contatos["executante"].'</td>';
      $html .= '<td>'.$row_msg_contatos["data_envio"].'</td>';
      $html .= '<td>'.$row_msg_contatos["data_pag"].'</td>';
      $html .= '<td>'.$row_msg_contatos["nota"].'</td>';
      $html .= '<td>'.$row_msg_contatos["PM_responsavel"].'</td>';
      $html .= '<td>'.$row_msg_contatos["status"].'</td>';
      $html .= '<td>'.$row_msg_contatos["conferencia"].'</td>';
			$data = date('d/m/Y H:i:s',strtotime($row_msg_contatos["created"]));
			$html .= '<td>'.$data.'</td>';
			$html .= '</tr>';
			;
		}
		// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit; ?>
	</body>
</html>

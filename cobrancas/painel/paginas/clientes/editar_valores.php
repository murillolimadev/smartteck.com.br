<?php 
$tabela = 'receber';
require_once("../../../conexao.php");



$id = $_POST['id'];
$valor = $_POST['valor'];
$data = $_POST['data'];

$data_atual = date('Y-m-d');

if($token != "" and $instancia != ""){
//recuperar o hash e excluir o agendamento das mensagens
$query2 = $pdo->query("SELECT * from receber where id = '$id'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
$novo_vencimento = @$res2[0]['data_venc'];
$valor_parcela_final = @$res2[0]['valor'];
$cliente = @$res2[0]['cliente'];
$i = @$res2[0]['parcela'];
$hash = @$res2[0]['hash'];
require("../../apis/cancelar_agendamento.php");

$hash = @$res2[0]['hash2'];
require("../../apis/cancelar_agendamento.php");

$ult_id_conta = $_POST['id'];

//dados do cliente
$query = $pdo->query("SELECT * from clientes where id = '$cliente'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$nome_cliente = $res[0]['nome'];
$tel_cliente = $res[0]['telefone'];
$tel_cliente = '55'.preg_replace('/[ ()-]+/' , '' , $tel_cliente);
$telefone_envio = $tel_cliente;

//fazer agendamentos das mensagens das contas
$novo_vencimentoF = implode('/', array_reverse(explode('-', $novo_vencimento)));
$valor_parcela_finalF = number_format($valor_parcela_final, 2, ',', '.');
$data_env = date('Y-m-d', strtotime("-$dias_aviso days",strtotime($novo_vencimento)));



$link_pgto = $url_sistema.'pagar/'.$ult_id_conta;

$mensagem = '💰_Lembrete de Pagamento '.$nome_sistema.'_ %0A';
$mensagem .= 'Parcela: *'.$i.'* %0A';
$mensagem .= 'Valor: *'.$valor_parcela_finalF.'* %0A';
$mensagem .= 'Vencimento: *'.$novo_vencimentoF.'* %0A%0A';
if($pix_sistema != ""){
	$mensagem .= '*Chave Pix:* %0A';
	$mensagem .= $pix_sistema;	
}else{
	$mensagem .= '*Link Pagamento:* %0A';
	$mensagem .= $link_pgto;
}

$data_envio = $data_env.' 17:00:00';
if(strtotime($data_env) > strtotime($data_atual)){
	require('../../apis/agendar.php');
	$pdo->query("UPDATE receber SET hash2 = '$hash' where id = '$ult_id_conta'");
}



//agendar mensagem para o dia do vencimento
$mensagem = '💰_Sua Parcela vence Hoje '.$nome_sistema.'_ %0A';
$mensagem .= 'Parcela: *'.$i.'* %0A';
$mensagem .= 'Valor: *'.$valor_parcela_finalF.'* %0A';
$mensagem .= 'Vencimento: *'.$novo_vencimentoF.'* %0A%0A';
if($pix_sistema != ""){
	$mensagem .= '*Chave Pix:* %0A';
	$mensagem .= $pix_sistema;	
}else{
	$mensagem .= '*Link Pagamento:* %0A';
	$mensagem .= $link_pgto;
}
$data_envio = $novo_vencimento.' 08:00:00';

if(strtotime($data_envio) > strtotime($data_atual)){
	require('../../apis/agendar.php');
	$pdo->query("UPDATE receber SET hash = '$hash' where id = '$ult_id_conta'");
}

}

$pdo->query("UPDATE $tabela SET data_venc = '$data', valor = '$valor' WHERE id = '$id' ");
echo 'Editado com Sucesso';
?>
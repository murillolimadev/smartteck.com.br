<?php 
@session_start();
$id_usuario = @$_SESSION['id'];
$tabela = 'receber';
require_once("../../../conexao.php");

$data_atual = date('Y-m-d');

$id = $_POST['id'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$data_venc = $_POST['data_venc'];

$query2 = $pdo->query("SELECT * from emprestimos where id = '$id'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
$cliente = @$res2[0]['cliente'];

//buscar a ultima parcela
$query2 = $pdo->query("SELECT * from receber where referencia = 'Empréstimo' and id_ref = '$id' order by id desc limit 1");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
$ultima_parcela = @$res2[0]['parcela'];
$nova_parcela = $ultima_parcela + 1;
$i = $nova_parcela;

$pdo->query("INSERT INTO receber SET cliente = '$cliente', referencia = 'Empréstimo', id_ref = '$id', valor = '$valor', parcela = '$nova_parcela', usuario_lanc = '$id_usuario', data = curDate(), data_venc = '$data_venc', pago = 'Não', descricao = '$descricao', frequencia = '0', recorrencia = '' ");
$ult_id_conta = $pdo->lastInsertId();


$pdo->query("UPDATE emprestimos set parcelas = '$nova_parcela' where id = '$id'");


$novo_vencimento = @$data_venc;
$valor_parcela_final = @$valor;




if($token != "" and $instancia != ""){

	

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

echo 'Salvo com Sucesso';
?>
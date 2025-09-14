<?php

//definir fuso horário
date_default_timezone_set('America/Sao_Paulo');

//dados conexão bd local
$servidor = 'localhost';
$banco = 'u362965792_cobrancas';
$usuario = 'u362965792_cobrancas';
$senha = 'YUBMmYb7]';

$url_sistema = "https://$_SERVER[HTTP_HOST]/cobrancas/";
$url = explode("//", $url_sistema);
if($url[1] == 'localhost/'){
	$url_sistema = "http://$_SERVER[HTTP_HOST]/emprestimos/";
}

try {
	$pdo = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", "$usuario", "$senha");
} catch (Exception $e) {
	echo 'Erro ao conectar ao banco de dados!<br>';
	echo $e;
}


//variaveis globais
$nome_sistema = 'Nome Sistema';
$email_sistema = 'contato@hugocursos.com.br';
$telefone_sistema = '(31)97527-5084';

$query = $pdo->query("SELECT * from config");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if($linhas == 0){
	$pdo->query("INSERT INTO config SET nome = '$nome_sistema', email = '$email_sistema', telefone = '$telefone_sistema', logo = 'logo.png', logo_rel = 'logo.jpg', icone = 'icone.png', ativo = 'Sim', dias_criar_parcelas = 'Final de Semana', verificar_pagamentos = 'Não', seletor_api = 'menuia'");
}else{
$nome_sistema = $res[0]['nome'];
$email_sistema = $res[0]['email'];
$telefone_sistema = $res[0]['telefone'];
$endereco_sistema = $res[0]['endereco'];
$instagram_sistema = $res[0]['instagram'];
$logo_sistema = $res[0]['logo'];
$logo_rel = $res[0]['logo_rel'];
$icone_sistema = $res[0]['icone'];
$ativo_sistema = $res[0]['ativo'];
$juros_sistema = $res[0]['juros'];
$multa_sistema = $res[0]['multa'];
$juros_emprestimo = $res[0]['juros_emp'];
$taxa_sistema = $res[0]['taxa_sistema'];
$instancia = $res[0]['instancia'];
$token = $res[0]['token'];
$dias_aviso = $res[0]['dias_aviso'];
$cnpj_sistema = $res[0]['cnpj'];
$marca_dagua = $res[0]['marca_dagua'];
$dias_criar_parcelas = $res[0]['dias_criar_parcelas'];
$pix_sistema = $res[0]['pix_sistema'];
$saldo_inicial = $res[0]['saldo_inicial'];
$verificar_pagamentos = $res[0]['verificar_pagamentos'];
$seletor_api = $res[0]['seletor_api'];

if($ativo_sistema != 'Sim' and $ativo_sistema != ''){ ?>
	<style type="text/css">
		@media only screen and (max-width: 700px) {
  .imgsistema_mobile{
    width:300px;
  }

}
	</style>
	<div style="text-align: center; margin-top: 100px">
	<img src="img/bloqueio.png" class="imgsistema_mobile">
	</div>
<?php
exit();
}

}
 ?>

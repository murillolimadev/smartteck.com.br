<?php 
$tabela = 'config';
require_once("../conexao.php");

$nome = $_POST['nome_sistema'];
$email = $_POST['email_sistema'];
$telefone = $_POST['telefone_sistema'];
$endereco = $_POST['endereco_sistema'];
$juros = $_POST['juros_sistema'];
$juros = str_replace(',', '.', $juros);
$multa = $_POST['multa_sistema'];
$multa = str_replace(',', '.', $multa);
$juros_emp = $_POST['juros_emprestimo'];
$taxa_sistema = $_POST['taxa_sistema'];
$instancia = $_POST['instancia'];
$token = $_POST['token'];
$dias_aviso = $_POST['dias_aviso'];
$cnpj_sistema = $_POST['cnpj_sistema'];
$marca_dagua = $_POST['marca_dagua'];
$dias_criar_parcelas = $_POST['dias_criar_parcelas'];
$pix_sistema = $_POST['pix_sistema'];
$saldo_inicial = $_POST['saldo_inicial'];
$verificar_pagamentos = $_POST['verificar_pagamentos'];
$seletor_api = $_POST['seletor_api'];

//foto logo
$caminho = '../img/logo.png';
$imagem_temp = @$_FILES['foto-logo']['tmp_name']; 

if(@$_FILES['foto-logo']['name'] != ""){
	$ext = pathinfo($_FILES['foto-logo']['name'], PATHINFO_EXTENSION);   
	if($ext == 'png'){ 	
				
		move_uploaded_file($imagem_temp, $caminho);
	}else{
		echo 'Extensão de Imagem não permitida!';
		exit();
	}
}


//foto logo rel
$caminho = '../img/logo.jpg';
$imagem_temp = @$_FILES['foto-logo-rel']['tmp_name']; 

if(@$_FILES['foto-logo-rel']['name'] != ""){
	$ext = pathinfo(@$_FILES['foto-logo-rel']['name'], PATHINFO_EXTENSION);   
	if($ext == 'jpg'){ 	
			
		move_uploaded_file($imagem_temp, $caminho);
	}else{
		echo 'Extensão de Imagem não permitida!';
		exit();
	}
}


//foto icone
$caminho = '../img/icone.png';
$imagem_temp = @$_FILES['foto-icone']['tmp_name']; 

if(@$_FILES['foto-icone']['name'] != ""){
	$ext = pathinfo(@$_FILES['foto-icone']['name'], PATHINFO_EXTENSION);   
	if($ext == 'png' || $ext == 'PNG'){ 	
			
		move_uploaded_file($imagem_temp, $caminho);
	}else{
		echo 'Extensão de Imagem não permitida!';
		exit();
	}
}


$query = $pdo->prepare("UPDATE $tabela SET nome = :nome, email = :email, telefone = :telefone, endereco = :endereco, juros = :juros_sistema, multa = :multa_sistema, juros_emp = :juros_emp, taxa_sistema = :taxa_sistema, instancia = :instancia, token = :token, dias_aviso = :dias_aviso, cnpj = :cnpj_sistema, marca_dagua = '$marca_dagua', dias_criar_parcelas = '$dias_criar_parcelas', pix_sistema = :pix_sistema, saldo_inicial = :saldo_inicial, verificar_pagamentos = :verificar_pagamentos, seletor_api = '$seletor_api' where id = 1");

$query->bindValue(":nome", "$nome");
$query->bindValue(":email", "$email");
$query->bindValue(":telefone", "$telefone");
$query->bindValue(":endereco", "$endereco");
$query->bindValue(":juros_sistema", "$juros");
$query->bindValue(":multa_sistema", "$multa");
$query->bindValue(":juros_emp", "$juros_emp");
$query->bindValue(":taxa_sistema", "$taxa_sistema");
$query->bindValue(":instancia", "$instancia");
$query->bindValue(":token", "$token");
$query->bindValue(":dias_aviso", "$dias_aviso");
$query->bindValue(":cnpj_sistema", "$cnpj_sistema");
$query->bindValue(":pix_sistema", "$pix_sistema");
$query->bindValue(":saldo_inicial", "$saldo_inicial");
$query->bindValue(":verificar_pagamentos", "$verificar_pagamentos");
$query->execute();

echo 'Editado com Sucesso';
 ?>
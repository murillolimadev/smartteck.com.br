<?php 
require_once("../../../conexao.php");
$pagina = 'emprestimos';
$id = $_POST['id'];



echo <<<HTML
<small>
HTML;
$query = $pdo->query("SELECT * FROM $pagina where cliente = '$id'  order by id desc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){
echo <<<HTML
	<table class="table table-hover" id="">
		<thead> 
			<tr> 				
				<th>Valor</th>
				<th>Parcelas</th>				
				<th>Vencimento</th>				
				<th>Júros</th>
				<th>Data</th>
				<th>Ver Parcelas</th>
			</tr> 
		</thead> 
		<tbody> 
HTML;
for($i=0; $i < $total_reg; $i++){
	foreach ($res[$i] as $key => $value){}
$id_emp = $res[$i]['id'];
$valor = $res[$i]['valor'];
$parcelas = $res[$i]['parcelas'];
$juros_emp = $res[$i]['juros_emp'];
$data_venc = $res[$i]['data_venc'];
$data = $res[$i]['data'];
$tipo_juros = $res[$i]['tipo_juros'];
$status = $res[$i]['status'];
$cliente = $res[$i]['cliente'];

$mostrar_baixa = 'ocultar';
if($tipo_juros == 'Somente Júros'){
	$mostrar_baixa = '';
}

$classe_finalizado = '';
if($status == 'Finalizado'){
	$mostrar_baixa = 'ocultar';
	$classe_finalizado = '<span style="color:blue">(Finalizado)</span>';
}

$data_vencF = date('d', strtotime($data_venc));
$dataF = implode('/', array_reverse(explode('-', $data)));
$valorF = number_format($valor, 2, ',', '.');

$classe_deb = '';
$query2 = $pdo->query("SELECT * FROM receber where referencia = 'Empréstimo' and id_ref = '$id_emp' and data_venc < curDate() and pago != 'Sim'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
$total_reg2 = @count($res2);
if($total_reg2 > 0){
	$classe_deb = 'text-danger';	
	
}




$query2 = $pdo->query("SELECT * FROM receber where referencia = 'Empréstimo' and id_ref = '$id_emp' and pago != 'Sim'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
$valor_parc = @$res2[0]['valor'];

$total_a_pagar = $valor + $valor_parc;

echo <<<HTML
			<tr>					
				<td class="{$classe_deb}">R$ {$valorF} {$classe_finalizado}</td>
				<td class="esc">{$parcelas}</td>				
				<td class="esc">Dia {$data_vencF}</td>
				<td class="esc">{$juros_emp}%</td>
				<td class="esc">{$dataF}</td>
				<td>		

					<big><a class="" href="#" onclick="novaParcela('{$id_emp}', '{$cliente}')" title="Adicionar Parcela"><i class="fa fa-plus text-primary "></i></a></big>

					<big><a href="#" onclick="mostrarParcelasEmp('{$id_emp}')" title="Mostrar Parcelas"><i class="fa fa-money verde"></i></a></big>

					<big><a class="{$mostrar_baixa}" href="#" onclick="baixarEmprestimo('{$id_emp}', '{$total_a_pagar}', '{$cliente}')" title="Baixar Empréstimo"><i class="fa fa-check-square verde "></i></a></big>
				</td>  
			</tr> 
HTML;
}
echo <<<HTML
		</tbody> 
	</table>
</small>
HTML;
}else{
	echo 'Não possui nenhum emprestimo cadastrado!';
}

?>


<script type="text/javascript">

	function mostrarParcelasEmp(id_emp){	
		var mostrar = 'emprestimo';
		$('#id_cobranca').val('');	
    
    $.ajax({
        url: 'paginas/' + pag + "/mostar_parcelas.php",
        method: 'POST',
        data: {id_emp, mostrar},
        dataType: "text",

        success: function (mensagem) {           
           $("#listar_parcelas").html(mensagem);
        },      

    });

    $('#id_emprestimo').val(id_emp);
    $('#modalParcelas').modal('show');

}


	function baixarEmprestimo(id_emp, valor, cliente){	 
	$('#id_do_emp').val(id_emp);	
	$('#id_do_cliente').val(cliente);	
	$('#valor_final_emprestimo').val(valor);	
	
    $('#modalBaixarEmprestimo').modal('show');
}


function novaParcela(id_emp, cliente){	
	$('#id_nova_parcela').val(id_emp);
	$('#id_nova_parcela_cliente').val(cliente);
    $('#modalNovaParcela').modal('show');	   
    
}


</script>



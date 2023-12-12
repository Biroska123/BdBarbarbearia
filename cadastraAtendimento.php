<?php
	include_once('conn.php');
	$diaAtendimento = $_POST['txtData'];
	$horaAtendimento = $_POST['txtHora'];
	$selectNomeCli = $_POST['selectNomeCliente'];
	$selectNomeBarb = $_POST['selectNomeBarbeiro'];

	//Verifica se a data está no formato correto, ou seja YYY-MM-DD

	if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $diaAtendimento))  //Se a string da variável $diaAtendimento corresponde com o formato: 4 dígitos(ano) - 2 dígitos(mês) - 2 dígitos(dia)
	{
		$insere = mysqli_query($conn, "INSERT INTO tbatendimento(dataAtendimento, horaAtendimento, codCliente, codBarbeiro) values('$diaAtendimento', '$horaAtendimento', '$selectNomeCli', '$selectNomeBarb')") or die(mysqli_error());
	}
	else //Redireciona de volta para o cadAtendimento
	{
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadAtendimento.php'>
			<script	type=\"text/javascript\">
				alert(\"Erro ao cadastrar! Formato de data errado. Exemplo de data correta: 2023-10-27\");
			<\script>
		";
	}


	if (mysqli_affected_rows($conn) != 0)
	{
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '5;URL=cadAtendimento.php'>
			<script	type=\"text/javascript\">
				alert(\"Cliente cadastrado com sucesso.\");
			<\script>
		";
	}
	else
	{
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '5;URL=cadAtendimento.php'>
			<script	type=\"text/javascript\">
				alert(\"Erro ao cadastrar\");
			<\script>
		";
	}
?>
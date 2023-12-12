<?php
	require_once('conn.php');
	$nomeBarb = $_POST['txtNome'];


	$insere = mysqli_query($conn, "INSERT INTO tbBarbeiro(nomeBarbeiro) values('$nomeBarb')") or die(mysqli_error());

	if (mysqli_affected_rows($conn) != 0)
	{
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadBarbeiro.php'>
			<script	type=\"text/javascript\">
				alert(\"Barbeiro cadastrado com sucesso.\");
			<\script>
		";
	}
	else
	{
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadBarbeiro.php'>
			<script	type=\"text/javascript\">
				alert(\"Erro ao cadastrar\");
			<\script>
		";
	}
?>
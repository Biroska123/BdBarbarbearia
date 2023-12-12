<?php
	require_once('conn.php');
	$nomeCli = $_POST['txtNome'];
	$telCli = $_POST['txtTel'];
	$celCli = $_POST['txtCel'];
	$emailCli = $_POST['txtEmail'];

	$insere = mysqli_query($conn, "INSERT INTO tbCliente(nomeCli, telefoneCli, celularCli, EmailCli) values('$nomeCli', '$telCli', '$celCli', '$emailCli')") or die(mysqli_error());

	if (mysqli_affected_rows($conn) != 0)
	{
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadCliente.php'>
			<script	type=\"text/javascript\">
				alert(\"Cliente cadastrado com sucesso.\");
			<\script>
		";
	}
	else
	{
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadCliente.php'>
			<script	type=\"text/javascript\">
				alert(\"Erro ao cadastrar\");
			<\script>
		";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro do Cliente</title>
</head>
<body>
	<form action="cadastraCliente.php" method="post">
		Nome do Cliente:<br>
		<input type="text" name="txtNome" maxlength="50"><br>
		<br>
		Telefone do Cliente:<br>
		<input type="number" name="txtTel" minlength="10" maxlength="10"><br>
		<br>
		Celular do Cliente:<br>
		<input type="number" name="txtCel" minlength="11" maxlength="11"><br>
		<br>
		Email do Cliente:<br>
		<input type="text" name="txtEmail" maxlength="50"><br>
		<br>
		<input type="submit" name="btnCad" value="Cadastrar">

	</form>
</body>
</html>
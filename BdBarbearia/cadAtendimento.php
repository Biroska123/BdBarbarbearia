<?php
	include_once("conn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro do Atendimento</title>
</head>
<body>
	<form action="cadastraAtendimento.php" method="post">
		Dia do Atendimento:<br>
		<input type="txt" name="txtData" placeholder="YYYY-MM-DD"><br>
		<br>
		Hora do Atendimento:<br>
		<input type="time" name="txtHora"><br>
		<br>

		<select name="selectNomeCliente">
			<option>Selecione</option>
				<?php
					$result_niveis_acessos = "SELECT * FROM tbcliente";
					$resultado_niveis_acesso = mysqli_query($conn, $result_niveis_acessos);

					while ($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)) 
					{
				?>
					<option value="<?php echo $row_niveis_acessos['codCli']; ?>">
						<?php echo $row_niveis_acessos['nomeCli']; ?>
					</option>
			<?php					
				}
			?>
		</select><br><br>


		<select name="selectNomeBarbeiro">
				<?php
					$result_niveis_acessos = "SELECT * FROM tbbarbeiro";
					$resultado_niveis_acesso = mysqli_query($conn, $result_niveis_acessos);

					while ($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)) 
					{
				?>
					<option value="<?php echo $row_niveis_acessos['codBarbeiro']; ?>">
						<?php echo $row_niveis_acessos['nomeBarbeiro']; ?>
					</option>
			<?php					
				}
			?>
		</select><br><br>

		<input type="submit" name="btnCad" value="Cadastrar">

	</form>
</body>
</html>
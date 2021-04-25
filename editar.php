<?php 
if (empty($_GET['id'])):
	header('location:players.php');
else:

	$id = $_GET['id'];
	include_once 'func.php';
	$jogador = retornar_jogador($id);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Editar de Jogadores de LOL</title>
</head>
<body>
	<?php 
	if ($jogador != null):	?>
	<h1>Editar Jogador</h1>

	<h4><a href="players.php">Ver Jogadores Cadastrados</a></h4>
	<form action="editado.php" method="post">
		<p>
			<label>Nome:</label><br>
			<input type="text" name="nome" maxlength="80" value="<?php echo $jogador['nome']?>">
		</p>
		<p>
			<label>Nickname:</label><br>
			<input type="text" name="nick" maxlength="80" value="<?php echo $jogador['nick']?>">
		</p>
		<p>
			<label>Rota:</label><br>
			<input type="text" name="rota" maxlength="80" value="<?php echo $jogador['rota']?>">
		</p>
		<p>
			<label>Elo:</label><br>
			<input type="text" name="elo" maxlength="80" value="<?php echo $jogador['elo']?>">
		</p>
		<p>
			<label>Temporada de estréia:</label><br>
			<input type="number" name="temporada" min="1" max="11" value="<?php echo $jogador['temporada']?>">
		</p>

		<input type="hidden" name="id" value="<?php echo $jogador['id']?>">

		<p>
			<button type="submit">Editar</button>
		</p>
	</form>
	<?php else: ?>
		<h3>Erro ao carregar form de edição de jogador...</h3>
	<?php endif; ?>
</body>
</html>
<?php endif; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro de Jogadores de LOL</title>
</head>
<body>
	<h1>Cadastro de Jogadores de LOL - Home</h1>
	<h4><a href="players.php">Ver Jogadores Cadastrados</a></h4>
	<form action="players.php" method="post">
		<p>
			<label>Nome:</label><br>
			<input type="text" name="nome" maxlength="80" placeholder="Digite seu nome completo">
		</p>
		<p>
			<label>Nickname:</label><br>
			<input type="text" name="nick" maxlength="80" placeholder="Digite seu nickname">
		</p>
		<p>
			<label>Rota:</label><br>
			<input type="text" name="rota" maxlength="80" placeholder="Digite sua rota principal">
		</p>
		<p>
			<label>Elo:</label><br>
			<input type="text" name="elo" maxlength="80" placeholder="Digite seu elo (Ex: Ouro 2)">
		</p>
		<p>
			<label>Temporada de estréia:</label><br>
			<input type="number" name="temporada" min="1" max="11">
		</p>
		<p>
			<button type="submit" name="cadastrar">Cadastrar</button>
		</p>
	</form>
</body>
</html>
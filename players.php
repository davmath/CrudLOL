<?php include_once 'func.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro de Jogadores - Jogadadores Cadastrados</title>
</head>
<body>
	<h1>Cadastro de Jogadores - Jogadores Cadastrados</h1>
	<h4><a href="index.php">Voltar para página de cadastro</a></h4>
	<?php
	if (isset($_POST['cadastrar']))
	{
		if (!empty($_POST['nome']) && !empty($_POST['nick']) && !empty($_POST['rota']) && !empty($_POST['elo']) && !empty($_POST['temporada']))
		{
			//Receber os dados enviados via POST.
			$jogador['nome']      = $_POST['nome'];
			$jogador['nick']      = $_POST['nick'];
			$jogador['rota']      = $_POST['rota'];
			$jogador['elo']       = $_POST['elo'];
			$jogador['temporada'] = $_POST['temporada'];

			//Chamar função inserir_jogo do arquivo func.php
			echo inserir_jogador($jogador);
		}
		else
		{
			echo "<h3>Por favor, preencha todos os dados para cadastrar o jogador.</h3>";
		}
	}

	listar_jogadores();

	?>
</body>
</html>
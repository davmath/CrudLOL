<?php
//Arquivo de funções de manipulção de dados no BD.
include_once 'conn.php';

//Função para inserir o jogador de lolzin na tabela tabela_players.
function inserir_jogador($jogador)
{
	global $conn; //Variável de conexão do arquivo conn.php.

	//Formatar valores que serão inseridos na tabela.
	$values = "'" .$jogador['nome']."', ".
			  "'" .$jogador['nick']."', ".
			  "'" .$jogador['rota']."', ".
			  "'" .$jogador['elo']."', ".
			  $jogador['temporada'];

	//Criar comando SQL.
	$sql = "INSERT INTO tabela_players (nome, nick, rota, elo, temporada) VALUES ($values)";

	//Executar o comando SQL.
	mysqli_query($conn, $sql);

	//Verificar linhas afetadas no MySQL.
	if (mysqli_affected_rows($conn) > 0)
	{
		return'<h3>Jogador cadastrado com sucesso.</h3>';
	}
	return'<h3>Erro ao cadastrar jogador.</h3>';
}

//Função para listar jogos cadastrados.
function listar_jogadores()
{
	global $conn;
	$sql = "SELECT * FROM tabela_players";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		while ($jogador = mysqli_fetch_assoc($result))
		{
			echo "<p>";
			foreach ($jogador as $indice => $valor)
			{
				if ($indice == 'id')
				{
					$id = $valor;
				}

				echo "<b>" . ucfirst($indice) . "</b>: " . $valor . "<br>" ;
			}

			echo '<a href="editar.php?id='.$id.'">Editar</a> | ';
			echo '<a href="deletar.php?id='.$id.'" onclick="return confirm(\'Tem certeza que deseja excluir este jogador?\')">Deletar</a>';
		}
	}
	else
	{
		echo "<h3>Não há jogadores cadastrados.</h3>";
	}
}

//Função para deletar jogador específico.

function deletar_jogador($id)
{
	global $conn;

	$sql = "DELETE FROM tabela_players WHERE id = $id";

	mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn)>0)
	{
		//Redirecionar para outra página.
		header('location:players.php?msg=delok');
	}
	else
	{
		header('location:players.php?msg=delerro');
	}
}

//Função para retornar dados de um jgoador específico.

function retornar_jogador($id)
{
	global $conn;

	$sql = "SELECT * FROM tabela_players WHERE id =$id";

	$result = mysqli_query($conn, $sql);


	if (mysqli_affected_rows($conn) > 0)
	{
		$jogador = mysqli_fetch_assoc($result);


		return $jogador;
	}

	return null;
}

//Função para editar um jogador específico

function editar_jogador($jogador)
{
	global $conn;

	$values = "'" .$jogador['nome']."', ".
			  "'" .$jogador['nick']."', ".
			  "'" .$jogador['rota']."', ".
			  "'" .$jogador['elo']."', ".
			 	   $jogador['temporada'];

	$where = "id = ".$jogador['id'];

	$sql = "UPDATE tabela_players SET $values WHERE ($where)";

	mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		header('location:players.php?msg=edtok');
	}
	else
	{
		echo $sql;
		//header('location:players.php?msg=edterro');
	}


}
?>
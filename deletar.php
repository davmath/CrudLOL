<?php
if (empty($_GET['id'])) //Se parametro ID estiver vazio
{
	header('location:players.php'); //Devolve o usuário para a página players.php
}
else
{
	$id = $_GET['id']; //Armazena o parametro ID na variavel $id
	include_once 'func.php'; //inclui o arquivo de funções

	deletar_jogador($id); //chama a função para deletar o jogador com o ID recebido
}


?>
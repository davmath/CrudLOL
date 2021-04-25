<?php
if (empty($_POST['nome']) ||
	empty($_POST['nick']) ||
	empty($_POST['rota']) ||
	empty($_POST['elo']) ||
	empty($_POST['temporada']) ||
	empty($_POST['id']))
{
	header('location:players.php?msg=edtblank');

}
else
{
	$jogador['id']        = $_POST['id'];
	$jogador['nome']      = $_POST['nome'];
	$jogador['nick']      = $_POST['nick'];
	$jogador['rota']      = $_POST['rota'];
	$jogador['elo']       = $_POST['elo'];
	$jogador['temporada'] = $_POST['temporada'];

	include_once 'func.php';
	editar_jogador($jogador);

}




?>
<?php

session_start();

// montagem do texto
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);


$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;
echo $texto;

// abrindo o arquivo
$arquivo = fopen('arquivo.hd', 'a');
// escrevendo o texto
fwrite($arquivo, $texto);
// fechando o arquivo
fclose($arquivo);
// redirecionando para a página de abrir chamado
header('Location: abrir_chamado.php');

?>
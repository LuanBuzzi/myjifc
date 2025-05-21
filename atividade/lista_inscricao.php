<?php

require_once("../Classes/Inscricao.class.php");

$busca = isset($_GET['busca']) ? $_GET['busca'] : 0;
$tipo = isset($_GET['tipo']) ? $_GET['tipo'] : 0;

$lista = Inscricao::listar($tipo, $busca); 
$itens = "";

foreach($lista as $usuario){
    $item = file_get_contents("item_listagem_inscricoes.html");
    $item = str_replace("{id}", $usuario->getId(), $item);
    $item = str_replace("{nome}", $usuario->getNome(), $item);
    $item = str_replace("{email}", $usuario->getEmail(), $item);
    $item = str_replace("{data_nascimento}", $usuario->getDataNascimento(), $item);
    $item = str_replace("{telefone}", $usuario->getTelefone(), $item);
    $item = str_replace("{campus}", $usuario->getCampus(), $item);
    $item = str_replace("{matricula}", $usuario->getMatricula(), $item);
    $item = str_replace("{cpf}", $usuario->getCpf(), $item);
    $item = str_replace("{anexo}", $usuario->getAnexo(), $item);
    $itens .= $item;
}

$listagem = file_get_contents("listagem_inscricoes.html");
$listagem = str_replace("{itens}", $itens, $listagem);
print($listagem);

?>

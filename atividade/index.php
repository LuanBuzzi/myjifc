<?php
require_once("../Classes/Inscricao.class.php");

$lista = Inscricao::listar();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = isset($_POST['id']) ? $_POST['id'] : 0;
    $nome = isset($_POST['nome']) ? $_POST['nome'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $data_nascimento = isset($_POST['data_nascimento']) ? $_POST['data_nascimento'] : "";
    $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : "";
    $campus = isset($_POST['campus']) ? $_POST['campus'] : "";
    $matricula = isset($_POST['matricula']) ? $_POST['matricula'] : "";
    $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : "";
    $acao = isset($_POST['acao']) ? $_POST['acao'] : "";
    $destino_anexo = 'Uploads/' . $_FILES['anexo']['name'];
    move_uploaded_file($_FILES['anexo']['tmp_name'], '../' . $destino_anexo);

    $inscricao = new Inscricao($id, $nome, $email, $data_nascimento, $telefone, $campus, $matricula, $cpf, $destino_anexo);

    if ($acao == "salvar") {
        if ($id > 0)
            $resultado = $inscricao->alterar();
        else
            $resultado = $inscricao->inserir();
    } elseif ($acao == "excluir") {
        $resultado = $inscricao->excluir();
    }

    if ($resultado)
        header("Location: index.php");
    else
        echo "Erro ao salvar dados.";
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $formulario = file_get_contents("form_cad_inscricoes.html");
    $id = isset($_GET['id']) ? $_GET['id'] : 0;
    $resultado = Inscricao::listar(1, $id);
    if ($resultado) {
        $inscricao = $resultado[0];
        $formulario = str_replace("{id}", $inscricao->getId(), $formulario);
        $formulario = str_replace("{nome}", $inscricao->getNome(), $formulario);
        $formulario = str_replace("{email}", $inscricao->getEmail(), $formulario);
        $formulario = str_replace("{data_nascimento}", $inscricao->getDataNascimento(), $formulario);
        $formulario = str_replace("{telefone}", $inscricao->getTelefone(), $formulario);
        $formulario = str_replace("{campus}", $inscricao->getCampus(), $formulario);
        $formulario = str_replace("{matricula}", $inscricao->getMatricula(), $formulario);
        $formulario = str_replace("{cpf}", $inscricao->getCpf(), $formulario);
        $formulario = str_replace("{anexo}", $inscricao->getAnexo(), $formulario);
    } else {
        $formulario = str_replace("{id}", '', $formulario);
        $formulario = str_replace("{nome}", '', $formulario);
        $formulario = str_replace("{email}", '', $formulario);
        $formulario = str_replace("{data_nascimento}", '', $formulario);
        $formulario = str_replace("{telefone}", '', $formulario);
        $formulario = str_replace("{campus}", '', $formulario);
        $formulario = str_replace("{matricula}", '', $formulario);
        $formulario = str_replace("{cpf}", '', $formulario);
        $formulario = str_replace("{anexo}", '', $formulario);
    }
    print($formulario);
    include_once('lista_inscricao.php');
}
?>

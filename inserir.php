<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="CSS/inserir.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inseir_Nota.com</title>
</head>
<body>

<?php
if (isset($_POST['Inserir_Nota'])) {
    $Nome = $_POST['Nome'];
    $Curso = $_POST['Curso'];
    $A1 = $_POST['A1'];
    $A2 = $_POST['A2'];
    $AF = $_POST['AF'];

    // Validação simples: garante que as notas fiquem entre 0 e 6
    if (($A1 < 0 || $A1 > 6) || ($A2 < 0 || $A2 > 6) || ($AF !== "" && ($AF < 0 || $AF > 6))) {
        echo "As notas devem estar entre 0 e 6.";
    } else {

        // Calcula a média
        if ($AF === "" || $AF === null) {
            $media = ($A1 + $A2) / 2;
        } else {
            $media = ($A1 + $A2 + $AF) / 3;
        }

        // Verifica aprovação
        if ($media >= 6) {
            $situacao = "APROVADO";
        } else {
            $situacao = "REPROVADO";
        }

        // Salvar em TXT incluindo resultado
        $arquivo = fopen("Alunos.txt", "a");
        fwrite($arquivo, "$Nome,$Curso,$A1,$A2,$AF,$media,$situacao\n");
        fclose($arquivo);

        echo "<strong>Aluno cadastrado com sucesso!</strong><br>";
        echo "Média: " . number_format($media, 2) . "<br>";
        echo "Situação: <strong>$situacao</strong>";
    }
}
?>


<form method="POST">
    <h1>Cadastro de alunos</h1>
    Nome: <input type="text" name="Nome"><br>
    Curso: <input type="text" name="Curso"><br>
    <h4>Inserir nota de 0 a 6</h4>
    A1: <input type="number" name="A1" min="0" max="7"><br>
    A2: <input type="number" name="A2" min="0" max="7"><br>
    AF (opcional): <input type="number" name="AF" min="0" max="6" placeholder="Deixe em branco se não tiver"><br>
    <button type="submit" name="Inserir_Nota">Cadastrar</button>
    <button type="button" onclick="window.location.href='exibir.php'">Exibir</button>
    <button type="button" onclick="window.location.href='home.php'">Voltar</button>
</form>



</body>
</html>
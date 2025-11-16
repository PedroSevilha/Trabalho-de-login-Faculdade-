<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alunos Cadastrados</title>
    <link rel="stylesheet" href="CSS/listar.css">
</head>
<body>

<?php
if (isset($_POST['apagar'])) {
    $index = $_POST['apagar'];
    $linhas = file("Alunos.txt", FILE_IGNORE_NEW_LINES);

    unset($linhas[$index]);

    file_put_contents("Alunos.txt", implode("\n", $linhas));

    echo "<p style='color: red;'>Aluno removido com sucesso!</p>";
}
?>

<h1>📚 Alunos Cadastrados</h1>

<table>
    <tr>
        <th>Nome</th>
        <th>Curso</th>
        <th>A1</th>
        <th>A2</th>
        <th>AF</th>
        <th>Média</th>
        <th>Situação</th>
        <th>Ações</th>
    </tr>

    <?php
    if (file_exists("Alunos.txt")) {
        $linhas = file("Alunos.txt", FILE_IGNORE_NEW_LINES);

        if (count($linhas) > 0) {
            foreach ($linhas as $index => $linha) {
                $dados = explode(",", $linha);

                // Arquivo atualizado precisa ter 7 elementos
                if (count($dados) >= 7) {

                    list($nome, $curso, $a1, $a2, $af, $media, $situacao) = $dados;

                    // classe de cor
                    $classe = ($situacao == "APROVADO") ? "style='color:green; font-weight:bold;'" 
                                                        : "style='color:red; font-weight:bold;'";

                    echo "<tr>
                            <td>$nome</td>
                            <td>$curso</td>
                            <td>$a1</td>
                            <td>$a2</td>
                            <td>" . ($af !== "" ? $af : "--") . "</td>
                            <td>$media</td>
                            <td $classe>$situacao</td>

                            <td>
                                <form method='POST' style='display:inline;'>
                                    <input type='hidden' name='apagar' value='$index'>
                                    <button type='submit' class='btn-apagar'>Apagar</button>
                                </form>
                            </td>
                          </tr>";
                }
            }
        } else {
            echo "<tr><td colspan='8'>Nenhum aluno cadastrado ainda.</td></tr>";
        }
    }
    ?>
</table>

<br>
<a href="inserir.php" class="voltar">Adicionar</a>

</body>
</html>

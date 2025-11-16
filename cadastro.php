


<html lang="pt-br">
 
<head>
    <link rel="stylesheet" href="CSS/style.css">
    <meta charset="UTF-8">
    <title>Sistem_Cadastro</title>
   


</head>
<body>

<div class="container">

    <?php
        $usurio = $_POST['usuario'];
        $senha = $_POST['senha'];
        
        $linha = $usurio . "," . $senha . "\n";

        $arquivo = "usurios.txt";
        
        file_put_contents($arquivo, $linha, FILE_APPEND);




        echo "Cadastro realizado";

    ?>

<form method="POST" action="">
    <h1>Cadastro</h1>
    <input type="text" name="usuario" placeholder="usuario"required><br>
    <input type="password" name="senha" placeholder="senha"required><br>
    <input type="date" valuer="2025-10=30"><br>
    <button name="cadastro">Cadastrar</button>

    <p> Ja tem uma conta? <a href="index.php">Faça login</a></p>

    

</form>

</div>

</body>
</html>

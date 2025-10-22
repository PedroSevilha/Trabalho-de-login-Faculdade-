<html lang="pt-br">
<head>
    <link rel="stylesheet" href="CSS/style.css">
    <meta charset="UTF-8">
    <title>Sistem_Login</title>



</head> 
<body>

<div class="container">
<h1>login</h1>

<?php
session_start();

if(isset($_POST['login'])){
    $usario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $usarios =file("usuarios.txt", FILE_IGNORE_NEW_LINES);

    $achou = false;
    foreach($usarios as $linha){
        list($u, $s) = explode(",", $linha);
        if($u === $usuario && $s === $senha){
            $achou = true;
            $_SESSION['usuario'] = $usario;
            header("Localização: Bem vindo");
            exit;
        }


    }

    if(!$achou){
        $erro = "Usuario ou senha incorreta";
    }

}
?>

<?php if(isset($erro)) echo "<p style='color:red;'>$erro</p>"; ?>

<form method="POST">
    Usuario: <input type="text" name="usuario" requeride><br>
    Senha: <input type="password" name="senha" requride><br>
    <button type="submite" name=login>Entrar</button>
</form>

<p>Não tem uma conta? <a href="cadastro.php">Cadestre-se</a></p>

</div>     






</body>

</html>
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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $arquivo = file("usurios.txt", FILE_IGNORE_NEW_LINES); // Cnsulta o arquivo e ignora novas linhas

    $loginvalido = false;

    foreach ($arquivo as $linha) {
        list($user, $pass) = explode(",", $linha);
        if ($usuario === $user && $senha === $pass) {
            $loginvalido = true;
            $_SESSION['usuario'] = $usuario; // guarda o usuário logado
            break;
        }
    }

    if ($loginvalido) {
        $_SESSION['usuario'] = $usuario;//Salva o nome do usuario
        // Redireciona para outra págin
        header('Location: home.php');
        exit; // para o script aqui
    } else {
        echo "<p style='color:red;'>Usuário ou senha incorretos.</p>";
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
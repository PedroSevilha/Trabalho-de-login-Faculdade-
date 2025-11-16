<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="CSS/home.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Home</title>

</head>
<body>
  
<?php
session_start();

// verifica se o usuário está logado
if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit;
}

// pega o nome do usuário da sessão
$usuario = $_SESSION['usuario'];
?>

    
<div id="topo"class="TOP">
    <a href="paginain.php">Incio</a>
    
</div> 

<div id="topo_es" class="TOP"> 
    <b href="usuario.php">Usuario</b>
</div>


<main>
    <form method="POST">
        <h1>Bem-vindo, <b><?php echo htmlspecialchars($usuario); ?></b></h1>

        <button type="button" onclick="window.location.href='inserir.php'">
            <img src="imagens/add.png" alt="Inserir Nota">
            Inserir Nota
        </button>

        <button type="button" onclick="window.location.href='exibir.php'">
            <img src="imagens/list.png" alt="Exibir Notas">
            Exibir Notas
        </button>
    </form>
</main>



</body>
</html>
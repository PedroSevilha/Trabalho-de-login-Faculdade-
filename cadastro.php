


<html lang="pt-br">
 
<head>
    <link rel="stylesheet" href="CSS/style.css">
    <meta charset="UTF-8">
    <title>Sistem_Cadastro</title>
   


</head>
<body>

<div class="container">

 
 <?php
if(isset($erro)) echo "<p style='color:red;'>$erro</p>";
if(isset($sucesso))echo "<p style='color:green;'>$sucesso</p>";

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




<html lang="pt-br">
 
<head>
 <h1>Cadastro</h1>   
    <meta charset="UTF-8">
    <title>Sistem_Cadastro</title>
   

<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <head>
 
 <?php
if(isset($erro)) echo "<p style='color:red;'>$erro</p>";
if(isset($sucesso))echo "<p style='color:green;'>$sucesso</p>";

?>

<form method="POST" action="">
    <input type="text" name="usuario" placeholder="usuario"required><br>
    <input type="password" name="senha" placeholder="senha"required><br>
    <button name="cadastro">Cadastrar</button>

    <p> Ja tem uma conta? <a href="index.php">Faça login</a></p>

    

</form>

</div>

</body>
</html>

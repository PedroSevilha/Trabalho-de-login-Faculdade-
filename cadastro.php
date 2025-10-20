
 <h2>Cadastro</h2>
<form method="POST" action="">
    <input type="text" name="usuario" placeholder="usuario"required><br>
    <input type="password" name="senha" placeholder="senha"required><br>
    <button name="cadastro">Cadastrar</button>

    <p> Ja tem uma conta? <a href="index.php">Faça login</a></p>

<?php
if(isset($erro)) echo "<p style='color:red;'>$erro</p>";
if(isset($sucesso))echo "<p style='color:green;'>$sucesso</p>";

?>


<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistem_Cadastro</title>
    <link rel="stylecss" href="style.css">


</head>
<body>

<div class="container">
   

    <?php
   
    





    
?>



    

</form>

</div>

</body>
</html>

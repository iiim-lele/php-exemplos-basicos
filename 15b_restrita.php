<?php
// Página restrita (15b_restrita.php)


// Digitar PHP (1º Aqui)


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página Restrita</title>
</head>
<body>
    <h2>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h2>
    <p>Esta é uma página restrita, apenas para usuários logados.</p>
    <a href="15c_logout.php">Logout</a>
</body>
</html>

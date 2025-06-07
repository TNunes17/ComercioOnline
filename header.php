<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Futebol Camisolas</title>
<link href="styles/index.css" rel="stylesheet"/>
</head>
<body>
    <?php if (isset($_SESSION['username'])): ?>
  <div style="text-align: right; padding: 10px;">
    Bem-vindo, <strong><?php echo $_SESSION['username']; ?></strong> |
    <a href="logout.php">Logout</a>
  </div>
<?php endif; ?>

<header>
<h1>Futebol Camisolas</h1>
<nav>
    <a href="index.php">Início</a>
    <a href="index.php">Produtos</a>
    <a href="sobre.php">Sobre</a>
    <a href="contacto.php">Contato</a>
    <a href="login.php">Login</a>
</nav>
</header>

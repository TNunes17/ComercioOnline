<?php
session_start();
include 'config.php';

$erro = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

   
    $stmt = $conn->prepare("SELECT * FROM utilizadores WHERE username = ? AND password = SHA2(?, 256)");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows == 1) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit;
    } else {
        $erro = "Login inválido. Tenta novamente.";
    }
}
?>

<?php include 'header.php'; ?>

<main>
  <h2>Login</h2>
  <?php if ($erro): ?>
    <p style="color:red;"><?php echo $erro; ?></p>
  <?php endif; ?>
<div class="login-container">
    <h2>Login</h2>
    <form method="post" action="login.php">
        <input type="text" name="username" placeholder="Nome de Utilizador" required>
        <input type="password" name="password" placeholder="Palavra-passe" required>
        <input type="submit" value="Entrar">
    </form>
</div>

</main>

<?php include 'footer.php'; ?>

<?php

session_start();
include 'header.php';
include 'config.php'; 

if (!isset($_SESSION['username'])) {
    echo "<p>É necessário estar logado para finalizar a compra.</p>";
    include 'footer.php';
    exit;
}

if (isset($_SESSION['carrinho']) && count($_SESSION['carrinho']) > 0) {
    $username = $_SESSION['username'];

    foreach ($_SESSION['carrinho'] as $item) {
        $produto = $item['produto'];
        $preco = $item['preco'];

        $stmt = $conn->prepare("INSERT INTO encomendas (username, produto, preco) VALUES (?, ?, ?)");
        $stmt->bind_param("ssd", $username, $produto, $preco);
        $stmt->execute();
    }

    // Limpa o carrinho
    unset($_SESSION['carrinho']);

    echo "<main><h2>Compra finalizada com sucesso!</h2>";
    echo "<p>Obrigado pela sua compra, <strong>" . htmlspecialchars($username) . "</strong>.</p></main>";
} else {
    echo "<main><p>O carrinho está vazio.</p></main>";
}

include 'footer.php';
?>

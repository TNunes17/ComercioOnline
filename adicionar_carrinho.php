<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $produto = $_POST['produto'];
    $preco = $_POST['preco'];

    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = [];
    }

    // Adicionar produto ao carrinho
    $_SESSION['carrinho'][] = [
        'produto' => $produto,
        'preco' => $preco
    ];

    header('Location: carrinho.php');
    exit;
}
?>

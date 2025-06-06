<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include 'header.php';
?>

<main>
  <h2>Carrinho de Compras</h2>

  <?php if (isset($_SESSION['carrinho']) && count($_SESSION['carrinho']) > 0): ?>
    <ul>
      <?php 
      $total = 0;
      foreach ($_SESSION['carrinho'] as $index => $item): 
        $total += $item['preco'];
      ?>
        <li>
          <?php echo htmlspecialchars($item['produto']); ?> - €<?php echo number_format($item['preco'], 2); ?>
          <a href="remover_item.php?index=<?php echo $index; ?>">Remover</a>
        </li>
      <?php endforeach; ?>
    </ul>
    <p><strong>Total: €<?php echo number_format($total, 2); ?></strong></p>
    <p><a href="checkout.php"><button>Finalizar Compra</button></a></p>
  <?php else: ?>
    <p>O carrinho está vazio.</p>
  <?php endif; ?>
</main>

<?php include 'footer.php'; ?>

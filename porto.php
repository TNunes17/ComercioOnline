<?php include 'header.php'; ?>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>


<body>

<main>
<section class="camisola-detalhe">
<img alt="Camisola FC Porto 2024/25" src="https://th.bing.com/th/id/OIP.iI8Z7fdWWwHyJ2i0JET-hgHaHa?r=0&amp;w=800&amp;h=800&amp;rs=1&amp;pid=ImgDetMain"/>
<div class="info">
<h2>Camisola Oficial FC Porto</h2>
<p>Época: 2024/2025</p>
<p>Preço: <strong>€89.99</strong></p>
<form method="POST" action="adicionar_carrinho.php">
  <input type="hidden" name="produto" value="Camisola Porto 2024">
  <input type="hidden" name="preco" value="89.99">
  <button type="submit">Adicionar ao Carrinho</button>
</form>

</div>
</section>
</main>

<script src="scripts/porto.js"></script>
</body>

<?php include 'footer.php'; ?>
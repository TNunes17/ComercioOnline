<?php include 'header.php'; ?>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>


<body>

<main>
<section class="camisola-detalhe">
<img alt="Camisola Sporting CP 2024/25" src="https://static.wixstatic.com/media/abc862_a0ac7da4b07b43a2b07be62291d37d46~mv2.jpg/v1/fit/w_500,h_500,q_90/file.jpg"/>
<div class="info">
<h2>Camisola Oficial Sporting CP</h2>
<p>Época: 2024/2025</p>
<p>Preço: <strong>€84.99</strong></p>
<form method="POST" action="adicionar_carrinho.php">
  <input type="hidden" name="produto" value="Camisola Sporting 2024">
  <input type="hidden" name="preco" value="84.99">
  <button type="submit">Adicionar ao Carrinho</button>
</form>

</div>
</section>
</main>

<script src="scripts/sporting.js"></script>
</body>

<?php include 'footer.php'; ?>
<?php include 'header.php'; ?>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>


<body>

<main>
<section class="camisola-detalhe">
<img alt="Camisola SL Benfica 2024/25" src="https://www.imagehandler.net/?istyle=0000&amp;fmt=png&amp;img=A1100697000&amp;iset=0108&amp;c=999&amp;iindex=0007&amp;w=600&amp;h=600&amp;l1lc=0OR203&amp;l1s=4&amp;l1l=R1062066&amp;l2lc=0OR213&amp;l2s=4&amp;l2l=R1062068"/>
<div class="info">
<h2>Camisola Oficial SL Benfica</h2>
<p>Época: 2024/2025</p>
<p>Preço: <strong>€89.99</strong></p>
<form method="POST" action="adicionar_carrinho.php">
  <input type="hidden" name="produto" value="Camisola Benfica 2024">
  <input type="hidden" name="preco" value="89.99">
  <button type="submit">Adicionar ao Carrinho</button>
</form>

</div>
</section>
</main>

<script src="scripts/benfica.js"></script>
</body>

<?php include 'footer.php'; ?>
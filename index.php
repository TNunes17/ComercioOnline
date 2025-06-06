<?php include 'header.php'; ?>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>


<body>

<section class="banner">
<h2>As melhores camisolas dos teus clubes favoritos!</h2>
</section>
<main class="produtos">
<div class="produto">
<a href="porto.php">
<img alt="Camisola FC Porto 2024/25" src="https://th.bing.com/th/id/OIP.iI8Z7fdWWwHyJ2i0JET-hgHaHa?r=0&amp;w=800&amp;h=800&amp;rs=1&amp;pid=ImgDetMain"/>
<h3>FC Porto 2024/25</h3>
<p>€89.99</p>
<button>Ver Detalhes</button>
</a>
</div>
<div class="produto">
<a href="benfica.php">
<img alt="Camisola SL Benfica 2024/25" src="https://www.imagehandler.net/?istyle=0000&amp;fmt=png&amp;img=A1100697000&amp;iset=0108&amp;c=999&amp;iindex=0007&amp;w=600&amp;h=600&amp;l1lc=0OR203&amp;l1s=4&amp;l1l=R1062066&amp;l2lc=0OR213&amp;l2s=4&amp;l2l=R1062068"/>
<h3>SL Benfica 2024/25</h3>
<p>€89.99</p>
<button>Ver Detalhes</button>
</a>
</div>
<div class="produto">
<a href="sporting.php">
<img alt="Camisola Sporting CP 2024/25" src="https://static.wixstatic.com/media/abc862_a0ac7da4b07b43a2b07be62291d37d46~mv2.jpg/v1/fit/w_500,h_500,q_90/file.jpg"/>
<h3>Sporting CP 2024/25</h3>
<p>€84.99</p>
<button>Ver Detalhes</button>
</a>
</div>
</main>

<script src="scripts/index.js"></script>
</body>

<?php include 'footer.php'; ?>

function adicionarAoCarrinho() {
  const produto = {
    nome: "Sporting CP 2024/25",
    preco: 84.99,
    quantidade: 1
  };

  let carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];
  carrinho.push(produto);
  localStorage.setItem("carrinho", JSON.stringify(carrinho));

  alert("Camisola adicionada ao carrinho!");
}

function adicionarAoCarrinho() {
  const produto = {
    nome: "FC Porto 2024/25",
    preco: 89.99,
    quantidade: 1
  };

  let carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];
  carrinho.push(produto);
  localStorage.setItem("carrinho", JSON.stringify(carrinho));

  alert("Camisola adicionada ao carrinho!");
}

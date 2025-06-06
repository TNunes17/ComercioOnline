function carregarCarrinho() {
  const carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];
  const lista = document.getElementById("lista-carrinho");
  const total = document.getElementById("total");
  let soma = 0;

  carrinho.forEach(item => {
    const li = document.createElement("li");
    li.textContent = `${item.nome} - €${item.preco.toFixed(2)}`;
    lista.appendChild(li);
    soma += item.preco;
  });

  total.textContent = soma.toFixed(2);
}

function checkout() {
  alert("Compra finalizada! Obrigado.");
  localStorage.removeItem("carrinho");
  window.location.href = "index.html";
}

carregarCarrinho();

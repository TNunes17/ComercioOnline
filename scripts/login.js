function login(event) {
  event.preventDefault();

  const user = document.getElementById("username").value;
  const pass = document.getElementById("password").value;

  if (user === "admin" && pass === "1234") {
    localStorage.setItem("user", user);
    alert("Login bem-sucedido!");
    window.location.href = "index.html";
  } else {
    alert("Credenciais inválidas!");
  }

  return false;
}

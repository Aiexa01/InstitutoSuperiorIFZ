

// Transición lenta y suave al hacer clic en "Más info"
document.querySelectorAll('a[href^="#"]').forEach(link => {
  link.addEventListener("click", function (e) {
    e.preventDefault();
    const destino = document.querySelector(this.getAttribute("href"));
    if (destino) {
      window.scrollTo({
        top: destino.offsetTop,
        behavior: "smooth"
      });
    }
  });
});

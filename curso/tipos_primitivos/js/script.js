function mostrar(id) {
    document.querySelectorAll('.tab').forEach(el => el.classList.remove('active'));
    document.getElementById(id).classList.add('active');
}

function copiar(id) {
    const texto = document.getElementById(id).innerText;
    navigator.clipboard.writeText(texto).then(() => {
        alert("Código copiado!");
    });
}
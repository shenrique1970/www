function atualizarHora() {
    const agora = new Date();
    const hora = agora.toLocaleTimeString('pt-BR');
    document.getElementById('hora').textContent = hora;
}

setInterval(atualizarHora, 1000);
atualizarHora();
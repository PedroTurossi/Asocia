const formConteudo = document.getElementById('formConteudo');
const botaoFechar = document.getElementById('botaoFechar');
const quadradoInput = document.getElementById('quadradoInput');

// Ação para fechar a caixa sem submeter o formulário
botaoFechar.addEventListener('click', function(event) {
    quadradoInput.style.display = 'none'; // Esconde o quadrado
});


// Quando clicam no botão de abrir, mostra o quadrado
botaoAbrir.addEventListener('click', function() {
    quadradoInput.style.display = 'block';
});
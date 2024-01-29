$(document).ready(function() {
    // Função para carregar mensagens
    function carregarMensagens() {
        $.ajax({
            url: 'mensage.php',
            method: 'GET',
            success: function(data) {
                $('#messages-container').html(data);
                scrollToBottom(); // Rolagem automática para o final após carregar as mensagens
            },
            error: function(error) {
                console.log(error);
            }
        });
    }

    // Função para enviar mensagem
    $('#formMensagem').submit(function(event) {
        event.preventDefault();
        var mensagem = $('.input-msg').val();

        $.ajax({
            type: 'POST',
            url: 'mensage.php',
            data: { mensagem: mensagem },
            success: function(response) {
                console.log(response);
                $('.input-msg').val('');
                carregarMensagens();
                setTimeout(scrollToBottom, 100); // Rola para baixo após enviar a mensagem
            },
            error: function(error) {
                console.log(error);
            }
        });
    });

    // Função para rolar a div de mensagens para o final
    function scrollToBottom() {
        var divMensagens = document.getElementById("messages-container");
        divMensagens.scrollTop = divMensagens.scrollHeight;
    }

    // Carrega as mensagens no início
    carregarMensagens();
    // Atualiza as mensagens a cada 1 segundo
    setInterval(carregarMensagens, 1000);
});
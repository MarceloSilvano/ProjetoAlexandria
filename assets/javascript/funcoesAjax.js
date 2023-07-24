$(document).ready(function() {
    // Função para registrar ação de like ou dislike
    function registrarAcao(livro_id, acao) {
        $.ajax({
            url: "like_dislike.php",
            type: "POST",
            data: {
                livro_id: livro_id,
                acao: acao
            },
            success: function(response) {
                // Atualiza os contadores de likes e dislikes na página
                var dados = JSON.parse(response);
                $("#likes").text(dados.likes);
                $("#dislikes").text(dados.dislikes);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    }

    // Evento de clique no botão de like
    $("#btn-like").click(function() {
        var livro_id = $("#livro-id").val();
        registrarAcao(livro_id, "like");
    });

    // Evento de clique no botão de dislike
    $("#btn-dislike").click(function() {
        var livro_id = $("#livro-id").val();
        registrarAcao(livro_id, "dislike");
    });
});
$(document).ready(function() {
    // Função para registrar ação de like ou dislike
    function registrarAcao(livro_id, acao) {
        $.ajax({
            url: "like_dislike.php",
            type: "POST",
            data: {
                livro_id: '<?php echo $idLivro ?>',
                acao: acao
            },
            success: function(response) {
                // Atualiza os contadores de likes e dislikes na página
                var dados = JSON.parse(response);
                $("#likes").text(dados.likes);
                $("#dislikes").text(dados.dislikes);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    }

    // Evento de clique no botão de like
    $("#btn-like").click(function() {
        var livro_id = $("#livro-id").val();
        registrarAcao(livro_id, "like");
    });

    // Evento de clique no botão de dislike
    $("#btn-dislike").click(function() {
        var livro_id = $("#livro-id").val();
        registrarAcao(livro_id, "dislike");
    });
});

$(document).ready(function() {
    // Função para atualizar contagem de likes e dislikes
    function atualizarContagem(livro_id) {
        $.ajax({
            url: "obter_contagem.php",
            type: "POST",
            data: {
                livro_id: livro_id
            },
            success: function(response) {
                var dados = JSON.parse(response);
                $("#likes-btn").text("Likes (" + dados.likes + ")");
                $("#dislikes-btn").text("Dislikes (" + dados.dislikes + ")");
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    }

    // Obtém o ID do livro ao carregar a página e atualiza a contagem
    var livro_id = $("#livro-id").val();
    atualizarContagem(livro_id);
});
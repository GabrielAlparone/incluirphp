<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obter dados do formulário
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    // Caminho para o arquivo de dados
    $caminhoArquivo = 'dados.txt';

    // Abrir o arquivo para escrita
    $arquivo = fopen($caminhoArquivo, 'a');

    if ($arquivo) {
        // Escrever dados no arquivo
        fwrite($arquivo, "Nome: $nome, Idade: $idade\n");

        // Fechar o arquivo
        fclose($arquivo);

        echo 'Dados incluídos com sucesso!';

        // Redirecionar para o formulário de inclusão após alguns segundos (opcional)
        header("refresh:2;url=formulario.html");
    } else {
        echo 'Erro ao abrir o arquivo para escrita.';
    }
} else {
    echo 'Método inválido para acessar este script.';
}
?>

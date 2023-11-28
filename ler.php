<?php
// Caminho para o arquivo de dados
$caminhoArquivo = 'dados.txt';

// Verificar se o arquivo existe
if (file_exists($caminhoArquivo)) {
    // Ler o conteúdo do arquivo
    $conteudo = file_get_contents($caminhoArquivo);

    // Exibir os dados
    echo '<h1>Dados Armazenados</h1>';
    echo '<pre>' . $conteudo . '</pre>';
} else {
    echo 'O arquivo de dados ainda não foi criado.';
}
?>

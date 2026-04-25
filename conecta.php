<?php
// Definindo os dados de conexão com o banco MySQL
$host = "sql100.infinityfree.com";
$banco = "if0_41606091_lannygame";
$usuario = "if0_41606091";
$senha = "qfbJpxpSGy";

try {
    // Criando uma instância PDO para conectar ao banco MySQL
    $conexao = new PDO("mysql:host=$host;dbname=$banco;charset=utf8", $usuario, $senha);
    
    // Definindo o modo de erro para exceções
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão com o banco de dados realizada com sucesso!";
} catch (PDOException $e) {
    // Exibindo a mensagem de erro em caso de falha na conexão
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}
?>

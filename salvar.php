<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "landing_page_db";

// Conexão com MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Obtém os dados do formulário
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];

// Insere os dados no banco
$sql = "INSERT INTO contatos (nome, telefone) VALUES ('$nome', '$telefone')";

if ($conn->query($sql) === TRUE) {
    echo "Contato salvo com sucesso!";
} else {
    echo "Erro ao salvar contato: " . $conn->error;
}

$conn->close();
?>

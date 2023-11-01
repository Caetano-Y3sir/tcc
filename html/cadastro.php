<?php
// Dados de conexão com o banco de dados
$servername = "localhost"; // O nome do servidor MySQL (geralmente é localhost no XAMPP)
$username = "root"; // O nome de usuário do MySQL (por padrão é root)
$password = ""; // A senha do MySQL (deixe em branco se não definiu uma senha durante a instalação)

// Nome do banco de dados criado no phpMyAdmin
$database = "test";

// Criar uma conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Agora você está conectado ao banco de dados e pode executar consultas SQL aqui
// Por exemplo, você pode selecionar dados de uma tabela
$sql = "SELECT * FROM cadastro";
$result = $conn->query($sql);

// Processar os resultados
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Nome: " . $row["nome"] . "<br>";
    }
} else {
    echo "Nenhum resultado encontrado. DEU RUIM";
}
?>
<?php
// Iniciar a sessão
session_start();

// Estabelecer conexão com o banco de dados (substitua os valores conforme necessário)
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "biblioteca";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Processar os dados do formulário quando o formulário for enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar os valores do formulário
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Preparar e executar a consulta SQL para verificar o login
    $sql = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login bem-sucedido, armazenar o nome do usuário na variável de sessão
        $row = $result->fetch_assoc();
        $_SESSION["nome_usuario"] = $row["nome"];

        // Redirecionar para a página inicial do usuário
        header("Location: index.php");
        exit();
    } else {
        // Login falhou, exibir mensagem de erro
        echo '<script>alert("Email ou senha incorretos.");</script>';
    }
}
function enc($var)
{
	if ($var != "" && $var != "SG01" && $var != "SG02" && $var != "SG03" && $var != "SG04") {
		$var = base64_encode($var);
	}
	return $var;
}
// Fechar a conexão com o banco de dados
$conn->close();
?>

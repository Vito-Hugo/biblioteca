<?php
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
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = dec($_POST["senha"]);

    // Preparar e executar a consulta SQL para inserir os dados na tabela
    $sql = "INSERT INTO cadastro (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
    }
}
function dec($var)
{
	$var = str_replace("----", "/", $var);
	$var = str_replace("----", "/", $var);
	$var = str_replace("----", "/", $var);
	$var = str_replace("----", "/", $var);
	$var = str_replace("----", "/", $var);

	$var = str_replace("----", "/", $var);
	$var = str_replace("----", "/", $var);
	$var = str_replace("----", "/", $var);
	$var = str_replace("----", "/", $var);
	$var = str_replace("----", "/", $var);

	if ($var != "" && $var != "SG01" && $var != "SG02" && $var != "SG03" && $var != "SG04") {
		$var = base64_decode($var);
	}
	return $var;
}


// Fechar a conexão com o banco de dados
$conn->close();
?>

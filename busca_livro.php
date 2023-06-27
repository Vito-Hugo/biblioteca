<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Search Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h3 {
            color: #333;
            margin-top: 0;
        }

        p {
            color: #666;
            margin-bottom: 0;
        }

        .book-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-left: 70px;
            margin-top: 20px;
        }

        .book {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 200px;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        .message {
            color: #666;
        }

        .btn{
            align-items: center;
        }
    </style>
</head>
<body>
<header class="header">
        <div class="header-1">
            <a href="index.php" class="logo"><i class="fas fa-book"></i> Bliblio </a>
        
        <<form action="busca_livro.php" class="search-form" method="GET">
    <input type="search" name="livro-nome" placeholder="Procure aqui..." id="search-box">
    <button type="submit"><i class="fas fa-search"></i></button>
</form>

        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
            <div id='login-btn' class="fas fa-user"></div>
        </div>
    </div>
    <div class="header-2">
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#destque">Destaque</a>
            <a href="#lancamento">Lançamenentos</a>
            <a href="#comentarios">Comentarios</a>
            <a href="#contato">Contato</a>
        </nav>
    </div>
    </header>

    <nav class="bottom-navbar">
        <a href="#home" class="fas fa-home"></a>
        <a href="#destque" class="fas fa-list"></a>
        <a href="#lancamento" class="fas fa-tags"></a>
        <a href="#comentarios" class="fas fa-comments"></a>
        <a href="#contato" class="fas fa-blogs"></a>
    </nav>
    <?php
    // Verifica se o parâmetro "livro-nome" foi passado na URL
    if (isset($_GET['livro-nome'])) {
        $livroNome = $_GET['livro-nome'];

        // Conecte-se ao banco de dados (substitua os valores pelos dados reais do seu banco)
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "biblioteca";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica se houve algum erro na conexão
        if ($conn->connect_error) {
            die("Falha na conexão com o banco de dados: " . $conn->connect_error);
        }

        // Consulta os livros com base no nome
        $sql = "SELECT * FROM livros WHERE Nome LIKE '%$livroNome%'";
        $result = $conn->query($sql);

        // Exibe os resultados da pesquisa
        if ($result->num_rows > 0) {
            echo '<div class="book-container">';
            while ($row = $result->fetch_assoc()) {
                echo '<div class="book">';
                echo "<h3>" . $row["Nome"] . "</h3>";
                echo "<p>Autor: " . $row["Autor"] . "</p>";
                echo '<img src="img/' . $row["Imagem"] . '" alt="Capa do livro">';
                echo '<br>';
                echo  '<a href="#" class="btn">Alugar</a>';
                // Exiba outras informações do livro, se necessário
                echo '</div>';
            }
            echo '</div>';
        } else {
            echo '<p class="message">Nenhum livro encontrado.</p>';
        }

        // Fecha a conexão com o banco de dados
        $conn->close();
    }
    ?>
</body>
</html>

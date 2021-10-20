<html>
    <head>
        <link rel="stylesheet" href="estilo.css">
    <head>
<?php

require_once('credenciais.php');

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM livros";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div class=\"tabela\"><table style=\"text-align:center\"><tr><th>ID</th><th>Name</th><th>Autor</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["nome"]."</td><td>".$row["autor"]."</td></tr>";
    }
    echo "</table></div>";
} else {
    echo "0 results";
}
$conn->close();
?>

<body>
</body>

</html>
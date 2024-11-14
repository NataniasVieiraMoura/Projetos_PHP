<?php /*
    #Variaveis de conexão:
    $host = "localhost";
    $user = "root";
    $password = "";
    $porta = "3306";
    $database = "serenatto";

    $conn = new mysqli($host,$user,$password,$database);

    #fazendo insert:
    $sql = "INSERT INTO produtos (tipo,nome, descriçao,) VALUES ('Maria', 'Engenheira')";
if ($conn->query($sql) === TRUE) {
    echo "Registro inserido com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}
    #fazendo select:
    $sql = "SELECT id, nome, profissao FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Saída dos dados de cada linha
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nome: " . $row["nome"]. " - Profissão: " . $row["profissao"]. "<br>";
    }
} else {
    echo "0 resultados";
}

//Encerrando conexão:
$conn->close();

*/

?>
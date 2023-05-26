<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
</head>
<body>
    <?php
    // Dane do połączenia
    $servername = "localhost"; 
    $username = "admin";
    $password = "admin";
    $dbname = "wypozyczalnia";

    // Łączenie z bazą
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Sprawdzenie połączenia
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Kwerenda na pobranie danych
    $sql = "SELECT * FROM Pojazdy";

    // Wykonanie kwerendy
    $result = $conn->query($sql);

    // Sprawdzenie czy zwrócono wyniki
    if ($result->num_rows > 0) {
        // Zwrócenie wyników
        while($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"]. " - Marka: " . $row["marka_pojazdu"]. " - Model: " . $row["model_pojazdu"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    // Zamknięcie połączenia
    $conn->close();
    ?>
</body>
</html>
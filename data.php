<!DOCTYPE html>
<html>
<head>
    <title>Twoje Dane</title>
</head>
<body>
    <?php
    // Dane do połączenia
    $servername = ""; 
    $username = "";
    $password = "";
    $dbname = "";

    // Łączenie z bazą
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Sprawdzenie połączenia
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Kwerenda na pobranie danych
    $sql = "SELECT * FROM Klient";

    // Wykonanie kwerendy
    $result = $conn->query($sql);

    // Sprawdzenie czy zwrócono wyniki
    if ($result->num_rows > 0) {
        // Zwrócenie wyników
        while($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"]. " - Imię: " . $row["imie"]. " - Nazwisko: " . $row["nazwisko"]. " - Telefon: " . $row["telefon"]. " - E-mail: " . $row["email"]."<br>";
        }
    } else {
        echo "0 results";
    }

    // Zamknięcie połączenia
    $conn->close();
    ?>
</body>
</html>

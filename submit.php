<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $species = $_POST["species"];
    $age = $_POST["age"];
    $description = $_POST["description"];

    $conn = new mysqli("localhost", "your_username", "your_password", "petcare");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO pets (name, species, age, description) VALUES ('$name', '$species', $age, '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "Pet information saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

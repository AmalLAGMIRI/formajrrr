<?php include('connection.php');

$sql = "INSERT INTO users (firstname, lastname, email)
VALUES ('FATI', 'BEN', 'ben@gmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
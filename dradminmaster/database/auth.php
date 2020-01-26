<?php include('connection.php');

$username = $_POST["username"];
$password = $_POST["password"];

$sql = 'SELECT * FROM users WHERE username="'.$username.'" AND password="'.$password.'"';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    header("Location: http://localhost/dradmin");
    // while($row = $result->fetch_assoc()) {
    //     echo "id: " . $row["id"]. " - Username: " . $row["username"]. " " . $row["email"]. "<br>";
    // }
} else {
    echo "Please check your username or password";
}

$conn->close();
?>
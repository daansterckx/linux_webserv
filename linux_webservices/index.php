<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milestone</title>
</head>
<body>
    <h1>
        <?php
        // Enable error reporting
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        $servername = "db"; // Service name defined in docker-compose
        $username = "user";
        $password = "password";
        $dbname = "mydatabase";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT name FROM users LIMIT 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo $row["name"] . " has reached milestone 1!!!";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </h1>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Tampilkan Data</title>
    <link rel="stylesheet" type="text/css" href="hasilkrisar.css">
</head>
<body>
    <div class="container">
        <?php
        // Your PHP code here
        $servername = "localhost";
        $username = "id22099458_zain";
        $password = "Zain.hosting@19";
        $database = "id22099458_datawebsite";
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        // Prepare an SQL statement
        $stmt = $conn->prepare("SELECT name, email, comment FROM kritik_dan_saran");
        $stmt->execute();
        
        // Bind result variables
        $stmt->bind_result($name, $email, $comment);
        
        // Fetch values and print them
        echo "<h1>Kritik dan Saran</h1>";
        while ($stmt->fetch()) {
            echo "<div class='success-message'>";
            echo "<p>Nama: " . htmlspecialchars($name) . "<br>Email: " . htmlspecialchars($email) . "<br>Kritik / Saran: " . htmlspecialchars($comment) . "</p>";
            echo "</div><hr>";
        }
        
        $stmt->close();
        $conn->close();
        ?>
    </div>
</body>
</html>
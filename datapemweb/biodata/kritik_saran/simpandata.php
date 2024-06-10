<!DOCTYPE html>
<html>
<head>
    <title>Simpan Data</title>
    <link rel="stylesheet" type="text/css" href="simpandata.css">
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
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["mail"];
            $comment = $_POST["comment"];
            
            // Prepare an SQL statement
            $stmt = $conn->prepare("INSERT INTO kritik_dan_saran (name, email, comment) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $email, $comment);
            
            // Execute the prepared statement
            if ($stmt->execute()) {
                echo "<div class='success-message'>Terima kasih atas kritik dan saran Anda!</div>";
                echo "<p>Data Anda telah berhasil disimpan. <a href='hasilkrisar.php'>Klik di sini</a> untuk melihat semua kritik dan saran.</p>";
            } else {
                echo "<div class='error-message'>Maaf, terjadi kesalahan saat menyimpan data Anda.</div>";
            }
            $stmt->close();
        } else {
            echo "Metode tidak diperbolehkan.";
        }
        
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        
        $conn->close();
        ?>
    </div>
</body>
</html>

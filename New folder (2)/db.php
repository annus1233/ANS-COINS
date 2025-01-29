// db.php
<?php
$host = 'localhost';
$dbname = 'goldfish';  
$username = 'gold fish';  
$password = 'mrvanish';  

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password, );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

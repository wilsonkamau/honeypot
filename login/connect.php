$servername = "localhost";
$username = "root";
$password = "honeypot123";
$dbname = "honeypot_sensor";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

<?php
class Database {
    private $host = '172.31.22.43';
    private $username = 'Suraj200520350';
    private $password = 'qXLe0WN6s4';
    private $database = 'Suraj200520350';
    private $conn;

    public function __construct() {
        $this->conn = mysqli_connect('172.31.22.43', 'Suraj200520350', 'qXLe0WN6s4', 'Suraj200520350');
        if (!$this->conn) {
            die('Connection error: ' . mysqli_connect_error());
        }
    }

    public function create($size, $toppings, $address, $instructions) {
        $size = $this->sanitize($size);
        $toppings = $this->sanitize($toppings);
        $address = $this->sanitize($address);
        $instructions = $this->sanitize($instructions);


        $query = "INSERT INTO pizza_orders (size, toppings, address, instructions) VALUES ('$size', '$toppings', '$address', '$instructions')";
        echo "Query: $query<br>";
        echo "Size: $size, Toppings: $toppings, Address: $address, Instructions: $instructions<br>";

        $result = mysqli_query($this->conn, $query);
        if (!$result) {
            die('Insertion error: ' . mysqli_error($this->conn));
        }
    }


    public function read() {
        $query = "SELECT * FROM pizza_orders";
        $result = mysqli_query($this->conn, $query);
        if (!$result) {
            die('Selection error: ' . mysqli_error($this->conn));
        }
        return $result;
    }

    private function sanitize($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return mysqli_real_escape_string($this->conn, $data);
    }
}

$database = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $database->create($_POST['pizza_type'], $_POST['quantity'], $_POST['address'], $_POST['instructions']);
    header('Location: view.php');
    exit();
}
?>

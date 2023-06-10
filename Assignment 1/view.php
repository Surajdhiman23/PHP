<?php
require_once('database.php');
$res = $database->read();
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Pizza Orders</title>
</head>
<body>
<header>
    <h1>Pizza Orders</h1>
</header>
<main class="wrapper">
    <table>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Pizza Type</th>
            <th>Quantity</th>
            <th>Time</th>
        </tr>
        <?php
        while($r = mysqli_fetch_assoc($res)){
            ?>
            <tr>
                <td><?php echo $r['id']; ?></td>
                <td><?php echo $r['first_name']; ?></td>
                <td><?php echo $r['last_name']; ?></td>
                <td><?php echo $r['email']; ?></td>
                <td><?php echo $r['phone_number']; ?></td>
                <td><?php echo $r['address']; ?></td>
                <td><?php echo $r['pizza_type']; ?></td>
                <td><?php echo $r['quantity']; ?></td>
                <td><?php echo $r['time']; ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</main>
</body>
</html>

<?php
include("./sqli/phpcon.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $cmd = "DELETE FROM demo WHERE ID=$id";
    print_r($cmd);
    $res = $con->query($cmd);
}


$sel = "SELECT * FROM demo";
$res = $con->query($sel);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <style>
        table,
        td,
        th {
            border: 2px solid black;
        }
    </style>
</head>

<body>
    <div class="main">
        <dib class="tab">
            <table>
                <tr>
                    <th>Users</th>
                    <th>Password</th>
                    <th colspan="2">Operation</th>
                </tr>
                <?php
                while ($da = $res->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $da["Name"];  ?></td>
                        <td><?php echo $da["Age"];  ?></td>
                        <td><a href="./edit.php?id=<?php echo $da["ID"]; ?>">Edit</a></td>
                        <td><a href="./user.php?id=<?php echo $da["ID"]; ?>">Delete</a></td>
                    </tr>
                <?php } ?>
            </table>
        </dib>
    </div>

</body>

</html>
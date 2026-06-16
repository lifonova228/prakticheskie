<?php

$conn = new mysqli('localhost','root','12345678','pr11n1base');
$sql = $conn->prepare("SELECT * FROM `users`");
$sql->execute();

$result = $sql->get_result();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table table-bordered w-50 mx-auto">
        <tbody>
            <?php foreach($result as $item): ?>
            <tr>
                <th scope="row"><?php echo $item['login']; ?></th>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['email']; ?></td>
                <td><?php echo $item['password']; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
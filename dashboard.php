<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    
 <?php
include_once("config.php");

$sql = "SELECT * FROM users";
$getUser = $conn->prepare($sql);
$getUser->execute();
$users = $getUser->fetchAll();

 ?>


<table>
    <thead>
        <th>ID:</th>
        <th>NAME:</th>
        <th>SURNAME:</th>
        <th>EMAIL:</th>
    </thead>

    <tbody>
        <tr>
            <?php
                foreach ($users as $user) {
            ?>

            <td><?= $user['id']?></td>
            <td><?= $user['name']?></td>
            <td><?= $user['surname']?></td>
            <td><?= $user['email']?></td>
            <td><?= "<a href='delete.php?id=$user[id]'>Delete</a> | <a href='edit.php?id=$user[id]'>Update</a>" ?></td>
        </tr>

       <?php 
              }
          ?>     
    </tbody>
</table>
        
      <a href="index.php">Add user:</a>        

</body>
</html>
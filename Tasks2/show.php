<?php
$pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
$statement = $pdo->prepare("SELECT * FROM tasks WHERE id=:id");
$statement->bindParam(":id", $ GET['id']);
$statement->execute();
$tasks = $statement->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
        <div class="row">
         <div class="col-md-12">
         <h1><?= $task['title'];?></h1>
         <p>
      <?= $task['content'];?>
             </p>
             <a href="/">Go Back</a>
             </div>
        </div>
        </div>
    </body>
</html>
             


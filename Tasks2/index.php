<?php
$pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
$sql = "SELECT*FROM tasks";
$statement->prepare($sql);
$result = $statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_ASSOC);

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
         <h1>All Tasks</h1>
         <a href="#" class="btn  btn-success">Add task</a>
         <table class="table">
             <thead>
                 <tr>
                     <th>ID</th>
                     <th>Title</th>
                     <th>Action</th>
                 </tr>
             </thead>
             <tbody>
                 <?php foreacy($tasks as $task):?>
                 <tr>
             <td><?= $task['id'];?></td>
             <td><?= $task['title'];?></td>
             <td>
                 <a href="show.php?id=>?= $task['id'];?>" class="btn  btn-info"> 
                Show
            </a>
            <a href="edit.php?id=<?= $task['id'];?>" class="btn  btn-warning">
                Edit
            </a>
                 <a onclick="return confirm('are you sure?'); href="delete.php?id=<?= $task['id'];?>" class="btn  btn-danger">Delete</a> 
             </td>
             </tr>
             <?php endforeach;?>
             </tbody>
         </table>
         </div>
 </div>
             </div>
    </body>
</html>


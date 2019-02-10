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
         <h1>Edit Task</h1>
         <form action="update.php?id=<?= $task['id'">
             
 <div class="form-group">
 <input type="text" class="form-control" value="Go to the store">
 </div>
             <div class="form-group">
                 <textarea name="content"  class="form-control">bla-bla-bla</textarea>    
             </div>
        <div class="form-group"> 
            <button class="btn  btn-warning" type="submit">Submit</button>    
        </div>
         </form>
         </div>
        </div>
        </div>
    </body>
</html>

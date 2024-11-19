<?php
$insert =0;
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
include 'connect.php';


if(isset(($_POST['submit']))){
    $todo_text =$_POST['todo_item'];
    $id = $_SESSION['users_id'];

    $sql ="insert into `todos` (todo_text) values('$todo_text')";
    $result= mysqli_query($connect, $sql);
    if($result){
        // echo 'data inserted successfully';
        $insert =1;
    } else{
        die(mysqli_error($connect));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do list app</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
  if($insert){
    
  }
  ?>
    <h1 class="text-center mt-3">Welcome <?php echo $_SESSION['username']?></h1>
    <p class="text-center">Create your to-do list now</p>
    
    <form action="" method="post">
        <div class="container d-flex align-items-center justify-content-center ">
            <input type="text" name="todo_item" class="todo-input mx-1">
            <button class="btn btn-primary" name="submit">Add to list</button>
        </div>
    </form>
   
    <div class="container text-center mt-5">
    <table class="table table-borderless table-hover">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">Check</th>
      <th scope="col">What to Do</th>
      <th scope="col">Time</th>
      <th scope="col">operation</th>
    </tr>
  </thead>
  <tbody>

    <?php

    $sql = "select * from `todos`";
    $result= mysqli_query($connect, $sql);
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $id=$row['todo_id'];
            $todo_item=$row['todo_text'];
            $date=$row['date'];    
            echo '<tr>
      <th scope="row">'.$id.'</th>
      <td><input type="checkbox"></td>
      <td>'.$todo_item.'</td>
      <td>'.$date.'</td>
      <td><button class="btn btn-primary">Done</button> <button class="btn btn-danger">Delete</button></td>
    </tr>' ; 
        }
    }

    ?>
    <!-- <tr>
      <th scope="row">1</th>
      <td><input type="checkbox"></td>
      <td>Read my book</td>
      <td>0:00</td>
      <td><button class="btn btn-primary">Done</button> <button class="btn btn-danger">Delete</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><input type="checkbox"></td>
      <td>Thornton</td>
      <td>0:00</td>
      <td><button class="btn btn-primary">Done</button> <button class="btn btn-danger">Delete</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td ><input type="checkbox"></td>
      <td>@twitter</td>
      <td>0:00</td>
      <td><button class="btn btn-primary">Done</button> <button class="btn btn-danger">Delete</button></td>
    </tr>
  </tbody> -->
</table>
    </div>

</body>
</html>
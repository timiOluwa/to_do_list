<?php 
$user = 0;
$success =0;
$invalid= 0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username =$_POST['username'];
    $password =$_POST['password'];
    $confirm_password =$_POST['confirm-password'];

    $sql= "select * from `users` where username ='$username'";
    $result = mysqli_query($connect, $sql);
    if($result){
        $num= mysqli_num_rows($result);
        if($num >0){
            $user = 1;
            // echo 'user with same username already exist';
        } else{
            if($password === $confirm_password){
                $sql= "insert into `users` (username, password) values('$username', '$password')";
                $result = mysqli_query($connect, $sql);
                if($result){
                    $user = 1;
                    header('location:login.php');
                }else{
                    die(mysqli_error($result));
                }
            } else{
                $invalid =1;
            }
        }
    }
}

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="signup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
   
    <main>
    <?php
    
    if($user){

       echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Sorry!</strong> A user with the same username already exist
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }

    if($success){

        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
   <strong>Congratulations</strong> you have signed up successfully
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>';
     }

     if($invalid){

        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
   <strong>Sorry!</strong> The password you entered is not consistent
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>';
     }
 

    ?>

        <!-- <h1>To-Do List</h1> -->
        <section>
            <div class="image-section">
                <img src="Write List (1).gif" alt="">
            </div>
            <div class="text-section">
                <form action="signup.php" method="post">
                    <h2 class="fw-bolder">Create Account</h2>
                    <p class="introduce fw-bold">Welcome to our To-do List Application</p>
                   
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="username">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating mb-3 ">
                        <input type="password" class="form-control" id="floatingPassword" name="password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" name="confirm-password">
                        <label for="floatingPassword">confirm password</label>
                    </div>
                    <p class="fw-bold mt-1">Already have an account <a href="login.php" class="text-danger">Login</a></p>
                    <button class="btn btn-primary mt-1">signup</button>
                </form>
                
            </div>
        </section>
    </main>
    
</body>
</html>
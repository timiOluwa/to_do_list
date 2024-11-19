
<?php 
$user = 0;
$invalid =0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username =$_POST['username'];
    $password =$_POST['password'];
    

    $sql= "select * from `users` where username ='$username' and password ='$password'";
    $result = mysqli_query($connect, $sql);
    if($result){
        $num= mysqli_num_rows($result);
        if($num >0){
            $login = 1;
            header('location:index.php');
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['users_id'] = $users['users_id'];
        } else{             
                $invalid= 1;
        }
    }
}

?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="signup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main>
        <?php
         if($invalid){

            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
       <strong>sorry!</strong> you have entered an invalid credentials
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
                <form action="login.php" method="post">
                    <h2 class="fw-bolder">Login</h2>
                    <p class="introduce fw-bold">Welcome back to our To-do list application </p>
                   
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="username">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating mb-3 ">
                        <input type="password" class="form-control" id="floatingPassword" name="password">
                        <label for="floatingPassword" >Password</label>
                    </div>
                    <p class="fw-bold">Don't have an account <a href="signup.php" class="text-danger">Sign up</a></p>
                    <button class="btn btn-primary mt-1">Login</button>
                </form>
                
            </div>
        </section>
    </main>
    
</body>
</html>
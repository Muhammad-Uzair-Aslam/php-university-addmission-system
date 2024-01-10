

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/login.css">
    <title>Join Subhan Carriers || Sign-Up Here</title>
</head>
<body style="background: url(./Assets/img/3139767.jpg);">
    <?php

include 'dbcon.php';

if(isset($_POST['submits'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
   
    //Password Secuirity
    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    $emailquery = "select * from uzair_reg_form where email='$email'";
    $query = mysqli_query($conn,$emailquery);

    $emailcount = mysqli_num_rows($query);
    if($emailcount>0){
        echo "email exists";
    }else{

        if($password === $cpassword){

            $insertsql = "insert into uzair_reg_form( username, email, password, cpassword) 
            VALUES ('$username', '$email','$pass','$cpass')";
             $iquery = mysqli_query($conn, $insertsql);
                    if ($iquery){
                        ?>
                        <script>
                            alert("inserted Sucessfully");
                        </script>
                        <?php                 
                    }
                    else{
                        ?>
                        <script>
                            alert("No inserted");
                        </script>
                        <?php
                    }
        }else{
            echo "Passwords not matching exists";
        }
    }  
}
?>
    <div class="wrapper">
        <div class="form-wrapper sign-up">
            <form action="" method="post">
                <h2>Sign Up</h2>
                <div class="input-group">
                    <input type="text" name="username" required>
                    <label for="">Username</label>
                </div>
                <div class="input-group">
                    <input type="email" name="email" required>
                    <label for="">E-mail</label>
                </div>
                <div class="input-group">
                    <input type="password" name="password" required>
                    <label for="">password</label>
                </div>
                <div class="input-group">
                    <input type="password" name="cpassword" required>
                    <label for="">Confirm password</label>
                </div>
                <button class="button" name="submits">Sign Up</button>
                <div class="sign-up-link">
                    <p>Already have an account? <a href="Login.php" target="_blank" class="signupbtn-link">Sign In</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <script src="login.js"></script>
</body>
</html>
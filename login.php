
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/login.css">
    <title>Login || University Management system
    </title>
</head>

<body style="background: url(./Assets/img/3139767.jpg);">
    <?php
//Database connectivity
include 'dbcon.php';

//Query for data-fetching
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = "select * from uzair_reg_form where email='$email' ";
    $query = mysqli_query($conn,$email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){

        $email_pass = mysqli_fetch_assoc($query);
        $db_pass = $email_pass['password']; 
        $_SESSION['username'] = $email_pass['username']; 
        $pass_decode = password_verify($password, $db_pass);

        if($pass_decode){
            echo "Login Successful";
            ?>
    <script>
        location.replace("index.php");
    </script>
    <?php
        }else{
            echo "Incorect username or password";
        }


    }
    else{
        echo "Look's like you are not a member.Please Signup !";
    }
}

?>
    <div class="wrapper">
        <div class="form-wrapper sign-in">
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <h2>Login</h2>
                <div class="input-group">
                    <input type="text" name="email" required>
                    <label for="">email</label>
                </div>
                <div class="input-group">
                    <input type="password" name="password" required>
                    <label for="">password</label>
                </div>
                <button class="button" name="submit">Login In</button>
                <div class="sign-up-link">
                    <p>Don't have an account? <a href="signup.php" target="_blank" class="signupbtn-link">Sign Up</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
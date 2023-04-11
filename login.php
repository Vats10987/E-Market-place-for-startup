<?php require_once "controllerUserData.php"; ?> 
<!DOCTYPE HTML>
<html lang="en">
<html>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="body">



    <div class="login-page">
        <div class="form">
            <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?> 
            <form action="login.php" method="POST" autocomplete="">

                <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                <input class="form-control" type="password" name="password" placeholder="Password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

                <br>
                <br>
                <input class="button" type="submit" name="login" value="Login now">
                <p class="message"></p>
            </form>

            <div class="div1"><a href="signup.php">Signup now</a></div>

        </div>
    </div>


</body>

</html>
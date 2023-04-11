<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="signup_style.css" />


</head>

<body class="body">


    <div class="login-page">
        <div class="form">
            <form action="signup.php" method="POST" autocomplete="">
                <?php
                    if(count($errors) == 1){
                        ?>
                    <div class="alert alert-danger text-center">
                        <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                    </div>
                    <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li>
                                    <?php echo $showerror; ?>
                                </li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                            <input class="form-control" type="text" name="name" placeholder="Full Name" required value="<?php echo $name ?>">
                            <input class="form-control" type="email" name="email" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Enter a valid Email Address" required value="<?php echo $email ?>">
                            <input class="form-control" type="password" name="password" placeholder="Password" minlength="8" maxlength="20" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                required>
                            <input class="form-control" type="password" name="cpassword" placeholder="Confirm password" minlength="8" maxlength="20" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                required>
                            <br>
                            <br>
                            <input class="form-control button" type="submit" name="signup" value="Signup">
                            <div class="div1"><a href="login.php">Login here</a></div>

            </form>
        </div>
    </div>
</body>

</html>

</html>
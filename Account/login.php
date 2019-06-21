<?php include("../layout/a_config.php"); ?>

<?php include("../services/db.php"); ?>

<!DOCTYPE html>

<head>
    <?php include("../layout/head-tag-contents.php"); ?>
</head>
<body>
    <?php include("../layout/design-top.php"); ?>
    <?php include("../layout/navigation.php"); ?>


    <?php
    session_start();
//    include_once("../services/db.php");


    if (isset($_SESSION['id']) != "") {
        header("Location: ../pages/index.php");
    }


    if (isset($_POST['login'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '" . $email . "' and password = '" . md5($password) . "'");
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        if ($row = mysqli_fetch_array($result)) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            header("Location: ../pages/index.php");
        } else {
            $error_message = "Incorrect Email or Password!!!";
        }
        $conn->close();
    }
    ?>


    <div class="main container pt-2 pb-2">
        <div class="row">
            <img class="col-sm w-100 d-flex mt-3" src="../Images/registerImage.jpg" alt=""/>
        </div>
        <div class="row">
            <form class="col-sm-6 mx-auto mt-5 mb-5 jumbotron  bg-success" method="post" 
                  action="<?php echo $_SERVER['PHP_SELF']; ?>"  name="loginForm">            
                <div class="col-sm">
                    <h3 class="font-weight-bold text-center">Login Here</h3>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" 
                               id="inputEmail4" placeholder="Email" name="email">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" 
                               id="exampleInputPassword1" placeholder="Password" name="password">
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <button type="submit" class="btn btn-info col-sm-6" name="login" >Login</button>
                </div>

                <div class="row">
                    <div class="col-sm">
                        <span class="text-warning">
                            <?php
                            if (isset($success_message)) {
                                echo $success_message;
                            }
                            ?>
                        </span>
                        <span class="text-danger">
                            <?php
                            if (isset($error_message)) {
                                echo $error_message;
                            }
                            ?>
                        </span>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-sm-12 col-sm-offset-4 text-center">	
                        New User? <a href="register.php">Sign Up Here</a>
                    </div>
                </div>	
            </form>
        </div>
    </div>

    <?php include("../layout/footer.php"); ?>
    <?php include("../layout/design-bottom.php"); ?>
</body>
</html>



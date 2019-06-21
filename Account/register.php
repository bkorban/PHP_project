<?php include("../layout/a_config.php"); ?>

<?php include("../services/db.php"); ?>

<!DOCTYPE html>

<head>
    <?php include("../layout/head-tag-contents.php"); ?>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>
    <?php include("../layout/design-top.php"); ?>
    <?php include("../layout/navigation.php"); ?>


    <?php
    session_start();
    if (isset($_SESSION['id'])) {
        header("Location: ../pages/index.php");
    }

    $error = false;

    if (isset($_POST['register'])) {
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $address2 = mysqli_real_escape_string($conn, $_POST['address2']);
        $city = mysqli_real_escape_string($conn, $_POST['city']);

        $state = "";
        if ($_POST['state'] == "NSW")
            $state = "NSW";
        if ($_POST['state'] == "QLD")
            $state = "QLD";
        if ($_POST['state'] == "SA")
            $state = "SA";
        if ($_POST['state'] == "Tas")
            $state = "Tas";
        if ($_POST['state'] == "Vic")
            $state = "Vic";
        if ($_POST['state'] == "WA")
            $state = "WA";


//    $state = mysqli_real_escape_string($conn, $_POST['state']);

        $zip = mysqli_real_escape_string($conn, $_POST['zip']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $age = mysqli_real_escape_string($conn, $_POST['age']);

        $sex = "";
        if ($_POST['sex'] == "option1")
            $sex = "male";
        if ($_POST['sex'] == "option2")
            $sex = "female";
        if ($_POST['sex'] == "option3")
            $sex = "other";

        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $conPassword = mysqli_real_escape_string($conn, $_POST['conPassword']);


        if (!preg_match("/^[a-zA-Z ]+$/", $firstname)) {
            $error = true;
            $firstnameErr = "First name must contain only alphabets and space";
        }
        if (!preg_match("/^[a-zA-Z ]+$/", $lastname)) {
            $error = true;
            $lastnameErr = "Last name must contain only alphabets and space";
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = true;
            $email_error = "Please Enter Valid Email ID";
        }
        if (strlen($password) < 6) {
            $error = true;
            $passworrErr = "Password must be minimum of 6 characters";
        }
        if ($conPassword != $conPassword) {
            $error = true;
            $conPasswordErr = "Password and Confirm Password doesn't match";
        }
        if (!$error) {

            if (mysqli_query($conn, "INSERT INTO user (firstname, lastname, "
                            . "email, address, address_2, city, zip, state, phone, age, sex, password, username)"
                            . " VALUES('" . $firstname . "', '" . $lastname . "', '" . $email . "','" . $address . "',"
                            . "'" . $address2 . "','" . $city . "','" . $zip . "','" . $state . "',"
                            . "'" . $phone . "','" . $age . "', '" . $sex . "', '" . md5($password) . "', '" . $username . "')")) {
                $success_message = "Successfully Registered! <a href='login.php'>Click here to Login</a>";
            }
        } else {
            $error_message = "Error in registering...Please try again later!";
        }
        $conn->close();
    }
    ?>

    <div class="main container pt-2 pb-2">
        <div class="row">
            <img class="col-sm w-100 d-flex mt-3" src="../Images/registerImage.jpg" alt=""/>
        </div>
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center mt-3">Join a community of people who show up, speak out and act</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 mt-5 mb-5 text-center">
                <p>Deepen your commitment. Enhance your impact. Amplify your voice.</p>
                <p>Become a member today and enjoy our member magazine, habitat, along with invitations 
                    to special events and leadership opportunities.</p>
                <p class="text-left">Why become a member?</p>
                <ul class="text-left">
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                </ul>
            </div>
            <form class="col-sm-6 mx-auto mt-5 mb-5 jumbotron bg-success" method="post" 
                  action="<?php echo $_SERVER['PHP_SELF']; ?>"  name="registrationForm">            

                <div class="col-sm">
                    <h3 class="font-weight-bold text-center">Register Here</h3>
                </div>
                <div class="row">
                    <p class="col-sm"><span class="error">all fields are required</span></p>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="formGroupExampleInput">First Name</label>
                        <input type="text" class="form-control" 
                               id="formGroupExampleInput" placeholder="First Name" name="firstname"
                               required value="<?php if ($error) echo $firstname; ?>">
                        <span class="text-danger"><?php if (isset($firstnameErr)) echo $firstnameErr; ?></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="formGroupExampleInput">Last Name</label>
                        <input type="text" class="form-control" 
                               id="formGroupExampleInput" placeholder="Last Name" name="lastname" 
                               required value="<?php if ($error) echo $lastname; ?>">
                        <span class="text-danger"><?php if (isset($lastnameErr)) echo $lastnameErr; ?></span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" 
                               id="inputEmail4" placeholder="Email" name="email"
                               required value="<?php if ($error) echo $email; ?>">
                        <span class="text-danger"><?php if (isset($emailErr)) echo $emailErr; ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" 
                           id="inputAddress" placeholder="451 George Street" name="address"
                           required value="<?php if ($error) echo $address; ?>">
                    <span class="text-danger"><?php if (isset($addressErr)) echo $addressErr; ?></span>
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Address 2</label>
                    <input type="text" class="form-control" 
                           id="inputAddress2" placeholder="Apartment, studio, or floor" name="address2" 
                           required value="<?php if ($error) echo $address2; ?>">
                    <span class="text-danger"><?php if (isset($address2Err)) echo $address2Err; ?></span>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" 
                               id="inputCity" placeholder="Sydney" name="city"
                               required value="<?php if ($error) echo $city; ?>">
                        <span class="text-danger"><?php if (isset($cityErr)) echo $cityErr; ?></span>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control" name="state" >
                            <option selected>Choose...</option>
                            <option>NSW</option>
                            <option>QLD</option>
                            <option>SA</option>
                            <option>Tas</option>
                            <option>Vic</option>
                            <option>WA</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" 
                               id="inputZip" placeholder="2000" name="zip" 
                               required value="<?php if ($error) echo $zip; ?>">
                        <span class="text-danger"><?php if (isset($zipErr)) echo $zipErr; ?></span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="formGroupExampleInput">Phone number</label>
                        <input type="text" class="form-control" name="phone" id="formGroupExampleInput" 
                               placeholder="Phone number"
                               required value="<?php if ($error) echo $phone; ?>">
                        <span class="text-danger"><?php if (isset($phoneErr)) echo $phoneErr; ?></span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="formGroupExampleInput">Age</label>
                        <input type="text" class="form-control" 
                               id="formGroupExampleInput" placeholder="Age" name="age" 
                               required value="<?php if ($error) echo $age; ?>">
                        <span class="text-danger"><?php if (isset($ageErr)) echo $ageErr; ?></span>
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sex" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sex" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    Female
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sex" id="gridRadios3" value="option3">
                                <label class="form-check-label" for="gridRadios3">
                                    Other
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" 
                               id="exampleInputPassword1" placeholder="Password" name="password"
                               required value="<?php if ($error) echo $password; ?>">
                        <span class="text-danger"><?php if (isset($passwordErr)) echo $passwordErr; ?></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" class="form-control" 
                               id="exampleInputPassword1" placeholder="Confirm Password" name="conPassword"
                               required value="<?php if ($error) echo $conPassword; ?>">
                        <span class="text-danger"><?php if (isset($conPasswordErr)) echo $conPasswordErr; ?></span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="formGroupExampleInput">Username</label>
                        <input type="text" class="form-control" 
                               id="formGroupExampleInput" placeholder="Username" name="username"
                               required value="<?php if ($error) echo $username; ?>">
                        <span class="text-danger"><?php if (isset($usernameErr)) echo $usernameErr; ?></span>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <button type="submit" class="btn btn-info col-sm-6" name="register" >Register</button>
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
                    <div class="col-sm-12 col-md-offset-4 text-center">	
                        Already Registered? <a href="login.php">Login Here</a>
                    </div>
                </div>	
            </form>
        </div>
    </div>

    <?php include("../layout/footer.php"); ?>
    <?php include("../layout/design-bottom.php"); ?>
</body>
</html>



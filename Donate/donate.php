<?php include("../layout/a_config.php"); ?>

<?php include("../services/db.php"); ?>
<?php
session_start();
?>


<!DOCTYPE html>

<head>
    <?php include("../layout/head-tag-contents.php"); ?>
</head>
<body>
    <?php include("../layout/design-top.php"); ?>
    <?php include("../layout/navigation.php"); ?>

    <?php
    $error = false;

    if (isset($_POST['donate'])) {
        $donation = mysqli_real_escape_string($conn, $_POST['donation']);

        if (!preg_match("/^[0-9]+$/", $donation)) {
            $error = true;
            $donationErr = "Only numbers allowed";
        }

        if (!$error) {
            $userId = $_SESSION['id'];
            if (mysqli_query($conn, "INSERT INTO donate (donation, id)"
                            . " VALUES('" . $donation . "', '" . $userId . "')")) {
                $success_message = "Donation made successfully! Thank You !!!!";
            }
        } else {
            $error_message = "Error while trying to make a donation...Please try again later!";
        }

        $conn->close();
    }
    ?>


    <div class="main container pt-2 pb-2">
        <div class="row">
            <img class="col-sm w-100 d-flex mt-3" src="../Images/donatePage.jpg" alt=""/>
        </div>
        <div class="row">
            <div class="col-sm-6 mt-5 mb-5 text-center">
                <p>Your donation today will help to create a world where forests, rivers, people and wildlife thrive – now and for future generations. 
                    Right now, a pollution and extinction crisis threatens the web of life. People made this crisis and we can solve it.</p>
            </div>
            <form class="col-sm mx-auto mt-5 mb-5 jumbotron bg-success" method="post" 
                  action="<?php echo $_SERVER['PHP_SELF']; ?>"  name="donationForm">            
                <div class="row mb-1">
                    <h3 class="col-sm font-weight-bold text-center">Your Donation</h3>
                </div>

                <div class="form-row">
                    <div class="form-group col-sm-12">
                        <div class="container">
                            <div class="row">
                                <label for="formGroupExampleInput" class="col-sm-12">Amount of donation</label>
                            </div> 
                            <div class="row">
                                <span class="col-sm-1 text-center d-flex align-items-center">$</span>
                                <input type="number" class="form-control col-sm" 
                                       id="formGroupExampleInput" placeholder="Amount" name="donation"
                                       required value="<?php if ($error) echo $donation; ?>" />
                                <span class="text-danger"><?php if (isset($donationErr)) echo $donationErr; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <?php
                    if (isset($_SESSION['id'])) {
                        ?>
                        <button type="submit" class="btn btn-info col-sm-6 " name="donate" >Donate</button>
                        <?php
                    } else {
                        ?>
                        <p class="col-sm-12 font-weight-bold text-center"> You must be registered user to be able to make a donation. Thank You !!</p>
                        <button type="submit" class="btn btn-info col-sm-6"  name="donate" disabled>Donate</button>
                    <?php }
                    ?>
                </div>
                <div class="row mt-2">
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
            </form>
        </div>
    </div>

    <?php include("../layout/footer.php"); ?>
    <?php include("../layout/design-bottom.php"); ?>
</body>
</html>

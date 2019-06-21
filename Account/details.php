<?php include("../layout/a_config.php"); ?>

<?php include("../services/db.php"); ?>

<?php session_start(); ?>

<!DOCTYPE html>

<head>
    <?php include("../layout/head-tag-contents.php"); ?>
</head>
<body>
    <?php include("../layout/design-top.php"); ?>
    <?php include("../layout/navigation.php"); ?>

    <div class="main container pt-2 pb-2">
        <div class="row">
            <img class="col-sm w-100 d-flex mt-3" src="../Images/detailsPage.jpg" alt=""/>
        </div>
        <div class="row  mt-3">
            <h3 class="col-sm text-center">User details</h3>
        </div>
        <div class="row mt-5">
            <div class="col-sm-6">
                <img class="img-fluid "   src="../Images/detailsAvatar.jpg" alt=""/>
            </div>
            <div class="col-sm">
                <p> 
                    <?php
                    $userId = $_SESSION['id'];


                    $sql = "SELECT firstname, lastname, email, address, address_2, city, state, zip, phone, age, sex, username  FROM user WHERE id = $userId";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>" .
                            "Address: " . $row["address"] . " " . $row["address_2"] . " " . $row["city"] . " " . $row["zip"] . " " . $row["state"] . "<br>" .
                            "Phone: " . $row["phone"] . "<br>" .
                            "Age: " . $row["age"] . "<br>" .
                            "Gender: " . $row["sex"] . "<br>" .
                            "Username: " . $row["username"] . "";
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    ;
                    ?>
                </p>
            </div>
        </div>
    </div>

    <?php include("../layout/footer.php"); ?>
    <?php include("../layout/design-bottom.php"); ?>
</body>
</html>

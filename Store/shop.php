<?php include("../layout/a_config.php"); ?>

<?php include_once("../services/db.php"); ?>

<?php
session_start();

if (isset($_POST["add_to_cart"])) {
    if (isset($_SESSION["shopping_cart"])) {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if (!in_array($_GET["id"], $item_array_id)) {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'item_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'item_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"]
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        } else {
            echo '<script>alert("Item Already Added")</script>';
            echo '<script>window.location="shop.php"</script>';
        }
    } else {
        $item_array = array(
            'item_id' => $_GET["id"],
            'item_name' => $_POST["hidden_name"],
            'item_price' => $_POST["hidden_price"],
            'item_quantity' => $_POST["quantity"]
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}
if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        foreach ($_SESSION["shopping_cart"] as $keys => $values) {
            if ($values["item_id"] == $_GET["id"]) {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("Item Removed")</script>';
                echo '<script>window.location="shop.php"</script>';
            }
        }
    }
}
?> 


<!DOCTYPE html>

<head>
    <?php include("../layout/head-tag-contents.php"); ?>
</head>
<body>
    <?php include("../layout/design-top.php"); ?>
    <?php include("../layout/navigation.php"); ?>

    <div class="main container pt-2 pb-2">
        <div class="row">
            <img class="col-sm w-100 d-flex mt-3" src="../Images/storeImage.jpg" alt=""/>
        </div>
        <div class="row">
            <h5 class="col-sm text-center font-weight-bold mt-5">Here you can shop in the online store for unique gifts designed to encourage further support. </h5>
        </div>
        <div class="row">
            <?php
            $query = "SELECT * FROM product ORDER BY id ASC";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>  
                    <div class="col-sm-4">  
                        <form method="post" action="shop.php?action=add&id=<?php echo $row["id"]; ?>">  
                            <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                                <img src="<?php echo $row["image"]; ?>" class="d-block w-100 img-fluid rounded" /><br />  
                                <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                                <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>  
                                <input type="text" name="quantity" class="form-control" value="1" />  
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                                <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                            </div>  
                        </form>  
                    </div>  
                    <?php
                }
                $conn->close();
            }
            ?>  
            <div style="clear:both"></div>  
            <br />  
            <h3 class="col-sm-12 mt-5">Order Details</h3>  
            <div class="table-responsive">  
                <table class="table table-bordered">  
                    <tr>  
                        <th width="40%">Item Name</th>  
                        <th width="10%">Quantity</th>  
                        <th width="20%">Price</th>  
                        <th width="15%">Total</th>  
                        <th width="5%">Action</th>  
                    </tr>  
                    <?php
                    if (!empty($_SESSION["shopping_cart"])) {
                        $total = 0;
                        foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                            ?>  
                            <tr>  
                                <td><?php echo $values["item_name"]; ?></td>  
                                <td><?php echo $values["item_quantity"]; ?></td>  
                                <td>$ <?php echo $values["item_price"]; ?></td>  
                                <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                                <td><a href="shop.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                            </tr>  
                            <?php
                            $total = $total + ($values["item_quantity"] * $values["item_price"]);
                        }
                        ?>  
                        <tr>  
                            <td colspan="3" align="right">Total</td>  
                            <td align="right">$ <?php echo number_format($total, 2); ?></td>  
                            <td></td>  
                        </tr>  
                        <?php
                    }
                    ?>  
                </table>  
            </div>  
        </div>  
        <br /> 
    </div>


    <?php include("../layout/footer.php"); ?>
    <?php include("../layout/design-bottom.php"); ?>
</body>
</html>

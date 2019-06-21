<div class="container justify-content-around">
    <div class="row d-flex mb-3">
        <?php if (isset($_SESSION['id'])) { ?>
            <div class="col-sm-4 float-right">
                <p class="navbar-text"><strong>Welcome!</strong>
                    <strong><?php echo $_SESSION['username']; ?></strong></p>
                <a href="../Account/logout.php">Log Out</a>
                <a href="../Account/details.php">Details</a>
            </div>
        <?php } else { ?>
            <div class="col-sm-4 float-right">
                <a  href="../Account/register.php">Register</a>
                <a  href="../Account/login.php">Login</a>
            </div>
        <?php } ?>
    </div>
    <header class="row d-flex align-items-center">
        <div class="col-sm-4 d-none d-xl-block">
            <a href="../Pages/index.php">
                <img class="img-fluid navbar-brand " src="../Images/logo6.png" width="120" height="80" alt=""/>
            </a>
        </div>
        <div class="col-sm-4 text-center mt-2 d-block">
            <h3 id="logo">Your Earth Your Home</h3>
            <p>Earth provides enough to satisfy every man’s needs, but not every man’s greed.
                – Mahatma Gandhi'
            </p>
        </div>
        <div class="col-sm d-none d-xl-block">
            <button class="btn btn-outline-success float-right ">Shopping Cart</button>
        </div>
    </header>
</div>
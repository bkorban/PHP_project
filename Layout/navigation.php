<div class="container-fluid">
    <div class="row ">
        <nav class="col-sm navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" 
                    data-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" aria-expanded="false" 
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-fill mx-auto w-100 justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav justify-content-center  ">
                    <li class="nav-item active">
                        <a class="nav-link <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="../Pages/index.php"> <span class="sr-only">(current)</span>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($CURRENT_PAGE == "About") {?>active<?php }?>" href="../Pages/about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($CURRENT_PAGE == "Blog") {?>active<?php }?>" href="../Pages/blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($CURRENT_PAGE == "Calendar") {?>active<?php }?>" href="../Calendar/calendar.php">Calendar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($CURRENT_PAGE == "Donate") {?>active<?php }?>" href="../Donate/donate.php">Donate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($CURRENT_PAGE == "Shop") {?>active<?php }?>" href="../Store/shop.php">Online Shop</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

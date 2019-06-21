<?php include("../layout/a_config.php"); ?>

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
            <img class="col-sm w-100 d-flex mt-3" src="../Images/aboutImage.jpg" alt=""/>
        </div>
        <div class="row text-center">
            <article class="col-sm">
                <p><h5>Who we are ?</h5>
                “Your Earth. Your Home” is a not for profit organisation that aims to promote sustainability initiatives 
                at a grassroots level through individual awareness.
                </p>
                <p>Our vision is to save the planet from man-made environmental catastrophe.</p>
                <p>Our mission is to create a sustainable future for humanity starting from every individual.</p>
                <p>Our objective was to start sustainability initiatives at the grassroots level through individual awareness.</p>
                <p>We aim to educate each individual person to the importance and urgency of starting change with themselves to change the world.</p>
                <p>We believe in the words of Mahatma Gandhi, “Be the change you wish to see in the world.”</p>
            </article>
        </div>
        <div class="row text-center mt-5 bg-success">
            <div class="col-sm-8">
                <div class="container" id="chief_executive">
                    <div class="row">
                        <h4 class="col-sm-12">Chief Executive Officer Jane Doe</h4>
                        <img class="col-sm-3 w-100 d-flex mx-auto d-block" src="../Images/avatar.png" alt=""/>
                    </div>
                    <div class="row">
                        <p class="col-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <div class="container" id="director_of_campaigns">
                    <div class="row">
                        <h4 class="col-sm-12">Director of Campaigns Luke James</h4>
                        <img class="col-sm-3 w-100 d-flex mx-auto d-block" src="../Images/avatar.png" alt=""/>
                    </div>
                    <div class="row">
                        <p class="col-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <div class="container" id="director_of_engagements">
                    <div class="row">
                        <h4 class="col-sm-12">Director of Engagement Hannah Jesset</h4>
                        <img class="col-sm-3 w-100 d-flex mx-auto d-block" src="../Images/avatar.png" alt=""/>
                    </div>
                    <div class="row">
                        <p class="col-sm-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <div class="container" id="director_of_fundraising">
                    <div class="row">
                        <h4 class="col-sm-12">Director of Fundraising James Smith</h4>
                        <img class="col-sm-3 w-100 d-flex mx-auto d-block" src="../Images/avatar.png" alt=""/>
                    </div>
                    <div class="row">
                        <p class="col-sm-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm" id="sideNav">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#chief_executive">Chief Executive Officer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#director_of_campaigns">Director of Campaigns</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#director_of_engagements">Director of Engagement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#director_of_fundraising">Director of Fundraising</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <?php include("../layout/footer.php"); ?>
    <?php include("../layout/design-bottom.php"); ?>
</body>
</html>

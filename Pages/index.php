<?php include("../layout/a_config.php"); ?>

<?php session_start(); ?>

<!DOCTYPE html>

<head>
    <?php include("../layout/head-tag-contents.php"); ?>
</head>
<body class="container-flex" >
    
    <?php include("../layout/design-top.php"); ?>
    <?php include("../layout/navigation.php"); ?>

    <div class="main container pt-2 pb-2">
        <div class="row">
            <div id="carouselExampleFade" class="mt-3 col-sm carousel slide carousel-fade d-none d-lg-block" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../Images/slide5.jpg" class="d-block w-100 img-fluid" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../Images/slide6.jpg" class="d-block w-100 img-fluid" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../Images/slide7.jpg" class="d-block w-100 img-fluid" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../Images/slide8.jpg" class="d-block w-100 img-fluid" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm">
                <img src="../Images/gallery.jpg" class="d-block w-100 img-fluid rounded float-left" alt="...">
            </div>
            <div class="col-sm">
                <img src="../Images/gallery2.jpg" class="d-block w-100 img-fluid rounded mx-auto d-block" alt="...">
            </div>
            <div class="col-sm">
                <img src="../Images/gallery3.jpg" class="d-block w-100 img-fluid rounded float-right" alt="...">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm text-center">
                <h3>Your Earth Your Home</h3>
                <p>Welcome to the website !</p>
            </div>
        </div>
        <div class="row">
            <article class="col-sm text-center">
                <p>We are focused on minimising and reducing the individual’s consumption of power, 
                    water and other consumables at home and at work. We do this by offering individual 
                    support and advice on sustainability issues and environmental projects. 
                    We believe that to save our planet, we should first change ourselves. Change starts with you. 
                    As Mahatma Gandhi once said, “Be the change you wish to see in the world.”</p>

                <h5>Below you can find useful links to sustainability websites.</h5>
                <p>
                    <a href="http://www.earthhour.org">www.earthhour.org</a>
                    <br>
                    <a href="https://www.greenpeace.org.au/">www.greenpeace.org.au</a>
                    <br>
                    <a href="http://www.wwf.org.au/">www.wwf.org.au/</a>
                </p>
            </article>
        </div>
    </div>

    <?php include("../layout/footer.php"); ?>
    <?php include("../layout/design-bottom.php"); ?>
</body>
</html>

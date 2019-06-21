<?php include("../layout/a_config.php"); ?>

<?php session_start(); ?>

<!DOCTYPE html>

<head>
    <?php include("../layout/head-tag-contents.php"); ?>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body class="container-flex" >
    <?php include("../layout/design-top.php"); ?>
    <?php include("../layout/navigation.php"); ?>

    <div class="main container pt-2 pb-2">
        <div class="row">
            <img class="col-sm w-100 d-flex mt-3" src="../Images/contactUsPage.jpg" alt=""/>
        </div>
        <div class="row mt-5 mb-5">
            <div class=" col-sm-5 text-center">
                <h2 class="mb-3 ">Here's how to get in touch</h2>
                <p class=" text-wrap font-weight-bold">
                    123 Sustainability Street, Green City <br>
                    Tel. (Work) 02 9280 1111 <br>
                    Mob. 0411 111 111 <br>
                    Fax 02 9280 1112 <br>
                    Email info@yourearth.com.au<br>
                    Web http://www.yourearth.com.au
                </p>
            </div>
            <form class="col-sm mx-auto jumbotron bg-success">            

                <div class="col-sm">
                    <h3 class="font-weight-bold text-center">Send us email via this form</h3>
                </div>
                <div class="row">
                    <p class="col-sm"><span class="error">title, message and email are required</span></p>
                </div>
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="formGroupExampleInput">Enquiry title</label>
                        <input type="text" class="form-control" 
                               id="formGroupExampleInput" placeholder="Title">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="exampleFormControlTextarea1">Your message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="formGroupExampleInput">First Name</label>
                        <input type="text" class="form-control" 
                               id="formGroupExampleInput" placeholder="First Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="formGroupExampleInput">Last Name</label>
                        <input type="text" class="form-control" 
                               id="formGroupExampleInput" placeholder="Last Name">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" 
                               id="inputEmail4" placeholder="Email">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="formGroupExampleInput">Phone number</label>
                        <input type="text" class="form-control" name="phone" id="formGroupExampleInput" 
                               placeholder="Phone number">
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <button type="submit" class="btn btn-info col-sm-6">Send Message</button>
                </div>
            </form>
        </div>
    </div>

    <?php include("../layout/footer.php"); ?>
    <?php include("../layout/design-bottom.php"); ?>
</body>
</html>

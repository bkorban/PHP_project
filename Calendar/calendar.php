<?php include("../layout/a_config.php"); ?>
<?php include("../services/db.php"); ?>
<?php session_start(); ?>

<!DOCTYPE html>

<html>
    <head>
        <?php include("../layout/head-tag-contents.php"); ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/calendar.css">
    </head>
    <body>

        <?php include("../layout/design-top.php"); ?>
        <?php include("../layout/navigation.php"); ?>

        <div class="main container pt-2 pb-2">
            <div class="row">
                <img class="col-sm w-100 d-flex mt-3" src="../Images/calendarPage2.jpg" alt=""/>
            </div>
            <div class="row mt-5 mb-5">
                <div class="col-sm-12">
                    <div class="container-flex">
                        <div class="row mb-5">
                            <h2 class="col-sm-12 text-center">Check our calendar with events !!!</h2>	
                        </div>
                        <div class="row">
                            <div class="page-header col-sm-12">
                                <div class="pull-right form-inline col-sm">
                                    <div class="btn-group">
                                        <button class="btn btn-primary" data-calendar-nav="prev"><< Prev</button>
                                        <button class="btn btn-default" data-calendar-nav="today">Today</button>
                                        <button class="btn btn-primary" data-calendar-nav="next">Next >></button>
                                    </div>
                                    <div class="btn-group col-sm">
                                        <button class="btn btn-warning" data-calendar-view="year">Year</button>
                                        <button class="btn btn-warning active" data-calendar-view="month">Month</button>
                                        <button class="btn btn-warning" data-calendar-view="week">Week</button>
                                        <button class="btn btn-warning" data-calendar-view="day">Day</button>
                                    </div>
                                </div>
                                <h3></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-9">
                                <div id="showEventCalendar"></div>
                            </div>
                            <div class="col-md-3">
                                <h4>All Events List</h4>
                                <ul id="eventlist" class="nav nav-list"></ul>
                            </div>
                        </div>	
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
        <script type="text/javascript" src="js/calendar.js"></script>
        <script type="text/javascript" src="js/events.js"></script>
        <?php include("../layout/footer.php"); ?>
        <?php include("../layout/design-bottom.php"); ?>

    </body>
</html>


<?php

switch ($_SERVER["SCRIPT_NAME"]) {
    case "/pages/about.php":
        $CURRENT_PAGE = "About Us";
        $PAGE_TITLE = "About Us";
        break;
    case "/pages/blog.php":
        $CURRENT_PAGE = "Blog";
        $PAGE_TITLE = "Blog";
        break;
    case "/calendar/calendar.php":
        $CURRENT_PAGE = "Calendar";
        $PAGE_TITLE = "Calendar";
        break;
    case "/donate/donate.php":
        $CURRENT_PAGE = "Donate";
        $PAGE_TITLE = "Donate";
        break;
    case "/store/shop.php":
        $CURRENT_PAGE = "Online Shop";
        $PAGE_TITLE = "Online Shop";
        break;
    case "/account/register.php":
        $CURRENT_PAGE = "Register";
        $PAGE_TITLE = "Register";
        break;
    case "/account/login.php":
        $CURRENT_PAGE = "Login";
        $PAGE_TITLE = "Login";
        break;
    case "/account/details.php":
        $CURRENT_PAGE = "Details";
        $PAGE_TITLE = "Details";
        break;
     case "/pages/contactUs.php":
        $CURRENT_PAGE = "Details";
        $PAGE_TITLE = "Details";
        break;
    default:
        $CURRENT_PAGE = "Index";
        $PAGE_TITLE = "Welcome to the Your Earth Your Home Website !";
}

?>

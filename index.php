<?php
/**
 *  File name & path
 *  Author
 *  Date
 *  Description
 */

/*echo "<pre>";
var_dump($_SERVER);
echo "<pre>";
*/

// Redirect to login page
// header function has to come before any HTML output
// anything such as whitespace or comment outside(above) php tags, will be sent to browser, and may cause errors
// if there is only php code then better leave the closing php tag off
// be careful with header
require('check-login.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Super Secret</a>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="page1.php">Page 1</a></li>
                <li><a href="page2.php">Page 2</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>
    </nav>

    <h1>Admin Page</h1>
    <p>This page contains super-sensitive data</p>
</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>

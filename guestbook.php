<?php
//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Connect to your database
require('/home2/chyanggr/db.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="mystyle.css">
    <title>GuestBook</title>
    <link rel="icon" href="yImage/happy.jpg" type="image/png" id="favimage">
    <style>
        #login {
            color: darkred;
            font-size: 30px;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="jumbotron jumbotron-fluid">
        <h1>Your Information</h1>
    </div>
</div>
<div class="container pt-3 my-5 bg-info">
    <form id="form" action="add-client.php" method="post">
        <div class="row"> <!-- first name last name organization row-->
            <div class="col-md-4 mb-3">
                <label for="fName">First name</label>
                <input type="text" class="form-control" id="fName" name="fName" placeholder="First name">
                <span class="err" id="errFName">First Name Required</span><br>

            </div>
            <div class="col-md-4 mb-3">
                <label for="lName">Last name</label>
                <input type="text" class="form-control" id="lName" name="lName" placeholder="Last name">
                <span class="err" id="errLName">Last Name Required</span><br>
            </div>
            <div class="col-md-4 mb-3">
                <label for="comName">Company</label>
                <input type="text" class="form-control" id="comName" name="company" placeholder="Organization">
            </div>
        </div>
        <div class="row"> <!-- email phone number title row-->
            <div class="col-md-4 mb-3">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="xxxxxx@xxxxx.com">
                <span class="err" id="errMail">Field is required </span>
                <span class="err" id="errMail2">Please enter a valid email</span><br>
            </div>
            <div class="col-md-4 mb-3">
                <label for="linkedIn">LinkedIn URL</label>
                <input type="text" class="form-control" id="linkedIn" name="linkedIn" >
                <span class="err" id="errUrl">Please enter a valid URL</span><br>
            </div>
            <div class="col-md-4 mb-3">
                <label for="title">Job Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="form-check">
                    <!--                       <div class="col-md-4 mb-3">-->
                    <input class="form-check-input" type="checkbox" name="mailingList" id="mailingList">
                    <label class="form-check-label" for="mailingList">Please add me to your mailing list</label>
                </div>
                <div class="form-check" id="emailFormat">
                    <label class="form-check-label">Please choose an email format:</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="htmlOption" value="html" id="htmlOption">
                        <label class="form-check-label" for="htmlOption">HTML</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="textOption" value="text" id="textOption">
                        <label class="form-check-label" for="textOption">text</label>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="col">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message"></textarea>
                </div>
                <div class="col">
                    <label for="other">Other(please specify)</label>
                    <input type="text" class="form-control" id="other"><br>
                </div>
                <div class="col">
                    <p>&#9786;Thank you !&#9835;</p>
                    <button class="btn btn-primary" type="submit" id="btn">submit</button>
                </div>
                <a href="guestlogin.php">Admin Page</a>
            </div>
            <div class="col-md-4 mb-3">
                <select name="meetList" id="meetList">
                    <option value="none">how we met</option>
                    <option value="meetUp">Meet Up</option>
                    <option value="jobFair">jobFair</option>
                    <option value="alumniParty">Alumni Party</option>
                    <option value="promParty">Prom Party</option>
                    <option value="other">Other</option>
                    <option value="haveNotMeet">We haven't meet yet</option>
                </select>
                <span class="err" id="errList">Please Select</span><br>

            </div>

        </div>
        <a id="login" href="guestlogin.php">login Page</a>
    </form>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- <script src="guestbook.js"></script> -->
</body>
</html>
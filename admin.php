<?php
/**
 * Name: Chunhai Yang
 */

// Turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

// Connect to db
require ('/home2/chyanggr/db.php');


//Initialize all variables

$firstName = $lastName = $email = $linkedIn  = $meet = $datestamp = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href = "//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

</head>
<body>
<div class="container">

    <h3>Guest Information</h3>
    <a id="login" href="guestlogout.php">log out</a>


    <table id="guest-table">
        <thead>
          <tr>

               <th>FirstName</th>
               <th>LastName</th>
               <th>Company</th>
               <th>Email</th>
               <th>Linkedin</th>
               <th>JobTitle</th>
               <th>Message</th>
               <th>HowWeMet</th>
               <th>Date</th>


        </tr>
        </thead>
             
        <?php
        //if($_SERVER["REQUEST_METHOD"] == "POST") {
            // Define a query
            $sql = "SELECT * FROM guestbook";
           // $result = mysqli_query($cnxn, $sql);
            //$row = mysqli_fetch_array($result);
   // var_dump( $row);

   // get the data from the row
        /*
                $firstName = $row['FirstName'];
                $lastName = $row['LastName'];
                $company = $row['Company'];
                $email = $row['Email'];
                $linkedIn = $row['Linkedin'];
                $jobtitle = $row['JobTitle'];
                $message = $row['Message'];
                $meet = $row['HowWeMet'];
        */

            // Send the query to the db
            $result = mysqli_query($cnxn, $sql);
            // var_dump($result);

            // Process the result
            foreach ($result as $row) {
                // var_dump($row);

                $firstName = $row['FirstName'];
                $lastName = $row['LastName'];
                $company = $row['Company'];
                $email = $row['Email'];
                $linkedIn = $row['Linkedin'];
                $jobtitle = $row['JobTitle'];
                $message = $row['Message'];
                $meet = $row['HowWeMet'];
                $datestamp = $row['datestamp'];


                         echo " <tr>
                                   <td> $firstName</td>
                                   <td>$lastName</td>
                                   <td> $company</td>
                                   <td>$email</td>
                                   <td>$linkedIn</td>
                                   <td>$jobtitle</td>
                                   <td>$message</td>
                                   <td>$meet</td>
                                   <td>$datestamp</td>
                                       
                               </tr>";

            }
        ?>

    </table>
    <a href="guestbook.php">Add New Guest</a>
</div>


<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script>
    // JQuery
    $('#guest-table').DataTable();
</script>

</body>
</html>

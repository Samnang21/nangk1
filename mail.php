<?php

    $Full_Name = $_POST['Full Name'];
    $Email_Address = $_POST['Email Address'];
    $Phone_Number = $_POST['Phone_Number'];
    $Email_Subject = $_POST['Email_Subject'];
    $Your_Message = $_POST['Your_Message'];
    $name = $_POST['name'];


$mailheader = "From:".$Full_Name."<".$Email_Address ">\r\n";

$recipient = "vysamnang06@gmail.com";

mail($recipient, $Email_Subject, $Your_Message, $mailheader)
or die("Error!");


echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VY SAMNANG</title>


    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
 
    
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <div class="container">
        <h1>Thank you for contacting me. I will get back to you as 
            soon as possible!</h1>
            <p class="back">Go <span>back </span>to the <a href="Index.html">homepage</a></p>
    </div>

</body>
</html>  ';

?>


<?php

$server    = "localhost";
$username  = "root";
$password  = "";
$dbnname   = "webcoding";


$con = mysqli_connect($server, $username, $password, $dbnname);

if (!$con)
{
    echo "Error connecting";
}
/* else 
{
    echo "Connecting";
} */

//start

$text = $_post['text'];

$sql = "INSERT INTO `test`(`text`) VALUES ('text')";

$result = mysqli_query($con , $sql);

if($result)
{
    echo="data submittted";
}
else
{
echo "query failed...";
}
?>
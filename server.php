<?php
require_once("dbconnect.php");


$player = $_POST['player'];
$regid = $_POST['regnum'];
$phno = $_POST['phno'];
$branch = $_POST['branch'];
$sem = $_POST['semester'];
$hander = $_POST['bathand'];
$role = $_POST['specialisation'];
if($role == "batsman"){
    $battype = $_POST['battype'];
    $bowltype = "NA";
}
else{
    $battype = "NA" ;
    $bowltype = $_POST['bowltype'];
}


insertIntoTable($regid,$player,$phno, $branch, $sem,$hander, $role,$battype,$bowltype);



function insertIntoTable($regid,$player,$phno,$branch, $sem, $hander,$role,$battype,$bowltype){
global $conn;

$insertRow = "INSERT INTO playerinfo VALUES('$regid','$player','$phno','$branch','$sem','$hander', '$role','$battype','$bowltype');";
$result = $conn->query($insertRow);
if($result === TRUE)
echo "<h1>successfully inserted</h1>";
else
echo "<h1>You have already registered</h1>" ;
}
?>
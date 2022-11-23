<?php
require_once("dbconnect.php");


$player = $_POST['player'];
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


insertIntoTable($player, $branch, $sem,$hander, $role,$battype,$bowltype);



function insertIntoTable($player, $branch, $sem, $hander,$role,$battype,$bowltype){
global $conn;

$insertRow = "INSERT INTO playerinfo VALUES('$player', '$branch', '$sem','$hander', '$role','$battype','$bowltype')";
$result = $conn->query($insertRow);
echo "successfully inserted";

}
?>
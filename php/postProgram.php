<?php
include '../db.php';
session_start();
$setsd1 = $_REQUEST['setsd1'];
$totaltimed1 = $_REQUEST['totaltimed1'];
if (empty($_REQUEST['exercised1']))
{
    $exercised1=NULL;
}
else
{
    $exercised1=implode(",",$_REQUEST['exercised1']);
}


$setsd2 = $_REQUEST['setsd2'];
$totaltimed2 = $_REQUEST['totaltimed2'];
if (empty($_REQUEST['exercised2']))
{
    $exercised2=NULL;
}
else
{
    $exercised2=implode(",",$_REQUEST['exercised2']);
}

$setsd3 = $_REQUEST['setsd3'];
$totaltimed3 = $_REQUEST['totaltimed3'];
if (empty($_REQUEST['exercised3']))
{
    $exercised3=NULL;
}
else
{
    $exercised3=implode(",",$_REQUEST['exercised3']);
}



$setsd4 = $_REQUEST['setsd4'];
$totaltimed4 = $_REQUEST['totaltimed4'];
if (empty($_REQUEST['exercised4']))
{
    $exercised4=NULL;
}
else
{
    $exercised4=implode(",",$_REQUEST['exercised4']);
}


$setsd5 = $_REQUEST['setsd5'];
$totaltimed5 = $_REQUEST['totaltimed5'];
if (empty($_REQUEST['exercised5']))
{
    $exercised5=NULL;
}
else
{
    $exercised5=implode(",",$_REQUEST['exercised5']);
}


$setsd6 = $_REQUEST['setsd6'];
$totaltimed6 = $_REQUEST['totaltimed6'];
if (empty($_REQUEST['exercised6']))
{
    $exercised6=NULL;
}
else
{
    $exercised6=implode(",",$_REQUEST['exercised6']);
}


$setsd7 = $_REQUEST['setsd7'];
$totaltimed7 = $_REQUEST['totaltimed7'];
if (empty($_REQUEST['exercised7']))
{
    $exercised7=NULL;
}
else
{
    $exercised7=implode(",",$_REQUEST['exercised7']);
}


$sql = "INSERT INTO exercise(trainerId,setsd1,totaltimed1,exercised1,setsd2,totaltimed2,exercised2,setsd3,totaltimed3,exercised3,setsd4,totaltimed4,exercised4,setsd5,totaltimed5,exercised5,setsd6,totaltimed6,exercised6,setsd7,totaltimed7,exercised7) VALUES ('".$_SESSION["trainerId"]."', '$setsd1', '$totaltimed1','$exercised1', '$setsd2', '$totaltimed2','$exercised2', '$setsd3', '$totaltimed3','$exercised3', '$setsd4', '$totaltimed4','$exercised4', '$setsd5', '$totaltimed5','$exercised5', '$setsd6', '$totaltimed6','$exercised6', '$setsd7', '$totaltimed7','$exercised7')";


echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Program posted successfully!');
        window.location='../trainerDashboard.php';
      </script>";
} else {
     echo "<script>alert('Error ! Please try again later !');
        window.location='../trainerDashboard.php';
      </script>";
}

?>
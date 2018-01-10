<?php
session_start();
$trainerId = $_REQUEST['trainerId'];
$_SESSION['currentTrainer'] = $trainerId;
echo $trainerId;



?>
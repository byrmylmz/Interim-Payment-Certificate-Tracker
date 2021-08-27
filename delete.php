<?php


$id = $_GET["id"];


$sil = $db->query("DELETE FROM `subcontractors` WHERE `subcontractors`.`id` = $id");
if($sil){

    echo "Silindi";

    header("Location: dashboard.php");
}



?>
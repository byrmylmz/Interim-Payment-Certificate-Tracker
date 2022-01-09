<?php
//Include database configuration file
include('ayar.php');

if(isset($_POST["country_id"]) && !empty($_POST["country_id"])){
       echo '<option value="">Select Contract</option>';

            foreach($db->query("SELECT * FROM `proje_contracts` WHERE Subcontractor_id=".$_POST['country_id']."") as $row ) {

        echo '<option value="'.$row['Contract_id'].'">'.$row['Contract_Number'].'</option>';

}
}
if(isset($_POST["state_id"]) && !empty($_POST["state_id"])){
          

         foreach($db->query("SELECT * FROM `proje_contracts` WHERE Contract_id=".$_POST['state_id']."") as $row ) {

        echo '<option value="'.$row['Contract_id'].'">'.$row['Contract_Name'].'</option>';

}
}

?>
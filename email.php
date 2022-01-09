

<html>
<head>
<style>
@page {
  size: auto;
}

.dataTables_filter {
   float: Center !important;
   display: inline-block;
   width:500px;
}


</style>

</head>
<body>




<?php
include("ayar.php"); 
/**
 * User: BAYRAM
 * Date: 28.09.2018
 * Time: 14:18
 */
 


 
 $i=0;
foreach($db->query("SELECT * FROM subcontractors  WHERE `IPC_Status` ='On Site Signature' ORDER BY CONCAT(SUBSTR(DCC_time, 7, 4), SUBSTR(DCC_time, 4, 2), SUBSTR(DCC_time, 1, 2)) DESC, id DESC  ") as $row ) {
   $i++;
   $id= $row['id'];
   $datetime= $row['date_time'];
   $subcontractor_name= $row['Subcontractor_name'] ;
   $contract_no= $row['Contract_no'] ;
   $scope= $row['Scope'] ;
   $IPC_no= $row['IPC_no'];
   $IPC_Month= $row['IPC_Month'];
   $IPC_Month_Actual= $row['IPC_Month_Actual'];
   $IPC_Year= $row['IPC_Year'];
   $DCC_time= $row['DCC_time'];
   $Let= $row['Let'];



//
foreach($db->query("SELECT * FROM `proje_contracts` WHERE `Contract_Number` LIKE '$contract_no' ") as $row ) {
 $subcontractor_gruop1= $row['Subcontractor_id'];
  foreach($db->query("SELECT * FROM `proje_subcontractors` WHERE `Subcontractor_id`= $subcontractor_gruop1") as $row ) {
   $subcontractor_gruop= $row['Subcontractor_Group'];
  }
}
  foreach($db->query("SELECT * FROM `ipc_status` WHERE `IPC_id` = $id") as $row ) {
   $ipc_remarks= $row['IPC_Remarks'];
   $IPC_with_whom= $row['IPC_with_whom'];
   $Status_Hour= $row['Status_Hour'];
   $Status_Time= $row['Status_Time'];
  }




    // This part for Days From Dcc Submission
    $day= date("Y/m/d", strtotime($DCC_time));
    $startTimeStamp = strtotime($day);
    $endTimeStamp = strtotime("now");
    $timeDiff = abs($endTimeStamp - $startTimeStamp);
    $numberDays = $timeDiff/86400;  // 86400 seconds in one day
    $numberDays = intval($numberDays);
    
    //This part is from status date - How many days are passed?
    $status_day= date("Y/m/d", strtotime($Status_Time));
    $startTimeStamp_status = strtotime($status_day);
    $endTimeStamp_status = strtotime("now");
    $timeDiff_status = abs($endTimeStamp_status - $startTimeStamp_status);
    $numberDays_status = $timeDiff_status/86400;  // 86400 seconds in one day
    $numberDays_status = intval($numberDays_status);

    //here we calculated time hourly basis for status.
    $total      = strtotime("now+1hour") - strtotime($Status_Hour);
    $hours      = floor($total / 60 / 60);
    $minutes    = round(($total - ($hours * 60 * 60)) / 60);
    
    if ($numberDays_status>2){
      echo "Dear ".$IPC_with_whom."<br>";
      echo $subcontractor_name." / ".$contract_no." / IPC ".$IPC_no."<br>";
      echo "You received above mentinoed IPC - ".$numberDays_status.' days '.$hours.' hours '.$minutes.' minutes ago.<br>';
      echo "IPC Submitted to DCC $numberDays days ago.<br>";
      echo "Dear $IPC_with_whom IPC is with you more than 2 days.You completed your Limit. 
      Please bring IPC back to us.<hr>";}
      else{
      echo "Dear ".$IPC_with_whom."<br>";
      echo $subcontractor_name." / ".$contract_no." / IPC ".$IPC_no."<br>";
      echo "You received above mentinoed IPC - ".$numberDays_status.' days '.$hours.' hours '.$minutes.' minutes ago.<br>';
      echo "IPC Submitted to DCC $numberDays days ago.<hr>";
          

      }
	  
}

?>
 
</body>
</html>

<?php

  
    $IPCno =$_POST["IPCno"];
    $IPC_Month =$_POST["IPC_Month"];
    $IPC_Year =$_POST["IPC_Year"];
    $DCC_Hour=$_POST["DCC_Hour"];
    $IPC_Month_Actual=$_POST["IPC_Month_Actual"];
    $IPC_Year_Actual =$_POST["IPC_Year_Actual"];
    $Let =$_POST["Let"];
    $Aconex_Mail_id =$_POST["aconex_mail_id"];
    $ipc_period_start_date =$_POST["ipc_period_start_date"];
    $ipc_period_end_date =$_POST["ipc_period_end_date"];
  
	
    //Zaman ayari Baslangic
    $DCC_time_Stamp =$_POST["DCCtime"];
	$timestamp = strtotime($DCC_time_Stamp);
 
    // Creating new date format from that timestamp
    $DCC_time = date("d-m-Y", $timestamp);
	   
    //Zaman ayari bitis
	
	

$id = $_GET["id"];




$update = $db->query("UPDATE subcontractors SET 

IPC_no='$IPCno',
IPC_Month='$IPC_Month',
IPC_Year='$IPC_Year',
IPC_Month_Actual='$IPC_Month_Actual',
IPC_Year_Actual='$IPC_Year_Actual',
ipc_period_start_date='$ipc_period_start_date',
ipc_period_end_date='$ipc_period_end_date',
DCC_time='$DCC_time',
DCC_Hour='$DCC_Hour',
Aconex_Mail_id='$Aconex_Mail_id', 
Let='$Let'
WHERE id = $id");


if($update){

  

   header("Location: dashboard.php"); 
}



?>
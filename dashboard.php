<?php

// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location:index.html');
	exit;
}

include("ayar.php");
include ("menu.php");



Function index(){
    Global $db,$connection;

    include ("SubcontractorRegister.php");
    include ("Allsubcontractors.php");

    
}

Function Amount_Report(){
    Global $db;
   
    include ("Amount_Report.php");
}
Function Payment_Report(){
  Global $db;
 
  include ("Payment_Report.php");
}

Function IPC_Log(){
  Global $db;
 
  include ("IPC_Log.php");
}

Function Site_Report(){
    Global $db;
   
    include ("Site_Report.php");
}

Function Green_Table(){
    Global $db;
   
    include ("Green_Table.php");
}

Function Rsubcontractor(){
    Global $menu,$db,$connection;

    echo $subcontractor_id=$_POST['country'];
   echo  $contract_id=$_POST['state'];


    // Subcontractor name checked
    foreach($db->query("SELECT * FROM `proje_subcontractors`  WHERE  Subcontractor_id=$subcontractor_id ") as $row ) {
       $subcontractorname=$row['Subcontractor_Name'];
           }

    // Contract information taken from contract table
    foreach($db->query("SELECT * FROM `proje_contracts`  WHERE  Contract_id=$contract_id ") as $row ) {
        $contractno=$row['Contract_Number'];
        $scope=$row['Contract_Name'];
        $Contract_id=$row['Contract_id'];
           }
  
   
    $IPCno =$_POST["IPCno"];
    $DCC_Hour =$_POST["DCC_Hour"];
    $Let =$_POST["Let"];
    $IPC_Month=$_POST["IPC_Month"];
    $IPC_Year=$_POST["IPC_Year"];

	//Zaman ayari veriyoruz
	 $DCC_time_Stamp =$_POST["DCCtime"];
	 $timestamp = strtotime($DCC_time_Stamp);
     //ceviriyoruz text yapıyoruz burda
     $DCC_time = date("d-m-Y", $timestamp);  
   
    
     try {
        //sql komutumu oluşturdum veriyiri gireceğiz şimdi
        $sql = "INSERT INTO subcontractors (Subcontractor_name,Contract_no,Scope,IPC_no,IPC_Month,IPC_Year,DCC_time,DCC_Hour,Let) 
                                     VALUES ('$subcontractorname','$contractno','$scope','$IPCno','$IPC_Month','$IPC_Year','$DCC_time','$DCC_Hour','$Let')";
        // burdada ayar sayfasındakı $db baglantımı calıstdım. veri eklendi
        $db->exec($sql);
       


        //hatayı görmek için hazır kod
     }catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
          }

          if (! $sql) {
            echo'kayıt yapılamadı';
    
        }else{
            echo'kayıt yapıldı';
            
            
            //kayıt yapıldıgı anda para tablosuna da kayıt yapıyoruz.
            foreach($db->query("SELECT * FROM `subcontractors`  ORDER BY id DESC LIMIT 1; ") as $row ) {
                $IPC_id=$row['id'];
            }
             $sql1 = "INSERT INTO proje_ipccoverpage (Contract_id,Subcontractor_id,IPC_id,Amount_Status) 
            VALUES ('$Contract_id','$subcontractor_id',$IPC_id,'Estimated')";
          // burdada ayar sayfasındakı $db baglantımı calıstdım. veri eklendi
            $db->exec($sql1);
            header("Location: dashboard.php");

        }
    
    
}

Function IPCstatus_ekle(){
    Global $db;

    $ipc_id = $_GET["id"];
    $IPC_Remarks=$_POST["IPC_Remarks"];
    $IPC_Status=$_POST["IPC_Status"];
    $IPC_with_whom=$_POST["IPC_with_whom"];
    $ax=$_POST["Ax_Uploaded"];
    $Status_Hour=$_POST["status_hour"];
	  //Zaman ayari Baslangic
	   $Status_Time_Stamp =$_POST["status_time"];
   	$timestamp = strtotime($Status_Time_Stamp);
     // Creating new date format from that timestamp
    $Status_Time = date("d-m-Y", $timestamp);  
    //Zaman ayari bitis
	
   //////////////////Statusu update ediyoruz- Hakedise bagli olan
   $update = $db->query("UPDATE subcontractors SET IPC_Status='$IPC_Status' WHERE id = $ipc_id");


    // Sorgumuzu hazırlıyoruz
    $query = $db->prepare('INSERT INTO ipc_status (IPC_id,IPC_Status,IPC_with_whom,IPC_Remarks,Status_Time,Status_Hour) VALUES(?,?,?,?,?,?)');

    // Sorguda belirttiğimiz yerlere gelecek değerleri veriyoruz
    $query->execute(array($ipc_id,$IPC_Status,$IPC_with_whom,$IPC_Remarks,$Status_Time,$Status_Hour));

    if (! $query) {
        echo'kayıt yapılamadı';

    }else{
        echo'kayıt yapıldı';
      header("Location: dashboard.php?Git=IPCstatus&id=$ipc_id");
    }
    
    
    


}

Function delete(){
    Global $db;
    include ("delete.php");

}
Function IPC_status_sil(){
    Global $db;
    
    $id = $_GET["id"];
    
  foreach($db->query("SELECT * FROM `ipc_status` WHERE `id` = $id") as $row ) {
   $ipc_id= $row['IPC_id'];
 }

 $sil = $db->query("DELETE FROM `ipc_status` WHERE `ipc_status`.`id` = $id" );
    


 if($sil){

    echo "Silindi";

   header("Location: dashboard.php?Git=IPCstatus&id=$ipc_id");
 }


}
Function update1(){
    Global $db;
    include ("update.php");

}

Function IPCstatus(){
    Global $db;
    include ("IPCstatus.php");
    include ("IPCstatuslist.php");

    

}
Function update(){
    Global $db;
	
	
	
	$id = $_GET["id"];
	
  foreach($db->query("SELECT * FROM `subcontractors` WHERE `id` = $id") as $row ) {
   $id= $row['id'];
   $datetime= $row['date_time'];
   $DCC_Hour= $row['DCC_Hour'];
   $subcontractor_name= $row['Subcontractor_name'] ;
   $contract_no= $row['Contract_no'] ;
   $scope= $row['Scope'] ;
   $IPC_no= $row['IPC_no'];
      $IPC_Month= $row['IPC_Month'];
      $IPC_Year= $row['IPC_Year'];
      $IPC_Month_Actual= $row['IPC_Month_Actual'];
      $IPC_Year_Actual= $row['IPC_Year_Actual'];
      $ipc_period_start_date= $row['ipc_period_start_date'];
      $ipc_period_end_date= $row['ipc_period_end_date'];
      $Let= $row['Let'];
	  $Aconex_Mail_id= $row['Aconex_Mail_id'];
    
     //Zaman ayari Baslangic
	 $DCC_time_Stamp =$row['DCC_time'];
	$timestamp = strtotime($DCC_time_Stamp);
 
    // Creating new date format from that timestamp
   $DCC_time = date("Y-m-d", $timestamp);
	   
    //Zaman ayari bitis



   echo "
           <div class='container-sm mt-2'>
         <div class='card bg-light mb-3'>
         <div class='card-header'><h4>Update IPC Information<h4></div>
         <div class='card-body'>
    

    <form action='dashboard.php?Git=update1&id=$id' method='post'>
    
    
    <div class='form-group row'>
    <label for='scname' class='col-sm-2 col-form-label'>Subcontractor </label>
    <div class='col-sm-5'>
      <input type='text' class='form-control' id='scname'  name='Sname'  value='$subcontractor_name' disabled>
    </div>
    </div>
    
    <div class='form-group row'>
    <label for='Scontract' class='col-sm-2 col-form-label'>Contract </label>
    <div class='col-sm-5'>
      <input type='text' class='form-control' id='Scontract'  name='Scontract'  value='$contract_no' disabled>
    </div>
    </div>

    <div class='form-group row'>
    <label for='Sscope' class='col-sm-2 col-form-label'>Scope </label>
    <div class='col-sm-5'>
      <input type='text' class='form-control' id='Sscope'  name='Sscope'  value='$scope' disabled>
    </div>
    </div>


    <div class='form-group row'>
    <label for='IPCno' class='col-sm-2 col-form-label'>IPC No </label>
    <div class='col-sm-5'>
      <input type='text' class='form-control' id='IPCno'  name='IPCno'  value='$IPC_no' required>
    </div>
    </div>
  
    <div class='form-group row'>
    <label for='IPCno' class='col-sm-2 col-form-label'>Processing on Month </label>
    
    <div class='col-sm-3'>
    <select name='IPC_Month' class='custom-select' required>
    <option value=''> </option>
    <option value='January' ";  if($IPC_Month=="January") echo "selected='selected'";  echo" >January</option>
    <option value='February' ";  if($IPC_Month=="February") echo "selected='selected'";  echo" >February</option>
    <option value='March' ";  if($IPC_Month=="March") echo "selected='selected'";  echo" >March</option>
    <option value='April' ";  if($IPC_Month=="April") echo "selected='selected'";  echo" >April</option>
    <option value='May' ";  if($IPC_Month=="May") echo "selected='selected'";  echo" >May</option>
    <option value='June' ";  if($IPC_Month=="June") echo "selected='selected'";  echo" >June</option>
    <option value='July' ";  if($IPC_Month=="July") echo "selected='selected'";  echo" >July</option>
    <option value='August' ";  if($IPC_Month=="August") echo "selected='selected'";  echo" >August</option>
    <option value='September' ";  if($IPC_Month=="September") echo "selected='selected'";  echo" >September</option>
    <option value='October' ";  if($IPC_Month=="October") echo "selected='selected'";  echo" >October</option>
    <option value='November' ";  if($IPC_Month=="November") echo "selected='selected'";  echo" >November</option>
    <option value='December' ";  if($IPC_Month=="December") echo "selected='selected'";  echo" >December</option>
    </select>
    </div>
    <div class='col-sm-2'>
    <select name='IPC_Year' class='custom-select' required>
    <option value=''> </option>
    <option value='2021' ";  if($IPC_Year=="2021") echo "selected='selected'";  echo" >2021</option>
    <option value='2020' ";  if($IPC_Year=="2020") echo "selected='selected'";  echo" >2020</option>
    <option value='2019' ";  if($IPC_Year=="2019") echo "selected='selected'";  echo" >2019</option>
    </select>
    </div>
   

    </div>
    
    
    

    <div class='form-group row'>
    <label for='IPCno' class='col-sm-2 col-form-label'>Actual Period</label>
    <div class='col-sm-3'>
    <select name='IPC_Month_Actual' class='custom-select' >
    <option value=''> </option>
    <option value='January' ";  if($IPC_Month_Actual=="January") echo "selected='selected'";  echo" >January</option>
    <option value='February' ";  if($IPC_Month_Actual=="February") echo "selected='selected'";  echo" >February</option>
    <option value='March' ";  if($IPC_Month_Actual=="March") echo "selected='selected'";  echo" >March</option>
    <option value='April' ";  if($IPC_Month_Actual=="April") echo "selected='selected'";  echo" >April</option>
    <option value='May' ";  if($IPC_Month_Actual=="May") echo "selected='selected'";  echo" >May</option>
    <option value='June' ";  if($IPC_Month_Actual=="June") echo "selected='selected'";  echo" >June</option>
    <option value='July' ";  if($IPC_Month_Actual=="July") echo "selected='selected'";  echo" >July</option>
    <option value='August' ";  if($IPC_Month_Actual=="August") echo "selected='selected'";  echo" >August</option>
    <option value='September' ";  if($IPC_Month_Actual=="September") echo "selected='selected'";  echo" >September</option>
    <option value='October' ";  if($IPC_Month_Actual=="October") echo "selected='selected'";  echo" >October</option>
    <option value='November' ";  if($IPC_Month_Actual=="November") echo "selected='selected'";  echo" >November</option>
    <option value='December' ";  if($IPC_Month_Actual=="December") echo "selected='selected'";  echo" >December</option>
    </select>
    </div>
    <div class='col-sm-2'>
    <select name='IPC_Year_Actual' class='custom-select' >
    <option value=''> </option>
    <option value='2021' ";  if($IPC_Year_Actual=="2021") echo "selected='selected'";  echo" >2021</option>
    <option value='2020' ";  if($IPC_Year_Actual=="2020") echo "selected='selected'";  echo" >2020</option>
    <option value='2019' ";  if($IPC_Year_Actual=="2019") echo "selected='selected'";  echo" >2019</option>
    </select>
    </div>
    </div>
  
    <div class='form-group row'>
    <label for='Let' class='col-sm-2 col-form-label'>Aconex Letter No</label>
    <div class='col-sm-5'>
      <input type='text' class='form-control' id='Let'  name='Let'  value='$Let' required>
    </div>
    </div>

    <div class='form-group row'>
    <label for='DCCtime' class='col-sm-2 col-form-label'>DCC Date</label>
    <div class='col-sm-5'>
      <input type='date' class='form-control' id='DCCtime'  name='DCCtime'  value='$DCC_time' required>
    </div>
    </div>

    <div class='form-group row'>
    <label for='DCC_Hour' class='col-sm-2 col-form-label'>DCC Hour</label>
    <div class='col-sm-5'>
      <input type='time' class='form-control' id='DCC_Hour'  name='DCC_Hour'  value='$DCC_Hour' required>
    </div>
    </div>

    <div class='form-group row'>
    <label for='DCCtime' class='col-sm-2 col-form-label'>IPC Period First Day</label>
    <div class='col-sm-5'>
      <input type='date' class='form-control' id='ipc_period_start_date'  name='ipc_period_start_date'  value='$ipc_period_start_date' >
    </div>
    
    </div>

    <div class='form-group row'>
    <label for='DCC_Hour' class='col-sm-2 col-form-label'>IPC Period Last Day</label>
    <div class='col-sm-5'>
    <input type='date' class='form-control' id='ipc_period_end_date'  name='ipc_period_end_date'  value='$ipc_period_end_date' >
  </div>
    </div>

    <div class='form-group row'>
    <label for='aconex_mail_id' class='col-sm-2 col-form-label'>Aconex Mail ID</label>
    <div class='col-sm-5'>
      <input type='text' class='form-control' id='aconex_mail_id'  name='aconex_mail_id'  value='$Aconex_Mail_id' >
    </div>
    </div>
   
            <input type='submit' name='button' id='button' value='Update' class='btn btn-info' />
   </form>
  
 </div>
 </div>
 </div>"; 

  }

}

Function Ax_Uploaded(){
    Global $db;

$ipc_id= $_GET['ipc_id'];
    
    foreach($db->query(" SELECT * FROM `subcontractors` WHERE `id`=$ipc_id  ") as $row ) {
             $Ax_Uploaded= $row['Ax_Uploaded'];
                     }if ($Ax_Uploaded==""){                            
    $update = $db->query("UPDATE subcontractors SET Ax_Uploaded='Uploaded' WHERE id = $ipc_id");   
    }else{
    $update = $db->query("UPDATE subcontractors SET Ax_Uploaded='' WHERE id = $ipc_id");
                           echo"";}

if($update){

header("Location: dashboard.php?Git=IPCstatus&id=$ipc_id");

} 
    } 



 //-- Ax uploaded son
    
 //////////////////////////////////////////////// Ax Approved Baslangıc 
    Function Ax_Approved(){
    Global $db;

$ipc_id= $_GET['ipc_id'];
    
    foreach($db->query(" SELECT * FROM `subcontractors` WHERE `id`=$ipc_id  ") as $row ) {
             $Ax_Approved= $row['Ax_Approved'];
                     }if ($Ax_Approved==""){                            
    $update = $db->query("UPDATE subcontractors SET Ax_Approved='Approved' WHERE id = $ipc_id");   
    }else{
    $update = $db->query("UPDATE subcontractors SET Ax_Approved='' WHERE id = $ipc_id");
                           echo"";}

if($update){

header("Location: dashboard.php?Git=IPCstatus&id=$ipc_id");

}
    }
///////////////////////////////////////////Ax Approved son
        
//////////////////////////////////////////////// Delivered to finance
    Function Delivered_Finance(){
    Global $db;

$ipc_id= $_GET['ipc_id'];
    
    foreach($db->query(" SELECT * FROM `subcontractors` WHERE `id`=$ipc_id  ") as $row ) {
             $Delivered_Finance= $row['Delivered_Finance'];
                     }if ($Delivered_Finance==""){                            
    $update = $db->query("UPDATE subcontractors SET Delivered_Finance='Delivered' WHERE id = $ipc_id");   
    }else{
    $update = $db->query("UPDATE subcontractors SET Delivered_Finance='' WHERE id = $ipc_id");
                           echo"";}

if($update){

header("Location: dashboard.php?Git=IPCstatus&id=$ipc_id");

} 
///////////////////////////////////////////Delivered to finance
    
}

$Git = isset($_GET['Git']) ? $_GET['Git'] : '';

Switch($Git){
    default:
        index();
        break;

    case "Form";
       include ("SubcontractorRegister.php");
       break;

    case "update";
        update();
        break;

    case "Rsubcontractor";
        Rsubcontractor();
        break;

    case "sil";
        delete();
        break;
		
    case "update1";
        update1();
        break;
    
     case "IPCstatus";
        IPCstatus();
        break;
    
    case "IPCstatus_ekle";
        IPCstatus_ekle();
        break;
    
    case "IPC_status_sil";
        IPC_status_sil();
        break;
    
    case "Amount_Report";
        Amount_Report();
        break;

        case "Payment_Report";
        Payment_Report();
        break;
        
        case "IPC_Log";
        IPC_Log();
        break;
    
    case "Site_Report";
        Site_Report();
        break;
    
    case "Ax_Uploaded";
       Ax_Uploaded();
       break;
    
    case "Ax_Approved";
       Ax_Approved();
       break;
    
    case "Delivered_Finance";
       Delivered_Finance();
       break;
	   
    
     case "Green_Table";
       Green_Table();
       break;
}
    
?>

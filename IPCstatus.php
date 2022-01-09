

                                                                                                                         
                                                                                                                                               
<?php

include("ayar.php"); 

$ipc_id=$_GET["id"];

  foreach($db->query(" SELECT * FROM `subcontractors` WHERE `id`=$ipc_id  ") as $row ) {
	 $subcontractor_name= $row['Subcontractor_name'];
	 $IPC_No= $row['IPC_no'];
	 
	 $Contract_no= $row['Contract_no'];

			
	
  }


		foreach($db->query("SELECT * FROM `ipc_status`  WHERE `IPC_id` = $ipc_id ORDER BY id DESC  LIMIT 1 ; " ) as $row ) {
 

  $ipc_status= $row['IPC_Status'];


}
// Burda status bos oldugunda ariza cikarmasin diye kontrol attim
if(empty($ipc_status)){$ipc_status="On Site Signature";}{ $ipc_status= $row['IPC_Status'];}
echo "



<div class='container'>
<!----burda basligi cektim-->
<div class='card bg-light mb-3 mt-3' >
<div class='card-header'> <h5>$subcontractor_name / $Contract_no / IPC - $IPC_No</h5> </div>
<div class='card-body'>


<form action='dashboard.php?Git=IPCstatus_ekle&id=$ipc_id' method='post'>



     <div class='form-group'>
            <label for='select menu'><h6>Select the Status</h6></label>
            <select class='custom-select'  name='IPC_Status' >
            <option ";if ($ipc_status=="On Site Signature"){echo "selected=selected";} echo">On Site Signature</option>
            <option ";if ($ipc_status=="With IPC Team"){echo "selected=selected";} echo">With IPC Team</option>
            <option ";if ($ipc_status=="Cover Signature"){echo "selected=selected";} echo">Cover Signature</option>
			      <option ";if ($ipc_status=="Delivered to Finance"){echo "selected=selected";} echo">Delivered to Finance</option>
			      <option ";if ($ipc_status==">Final IPC<"){echo "selected=selected";} echo">Final IPC</option>
            <option ";if ($ipc_status=="Hold IPC"){echo "selected=selected";}echo">Hold IPC</option>
            <option ";if ($ipc_status=="Cancelled IPC"){echo "selected=selected";}echo">Cancelled IPC</option>
            </select>  
      </div>
      
      <div class='form-group'>
      <label for='select menu'><h6>IPC With Whom:</h6></label>
      <select class='custom-select'  name='IPC_with_whom' >
      
      <option>Blank</option>";
      // I check the personels from database
        foreach ($db->query("SELECT * FROM proje_limak_personal") as $row){
        $personal_name_surname=$row['personal_name_surname'];
        $personal_email=$row['personal_email'];
        echo" <option value='$personal_name_surname'>$personal_name_surname / ($personal_email)</option>";
       }
      echo "
       </select>  
      </div>

			  
			 <div class='form-group'>
            <label for='Remarks'><h6>Remarks / Notes </h6></label>
			 <input class='form-control' type='text'name='IPC_Remarks' size='80' placeholder='Write your comment....' />
			 </div>
			  <div class='form-group'>
			 <label for='Remarks'><h6>Date</h6></label>
			 <input class='form-control'  type='date'  value='"; echo date("Y-m-d");   echo"' name='status_time'>
			 </div>
			   <div class='form-group'>
			 <label for='Remarks'><h6>Time</h6> </label>
			 <input class='form-control'  type='time'  value='"; date_default_timezone_set("Turkey"); echo date("H:i");  echo"' name='status_hour'>
              </div>
			 
              <div class='form-group'>
             
             <input class='btn btn-primary' type='submit' name='button' id='button' value='Submit' />
          
             </div>

             <div class='form-group'>
             <div class='alert alert-primary' role='alert'>
            ";?> 
           
           
           <input type='checkbox'   onclick='window.location.assign(" <?php echo'dashboard.php?Git=Ax_Uploaded&ipc_id='.$ipc_id; ?> ")'                         
             <?php                  
                                           // Axa yüklenmişmi ona bakıyorum yüklenmişse checked
             foreach($db->query(" SELECT * FROM `subcontractors` WHERE `id`=$ipc_id  ") as $row ) {
             $Ax_Uploaded= $row['Ax_Uploaded'];
                     }if ($Ax_Uploaded=="Uploaded"){       
                          echo "checked";   }else{
                           echo"";}
                                           
                              ?>             
                             >  <label for='Remarks'><h6>Ax Uploaded</h6> </label></div></div>
              <div class='form-group'>
              <div class='alert alert-primary' role='alert'>
         <input type='checkbox'   onclick='window.location.assign(" <?php echo'dashboard.php?Git=Ax_Approved&ipc_id='.$ipc_id; ?> ")'                         
                                <?php                  
                                           // Axa yüklenmişmi ona bakıyorum yüklenmişse checked
             foreach($db->query(" SELECT * FROM `subcontractors` WHERE `id`=$ipc_id  ") as $row ) {
             $Ax_Uploaded= $row['Ax_Approved'];
                     }if ($Ax_Uploaded=="Approved"){       
                          echo "checked";   }else{
                           echo"";}
                                           
                              ?>             
                             > <label for='Remarks'><h6>Ax Approved</h> </label></div></div>

                            
<?php echo"



</form>
 
</div>
</div>
";



?>


<?php
ob_start (); // Buffer output
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}


?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
<script src="js/jquery.formula.js"></script>
</head>
<body>
    



<?php


include("ayar.php");
include ("menu.php");

Function log_form(){

    Global $db;
        
    $IPC_id=$_GET['id'];    
	   // Burda taseronun adini filan cektik 
	  foreach($db->query(" SELECT * FROM `subcontractors` WHERE `id`=$IPC_id  ") as $row ) {
    $subcontractor_name= $row['Subcontractor_name'];
	  $Contract_no= $row['Contract_no'];
    $Scope= $row['Scope'];
    $IPC_Status= $row['IPC_Status'];
    $IPC_No= $row['IPC_no'];
    $IPC_Month= $row['IPC_Month'];
    }
    


	  // burda da para birimini cektik
    foreach($db->query(" SELECT * FROM `proje_contracts`  WHERE Contract_Number='$Contract_no' ") as $row ) {
            $KWD_Currency= $row['KWD_Currency'];
             $USD_Currency= $row['USD_Currency'];
             $EURO_Currency= $row['Euro_Currency'];
	     }
	 

	 
	 // burda da butun bilgileri aldik id ye gore
	foreach($db->query("SELECT * FROM `proje_ipccoverpage` WHERE `IPC_id` = $IPC_id") as $row ) {
        $KSGA=$row['KSGA'];
        $KSAP=$row['KSAP'];
        $KSPB=$row['KSPB'];
        $KSRA=$row['KSRA'];
        $KSIA=$row['KSIA'];
        $KSTA=$row['KSTA'];
        $KSDA=$row['KSDA'];
        $KSNA=$row['KSNA'];
        $USGA=$row['USGA'];
        $USAP=$row['USAP'];
        $USPB=$row['USPB'];
        $USRA=$row['USRA'];
        $USIA=$row['USIA'];
        $USTA=$row['USTA'];
        $USDA=$row['USDA'];
        $USNA=$row['USNA'];
        $ESGA=$row['ESGA'];
        $ESAP=$row['ESAP'];
        $ESPB=$row['ESPB'];
        $ESRA=$row['ESRA'];
        $ESIA=$row['ESIA'];
        $ESTA=$row['ESTA'];
        $ESDA=$row['ESDA'];
        $ESNA=$row['ESNA'];
        $KSCGA=$row['KSCGA'];
        $KSCAP=$row['KSCAP'];
        $KSCPB=$row['KSCPB'];
        $KSCRA=$row['KSCRA'];
        $KSCIA=$row['KSCIA'];
        $KSCTA=$row['KSCTA'];
        $KSCDA=$row['KSCDA'];
        $KSCNA=$row['KSCNA'];
        $USCGA=$row['USCGA'];
        $USCAP=$row['USCAP'];
        $USCPB=$row['USCPB'];
        $USCRA=$row['USCRA'];
        $USCIA=$row['USCIA'];
        $USCTA=$row['USCTA'];
        $USCDA=$row['USCDA'];
        $USCNA=$row['USCNA'];
        $ESCGA=$row['ESCGA'];
        $ESCAP=$row['ESCAP'];
        $ESCPB=$row['ESCPB'];
        $ESCRA=$row['ESCRA'];
        $ESCIA=$row['ESCIA'];
        $ESCTA=$row['ESCTA'];
        $ESCDA=$row['ESCDA'];
        $ESCNA=$row['ESCNA'];
        $KGA=$row['KGA'];
        $KAP=$row['KAP'];
        $KPB=$row['KPB'];
        $KRA=$row['KRA'];
        $KIA=$row['KIA'];
        $KTA=$row['KTA'];
        $KDA=$row['KDA'];
        $KNA=$row['KNA'];
        $UGA=$row['UGA'];
        $UAP=$row['UAP'];
        $UPB=$row['UPB'];
        $URA=$row['URA'];
        $UIA=$row['UIA'];
        $UTA=$row['UTA'];
        $UDA=$row['UDA'];
        $UNA=$row['UNA'];
        $EGA=$row['EGA'];
        $EAP=$row['EAP'];
        $EPB=$row['EPB'];
        $ERA=$row['ERA'];
        $EIA=$row['EIA'];
        $ETA=$row['ETA'];
        $EDA=$row['EDA'];
        $ENA=$row['ENA'];
        $KCGA=$row['KCGA'];
        $KCAP=$row['KCAP'];
        $KCPB=$row['KCPB'];
        $KCRA=$row['KCRA'];
        $KCIA=$row['KCIA'];
        $KCTA=$row['KCTA'];
        $KCDA=$row['KCDA'];
        $KCNA=$row['KCNA'];
        $UCGA=$row['UCGA'];
        $UCAP=$row['UCAP'];
        $UCPB=$row['UCPB'];
        $UCRA=$row['UCRA'];
        $UCIA=$row['UCIA'];
        $UCTA=$row['UCTA'];
        $UCDA=$row['UCDA'];
        $UCNA=$row['UCNA'];
        $ECGA=$row['ECGA'];
        $ECAP=$row['ECAP'];
        $ECPB=$row['ECPB'];
        $ECRA=$row['ECRA'];
        $ECIA=$row['ECIA'];
        $ECTA=$row['ECTA'];
        $ECDA=$row['ECDA'];
        $ECNA=$row['ECNA'];
        
  $Amount_Status=$row['Amount_Status'];
  
	 
    if($KWD_Currency=="on"){}	 
    if($USD_Currency=="on"){}
    if($EURO_Currency=="on"){}
          
	
	 
  }






  echo"<div class='container'>
   <div class='card bg-light m-3 ' style='width:800px'>
   <div class='card-header'><h4>Rajit`s Module</h4></div>
   <div class='card-body'>
   <!-- <h5 class='card-title'>Light card title</h5>-->
    
    <form action='ipc-log.php?Git=Cover_Page_Update_Act&id=$IPC_id' method='post'>


    <div class='form-group'>
    <label for='exampleInputEmail1'>Subcontractor Name</label>
    <input type='text' class='form-control' id='subcontractor-name' disabled placeholder='$subcontractor_name'>
    </div>
    <div class='form-group'>
    <label for='exampleInputEmail1'>Scope of Work</label>
    <input type='text' class='form-control' id='subcontractor-name' disabled placeholder='$Scope'>
    </div>
    <div class='form-group'>
    <label for='exampleInputEmail1'>IPC No</label>
    <div class='row'>
    <div class='col-sm'>
    <input type='text' class='form-control' id='subcontractor-name' disabled placeholder='$IPC_No'>
    </div>
    <div class='col-sm'>
    
    <input type='text' class='form-control' id='subcontractor-name' disabled placeholder='$IPC_Month'>
    </div>
    </div>
    </div>
    <div class='form-group'>
    <label for='exampleInputEmail1'>IPC Status</label>
    <input type='text' class='form-control' id='subcontractor-name' disabled placeholder='$IPC_Status'>
    </div>
    
    <label for='exampleInputEmail1'><h5>Amount Status</h5></label>
    <div class='form-group'>
      <p class='text-left'><b>Estimated:</b> The Amount can change later.</p>
      <p class='text-left'><b>Certified:</b> If your are sure the amount will not change + Certified by IPC Team</p>
      <select class='custom-select'  name='Amount_Status'>
      <option ";if ($Amount_Status=="Estimated"){echo "selected=selected";} echo">Estimated</option>
      <option ";if ($Amount_Status=="Certified"){echo "selected=selected";} echo">Certified</option>
      </select>  
      </div>
   

    <hr>
    <div class='alert alert-info' role='alert'>
    <center><h3>Submitted Current Amount</h3></center>
    </div>
  
    <div class='form-row'>
    <label for='exampleInputEmail1'></label>

    <!--=============================================-->
    <div class='col'>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-SGA' value='$KSGA' placeholder='KWD Submitted Gross'  ";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p><hr>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-SAP' value='$KSAP' placeholder='KWD Advance Payment'  ";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-SPB' value='$KSPB' placeholder='KWD Performance Bond'  ";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-SRA' value='$KSRA' placeholder='KWD Retention'  ";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-SIA' value='$KSIA' placeholder='KWD Insurance'  ";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-STA' value='$KSTA' placeholder='KWD Taxation'  ";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-SDA' value='$KSDA' placeholder='KWD Other Deduction'   ";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p><hr>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-SNA' value='$KSNA' placeholder='KWD Net Amount'   ";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    </div>

    <!--=============================================-->
    <div class='col'>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-SGA' value='$USGA' placeholder='USD Submitted Gross'  ";if($USD_Currency=="on"){}else{echo"disabled";} echo" ></p><hr>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-SAP' value='$USAP' placeholder='USD Advance Payment' ";if($USD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-SPB' value='$USPB' placeholder='USD Performance Bond' ";if($USD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-SRA' value='$USRA' placeholder='USD Retention'";if($USD_Currency=="on"){}else{echo"disabled";} echo" ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-SIA' value='$USIA' placeholder='USD Insurance'";if($USD_Currency=="on"){}else{echo"disabled";} echo" ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-STA' value='$USTA' placeholder='USD Taxation'";if($USD_Currency=="on"){}else{echo"disabled";} echo" ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-SDA' value='$USDA' placeholder='USD Other Deduction' ";if($USD_Currency=="on"){}else{echo"disabled";} echo" ></p><hr> 
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-SNA' value='$USNA' placeholder='USD Net Amount' ";if($USD_Currency=="on"){}else{echo"disabled";} echo" ></p>
    </div>
    <!--=============================================-->
    <div class='col'>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-SGA' value='$ESGA' placeholder='EURO Submitted Gross' ";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p><hr> 
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-SAP' value='$ESAP' placeholder='EURO Advance Payment'  ";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-SPB' value='$ESPB' placeholder='EURO Performance Bond'  ";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-SRA' value='$ESRA' placeholder='EURO Retention'";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-SIA' value='$ESIA' placeholder='EURO Insurance'";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-STA' value='$ESTA' placeholder='EURO Taxation'";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-SDA' value='$ESDA' placeholder='EURO Other Deduction' ";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p><hr>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-SNA' value='$ESNA' placeholder='EURO Net Amount' ";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p>
    </div>
    </div>
    <!--=============================================-->

    <hr>
    <div class='alert alert-info' role='alert'>
    <center><h3>Submitted Cumulative Amount</h3></center>
    </div>
  
    <div class='form-row'>
    <label for='exampleInputEmail1'></label>

    <!--=============================================-->
    <div class='col'>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-SCGA' value='$KSCGA' placeholder='KWD Submitted Gross' ";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p> <hr> 
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-SCAP' value='$KSCAP' placeholder='KWD Advance Payment'  ";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-SCPB' value='$KSCPB' placeholder='KWD Performance Bond'  ";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-SCRA' value='$KSCRA' placeholder='KWD Retention' ";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-SCIA' value='$KSCIA' placeholder='KWD Insurance' ";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-SCTA' value='$KSCTA' placeholder='KWD Taxation' ";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-SCDA' value='$KSCDA' placeholder='KWD Other Deduction' ";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p><hr> 
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-SCNA' value='$KSCNA' placeholder='KWD Net Amount'";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    </div>
    <!--=============================================-->
    <div class='col'>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-SCGA' value='$USCGA' placeholder='USD Submitted Gross' ";if($USD_Currency=="on"){}else{echo"disabled";} echo" ></p><hr>    
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-SCAP' value='$USCAP' placeholder='USD Advance Payment' ";if($USD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-SCPB' value='$USCPB' placeholder='USD Performace Bond' ";if($USD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-SCRA' value='$USCRA' placeholder='USD Retention'";if($USD_Currency=="on"){}else{echo"disabled";} echo" ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-SCIA' value='$USCIA' placeholder='USD Insurance'";if($USD_Currency=="on"){}else{echo"disabled";} echo" ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-SCTA' value='$USCTA' placeholder='USD Taxation'";if($USD_Currency=="on"){}else{echo"disabled";} echo" ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-SCDA' value='$USCDA' placeholder='USD Other Deduction'";if($USD_Currency=="on"){}else{echo"disabled";} echo" ></p><hr>  
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-SCNA' value='$USCNA' placeholder='USD Net Amount' ";if($USD_Currency=="on"){}else{echo"disabled";} echo" ></p>
    </div>
    <!--=============================================-->
    <div class='col'>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-SCGA' value='$ESCGA' placeholder='EURO Submitted Gross' ";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p><hr>   
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-SCAP' value='$ESCAP' placeholder='EURO Advance Payment'  ";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-SCPB' value='$ESCPB' placeholder='EURO Performance Bond'  ";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-SCRA' value='$ESCRA' placeholder='EURO Retention'";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-SCIA' value='$ESCIA' placeholder='EURO Insurance'";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-SCTA' value='$ESCTA' placeholder='EURO Taxation'";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-SCDA' value='$ESCDA' placeholder='EURO Other Deduction'";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p><hr>   
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-SCNA' value='$ESCNA' placeholder='EURO Net Amount' ";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p>
    </div>
    </div>
    <!--=============================================-->



    
    <hr>
    <div class='alert alert-primary' role='alert'>
    <center><h3>Cerfified Current Amount</h3></center>
    </div>
  
    <div class='form-row'>
    <label for='exampleInputEmail1'></label>

    <!--=============================================-->
    <div class='col'>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-GA' value='$KGA' placeholder='KWD Submitted Gross'  ";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p><hr>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-AP' value='$KAP' placeholder='KWD Advance Payment'  ";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-PB' value='$KPB' placeholder='KWD Performance Bond'  ";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-RA' value='$KRA' placeholder='KWD Retention'  ";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-IA' value='$KIA' placeholder='KWD Insurance'  ";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-TA' value='$KTA' placeholder='KWD Taxation'  ";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-DA' value='$KDA' placeholder='KWD Other Deduction'   ";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p><hr>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-NA' value='$KNA' placeholder='KWD Net Amount'   ";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    </div>

    <!--=============================================-->
    <div class='col'>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-GA' value='$UGA' placeholder='USD Submitted Gross'  ";if($USD_Currency=="on"){}else{echo"disabled";} echo" ></p><hr>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-AP' value='$UAP'placeholder='USD Advance Payment' ";if($USD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-PB' value='$UPB'placeholder='USD Performance Bond' ";if($USD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-RA' value='$URA'placeholder='USD Retention'";if($USD_Currency=="on"){}else{echo"disabled";} echo" ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-IA' value='$UIA'placeholder='USD Insurance'";if($USD_Currency=="on"){}else{echo"disabled";} echo" ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-TA' value='$UTA'placeholder='USD Taxation'";if($USD_Currency=="on"){}else{echo"disabled";} echo" ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-DA' value='$UDA' placeholder='USD Other Deduction' ";if($USD_Currency=="on"){}else{echo"disabled";} echo" ></p><hr>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-NA' value='$UNA' placeholder='USD Net Amount' ";if($USD_Currency=="on"){}else{echo"disabled";} echo" ></p>
    </div>
    <!--=============================================-->
    <div class='col'>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-GA' value='$EGA' placeholder='EURO Submitted Gross' ";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p><hr>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-AP' value='$EAP'placeholder='EURO Advance Payment'  ";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-PB' value='$EPB'placeholder='EURO Performance Bond'  ";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-RA' value='$ERA'placeholder='EURO Retention'";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-IA' value='$EIA'placeholder='EURO Insurance'";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-TA' value='$ETA'placeholder='EURO Taxation'";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-DA' value='$EDA' placeholder='EURO Other Deduction' ";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p><hr>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-NA' value='$ENA' placeholder='EURO Net Amount' ";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p>
    </div>
    </div>
    <!--=============================================-->

    <hr>
    <div class='alert alert-primary' role='alert'>
    <center><h3>Certified Cumulative Amount</h3></center>
    </div>
  
    <div class='form-row'>
    <label for='exampleInputEmail1'></label>

    <!--=============================================-->
    <div class='col'>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-CGA' value='$KCGA' placeholder='KWD Submitted Gross' ";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p><hr>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-CAP' value='$KCAP' placeholder='KWD Advance Payment'  ";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-CPB' value='$KCPB' placeholder='KWD Performance Bond'  ";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-CRA' value='$KCRA' placeholder='KWD Retention' ";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-CIA' value='$KCIA' placeholder='KWD Insurance' ";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-CTA' value='$KCTA' placeholder='KWD Taxation' ";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-CDA' value='$KCDA' placeholder='KWD Other Deduction' ";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p><hr>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='K-CNA' value='$KCNA' placeholder='KWD Net Amount'";if($KWD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    </div>
    <!--=============================================-->
    <div class='col'>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-CGA' value='$UCGA' placeholder='USD Submitted Gross' ";if($USD_Currency=="on"){}else{echo"disabled";} echo" ></p><hr>   
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-CAP' value='$UCAP' placeholder='USD Advance Payment' ";if($USD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-CPB' value='$UCPB' placeholder='USD Performace Bond' ";if($USD_Currency=="on"){}else{echo"disabled";} echo"  ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-CRA' value='$UCRA' placeholder='USD Retention'";if($USD_Currency=="on"){}else{echo"disabled";} echo" ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-CIA' value='$UCIA' placeholder='USD Insurance'";if($USD_Currency=="on"){}else{echo"disabled";} echo" ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-CTA' value='$UCTA' placeholder='USD Taxation'";if($USD_Currency=="on"){}else{echo"disabled";} echo" ></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-CDA' value='$UCDA' placeholder='USD Other Deduction'";if($USD_Currency=="on"){}else{echo"disabled";} echo" ></p><hr>  
    <p><input type='text' class='form-control' id='subcontractor-name' name ='U-CNA' value='$UCNA' placeholder='USD Net Amount' ";if($USD_Currency=="on"){}else{echo"disabled";} echo" ></p>
    </div>
    <!--=============================================-->
    <div class='col'>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-CGA' value='$ECGA' placeholder='EURO Submitted Gross' ";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p><hr>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-CAP' value='$ECAP' placeholder='EURO Advance Payment'  ";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-CPB' value='$ECPB' placeholder='EURO Performance Bond'  ";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-CRA' value='$ECRA' placeholder='EURO Retention'";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-CIA' value='$ECIA' placeholder='EURO Insurance'";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-CTA' value='$ECTA' placeholder='EURO Taxation'";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p>
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-CDA' value='$ECDA' placeholder='EURO Other Deduction'";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p><hr>  
    <p><input type='text' class='form-control' id='subcontractor-name' name ='E-CNA' value='$ECNA' placeholder='EURO Net Amount' ";if($EURO_Currency=="on"){}else{echo"disabled";} echo"></p>
    </div>
    </div>
    <!--=============================================-->
 

    <center> <button type='submit' class='btn btn-primary btn-lg'>Update</button></center>
    
  </form>

  </div>
  </div>
 ";

}

    
Function Cover_Page_Update(){
    Global $db;
        
    $IPC_id=$_GET['id'];    
	
	
    
}
  
Function Cover_Page_Update_Act(){
    Global $db;
        
    

    $KSGA=$_POST['K-SGA'];
    $KSAP=$_POST['K-SAP'];
    $KSPB=$_POST['K-SPB'];
    $KSRA=$_POST['K-SRA'];
    $KSIA=$_POST['K-SIA'];
    $KSTA=$_POST['K-STA'];
    $KSDA=$_POST['K-SDA'];
    $KSNA=$_POST['K-SNA'];
    $USGA=$_POST['U-SGA'];
    $USAP=$_POST['U-SAP'];
    $USPB=$_POST['U-SPB'];
    $USRA=$_POST['U-SRA'];
    $USIA=$_POST['U-SIA'];
    $USTA=$_POST['U-STA'];
    $USDA=$_POST['U-SDA'];
    $USNA=$_POST['U-SNA'];
    $ESGA=$_POST['E-SGA'];
    $ESAP=$_POST['E-SAP'];
    $ESPB=$_POST['E-SPB'];
    $ESRA=$_POST['E-SRA'];
    $ESIA=$_POST['E-SIA'];
    $ESTA=$_POST['E-STA'];
    $ESDA=$_POST['E-SDA'];
    $ESNA=$_POST['E-SNA'];
    $KSCGA=$_POST['K-SCGA'];
    $KSCAP=$_POST['K-SCAP'];
    $KSCPB=$_POST['K-SCPB'];
    $KSCRA=$_POST['K-SCRA'];
    $KSCIA=$_POST['K-SCIA'];
    $KSCTA=$_POST['K-SCTA'];
    $KSCDA=$_POST['K-SCDA'];
    $KSCNA=$_POST['K-SCNA'];
    $USCGA=$_POST['U-SCGA'];
    $USCAP=$_POST['U-SCAP'];
    $USCPB=$_POST['U-SCPB'];
    $USCRA=$_POST['U-SCRA'];
    $USCIA=$_POST['U-SCIA'];
    $USCTA=$_POST['U-SCTA'];
    $USCDA=$_POST['U-SCDA'];
    $USCNA=$_POST['U-SCNA'];
    $ESCGA=$_POST['E-SCGA'];
    $ESCAP=$_POST['E-SCAP'];
    $ESCPB=$_POST['E-SCPB'];
    $ESCRA=$_POST['E-SCRA'];
    $ESCIA=$_POST['E-SCIA'];
    $ESCTA=$_POST['E-SCTA'];
    $ESCDA=$_POST['E-SCDA'];
    $ESCNA=$_POST['E-SCNA'];
    $KGA=$_POST['K-GA'];
    $KAP=$_POST['K-AP'];
    $KPB=$_POST['K-PB'];
    $KRA=$_POST['K-RA'];
    $KIA=$_POST['K-IA'];
    $KTA=$_POST['K-TA'];
    $KDA=$_POST['K-DA'];
    $KNA=$_POST['K-NA'];
    $UGA=$_POST['U-GA'];
    $UAP=$_POST['U-AP'];
    $UPB=$_POST['U-PB'];
    $URA=$_POST['U-RA'];
    $UIA=$_POST['U-IA'];
    $UTA=$_POST['U-TA'];
    $UDA=$_POST['U-DA'];
    $UNA=$_POST['U-NA'];
    $EGA=$_POST['E-GA'];
    $EAP=$_POST['E-AP'];
    $EPB=$_POST['E-PB'];
    $ERA=$_POST['E-RA'];
    $EIA=$_POST['E-IA'];
    $ETA=$_POST['E-TA'];
    $EDA=$_POST['E-DA'];
    $ENA=$_POST['E-NA'];
    $KCGA=$_POST['K-CGA'];
    $KCAP=$_POST['K-CAP'];
    $KCPB=$_POST['K-CPB'];
    $KCRA=$_POST['K-CRA'];
    $KCIA=$_POST['K-CIA'];
    $KCTA=$_POST['K-CTA'];
    $KCDA=$_POST['K-CDA'];
    $KCNA=$_POST['K-CNA'];
    $UCGA=$_POST['U-CGA'];
    $UCAP=$_POST['U-CAP'];
    $UCPB=$_POST['U-CPB'];
    $UCRA=$_POST['U-CRA'];
    $UCIA=$_POST['U-CIA'];
    $UCTA=$_POST['U-CTA'];
    $UCDA=$_POST['U-CDA'];
    $UCNA=$_POST['U-CNA'];
    $ECGA=$_POST['E-CGA'];
    $ECAP=$_POST['E-CAP'];
    $ECPB=$_POST['E-CPB'];
    $ECRA=$_POST['E-CRA'];
    $ECIA=$_POST['E-CIA'];
    $ECTA=$_POST['E-CTA'];
    $ECDA=$_POST['E-CDA'];
    $ECNA=$_POST['E-CNA'];
    // ---------


$Amount_Status=$_POST['Amount_Status'];
echo $IPC_id=$_GET['id'];

//BURADA AYI CEKIP SONRA O SAYFAYA YONLENDIRMEK ICIN KULLANIYORUM
 foreach($db->query("SELECT * FROM `subcontractors` WHERE `id` = $IPC_id") as $row ) {
	   $IPC_Month=$row['IPC_Month'];
	   
	   }
        
        $update = $db->query("UPDATE proje_ipccoverpage SET 
        Amount_Status='$Amount_Status',
        KSGA='$KSGA',
        KSAP='$KSAP',
        KSPB='$KSPB',
        KSRA='$KSRA',
        KSIA='$KSIA',
        KSTA='$KSTA',
        KSDA='$KSDA',
        KSNA='$KSNA',
        USGA='$USGA',
        USAP='$USAP',
        USPB='$USPB',
        USRA='$USRA',
        USIA='$USIA',
        USTA='$USTA',
        USDA='$USDA',
        USNA='$USNA',
        ESGA='$ESGA',
        ESAP='$ESAP',
        ESPB='$ESPB',
        ESRA='$ESRA',
        ESIA='$ESIA',
        ESTA='$ESTA',
        ESDA='$ESDA',
        ESNA='$ESNA',
        KSCGA='$KSCGA',
        KSCAP='$KSCAP',
        KSCPB='$KSCPB',
        KSCRA='$KSCRA',
        KSCIA='$KSCIA',
        KSCTA='$KSCTA',
        KSCDA='$KSCDA',
        KSCNA='$KSCNA',
        USCGA='$USCGA',
        USCAP='$USCAP',
        USCPB='$USCPB',
        USCRA='$USCRA',
        USCIA='$USCIA',
        USCTA='$USCTA',
        USCDA='$USCDA',
        USCNA='$USCNA',
        ESCGA='$ESCGA',
        ESCAP='$ESCAP',
        ESCPB='$ESCPB',
        ESCRA='$ESCRA',
        ESCIA='$ESCIA',
        ESCTA='$ESCTA',
        ESCDA='$ESCDA',
        ESCNA='$ESCNA',
        KGA='$KGA',
        KAP='$KAP',
        KPB='$KPB',
        KRA='$KRA',
        KIA='$KIA',
        KTA='$KTA',
        KDA='$KDA',
        KNA='$KNA',
        UGA='$UGA',
        UAP='$UAP',
        UPB='$UPB',
        URA='$URA',
        UIA='$UIA',
        UTA='$UTA',
        UDA='$UDA',
        UNA='$UNA',
        EGA='$EGA',
        EAP='$EAP',
        EPB='$EPB',
        ERA='$ERA',
        EIA='$EIA',
        ETA='$ETA',
        EDA='$EDA',
        ENA='$ENA',
        KCGA='$KCGA',
        KCAP='$KCAP',
        KCPB='$KCPB',
        KCRA='$KCRA',
        KCIA='$KCIA',
        KCTA='$KCTA',
        KCDA='$KCDA',
        KCNA='$KCNA',
        UCGA='$UCGA',
        UCAP='$UCAP',
        UCPB='$UCPB',
        UCRA='$UCRA',
        UCIA='$UCIA',
        UCTA='$UCTA',
        UCDA='$UCDA',
        UCNA='$UCNA',
        ECGA='$ECGA',
        ECAP='$ECAP',
        ECPB='$ECPB',
        ECRA='$ECRA',
        ECIA='$ECIA',
        ECTA='$ECTA',
        ECDA='$ECDA',
        ECNA='$ECNA'
        
          
        WHERE IPC_id = '$IPC_id'");
        
            header("Location:ipc-log.php?Git=log_form&id=$IPC_id");

  
}
    

    
    


$Git = isset($_GET['Git']) ? $_GET['Git'] : '';

Switch($Git){
    default:
        index();
        break;
    
    case "log_form";
        log_form();
      break;
    
    case "Cover_Page_Update";
        Cover_Page_Update();
    break;
    
    case "Cover_Page_Update_Act";
        Cover_Page_Update_Act();
    break;


}
    
?>

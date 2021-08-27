<?php
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
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* { 
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
    width: 100%;
    
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width:200;
  padding: 15px;
  margin: 5px 0 22px 10;
  display: inline-block;
  border: none;
  background: #f1f1f1;


    }

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}


/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0px 0px 10px ;
  border: none;
  cursor: pointer;
  width: 200;
  opacity: 0.8;
}

.registerbtn:hover {
  opacity: 1;

    
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
    
    
    
    
</style>
          
  <style>
      select{
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    padding: 10px;
	font-weight: bold;
    border-style: dashed;
    border-width: 1px;
    border-color:#808080;
	background-color:#ddd;
    font-size: 15px;
	margin-left:155px;
	
}
      </style>
</head>
<body>
    
    

<?php
 ob_start(); 

include("ayar.php");
include ("menu.php");

	

    
 Function Cover_Page_Update(){
    Global $db;
        
    $IPC_id=$_GET['id'];    
	
	  foreach($db->query(" SELECT * FROM `subcontractors` WHERE `id`=$IPC_id  ") as $row ) {
      $subcontractor_name= $row['Subcontractor_name'];
	  $Contract_no= $row['Contract_no'];
	  $IPC_No= $row['IPC_no'];
	  
	   echo "<div style='
            font-size: 35px;
			background-color: #CDE5D1;
            text-align: center;
            width: 100%;'>$subcontractor_name / $Contract_no / IPC - $IPC_No
			</div>";
			
		
                     }
	   
      foreach($db->query(" SELECT * FROM `proje_contracts`  WHERE Contract_Number='$Contract_no' ") as $row ) {
            $KWD_Currency= $row['KWD_Currency'];
             $USD_Currency= $row['USD_Currency'];
             $Euro_Currency= $row['Euro_Currency'];
	  }
	 
	       echo "
        <form action='Cover_Page.php?Git=Cover_Page_Update_Act&id=$IPC_id' method='post'>
  <div class='container'>
<h2>Update Cover Page</h2>  
  
 ";
	 
	 
	  foreach($db->query("SELECT * FROM `proje_ipccoverpage` WHERE `IPC_id` = $IPC_id") as $row ) {
  $KSGA= $row['KSGA'];
  $KSDA= $row['KSDA'];
  $KSNA= $row['KSNA'];
  $KGA= $row['KGA'];
  $KDA= $row['KDA'];
  $KNA= $row['KNA'];
  // USD
  $USGA= $row['USGA'];
  $USDA= $row['USDA'];
  $USNA= $row['USNA'];
  $UGA= $row['UGA'];
  $UDA= $row['UDA'];
  $UNA= $row['UNA'];
  //EURO
  $ESGA= $row['ESGA'];
  $ESDA= $row['ESDA'];
  $ESNA= $row['ESNA'];
  $EGA= $row['EGA'];
  $EDA= $row['EDA'];
  $ENA= $row['ENA'];
  //-----------------  
  $Amount_Status=$row['Amount_Status'];
  $Currency= $row['Currency'];
	 
	  if($KWD_Currency=="on"){
		  
		  
		   echo" 
    <hr>
    <label for='email'><b>Submitted Amount</b></label>
    <input type='text' style='width:70px;' value='KWD' name='Currency' >
    <input type='text' placeholder='Submitted Gross Amount' value='$KSGA' name='K-SGA' data-variavel='field1' >
    <input type='text' placeholder='Submitted Deduction Amount' value='$KSDA' name='K-SDA' data-variavel='field2' >
    <input type='text' placeholder='Submitted Net Amount' value='$KSNA' name='K-SNA' data-formula='#field1# - #field2#'  step='.01' >
	<br>
	
	
    <label for='email'><b  style='margin-left:80px;'>Amount</b></label>
    <input type='text' style='width:70px;' value='KWD' name='Currency' >
    <input type='text' placeholder='Gross Amount' value='$KGA' name='K-GA' data-variavel='field3' >
    <input type='text' placeholder='Deduction Amount' value='$KDA' name='K-DA' data-variavel='field4' >
    <input type='text' placeholder='Net Amount' value='$KNA' name='K-NA' data-formula='#field3# - #field4#' >


		  ";
		  
	  }	  if($USD_Currency=="on"){
		  
		  echo" 
    <hr>
    <label for='email'><b>Submitted Amount</b></label>
    <input type='text' style='width:60px;' value='USD' name='Currency' >
    <input type='text' placeholder='Submitted Gross Amount' value='$USGA' name='U-SGA' data-variavel='field5' >
    <input type='text' placeholder='Submitted Deduction Amount' value='$USDA' name='U-SDA' data-variavel='field6' >
    <input type='text' placeholder='Submitted Net Amount' value='$USNA' name='U-SNA' data-formula='#field5# - #field6#'>
	<br>
	
	
    <label for='email'><b  style='margin-left:80px;'>Amount</b></label>
    <input type='text' style='width:60px;' value='USD' name='Currency' >
    <input type='text' placeholder='Gross Amount' value='$UGA' name='U-GA' data-variavel='field7' >
    <input type='text' placeholder='Deduction Amount' value='$UDA' name='U-DA' data-variavel='field8'>
    <input type='text' placeholder='Net Amount' value='$UNA' name='U-NA' data-formula='#field7# - #field8#'>


		  ";
		  
		  
	  }	  if($Euro_Currency=="on"){
		  
		  echo" 
    <hr>
    <label for='email'><b>Submitted Amount</b></label>
    <input type='text' style='width:60px;' value='EURO' name='Currency' >
    <input type='text' placeholder='Submitted Gross Amount' value='$ESGA' name='E-SGA' data-variavel='field9'>
    <input type='text' placeholder='Submitted Deduction Amount' value='$ESDA' name='E-SDA' data-variavel='field10' >
    <input type='text' placeholder='Submitted Net Amount' value='$ESNA' name='E-SNA' data-formula='#field9# - #field10#' >
	<br>
	
	
    <label for='email'><b  style='margin-left:80px;'>Amount</b></label>
    <input type='text' style='width:60px;' value='EURO' name='Currency' >
    <input type='text' placeholder='Gross Amount' value='$EGA' name='E-GA' data-variavel='field11' >
    <input type='text' placeholder='Deduction Amount' value='$EDA' name='E-DA' data-variavel='field12'>
    <input type='text' placeholder='Net Amount' value='$ENA' name='E-NA' data-formula='#field11# - #field12#'>


		  ";
		  
	  }
          
		echo" <br>
          <select name='Amount_Status' id='Amount_Status'>
		      <option  value='Estimated' "; if($Amount_Status=="Estimated"){echo "selected";}  echo">Estimated</option>
	           <option  value='Approved' ";if($Amount_Status=="Approved"){echo "selected";} echo" >Approved</option>
         </select>
	<br> <button style='margin-left:155px;' type='submit' class='registerbtn'>Update</button> </div>  <hr></form>
    
 
 
</form>       
        ";  
	 
}
    
}
  
Function Cover_Page_Update_Act(){
    Global $db;
        
      
echo $KSGA=$_POST['K-SGA'];
echo $KSDA=$_POST['K-SDA'];
echo $KSNA=$_POST['K-SNA'];
echo $KGA=$_POST['K-GA'];
echo $KDA=$_POST['K-DA'];
echo $KNA=$_POST['K-NA'];
// USD
echo $USGA=$_POST['U-SGA'];
echo $USDA=$_POST['U-SDA'];
echo $USNA=$_POST['U-SNA'];
echo $UGA=$_POST['U-GA'];
echo $UDA=$_POST['U-DA'];
echo $UNA=$_POST['U-NA'];

// EURO
echo $ESGA=$_POST['E-SGA'];
echo $ESDA=$_POST['E-SDA'];
echo $ESNA=$_POST['E-SNA'];
echo $EGA=$_POST['E-GA'];
echo $EDA=$_POST['E-DA'];
echo $ENA=$_POST['E-NA'];

echo $Amount_Status=$_POST['Amount_Status'];
echo $IPC_id=$_GET['id'];

//BURADA AYI CEKIP SONRA O SAYFAYA YONLENDIRMEK ICIN KULLANIYORUM
 foreach($db->query("SELECT * FROM `subcontractors` WHERE `id` = $IPC_id") as $row ) {
	   $IPC_Month=$row['IPC_Month'];
	   
	   }
        
        $update = $db->query("UPDATE proje_ipccoverpage SET  Amount_Status='$Amount_Status', KSGA='$KSGA', KSDA ='$KSDA', KSNA='$KSNA', KGA='$KGA', KDA='$KDA', KNA='$KNA',USGA='$USGA',USDA='$USDA',USNA='$USNA',UGA='$UGA',UDA='$UDA',UNA='$UNA',ESGA='$ESGA',ESDA='$ESDA',ESNA='$ESNA',EGA='$EGA',EDA='$EDA',ENA='$ENA' WHERE IPC_id = '$IPC_id'");
        
            header("Location:dashboard.php?Git=Amount_Report&Month=$IPC_Month");

  
}
    

    
    


$Git = isset($_GET['Git']) ? $_GET['Git'] : '';

Switch($Git){
    default:
        index();
        break;
    
  
    
    case "Cover_Page_Update";
        Cover_Page_Update();
    break;
    
    case "Cover_Page_Update_Act";
        Cover_Page_Update_Act();
    break;


}
    
?>


<?php


// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location:index.php');
	exit;
}
    ob_start(); 
include("ayar.php");
include ("menu.php");

	
    
Function index(){
    Global $db,$connection;
	
    
}
 
Function Add_New_Subcontractor(){
    Global $db,$connection;    
        
 ?>

    <div class='container-sm mt-2'>
         <div class='card bg-light mb-3'>
         <div class='card-header'><h4>Add New Subcontractor<h4></div>
         <div class='card-body'>
    

         <form action="Add.php?Git=Add_New_Subcontractor_Act" method="post">
      
  <div class='form-group row'>
  <label for='scname' class='col-sm-2 col-form-label'>Trade</label>
  <div class='col-sm-5'>
  <select name="Subcontractor_Group" class='custom-select' required>
  <option value="">Select Group</option>
  <option value="Civil">Civil</option>
  <option value="Steel">Steel</option>
  <option value="Design">Design</option>
  <option value="MEP">MEP</option>
  <option value="Others">Others</option>
  </select>
  </div>
  </div>
  
  
  <div class='form-group row'>
  <label for='Subcontractor_Name' class='col-sm-2 col-form-label'>Subcontractor Name </label>
  <div class='col-sm-5'>
  <input type='text' class='form-control' id='Subcontractor_Name'  name='Subcontractor_Name'  value='' required>
  </div>
  </div>

  <div class='form-group row'>
  <label for='Subcontractor_IPC_Engineer' class='col-sm-2 col-form-label'>IPC Engineer</label>
  <div class='col-sm-5'>
  <select name="Subcontractor_IPC_Engineer" class='custom-select' required>
  <option value=""></option>
  <option value="Bayram Yilmaz">Bayram Yilmaz</option>
  <option value="Rajit Balakrishna">Rajit Balakrishna</option>
  <option value="Ahmet Albayrak">Ahmet Albayrak</option>
  <option value="Mert Soylemez">Mert Soylemez</option>
  <option value="Others">Others</option>
  </select>
  </div>
  </div>

  <div class='form-group row'>
  <label for='Subcontractor_Status' class='col-sm-2 col-form-label'>Subcontractor Status</label>
  <div class='col-sm-5'>
  <select name="Subcontractor_Status"  class='custom-select'  required>
  <option value="">Select Status</option>
  <option value="Countinuing">Countinuing</option>
  <option value="Finalized">Finalized</option>
  </select>
  </div>
  </div>


 
     
  <div class="d-flex justify-content-center">
  <input type='submit' name='button' id='button' value='Add ' class='btn btn-info' />
  </div>
 


    </form>

    </div>
    </div>
    </div>
    </div>


<?php	

include ("subcontractor-list.php");
}
 
    
Function Add_New_Contract(){
    Global $db,$connection;    
        
?>


    <div class='container-sm mt-2'>
         <div class='card bg-light mb-3'>
         <div class='card-header'><h4>Add New Contract<h4></div>
         <div class='card-body'>
    
     <form action="Add.php?Git=Add_New_Contract_Act" method="post">

     <div class='form-group row'>
    <label for='contract_trade' class='col-sm-2 col-form-label'>Trade</label>
    <div class='col-sm-5'>
    <select name="contract_trade" class='custom-select' required>
    <option value="">Select Group</option>
    <option value="Civil">Civil</option>
    <option value="Steel">Steel</option>
    <option value="Design">Design</option>
    <option value="MEP">MEP</option>
    <option value="Others">Others</option>
    </select>
    </div>
    </div>

      <div class='form-group row'>
      <label for='Subcontractor_Status' class='col-sm-2 col-form-label'>Select Subcontractor</label>
      <div class='col-sm-5'>
      <select name="Subcontractor_id"  class='custom-select ' required>
      <option value="">Select Subcontractor</option>
       <?php
            foreach($db->query("SELECT * FROM `proje_subcontractors` ORDER BY Subcontractor_Name  ") as $row ) {
            echo '<option value="'.$row['Subcontractor_id'].'">'.$row['Subcontractor_Name'].'</option>'; 
             }
        ?>
     </select>
     </div>
     </div>

     <div class='form-group row'>
     <label for='Contract_Number' class='col-sm-2 col-form-label'>Contract Number </label>
     <div class='col-sm-5'>
     <input type='text' class='form-control' id='Contract_Number'  name='Contract_Number'  value='' required>
     </div>
     </div>

     <div class='form-group row'>
     <label for='Contract_Name' class='col-sm-2 col-form-label'>Contract Name</label>
     <div class='col-sm-5'>
     <input type='text' class='form-control' id='Contract_Name'  name='Contract_Name'  value='' required>
     </div>
     </div>

     <div class='form-group row'>
     <label for='Contract_Type' class='col-sm-2 col-form-label'>Contract Type</label>
     <div class='col-sm-5'>
     <input type='text' class='form-control' id='Contract_Type'  name='Contract_Type'  value='' required>
     </div>
     </div>

     <div class='form-group row'>
     <label for='Contract_Payment_Period' class='col-sm-2 col-form-label'>Payment Period</label>
     <div class='col-sm-5'>
     <input type='text' class='form-control' id='Contract_Payment_Period'  name='Contract_Payment_Period'  value='' required>
     </div>
     </div>

     <div class='form-group row'>
   <label for='Subcontractor_Status' class='col-sm-2 col-form-label'>Subcontractor Status</label>
   <div class='col-sm-5'>
   <select name="Contract_Status" class='custom-select ' required>
   <option value="">Select Status</option>
   <option value="Countinuing">Countinuing</option>
   <option value="Finalized">Finalized</option>
    </select>
   </div>
   </div>

    <div class='form-group row'>
     <label for='KWD_Currency' class='col-sm-2 col-form-label'></label>
     <div class='col-sm-5'>
     <div class="custom-control custom-switch">
     <input type="checkbox" name="KWD_Currency" class="custom-control-input" id="customSwitch1">
    <label class="custom-control-label" for="customSwitch1">KWD Cover Page</label>
    </div>
     </div>
     </div>

    <div class='form-group row'>
     <label for='USD_Currency' class='col-sm-2 col-form-label'></label>
     <div class='col-sm-5'>
     <div class="custom-control custom-switch">
     <input type="checkbox" name="USD_Currency" class="custom-control-input" id="customSwitch2">
    <label class="custom-control-label" for="customSwitch2">USD Cover Page</label>
    </div>
     </div>
     </div>

    <div class='form-group row'>
     <label for='Euro_Currency' class='col-sm-2 col-form-label'></label>
     <div class='col-sm-5'>
     <div class="custom-control custom-switch">
     <input type="checkbox" name="Euro_Currency" class="custom-control-input" id="customSwitch3" >
    <label class="custom-control-label" for="customSwitch3">EURO Cover Page</label>
    </div>
     </div>
     </div>

     <div class="d-flex justify-content-center"> <button type="submit" class="btn btn-primary">Submit New Contract </button></div>

    </div>
    </div>
    </div>
    </div>

      
 
</form>


  
  
 

<?php	
 
 include ("contract-list.php");
    
}
       
    
Function Add_New_Subcontractor_Act(){
    Global $db,$connection;
    
    
   $Subcontractor_Group= $_POST['Subcontractor_Group'];
   $Subcontractor_Name= $_POST['Subcontractor_Name'];
   $Subcontractor_IPC_Engineer= $_POST['Subcontractor_IPC_Engineer'];
   $Subcontractor_Status= $_POST['Subcontractor_Status'] ;
    
    // Sorgumuzu hazırlıyoruz
    $query = $db->prepare('INSERT INTO proje_subcontractors (Subcontractor_Group,Subcontractor_Name,Subcontractor_IPC_Engineer,Subcontractor_Status) VALUES(?,?,?,?)');

    // Sorguda belirttiğimiz yerlere gelecek değerleri veriyoruz
    $query->execute(array($Subcontractor_Group,$Subcontractor_Name,$Subcontractor_IPC_Engineer,$Subcontractor_Status ));
    if($query){

header("Location: Add.php?Git=Add_New_Subcontractor");

   } 
    

}
    
Function Add_New_Contract_Act(){
    Global $db,$connection;
    
    
  $Contract_Number= $_POST['Contract_Number'];
  $Contract_Name= $_POST['Contract_Name'];
  $Subcontractor_id= $_POST['Subcontractor_id'];
  $Contract_Status= $_POST['Contract_Status'];
  $Contract_Type= $_POST['Contract_Type'] ;
  $contract_trade= $_POST['contract_trade'] ;
  $Contract_Payment_Period= $_POST['Contract_Payment_Period'] ;
  $KWD_Currency= $_POST['KWD_Currency'] ;
  $USD_Currency= $_POST['USD_Currency'] ;
  $Euro_Currency= $_POST['Euro_Currency'] ;
 if($KWD_Currency=="on"){$KWD_Currency="on";}else{$KWD_Currency="off";}
 if($USD_Currency=="on"){$USD_Currency="on";}else{$USD_Currency="off";}
 if($Euro_Currency=="on"){$Euro_Currency="on";}else{$Euro_Currency="off";}

    
 
    
    // Sorgumuzu hazırlıyoruz
    $query = $db->prepare('INSERT INTO proje_contracts (Contract_Number,Contract_Name,Subcontractor_id,Contract_Status,Contract_Type,contract_trade,Contract_Payment_Period,KWD_Currency,USD_Currency,Euro_Currency) VALUES(?,?,?,?,?,?,?,?,?,?)');

    // Sorguda belirttiğimiz yerlere gelecek değerleri veriyoruz
    $query->execute(array($Contract_Number,$Contract_Name,$Subcontractor_id,$Contract_Status,$Contract_Type,$contract_trade,$Contract_Payment_Period,$KWD_Currency,$USD_Currency,$Euro_Currency));
    if($query){
 header("Location: Add.php?Git=Add_New_Contract");


   } 
    
}
  

$Git = isset($_GET['Git']) ? $_GET['Git'] : '';

Switch($Git){
    default:
        index();
        break;
    
    case "Add_New_Subcontractor";
        Add_New_Subcontractor();
    break;
    
    
    case "Add_New_Contract";
        Add_New_Contract();
    break;
    
    case "Add_New_Subcontractor_Act";
        Add_New_Subcontractor_Act();
    break;
    
    case "Add_New_Contract_Act";
        Add_New_Contract_act();
    break;
    
  



}
    
?>

 

<html>
<head>
  
    <style>
@page {
  size: auto;
}




</style>


       <script src="DataTables/jQuery-3.3.1/jquery-3.3.1.js" charset="utf-8"></script>
      <script src="DataTables/DataTables-1.10.21/js/jquery.dataTables.min.js" charset="utf-8"></script>
      <script src="DataTables/Buttons-1.6.2/js/dataTables.buttons.min.js" charset="utf-8"></script>
      <script src="DataTables/JSZip-2.5.0/jszip.min.js" charset="utf-8"></script>
      <script src="DataTables/pdfmake-0.1.36/pdfmake.min.js" charset="utf-8"></script>
      <script src="DataTables/pdfmake-0.1.36/vfs_fonts.js" charset="utf-8"></script>
      <script src="DataTables/Buttons-1.6.2/js/buttons.html5.js" charset="utf-8"></script>
      <script src="DataTables/FixedColumns-3.3.1/js/dataTables.fixedColumns.js" charset="utf-8"></script>
	    <script src="DataTables/FixedHeader-3.1.7/js/dataTables.fixedHeader.min.js" charset="utf-8"></script>

      <script src="DataTables/DataTables-1.10.21/js/dataTables.bootstrap4.js" charset="utf-8"></script>
	  <script src="DataTables/Select-1.3.1/js/dataTables.select.min.js" charset="utf-8"></script>
	  
      <!-- Seach Pane JS-->
      <script src="DataTables/SearchPanes-1.1.1/js/dataTables.searchPanes.min.js" charset="utf-8"></script>
       <!-- Seach Pane JS-->
	  
      <link rel="stylesheet" href="DataTables/DataTables-1.10.21/css/jquery.dataTables.min.css">
      <link rel="stylesheet" href="DataTables/Buttons-1.6.2/css/buttons.dataTables.min.css">
      <link rel="stylesheet" href="DataTables/DataTables-1.10.21/css/dataTables.bootstrap4.css">
      <link rel="stylesheet" href="DataTables/bootstrap-4.5.0-dist/css/bootstrap.css">
	   <link rel="stylesheet" href="DataTables/Select-1.3.1/css/select.dataTables.min.css">
      <!-- Seach Pane CSS-->
      <link rel="stylesheet" href="DataTables/SearchPanes-1.1.1/css/searchPanes.dataTables.min.css">
     <!-- Seach Pane CSS-->

   
</head>
<body>
<div class='container-fluid  p-2 d-block' >

<div class='float-right m-3' style="">
               <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  2022 MONTHS
                </button>
                                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=December&Year=2022'>DECEMBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=November&Year=2022'>NOVEMBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=October&Year=2022'>OCTOBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=September&Year=2022'>SEPTEMBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=August&Year=2022'>AUGUST </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=July&Year=2022'>JULY </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=Jun&Year=2022'>JUN </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=May&Year=2022'>MAY </button></a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=April&Year=2022'>APRIL </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=March&Year=2022'>MARCH </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=February&Year=2022'>FEBRUARY </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=January&Year=2022'>JANUARY </a>
                                 </div>
               </div>
      
     </div>
<div class='float-right m-3' style="">
               <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  2021 MONTHS
                </button>
                                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=December&Year=2021'>DECEMBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=November&Year=2021'>NOVEMBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=October&Year=2021'>OCTOBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=September&Year=2021'>SEPTEMBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=August&Year=2021'>AUGUST </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=July&Year=2021'>JULY </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=Jun&Year=2021'>JUN </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=May&Year=2021'>MAY </button></a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=April&Year=2021'>APRIL </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=March&Year=2021'>MARCH </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=February&Year=2021'>FEBRUARY </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=January&Year=2021'>JANUARY </a>
                                 </div>
               </div>
      
     </div>
     
     <div class='float-right m-3' style="">
               <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  2020 MONTHS
                </button>
                                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=December&Year=2020'>DECEMBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=November&Year=2020'>NOVEMBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=October&Year=2020'>OCTOBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=September&Year=2020'>SEPTEMBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=August&Year=2020'>AUGUST </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=July&Year=2020'>JULY </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=Jun&Year=2020'>JUN </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=May&Year=2020'>MAY </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=April&Year=2020'>APRIL </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Payment_Report&Month=March&Year=2020'>MARCH </a>  
                                 </div>
               </div>
      
     </div>


</div>


<script>



     $(document).ready(function() {
    $('#example').DataTable( {
           select: true,
           paging:false,
           
           dom: 'Bfrtip',
           buttons: [
                 'copyHtml5',
                 'excelHtml5',
                 'searchPanes'
                              ],    
         
          "order": [ 0, 'asc' ],
        
             
           
            


    });

    
});


    </script>
<?php
include("ayar.php");
/**
 * User: BAYRAM
 * Date: 28.09.2018
 * Time: 14:18
 */



echo"
<div class='container-fluid border mt-2 p-2'> 

<table id='example' class='table table-striped table-bordered'>
<thead>
    <tr>
    <th>N</th>
    <th>DCC</th>
	<th>Subcontractor</th>
    <th>Contract No</th>
    <th>Scope of Works</th>
    <th>IPC NO</th>
    <th>Period</th>
	<th>Due Date</th>
	<th>Amount Status</th>
	<th>IPC Status</th>
    <th style='text-align:center;'>Submitted KWD Net</th>
    <th style='text-align:center;'>Estimated KWD Net</th>
    <th style='text-align:center;'>Submitted USD Net</th>
    <th style='text-align:center;'>Estimated USD Net</th>
    <th style='text-align:center;'>Submitted Euro Net</th>
    <th style='text-align:center;'>Estimated Euro Net</th> 
  </tr>
  </thead>
  <tbody>
  
  ";
  
if(!isset($_GET['Month'])){$month='';}else{$month=$_GET['Month'];}
if(!isset($_GET['Year'])){ $year='';}else{$year=$_GET['Year'];}
  


$i=0;
foreach($db->query("SELECT * FROM subcontractors WHERE `IPC_Month` LIKE '%$month%' AND  `IPC_Year` LIKE '%$year%' ORDER BY CONCAT(SUBSTR(DCC_time, 7, 4), SUBSTR(DCC_time, 4, 2), SUBSTR(DCC_time, 1, 2)) DESC, id DESC ") as $row ) {
   $i++;
    $id= $row['id'];
   $datetime= $row['date_time'];
   $subcontractor_name= $row['Subcontractor_name'] ;
   $contract_no= $row['Contract_no'] ;
   $scope= substr($row['Scope'],0,50) ;
   $IPC_no= $row['IPC_no'];
   $DCC_time= $row['DCC_time'];
   $IPC_Month= $row['IPC_Month'];
   $IPC_Month_Actual= $row['IPC_Month_Actual'];
   $IPC_Year= $row['IPC_Year'];
   $IPC_Year_Actual= $row['IPC_Year_Actual'];
   $Let= $row['Let'];
      $Aconex_Mail_id= $row['Aconex_Mail_id'];
  
  /**PAYMENT PERIODU CEKIYORUM*/
   foreach($db->query("SELECT * FROM `proje_ipccoverpage` WHERE `IPC_id` = $id") as $row ) {
	   $Contract_id=$row['Contract_id'];
	   foreach($db->query("SELECT * FROM `proje_contracts` WHERE `Contract_id` = $Contract_id") as $row ) {
	    $Contract_Payment_Period=$row['Contract_Payment_Period'];
	   
	   }
	   }
  /**PAYMENT PERIODU CEKIYORUM*/ 
  
    /**IPC STATUSU CEKIYORUM*/
   foreach($db->query("SELECT * FROM `ipc_status` WHERE `IPC_id` = $id") as $row ) {
 

 $ipc_status= $row['IPC_Status'];

}
  

///////////////////////////////////Burda coverpage data baseden amount cekecegim.
      /// mecbur saydirmak zorunda kaldim dongu surekli ayni degeri verdi bos olanlar icin.
      $query="SELECT * FROM proje_ipccoverpage WHERE `IPC_id` = $id";
      $result=mysqli_query($connection,$query);
      $count_row=mysqli_num_rows($result)."<br>";
	  
	  if($count_row ==1 ){
		  
		  foreach($db->query("SELECT * FROM `proje_ipccoverpage` WHERE `IPC_id` = $id") as $row ) {
   $KSGA= $row['KSGA'];
   $KSDA= $row['KSDA'];
   $KSNA= $row['KSNA'];
   $KGA= $row['KGA'];
   $KDA= $row['KDA'];
   $KNA= $row['KNA'];
   //USD
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
   $Amount_Status=$row['Amount_Status'];
  
   
                   } 
	  }elseif($count_row ==0 ){
		   
		   $KSGA= "";
           $KSDA= "";
           $KSNA= "";
		   $KGA= "";
           $KDA= "";
           $KNA= "";
		   //USD
		   $USGA= "";
           $USDA= "";
           $USNA= "";
		   $UGA= "";
           $UDA= "";
           $UNA= ""; 
		   
		   //EURO
		   $ESGA= "";
           $ESDA= "";
           $ESNA= "";
		   $EGA= "";
           $EDA= "";
           $ENA= "";
		   $Amount_Status="";
	  }


    echo "
    <tr>
    <td>$i</td>
	<td nowrap='nowrap'>$DCC_time</td>
    <td nowrap='nowrap'><a class='a'href='ipc-log.php?Git=log_form&id=$id' target='_blank' > $subcontractor_name</a></td>
    <td  nowrap='nowrap'>$contract_no</td>
    <td style='font-size:12px; '>$scope</td>
    <td  nowrap='nowrap'>$IPC_no</td>
    <td  nowrap='nowrap'>$IPC_Month $IPC_Year "; if(!empty($IPC_Month_Actual )){echo "(".$IPC_Month_Actual.$IPC_Year_Actual.")";} echo"</td>
	<td  nowrap='nowrap'>";  echo date('d-m-Y', strtotime($DCC_time. ' +'.$Contract_Payment_Period.'  days'));  echo" ($Contract_Payment_Period Day) </td>
    <td  nowrap='nowrap'>$Amount_Status</td>
	<td  nowrap='nowrap' style=' border-right: 3px solid #DA8E8E;'>";
	if( isset($ipc_status)  && !empty($ipc_status)){echo $ipc_status; }else{echo"";}
	
	echo"</td>
	
    <td  style='text-align:right; border-right: 3px solid #CDE5D1;'> ";if(empty($KSNA)){echo '';}else{echo number_format($KSNA,3);} echo"</td>

	<td style='text-align:right; border-right: 3px solid #DA8E8E;'> ";if(empty($KNA)){echo '';}else{echo number_format($KNA,3);} echo"</td>
	 
	
	<td  nowrap='nowrap' style='text-align:right; border-right: 3px solid #CDE5D1;'>";if(empty($USNA)){echo '';}else{echo number_format($USNA,3);} echo"</td>

	<td  nowrap='nowrap' style='text-align:right; border-right: 3px solid #DA8E8E;'>";if(empty($UNA)){echo '';}else{echo number_format($UNA,3);} echo"</td>
	  

	<td nowrap='nowrap' style='text-align:right; border-right: 3px solid #CDE5D1;'>";if(empty($ESNA)){echo '';}else{echo number_format($ESNA,3);} echo"</td>
	
	<td nowrap='nowrap' style='text-align:right; border-right: 3px solid #DA8E8E;'>";if(empty($ENA)){echo '';}else{echo number_format($ENA,3);} echo"</td>
    
   </tr>
      "; 
}
echo"  </tbody>
<tfoot>

<tr>
<th>SN</th>
<th>DCC</th>
<th>Subcontractor</th>
<th>Contract No</th>
<th>Scope of Works</th>
<th>IPC NO</th>
<th>Period</th>
<th>Due Date</th>
<th>Amount Status</th>
<th>IPC Status</th>
<th>Submitted KWD Net</th>
<th>Estimated KWD Net</th>
<th>Submitted USD Net</th>
<th>Estimated USD Net</th>
<th>Submitted Euro Net</th>
<th>Estimated Euro Net</th> 
</tr>
</tfoot>
  </table></div>
";

?>

 
</body>
</html>

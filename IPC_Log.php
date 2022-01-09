 

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
<div class='container-fluid  p-2 d-block' style="overflow: hidden; background-color:#F4F6F6 ;"> 
<div class='float-right m-3'>
<a href='dashboard.php?Git=Amount_Report'><button type='button' class='btn btn-info'>All Months</button></a>
<a href='dashboard.php?Git=Amount_Report&Month=March'><button type='button' class='btn btn-info'>MARCH</button></a>
<a href='dashboard.php?Git=Amount_Report&Month=April'><button type='button' class='btn btn-info'>APRIL</button></a>
<a href='dashboard.php?Git=Amount_Report&Month=May'><button type='button' class='btn btn-info'>MAY</button></a>
<a href='dashboard.php?Git=Amount_Report&Month=Jun'><button type='button' class='btn btn-info'>JUN</button></a>
<a href='dashboard.php?Git=Amount_Report&Month=July'><button type='button' class='btn btn-info'>JULY</button></a>
<a href='dashboard.php?Git=Amount_Report&Month=August'><button type='button' class='btn btn-info'>AUGUST</button></a>
</div>
</div>


<script>




     $(document).ready(function() {
    $('#example').DataTable( {
           dom: 'Bfrtip',
           buttons: [
                 'copyHtml5',
                 'excelHtml5',
                 'searchPanes'
             ],
                      
              "scrollX": true,
			  
              paging:false,
              "order": [ 0, 'asc' ],
			 select: true,
             
           
            


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
<div class='container-fluid border mt-2 p-2 d-block'> 
<table id='example' class='table table-striped table-bordered display nowrap' >
  
<thead>
    <tr>
    <th>SN</th>
	<th>Subcontractor</th>
    <th>Scope of Works</th>
    <th>IP NO</th>
	<th>IPC Status</th>
	<th>KNA</th>
	<th>UNA</th>
    <th>ENA</th>
	<th>KGA</th>
	<th>UGA</th>
    <th>EGA</th>
	<th>KCGA</th>
	<th>UCGA</th>
    <th>ECGA</th>


	<th>% CONTRACT</th>
	<th>Work Executed Till</th>
    <th>Date Received by Dcc</th>
	<th>Due Days</th>
	<th>Due Date</th>
    <th>Date Submitted Finance</th>

	<th>KSNA</th>
	<th>USNA</th>
    <th>ESNA</th> 
    <th>KSCGA</th>
    <th>USCGA</th>
    <th>ESCGA</th>

    <th>Contract No</th>
    <th>KWD_Contract_A</th>
    <th>USD_Contract_A</th>
    <th>EURO_Contract_A</th>

    <th>KWD_Advance_A</th>
    <th>USD_Advance_A</th>
    <th>EURO_Advance_A</th>	

    <th>KCRA</th>
    <th>UCRA</th>
    <th>ECRA</th>	

    <th>KCAP</th>
    <th>UCAP</th>
    <th>ECAP</th>	

    <th>KCTA</th>
    <th>UCTA</th>
    <th>ECTA</th>	

    <th>KCIA</th>
    <th>UCIA</th>
    <th>ECIA</th>	

    <th>KCDA</th>
    <th>UCDA</th>
    <th>ECDA</th>

    <th>KCUMULATIVEDA</th>
    <th>UCUMULATIVEDA</th>
    <th>ECUMULATIVEDA</th>
    
    



  </tr>
  </thead>
  <tbody>

  
  ";
  
if(!isset($_GET['Month'])){$month='';}else{$month=$_GET['Month'];}



$i=0;
foreach($db->query("SELECT * FROM subcontractors WHERE `IPC_Month` LIKE '%$month%'  ORDER BY CONCAT(SUBSTR(DCC_time, 7, 4), SUBSTR(DCC_time, 4, 2), SUBSTR(DCC_time, 1, 2)) DESC, id DESC ") as $row ) {
   $i++;
    $id= $row['id'];
   $datetime= $row['date_time'];
   $subcontractor_name= $row['Subcontractor_name'] ;
   $contract_no= $row['Contract_no'] ;
   $scope= $row['Scope'] ;
   $IPC_no= $row['IPC_no'];
   $DCC_time= $row['DCC_time'];
   $IPC_Month= $row['IPC_Month'];
   $IPC_Month_Actual= $row['IPC_Month_Actual'];
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


    echo " <tr>
    <td nowrap='nowrap'>$i</td>
    <td nowrap='nowrap'>
	";
	// SUBCONTRACTORA LINK ATIYORUM 
	
	
	
        
          echo" <a class='a'href='ipc-log.php?Git=log_form&id=$id' target='_blank' > $subcontractor_name</a>";
   
      
    
	
	// SUBCONTRACTORA LINK ATIYORUM 
	
	
	echo"</td>
    <td  nowrap='nowrap'>$scope</td>
    <td  nowrap='nowrap'>$IPC_no</td>
	<td  nowrap='nowrap' >";if( isset($ipc_status)  && !empty($ipc_status)){echo $ipc_status; }else{echo"";}
	
    echo"</td>
	<td></td>
	<td></td>
    <td></td>
    <td></td>
	<td></td>
	<td></td>
	 
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	  
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
    <td></td>

    <td></td>
	<td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>

    <td></td>
	<td></td>
    <td></td>
    <td></td>
	<td></td>
	<td></td>
	 
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	  
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
    <td></td>

    <td></td>
	<td></td>
    <td></td>
    <td></td>


	

    
    </tr>
      "; 
}
echo"  </tbody>

  </table></div>
";

?>

 
</body>
</html>

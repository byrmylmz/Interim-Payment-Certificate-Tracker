

<html>
<head>

<style>
@page {
  size: auto;
}


.dataTable tbody tr {
    line-height: 10px !important;
    height: 20px;
	font-size:13px;
	
}

</style>

       <script src="DataTables/jQuery-3.3.1/jquery-3.3.1.js" charset="utf-8"></script>
      <script src="DataTables/DataTables-1.10.21/js/jquery.dataTables.min.js" charset="utf-8"></script>
      <script src="DataTables/Buttons-1.6.2/js/dataTables.buttons.min.js" charset="utf-8"></script>
      <script src="DataTables/JSZip-2.5.0/jszip.min.js" charset="utf-8"></script>
      <script src="DataTables/pdfmake-0.1.36/pdfmake.min.js" charset="utf-8"></script>
      <cript src="DataTables/pdfmake-0.1.36/vfs_fonts.js" charset="utf-8"></script>
      <script src="DataTables/Buttons-1.6.2/js/buttons.html5.js" charset="utf-8"></script>
      <script src="DataTables/FixedColumns-3.3.1/js/dataTables.fixedColumns.js" charset="utf-8"></script>
	  <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js" charset="utf-8"></script>
    <script src="DataTables/Select-1.3.1/js/dataTables.select.min.js" charset="utf-8"></script>

      <script src="DataTables/DataTables-1.10.21/js/dataTables.bootstrap4.js" charset="utf-8"></script>
      <!--<link rel="stylesheet" href="DataTables/DataTables-1.10.21/css/jquery.dataTables.min.css">-->
      <link rel="stylesheet" href="DataTables/Buttons-1.6.2/css/buttons.dataTables.min.css">
      <link rel="stylesheet" href="DataTables/DataTables-1.10.21/css/dataTables.bootstrap4.css">
      <link rel="stylesheet" href="DataTables/Select-1.3.1/css/select.dataTables.min.css">
    



</head>

<body>

<div class='container-fluid  p-2 d-block' > 
<div class='float-right m-3' style="">
               <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  2022 MONTHS
                </button>
                                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=December&Year=2022'>DECEMBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=November&Year=2022'>NOVEMBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=October&Year=2022'>OCTOBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=September&Year=2022'>SEPTEMBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=August&Year=2022'>AUGUST </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=July&Year=2022'>JULY </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=Jun&Year=2022'>JUN </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=May&Year=2022'>MAY </button></a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=April&Year=2022'>APRIL </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=March&Year=2022'>MARCH </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=February&Year=2022'>FEBRUARY </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=January&Year=2022'>JANUARY </a>
                                 </div>
               </div>
      
     </div>
     <div class='float-right m-3' style="">
               <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  2021 MONTHS
                </button>
                                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=December&Year=2021'>DECEMBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=November&Year=2021'>NOVEMBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=October&Year=2021'>OCTOBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=September&Year=2021'>SEPTEMBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=August&Year=2021'>AUGUST </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=July&Year=2021'>JULY </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=Jun&Year=2021'>JUN </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=May&Year=2021'>MAY </button></a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=April&Year=2021'>APRIL </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=March&Year=2021'>MARCH </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=February&Year=2021'>FEBRUARY </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=January&Year=2021'>JANUARY </a>
                                 </div>
               </div>
      
     </div>
     
     <div class='float-right m-3' style="">
               <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  2020 MONTHS
                </button>
                                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=December&Year=2020'>DECEMBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=November&Year=2020'>NOVEMBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=October&Year=2020'>OCTOBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=September&Year=2020'>SEPTEMBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=August&Year=2020'>AUGUST </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=July&Year=2020'>JULY </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=Jun&Year=2020'>JUN </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=May&Year=2020'>MAY </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=April&Year=2020'>APRIL </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=Green_Table&Month=March&Year=2020'>MARCH </a>  
                                 </div>
               </div>
      
     </div>


</div>



<script>
     $(document).ready(function() {
         $('#example').DataTable( {
         
             dom: 'Bfrtip',
             "scrollX": true,
              "paging": false,
              select: true,
              "order": [ 0, 'asc' ],
             buttons: [
                 'copyHtml5',
                 'excelHtml5',
                 'csvHtml5',
				  {
                extend: 'print',
                messageTop: 'This print was produced from IPC Team Data Table'
            },
            
            
             ]
         } );
     } );
    </script>

<?php

/**
 * User: BAYRAM
 * Date: 28.09.2018
 * Time: 14:18
 */

 
 
 
  include("ayar.php");
      $query="SELECT id FROM subcontractors";
      $result=mysqli_query($connection,$query);
      $count_row=mysqli_num_rows($result);

echo"
<div class='m-3'>


 <table id='example' class='table table-striped table-bordered' >
 <thead>
  <tr>
	<th>SN</th>
  <th>DCC</th>
	<th>Subcontractor</th>
	<th>Contract No</th>
	<th>Scope</th>
  <th>Period</th>
  <th>IPC No</th>
	<th>At Site </th>
	<th>With IPC Team</th>
  <th>Cover Signature</th>
  <th>Finance</th>
  <th>Final IPC</th>
  <th>Hold</th>
  <th style='background-color: #F3FFD7 ;'>Ax Upload</th>
  <th style='background-color: #F3FFD7 ;'>Ax Approved</th>
	<th >Remarks</th>
  <th>IPC Engineer</th>
  <th>Update</th>
  </tr>
  </thead>
  <tbody>
  ";
   $i=0;
  if(!isset($_GET['Month'])){ $month='';}else{$month=$_GET['Month'];}
  if(!isset($_GET['Year'])){ $year='';}else{$year=$_GET['Year'];}

	foreach($db->query("SELECT * FROM subcontractors  WHERE `IPC_Month` LIKE '%$month%' AND `IPC_Year` LIKE '%$year%'   ORDER BY CONCAT(SUBSTR(DCC_time, 7, 4), SUBSTR(DCC_time, 4, 2), SUBSTR(DCC_time, 1, 2)) DESC, id DESC     ") as $row ) {

	 $i++;
   $id= $row['id'];
   $datetime= $row['date_time'];
   $DCC_Hour= $row['DCC_Hour'];
  // $time1=strtotime($DCC_Hour)
   //$DCC_Hour1= time("H:i:s", $time1);
   $subcontractor_name= $row['Subcontractor_name'] ;
   $contract_no= $row['Contract_no'] ;
   $scope= $row['Scope'] ;
    $Ax_Approved= $row['Ax_Approved'] ;
    $Ax_Upload= $row['Ax_Uploaded'] ;
   $IPC_no= $row['IPC_no'];
   $IPC_Month= $row['IPC_Month'];
   $IPC_Month_Actual= $row['IPC_Month_Actual'];
   $IPC_Year= $row['IPC_Year'];
   $IPC_Year_Actual= $row['IPC_Year_Actual'];
   $DCC_time= $row['DCC_time'];
   $Let= $row['Let'];
   
   
   
   
/////////////////////////////////////////////////////////- Status id ye gore cekecem
foreach($db->query("SELECT * FROM `ipc_status` WHERE `IPC_id` = $id") as $row ) {

 $ipc_status= $row['IPC_Status'];
 $ipc_remarks= $row['IPC_Remarks'];
 $ipc_with_whom= $row['IPC_with_whom'];
}
/////////////////////////////////////////////////////////- IPC engineer Cekiyorum 
foreach($db->query("SELECT * FROM `proje_subcontractors` WHERE `Subcontractor_Name`='$subcontractor_name'") as $row ) {
 

 $Subcontractor_IPC_Engineer= $row['Subcontractor_IPC_Engineer'];

}





    echo " <tr >

	  <td nowrap='nowrap'>$i</td>
	  <td nowrap='nowrap'>$DCC_time</td>
  	<td nowrap='nowrap'><a href='dashboard.php?Git=IPCstatus&id=$id' target='_blank' > $subcontractor_name</a></td>
	  <td nowrap='nowrap'>$contract_no</td>
	  <td nowrap='nowrap'>$scope</td>
    <td nowrap='nowrap'>$IPC_Month $IPC_Year "; if(!empty($IPC_Month_Actual )){echo "(".$IPC_Month_Actual.$IPC_Year_Actual.")";} echo"</td>
    <td nowrap='nowrap'>$IPC_no</td>
    
    <td nowrap='nowrap'>";?><?PHP
if (empty($ipc_status)) {
 $ipc_status= "<a href='dashboard.php?Git=IPCstatus&id=$id' target='_blank' >Status is Not Define </a>";
 echo $ipc_status;
}elseif($ipc_status=='On Site Signature' ){
	echo $ipc_status;
	
}

	 ?><?PHP echo "</td>
	 <td nowrap='nowrap'>
     ";?><?PHP
if (empty($ipc_status)) {
 $ipc_status= "<a href='dashboard.php?Git=IPCstatus&id=$id' target='_blank' >Status is Not Define </a>";
 echo $ipc_status;
}elseif($ipc_status=='With IPC Team' ){
	echo $ipc_status;
	
}

	 ?><?PHP echo "
     
     </td>
     <td nowrap='nowrap'>
     
      ";?><?PHP
if (empty($ipc_status)) {
 $ipc_status= "<a href='dashboard.php?Git=IPCstatus&id=$id' target='_blank' >Status is Not Define </a>";
 echo $ipc_status;
}elseif($ipc_status=='Cover Signature'  ){
	echo $ipc_status;
	
}






     echo "<td nowrap='nowrap'>
     ";?><?PHP
if (empty($ipc_status)) {
 $ipc_status= "<a href='dashboard.php?Git=IPCstatus&id=$id' target='_blank' >Status is Not Define </a>";
 echo $ipc_status;
}elseif($ipc_status=='Delivered to Finance'){
	echo $ipc_status;
	
}

	 ?><?PHP echo "
     </td>
     <td nowrap='nowrap'>";?><?PHP
if (empty($ipc_status)) {
 $ipc_status= "<a href='dashboard.php?Git=IPCstatus&id=$id' target='_blank' >Status is Not Define </a>";
 echo $ipc_status;
}elseif($ipc_status=='Final IPC'  ){
	echo $ipc_status;
	
}

	 ?><?PHP echo "</td>
     <td nowrap='nowrap'>";?><?PHP
if (empty($ipc_status)) {
 $ipc_status= "<a href='dashboard.php?Git=IPCstatus&id=$id'>Status is Not Define </a>";
 echo $ipc_status;
}elseif($ipc_status=='Hold IPC'  ){
	echo $ipc_status;
	
}

?><?PHP echo "
</td>


<td nowrap='nowrap'>

 ";?><?PHP
if ($Ax_Upload=='Uploaded' && $Ax_Approved=='' && $ipc_status !='Delivered to Finance') {
echo $Ax_Upload='Ax Uploaded';
}

?><?PHP echo "
</td>
<td nowrap='nowrap'>
";?><?PHP
if ($Ax_Approved=='Approved' && $Ax_Upload =='Uploaded' && $ipc_status !='Delivered to Finance') {
echo $Ax_Approved='Ax Approved';
}

?><?PHP echo "

</td>";

	 ?><?PHP echo "</td>
   <td nowrap='nowrap'><a href='dashboard.php?Git=IPCstatus&id=$id' target='_blank' > 
   ";
     //if( isset($ipc_with_whom)  && !empty($ipc_with_whom)){echo $ipc_with_whom; }else{echo"Add Remarks";}
   if( isset($ipc_remarks)  && !empty($ipc_remarks)){echo $ipc_remarks; }else{echo"Add Remarks";}



  
echo"
 
   
</a></td>
	  <td nowrap='nowrap'>$Subcontractor_IPC_Engineer</td>
    <td nowrap='nowrap'><a href='dashboard.php?Git=update&id=$id' target='_blank' >Update</a></td>
  </tr>
      ";
	  
}
echo"</tbody>
<tfoot>
<tr>
<th >SN</th>
<th>DCC</th>
<th>Subcontractor</th>
<th>Contract No</th>
<th>IPC Period</th>
<th>IPC No</th>
<th>At Site </th>
<th>With IPC Team</th>
<th>Cover Signature</th>
<th>Finance</th>
<th>Final IPC</th>
<th>Hold</th>
<th>Ax Upload</th>
<th>Ax Approved</th>
<th>Remarks</th>
<th>IPC Engineer</th>
<th>Update</th>
</tr>
  </tfoot>

  </table>

  </div>
";

?>

</body>
</html>

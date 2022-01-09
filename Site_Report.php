

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
      <link rel="stylesheet" href="DataTables/bootstrap-4.5.0-dist/css/bootstrap.css">
      <link rel="stylesheet" href="DataTables/Select-1.3.1/css/select.dataTables.min.css">

</head>
<body>

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
            }
             ],


            
         } );
     } );
    </script>




<?php

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
    <th>SN</th>
    <th>DCC</th>
    <th>Days</th>
	<th>Subcontractor</th>
    <th>Contract No</th>
    <th>Scope of Works</th>
    <th>IPC NO </th>
    <th>Period</th>
	<th>Last Status of IPC</th>
	<th>Group</th>
    <th>Update</th>
  </tr>
  <thead>
  <tbody>
  ";
 
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
//- Status id ye gore cekecem


//
foreach($db->query("SELECT * FROM `proje_contracts` WHERE `Contract_Number` LIKE '$contract_no' ") as $row ) {
 


  $subcontractor_gruop1= $row['Subcontractor_id'];

foreach($db->query("SELECT * FROM `proje_subcontractors` WHERE `Subcontractor_id`= $subcontractor_gruop1") as $row ) {
 


$subcontractor_gruop= $row['Subcontractor_Group'];

}


}

/*

foreach($db->query("SELECT * FROM `proje_subcontractors` WHERE `Subcontractor_id` =(SELECT * FROM `proje_contracts` WHERE  'Contract_Number' LIKE '$contract_no')") as $row ) {
 
 echo $subcontractor_gruop= $row['Subcontractor_Group'];

}
*/
foreach($db->query("SELECT * FROM `ipc_status` WHERE `IPC_id` = $id") as $row ) {
 

 $ipc_remarks= $row['IPC_Remarks'];
 $Status_Hour= $row['Status_Hour'];
 $Status_Time= $row['Status_Time'];
}



//- Status id ye gore cekecem - Bitis


    echo " <tr>
    <td nowrap='nowrap'>$i</td>
	<td nowrap='nowrap'>$DCC_time</td>
    <td nowrap='nowrap' align='center'>
    ";
    $day= date("Y/m/d", strtotime($DCC_time));
    $startTimeStamp = strtotime($day);
    $endTimeStamp = strtotime("now");
    

   $timeDiff = abs($endTimeStamp - $startTimeStamp);

   $numberDays = $timeDiff/86400;  // 86400 seconds in one day

   // and you might want to convert to integer
   echo $numberDays = intval($numberDays);
   
    
    echo"
	
	</td>
    <td nowrap='nowrap'><a href='dashboard.php?Git=IPCstatus&id=$id' target='_blank'> $subcontractor_name</a></td>
    <td nowrap='nowrap'>$contract_no</td>
    <td nowrap='nowrap'>$scope</td>
    <td nowrap='nowrap'>$IPC_no</td>
    <td nowrap='nowrap'>$IPC_Month "; if(!empty($IPC_Month_Actual)){echo "(".$IPC_Month_Actual.")";} echo"</td>
	<td nowrap='nowrap'>$ipc_remarks ($Status_Time / $Status_Hour )</td>
	  <td nowrap='nowrap'>$subcontractor_gruop</td>
    <td nowrap='nowrap'><a href='dashboard.php?Git=update&id=$id' target='_blank'>Update</a></td>
  </tr>
 
  
      ";
	  
}
echo"  

 <tfoot>
  <tr>
    <th>SN</th>
    <th>DCC</th>
    <th>Days</th>
	<th>Subcontractor</th>
    <th>Contract No</th>
    <th>Scope of Works</th>
    <th>IPC NO </th>
    <th>Period</th>
	<th>Last Status of IPC</th>
	<th>Group</th>
    <th>Update</th>
  </tr>
  <tfoot>
  </table>
  </div>

";

?>
 
</body>
</html>

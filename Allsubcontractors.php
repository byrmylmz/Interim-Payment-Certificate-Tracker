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
      <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js" charset="utf-8"></script>
      <script src="DataTables/Select-1.3.1/js/dataTables.select.min.js" charset="utf-8"></script>
	  
      <script src="DataTables/DataTables-1.10.21/js/dataTables.bootstrap4.js" charset="utf-8"></script>
      <!--<link rel="stylesheet" href="DataTables/DataTables-1.10.21/css/jquery.dataTables.min.css">-->
      <link rel="stylesheet" href="DataTables/Buttons-1.6.2/css/buttons.dataTables.min.css">
      <link rel="stylesheet" href="DataTables/DataTables-1.10.21/css/dataTables.bootstrap4.css">
      <link rel="stylesheet" href="DataTables/bootstrap-4.5.0-dist/css/bootstrap.css">
       <link rel="stylesheet" href="DataTables/Select-1.3.1/css/select.dataTables.min.css">
      

    
</head>
<body >



 <div class='container-fluid  p-2 d-block '> 
 

 <button type="button" class="btn btn-info m-3" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">
  <svg width="1.25em" height="1.25em" viewBox="0 0 16 16" class="bi bi-folder-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293z"/>
  <path fill-rule="evenodd" d="M13.5 10a.5.5 0 0 1 .5.5V12h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V13h-1.5a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z"/>
 </svg> 
 &nbsp;New IPC Submission</button>

 <div class='float-right m-3' style="">
               <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  2022 MONTHS
                </button>
                                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=December&Year=2022'>DECEMBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=November&Year=2022'>NOVEMBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=October&Year=2022'>OCTOBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=September&Year=2022'>SEPTEMBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=August&Year=2022'>AUGUST </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=July&Year=2022'>JULY </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=Jun&Year=2022'>JUN </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=May&Year=2022'>MAY </button></a>
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=April&Year=2022'>APRIL </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=March&Year=2022'>MARCH </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=February&Year=2022'>FEBRUARY </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=January&Year=2022'>JANUARY </a>
                                 </div>
               </div>
      
     </div>
 
     <div class='float-right m-3' style="">
               <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  2021 MONTHS
                </button>
                                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=December&Year=2021'>DECEMBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=November&Year=2021'>NOVEMBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=October&Year=2021'>OCTOBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=September&Year=2021'>SEPTEMBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=August&Year=2021'>AUGUST </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=July&Year=2021'>JULY </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=Jun&Year=2021'>JUN </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=May&Year=2021'>MAY </button></a>
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=April&Year=2021'>APRIL </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=March&Year=2021'>MARCH </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=February&Year=2021'>FEBRUARY </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=January&Year=2021'>JANUARY </a>
                                 </div>
               </div>
      
     </div>
     
     
     <div class='float-right m-3' style="">
               <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  2020 MONTHS
                </button>
                                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=December&Year=2020'>DECEMBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=November&Year=2020'>NOVEMBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=October&Year=2020'>OCTOBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=September&Year=2020'>SEPTEMBER </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=August&Year=2020'>AUGUST </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=July&Year=2020'>JULY </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=Jun&Year=2020'>JUN </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=May&Year=2020'>MAY </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=April&Year=2020'>APRIL </a>
                                 <a class="dropdown-item" href='dashboard.php?Git=index&Month=March&Year=2020'>MARCH </a>  
                                 </div>
               </div>
      
     </div>
 
  
  </div>
  
  

    <script>
     $(document).ready(function() {
         $('#example').DataTable( {
             dom: 'Bfrtip',
			  "scrollX": true,
              "pageLength": 30,
              select: true,
              "order": [ 0, 'desc' ],
             buttons: [
                 'copyHtml5',
                 'excelHtml5',
                 {
                extend: 'print',
                messageTop: 'This print was produced from IPC Team Data Table'
            }
		

             ]

         } );
     } );
    </script>

<?php

echo" 

<div class='m-3'>

<table id='example' class='table table-striped table-bordered'  >
<thead>
  <tr>
    <th>SN</th>
    <th>Letter No</th>
    <th>Date</th>
  	<th>Subcontractor</th>
    <th >Contract No</th>
    <th>Scope of Works</th>
    <th>IPC No </th>
    <th>Period</th>
    <th></th>
  </tr>
  </thead>
  <tbody >
  ";

  if(!isset($_GET['Month'])){ $month='';}else{$month=$_GET['Month'];}
  if(!isset($_GET['Year'])){ $year='';}else{$year=$_GET['Year'];}
  

 foreach($db->query("SELECT * FROM subcontractors  WHERE `IPC_Month` LIKE '%$month%' AND  `IPC_Year` LIKE '%$year%' ORDER BY CONCAT(SUBSTR(DCC_time, 7, 4), SUBSTR(DCC_time, 4, 2), SUBSTR(DCC_time, 1, 2)) DESC, id DESC ") as $row ) {

   
   $id= $row['id'];
   $datetime= $row['date_time'];
   $DCC_Hour= $row['DCC_Hour'];
   $Stat= $row['DCC_Hour'];
   // $time1=strtotime($DCC_Hour)
   //$DCC_Hour1= time("H:i:s", $time1);
   $subcontractor_name= $row['Subcontractor_name'] ;
   $contract_no= $row['Contract_no'] ;
   $scope= $row['Scope'] ;
   $IPC_no= $row['IPC_no'];
   $IPC_Month= $row['IPC_Month'];
   $IPC_Month_Actual= $row['IPC_Month_Actual'];
   $IPC_Year= $row['IPC_Year'];
   $IPC_Year_Actual= $row['IPC_Year_Actual'];
   $DCC_time= $row['DCC_time'];
   $Let= $row['Let'];
      $Aconex_Mail_id= $row['Aconex_Mail_id'];

//- Status id ye gore cekecem

   foreach($db->query("SELECT * FROM `ipc_status` WHERE `IPC_id` = $id") as $row ) {
  $ipc_status= $row['IPC_Status'];
   }

    echo " <tr>
    <td nowrap='nowrap'>$id</td>
    <td nowrap='nowrap'>$Let</td>
	  <td nowrap='nowrap'>$DCC_time</td>
    <td><a href='dashboard.php?Git=IPCstatus&id=$id' target='_blank'>$subcontractor_name</a></td>
    <td nowrap='nowrap'><a data-toggle='modal' data-target='#exampleModal1' data-id='$id'' href='#'>$contract_no</a></td>
    <td nowrap='nowrap'>$scope</td>
    <td nowrap='nowrap'>
    
      
    $IPC_no
    </td>
    <td nowrap='nowrap'>$IPC_Month $IPC_Year "; if(!empty($IPC_Month_Actual )){echo "(".$IPC_Month_Actual.$IPC_Year_Actual.")";} echo"</td>
    <td nowrap='nowrap'>
    <a href='dashboard.php?Git=update&id=$id' target='_blank' style='margin-right:5px;'>
    <svg width='1.25em' height='1.25em' viewBox='0 0 16 16' class='bi bi-pencil-square' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
    <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
    <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
    </svg>
    </a>
    
    <a href='ipc-log.php?Git=log_form&id=$id' target='_blank'>
    <svg width='1.25em' height='1.25em' viewBox='0 0 16 16' class='bi bi-cash' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
    <path fill-rule='evenodd' d='M15 4H1v8h14V4zM1 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H1z'/>
    <path d='M13 4a2 2 0 0 0 2 2V4h-2zM3 4a2 2 0 0 1-2 2V4h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 12a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z'/>
    </svg>
    </a>

    </td>
    <!---<td><a href=dashboard.php?Git=sil&id=$id></a></td>-->
  </tr>
      ";

}
echo"</tbody>
<tfoot>
  <tr>
  <th>SN</th>
  <th>Letter No</th>
  <th>DCC Date</th>
  <th>Subcontractor</th>
  <th >Contract No</th>
  <th>Scope of Works</th>
  <th>IPC No</th>
  <th>Period</th>
  <th></th>
  </tr>
  </tfoot>
  </table>
  </div>
 
";

?>



</body>
</html>

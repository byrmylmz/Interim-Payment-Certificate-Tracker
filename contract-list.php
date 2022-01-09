 

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
      <link rel="stylesheet" href="DataTables/bootstrap-4.5.0-dist/css/bootstrap.css">
      <link rel="stylesheet" href="DataTables/Select-1.3.1/css/select.dataTables.min.css">

</head>
<body>

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
                 'csvHtml5',
				  {
                extend: 'print',
                messageTop: 'This print was produced from IPC Team Data Table'
            }
             ]
         } );
     } );
    </script>

<div class='container-fluid' >
<div class='card bg-light ' >
  <div class='card-header'><h5>Contract List</h5></div>
  <div class='card-body'>
     
    <?php
echo"
<table id='example'  class='table table-striped table-bordered'>

<thead>
    <tr>
    <th>ID</th>
    <th>Contract Number</th>
    <th>Contract_Name</th>   
    <th>Subcontractor id</th>
    <th>Contract Status</th>
	  <th>Contract Type</th>
    <th>Contract Payment Period</th>
    <th>Trade</th>
    <th>KWD Currency</th>
    <th>USD Currency</th>
    <th>Euro Currency</th>
    <th>Update</th>
    <th>Delete</th>
    </tr>
    </thead>
    <tbody >
  ";
  
  
foreach($db->query('SELECT * FROM proje_contracts   ') as $row ) {
    
   

   $Contract_id= $row['Contract_id'];
   $Contract_Number= $row['Contract_Number'];
   $Contract_Name= $row['Contract_Name'];
   $Subcontractor_id= $row['Subcontractor_id'];
   $Contract_Status= $row['Contract_Status'];
   $Contract_Type= $row['Contract_Type'];
   $contract_trade= $row['contract_trade'];
   $Contract_Payment_Period= $row['Contract_Payment_Period'] ;
   $KWD_Currency= $row['KWD_Currency'] ;
   $USD_Currency= $row['USD_Currency'] ;
   $Euro_Currency= $row['Euro_Currency'] ;



    echo " <tr>
    <td>$Contract_id</td>
	<td>$Contract_Number</td>
	<td>$Contract_Name</td>
	<td>$Subcontractor_id</td>
    <td>$Contract_Status</td>
    <td>$Contract_Type</td>
    <td>$Contract_Payment_Period</td>
    <td>$contract_trade</td>
    <td>$KWD_Currency</td>
    <td>$USD_Currency</td>
    <td>$Euro_Currency</td>

    <td><a class='a'href=dashboard.php?Git=update&id=$Subcontractor_id>Update</a></td>
    <td><a href=dashboard.php?Git=sil&id=$Subcontractor_id>Delete</a></td>
  </tr>
      ";
	  
}
echo"</tbody>  
 <tfoot>
 <tr>
    <th>ID</th>
    <th>Contract Number</th>
    <th>Contract_Name</th>   
    <th>Subcontractor id</th>
    <th>Contract Status</th>
	  <th>Contract Type</th>
    <th>Contract Payment Period</th>
    <th>Trade</th>
    <th>KWD Currency</th>
    <th>USD Currency</th>
    <th>Euro Currency</th>
    <th>Update</th>
    <th>Delete</th>
    </tr>
 </tfoot> 
</table>
";
?>
</div>
</div>
</div>


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

<div class='container-sm' >
<div class='card bg-light mb-3' >
  <div class='card-header'><h5>Subcontractor List</h5></div>
  <div class='card-body'>
   

  <?php   
echo"

<table id='example'  class='table table-striped table-bordered'>
  <thead>
    <tr>
    <th >ID</th>
    <th>Subcontractor Group</th>
    <th>Subcontractor Name</th>   
    <th>IPC Engineer</th>
  	<th>Subcontractor Status</th>
    <th>Update</th>
    <th>Delete</th>
  </tr>
  </thead>
  <tbody >
  ";
  
  
foreach($db->query('SELECT * FROM proje_subcontractors ORDER BY Subcontractor_id DESC ') as $row ) {
    
   

   $Subcontractor_id= $row['Subcontractor_id'];
   $Subcontractor_Group= $row['Subcontractor_Group'];
   $Subcontractor_Name= $row['Subcontractor_Name'];
   $Subcontractor_IPC_Engineer= $row['Subcontractor_IPC_Engineer'];
   $Subcontractor_Status= $row['Subcontractor_Status'] ;
  
//- Status id ye gore cekecem




//- Status id ye gore cekecem - Bitis


    echo " <tr>
    <td>$Subcontractor_id</td>
	  <td>$Subcontractor_Group</td>
  	<td>$Subcontractor_Name</td>
	  <td>$Subcontractor_IPC_Engineer</td>
    <td>$Subcontractor_Status</td>
    <td><a class='a'href=dashboard.php?Git=update&id=$Subcontractor_id>Update</a></td>
    <td><a href=dashboard.php?Git=sil&id=$Subcontractor_id>Delete</a></td>
    </tr>
      ";
	  
}
echo"</tbody>  
<tfoot>
<th >ID</th>
    <th>Subcontractor Group</th>
    <th>Subcontractor Name</th>   
    <th>IPC Engineer</th>
	<th>Subcontractor Status</th>
    <th>Update</th>
    <th>Delete</th>
</tfoot>
  </table>
  
";

?>    
</div>
</div>
</div>
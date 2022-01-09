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
           "processing": true,
           "serverSide": true,
           "ajax": "scripts/server_processing.php",
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
  </tbody>
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
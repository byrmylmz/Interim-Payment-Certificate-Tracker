
<html>
<head>
  
</head>
<body>



</body>
</html>

<?php

/**
 * Created by PhpStorm.
 * User: BAYRAM
 * Date: 28.09.2018
 * Time: 14:18
 */



$ipc_id=$_GET["id"];

echo"
<div class='card bg-light mb-3 mt-3' >
<div class='card-body'>
<table class='table table-hover'>
 <thead  class='thead-light' >
  <tr>
    <th scope='col'>No</th>
    <th scope='col'>IPC Status</th>
	  <th scope='col'>Remarks</th>
    <th scope='col'>Status Date</th>
	  <th scope='col'>Status Hour</th>
    <th scope='col'></th>
  </tr>
  </thead>
  <tbody>
  ";
  $i=0;
foreach($db->query(" SELECT * FROM `ipc_status` WHERE `IPC_id`=$ipc_id  ORDER BY `ipc_status`.`IPC_id` ASC  ") as $row ) {
   $i++;
   $id= $row['id'];
   $IPC_ID= $row['IPC_id'];
   $IPC_Status= $row['IPC_Status'] ;
   $IPC_Remarks= $row['IPC_Remarks'] ;
   $Status_Time= $row['Status_Time'] ;
   $Status_Hour= $row['Status_Hour'] ;
   
  ;

    echo " <tr>
    <td scope='row' nowrap='nowrap'>$i</td>
    <td scope='row'>$IPC_Status</td>
    <td scope='row''> $IPC_Remarks</td>
    <td scope='row' nowrap='nowrap' >$Status_Time</td>
    <td scope='row'>$Status_Hour</td>
    <td><a href=dashboard.php?Git=IPC_status_sil&id=$id>
   
    <svg width='1.25em' height='1.25em' viewBox='0 0 16 16' class='bi bi-trash' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
    <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
    <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
    </svg>
    </a></td>
  </tr> </tbody>
      ";
}
echo"  
  </table></div></div>
";
?>

<!DOCTYPE html>
<html>
<head>
 <title>IPC Following</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body">
<!----------->
<!-- Image and text -->


 <div class="container-fluid m-0 p-0 sticky-top " >
  <nav class="navbar  navbar-light text-primary  " style="background-color: #3498DB;">
    <a class="navbar-brand text-white" href="dashboard.php">
     <img src="img/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
      IPC Following
    </a>
   <form class="form-inline my-2 my-lg-0" action='logout.php'>
     <p class="text-white m-2 "><span class="align-middle float-right">Welcome back, <?=$_SESSION['name']?>!</span></p>
     <a href="logout.php" class="text-muted"> <button class="btn btn-outline-light" type="submit">Logout</button></a>
   </form>
  </nav>



 <nav class="navbar navbar-expand-lg navbar-light "style="background-color: #1B4F72 ;">
   <div class="navbar-header " id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link text-light " href="dashboard.php">DashBoard</a></li>
      <li class="nav-item"><a class="nav-link text-light" href="dashboard.php?Git=Green_Table">Green Table</a></li>
      <li class="nav-item dropdown"><a class="nav-link dropdown-toggle text-light " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Amount Report
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="dashboard.php?Git=Payment_Report&Month=August">Payment List</a>
        <a class="dropdown-item" href="dashboard.php?Git=Amount_Report&Month=August">Blue Table</a>
        <a class="dropdown-item" href="#">IPC Log</a>
        </div>
      </li>
      <li class="nav-item dropdown"><a class="nav-link dropdown-toggle text-light " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Reports
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="dashboard.php?Git=Site_Report">Site Reports</a>
        <a class="dropdown-item" href="#">Not Submitted Reports</a>
        </div>
      </li>
    
	  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle text-light " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Add New 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="Add.php?Git=Add_New_Subcontractor">Add New Subcontractor</a>
        <a class="dropdown-item" href="Add.php?Git=Add_New_Contract">Add New Contract</a>
        </div>
      </li>
    </ul>
   </div>
 </nav>

</div>


</body>
</html>

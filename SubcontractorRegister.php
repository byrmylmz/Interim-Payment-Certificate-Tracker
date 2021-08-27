
<script src="js/jquery.min.js"></script>

    
    <script type="text/javascript">
$(document).ready(function(){
    $('#country').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select Contract first</option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value="">Select Subcontractor first</option>');
            $('#city').html('<option value="">Select Contract first</option>'); 
        }
    });
    
    $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>
        
     <!--------New Subontractor Add Modal------------->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New IPC</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="dashboard.php?Git=Rsubcontractor" method="post">

      <div class="modal-body">
      
       <!---------------------------------------->
        <div class="form-group">
        <select name="country" class="custom-select" id="country" required>
        <option value="">Select Subcontractor</option>
        <?php
         foreach($db->query("SELECT * FROM `proje_subcontractors` ") as $row ) {
        echo '<option value="'.$row['Subcontractor_id'].'">'.$row['Subcontractor_Name'].'</option>';
           }
        ?>
        </select>
        </div>
       <!---------------------------------------->

        <div class="form-group">
            <!-- <label for="message-text" class="col-form-label">Message:</label>-->
            <select name="state" class="custom-select" id="state" required>
            <option value="">Select Subcontractor first</option>
            </select>
        </div>
    
       <!---------------------------------------->
       <div class="form-group">
            <!-- <label for="message-text" class="col-form-label">Message:</label>-->
            <select name="city" class="custom-select" id="city" required>
            <option value="">Select Contract No first</option>
         </select>
        </div>
       <!---------------------------------------->
       <div class="form-group">
            <!-- <label for="message-text" class="col-form-label">Message:</label>-->
            <input class="form-control" type="text" placeholder="IPC No" name="IPCno" size="20" required>
        </div>
       <!---------------------------------------->

      <!---------------------------------------->
          <div class="form-group">
            <!-- <label for="message-text" class="col-form-label">Message:</label>-->
       <div class='col-sm-15'>
       <select name='IPC_Month' class='custom-select' required>
       <option value=''>Select The IPC Period </option>
       <option value='January'>January</option>
       <option value='February'>February</option>
       <option value='March'>March</option>
       <option value='April'>April</option>
       <option value='May'>May</option>
       <option value='Jun'>Jun</option>
       <option value='July'>July</option>
       <option value='August'>August</option>
       <option value='September'>September</option>
       <option value='October'>October</option>
       <option value='November'>November</option>
       <option value='December'>December</option>
       
        </select>
        </div>
        </div>
       <!----------------------------------------> 

       <!---------------------------------------->
       <div class="form-group">
            <!-- <label for="message-text" class="col-form-label">Message:</label>-->
            <div class='col-sm-15'>
            <select name='IPC_Year' class='custom-select' required>
            <option value=''>Select The IPC Year </option>
            <option value='2022'>2022</option>
            <option value='2021'>2021</option>
            <option value='2020'>2020</option>
            <option value='2019'>2019</option>
            </select>
            </div>
        </div>
       <!---------------------------------------->

       

       <div class="form-group">
            <!-- <label for="message-text" class="col-form-label">Message:</label>-->
            <input class="form-control" type="text" name="Let" value="LET-GEN-LKW-" size="20" required>
        </div>
       <!---------------------------------------->
       <div class="form-group">
            <!-- <label for="message-text" class="col-form-label">Message:</label>-->
            <input class="form-control" type="date" value="<?php echo date("Y-m-d");?>" name="DCCtime"required>
        </div>
       <!---------------------------------------->
       <div class="form-group">
            <!-- <label for="message-text" class="col-form-label">Message:</label>-->
            <input class="form-control" type="time" name="DCC_Hour" value="<?php date_default_timezone_set("Turkey"); echo date("H:i"); ?>"required>

        </div>
       <!---------------------------------------->     
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send The IPC</button>

      </div>
      </form>
    </div>
  </div>
</div>

<!---==============================================================-->
   

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="dashboard.php?Git=Rsubcontractor" method="post">

      <div class="modal-body">
      <!----------------------------------------->
     
      
       <!---------------------------------------->     
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send The IPC</button>

      </div>
      </form>
    </div>
  </div>
 
</div>



<?php include 'admin-header.php';?>

 <center><h2>All Appointments</h2></center><br>
        
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            appointment Lists</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th> SL No.</th>
                        <th> Client Name</th>
                        <th> Phone</th>
                        <th>Doctor</th>
                        <th>Booking Date and Time</th>
                        <th>Status</th>
                        
                    </tr>
                </thead>
                <?php                      
                
        $result=mysqli_query($con,"SELECT *  FROM booking join patient on booking.pat_id=patient.pat_id join staff on booking.doctor=staff.staff_id  ORDER BY booking.`appoin_date` ASC");
        $i=0;
              while( $row=mysqli_fetch_array($result))

                   {
              $i++;
                ?> 
               
                <tbody>
                  <tr>
          <td><?php echo $i; ?></td>
                    <td><?php echo $row['c_name'];?></td>
                    <td><?php echo $row['phone'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['appoin_date'];?>&nbsp;&nbsp;&nbsp;<?php echo $row['appoin_time'];?></td> 
                    <td>

                      <?php if($row['status']==1)
                      {
                        echo "Approved";
                      }
                      elseif ($row['status']==2) 
                      {
                        echo "Cancelled";
                      }
                      else{
                        echo "Pending";
                      }
                      ?>




                        </td> 
                   
                    
                  </tr>
                 
                </tbody>
                <?php
            }
            ?></table>
              
            </div>
          </div>
       
        </div>


      </div>
      <!-- /.container-fluid -->
      <br><br><br>
     
     <?php include('../footer.php');?>
     




<script>
function userAvailabilit() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check.php",
data:'email='+$("#email").val(),
// type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>

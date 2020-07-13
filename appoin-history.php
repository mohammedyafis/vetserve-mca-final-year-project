<?php include 'header.php';
 $res = mysqli_query($con, "SELECT * FROM `booking` ORDER BY id DESC LIMIT 1") or die(mysqli_error($con));
                     
  $pat_id=$_SESSION['pat_id'];                    

?>


 <center><h3>Appointment History</h3></center><br>
 <div class="container"> <div class="container">
        
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            
            appointment Lists</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th> SL No.</th>
                      
                        <th>Doctor</th>
                        <th>Booking Date and Time</th>
                        <th>Appoint Date </th>
                        <th>Appoint Time </th>
                        <th> Status</th>
                    </tr>
                </thead>
                <?php      


           while( $rows= mysqli_fetch_array($res)){
              
           
        $result=mysqli_query($con,"SELECT  * FROM `booking` join staff on booking.doctor=staff.staff_id where booking.pat_id='$pat_id'");
        $i=0;
        
       
              while( $row=mysqli_fetch_array($result))

                   {
              $i++;
                ?> 
               
                <tbody>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['booking_date'];?></td>
                    <td><?php echo $row['appoin_date'];?>  </td> 

                    <td><?php echo $row['appoin_time'];?> </td> 
                    <td>
                   
                     <?php 
                     if ($row['status']==1) {

                      echo "Confirmed";

                     
                     }
                     elseif ($row['status']==0) {
                   
                      echo "Pending";
                     }
                     else
                     {
                      echo "Cancelled";
                     }
?>


                 </td>      
                    
                  </tr>
                 
                </tbody>
                <?php
            }}
            ?>
          </table>
              
            </div>
          </div>
       
        </div>


      </div><br><br><br><br>
      <!-- /.container-fluid -->

<?php include 'footer.php';







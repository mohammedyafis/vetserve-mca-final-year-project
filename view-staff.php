<?php
include 'admin-header.php';

     
      if(isset($_POST['staff_id']))
      {
        $staff_id=$_GET['staff_id'];
        
        mysqli_query($con,"DELETE FROM staff where staff_id='$staff_id' ");
        echo "<script>alert(' Delete Staff');</script>";
        echo "<script>window.location.href='view-staff.php';</script>";
      }
?>
 
  <center><h3>Staff Details</h3></center><br>
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Staff Lists</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    	<th>SlNo.</th>
                       
                        <th>Name</th>
                        <th>Designation</th>
                        
                        <th>Address</th>
                         <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
  <?php 
        $result=mysqli_query($con,"SELECT *  FROM staff");
        $i=0;
        while($staff=mysqli_fetch_array($result))
        	
          {
          $i++;
  ?> 
               <tbody>
                  <tr>
                  	 
                   
                    <td><?php echo $i ?></td>
                     <td><?php echo $staff['name'];?></td>
                    <td><?php echo $staff['dept'];?></td>
                   
                     <td><?php echo $staff['address2'];?></td>
                    <td><?php echo $staff['phone'];?></td>
                   <td>
                       <a href="staff.php?id=<?php echo $staff['staff_id'];?>"><button class="btn btn-primary btn-sm">View</button></a>
                       <!-- <a href="staff.php?staff_id=<?php echo $staff['staff_id'];?>"><button>Delete</button></a> -->
                    </td>
                    
                  </tr>
                 
                </tbody>
    <?php } ?>
              </table>    
              </table>
            </div>
          </div>
         <!--  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
        </div>


      </div>
      <!-- /.container-fluid -->
      
      <br><br><br>
     
     <?php include('../footer.php');?>
     
<?php include 'admin-header.php';?>
<h3><center><b>  Patient List </b></center></h3>
 <div class="card mb-3">
          <div class="card-header">
         
         </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Sl No.</th>
                        <th>Client Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Patient Name</th>
                        
                        <th>View</th>
                    </tr>
                </thead>
                <?php 
        $result=mysqli_query($con,"SELECT *  FROM patient JOIN login  ON patient.pat_id=login.pat_id");
        $i=0;
            while($row=mysqli_fetch_array($result))
            {
            	$i++;
                ?>
               
                <tbody>
                  <tr>
                
                    <td><?php echo $i ?> </td>
                    <td><?php echo $row['c_name']; ?> </td>
                    <td><?php echo $row['phone']; ?> </td>
                    <td><?php echo $row['address']; ?> </td>
                    <td><?php echo $row['pat_name']; ?> </td>
                   <td>

<a href="view-patients.php?pat_id=<?php echo $row['pat_id'];?>"><i class="fa fa-eye"></i></a>

</td>
                    
                  </tr>
                 
                </tbody>
                <?php
              }
              ?>
              </table>
            </div>
          </div>
       
        </div>
     </div>
     <br><br><br>
     
     <?php include('../footer.php');?>
     
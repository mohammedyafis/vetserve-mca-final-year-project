<?php
include "admin-header.php";
$id=$_GET['id'];


?>

<form action="" method="post">
    <div class="card">
      <div class="card-header">
            <h4 class="m-0 py-2"><?php echo "$id";?>
      </div>

      <div class="card-body">
        
      
          <table class="table table-striped">
            <tr>
              <th width="25%">Staff ID</th>
              <th width="25%">Staff Name</th>
              
              <th width="25%">Attendance</th>
            </tr>
                           
                        <?php 
        $result=mysqli_query($con,"select * from attendance JOIN staff ON attendance.staff_id=staff.staff_id WHERE date='$id'");
            while($rows=mysqli_fetch_array($result))
            {
                ?>  
    
<tr>

  
  <td><?php echo $rows['staff_id']; ?></td>
  <td><?php echo $rows['name']; ?></td>
    <td><?php echo $rows['attendance']; ?></td>
   
</tr>

<?php }
            ?>
      
            
          </table>
        </form>
      </div>
    </div>
  </div>

  <br><br><br>
     
     <?php include('../footer.php');?>
     
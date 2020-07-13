<?php include('admin-header.php');
 
      
if(isset($_GET['id']))                                              //Delete designation
{
$del=$_GET['id'];

mysqli_query($con,"DELETE FROM  salary where salary_id='$del' ");




echo "<script>alert('Salary Deletails Deleted');</script>";

echo "<script>window.location.href='salary.php';</script>";
}

?>
  <!-- Breadcrumbs-->
  <center><h3>Salary Details</h3></center><br>
        
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Salary Lists</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Staff Name</th>
                        <th>Salary Amount</th>
                        <th>Paid Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php 
        $result=mysqli_query($con,"select *  from salary JOIN staff ON salary.staff_id=staff.staff_id");
            while($row=mysqli_fetch_array($result))
            {
                ?> 
               
                <tbody>
                  <tr>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['salary'];?></td>
                    <td><?php echo $row['date'];?></td> 
                    <td>
                    <a href="edit-salary.php?salary_id=<?php echo $row['salary_id'];?>"><button class="btn btn-primary btn-sm">EDIT </button></a>
                      
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
        </div>


      </div>
      <!-- /.container-fluid -->
      <br><br><br>
    
     

     
      

 
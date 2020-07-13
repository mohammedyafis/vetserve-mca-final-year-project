<?php include('admin-header.php');?>




<center><h3> Attendance Lists</h3></center><br>

  <!-- Breadcrumbs-->
        
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>Attendance
           
            </div>
          <div class="card-body">
            <div class="table-responsive">
            <form action="" method="post">
					<table class="table table-striped">
						<tr>
							<th width="30%">S/L</th>
							<th width="50%">Attendance Date</th>
							<th width="20%">Action</th>
       
                            <?php 
        $result=mysqli_query($con,"select DISTINCT date from attendance ORDER BY date");
        $i=0;
            while($rows=mysqli_fetch_array($result))
            {$i++;
                ?>  
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $rows['date']; ?></td>
							<td>
							<a class="btn btn-primary" href="attendance-bydate.php?id=<?php echo $rows['date']; ?>">View</a>
							</td>
						</tr>
<?php  } ?>
					</table>
				</form>
            </div>
          </div>
       
        </div>


      </div>
      <!-- /.container-fluid -->
      
      <br><br><br>     <br><br><br>     <br><br><br>
     
     <?php include('../footer.php');?>
     
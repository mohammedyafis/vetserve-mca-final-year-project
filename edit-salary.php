<?php include('admin-header.php');
    
      $salary_id=$_GET['salary_id'];
      $result=mysqli_query($con,"select *  from salary JOIN staff ON salary.staff_id=staff.staff_id WHERE salary_id='$salary_id'");
      $rows=mysqli_fetch_array($result);
      if(isset($_POST['add']))
      {
          $staff=$_POST['staff_id'];
          $salary=$_POST['salary'];
          $date=$_POST['salary_date'];
          mysqli_query($con,"UPDATE salary SET salary='$salary',date='$date' WHERE salary_id='$salary_id'");
          echo "<script>alert('Salary updated');</script>";
          echo "<script>window.location.href='salary.php';</script>";
      }

?>
  <!-- Breadcrumbs-->
        
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">&nbsp;&nbsp;&nbsp;<a href="salary.php">View Salary</a>&nbsp;&nbsp;&nbsp;
            Update Salary Details</div>
          <div class="card-body">
          <form method=POST >
            <label for="name">Staff Name</label>
            <select name="staff_id" id="staff_id" class='form-control'>
            <option value=""><?php echo $rows['name'];?></option>
            <?php 
                            $clg =mysqli_query($con,"SELECT * from staff");
                        while($row=mysqli_fetch_assoc($clg))
                        {
                            $staff = $row['name'];
                        ?>
                        <option value="<?php echo $row['staff_id'];?>"><?php echo $staff; ?></option>
                        <?php
                        }
                        ?>
            

            </select>
            <label for="salary">Salary Amount</label>
            <input type="text"name='salary' class='form-control'required=""value="<?php echo $rows['salary'];?>">
            <label for="date">Salary Date</label>
            <input type="date" name="salary_date" class='form-control'required value="<?php echo $rows['date'];?>"><br>
            <input type="submit" name='add' value="Update"class='btn-info'>  &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="salary.php?id=<?php echo $rows['salary_id'];?>"><button class="btn-danger">DELETE</a></button">
          </form>        

           
        </div>


      </div>
      <!-- /.container-fluid -->
      
      <br><br><br>
     
     <?php include('../footer.php');?>
     
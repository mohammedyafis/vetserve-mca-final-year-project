<?php include('admin-header.php');

      if(isset($_POST['add']))
      {
          $staff=$_POST['staff_id'];
          $salary=$_POST['salary'];
          $date=$_POST['salary_date'];
          mysqli_query($con,"INSERT INTO salary (staff_id,salary,date) VALUE ('$staff','$salary','$date')");
          echo "<script>alert('Salary Added');</script>";
          echo "<script>window.location.href='salary.php';</script>";
      }

?>
  <!-- Breadcrumbs-->
  <center><h3>Add Salary</h3></center><br>
        
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
           Add Salary </div>
          <div class="card-body">
          <form method=POST >
            <label for="name">Staff Name</label>
            <select name="staff_id" id="staff_id" class='form-control'required>
            <option value="">--Select--</option>
            <?php 
                            $clg =mysqli_query($con,"SELECT * from staff");
                        while($rows=mysqli_fetch_assoc($clg))
                        {
                            $staff = $rows['name'];
                        ?>
                        <option value="<?php echo $rows['staff_id'];?>"><?php echo $staff; ?></option>
                        <?php
                        }
                        ?>
            

            </select>
            <label for="salary">Salary Amount</label>
            <input type="text"name='salary' class='form-control'required="">
            <label for="date">Salary Date</label>
            <input type="date" name="salary_date" class='form-control'required><br>
         <center>   <input type="submit" name='add' value="Add"class='btn-info'>  </center>
          </form>        

           
        </div>


      </div><br><br>
      <br><br><br>
     
<?php include('../footer.php');?>

      

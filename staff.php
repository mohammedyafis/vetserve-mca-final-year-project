 <?php
 include 'admin-header.php'; 
 $id=$_GET['id']; 



    $result=mysqli_query($con,"SELECT * FROM staff JOIN login ON staff.staff_id=login.staff_id Where staff.staff_id='$id'");
            
    $rows=mysqli_fetch_array($result);   
 ?>


        
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <center><h3><?php echo $rows['name'];?></h3></center>
            </div>
          <div class="card-body">
            <div class="table-responsive">
                <form>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>Designation</th>
                                            
                        <td><input type="text" name="dept"value="<?php echo $rows['dept'];?>" class="form-control"required></td>                      
                    </tr>
                    
                    <tr>
                        <th>Qualification</th>
                        <td><input type="text" name="qual"value="<?php echo $rows['qual'];?>" class="form-control"required></td>                      
                                           
                    </tr>
                    
                    <tr>
                        <th>Gender</th>
                        <td><input type="text" name="gender"value="<?php echo $rows['gender'];?>" class="form-control"required></td>                      
                                       
                    </tr>
                    <tr>
                        <th>Date of Birth</th>
                        <td><input type="date" name="dob"value="<?php echo $rows['dob'];?>" class="form-control"required></td>                      
                                   
                    </tr>
                    
                    <tr>
                        <th>Joining Date</th>
                        <td><input type="date" name="date"value="<?php echo $rows['join_date'];?>" class="form-control"required></td>                      
                            
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td><input type="text" name="address"value="<?php echo $rows['address'];?>" class="form-control"required>                      
                        <input type="text" name="address2"value="<?php echo $rows['address2'];?>" class="form-control"required></td>                      
                                
                                  
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td><input type="text" name="phone"value="<?php echo $rows['phone'];?>" class="form-control"required></td>                      
                       
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><input type="text" name="email"value="<?php echo $rows['email'];?>" class="form-control"required></td>                      
                                         
                    </tr>
                    <tr>
                        <th>Username</th>
                        <td><input type="text" name="username"value="<?php echo $rows['username'];?>" class="form-control"></td>                      
                                           
                                            
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td><input type="text" name="password"value="<?php echo $rows['password'];?>" class="form-control"></td>                                         
                    </tr>
                    <tr>
                        <th>Staff Role</th>
                        <td>
                            <select class="form-control">
                                <option value=""><?php echo $rows['type'];?></option>
                                <option value="DOCTOR">DOCTOR</option>
                                <option value="PHARMACY">PHARMACY</option>
                                <option value="ADMIN">ADMIN</option>
                                <option value="RECEPTION">RECEPTION</option>
                              
           
                            </select>
                           
                                             
                    </tr>
                     <tr >
                     <td colspan="2"> <br><center> <input type="submit" name="Update"class="btn btn-primary btn-sm" value="Update">
                       <input type="submit" name="Delete" class="btn btn-danger btn-sm" value="Delete"></center></td>
                    </tr>
                
                  </table>
              </form>
            </div>
          </div>
       
        </div>


      </div>

      <br><br><br>
     
     <?php include('../footer.php');?>
     
<?php 
if(isset($_POST['Update']))                                 //add staff
        {
            $id=$_GET['staff']; 
            var_dump($id);exit();
            $name=$_POST['name'];
            $designation=$_POST['dept'];
            $qual=$_POST['qual'];
            $gender=$_POST['gender'];          
            $dob=$_POST['dob'];         
            $address=$_POST['address'];
            $address2=$_POST['address2'];
            $phone=$_POST['phone'];
            $email=$_POST['email'];
            $date=$_POST['date'];
            $Username=$_POST['Username'];
            $Password=$_POST['Password'];
            $role=$_POST['role'];

            mysqli_query($con,"UPDATE `staff` SET `gender`='gender',`dob`='$dob',`address`='$address',`address2`='$address2',`qual`='$qual',`join_date`='$date',`dept`='$designation',`phone`='$phone',`email`='$email' WHERE staff_id='$id'");
     
           mysqli_query($con,"UPDATE `login` SET `username`='$Username',`password`='$Password',`type`='$role' WHERE staff.staff_id='$id'");

             // $result=mysqli_query($con,"SELECT * from staff");    //insert to login table
             // $rows=mysqli_fetch_array($result);
             // $staff_id=$rows['staff_id'];
            
            
           
             echo "<script>alert('New Staff Added');</script>";
            echo "<script>window.location.href='view-staff.php';</script>";
        

        }




       ?>
<?php
include 'admin-header.php';



// Define variables and initialize with empty values
$name = $gender  = $dept = $dob = $qual =  $date = $address =  $address2 =$username =$password =  $phone =  $email = "";
$username_err = $password_err =  $name_err = $dob_err = $gender_err  = $address_err =$dept_err = $qualification_err = $contact_err = $email_err = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT login_id FROM login WHERE username = ?";
        
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    
    // Validate name
    if(empty(trim($_POST["name"]))){
        $name = "Please enter name of Staff.";
        $name_err = "Staff name required";     
    }

     // Validate dob
     if(empty(trim($_POST["dob"]))){
        $dob = "Please enter date of birth.";
        $dob_err = "dob required";     
    }
     // Validate gender
     if(empty(trim($_POST["gender"]))){
        $gender = "Please enter gender.";
        $gender_err = "gender required";     
    }
    
     

     // Validate address
     if(empty(trim($_POST["address"]))){
        $address = "Please enter address.";
        $address_err = "address required";     
    }
    if(empty(trim($_POST["address2"]))){
        $address = "Please enter address.";
        $address_err = "address required";     
    }

     // Validate qualification
     if(empty(trim($_POST["qual"]))){
        $qualification = "Please enter qualification.";
        $qualification_err = "qualification required";     
    }
    if(empty(trim($_POST["dept"]))){
        $address = "Please enter department.";
        $address_err = "address required";     
    }

     // Validate contact
     if(empty(trim($_POST["phone"]))){
        $contact = "Please enter contact.";
        $contact_err = "contact required";     
    }
     // Validate email
     if(empty(trim($_POST["email"]))){
        $email = "Please enter  email.";
        $email_err = "email required";     
    }
    

    if(isset($_POST['submit']))                                 //add staff
        {
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
    


           $rslt= mysqli_query($con,"INSERT INTO `staff`(`name`, `gender`, `dob`, `address`, `address2`, `qual`, `join_date`, `dept`, `phone`, `email`) VALUES ('$name','$gender','$dob','$address','$address2','$qual','$date','$designation','$phone', '$email')");
     

     $sql=mysqli_query($con,"SELECT staff_id FROM staff ORDER BY staff_id DESC LIMIT 0,1");    //insert to login table

$row = mysqli_fetch_array($sql);
 $staff_id= $row['staff_id'];
echo "$staff_id";


            
            
            mysqli_query($con,"INSERT INTO login (staff_id,username,password,type) VALUES('$staff_id','$Username','$Password','$role')");
             echo "<script>alert('New Staff Added');</script>";
            echo "<script>window.location.href='add-staff.php';</script>";
        

        }




       


    
    // Close connection
    mysqli_close($con);
}

?>






















<center><h3>Add Staff</h3></center><br>
   

   
     
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Staff Lists</div>
          <div class="card-body">
            <div class="table-responsive">
               <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Name*</label>
                            <input type="text" name="name"  class="form-control"value="">
                            <span class="help-block"><?php echo $name_err; ?></span>
                        </div>
                       <input type="hidden" name="staff_id"  class="form-control">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                      
                        <label >Gender :&nbsp;&nbsp;&nbsp;&nbsp;</label>	
                        <label for="male">Male</label>
                            <input type="radio" id="male" name="gender" value="male">&nbsp;&nbsp;&nbsp;
                            <label for="female">Female</label>  
                                <input type="radio" id="female" name="gender" value="female">
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      
                            <label>Dob*</label>
                            <input type="date" name="dob"  required="">   
                        </div></div>

                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Designation*</label>
                            <input type="text" name="dept" required=""class="form-control">  
                            </div> 
                      <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Qualification*</label>
                            <input type="text" name="qual" required=""class="form-control">   
                        </div>
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                        <label>Joining Date</label>
                        
                             <input type="date" name="date" class="form-control" data-date-format="mm-dd-yyyy" placeholder="mm-dd-yyyy" required="">
                            
                        </div>

                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                         <div>  <label> Address*</label></div>
                            <input type="text" name="address"  required="" placeholder="Address Line*" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" name="address2"  required="" placeholder="City*">    
                        </div>
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" required="">    
                        </div>
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" required="">
                        </div>     
     
                         
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>UserName</label>
                            <input type="text" name="Username" class="form-control" >    
                        </div>
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Password</label>
                            <input type="text" name="Password" class="form-control">    
                        </div>
                        <div class="form-group">
                            <label>User Role</label>
                            <select name="role" class="form-control">
                            	<option value="">---Select Role---</option>
                                
                                <option value="ADMIN">ADMIN</option>
                                 <option value="DOCTOR">DOCTOR</option>
                                  <option value="PHARMACY">PHARMACY</option>
                                  <option value="PHARMACY">RECEPTION</option>
                            </select>   
                        </div>
                       
                       
                        
                       <center> <input type="submit" name="submit" class="btn btn-primary" value="Submit"></center>
                    </form>




            </div>
          </div>
       
        </div>


      </div>
      <br><br><br>
     
     <?php include('../footer.php');?>
     




























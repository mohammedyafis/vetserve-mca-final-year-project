<?php include 'header.php';
$pat_id=$_SESSION['pat_id'];



 ?>
<?php if(isset($_POST['submit']))
    {

   
      $dr = $_POST['dr'];
    
      $date = $_POST['date'];
      $time = $_POST['time'];
$pat_id=$_SESSION['pat_id'];


mysqli_query($con,"INSERT INTO `booking`(`doctor`, `appoin_date`, `appoin_time`,`pat_id`) VALUES ('$dr','$date','$time','$pat_id')");
echo "<script>alert(' Booking Successfull ');</script>";
 echo "<script>window.location.href='new-appoin.php';</script>";


     
    }
    ?>

<section id="page-title">


<center><h3 class="mainTitle"> Take Appointment</h3></center><br>


<div class="modal-content">
 <div class="container"> <div class="container">
                  <div class="modal-body"><div class="container"><div class="container">
                    <form method="post">
                    
                      <div class="form-group text-left">                        
                      <label>Doctor</label><br>
                      <select class="form-control" name="dr">
                        <option>---Select--</option>
                         <?php 
                            $sql =mysqli_query($con,"SELECT * from staff join login on staff.staff_id=login.staff_id where login.type='DOCTOR'");
                        while($rowaa=mysqli_fetch_assoc($sql))
                        {
                            $type = $rowaa['name'];
                        ?>
                        <option value="<?php echo $rowaa['staff_id'];?>"><?php echo $type; ?></option>
                        <?php
                        }
                        ?>
              
                      </select>
                      
                    
                      </div>
                      
        
                   

                      <div class="form-group text-left">                        
                      <label> Appointment Date*</label>
                      <input type="date"  class="form-control" name="date" >
                      </div>

                      <div class="form-group text-left">                        
                      <label>Appointment Time*</label>
                      <input type="time" name="time" id="timepicker" class="form-control timepicker" name="date" required>
                      </div>
                     
                  </div>
                  <div class="modal-footer">                    
                    <div class="text-left text-danger" id="error"></div>
                    <br/>
             
                    <button  class="btn btn-primary" name="submit" id="bookbtn">Book Now</button>
                  </div>                  
                  </form>
                </div>
              </div>
        
        
        


<?php include 'footer.php'; ?>

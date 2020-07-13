<?php include 'header.php';?>


<center><h3>Medical History</h3></center><br>
<div class="container"> <div class="container">

 <table border="1" class="table table-bordered">
  

<thead>
                    <tr>
                        <th>Visit Date</th>
                        <th> Remark</th>
                        <th>Prescription</th>
                      
                       
                   
                    </tr>
                </thead>
               <?php
  $query=mysqli_query($con,"SELECT * FROM `medical_history` join login on medical_history.pat_id=login.pat_id where login.login_id='$user'");
while($rows=mysqli_fetch_array($query)){?>
               
                <tbody>
                  <tr>
                
                    
                    <td><?php echo $rows['date']; ?> </td>
                    <td><?php echo $rows['remarks']; ?> </td>
                    <td><?php echo $rows['prescription']; ?> </td>
                   
                   </tr>
                 </tbody><?php } ?>
 </table>

<br><br><br><br><br><br><br><br>
<?php include 'footer.php'; ?>
 


<?php include 'admin-header.php';

$pat_id=$_GET['pat_id'];
$result=mysqli_query($con,"SELECT *  FROM patient JOIN login  ON patient.pat_id=login.pat_id WHERE patient.pat_id='$pat_id'");
$row=mysqli_fetch_array($result);
?>

<h2><center>Patient Details</center></h2>

<div class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">


<table border="1" class="table table-bordered">
 <tr align="center">
<td colspan="4" style="font-size:20px;color:blue">
 Client Details</td></tr>

    <tr>
    <th width="25%">client Name</th>
    <td width="25%"><?php  echo $row['c_name'];?></td>
    <th width="25%"> Email</th>
    <td width="25%"><?php  echo $row['email'];?></td>
  </tr>
  <tr>
    <th width="25%"> Contact Number</th>
    <td width="25%"><?php  echo $row['phone'];?></td>
    <th width="25%"> Address</th>
    <td width="25%"><?php  echo $row['address'];?></td>
  </tr>
  <tr align="center">
<td colspan="4" style="font-size:20px;color:blue">
 Patient Details</td></tr>
  <tr>
    
  </tr>
    <tr>
    <th width="25%">Patient Name</th>
    <td width="25%"><?php  echo $row['pat_name'];?></td>
    <th width="25%">Patient Age</th>
    <td width="25%"><?php  echo $row['age'];?></td>
  </tr>
  </tr>
    <tr>
    <th width="25%">Patient Gender</th>
    <td width="25%"><?php  echo $row['gender'];?></td>
    <th width="25%">Patient Catagory</th>
    <td width="25%"><?php  echo $row['catagory'];?></td>
  </tr>
  </tr>
    <tr>
    <th>Patient Breed</th>
    <td width="25%"><?php  echo $row['breed'];?></td>
    <th></th>
    <td></td>
  </tr>
 
 

</table>
<h3 style="font-size:20px;color:blue"><center><b>  Medical History </b></center></h3>

 <table border="1" class="table table-bordered">
  

<thead>
                    <tr>
                        <th>Visit Date</th>
                        <th> Remark</th>
                        <th>Prescription</th>
                      
                       
                   
                    </tr>
                </thead>
               <?php
  $query=mysqli_query($con,"SELECT * FROM `medical_history` WHERE pat_id='$pat_id'");
while($rows=mysqli_fetch_array($query)){?>
               
                <tbody>
                  <tr>
                
                    
                    <td><?php echo $rows['date']; ?> </td>
                    <td><?php echo $rows['remarks']; ?> </td>
                    <td><?php echo $rows['prescription']; ?> </td>
                   
                   </tr>
                 </tbody><?php } ?>
 </table>




 <br><br><br>
     
<?php include('../footer.php');?>

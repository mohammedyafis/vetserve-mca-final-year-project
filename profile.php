<?php include 'header.php';
$result=mysqli_query($con,"SELECT *  FROM patient join login on patient.pat_id=login.pat_id where login.login_id='$user'");
$row=mysqli_fetch_array($result);

?>
<h2><center>My Profiles</center></h2><br><br>

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



<?php include 'footer.php'; ?>


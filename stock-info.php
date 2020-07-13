<?php include 'admin-header.php';

  
    if(isset($_GET['id']))             //Delete project Admission
    {
       $del=$_GET['id'];
        mysqli_query($con,"DELETE FROM  details where id='$del' ");
        echo "<script>alert('medicine Deleted');</script>";
        echo "<script>window.location.href='stock-info.php';</script>";
    }
    

?>

 <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> <center>Stock Info</center></h4>
                 
                </div>
                <div class="card-body">
                  <div class="table-responsive"><br>
                    <table class="table table-hover">
                       <thead>
                    <tr>
                        <th>Medicine Id</th>
                        <th>Medicine Name</th>
                        <th>Type</th>
                        
                        <th>MFD</th>
                        <th>EXP Date</th>
                       
                        <th>Unit Price</th>
                        <th>Total Stock</th>
                        <th> Action</th>
                        
                    </tr>
                </thead>
               <?php 
                   $result=mysqli_query($con,"SELECT * FROM details join item on details.id=item.id");
                    while($row=mysqli_fetch_array($result))
                    {
                ?>
                <tbody>
                  <tr>
                    <td><?php echo $row['id']; ?> </td>
                    <td><?php echo $row['item_name']; ?> </td>
                    <td><?php echo $row['item_details']; ?> </td>
                   
                    <td><?php echo $row['mfd']; ?> </td>
                    <td><?php echo $row['exp']; ?> </td>
                    
                    <td><?php echo $row['price']; ?> </td>
                     <td><?php echo $row['stock']; ?> </td>
                    
                   <td>
                     <a href="edit-medicine.php?id=<?php echo $row['id'];?>"><button class="btn btn-primary btn-sm">EDIT </button></a>
                      
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

      <br><br><br>
     
     <?php include('../footer.php');?>
     


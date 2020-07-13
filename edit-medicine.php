<?php
   
    include 'admin-header.php';  
    $update=$_GET['id']; 

    $result=mysqli_query($con,"SELECT * FROM details JOIN item ON details.id=item.id ");
            
    $row=mysqli_fetch_array($result);              
    if(isset($_POST['add']))                                            //add medicine
    {
       
            $name=$_POST['name'];
            $type=$_POST['type'];
           
            $mfd=$_POST['mfd'];
            $exp=$_POST['exp'];
            
            $price=$_POST['price'];
           
            $stock=$_POST['stock'];
            
           
            

            mysqli_query($con,"UPDATE `details` SET `item_details`='$type',`price`='$price',`stock`='stock',`mfd`='$mfd',`exp`='$exp' WHERE id='$update'");
            mysqli_query($con,"UPDATE `item` SET `item_name`='$name' WHERE id='$update'");
            echo "<script>alert(' Medicine Details Updated');</script>";


           echo "<script>window.location.href='stock-info.php';</script>";

            }




?>
<div class="container">
    
<center><h3 >Update Medicine Details</h3></center><br>
       <div class="row">
                <div class="col-sm-10">
                    <form role="form" method="post">
                        <div class="form-group">
                            <label>Medicine Name</label>
                            <input type="text" name="name" class="form-control" required value="<?php echo $row['item_name'];?>" >
                        </div>
                         <div class="form-group">
                        <label>Medicine Type</label>
                        <select name="type" class="form-control" required> 
                        <option value="<?php  $row['item_details'];?>"><?php echo $row['item_details'];?></option>
                           <option value="Capsule">Capsule</option>
                           <option value="syrup">Sysrup</option>
                           <option value="Injection">Injection</option>
              
                        </select>
                        
                        
                        </div>
                       
                        <div class="form-group">
                            <label>Manufacturing Date</label>
                           <input type="date" name="mfd" class="form-control" required value="<?php echo $row['mfd'];?>"> 
                        </div>
                        <label>Expairy Date</label>
                        <div class="input-group form-group date" data-provide="datepicker">
                            <input type="date" name="exp" class="form-control"required value="<?php echo $row['exp'];?>"> 
                            
                        </div>
                       
                        <label>Price</label>
                        <div class="input-group form-group date" data-provide="datepicker">
                            <input type="text" name="price"class="form-control"required value="<?php echo $row['price'];?>">
                          
                        </div>
                         <label>Total stock</label>
                        <div class="input-group form-group date" data-provide="datepicker">
                            <input type="text" name="stock"class="form-control"required value="<?php echo $row['stock'];?>">
                          
                        </div>
                       <center> <input type="submit" name="add" class="btn btn-primary btn-sm" value="Update ">


                        <a href="stock-info.php?id=<?php echo $row['id'];?>"><button class="btn btn-danger btn-sm">DELETE</a></button">

                       </center>
                    </form>
                </div>
            </div>
            <br><br><br>
            <br><br><br>
     
     <?php include('../footer.php');?>
     
      

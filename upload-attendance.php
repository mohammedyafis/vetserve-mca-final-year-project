<?php include 'admin-header.php';

$cur_date = date('d-m-yy');



if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusType = 'alert-success';
            $statusMsg = 'Members data has been imported successfully.';
            break;
        case 'err':
            $statusType = 'alert-danger';
            $statusMsg = 'Some problem occurred, please try again.';
            break;
        case 'invalid_file':
            $statusType = 'alert-danger';
            $statusMsg = 'Please upload a valid CSV file.';
            break;
        default:
            $statusType = '';
            $statusMsg = '';
    }
}

        
if(isset($_POST['importSubmit']))          //excel upload
{
    
    // Allowed mime types
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    
    // Validate whether selected file is a CSV file
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes))
    {
        
        // If the file is uploaded
        if(is_uploaded_file($_FILES['file']['tmp_name']))
        {
            
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            // Skip the first line
            fgetcsv($csvFile);
            
            // Parse data from CSV file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE)
            {
                // Get row data
              
               $staff_id  = $line[0];
               $name   = $line[0];
                $date  = $line[2];
                $attendance  = $line[3];
              

                mysqli_query($con,"INSERT INTO attendance (staff_id,date,attendance) VALUES('$staff_id','$date','$attendance')");
                
                //  // Check whether member already exists in the database with the same email
                //  $prevQuery = "SELECT * FROM members WHERE email = '".$line[1]."'";
                //  $prevResult = $con->query($prevQuery);
                
                // if($prevResult->num_rows > 0)
                // {
                //      // Update member data in the database
                //      $con->query("UPDATE members SET name = '".$name."', phone = '".$phone."', status = '".$status."', modified = NOW() WHERE email = '".$email."'");
                // }
                //  else
                //    {
                //       // Insert member data in the database
                //        $con->query("INSERT INTO members (name, email, phone, created, modified, status) VALUES ('".$name."', '".$email."', '".$phone."', NOW(), NOW(), '".$status."')");
                //    }
            }
            
            // Close opened CSV file
            fclose($csvFile);
            

            $qstring = '?status=succ';
            
 echo "<script>alert('attendance uploaded');</script>";

 echo "<script>window.location.href='attendance.php';</script>";
            
        }
     else
        {
           $qstring = '?status=err';
        }
    
     }
     else
 {
        $qstring = '?status=invalid_file';
     }
}

// Redirect to the listing page

// echo "<script>alert('attendance uploaded');</script>";

// echo "<script>window.location.href='attendance.php';</script>";
            



?>

<center><h3>Upload Attendance</h3></center><br>


<!-- Display status message -->
<?php if(!empty($statusMsg)){ ?>
<div class="col-xs-12">
    <div class="alert <?php echo $statusType; ?>"><?php echo $statusMsg; ?></div>
</div>
<?php } ?>

<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
           Upload Attendance</div>
          <div class="card-body">
          <div class="col-sm-12 col-md-12 col-lg-12">
         
        </div>
         <br>
          <div>
            <form  method="post" enctype="multipart/form-data">
            <input type="file" name="file" />
            <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
        </form>
        <div> <label>Select Excel File*</label><br>
        <p style='float:left'>Supported Formats: .csv</p>
        
     
       
        </div> </div> </div> </div>
        <br><br><br>
     
     <?php include('../footer.php');?>
     
<?php include 'admin-header.php'; 


 ?>






  <!-- Breadcrumbs-->
        
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <center><h4>Invoice Lists</h4></center>
           
              
            </div>

          <div class="card-body">
            <div class="table-responsive">
            <form action="" method="post">
					<table class="table table-striped">
						<tr>
							<th width="30%">S/L</th>
							<th width="30%">Invoice No.</th>
							<th width="30%">Sale Date.</th>
							<th width="50%">Items</th>
							<th width="20%">Qty</th>
							<th width="20%">unit Price</th>
							<th width="20%">Unit Total</th>
							<th width="20%">Tax</th>
							<th width="20%">Total</th>
							
       
                            <?php 
        $result=mysqli_query($con,"select * from invoice_details join invoice_sales  on invoice_details.ref_id_invoice=invoice_sales.id join item on item.id=invoice_details.ref_item ");
        $i=0;
            while($rows=mysqli_fetch_array($result))
            {$i++;
                ?>  
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $rows['ref_id_invoice']; ?></td>
							<td><?php echo $rows['sales_date']; ?></td>

							<td><?php echo $rows['item_name']; ?></td>
							<td><?php echo $rows['qty']; ?></td>
							<td><?php echo $rows['unit_price']; ?></td>
							<td><?php echo $rows['unit_total']; ?></td>
							<td><?php echo $rows['tax']; ?></td>
							<td><?php echo $rows['total']; ?></td>





							
						</tr>
<?php  } ?>
					</table>
				</form>
            </div>
          </div>
       
        </div>


      </div>
      <!-- /.container-fluid -->
	  <br><br><br>  <br><br><br>  <br><br><br>
     
	 <?php include('../footer.php');?>
	 
 <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	<thead>


		 <?php 
			$sl = 0;
               if(isset($_POST['submit'])){
				   $course = $_POST['course'];
			?>
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Mobile</th>
			<th>Address</th>
			<th>Amount</th>
			<th>Picture</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>

		<?php
            $select = "SELECT * FROM member_list order by id desc";
            $result = mysqli_query($DB_con,$select);
            if($result){                    
            
            while($row=mysqli_fetch_array($result)){ $sl++ ?>

		<tr>
			<td><?php echo $sl?></td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['mobile'];?></td>
			<td><?php echo $row['iname'];?></td>
			<td><?php echo $row['imobile'];?></td>
			<td><img width="60" height="60" src="<?php echo $row['image'];?>"></td>
			<td>
				<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</td>
		</tr>

   <?php}
        }else{
            echo "no record found!";
        } 
    }?>
	</tbody>
</table>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Row information</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

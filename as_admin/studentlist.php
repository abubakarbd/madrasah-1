<?php include 'inc/header.php'; ?>
<div class="agile-tables">
		  <h3>Student List</h3> 
<div class="table-responsive">          
  
 <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	<thead>
 

	
		<tr>
			<th>ক্র নং</th>
			<th>নাম</th>
			<th>বাবার নাম</th>
			<th>বাবার মোবা</th>
			<th>শ্রেণী</th>
			<th>অবস্থা</th>
			<th>গাড়ী</th>
			<th>ছবি</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>

	<?php 
		 $query = "SELECT * FROM student_list order by id desc";
		 $userlist = $db->select($query);
		 if ($userlist) {
		 	$i=0;
		 	while ($result = $userlist->fetch_assoc()) {
		 		$i++;
	?>	
		<tr>
			<td><?php echo $i?></td>
			<td><?php echo $result['name_e'];?></td>
			<td><?php echo $result['fname_e'];?></td>
			<td><?php echo $result['f_mobile'];?></td>
			<td><?php echo $result['a_class'];?></td>
			<td><?php echo $result['location'];?></td>
			<td><?php echo $result['car'];?></td>
			<td><img width="60" height="60" src="<?php echo $result['image'];?>"></td>
			<td>
				<button type="button" class="btn btn-success btn-xs dt-edit">
					<a href="stuview.php?student_id=<?php echo $result['id'];?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
				</button>
				<button type="button" class="btn btn-info btn-xs dt-edit">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete"><a onclick="return confirm('Are your sure to Delete!')" href="deletemember.php?delmember_id=<?php echo $result['id'];?>">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
				</button>
			</td>
		</tr>
           
 <?php } } ?>
   
	</tbody>
</table>
</div>
</div>
<?php include 'inc/footer.php';?>
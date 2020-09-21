<?php include 'inc/header.php'; ?>
<div class="agile-tables">
		  <h3>Student List</h3> 

<div class="tab-pane active" id="horizontal-form">
	<form action="" method="post" class="form-horizontal">
		 <div class="col-md-6 form-group2 group-mail">
              <label class="control-label">Match List</label>
       <select name="bording" id="dob-day">
				  <option>বডিং পছন্দ করুন</option>
				  <option value="বডিং এর খাবে">বডিং এর খাবে</option>
				  <option value="বডিং এর খাবেনা">বডিং এর খাবেনা</option>
			</select>
            </div>
            <div class="col-md-6 form-group2 group-mail">
              <label class="control-label">Section List</label>
            <select name="section" id="dob-day">
		  <option>শাখা পছন্দ করুন</option>
		  <option value="Male">বালক</option>
		  <option value="Female">বালিকা</option>
		  <option value="Nurani">নূরাণী</option>
		</select>
            </div>			 
<div class="clearfix"></div>
<div class="panel-footer">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<button name="submit" class="btn-primary btn">Submit</button>
			<button class="btn-default btn">Cancel</button>
		</div>
	</div>
</div>
</form>
</div> 

<div class="table-responsive">          
   <?php 
      $sl = 0;
               if(isset($_POST['submit'])){
	           $section = $_POST['section'];
	           $bording = $_POST['bording'];
      ?> 
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
     $query = "SELECT * FROM student_list WHERE section ='$section' AND bording = '$bording'";
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
           
 <?php } } } ?>
   
	</tbody>
</table>
</div>
</div>
<?php include 'inc/footer.php';?>
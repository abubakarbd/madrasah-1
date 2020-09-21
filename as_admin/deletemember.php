<?php 
    include '../lib/Session.php';
    Session::checkSession();  
?>
<?php include '../config/config.php'; ?>
<?php include '../lib/Database.php'; ?>

<?php
    $db = new Database();
?>

<?php
    if (!isset($_GET['delmember_id']) || $_GET['delmember_id'] == NULL ) {
       header("Location :memberlist.php");
    } else {
        $delmember_id = $_GET['delmember_id'];

         $query = "SELECT * FROM member_list WHERE id='$delmember_id'";
    	 $getData = $db->select($query);
    	 if ($getData) {
    	 	while ($delimg = $getData->fetch_assoc()) {
    	 		$dellinl = $delimg['image'];
    	 		unlink($dellinl);
    	 }
    	}

    	$delquery = "DELETE FROM member_list WHERE id='$delmember_id'";
    	 $delData = $db->delete($delquery);
    	 if ($delData) {
    	 	echo "<script>alert('Data Delete Successfully.')</script>";
    	 	echo "<script>window.location = 'memberlist.php'</script>";
    	 } else {
    	 	echo "<script>alert('Data Not Delete Successfully.')</script>";
    	 	echo "<script>window.location = 'memberlist.php'</script>";
    	 }

    }
?>

 
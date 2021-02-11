<?php
ob_start();

include("connection.php");
include("common.php");



	$query2 = "SELECT * FROM workorder";
	//echo $query2;
	//die();
	$result2 = mysqli_query($conn, $query2);
	while($row2 = mysqli_fetch_object($result2))
	{ 

		$startdatetime =  $row2->startdatetime;
		$enddatetime = $row2->enddatetime;
		$wo_id = $row2->id;
		$status1 = $row2->status;
		$today = date("d-m-Y h:i A");
		
		if($enddatetime>$today)
		{
			if($status1==0 || $status1==1 || $status1==2 || $status1==3 || $status1==7 || $status1==8)
			{
				$query3 = "UPDATE workorder SET status='-1' WHERE id= $wo_id ";	
				$result3 = mysqli_query($conn, $query3);
			}
		}
		
	}
	
	
?>
  

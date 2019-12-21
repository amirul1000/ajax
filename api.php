<?php
	$cmd = $_REQUEST['cmd'];
	switch($cmd){
		case "1st_task":
			$first_name = $_GET['first_name'];
			$last_name = $_GET['last_name'];
			$address = $_GET['address'];
			sleep(10);
		     echo $first_name.' '.$last_name.' '.$address;
		break;
		case "2nd_task":
		      $first_name = $_GET['first_name'];
			$last_name = $_GET['last_name'];
			$address = $_GET['address'];
		    
			$arr[0] = array('first_name'=>$first_name,
			             'last_name'=>$last_name,
						 'address'=>$address);
		    echo  json_encode($arr);
			break;
	} 
?>
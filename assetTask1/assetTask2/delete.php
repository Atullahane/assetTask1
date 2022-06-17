<?php 
require_once'function.php';
	if(isset($_GET['del']))
	{
		$rid=$_GET['del'];
		$deleteData=new DB_con();
		$sql=$deleteData->delete($rid);
		if($sql)
		{
			echo "<script>alert('Record deleted successfully');</script>";
			echo "<script>window.location.href='index.php'</script>";
		}
	}

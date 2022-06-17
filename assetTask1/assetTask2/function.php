<?php
	session_start();
	define('DB_SERVER','localhost');
	define('DB_USER','root');
	define('DB_PASS' ,'');
	define('DB_NAME', 'mxcel_asset_db');
	class DB_con
	{
		function __construct()
		{
		$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
		$this->dbh=$con;
		// Check connection
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		}
		public function insert($sName,$iVersion,$sCommunity,$sType,$sShortDescription,$sTags,$sBranch,$sSupport,$sTest,$sDescription)
		{
		$ret=mysqli_query($this->dbh,"insert into mxcel_asset_list(Name, Version, Community, Type, Short_Description,Tags , Branch , Support , Test , Description) values('$sName','$iVersion','$sCommunity','$sType','$sShortDescription','$sTags','$sBranch','$sSupport','$sTest','$sDescription')");
		return $ret;
		}
		public function fetchData()
		{
			$result=mysqli_query($this->dbh,"select * from mxcel_asset_list");
			return $result;
		}
		public function fetchOneRecord($userid)
		{
			$oneResult=mysqli_query($this->dbh,"select * from mxcel_asset_list where id=$userid");
			return $oneResult;
		}
		public function update($sName,$iVersion,$sCommunity,$sType,$sShortDescription,$sTags,$sBranch,$sSupport,$sTest,$sDescription,$userid)
		{
		$updaterecord=mysqli_query($this->dbh,"update mxcel_asset_list set Name='$sName',Version='$iVersion',Community='$sCommunity',Type='$sType',Short_Description='$sShortDescription',Tags='$sTags',Branch='$sBranch',Support='$sSupport',Test='$sTest',Description='$sDescription' where id='$userid' ");
		return $updaterecord;
		}
		public function delete($rid)
		{
			$deleteRecord=mysqli_query($this->dbh,"delete from mxcel_asset_list where id=$rid");
			return $deleteRecord;
		}
	}

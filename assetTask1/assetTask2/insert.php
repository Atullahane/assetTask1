<?php
	require_once'function.php';
	$insertdata=new DB_con();
if(isset($_POST['insert']))
{
	$sName=$_POST['Name'];
	$iVersion=$_POST['Version'];
	$sCommunity=$_POST['Community'];
	$sType=$_POST['Type'];
	$sShortDescription=$_POST['Short_Description'];
	$sTags=$_POST['Tags'];
	$sBranch=$_POST['Branch'];
	$sSupport=$_POST['Support'];
	$sTest=$_POST['Test'];
	$sDescription=$_POST['Description'];
	$sql=$insertdata->insert($sName,$iVersion,$sCommunity,$sType,$sShortDescription,$sTags,$sBranch,$sSupport,$sTest,$sDescription);
	if($sql)
	{
	echo "<script>alert('Record inserted successfully');</script>";
	echo "<script>window.location.href='index.php'</script>";
	}
	else
	{
	echo "<script>alert('Something went wrong. Please try again');</script>";
	echo "<script>window.location.href='index.php'</script>";
	}
}
?>
	<form name="insertrecord" method="post">
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="Name" id="Name" class="form-control" />
			<span id="error_Name" class="text-danger"></span>
		</div>

		<div class="form-group">
			<label>Version</label>
			<input type="text" name="Version" id="Version" class="form-control" />
			<span id="error_Version" class="text-danger"></span>
		</div>

		<div class="form-group">
			<label>Community</label>
			<input type="text" name="Community" id="Community" class="form-control" />
			<span id="error_Community" class="text-danger"></span>
		</div>

		<div class="form-group">
			<label>Type</label>
			<input type="text" name="Type" id="Type" class="form-control" />
			<span id="error_Type" class="text-danger"></span>
		</div>

		<div class="form-group">
			<label>Short Description</label>
			<input type="text" name="Short_Description" id="Short_Description" class="form-control" />
			<span id="error_Short_Description" class="text-danger"></span>
		</div>

		<div class="form-group">
			<label>Tags</label>
			<input type="text" name="Tags" id="Tags" class="form-control" />
			<span id="errorTags" class="text-danger"></span>
		</div>

		<div class="form-group">
			<label>Branch</label>
			<input type="text" name="Branch" id="Branch" class="form-control" />
			<span id="errorBranch" class="text-danger"></span>
		</div>

		<div class="form-group">
			<label>Support</label>
			<input type="text" name="Support" id="Support" class="form-control" />
			<span id="errorSupport" class="text-danger"></span>
		</div>

		<div class="form-group">
			<label>Test</label>
			<input type="text" name="Test" id="Test" class="form-control" />
			<span id="error_Test" class="text-danger"></span>
		</div>

		<div class="form-group">
			<label>Description</label>
			<input type="text" name="Description" id="Description" class="form-control" />
			<span id="errorDescription" class="text-danger"></span>
		</div>
		
		<div class="row" style="margin-top:1%">
			<div class="col-md-8">
			<input type="submit" name="insert" value="Submit">
			</div>
		</div>
	</form>
<?php
// Get the userid
require_once'function.php';

$userid=intval($_GET['id']);
$onerecord=new DB_con();
$sql=$onerecord->fetchonerecord($userid);
$cnt=1;
while($row=mysqli_fetch_array($sql))
  {
  ?>
<form name="insertrecord" method="post">
<div class="form-group">
			<label>Name</label>
			<input type="text" name="Name" id="Name" value="<?php echo htmlentities($row['Name']);?>" class="form-control"  required/>
			<span id="error_Name" class="text-danger"></span>
		</div>

		<div class="form-group">
			<label>Version</label>
			<input type="text" name="Version" id="Version" value="<?php echo htmlentities($row['Version']);?>"  class="form-control" required />
			<span id="error_Version" class="text-danger"></span>
		</div>


		<div class="form-group">
			<label>Community</label>
			<input type="text" name="Community" id="Community" value="<?php echo htmlentities($row['Community']);?>"  class="form-control" required />
			<span id="error_Community" class="text-danger"></span>
		</div>

		<div class="form-group">
			<label>Type</label>
			<input type="text" name="Type" id="Type" value="<?php echo htmlentities($row['Type']);?>"  class="form-control" required />
			<span id="error_Type" class="text-danger"></span>
		</div>

		<div class="form-group">
			<label>Short Description</label>
			<input type="text" name="Short_Description" id="Short_Description" value="<?php echo htmlentities($row['Short_Description']);?>"  class="form-control" required />
			<span id="error_Short_Description" class="text-danger"></span>
		</div>

		<div class="form-group">
			<label>Tags</label>
			<input type="text" name="Tags" id="Tags" value="<?php echo htmlentities($row['Tags']);?>"  class="form-control" required />
			<span id="errorTags" class="text-danger"></span>
		</div>

		<div class="form-group">
			<label>Branch</label>
			<input type="text" name="Branch" id="Branch" value="<?php echo htmlentities($row['Branch']);?>"  class="form-control" required />
			<span id="errorBranch" class="text-danger"></span>
		</div>

		<div class="form-group">
			<label>Support</label>
			<input type="text" name="Support" id="Support" value="<?php echo htmlentities($row['Support']);?>"  class="form-control" required />
			<span id="errorSupport" class="text-danger"></span>
		</div>

		<div class="form-group">
			<label>Test</label>
			<input type="text" name="Test" id="Test" value="<?php echo htmlentities($row['Test']);?>"  class="form-control" required />
			<span id="error_Test" class="text-danger"></span>
		</div>

		<div class="form-group">
			<label>Description</label>
			<input type="text" name="Description" id="Description" value="<?php echo htmlentities($row['Description']);?>"  class="form-control" required />
			<span id="errorDescription" class="text-danger"></span>
		</div>
<?php } ?>
<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="update" value="Update">
</div>
</div>
     </form>

<?php
// include database connection file
include_once("function.php");
//Object
$updatedata=new DB_con();
if(isset($_POST['update']))
{
// Get the userid
$userid=intval($_GET['id']);
// Posted Values
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
//Function Calling
$sql=$updatedata->update($sName,$iVersion,$sCommunity,$sType,$sShortDescription,$sTags,$sBranch,$sSupport,$sTest,$sDescription,$userid);
// Mesage after updation
echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='index.php'</script>";
}
?>
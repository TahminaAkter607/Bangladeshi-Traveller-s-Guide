<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<br><br><br><br><br><br><br><br><br>
<table style="width:100%">
<tr><td style="font-size:38px">Admin Links</td></tr>

<?php if($_SESSION["usertype"]=="Admin")
{?>

<tr><td style="font-size:18px"><a href="adduser.php">Add User</a></td></tr>

<tr><td style="font-size:18px"><a href="updateuser.php">Update User</a></td></tr>
<tr><td style="font-size:18px"><a href="deleteuser.php">Delete User</a></td></tr>

<?php }?>

<tr><td style="font-size:18px"><a href="addcategory.php">Add Category</a></td></tr>


<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td style="font-size:18px"><a href="updatecategory.php">Update Category</a></td></tr>
<tr><td style="font-size:18px"><a href="deletecategory.php">Delete Category</a></td></tr>
<?php }?>


<tr><td style="font-size:18px"><a href="viewcategory.php">View Category</a></td></tr>
<tr><td style="font-size:18px"><a href="addsubcategory.php">Add Subcategory</a></td></tr>
<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td style="font-size:18px"><a href="updatesubcategory.php">Update Subcategory</a></td></tr>
<tr><td style="font-size:18px"><a href="deletesubcategory.php">Delete Subcategory</a></td></tr>
<?php }?>

<tr><td style="font-size:18px"><a href="viewsubcategory.php">View Subcategory</a></td></tr>
<tr><td style="font-size:18px"><a href="addpackage.php">Add Package</a></td></tr>

<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td style="font-size:18px"><a href="updatepackage.php">Update Package</a></td></tr>
<tr><td style="font-size:18px"><a href="deletepackage.php">Delete Package</a></td></tr>

<?php }?>

<tr><td style="font-size:18px"><a href="viewpackage.php">View Package</a></td></tr>

<tr><td style="font-size:18px"><a href="viewenquiry.php">View Enquiry</a></td></tr>

<tr><td style="font-size:18px"><a href="viewmessages.php">View Message</a></td></tr>

</table>


</body>
</html>
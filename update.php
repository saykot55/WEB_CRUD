<?php 
include 'header.php'; 
include "config.php";
include "Database.php";
?>

<?php 
 $id = $_GET['id'];
 $db = new Database();
 $query = "SELECT * FROM tbl_user WHERE id= $id";
 $getData = $db->select($query)->fetch_assoc();
 
if(isset($_POST['submit']))
{
	
 $Name = mysqli_real_escape_string($db->link, $_POST['Name']);
	$Description = mysqli_real_escape_string ($db->link,$_POST['Description']);
	$Quantity = $_POST['Quantity'];
	$Price = $_POST['Price'];
	$Exp_Date = $_POST['Exp_Date'];

 if($Name == '' || $Quantity == '' || $Price == ''){
  $error = "Field must not be Empty !!";
 }
 else 
 {
  $query = "UPDATE tbl_user
  SET
  Name  = '$Name',
  Description = '$Description',
  Quantity = '$Quantity',
   Price = '$Price',
  Exp_Date ='$Exp_Date'
  WHERE id = $id";
$update = $db->update($query);
} 
}
?>
<?php
if(isset($_POST['delete'])){
 $query = "DELETE FROM tbl_user WHERE id=$id";
 $deleteData = $db->delete($query);
}
?>
<?php 
if(isset($error)){
 echo "<span style='color:red'>".$error."</span>";
}
?>
<form action="update.php?id=<?php echo $id;?>" method="post">
<table>
 <tr>
  <td>Name</td>
  <td><input type="text" name="Name" 
  value="<?php echo $getData['Name'] ?>"/></td>
 </tr>
 <tr>
  <td>Description</td>
  <td><input type="text" name="Description"
  value="<?php echo $getData['Description'] ?>"/></td>
 </tr>

 <tr>
  <td>Quantity</td>
  <td><input type="int" name="Quantity" 
  value="<?php echo $getData['Quantity'] ?>"/></td>
 </tr>

 <tr>
  <td>Price</td>
  <td><input type="int" name="Price" 
  value="<?php echo $getData['Price'] ?>"/></td>
 </tr>
 
 <tr>
  <td>Exp_Date</td>
  <td><input type="date" name="Exp_Date" 
  value="<?php echo $getData['Exp_Date'] ?>"/></td>
 </tr>
 
 <tr>
  <td></td>
  <td>
  <input type="submit" name="submit" value="Update"/>
  <input type="reset" Value="Cancel" />
  <input type="submit" name="delete" Value="Delete" />
  </td>
 </tr>

</table>
</form>
<a href="index.php"> Go Back </a>

<br><br>
<a style ="color:red">
<footer style ="color:gray">
		
			<p>&copy;Copyright <a style ="color:gray" href="#">Saykot Khandakar</a> ||  <a style ="color:gray" href="#"> 19CSE010 </p>
			<p>Email: <a style ="color:gray" href="abcd.cse6.bu@gmail.com">abcd.cse6.bu@gmail.com</a></p>
	</footer>
	</a>
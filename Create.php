<?php include 'header.php';
include "config.php";
include "Database.php";
?>
<?php
$db=new Database();
if(isset($_POST['Submit'])){
	$Name = mysqli_real_escape_string($db->link, $_POST['Name']);
	$Description = mysqli_real_escape_string ($db->link,$_POST['Description']);
	$Quantity = $_POST['Quantity'];
	$Price = $_POST['Price'];
	$Exp_Date = $_POST['Exp_Date'];
}
	
	if( $Name == '' || $Quantity == '' || $Price == ''){
  $error = "Field must not be Empty !!";
 }
 else 
 {
		$query="INSERT INTO tbl_user(Name,Description,Quantity,Price,Exp_Date) Values('$Name','$Description','$Quantity','$Price','$Exp_Date')";
$create = $db->insert($query);
	}
 
	?>
	<?php 
	if(isset($error)){
		echo "<span style = 'color : red '>".$error."</span>";
	}
	?>

<form action ="Create.php" method ="post">
<table class="tblone">

<div>
<tr>
<td>Name</td>
<td> <input type ="text" name ="Name" placeholder="Please Enter Your Name"/></td>
</tr>
<tr>
<td>Description</td>
<td> <input type ="text" name ="Description" placeholder="Please Enter Your des..."/></td>
</tr>
<tr>
<td>Quantity</td>
<td> <input type ="text" name ="Quantity" placeholder="Please Enter Your Quantity"/></td>
</tr>
<td>Price</td>
<td> <input type ="int" name ="Price" placeholder="Please Enter Your Price"/></td>
</tr>
<td>Exp_Date</td>
<td> <input type ="date" name ="Exp_Date" placeholder="Please Enter Your Expire_Date"/></td>
</tr>
</div>

<div>
<tr>
<td></td>
<td>
<input type="submit" name="Submit" value="submit"/>
<input type="Reset" name="Reset" value="Cancel"/>
</td>
</tr>
</div>


</table>
</form>
<a href="index.php">Go Back</a> <br><br>
<a style ="color:red">
<footer style ="color:gray">
		
			<p>&copy;Copyright <a style ="color:gray" href="#">Saykot Khandakar</a> ||  <a style ="color:gray" href="#"> 19CSE010 </p>
			<p>Email: <a style ="color:gray" href="abcd.cse6.bu@gmail.com">abcd.cse6.bu@gmail.com</a></p>
	</footer>
	</a>

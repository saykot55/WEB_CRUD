<?php include 'header.php';
include "config.php";
include "Database.php";
?>
<?php
$db=new Database();
$query="SELECT * FROM tbl_user";
$read= $db->select($query);
?>

<table class="tblone">
<tr>
<th width="25%">Name</th>
<th width="25%">Description</th>
<th width="25%">Quantity</th>
<th width="25%">Price</th>
<th width="25%">Exp_Date</th>
<th width="25%">Edit</th>
</tr>
<?php if($read){ ?>
<?php while($row=$read->fetch_assoc()){ ?>

<tr>
<td><?php echo $row["Name"]; ?></td>
<td><?php echo $row["Description"]; ?></td>
<td><?php echo $row["Quantity"]; ?></td>
<td><?php echo $row["Price"]; ?></td>
<td><?php echo $row["Exp_Date"]; ?></td>
<td><a style = "color: red " href="update.php?id=<?php echo $row['id'];?>">Update/Delete</a></td>
</tr>
<?php } ?>
<?php } else { ?>
<p>Data Is not available!!</p>
<?php } ?>


</table>
<a style= " color: red; background-color:yellow;" href ="create.php">Create</a> <br><br>
<a style ="color:red">
<footer style ="color:gray">
		
			<p>&copy;Copyright <a style ="color:gray" href="#">Saykot Khandakar</a> ||  <a style ="color:gray" href="#"> 19CSE010 </p>
			<p>Email: <a style ="color:gray" href="abcd.cse6.bu@gmail.com">abcd.cse6.bu@gmail.com</a></p>
	</footer>
	</a>
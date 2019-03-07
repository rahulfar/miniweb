<?php
include('db.php');
?>
<html>
<head>
</head>
<body>
<table border="2">
<tr>
  <th>name</th>
  <th>mname</th>
  <th>lname</th>
  <th>f_name</th>
  <th>address</th>
  <th>pin</th>
  <th>mob</th>
  <th>dob</th>
  <th>category</th>
  <th>exam</th>
  <th>board</th>
  <th>univ</th>
  <th>year</th>
  <th>PAPER</th>
  <th>CODE</th>
  <th>PASSING Y</th>
  <th>D.O.J</th>
  <th>shift</th>
  <th>email</th>
</tr>
<?php
$query=mysqli_query($con,"select * from register order by ID DESC");
while($row=mysqli_fetch_array($query))

{
?>
<tr>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['mname'];?></td>
<td><?php echo $row['lname'];?></td>
<td><?php echo $row['f_name'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['pin'];?></td>
<td><?php echo $row['mob'];?></td>
<td><?php echo $row['dob'];?></td>
<td><?php echo $row['category'];?></td>
<td><?php echo $row['exam'];?></td>
<td><?php echo $row['board'];?></td>
<td><?php echo $row['univ'];?></td>
<td><?php echo $row['year'];?></td>
<td><?php echo $row['first'];?></td>
<td><?php echo $row['second'];?></td>
<td><?php echo $row['third'];?></td>
<td><?php echo $row['four'];?></td>
<td><?php echo $row['shift'];?></td>
<td><?php echo $row['email'];?></td>
<td>
<a href="?id=<?php echo $row['id'];?>"<button type="submit">DELETE</button></a><br>
<a href="update.php?id=<?php echo $row['id'];?>"<button type="submit">UPDATE</button></a>
</td>
</tr>
<?php } ?>
</table>
</body>
</html>
<?php
if(isset($_GET['id']))
{
	$d=$_GET['id'];
$query="DELETE from register where id=$d";
$result=mysqli_query($con,$query);
if($result)
{
	echo'<script>
	alert("data delete")
	window.location="view.php"
	</script>';
}
else{
	echo'<script>
	alert("error");
	</script>';
}
}
?>
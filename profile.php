<?php
include('db.php');
session_start();
if(!isset($_SESSION['email'])){
	header("location:login.php");
}

?>
<html>
<head>
</head>
<body>
<a href="complanit.php ? id=<?php echo ['$user'];?>">MAKE COMPLAINT</a></br>
<a href="logout.php">Logout</a>

<?php
$user = $_SESSION['email'];
$query=mysqli_query($con,"select * from register where email='$user'");
$data=mysqli_fetch_array($query);
?>
<p><b>Welcome </b> <?php echo $data['name']; ?></p>
<table border="10" align="center"width="700">
<tr><td>NAME</td><td></td></tr>
<tr><td>MIDDLE NAME</td><td><?php echo $data['mname']; ?></td></tr>
<tr><td>LAST NAME</td><td><?php echo $data['lname'];?></td></tr>
<tr><td>FATHER'S NAME</td><td> <?php echo $data['f_name'];?></td></tr>
<tr><td>ADDRESS</td><td> <?php echo $data['address'];?></td></tr>
<tr><td>PIN CODE</td><td> <?php echo $data['pin'];?></td></tr>
<tr><td>MOB NUMBER</td><td> <?php echo $data['mob'];?></td></tr>
<tr><td>DATE OF BIRTH</td><td> <?php echo $data['dob'];?></td></tr>
<tr><td>CATEGORY</td><td> <?php echo $data['category'];?></td></tr>
<tr><td>EDUCATION QUALIFICATION</td><td> <?php echo $data['exam'];?></td>
<td> <?php echo $data['board'];?></td><td> <?php echo $data['univ'];?></td>
<td> <?php echo $data['year'];?></td></tr>
<tr><td>COURSE OPTION</td><td><?php echo $data['first'];?></td>
<td><?php echo $data['second'];?></td><td><?php echo $data['third'];?></td>
</td></tr>
<tr><td>PREFERENCE FOR TIME SLOT</td><td> <?php echo $data['shift'];?></td></tr>
<tr><td>EMAIL</td><td> <?php echo $data['email'];?></td></tr>
</body>
</html>
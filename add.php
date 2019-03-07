<?php
include "db.php";
?>
<html>
<head>
<title>APPLICATION FORM</title>
</head>
<body background="19.jpg">
<center><h1>APPLICATIONS FORM</h1></center>
<center><h2><u>SAKSHARTA MISSION</u></h2></center>
<font face="arial" size=4>
<form method="POST">
<table border=1 align="center">
<tr>
<center>
<td><b>1:-name-</td>
<td><input type="textbox" name="name"></td>
<tr>
<td></td>
<td>MIDDLE NAME<br><input type="textbox" name="mname"></td>
</tr>
<tr>
<td></td>
<td>LAST NAME<br><input type="textbox" name="lname"></td>
</tr>
<tr>
<td><b>2:-FATHER'S NAME:-</td>
<td><input type="textbox" name="f_name"></tr>
</tr>


<tr>
<center>
<td><b>EMAIL-</td>
<td><input type="email" name="email"></td>
<tr>
<td></td>
<td>PASSWOED<br><input type="password" name="pass"></td>
</tr>

</tr>


<tr>
<td><b>3:-ADDRESS:-</td>
<td><textarea name="address" rows="10" cols="50"></textarea></td>
</tr>
<tr>
<td><b>4:-PIN CODE:-</td>
<td><input type="textbox" name="pin"></tr>
</tr>
<tr>
<td><b>5:-MOB NUMBER:-</td>
<td><input type="textbox" name="mob"></td>
</tr>
<tr>
<td><b>6:-DATE OF BIRTH:-</b></td>
<td><input type="date" name="dob"></tr>
</tr>
<tr>
<th colspan=2>CATEGORY</th>
</tr>
<tr>
<td>SC<input type="checkbox" name="" value="sc"></td>
<td>ST<input type="checkbox" name="category" value="st"></td>
</tr>

<tr>category
<td colspan=2>
<table border=1>
</tr>
<th colspan=6><b>EDUCATION QUALIFICATION</th>
<tr>
<th rowspan=>S.NO</th>
<th>EXAM</th>
<th>BOARD</th>
<th>UNIVERSITY</th>
<th>YEAR</th>
<th>SUBJECT</th>
</tr>
<tr>
<th><input type="textbox"></th><th><input type="textbox" name="exam"></th><th><input type="textbox" name="board"></th><th><input type="textbox" name="univ"></th><th><input type="date" name="year"></th><th><input type="textbox" name="sub"></th>
</tr><tr><th><input type="textbox"></th><th><input type="textbox" name="exam"></th><th><input type="textbox" name="board"></th><th><input type="textbox" name="univ"></th><th><input type="date" name="year"></th><th><input type="textbox" name="sub"></th>
</tr><tr><th><input type="textbox"></th><th><input type="textbox" name="exam"></th><th><input type="textbox" name="board"></th><th><input type="textbox" name="univ"></th><th><input type="date" name="year"></th><th><input type="textbox" name="sub"></th>
</tr>

<tr>
<table border=1 width=100%>
</tr>
<td colspan=6><b>9:-COURSE OPTION:-</td>
<tr>
<td><b>NAME</td>
<td><input type="textbox" name="first" ></td><td><input type="textbox" name="first" ></td><td><input type="textbox" name="first" ></td>
</tr>
<tr>
<td><b>CODE</td>
<td><input type="textbox" name="second"></td><td><input type="textbox" name="second"></td><td><input type="textbox" name="second"></td>
</tr>
<tr>
<td><b>PASSING Y</td>
<td><input type="textbox" name="third"></td><td><input type="textbox" name="third"></td><td><input type="textbox" name="third"></td>
</tr>
<tr>
<td><b>D.O.J</td>
<td><input type="date" name="four"></td><td><input type="date" name="four"></td><td><input type="date" name="four"></td>
</tr>
<tr>
<table border=1 width=100%>
</tr>
<tr>
<td colspan=6><b>10:-PREFERENCE FOR TIME SLOT:-</td>
</tr>
<tr>
<td>MORNING<input type="checkbox" name="shift" value="moring"></td>
<td>EVENING<input type="checkbox" name="shift" value="evening"></td>
</tr>
</table>
</form>
<center><br><br>
<input type="submit" name="submit">
<input type="reset">
<input type="button" value="OK"> 
</center>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$f_name=$_POST['f_name'];
	$address=$_POST['address'];
	$pin=$_POST['pin'];
	$mob=$_POST['mob'];
	$dob=$_POST['dob'];
	$category=$_POST['category'];
	$exam=$_POST['exam'];
	$board=$_POST['board'];
	$univ=$_POST['univ'];
	$year=$_POST['year'];
	$first=$_POST['first'];
	$second=$_POST['second'];
	$third =$_POST['third'];
	$four=$_POST['four'];
	$shift=$_POST['shift'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$query="insert into register(name,mname,lname,f_name,address,pin,mob,dob,category,exam,board,univ,year,first,second,third,four,shift,email,pass)
	        values('$name','$mname','$lname','$f_name','$address','$pin','$mob','$dob','$category','$exam','$board','$univ','$year','$first','$second','$third','$four','$shift','$email','$pass')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "your data has been connected";
		header('location:login.html');
	}
	else
	{
		echo "";
	}
}
?>

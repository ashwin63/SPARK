<html>
<body background="wall8.jpg">
<table border="0">
<tr>
<td width ="150px" height="120px"><img src="ll.jpg" width="150px" height="120px"></td>
<td><font color="01AEE1"size="10">Spark Hospitals&nbsp&nbsp&nbsp</font>
<td><pre><b><font size="6" color="01AEE1">  
SPARK SEARCH
<form name="1" action="search.php" action="POST"><b><input type="text" name="search" value="Hospitals,Clinics,Pharmaceuticals" size="35" ><input type="button" value="Search" class="button_add"></form>
</td>
<td><img src="logo5.jpg" with="100px" height="70px"><pre>Organised by the 
joint comission 
International</td>
<td>
<td> Contact us on Social  Media
      <img src="logo6.png"></td>
</tr>
</table>
<style>
p {
   border-bottom: 5px light blue;
   background-color: lightblue;
}
</style>
<font size="4"><p align="center"><br>


<a href="Front.html"><b><font color="#000">HOME</a>&nbsp&nbsp
<a href="Patient.html"><b><font color="#000">PATIENT CARE</a>&nbsp&nbsp
<a href="medicine.html"><b><font color="#000">MEDICINE</a>&nbsp&nbsp
<a href="doctor.html"><b><font color="#000">DOCTORS</a>&nbsp&nbsp
<a href="health.html"><b><font color="#000">HEALTH TIPS</a>&nbsp&nbsp
<a href="Appointment.php"><b><font color="#000">APPOINTMENT</a>&nbsp&nbsp
<a href="Register.php"><b><font color="#000">REGISTRATION</a>&nbsp&nbsp
<a href="Login.php"><b><font color="#000">LOGIN</a>&nbsp&nbsp
<a href="about.php"><b><font color="#000">ABOUT</a>&nbsp&nbsp
<br>&nbsp

</p>
</font>
<?php
$X=$_POST['username'];
$Y=$_POST['password'];
$A=$_POST['name'];
$B=$_POST['age'];
$C=$_POST['sex'];
$F=$_POST['occupation'];
$G=$_POST['residence'];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$connect=mysql_connect($dbhost,$dbuser,$dbpass); 

mysql_select_db('management');



$query_insert="insert into user(username,password,Name,Age,Sex,Occupation,Residence) values('$X','$Y','$A','$B','$C','$F','$G')";                                         


if(($A==NULL)||($B==NULL)||($C==NULL)||($F==NULL)||($G==NULL)||($X==NULL)||($Y==NULL))
{
echo("Enter all fields");
}
else
{
if(mysql_query($query_insert,$connect))
{
echo("<br><br><br><br><b><center><h1>You have successfully registered");
}
else
{
echo("insertion failed");
}
}
mysql_close($connect);
?><br>
<form action="signup.php" >
<input type="submit" value="back">
</form>
<form action="Login.php" >
<input type="submit" value="LOGIN">
</form>

</html>

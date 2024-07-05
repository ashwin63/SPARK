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
<br><br><br><br><br><center>
<br>




















<?php
$username=$_POST['user'];
$password=$_POST['pass'];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$connect=mysql_connect($dbhost,$dbuser,$dbpass); 

mysql_select_db('management');
$query="select * from user where username='$username'";
$result=mysql_query($query,$connect);
($row=mysql_fetch_array($result,MYSQL_ASSOC)) ;
$pa=$row['password'];
if($pa==$password)
{
echo("Your credentials are correct..!");
echo("<br>");
echo("To edit the patient details");
echo("<br>");
echo("CLICK the continue button");
?>
<form action="account.php" >
<input type="submit" value="continue">
</form>
<?php }
else
{
echo("your credentials are wrong:try again");
?>
<form action="Login.php">
<input type="submit" value="Retry">
</form>
<?php } ?>
<form action="Login.php" >
<input type="submit" value="BACK">
</form>
























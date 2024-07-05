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
<br>nbsp

</p>
</font>
<br>
<br>
<br>
<br>
</font>
<font size="7" >
<b>
Select the Name You Need To Edit</font>
</b>
</font><?php
$host="localhost:";
$user='root';
$pass='';
$connect=mysql_connect("$host","$user","$pass");
mysql_select_db("tt");
$query_select="select Name from ash";
$a=mysql_query($query_select,$connect);?>


<center><form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<select name="name"><?php
while($row=mysql_fetch_array($a,MYSQL_ASSOC)){?>
<option value="<?php echo $row['Name'];?>"><?php echo $row['Name'];?></option>
<?php }?>
</select>
<input type="submit" value="Submit"></form>
<form action="account.php"><input type="submit" value="back"></form>

<?php mysql_close($connect); ?>
<br>
<br>
<br>
<?php
$host="localhost:";
$user='root';
$pass='';
$connect=mysql_connect("$host","$user","$pass");
mysql_select_db("tt");
$r=$_POST['name'];
$query_select="select * from ash where Name='$r'";
$a=mysql_query($query_select,$connect);?>
<table border="1">
<tr>
<th>Name</th>
<th>Age</th>
<th>Sex</th>
<th width="30px">Blood_group</th>
<th>occupation</th>
<th>residence</th>
<th>Complaint</th>
<th>Present illness</th>
<th>Past illness</th>
<th>Family history</th>
<th>Personal history</th>
<th>Drug allergy</th>
<th>BP</th>
<th>Sugar level</th>
<th>Pulse</th></tr>
<?php $row=mysql_fetch_array($a); {?>
<tr>
<td><?php echo $row['Name'];?></td>
<td><?php echo $row['Age'];?></td>
<td><?php echo $row['Sex'];?></td>
<td width="50px"><?php echo $row['Blood_Group'];?></td>
<td><?php echo $row['Occupation'];?></td>
<td><?php echo $row['Residence'];?></td>
<td><?php echo $row['Complaint'];?></td>
<td><?php echo $row['present_illness'];?></td>
<td><?php echo $row['past_illness'];?></td>
<td><?php echo $row['Family_History'];?></td>
<td><?php echo $row['Personal_history'];?></td>
<td><?php echo $row['Drug_Allergy'];?></td>
<td><?php echo $row['BP'];?></td>
<td><?php echo $row['Sugar_level'];?></td>
<td><?php echo $row['Pulse'];?></td>
<?php }
mysql_close($connect);
?>
</tr></table>
<br>
<br>
<br>
<h1>Select the field you wish to edit</h1>
<form action="update2.php" method="POST">
<input type="hidden" name="nam" value="<?php echo $r; ?>">
<select name="field">
<option value="Name">Name</option>
<option value="Age">Age</option>
<option value="Sex">Sex</option>
<option value="Blood_Group">Blood group</option>
<option value="Occupation">Occupation</option>
<option value="Residence">Residence</option>
<option value="Complaint">Complaint</option>
<option value="present_illness">Present illness</option>
<option value="past_illness">Past illness</option>
<option value="Family_History">Family history</option>
<option value="Personal_history">Personal history</option>
<option value="Drug_Allergy">Drug_allergy</option>
<option value="BP">Bp</option>
<option value="Sugar_level">sugar level</option
<option value="Pulse">Pulse</option>
</select>

<br>

<input type="text" name="fi" placeholder="value to be updated">
<input type="submit" value="update">
</form>

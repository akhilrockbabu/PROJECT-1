<html>
<head>
<style>
.button
{
display: inline-block;
background-color: coral;
font-size: 20px;
padding: 26px 13px;
border-radius: 10px;
border: 3px solid black;
color: white;
transition-duration: 0.4s;
width: 10%;
height: 7%;
cursor: pointer;
}
.button:hover {
background-color: limegreen;
color: black;
}
.button span {
cursor: pointer;
display: inline-block;
position: relative;
transition: 0.5s;
}

.button span:after {
content: '\00bb';
position: absolute;
opacity: 0;
top: 0;
right: -20px;
transition: 0.5s;
}

.button:hover span {
padding-right: 25px;
}

.button:hover span:after {
opacity: 1;
right: 0;
}
table{
    width:60%;
}
tr:nth-child(odd) {
    background-color:  #66b3ff;
}
tr:nth-child(even) {
    background-color: #0073e6;
}
th {
    text-align: center;
  color: white;
}
tr:hover {
    background-color: coral;
}
td{
    text-align: center;
}
tr{
    height: 80px;
    text-align: center;
}
label{
display:inline-block;
width:150px;
}
label{
display:inline-block;
width:150px;
}
</style>
</head>
<body bgcolor="white" text="red">
<center><h1><b>REGISTERED USERS</b></h1></center>
<form method="POST" action="#">
<center>
<table border="1">
<tr>
<th>FULLNAME</th>
<th>USERNAME</th>
<th>PASSWORD</th>
<th>EMAIL ID</th>
<th>AADHAR NO</th>
<th>ACTION</th>
</tr>
<?php
$con=mysql_connect("localhost","root","");
if(!$con)
 echo"couldn't connect to server".mysql_error($con);
$db=mysql_select_db("project",$con);
if(!$db)
echo"cannot connect to database".mysql_error($con);
$q="select * from user";
$r=mysql_query($q,$con);
while($row=mysql_fetch_array($r))
{
$fullname=$row['fullname'];
$username=$row['username'];
$password=$row['password'];
$emailid=$row['emailid'];
$aadharno=$row['aadharno'];
?>
<tr>
<th><?php echo $fullname;?></th>
<th><?php echo $username;?></th>
<th><?php echo "********";?></th>
<th><?php echo $emailid;?></th>
<th><?php echo $aadharno;?></th>
<th><a href="remove_user.php?username=<?php echo $username;?>">REMOVE</a></th>
</tr>
<?php
}
mysql_close($con);
?>
</table>
</form><br><br>
<form action="admin.php" method="POST">
<button id="myButton1" class="button"><span> << BACK </span></button>
<script type="text/javascript">
document.getElementById("myButton1").onclick = function () {
location.href = "admin.php";
};
</script>
</form>
</center>
</body>
</html>
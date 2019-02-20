<?php
   
  
 $dbhost = 'localhost';
 
  $dbuser = 'root';
  
 $dbpass = '';
  
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
  
 if(! $conn )

 {
      die('Could not connect: ' . mysqli_error());
	

   }


	mysqli_select_db($conn,'user');

	

	$sql="select * from train;";

	$result=mysqli_query($conn,$sql);

 
 
echo "<h1><center>TRAIN</center></h1><br>";

echo "<center><table>";
echo "<tr><td>T_NUMBER</td><td>T_NAME</td><td>SOURCE</td><td>DESTINATION</td><td>ARRIVAL</td><td>DEPARTURE</td></tr>";
echo "<tr><td>------------------</td><td>----------------------------------</td><td>----------------------------------</td><td>-----------------------</td><td>---------------</td><td>-------------------</td></tr>";
echo "<br><br><br>";
while($row = mysqli_fetch_assoc($result))
{  
echo "<pre><tr><td>" . $row['tno'] . "</td><td>  " . $row['tname'] . "</td><td>  " . $row['src'] . "</td><td>  " . $row['dest'] . "</td><td>  " . $row['arrival'] . "</td><td>" . $row['dep'] . "</td></tr></pre>";  
}

echo "</table></center>";

?>



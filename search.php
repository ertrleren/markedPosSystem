<?php

$baglan = mysqli_connect("localhost","root","","urunlerdb");
if(!$baglan)
{
die("connection failed".mysqli_connect_error());
}
else 
{
//"<b>Online</b>";
}


$sql = "SELECT * FROM sayim WHERE barkod_no LIKE '%".$_POST['name']."%'";
$result = mysqli_query($baglan, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "	<tr>
		          <td>".$row['barkod_no']."</td>
		          <td>".$row['urun_adi']."</td>
		          <td>".$_POST['adet']."</td>
		          <td>".$row['id']."</td>
		        </tr>";
	}
}
else{
	echo "<tr><td>0 result's found</td></tr>";
}

?>
<?php

$baglan = mysqli_connect("localhost","root","","urunlerdb");
if(!$baglan)
{
die("connection failed".mysqli_connect_error());
}
else 
{
echo "";
}


$sql = "SELECT * FROM sayim WHERE barkod_no=".$_POST['name']."";
$result = mysqli_query($baglan, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "".$row['urun_adi']."";
	}
}
else{
	echo "Hatalı Barkod";
}

?>
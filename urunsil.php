<?php 
if(isset($_GET["pid"]))
{
	include("vt_ayar.php");//Bağlantıyı dahil ediyoruz.
	$sorgu=$vt->prepare('DELETE FROM sayim WHERE id=?');
	$sonuc=$sorgu->execute([$_GET['pid']]);
	if($sonuc){
		header("Location:calisma.php"); //Silme tamamlandıktan sonra personelliste sayfasına yönlendiriyoruz.
	}
	else
		echo("Kayıt silinemedi.");
}
?>
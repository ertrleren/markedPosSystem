
<?php 
include("vt_ayar.php");

$sorgu=$vt->prepare('SELECT * FROM sayim');

$sorgu->execute();
$sayimlist=$sorgu-> fetchAll(PDO::FETCH_OBJ); /*object olarak verılerı cekıyoruz*/


?>





<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Urun Liste</title>
  </head>
  <body>
    
	<div class="container">
	  <div class="row justify-content-center">
	    <div class="col">
		<table class="table table-borderet table-striped table-dark">
		<tr>
		<td>Ürün Adi</td>
		<td>Barkod No</td>
		<td>Ürün Adet</td>
		</tr>
		<?php
		foreach($sayimlist as $sayim) {?>
		<tr>
		   <td><?= $sayim-> urun_adi ?></td>
		   <td><?= $sayim-> barkod_no ?></td>
		   <td><?= $sayim-> urun_adet ?></td>
		</tr>
		
		<?php }  ?>
		
		</table>
		
		</div>
	  </div>
	</div<
	












    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
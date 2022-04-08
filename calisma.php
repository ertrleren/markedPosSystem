<!DOCTYPE html>

<html>

<header>

	<title>Buselpos</title>

	<link rel="icon" type="image/png" href="http://buselbilisim.com/images/logo/3225buselpos-logo%20beyaz.png" />
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/quagga/0.12.1/quagga.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


	<style>
		form {
			text-align: center;
			margin-top: 50px;
		}

		table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		td,
		th {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
		}

		tr:nth-child(even) {
			background-color: #dddddd;
		}

		h2 {
			text-align: center;
		}
	</style>

	<style>
		nav {
			margin: 27px auto 0;
			position: relative;
			width: 590px;
			height: 50px;
			background-color: #34495e;
			font-size: 0;
		}

		nav a {
			line-height: 50px;
			height: 100%;
			font-size: 15px;
			display: inline-block;
			position: relative;
			z-index: 1;
			text-decoration: none;
			text-transform: uppercase;
			text-align: center;
			color: white;
			cursor: pointer;
		}

		nav .animation {
			position: absolute;
			height: 100%;
			top: 0;
			z-index: 0;
			transition: all .5s ease 0s;
		}

		a:nth-child(1) {
			width: 100px;
		}

		a:nth-child(2) {
			width: 110px;
		}

		a:nth-child(3) {
			width: 100px;
		}

		a:nth-child(4) {
			width: 160px;
		}

		a:nth-child(5) {
			width: 120px;
		}

		nav .start-home,
		a:nth-child(1):hover~.animation {
			width: 100px;
			left: 0;
			background-color: #1abc9c;
		}

		nav .start-about,
		a:nth-child(2):hover~.animation {
			width: 110px;
			left: 100px;
			background-color: #e74c3c;
		}

		nav .start-blog,
		a:nth-child(3):hover~.animation {
			width: 100px;
			left: 210px;
			background-color: #3498db;
		}

		nav .start-portefolio,
		a:nth-child(4):hover~.animation {
			width: 160px;
			left: 310px;
			background-color: #9b59b6;
		}

		nav .start-contact,
		a:nth-child(5):hover~.animation {
			width: 120px;
			left: 470px;
			background-color: #e67e22;
		}

		body {
			font-size: 12px;
			font-family: sans-serif;
			background-image: url('images/bg001.jpg');
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			margin: center;

		}

		h1 {
			text-align: center;
			margin: 40px 0 40px;
			text-align: center;
			font-size: 30px;
			color: #ecf0f1;
			text-shadow: 2px 2px 4px #000000;
			font-family: 'Cherry Swash', cursive;
		}

		p {
			position: absolute;
			bottom: 20px;
			width: 100%;
			text-align: center;
			color: #ecf0f1;
			font-family: 'Cherry Swash', cursive;
			font-size: 16px;
		}

		span {
			color: #2BD6B4;
		}

		div {

			margin: center;
		}
	</style>
	<style>
		.drawingBuffer {
			width: 0px;
		}

		canvas {
			width: 0px;
		}

		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #333;
		}

		li {
			float: left;
		}

		li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		li a:hover {
			background-color: #111;
		}

		@import url('https://fonts.googleapis.com/css?family=Inconsolata|Lato:300,400,700');

		html,
		body,
		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		p,
		li,
		ol,
		ul,
		pre {
			margin: 0;
			padding: 0;
		}

		html,
		body {
			min-height: 100%;
		}

		body {
			background-color: #345;
			background-image: linear-gradient(to bottom, #0009, transparent);
			color: #eee;
			font-family: 'Lato', sans-serif;
			font-size: 62.5%;
			padding: 0 20px;
			box-sizing: border-box;
		}

		code {
			background: #fff1;
			font-family: 'Inconsolata', monospace;
			padding: .2em .4em;
		}

		.content {
			background-color: #fff;
			border-radius: 8px;
			box-sizing: border-box;
			color: #666;
			font-size: 1.6em;
			line-height: 1.4em;
			margin: 20px auto;
			margin-top: 80px;
			padding: 20px;
			width: 100%;
			max-width: 800px;
		}

		.content ul {
			margin: .5em 2em;
			padding: 0;
		}

		#footer {
			background-color: #246c;
			background-image: linear-gradient(to bottom, transparent, #0009);
			border-top: 1px solid #fff3;
			box-shadow: inset 0 1px 0 #fff3, 0 0 32px #000;
			overflow: hidden;
			padding: 8px;
			position: fixed;
			left: 0;
			right: 0;
			bottom: 0;
			z-index: 9001;
		}

		#footer a {
			color: #85c6f6;
			padding: 1em 0;
			text-decoration: none;
		}

		#footer ul {
			display: flex;
			list-style: none;
			justify-content: center;
			font-size: 2em;
			font-weight: 300;
		}

		#footer ul li {
			padding: 0 .5em;
		}

		/* Appearance */
		.links {
			background-color: #123;
			background-image: linear-gradient(to bottom, #0003, transparent);
			border-bottom: 1px solid #0003;
			box-shadow: 0 0 32px #0003;
			font-size: 2em;
			font-weight: 300;
		}

		.links>a {
			color: #9ab;
			padding: .75em;
			text-align: center;
			text-decoration: none;
			transition: all .5s;
		}

		.links>a:hover {
			background: #ffffff06;
			color: #adf;
		}

		.links>.line {
			background: #68a;
			height: 1px;
			pointer-events: none;
		}

		/* The Magic */
		#header {
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
		}

		.links {
			display: grid;
			grid-template-columns: repeat(var(--items), 1fr);
			position: relative;
		}

		.links>.line {
			opacity: 0;
			transition: all .5s;
			position: absolute;
			bottom: 0;
			left: var(--left, calc(100% / var(--items) * (var(--index) - 1)));
			width: var(--width, calc(100% / var(--items)));
			--index: 0;
		}

		.links>a:hover~.line {
			opacity: 1;
		}

		.links>a:nth-of-type(1):hover~.line {
			--index: 1;
		}

		.links>a:nth-of-type(2):hover~.line {
			--index: 2;
		}

		.links>a:nth-of-type(3):hover~.line {
			--index: 3;
		}

		.links>a:nth-of-type(4):hover~.line {
			--index: 4;
		}

		.links>a:nth-of-type(5):hover~.line {
			--index: 5;
		}

		.links>a:nth-of-type(6):hover~.line {
			--index: 6;
		}

		.links>a:nth-of-type(7):hover~.line {
			--index: 7;
		}

		.links>a:nth-of-type(8):hover~.line {
			--index: 8;
		}

		.links>a:nth-of-type(9):hover~.line {
			--index: 9;
		}

		.links>a:nth-of-type(10):hover~.line {
			--index: 10;
		}

		.links>a:last-of-type:hover~.line {
			--index: var(--items);
		}
	</style>


</header>

<body>

	<?php

	$baglan = mysqli_connect("localhost", "root", "", "urunlerdb");
	if (!$baglan) {
		die("connection failed" . mysqli_connect_error());
	} else {
		//"<b>Online</b>";
	}

	?>


	<nav class="links" style="--items: 5;">
		<a href="http://localhost/buselpos/index#">Anasayfa</a>
		<a href="http://localhost/buselpos/sayimuygulama">Ürün Ekle</a>
		<a href="http://localhost/buselpos/calisma">Ürün Bul</a>
		<a href="http://localhost/buselpos/yakinda">YENİLENİYOR</a>
		<a href="http://localhost/buselpos/yakinda">YENİLENİYOR</a>
		<span class="line"></span>
	</nav>


	<div class="container " style="text-align:center">

		<div class="container">
			<div class="row">
				<div class="col-sm-3">
				</div>
				<div class="col-sm-6">

				
						<span>search</span>
						<input type="text" class="form-control" id="search">

						<span>Ürün Adı</span>
						<input type="text" class="form-control" id="Uadi">


						<span>Adet</span>
						<input type="text" class="form-control" id="Uadet">

						<button type="submit" id="saveBasket">Kaydet</button>
				






					<br>
					<table class="table table-hover" style="color: white;">
						<thead>
							<tr>
								<th>BarkodNo</th>
								<th>Urun Ad</th>
								<th>Adet</th>
								<th>Id</th>
							</tr>
						</thead>
						<tbody id="output">

						</tbody>
					</table>
				</div>
				<div class="col-sm-3">
				</div>
			</div>
		</div>
		<script type="text/javascript">
			$(document).ready(function() {
				$("#search").change(function() {
					//console.log('değişti');

					$.ajax({
						type: 'POST',
						url: 'isimal.php',
						data: {
							barcode: $("#search").val()
						},
						success: function(data) {
							console.log(data);
							$("#Uadi").val(data);
						}
					});
				});


				$("#saveBasket").click(function() {
					//console.log('değişti');

					$.ajax({
						type: 'POST',
						url: 'search.php',
						data: {
							name: $("#search").val(),
							adet: $("#Uadet").val(),
						},
						success: function(data) {
							console.log(data);
							$("#output").prepend(data);
						}
					});

					


					var value = document.getElementById('search').value;
					if (value.length > 1) {
						$.ajax({
							type: 'POST',
							url: 'adgetir.php',
							data: {
								name: $("#search").val(),
							},
							success: function(data) {
								$("#Uadi").val(data);
							}
						});

					}

				});

				$('#saveBasket').click(function(){
					var search = $('#search').val();
					var Uadi = $('#Uadi').val();
					var Uadet = $('#Uadet').val();
					/*output */
				});
			});
		</script>

		<div class="col-md-12">
			<div class="barcode" id="barcode" style="width:100%;height:100%;margin:auto;"></div>
		</div>

	</div>



	<?php

	if (isset($_POST["buton"])) {

		$sql = ' INSERT INTO sayim (barkod_no, urun_adi, urun_adet) VALUES("' . $_POST["kod"] . '", "' . $_POST["ad"] . '", "' . $_POST["adet"] . '")';

		$sonuc = mysqli_query($baglan, $sql);

		if ($sonuc) {
			echo "Kayit Basarili";
		} else {

			echo mysqli_error($baglan);
		}
	}

	?>

	<br>


	<script>
		Quagga.init({
			inputStream: {
				name: "Live",
				type: "LiveStream",
				target: document.querySelector('#barcode') // Or '#yourElement' (optional)
			},
			decoder: {
				readers: ["ean_reader"]
			}
		}, function(err) {
			if (err) {
				console.log(err);
				return
			}
			console.log("Initialization finished. Ready to start");
			Quagga.start();
			Quagga.onDetected(function(data) {


				//$('body').html('<h1 style="margin-top:25px;font-size:25px;font-weight:bold;text-align:center;">'+data['codeResult']['code']+'<br />Sorgulanıyor Lürfen Bekleyin...</h1>');
				//inputyaz(data['codeResult']['code']);
				console.log("gelen barkod : " + data['codeResult']['code']);
				$("#search").val(data['codeResult']['code']);
				

			});
		});


	</script>
	<script>
		$(document).ready(function() {
			document.getElementsByClassName("drawingBuffer").css("width", "0px");
			$(".drawingBuffer").css("width", "0px");
		});
	</script>


	<br><br>



	<h2>ÜRÜN LİSTESİ</h2>
	<?php
	include("vt_ayar.php");

	$sorgu = $vt->prepare('SELECT * FROM sayim ORDER BY id DESC;');

	$sorgu->execute();
	$sayimlist = $sorgu->fetchAll(PDO::FETCH_OBJ); /*object olarak verılerı cekıyoruz*/


	?>


	<div class="wsize2 bg-img1 respon2" style="background-image: url('images/bg01.jpg');">
	</div>






	<div class="container">
		<div class="row justify-content-center">
			<div class="col">
				<table class="table table-borderet table-striped table-dark">
					<tr>
						<td>Ürün Adi</td>
						<td>Barkod No</td>
						<td>Ürün Adet</td>
						<td>Sil</td>

					</tr>
					<?php
					foreach ($sayimlist as $sayim) { ?>
						<tr>
							<td><?= $sayim->urun_adi ?></td>
							<td><?= $sayim->barkod_no ?></td>
							<td><?= $sayim->urun_adet ?></td>
							<td><a href="urunsil.php?pid=<?= $sayim->id ?>" class="btn btn-danger">Sil</a></td>

						</tr>

					<?php }  ?>

				</table>

			</div>
		</div>
	</div>

</html>
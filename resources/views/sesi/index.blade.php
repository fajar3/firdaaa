<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Selamat Datang di Sistem Informasi Akademik</title>
	<meta http-equiv="content-type" content="text/html;charset=iso-8859-1">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="stylesheet" type="text/css" href="style/login.css">
	<link rel="icon" type="image/x-icon" href="images/favicon.png">

	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen" />





	<style type="text/css">
		#overlay {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: #000;
			filter: alpha(opacity=70);
			-moz-opacity: 0.7;
			-khtml-opacity: 0.7;
			opacity: 0.7;
			z-index: 100;
			display: none;
		}

		.cnt223 a {
			text-decoration: none;
		}

		.popup {
			width: 100%;
			margin: 0 auto;
			display: none;
			position: fixed;
			z-index: 101;
		}

		/*.cnt223{
width: 60%;
min-height: 150px;
margin: 100px auto;
background: #f3f3f3;
position: relative;
z-index: 103;
padding: 15px 35px;
border-radius: 5px;
box-shadow: 0 2px 5px #000;
}*/
		.cnt223 p {
			clear: both;
			color: #555555;
			/*text-align: justify;*/
			font-size: 40px;
			font-family: sans-serif;
		}

		.cnt223 p a {
			color: #1E90FF;
			font-weight: bold;
		}

		.cnt223 .x {
			float: right;
			height: 35px;
			left: 22px;
			position: relative;
			top: -25px;
			width: 34px;
		}

		.cnt223 .x:hover {
			cursor: pointer;
		}

		/* Slideshow container */
		.slideshow-container {
			position: relative;
			background: #F5F5F5;
		}

		/* Slides */
		.mySlides {
			display: none;
			padding: 80px;
			text-align: center;
		}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<script type="text/javascript">
	// $(function() {
	// 	var overlay = $('<div id="overlay"></div>');
	// 	overlay.show();
	// 	overlay.appendTo(document.body);
	// 	$('.popup').show();
	// 	$('.close').click(function() {
	// 		$('.popup').hide();
	// 		overlay.appendTo(document.body).remove();
	// 		return false;
	// 	});
	// 	$('.x').click(function() {
	// 		$('.popup').hide();
	// 		overlay.appendTo(document.body).remove();
	// 		return false;
	// 	});
	// });

	$(document).ready(function () {
		// $("#info").modal('show');
	})
</script>
<div class="popup">
	<div class="cnt223">
		<div align="center"><img src="/front/gate/images/close-white-18dp.svg" class="close"></div></br>
		<center><a href="#" target="_blank"><img src="/front/gate/images/attention.jpg" width="700px"
					class="img-responsive"></center>
	</div>
</div>

<body>
	<div class="container">


		<div id="main_cont" class="panel panel-default">
			<div class="panel-body">
				<form action="/sesi/login" method="POST">
					@csrf
					<div id="login" class="col-md-12">
						<div id="logo"> <a href="http://uniramalang.ac.id/" target="_blank"><img class="img-responsive" src="https://uniramalang.ac.id/wp-content/uploads/2020/11/gedung-depan-2a-1878x874.jpg" />
                        </a></div>
						<div class="clr"></div>
					</div>

					<div class="col-md-12 color-divider" style="background-color:#48D1CC">
					</div>

					<div id="login_content" class="col-md-12 row">
						<div class="title col-sm-12 col-md-5 margin-up20px">
							<h2>
								<font size="3helvetica"> Sistem Informasi Akademik Mahasiswa<br />
									<strong>
										<font size="3helvetica">UNIVERSITAS ISLAM RADEN RAHMAT</font>
									</strong>
							</h2>
						</div>
						<div class="col-sm-12 col-md-7 row margin-up20px">
							<div class="teks-yellow col-sm-6 col-md-4">
								<label for="email" class="form-label">Email</label>
                <input type="email" value="{{Session::get('email')}}" name="email" class="form-control">
							</div>
							<div class="teks-yellow col-sm-6 col-md-4" style="height: 0;">
								<label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
							</div>
							<div class="col-md-4 pull-right">
								<button name="submit" type="submit" class="btn btn-primary">Login</button>
							</div>
						</div><br>
						<div class="teks-white col-md-7">
							<font size="2"> Belum Registrasi? <a href="sesi/register"
									style="color:#ffba00;cursor:pointer;text-decoration:none">Klik di sini</a>
						</div>
						<br />


				</form>
			</div>




			<div class="modal fade" id="info" role="dialog">
				<div class="modal-dialog">

					<div class="modal-content">
						<div class="modal-header bg-primary">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title"><span class="glyphicon glyphicon-info-sign"></span> Informasi</h4>
						</div>
						<div class="modal-body">
							<img src="/front/gate/images/wisuda_periode6_2022-2023.jpeg" width="700px"
								class="img-responsive">
							<h5 style="text-align: center"><b>Batas akhir pendaftaran wisuda ke-6 tahun akademik
									2022/2023</b></h5>
							<h3 id="timer" style="text-align: center"></h3>


							<center>






							</center>
						</div>

					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="modal-title"><span class="glyphicon glyphicon-info-sign"></span> Pengumuman</h4>
		</div>
		<div class="panel-body">
			<div id="footer" class="alert alert-danger" align="center">
				<p id="warning">
					<b>Mahasiswa wajib mengisi NIK sesuai data kependudukan (KTP/KK)</b><br />
					Fungsi : Untuk reservasi nomor ijazah nasional pada <a href="https://pddikti.kemdikbud.go.id/"
						target="_blank" style="color:#000080">PDDIKTI</a><br />
					Cara : Masuk menu Mahasiswa - Portal - Sunting Biodata
				</p>
			</div>

			<div id="footer" class="alert alert-danger" align="center">
				<p id="warning">
					<b>Dosen dan Mahasiswa wajib mengisi angket Spada Indonesia</b><br />
					Laman angket <a href="https://elearning.uniramalang.ac.id/" target="_blank"
						style="color:#000080">e-Learning UNIRA</a><br />
				</p>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		main = document.getElementById('main_cont');
		var e = window,
			a = 'inner';
		if (!('innerHeight' in window)) {
			a = 'client';
			e = document.documentElement || document.body;
		}
		viewport = e[a + 'Height'];
		content = main.offsetHeight;
		main.setAttribute("style", "margin-top:" + ((viewport - content) / 3) + "px");

		function showEmail() {
			window.open("index.php?page=email_pegawai");
		}
	</script>
	<script>
		// Set the date we're counting down to
		let countDownDate = new Date("Jul 22, 2023 16:00:00").getTime();

		// Update the count down every 1 second
		let x = setInterval(function () {

			// Get today's date and time
			let now = new Date().getTime();

			// Find the distance between now and the count down date
			let distance = countDownDate - now;

			// Time calculations for days, hours, minutes and seconds
			let days = Math.floor(distance / (1000 * 60 * 60 * 24));
			let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			let seconds = Math.floor((distance % (1000 * 60)) / 1000);

			// Output the result in an element with id="demo"
			let html = "<b>" + days + "</b> hari <b>" + hours + "</b> jam <b>" + minutes + "</b> menit <b>" + seconds + "</b> detik ";
			$("#timer").html(html);

			// If the count down is over, write some text 
			if (distance < 0) {
				clearInterval(x);
				$("#timer").html("PENDAFTARAN WISUDA KE-6 SUDAH DITUTUP");
			}
		}, 1000);
	</script>
</body>

</html>
<?php
require("config/config.default.php");
require("config/config.candy.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login | <?php echo $setting['aplikasi']; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="dist/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="dist/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="dist/vendor/animate/animate.css">

	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="dist/css/util.css">
	<link rel="stylesheet" type="text/css" href="dist/css/main.css">
	<!--===============================================================================================-->
	<link rel='stylesheet' href='<?php echo $homeurl; ?>/plugins/sweetalert2/dist/sweetalert2.min.css'>
</head>

<body style="background: url('<?= $setting['bc'] ?>');background-size:cover;background-position: center;background-repeat: no-repeat;">

	<div class="limiter">
		<div class="container-login100">
			<div class="animated flipInX wrap-login100" style="padding-top:30px">
				<form id="formlogin" action="ceklogin.php" class="login100-form validate-form">
					<span class="animated infinite pulse delay-5s login100-form-title p-b-26 ">
						<img src="<?php echo $setting['logo']; ?>" style="max-height:50px" class="img-responsive" alt="Responsive image">
					</span>
					<span class=" login100-form-title p-b-26 ">
						<?php echo $setting['sekolah']; ?>
					</span>
					<div class="animated flipInX delay-10s p-b-20">
						<span>Silahkan Login dengan username dan password yang anda miliki</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter Username" required>
						<input class="input100" type="text" name="username" autocomplete="off">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
						<p><small>Support By <?= APLIKASI . " v" . VERSI . " r" . REVISI ?></small></p>
					</div>


				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="dist/vendor/jquery/jquery-3.2.1.min.js"></script>

	<!--===============================================================================================-->
	<script src="dist/vendor/bootstrap/js/popper.js"></script>
	<script src="dist/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src='<?php echo $homeurl; ?>/plugins/sweetalert2/dist/sweetalert2.min.js'></script>
	<script src="dist/js/main.js"></script>
	<script>
		$(document).ready(function() {
			$('#formlogin').submit(function(e) {
				var homeurl;
				homeurl = '<?php echo $homeurl; ?>';
				e.preventDefault();
				$.ajax({
					type: 'POST',
					url: $(this).attr('action'),
					data: $(this).serialize(),
					success: function(data) {

						if (data == "ok") {
							console.log('sukses');
							window.location = homeurl;
						}
						if (data == "nopass") {
							swal({
								position: 'top-end',
								type: 'warning',
								title: 'Password Salah',
								showConfirmButton: false,
								timer: 1500
							});
						}
						if (data == "td") {
							swal({
								position: 'top-end',
								type: 'warning',
								title: 'Siswa tidak terdaftar',
								showConfirmButton: false,
								timer: 1500
							});
						}
						if (data == "nologin") {
							swal({
								position: 'top-end',
								type: 'warning',
								title: 'Siswa sudah aktif',
								showConfirmButton: false,
								timer: 1500
							});
						}
						if (data == "ta") {
							swal({
								position: 'top-end',
								type: 'warning',
								title: 'Akun belum diaktifkan silahkan hubungi panitia ujian',
								showConfirmButton: false,
								timer: 1500
							});
						}

					}
				})
				return false;
			});

		});

		function showpass() {
			var x = document.getElementById("pass");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
		}
	</script>

</body>
<div style="display:none;">
<a href="https://sehati.halal.go.id/login/" rel="dofollow">Slot Gacor</a>
<a href="https://puskesmas-sambirejo.sragenkab.go.id/galeri/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://sipari.jogjaprov.go.id/uploads/berita/" rel="dofollow">Slot Gacor</a>
<a href="https://dinsos.merauke.go.id/berita/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://dinsos.merauke.go.id/login/" rel="dofollow">Slot Gacor</a>
<a href="https://dinkes.sragenkab.go.id/galeri/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://dinkes.sragenkab.go.id/download/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://epusdaku.kuningankab.go.id/pencarian/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://epusdaku.kuningankab.go.id/slot-gacor/" rel="dofollow">Slot Gacor</a>	
<a href="https://epusdaku.kuningankab.go.id/slot88-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://laporsaberpungli.pemkomedan.go.id/assets/file_bukti/-/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://pmi.okuselatankab.go.id/slot-gacor-terbaik/" rel="dofollow">Slot Gacor</a>
<a href="https://sidonor.pmi.okuselatankab.go.id/main/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://lh.surabaya.go.id/biss/storage/app/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://lh.surabaya.go.id/weblh/storage/framework/cache/rtp-slot/" rel="dofollow">Rtp Slot</a>
<a href="https://test.halal.go.id/resmi/" rel="dofollow">Slot Gacor</a>
<a href="https://rsudsukowati.sragenkab.go.id/galeri/slot-gacor" rel="dofollow">Slot Gacor</a>
<a href="https://rsudsukowati.sragenkab.go.id/galeri/slot-gacor-terbaik" rel="dofollow">Slot Gacor</a>
<a href="http://pintar.jatengprov.go.id/public/uploads/users/slot-gacor-resmi/" rel="dofollow">Slot Gacor</a>
<a href="https://elapor.merauke.go.id/laporan/register/" rel="dofollow">Slot Gacor</a>
<a href="https://elapor.merauke.go.id/assets/css/tag/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://ptsp.halal.go.id/css/" rel="dofollow">Slot Gacor</a>
<a href="https://ptsp.halal.go.id/KH/slot2023/" rel="dofollow">Slot Gacor</a>
<a href="https://icositer.itera.ac.id/wp-content/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="http://emispdpt.iain-jember.ac.id/upload/web_foto_upload/files/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://info.halal.go.id/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://test.halal.go.id/resmi/" rel="dofollow">Slot Gacor</a>
<a href="http://presensi.halal.go.id/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="http://presensi.halal.go.id/vendor/jquery/" rel="dofollow">Slot Gacor</a>
<a href="https://pkk.merauke.go.id/.well-known/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="http://pantaucorona.halal.go.id/dist/js/" rel="dofollow">Slot Gacor</a>
<a href="https://ecp.tnbilsas.com.my/storage/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://layananonline.disdukcapil.subulussalamkota.go.id/" rel="dofollow">Slot Gacor</a>
<a href="https://layananonline.disdukcapil.subulussalamkota.go.id/rtp-slot/" rel="dofollow">Rtp Slot</a>
<a href="https://dinkes.sragenkab.go.id/img/rtp-slot/" rel="dofollow">Rtp Slot</a>
<a href="https://puskesmas-sambirejo.sragenkab.go.id/download/rtp-slot-gacor/" rel="dofollow">Rtp Slot</a>
<a href="https://epusdaku.kuningankab.go.id/rtp-slot/" rel="dofollow">Rtp Slot</a>
<a href="http://pintar.jatengprov.go.id/public/uploads/users/rtp-slot/" rel="dofollow">Rtp Slot</a>
<a href="https://rsudsukowati.sragenkab.go.id/download/rtp-slot/" rel="dofollow">Rtp Slot</a>
</html>

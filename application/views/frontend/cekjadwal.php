<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/elements/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		     
		<!-- Site Title -->
		<title>UMUTTEPE TURİZM</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--CSS-->
		<?php $this->load->view('frontend/include/base_css'); ?>
	</head>
	<body>
		<!-- navbar -->
		<?php $this->load->view('frontend/include/base_nav'); ?>
		<section class="service-area section-gap relative">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row d-flex justify-content-center">
						<div class="col-lg-12">
						<!-- Default Card Example -->
						<div class="card mb-5">
							<div class="card-header">
								<i class="fas fa-list"></i> Kalkış Listesi
							</div>
							<div class="card-body">
								<div class="table-responsive">
								<table class="table table-bordered table-hover table-striped">
									<thead class="thead-dark">
										<tr>
											<th scope="col">Rota [Program Kodu]</th>
											<th>Ulaşılacak Terminal</th>
											<th scope="col">Tarih ve Saat</th>
											<th scope="col">Koltuklar</th>
											<th>Fiyat</th>
											<th scope="col">Hareket</th>
										</tr>
									</thead>
									<tbody>
										<?php for ($i=0; $i < count($jadwal)  ; $i++) { ?>
										<tr>
											<td><?php echo strtoupper($asal['kota_tujuan'])." - ".strtoupper($jadwal[$i]['kota_tujuan'])." [".$jadwal[$i]['kd_jadwal']."]"; ?></td>
											<td><?php echo $jadwal[$i]['terminal_tujuan'] ?></td>
											<td><?php echo hari_indo(date('N',strtotime($tanggal))).', '.tanggal_indo(date('Y-m-d',strtotime(''.$tanggal.''))).', '.date('H:i',strtotime($jadwal[$i]['jam_berangkat_jadwal'])); ?></td>
											<td><?php echo $jadwal[$i]['kapasitas_bus']-$kursi[$i][0]['count(no_kursi_order)'] ?></td>
											<td>$<?php echo number_format((float)($jadwal[$i]['harga_jadwal']),0,",","."); ?></td>
											<td><a href="<?php echo base_url('tiket/beforebeli/').$jadwal[$i]['kd_jadwal'].'/'.$asal['kd_tujuan'].'/'.$tanggal ?>" class=" btn btn-outline-success">Seçim</a></td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
								</div>
								<a href="<?php echo base_url('tiket') ?>" class="btn btn-danger pull-left">Geri Git </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				     
				<!-- End banner Area -->
				<!-- End Generic Start -->
				<!-- start footer Area -->
				<?php $this->load->view('frontend/include/base_footer'); ?>
				<!-- js -->
				<?php $this->load->view('frontend/include/base_js'); ?>
			</body>
		</html>
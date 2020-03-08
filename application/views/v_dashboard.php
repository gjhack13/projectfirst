<?php
$rapat_selesai = $this->db->query("SELECT * FROM pengajuan_rapat WHERE hasil_rapat !=''")->num_rows();
$rapat_soon = $this->db->query("SELECT * FROM pengajuan_rapat WHERE hasil_rapat=''")->num_rows();
?>
<div class="row">
	<div class="panel-heading">
		<div class="pull-left">
			<h3 class="panel-title txt-dark">Dashboard</h3><br><br>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="panel panel-default card-view pa-0">
			<div class="panel-wrapper collapse in">
				<div class="panel-body pa-0">
					<div class="sm-data-box">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
									<span class="txt-dark block counter"><span class="counter-anim"><?= $rapat_soon; ?></span></span>
									<span class="weight-500 uppercase-font block font-13">Agenda Rapat</span>
								</div>
								<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
									<i class="icon-layers data-right-rep-icon txt-light-grey"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="panel panel-default card-view pa-0">
			<div class="panel-wrapper collapse in">
				<div class="panel-body pa-0">
					<div class="sm-data-box">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
									<span class="txt-dark block counter"><span class="counter-anim"><?= $rapat_selesai; ?></span></span>
									<span class="weight-500 uppercase-font block">Rapat Terlaksana</span>
								</div>
								<div class="col-xs-6 text-center  pl-0 pr-0 pt-25  data-wrap-right">
									<div class="sp-small-chart" id="sparkline_4"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default card-view">
			<div class="panel-heading">

				<h4 align="center">PANCASILA</h4>

				<div class="clearfix"></div>
			</div>
			<div class="panel-wrapper collapse in">
				<div class="panel-body">
					<span class="weight-500 uppercase-font block font-13" style="line-height: 40px">
						1. Ketuhanan Yang Maha Esa<br>
						2. Kemanusiaan yang adil dan beradab<br>
						3. Persatuan Indonesia<br>
						4. Kerakyatan Yang Dipimpin Oleh Hikmat Kebijaksanaan dalam Permusyawaratan Perwakilan<br>
						5. Keadilan Sosial Bagi Seluruh Rakyat Indonesia
					</span>

				</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="panel panel-default card-view">
			<div class="panel-heading">

				<h4 align="center">Tentang</h4>

				<div class="clearfix"></div>
			</div>
			<div class="panel-wrapper collapse in">
				<div class="panel-body">
					<span class="weight-500 uppercase-font block font-13" ">
						Pada hakikatnya Pancasila telah di bentuk melalui proses yang cukup panjang oleh para pendiri bangsa. Pancasila sebagai ideologi dinamis yang mencerminkan keterbukaan pemikiran yang mampu menerima segala iklim perubahan yang terjadi agar mampu melaksanakan nilai-nilai Pancasila yang luhur secara mendasar. <hr>
						Badan Pembinaan Ideologi Pancasila adalah adalah institusi yang melakukan pembinaan ideologi Pancasila dengan tugas membantu Presiden dalam merumuskan arah kebijakan umum pembinaan ideologi Pancasila dan melaksanakan koordinasi, sinkronisasi, dan pengendalian pembinaan ideologi Pancasila secara menyeluruh dan berkelanjutan.
					</span>
					
				</div>
			</div>
		</div>
	</div>
</div>

						<!-- Footer -->
						<footer class=" footer container-fluid pl-30 pr-30">
						<div class="row">
							<div class="col-sm-12 text-center">
								<p>Copyright © 2018<script>
										new Date().getFullYear() > 2018 && document.write("-" + new Date().getFullYear());
									</script>, Pusdatin BPIP.</p>
							</div>
						</div>
						</footer>
						<!-- /Footer -->
						<!-- /Row -->
<!-- Komponen Terpisah (unseen component)-->
<!-- Theme Custom CSS -->
<!-- Button Donation -->
<div class="col-sm-9">
	<div class="modal fade" id="donasi" tabindex="-1" role="dialog" aria-labelledby="donasiLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="donasiLabel">#LangkahMudahBersedekah</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<img class="img-fluid rounded mb-4" src="https://bagussatria.github.io/cdn/img/qrcode.jpg" alt="Project Image">
					<p>Buka aplikasi > Scan QR diatas > Masukan Nominal </p>
					<p>Terimakasih telah bersedekah, untuk konfirmasi sedekah <a href="#">Klik Disini</a></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-sm-9">
	<div class="modal fade" id="tunaikan" tabindex="-1" role="dialog" aria-labelledby="tunaikanLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="tunaikanLabel">Kalkulasi Zakat Penghasilan</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div id="valuepenghasilan">
						<p style="text-align: center;">Jumlah zakat penghasilan Anda:</p>
						<p class="mb-10" style="font-size: 36px; text-align: center; font-weight: bold;"><span id="totalpendapatanlabel"></span>,-</p>
						<br>
						<!--Container Left and Right -->
						<div class="row pb-5">
							<div class="col-lg-6 py-3">
								<center>
								<img class="img-fluid rounded mb-4" src="https://bagussatria.github.io/cdn/img/qrklzakat.jpg" alt="qrklzakat"></center>
								<p>Buka aplikasi pilihan > Scan QR diatas > Masukan Nominal
									<br>
								A/N: Bazma Pertamina </p>
							</div>
							<div class="col-lg-6 divider-left-border py-3">
								<div class="col-lg-12">
									<div class="py-3 text-left">
										<p>Pendapatan per bulan: <span id="pendapatanlabel"></span>,-</p>
										<p>Bonus, THR dan lainnya: <span id="lainnyalabel"></span>,-</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<button onclick="konfirmasipenghasilan();" class="btn btn-lg btn-block btn-dark btn-theme-colored" data-loading-text="Please wait...">Konfirmasi Pembayaran</button>
							</div>
							<div class="col-sm-6"><button onclick="ulangpenghasilan();" class="btn btn-lg btn-block btn-theme-colored" data-dismiss="modal">Hitung Ulang</button>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Bayar Zakat Penghasilan -->
<!-- IFrame Responsive | custom.css
<div class="responsive-container"><iframe class="responsive-iframe" src="https://docs.google.com/forms/d/e/1FAIpQLSeDeCce1ksQtuysE4idVjLt--UNP7pe1qcDqcdyClTjQSNW0g/viewform" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
-->
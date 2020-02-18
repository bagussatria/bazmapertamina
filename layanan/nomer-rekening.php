<?php include('../header.php'); ?>
<hr>
<div class="container py-2">
	<div class="row">
		<div class="col">
			<div class="row">
				<div class="col pb-3">
					<table class="table table-hover">
						<thead>
							<h3 class="font-weight-bold"><a>Rekening Zakat</a></h3>
							<tr>
								<th>
									NO.
								</th>
								<th>
									BANK
								</th>
								<th>
									NO REKENING
								</th>
								<th>
									
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									1
								</td>
								<td>
									<img src="https://bagussatria.github.io/cdn/img/bank-logo/bsm.webp">
								</td>
								<td>
									711.88.444.61
								</td>
								<td>
									@mdo
								</td>
							</tr>
							<tr>
								<td>
									2
								</td>
								<td>
									<img src="https://bagussatria.github.io/cdn/img/bank-logo/bnis.webp">
								</td>
								<td>
									277.498.663
								</td>
								<td>
									@fat
								</td>
							</tr>
							<tr>
								<td>
									3
								</td>
								<td>
									<img src="https://bagussatria.github.io/cdn/img/bank-logo/bris.webp">
								</td>
								<td>
									6666.777.888
								</td>
								<td>
									@twitter
								</td>
							</tr>
							<tr>
								<td>
									4
								</td>
								<td>
									<img src="https://bagussatria.github.io/cdn/img/bank-logo/mandiri.webp">
								</td>
								<td>
									119.009.201.0162
								</td>
								<td>
									@twitter
								</td>
							</tr>
						</tbody>
					</table>
					<br>
					<br>
					<table class="table table-hover">
						<thead>
							<h3 class="font-weight-bold"><a>Rekening Wakaf</a></h3>
							<tr>
								<th>
									NO.
								</th>
								<th>
									BANK
								</th>
								<th>
									NO REKENING
								</th>
								<th>
									
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									1
								</td>
								<td>
									<img src="https://bagussatria.github.io/cdn/img/bank-logo/bsm.webp">
								</td>
								<td>
									711.88.444.88
								</td>
								<td>
									@mdo
								</td>
							</tr>
							<tr>
								<td>
									2
								</td>
								<td>
									<img src="https://bagussatria.github.io/cdn/img/bank-logo/bnis.webp">
								</td>
								<td>
									800.666.334
								</td>
								<td>
									@fat
								</td>
							</tr>
							<tr>
								<td>
									3
								</td>
								<td>
									<img src="https://bagussatria.github.io/cdn/img/bank-logo/bris.webp">
								</td>
								<td>
									2222.333.444
								</td>
								<td>
									@twitter
								</td>
							</tr>
						</tbody>
					</table>
					<br>
					<br>
					<table class="table table-hover">
						<thead>
							<h3 class="font-weight-bold"><a>Rekening infaq/shodaqoh</a></h3>
							<tr>
								<th>
									NO.
								</th>
								<th>
									BANK
								</th>
								<th>
									NO REKENING
								</th>
								<th>
									
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									1
								</td>
								<td>
									<img src="https://bagussatria.github.io/cdn/img/bank-logo/bsm.webp">
								</td>
								<td>
									711.884444.29
								</td>
								<td>
									<i title="Salin nomor rekening"onClick="salinNomerRekening('71188444429');return i;">Salin</i>
								</td>
							</tr>
							<tr>
								<td>
									2
								</td>
								<td>
									<img src="https://bagussatria.github.io/cdn/img/bank-logo/bnis.webp">
								</td>
								<td>
									277.498.306
								</td>
								<td>
									@fat
								</td>
							</tr>
							<tr>
								<td>
									3
								</td>
								<td>
									<img src="https://bagussatria.github.io/cdn/img/bank-logo/bris.webp">
								</td>
								<td>
									444.555.666
								</td>
								<td>
									@twitter
								</td>
							</tr>
							<tr>
								<td>
									4
								</td>
								<td>
									<img src="https://bagussatria.github.io/cdn/img/bank-logo/mandiri.webp">
								</td>
								<td>
									119.000.301.1028
								</td>
								<td>
									@twitter
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
function salinNomerRekening(e){
var tempItem = document.createElement('input');
tempItem.setAttribute('type','text');
tempItem.setAttribute('display','none');

let content = e;
if (e instanceof HTMLElement) {
content = e.innerHTML;
}

tempItem.setAttribute('value',content);
document.body.appendChild(tempItem);

tempItem.select();
document.execCommand('Copy');
tempItem.parentElement.removeChild(tempItem);

 /* Alert the copied text */
 var i =  alert("tersalin: " + input);
}
</script>
<?php include('../footer.php'); ?>
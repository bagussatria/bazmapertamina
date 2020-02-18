<?php include '../header.php';?>
<center>
<section>
  <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
    <div class="card border-radius-0 bg-color-light border-0 box-shadow-1">
      <div class="card-body">
        <div class="row">
          <div class="col-md-12 col-md-push-12">
            <div class="text-center mb-60"></div>
            <div class="bg-lightest border-1px p-25">
              <h4 class="text-theme-colored text-uppercase m-0 text-center">Kalkulator Zakat</h4>
              <p style="text-align: justify;">Kalkulator zakat adalah layanan untuk mempermudah perhitungan jumlah zakat yang harus ditunaikan oleh setiap umat muslim sesuai ketetapan syariah. Oleh karena itu, bagi Anda yang ingin mengetahui berapa jumlah zakat yang harus ditunaikan.</p><hr>
              <label for="form_post">Jenis Zakat</label>
              <select id="jenis" name="form_post" class="form-control required" onchange="getForm();">
                <option value=""></option>
                <!-- <option value="zakatfitrah">Zakat Fitrah</option> -->
                <option value="zakatpenghasilan">Zakat Penghasilan</option>
                <option value="zakatmaal">Zakat Maal</option>
              </select>
              <div id="fitrah">
                <p class="mt-20 mb-10" style="text-align: justify;">Zakat fitrah (zakat al-fitr) adalah zakat yang diwajibkan atas setiap jiwa baik lelaki dan perempuan muslim yang dilakukan pada bulan Ramadhan memasuki saat futur (berbuka puasa) pada Idul Fitri sebagaimana hadist Ibnu Umar ra, "Rasulullah SAW mewajibkan zakat fitrah satu sha’ kurma atau satu sha’ gandum atas umat muslim; baik hamba sahaya maupun merdeka, laki-laki maupun perempuan, kecil maupun besar. Beliau saw memerintahkannya dilakasanakan sebelum orang-orang keluar untuk shalat.” (HR Bukhari Muslim)</p>
                <p class="mb-10" style="text-align: justify;">Para ulama sebagaimana Shaikh Yusuf Qardawi telah membolehkan zakat fitrah ditunaikan dalam bentuk uang yang setara dengan 1 sha' harga makanan yang jika di konversikan sebesar Rp40.000,-</p>
                <form id="" name="" class="mt-30" method="post" action="">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group mb-10">
                        <label for="">Jumlah tanggungan</label>
                        <input name="" class="form-control" type="text" required="" placeholder="Masukkan jumlah jiwa." aria-required="true" id="jumlahjiwa">
                      </div>
                    </div>
                  </div>
                  <p class="mb-10" style="text-align: justify;">.</p>
                  <div class="form-group mb-0 mt-20">
                    <input name="" class="form-control" type="hidden" value="" >
                    <button onclick="hitungfitrah(); return false;" class="btn btn-lg btn-block btn-dark btn-theme-colored" data-loading-text="Please wait...">Hitung Zakat</button>
                  </div>
                </form><hr>
                
              </div>
              <div id="valuefitrah">
                <p style="text-align: center;">Jumlah zakat fitrah Anda:</p>
                <p class="mb-10" style="font-size: 36px; text-align: center; font-weight: bold;"><span id="jumlahfitrahlabel"></span>,-</p>
                <div class="row">
                  <div class="col-sm-6">
                    <p>Jumlah tanggungan:</p>
                  </div>
                  <div class="col-sm-6">
                    <p style="text-align: right;"><span id="jumlahtanggunganlabel"></span></p>
                    <input type="hidden" name="jumlahtanggungan" id="jumlahtanggungan" />
                    <input type="hidden" name="jumlahfitrah" id="jumlahfitrah" />
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <button onclick="bayarfitrah();" class="btn btn-lg btn-block btn-dark btn-theme-colored" data-loading-text="Please wait...">Bayar Zakat fitrah</button>
                  </div>
                  <div class="col-sm-6"><button onclick="ulangfitrah();" class="btn btn-lg btn-block btn-theme-colored" data-loading-text="Please wait...">Hitung Ulang</button>
                  </div>
                </div>
                <hr>
              </div>
              <div id="penghasilan">
                <p class="mt-20 mb-10" style="text-align: justify;">Zakat penghasilan atau yang dikenal juga sebagai zakat zakat profesi adalah bagian dari zakat maal yang wajib dikeluarkan atas harta yang berasal dari pendapatan / penghasilan rutin dari pekerjaan yang tidak melanggar syariah (Al Qur'an Surah Al Baqarah ayat 267, Peraturan Menteri Agama No 52/2014 dan pendapat Shaikh Yusuf Qardawi). Standar nishab yang digunakan adalah sebesar Rp5.240.000,- per bulan.</p>
                <form id="" name="" class="mt-30" method="post" action="">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group mb-10">
                        <label for="">Jumlah pendapatan per bulan</label>
                        <input name="" class="form-control numbersOnly" type="text" id="pendapatan" value="0" required="" placeholder="Masukkan nominal tanpa titik." aria-required="true" style="text-align: right;">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group mb-10">
                        <label for="">Bonus, THR dan lainnya</label>
                        <input name="" class="form-control numbersOnly" type="text" id="lainnya" value="0" required="" placeholder="Masukkan nominal tanpa titik." aria-required="true" style="text-align: right;">
                      </div>
                    </div>
                  </div>
                  <p class="mb-10" style="text-align: justify;"></p>
                  <div class="form-group mb-0 mt-20">
                    <input name="" class="form-control" type="hidden" value="">
                    <button onclick="hitungpenghasilan(); return false;" class="btn btn-modern btn-rounded btn-primary mb-2"  data-toggle="modal" data-target="#tunaikan">Hitung Zakat</button>
                  </div>


                </form><hr>
                
                <!--  <div id="bawahnishabpenghasilan">
                  <p style="text-align: center; font-weight: bold;">Penghasilan Anda di bawah nishab zakat.</p>
                  <div class="row">
                    <div class="col-sm-6">
                      <p>Pendapatan per bulan:</p>
                    </div>
                    <div class="col-sm-6">
                      <p style="text-align: right;">123,-</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <p>Bonus, THR dan lainnya:</p>
                    </div>
                    <div class="col-sm-6">
                      <p style="text-align: right;">0,-</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><button class="btn btn-lg btn-block btn-theme-colored" data-loading-text="Please wait...">Hitung Ulang</button>
                    </div>
                  </div>
                  <hr>
                </div> -->
              </div>
              <!--<div id="valuepenghasilan">
                <p style="text-align: center;">Jumlah zakat penghasilan Anda:</p>
                <p class="mb-10" style="font-size: 36px; text-align: center; font-weight: bold;"><span id="totalpendapatanlabel"></span>,-</p>
                <div class="row">
                  <div class="col-sm-6">
                    <p>Pendapatan per bulan:</p>
                  </div>
                  <div class="col-sm-6">
                    <p style="text-align: right;"><span id="pendapatanlabel"></span>,-</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <p>Bonus, THR dan lainnya:</p>
                  </div>
                  <div class="col-sm-6">
                    <p style="text-align: right;"><span id="lainnyalabel"></span>,-</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <button onclick="#tunaikan" class="btn btn-lg btn-block btn-dark btn-theme-colored" data-loading-text="Please wait...">Bayar Zakat Penghasilan</button>
                  </div>
                  <div class="col-sm-6"><button onclick="ulangpenghasilan();" class="btn btn-lg btn-block btn-theme-colored" data-loading-text="Please wait...">Hitung Ulang</button>
                  </div>
                </div>
                <hr>
              </div> -->
              <div id="maal">
                <p class="mt-20 mb-10" style="text-align: justify;">Zakat maal yang dimaksud dalam perhitungan ini adalah zakat yang dikenakan atas uang, emas, surat berharga, dan aset yang disewakan (Al Qur'an Surah At Taubah ayat 103, Peraturan Menteri Agama No 52/2014 dan pendapat Shaikh Yusuf Qardawi). Tidak termasuk harta pertanian, pertambangan, dan lain-lain yang diatur dalam UU No.23/2011 tentang pengelolaan zakat. Zakat maal harus sudah mencapai nishab (batas minimum) dan terbebas dari hutang serta kepemilikan telah mencapai 1 tahun (haul).</p>
                <p class="mb-10" style="text-align: justify;">Standar harga emas yg digunakan untuk 1 gram nya adalah Rp600.000,-. Sementara nishab yang digunakan adalah sebesar 85 gram emas.</p>
                <form id="" name="" class="mt-30" method="post" action="">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group mb-10">
                        <label for="">Nilai emas, perak, dan/atau permata</label>
                        <input name="" class="form-control numbersOnly" type="text"  id="emasperak" value="0" required="" placeholder="Masukkan nominal tanpa titik." aria-required="true" style="text-align: right;">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group mb-10">
                        <label for="">Uang tunai, tabungan, deposito</label>
                        <input name="" class="form-control numbersOnly" type="text" id="tabungan" value="0" required="" placeholder="Masukkan nominal tanpa titik." aria-required="true" style="text-align: right;">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group mb-10">
                        <label for="">Kendaraan, rumah, aset lain</label>
                        <input name="" class="form-control numbersOnly" type="text" id="kendaraan" value="0" required="" placeholder="Masukkan nominal tanpa titik." aria-required="true" style="text-align: right;">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group mb-10">
                        <label for="">Jumlah hutang/cicilan (optional)</label>
                        <input name="" class="form-control numbersOnly" type="text" id="hutang" value="0" required="" placeholder="Masukkan nominal tanpa titik." aria-required="true" style="text-align: right;">
                      </div>
                    </div>
                  </div>
                  <p class="mb-10" style="text-align: justify;"></p>
                  <div class="form-group mb-0 mt-20">
                    <input name="" class="form-control" type="hidden" value="">
                    <button onclick="hitungmaal(); return false;" class="btn btn-lg btn-block btn-dark btn-theme-colored" data-loading-text="Please wait...">Hitung Zakat</button>
                  </div>
                </form><hr>
                
              </div>
              <div id="valuemaal">
                <p style="text-align: center;">Jumlah zakat maal Anda:</p>
                <p class="mb-10" style="font-size: 36px; text-align: center; font-weight: bold;"><span id="jumlahmaallabel"></span>,-</p>
                <div class="row">
                  <div class="col-sm-6">
                    <p>Emas, perak, permata:</p>
                  </div>
                  <div class="col-sm-6">
                    <p style="text-align: right;"><span id="emasperaklabel"></span>,-</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <p>Tabungan dan lainnya:</p>
                  </div>
                  <div class="col-sm-6">
                    <p style="text-align: right;"><span id="tabunganlabel"></span>,-</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <p>Kendaraan dan aset lain:</p>
                  </div>
                  <div class="col-sm-6">
                    <p style="text-align: right;"><span id="kendaraanlabel"></span>,-</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <p>Hutang dan cicilan:</p>
                  </div>
                  <div class="col-sm-6">
                    <p style="text-align: right;"><span id="hutanglabel"></span>,-</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <button onclick="bayarmaal();" class="btn btn-lg btn-block btn-dark btn-theme-colored" data-loading-text="Please wait...">Bayar via QR</button>
                  </div>
                  <div class="col-sm-6"><button onclick="ulangmaal();" class="btn btn-lg btn-block btn-theme-colored" data-loading-text="Please wait...">Hitung Ulang</button>
                  </div>
                </div>
                <hr>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<script>
$( document ).ready(function() {
$('#jenis').val('zakatpenghasilan');
$('#fitrah').hide();
$('#maal').hide();
$('#penghasilan').show();
$('#valuefitrah').hide();
$('#valuepenghasilan').hide();
$('#valuemaal').hide();
$('#bawahnishabpenghasilan').hide();
$('#bawahnishabmaal').hide();
});
function getForm(){

var jenis = $('#jenis').val();
if(jenis == 'zakatfitrah'){
$('#fitrah').show();
$('#maal').hide();
$('#penghasilan').hide();
$('#valuepenghasilan').hide();
$('#valuemaal').hide();
$('#valuefitrah').hide();
}else if(jenis == 'zakatmaal'){
$('#fitrah').hide();
$('#maal').show();
$('#penghasilan').hide();
$('#valuepenghasilan').hide();
$('#valuemaal').hide();
$('#valuefitrah').hide();
}else if (jenis == 'zakatpenghasilan') {
$('#fitrah').hide();
$('#maal').hide();
$('#penghasilan').show();
$('#valuepenghasilan').hide();
$('#valuemaal').hide();
$('#valuefitrah').hide();
}
}
function hitungfitrah(){
$('#fitrah').hide();
$('#valuefitrah').show();
var jumlahjiwa = $('#jumlahjiwa').val();
// alert(jumlahjiwa);
var jumlahfitrah = parseInt(jumlahjiwa) * 40000;
$('#jumlahtanggunganlabel').empty();
$('#jumlahfitrahlabel').empty();
$('#jumlahtanggunganlabel').append('Jiwa '+formatNumber(jumlahjiwa));
$('#jumlahtanggungan').val(jumlahjiwa);
$('#jumlahfitrahlabel').append('Rp '+formatNumber(jumlahfitrah));
$('#jumlahfitrah').val(jumlahfitrah);
}
function bayarfitrah(){
var jiwa = $('#jumlahtanggungan').val();
var jumlah = $('#jumlahfitrah').val();
window.location = 'https://#/bayarzakat?jenis=fitrah&param1='+jiwa+'&param2=&param3=&param4=&jumlah='+jumlah;
}
function ulangfitrah(){
$('#fitrah').show();
$('#valuefitrah').hide();
}
function hitungpenghasilan(){
$('#penghasilan').hide();
$('#valuepenghasilan').show();
var pendapatan = $('#pendapatan').val();
var lainnya = $('#lainnya').val();
var total = Math.ceil((parseInt(pendapatan)+parseInt(lainnya))*(0.025));
// alert(total);
$('#totalpendapatanlabel').empty();
$('#pendapatanlabel').empty();
$('#lainnyalabel').empty();
$('#totalpendapatanlabel').append('Rp '+formatNumber(total));
$('#pendapatanlabel').append('Rp '+formatNumber(pendapatan));
$('#lainnyalabel').append('Rp '+formatNumber(lainnya));
}
function konfirmasipenghasilan(){
var pendapatan = $('#pendapatan').val();
var lainnya = $('#lainnya').val();
var total = Math.ceil((parseInt(pendapatan)+parseInt(lainnya))*(0.025));
window.location = 'https://api.whatsapp.com/send?phone=6285777834654&text=Assalamualaikum.%0ASaya%20%3A%0A%0AIngin%20melakukan%20konfirmasi%0AZakat%20Penghasilan%20%3A%20Rp.%20%0A'+total;
}
function ulangpenghasilan(){
$('#penghasilan').show();
$('#valuepenghasilan').hide();
}
function hitungmaal(){
$('#maal').hide();
$('#valuemaal').show();
var emasperak = $('#emasperak').val();
var tabungan = $('#tabungan').val();
var kendaraan = $('#kendaraan').val();
var hutang = $('#hutang').val();
var total = Math.ceil(((parseInt(emasperak)+parseInt(tabungan)+parseInt(kendaraan)) - parseInt(hutang))*(0.025)) ;
if(isNaN(total)){
total = 0;
}else{
if((emasperak+tabungan+kendaraan) < 51000000){
// alert("Harta Anda Belum memenuhi Nisab");
total = "Harta Anda Belum memenuhi Nisab";
}
}
$('#jumlahmaallabel').empty();
$('#emasperaklabel').empty();
$('#tabunganlabel').empty();
$('#kendaraanlabel').empty();
// $('#tabunganlabel').empty();
$('#hutanglabel').empty();
// $('#hutanglabel').append(total);
$('#jumlahmaallabel').append('Rp '+formatNumber(total));
$('#emasperaklabel').append('Rp '+formatNumber(emasperak));
$('#tabunganlabel').append('Rp '+formatNumber(tabungan));
$('#kendaraanlabel').append('Rp '+formatNumber(kendaraan));
// $('#tabunganlabel').append(tabungan);
$('#hutanglabel').append('Rp '+formatNumber(hutang));
}
function bayarmaal(){
var pendapatan = $('#pendapatan').val();
var lainnya = $('#lainnya').val();
var emasperak = $('#emasperak').val();
var tabungan = $('#tabungan').val();
var kendaraan = $('#kendaraan').val();
var hutang = $('#hutang').val();
var total = Math.ceil(((parseInt(emasperak)+parseInt(tabungan)+parseInt(kendaraan)) - parseInt(hutang))*(0.025)) ;
if(isNaN(total)){
total = 0;
}else{
if((emasperak+tabungan+kendaraan) < 51000000){
alert("Harta Anda Belum memenuhi Nisab");
// total = "Harta Anda Belum memenuhi Nisab";
}else{
window.location = 'https://#/bayarzakat?jenis=maal&param1='+emasperak+'&param2='+tabungan+'&param3='+kendaraan+'&param4='+hutang+'&jumlah='+total;
}
}

}
function ulangmaal(){
$('#maal').show();
$('#valuemaal').hide();
}
function formatNumber(num) {
return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
}
</script>
<script type="text/javascript" >
function hitungZakatProfesi(){
var pendapatanprofesi = 0.0;
// alert($('#pendapatanprofesi').val());
// alert($('#pendapatanprofesi').val() != '');
if($('#pendapatanprofesi').val() != ''){
pendapatanprofesi = parseFloat($('#pendapatanprofesi').val().replace(/\./g, ""));
}

//alert(pendapatanprofesi);
var pendapatanlainprofesi = 0.0;
if($('#pendapatanlainprofesi').val() != ''){
pendapatanlainprofesi = parseFloat($('#pendapatanlainprofesi').val().replace(/\./g, ""));
}
// alert(pendapatanprofesi+pendapatanlainprofesi+' * '+25/100);
var total = (pendapatanprofesi+pendapatanlainprofesi)*(0.025)  ;
if(isNaN(total)){
total = 0;
}
$('#hasilprofesi').val(total.toLocaleString().replace(/\,/g, "."));
}
function hitungMaalProfesi(){
var pendapatanmaal = parseFloat($('#pendapatanmaal').val().replace(/\./g, ""));
var pendapatanlainmaal = parseFloat($('#pendapatanlainmaal').val().replace(/\./g, ""));
var hutangmaal = parseFloat($('#hutangmaal').val().replace(/\./g, ""));
var total = ((pendapatanmaal+pendapatanlainmaal) - hutangmaal)*(0.025) ;
if(isNaN(total)){
total = 0;
}else{
if((pendapatanmaal+pendapatanlainmaal) < 51000000){
alert("Harta Anda Belum memenuhi Nisab");
total = 0;
}
}

$('#hasilmaal').val(total.toLocaleString().replace(/\,/g, "."));
}
function hitungSaham(){
var assetsaham = parseFloat($('#assetsaham').val().replace(/\./g, ""));
//            alert($('#assetsaham').val().replace(".", ""));
var sahamlembar = parseFloat($('#sahamlembar').val().replace(/\./g, ""));
var total = (assetsaham * (0.025))/(sahamlembar * 100) ;
if(isNaN(total)){
total = 0;
}
//alert(total);
$('#hasilsaham').val(total.toLocaleString().replace(/\,/g, "."));
}
function hitungPerdagangan(){
var asetperdagangan = parseFloat($('#asetperdagangan').val().replace(/\./g, ""));
var hutangperdagangan = parseFloat($('#hutangperdagangan').val().replace(/\./g, ""));
// alert(asetperdagangan+' '+hutangperdagangan);
var total =(asetperdagangan -  hutangperdagangan)* (0.025) ;
if(isNaN(total)){
total = 0;
}
$('#hasilperdagangan').val(total.toLocaleString().replace(/\,/g, "."));
}
$( document ).ready(function() {
$('input[data-mask]').each(function() {
var input = $(this);
input.setMask(input.data('mask'));
});
$(".tab-pane a").click(function(){
$(this).tab('show');
});
jQuery('.numbersOnly').keyup(function () {
this.value = this.value.replace(/[^0-9]/g,'');
});
});
</script>
</center>






<?php include('header.php'); ?>
<style type="text/css">

* {
-webkit-box-sizing: border-box;
box-sizing: border-box;
}
body {
padding: 0;
margin: 0;
}
#notfound {
position: relative;
height: 100vh;
}
#notfound .notfound {
position: absolute;
left: 50%;
top: 50%;
-webkit-transform: translate(-50%, -50%);
-ms-transform: translate(-50%, -50%);
transform: translate(-50%, -50%);
}
.notfound {
max-width: 520px;
width: 100%;
text-align: center;
line-height: 1.4;
}
.notfound .notfound-404 {
height: 190px;
}
.notfound .notfound-404 h1 {
font-family: 'Montserrat', sans-serif;
font-size: 146px;
font-weight: 700;
margin: 0px;
color: #232323;
}
.notfound .notfound-404 h1>span {
display: inline-block;
width: 120px;
height: 120px;
background-image: url('https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/v482batch2-ning-08-01.png?auto=&bg=transparent&con=3&cs=srgb&dpr=1&fm=png&ixlib=php-3.1.0&mark=rawpixel-watermark.png&markalpha=90&markpad=13&markscale=10&markx=25&q=75&usm=15&vib=3&w=1400&s=fbbe979907dd2c56aeb71b52939154cf');
background-size: cover;
-webkit-transform: scale(1.4);
-ms-transform: scale(1.4);
transform: scale(1.4);
z-index: -1;
}
.notfound h2 {
font-family: 'Montserrat', sans-serif;
font-size: 22px;
font-weight: 700;
margin: 0;
text-transform: uppercase;
color: #232323;
}
.notfound p {
font-family: 'Montserrat', sans-serif;
color: #787878;
font-weight: 300;
}
.notfound a {
font-family: 'Montserrat', sans-serif;
display: inline-block;
padding: 5px 12px;
font-weight: 700;
background-color: #28a745
color: #fff;
border-radius: 40px;
text-decoration: none;
-webkit-transition: 0.2s all;
transition: 0.2s all;
}
.notfound a:hover {
opacity: 0.8;
}
@media only screen and (max-width: 767px) {
.notfound .notfound-404 {
height: 115px;
}
.notfound .notfound-404 h1 {
font-size: 86px;
}
.notfound .notfound-404 h1>span {
width: 86px;
height: 86px;
}
}
</style>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <div id="notfound">
      <div class="notfound">
        <div class="notfound-404">
          <h1>4<span></span>4</h1>
        </div>
        <h2>Halaman tidak ada.</h2>
        <p>Maaf, link yang ingin tuju tidak ada, mungkin telah dihapus, berubah nama atau sedang diperbaiki. Apakah anda ingin ber <a data-toggle="modal" data-target="#largeModal">
          Ziswaf
        </a>?</p>
      </div>
    </div>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="1a59cbc064ac4feea56212a6-|49" defer=""></script></body>
  </html>
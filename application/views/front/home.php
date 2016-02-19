<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: THENEVERMORE
 * Date: 2/19/2016
 * Time: 10:08 AM
 */
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Pulsain - Isi Pulsa Online</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='//fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
    <meta property="og:site_name" content="Pulsain" />
    <meta property="og:title" content="Pulsain - Isi Pulsa Online" />
    <meta property="og:description" content="Isi Pulsa Online - Bolt - PLN - 3 - Axis - Esia - Flexi - Indosat - Smartfren - Telkomsel - XL - Murah, cepat, dan otomatis" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.pulsain.com" />
    <meta property="og:image" content="https://www.pulsain.com/img/fb-thumb.png" />
    <meta name="description" content="Isi Pulsa Online - Bolt - PLN - 3 - Axis - Esia - Flexi - Indosat - Smartfren - Telkomsel - XL - Murah, cepat, dan otomatis">
    <link rel="shortcut icon" href="//www.pulsain.com/img/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="//www.pulsain.com/img/favicon.png">
    <link href="<?=base_url()?>my-assets/modern/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>my-assets/modern/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url()?>my-assets/modern/css/x.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript">
        if (typeof jQuery == 'undefined'){
            document.write('<script src="<?=base_url()?>my-assets/modern/js/jquery.min.js"><\/script>');
        }
    </script>
    <script src="<?=base_url()?>my-assets/modern/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>my-assets/modern/js/jquery.cookie.js"></script>
    <script src="<?=base_url()?>my-assets/modern/js/j.js"></script>
    <script>
        var notifmsg = '';
        var notiftype = '';
        var mainurl = 'localhost';
        var _d = new Date();
        var timezone = _d.getTimezoneOffset() * -60;
    </script><link href="<?=base_url()?>my-assets/modern/css/my-css.css" rel="stylesheet">
</head>

<body>
<div class="info message"></div><div class="error message"></div><div class="warning message"></div><div class="success message"></div>
<nav class="navbar" id="header-menu">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand visible-xs" href="//www.pulsain.com">Pulsain</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="//www.pulsain.com"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="//www.pulsain.com/status"><i class="fa fa-shopping-cart"></i> Status</a></li>
                <li><a href="//www.pulsain.com/contact"><i class="fa fa-comment"></i> Hubungi Kami</a></li>
                <li><a href="//www.pulsain.com/faq"><i class="fa fa-question-circle"></i> FAQ</a></li>
                <li><a href="//www.pulsain.com/register"><i class="fa fa-pencil"></i> Daftar</a></li>
                <li><a href="//www.pulsain.com/login"><i class="fa fa-sign-in"></i> Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<div id="header-div">
    <div class="container">
        <a href="//www.pulsain.com">
            <img src="//www.pulsain.com/img/logo.png" id="logo" class="hidden-xs" />
        </a>
        <div id="header-title">
            <h1>Isi Pulsa Online</h1>
            <p id="motto">Isi pulsa 24 jam - Murah, cepat, dan otomatis</p>
            <img src="//www.pulsain.com/img/product.png" class="img-responsive hidden-xs" />

        </div>

    </div>
</div>
<div id="main-box-div">
    <div class="container">
        <div class="row">
            <div class="col-md-6" id="main-box">
                <form id="homeform" method="POST">
                    <input type="hidden" name="_token" id="csrf-token" value="19uCwxCqPeqxHGkTGeLmbOwkMDnpEWsTyGUFMt0O" />
                    <input type="hidden" name="p-key" value="4ShEn6vf9w7nryhFtE9bLs5hCJ8qrDp4zHzPawz7" />
                    <input type="hidden" name="p-tp" value="" id="p-tp" />
                    <div class="container-fluid">
                        <h2>Order</h2>
                        <ul class="nav nav-pills" id="main-tabs">
                            <li role="presentation" class="active" id="hp-li"><a href="javascript:void(0)" id="hp-tab-btn">Pulsa Telepon</a></li>
                            <li role="presentation" id="bolt-li"><a href="javascript:void(0)" id="bolt-tab-btn">Bolt</a></li>
                            <li role="presentation" id="pln-li"><a href="javascript:void(0)" id="pln-tab-btn">Token PLN</a></li>
                            <li role="presentation" id="game-li"><a href="javascript:void(0)" id="game-tab-btn">Voucher Game</a></li>
                        </ul>
                        <div class="row">
                            <div class="col-sm-6">

                                <div class="form-group" id="tipe-div">
                                    <label for="p-tujuan">Jenis <span class="req-red">*</span></label>
                                    <select class="form-control" id="p-tipe" name="p-tipe">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="p-value">Nominal <span class="req-red">*</span></label>
                                    <select class="form-control" id="p-value" name="p-value">
                                    </select>
                                </div>
                                <div class="form-group" id="kontak-div">
                                    <label for="p-kontak"><span id="label-contact">Nomor Kontak</span></label>
                                    <input type="text" class="form-control" id="p-kontak" name="p-kontak" placeholder="08XXXXXXXXX">
                                </div>
                                <div class="form-group">
                                    <label for="p-tujuan"><span id="label-product">Nomor Tujuan Pulsa</span> <span class="req-red">*</span></label>
                                    <input type="text" class="form-control" id="p-tujuan" name="p-tujuan" required="required">
                                </div>
                            </div>
                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Pembayaran <span class="req-red">*</span></label>
                                    <select class="form-control" id="p-bank" name="p-bank">

                                        <option value="1">BCA</option><option value="2">Mandiri</option><option value="3">BNI</option>                                </select>
                                </div>
                                <div class="form-group" id="email-div">
                                    <label for="p-email">Email</label>
                                    <input type="email" class="form-control" id="p-email" name="p-email">
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <div id="p-harga" class="harga"></div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" id="pbtn">Order</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container" id="panduan-div">
    <h3 class="underscore">Panduan Transaksi</h3>
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 panduan-box">
                    <img src="//www.pulsain.com/img/p1.png" class="pull-left" />
                    <ul>
                        <li>Isi data yang diperlukan</li>
                        <li>Harga akan ditampilkan</li>
                        <li>Klik Order</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 panduan-box">
                    <img src="//www.pulsain.com/img/p2.png" class="pull-left" />
                    <ul>
                        <li>Transfer melalui e-banking atau ATM</li>
                        <li>Dapat memakai deposit untuk anggota</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 panduan-box">
                    <img src="//www.pulsain.com/img/p3.png" class="pull-left" />
                    <ul>
                        <li>Jika berhasil, pulsa akan masuk secara otomatis</li>
                        <li>Status dapat di cek pada menu Order</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-12" id="info-box">
            <h3 class="underscore">Informasi Bank</h3>
            <div class="row">
                <div class="col-sm-4 bank-box">
                    <img src="//www.pulsain.com/img/b1.gif" alt="BCA" />
                    <div>
                        <div class="bonline">ONLINE</div>                    </div>
                    Senin - Jumat : 00.30 - 20.30 WIB<br />
                    Sabtu - Minggu : 00.30 - 18.00 WIB                </div>
                <div class="col-sm-4 bank-box">
                    <img src="//www.pulsain.com/img/b2.gif" alt="Mandiri" />
                    <div>
                        <div class="bonline">ONLINE</div>                    </div>
                    Senin - Jumat : 04.00 - 22.45 WIB<br />
                    Sabtu - Minggu : 04.00 - 22.00 WIB                </div>
                <div class="col-sm-4 bank-box">
                    <img src="//www.pulsain.com/img/b3.gif" alt="BNI" />
                    <div>
                        <div class="bonline">ONLINE</div>                    </div>
                    Senin - Minggu : 24 Jam                </div>
            </div>
        </div>
        <div class="col-md-6 hidden" id="news-box">
            <h3 class="underscore">Pengumuman</h3>
            <p id="latest-news">Web akan maintenance pada pukul 15.00 WIB tanggal <br/>6 September 2015</p>
            <p id="latest-news-time">10:am</p>
        </div>
    </div>
</div>
<div class="container-fluid" id="footer-div">

    <div class="container" id="footer">
        <div class="row">
            <div class="col-md-3">
                <h4>Pulsain</h4>
                <p>Pulsain adalah sebuah layanan pengisian pulsa, token PLN, dan voucher games dengan alternatif baru yaitu secara online, baik melalui web ataupun mobile. Nikmati pengisian pulsa kapan saja di mana saja - 24/7!</p>
                <h5>Temukan kami di</h5>
                <a href="http://www.kaskus.co.id/show_post/54a3b72832e2e667618b4567/2/testimoni---apa-kata-mereka" target="_blank">
                    <img src="//www.pulsain.com/img/kaskus.png" alt="Testimonial" width="100px" />
                </a>
            </div>
            <div class="col-md-3 hidden-xs">
                <ul class="list-unstyled">
                    <li><a href="//www.pulsain.com">Home</a></li>
                    <li><a href="//www.pulsain.com/status">Order</a></li>
                    <li><a href="//www.pulsain.com/contact">Hubungi Kami</a></li>
                    <li><a href="//www.pulsain.com/faq">FAQ</a></li>
                    <li><a href="//www.pulsain.com/register">Daftar</a></li>
                    <li><a href="//www.pulsain.com/login">Login</a></li>
                </ul>
            </div>
            <div class="col-md-3 hidden-xs">
                <ul class="list-unstyled">
                    <li><a class="change-link" href="//www.pulsain.com/bolt" title="Bolt" data-id="1">Bolt</a></li>
                    <li><a class="change-link" href="//www.pulsain.com/pln" title="Token PLN" data-id="2">Token PLN</a></li>
                    <li><a class="change-link" href="//www.pulsain.com/3" title="3 - Tri" data-id="3" data-type="3">3 - Tri</a></li>
                    <li><a class="change-link" href="//www.pulsain.com/axis" title="Axis" data-id="3" data-type="10">Axis</a></li>
                    <li><a class="change-link" href="//www.pulsain.com/esia" title="Esia" data-id="3" data-type="4">Esia</a></li>
                </ul>
            </div>
            <div class="col-md-3 hidden-xs">
                <ul class="list-unstyled">
                    <li><a class="change-link" href="//www.pulsain.com/flexi" title="Flexi" data-id="3" data-type="5">Flexi</a></li>
                    <li><a class="change-link" href="//www.pulsain.com/indosat" title="Indosat" data-id="3" data-type="6">Indosat</a></li>
                    <li><a class="change-link" href="//www.pulsain.com/smartfren" title="Smartfren" data-id="3" data-type="7">Smartfren</a></li>
                    <li><a class="change-link" href="//www.pulsain.com/telkomsel" title="Telkomsel" data-id="3" data-type="8">Telkomsel</a></li>
                    <li><a class="change-link" href="//www.pulsain.com/xl" title="XL" data-id="3" data-type="9">XL</a></li>
                </ul>
            </div>
            <div class="col-md-12">
                &copy; 2015 Pulsain
            </div>
        </div>
    </div>

</div>

<script>
    var tipelist = [{"id":"3","url":"3","value":"3 - Tri","product":"Nomor Tri","contact":"","withcontact":"0","tab":"1"},{"id":"31","url":"asiasoft","value":"Asiasoft SEA","product":"Nomor Kontak","contact":"","withcontact":"0","tab":"4"},{"id":"10","url":"axis","value":"Axis","product":"Nomor Axis","contact":"","withcontact":"0","tab":"1"},{"id":"1","url":"bolt","value":"Bolt","product":"Nomor BOLT","contact":"","withcontact":"0","tab":"2"},{"id":"28","url":"cherry","value":"Cherry Credits","product":"Nomor Kontak","contact":"","withcontact":"0","tab":"4"},{"id":"19","url":"digicash","value":"Digicash","product":"Nomor Kontak","contact":"","withcontact":"0","tab":"4"},{"id":"33","url":"egames","value":"E GamesHub","product":"Nomor Kontak","contact":"","withcontact":"0","tab":"4"},{"id":"4","url":"esia","value":"Esia","product":"Nomor Esia","contact":"","withcontact":"0","tab":"1"},{"id":"26","url":"faveo","value":"Faveo Online","product":"Nomor Kontak","contact":"","withcontact":"0","tab":"4"},{"id":"5","url":"flexi","value":"Flexi","product":"Nomor Flexi","contact":"","withcontact":"0","tab":"1"},{"id":"32","url":"funnel","value":"Funnel Asia","product":"Nomor Kontak","contact":"","withcontact":"0","tab":"4"},{"id":"21","url":"garena","value":"Garena","product":"Nomor Kontak","contact":"","withcontact":"0","tab":"4"},{"id":"11","url":"gemscool","value":"Gemscool","product":"Nomor Kontak","contact":"","withcontact":"0","tab":"4"},{"id":"16","url":"iahgames","value":"IAH Games","product":"Nomor Kontak","contact":"","withcontact":"0","tab":"4"},{"id":"6","url":"indosat","value":"Indosat","product":"Nomor Indosat","contact":"","withcontact":"0","tab":"1"},{"id":"24","url":"lyto","value":"Lyto\/Game On","product":"Nomor Kontak","contact":"","withcontact":"0","tab":"4"},{"id":"20","url":"matchmove","value":"Matchmove","product":"Nomor Kontak","contact":"","withcontact":"0","tab":"4"},{"id":"13","url":"megaxus","value":"Megaxus","product":"Nomor Kontak","contact":"","withcontact":"0","tab":"4"},{"id":"25","url":"molpoints","value":"MOLPoints","product":"Nomor Kontak","contact":"","withcontact":"0","tab":"4"},{"id":"27","url":"mycard","value":"MyCard","product":"Nomor Kontak","contact":"","withcontact":"0","tab":"4"},{"id":"23","url":"netmarble","value":"Netmarble\/CJII","product":"Nomor Kontak","contact":"","withcontact":"0","tab":"4"},{"id":"15","url":"orangegame","value":"Orangegame","product":"Nomor Kontak","contact":"","withcontact":"0","tab":"4"},{"id":"18","url":"perfectgame","value":"Perfect Game","product":"Nomor Kontak","contact":"","withcontact":"0","tab":"4"},{"id":"22","url":"qeon","value":"Qeon","product":"Nomor Kontak","contact":"","withcontact":"0","tab":"4"},{"id":"7","url":"smartfren","value":"Smartfren","product":"Nomor Smartfren","contact":"","withcontact":"0","tab":"1"},{"id":"12","url":"steam","value":"Steam Wallet","product":"Nomor Kontak","contact":"","withcontact":"0","tab":"4"},{"id":"8","url":"telkomsel","value":"Telkomsel","product":"Nomor Telkomsel","contact":"","withcontact":"0","tab":"1"},{"id":"17","url":"teragamez","value":"Teragamez","product":"Nomor Kontak","contact":"","withcontact":"0","tab":"4"},{"id":"2","url":"pln","value":"Token PLN","product":"Nomor Meter PLN","contact":"Nomor HP","withcontact":"1","tab":"3"},{"id":"30","url":"viwawa","value":"Viwawa","product":"Nomor Kontak","contact":"","withcontact":"0","tab":"4"},{"id":"14","url":"wavegame","value":"Wavegame","product":"Nomor Kontak","contact":"","withcontact":"0","tab":"4"},{"id":"29","url":"xixigames","value":"Xixigames","product":"Nomor Kontak","contact":"","withcontact":"0","tab":"4"},{"id":"9","url":"xl","value":"XL","product":"Nomor XL","contact":"","withcontact":"0","tab":"1"}];
    var nomlist = {"16":[{"id":"119","name":"10000 iCredits","value":9400,"status":"1","sn":0},{"id":"120","name":"20000 iCredits","value":18700,"status":"1","sn":0},{"id":"121","name":"50000 iCredits","value":46600,"status":"1","sn":0},{"id":"122","name":"100000 iCredits","value":93100,"status":"1","sn":0}],"17":[{"id":"123","name":"1000 Tera","value":9100,"status":"1","sn":0},{"id":"124","name":"2000 Tera","value":18100,"status":"1","sn":0},{"id":"125","name":"3000 Tera","value":27100,"status":"1","sn":0},{"id":"126","name":"5000 Tera","value":45100,"status":"1","sn":0},{"id":"127","name":"10000 Tera","value":90100,"status":"1","sn":0},{"id":"128","name":"20000 Tera","value":180100,"status":"1","sn":0},{"id":"129","name":"30000 Tera","value":270100,"status":"1","sn":0}],"3":[{"id":"213","name":"Three NETMAX 5 GB","value":49500,"status":"1","sn":1},{"id":"214","name":"Three NETMAX 8 GB","value":98500,"status":"1","sn":1},{"id":"80","name":"Rp 1.000","value":1100,"status":"1","sn":1},{"id":"77","name":"Rp 5.000","value":5200,"status":"1","sn":1},{"id":"35","name":"Rp 10.000","value":10200,"status":"1","sn":1},{"id":"36","name":"Rp 20.000","value":20000,"status":"1","sn":1},{"id":"37","name":"Rp 30.000","value":29900,"status":"1","sn":1},{"id":"38","name":"Rp 40.000","value":39900,"status":"1","sn":1},{"id":"39","name":"Rp 50.000","value":49700,"status":"1","sn":1},{"id":"40","name":"Rp 100.000","value":99000,"status":"1","sn":1}],"":[{"id":"215","name":"Rp 1.000","value":1100,"status":"0","sn":1},{"id":"216","name":"XL Data Maksima+ 3 GB (2 bulan)","value":25500,"status":"0","sn":1},{"id":"65","name":"Bagi Pulsa - Rp 25.000","value":23500,"status":"0","sn":0},{"id":"16","name":"Rp 12.000","value":12450,"status":"0","sn":0},{"id":"66","name":"Bagi Pulsa - Rp 100.000","value":92000,"status":"0","sn":0},{"id":"67","name":"Bagi Pulsa - Rp 200.000","value":184000,"status":"0","sn":0},{"id":"21","name":"Rp 25.000","value":24100,"status":"0","sn":1},{"id":"68","name":"Indosat Transfer Pulsa - Rp 25.000","value":23000,"status":"0","sn":0},{"id":"23","name":"Rp 75.000","value":74000,"status":"0","sn":1},{"id":"64","name":"Rp 20.000","value":20900,"status":"1","sn":1},{"id":"69","name":"Indosat Transfer Pulsa - Rp 50.000","value":43000,"status":"0","sn":0},{"id":"25","name":"Rp 150.000","value":149000,"status":"0","sn":1},{"id":"41","name":"Rp 200.000","value":170000,"status":"0","sn":1},{"id":"46","name":"Rp 200.000","value":199000,"status":"0","sn":1},{"id":"70","name":"Indosat Transfer Pulsa - Rp 100.000","value":83000,"status":"0","sn":0},{"id":"27","name":"Rp 250.000","value":249000,"status":"0","sn":1},{"id":"56","name":"Hotrod - 2,1GB","value":26800,"status":"0","sn":0},{"id":"57","name":"Hotrod - 3GB","value":51800,"status":"0","sn":0},{"id":"58","name":"Hotrod - 5,1GB","value":100800,"status":"0","sn":0},{"id":"82","name":"Transfer Pulsa - Rp 50.000","value":46500,"status":"0","sn":0},{"id":"81","name":"Transfer Pulsa - Rp 25.000","value":23500,"status":"0","sn":0},{"id":"85","name":"Transfer Pulsa - Rp 20.000","value":19800,"status":"0","sn":1},{"id":"83","name":"Transfer Pulsa - Rp 100.000","value":91000,"status":"0","sn":0},{"id":"86","name":"Transfer Pulsa - Rp 25.000","value":24300,"status":"0","sn":1},{"id":"84","name":"Transfer Pulsa - Rp 200.000","value":175000,"status":"0","sn":0},{"id":"87","name":"Transfer Pulsa - Rp 50.000","value":47500,"status":"0","sn":1},{"id":"88","name":"Transfer Pulsa - Rp 100.000","value":93500,"status":"0","sn":1}],"9":[{"id":"217","name":"XL Data Hotrod 3x Kuota 4.5 GB (1 bulan)","value":42000,"status":"1","sn":1},{"id":"218","name":"XL Data Hotrod 3x Kuota 13.5 GB (1 bulan)","value":82000,"status":"1","sn":1},{"id":"78","name":"Rp 5.000","value":5550,"status":"1","sn":1},{"id":"42","name":"Rp 10.000","value":10650,"status":"1","sn":1},{"id":"43","name":"Rp 25.000","value":24900,"status":"1","sn":1},{"id":"44","name":"Rp 50.000","value":49800,"status":"1","sn":1},{"id":"45","name":"Rp 100.000","value":99500,"status":"1","sn":1}],"6":[{"id":"219","name":"FREEDOM COMBO 1+1GB(4G)","value":37000,"status":"1","sn":1},{"id":"220","name":"FREEDOM COMBO 3+3GB(4G)","value":59000,"status":"1","sn":1},{"id":"221","name":"FREEDOM COMBO 5+5GB(4G)","value":82000,"status":"1","sn":1},{"id":"222","name":"FREEDOM COMBO 10+10GB(4G)","value":103000,"status":"1","sn":1},{"id":"208","name":"Indosat add-on 1 GB","value":27000,"status":"1","sn":1},{"id":"209","name":"Indosat add-on 2 GB","value":40000,"status":"1","sn":1},{"id":"210","name":"Indosat add-on 5 GB","value":78500,"status":"1","sn":1},{"id":"211","name":"Indosat Super Internet 4.5 GB","value":42000,"status":"1","sn":1},{"id":"212","name":"Indosat Super Internet 9.5 GB","value":72000,"status":"1","sn":1},{"id":"73","name":"Rp 5.000","value":5900,"status":"1","sn":1},{"id":"15","name":"Rp 10.000","value":10850,"status":"1","sn":1},{"id":"17","name":"Rp 25.000","value":24900,"status":"1","sn":1},{"id":"18","name":"Rp 50.000","value":49650,"status":"1","sn":1},{"id":"19","name":"Rp 100.000","value":99000,"status":"1","sn":1}],"1":[{"id":"1","name":"Rp 25.000","value":24550,"status":"1","sn":1},{"id":"2","name":"Rp 50.000","value":49000,"status":"1","sn":1},{"id":"3","name":"Rp 100.000","value":97000,"status":"1","sn":1},{"id":"4","name":"Rp 150.000","value":145500,"status":"1","sn":1},{"id":"5","name":"Rp 200.000","value":193900,"status":"1","sn":1}],"2":[{"id":"20","name":"Rp 20.000","value":20500,"status":"1","sn":1},{"id":"22","name":"Rp 50.000","value":50500,"status":"1","sn":1},{"id":"24","name":"Rp 100.000","value":100500,"status":"1","sn":1},{"id":"26","name":"Rp 200.000","value":200500,"status":"1","sn":1},{"id":"28","name":"Rp 500.000","value":500500,"status":"1","sn":1},{"id":"29","name":"Rp 1.000.000","value":1000500,"status":"1","sn":1}],"5":[{"id":"72","name":"Rp 5.000","value":5250,"status":"0","sn":1},{"id":"10","name":"Rp 10.000","value":10500,"status":"0","sn":1},{"id":"11","name":"Rp 20.000","value":20000,"status":"0","sn":1},{"id":"12","name":"Rp 50.000","value":49700,"status":"0","sn":1},{"id":"13","name":"Rp 100.000","value":98000,"status":"0","sn":1},{"id":"14","name":"Rp 150.000","value":147800,"status":"0","sn":1}],"10":[{"id":"74","name":"Rp 5.000","value":5550,"status":"1","sn":1},{"id":"52","name":"Rp 10.000","value":10650,"status":"1","sn":1},{"id":"53","name":"Rp 25.000","value":24900,"status":"1","sn":1},{"id":"54","name":"Rp 50.000","value":49800,"status":"1","sn":1},{"id":"55","name":"Rp 100.000","value":99500,"status":"1","sn":1}],"8":[{"id":"75","name":"Rp 5.000","value":5850,"status":"1","sn":1},{"id":"30","name":"Rp 10.000","value":10650,"status":"1","sn":1},{"id":"31","name":"Rp 20.000","value":20500,"status":"1","sn":1},{"id":"32","name":"Rp 25.000","value":25000,"status":"1","sn":1},{"id":"33","name":"Rp 50.000","value":49500,"status":"1","sn":1},{"id":"34","name":"Rp 100.000","value":96500,"status":"1","sn":1},{"id":"76","name":"Simpati Data - 20 MB","value":5600,"status":"1","sn":1},{"id":"59","name":"Simpati Data - 50 MB","value":11000,"status":"1","sn":1},{"id":"60","name":"Simpati Data - 200 MB","value":21000,"status":"1","sn":1},{"id":"61","name":"Simpati Data - 300 MB","value":26100,"status":"1","sn":1},{"id":"62","name":"Simpati Data - 800 MB","value":50000,"status":"1","sn":1},{"id":"63","name":"Simpati Data - 2.5 GB","value":98500,"status":"1","sn":1}],"7":[{"id":"79","name":"Rp 5.000","value":5100,"status":"1","sn":1},{"id":"47","name":"Rp 10.000","value":10000,"status":"1","sn":1},{"id":"48","name":"Rp 20.000","value":20000,"status":"1","sn":1},{"id":"49","name":"Rp 25.000","value":25000,"status":"1","sn":1},{"id":"50","name":"Rp 50.000","value":49900,"status":"1","sn":1},{"id":"51","name":"Rp 100.000","value":99700,"status":"1","sn":1}],"11":[{"id":"89","name":"1.000 G-Cash","value":9700,"status":"1","sn":0},{"id":"90","name":"2.000 G-Cash","value":19500,"status":"1","sn":0},{"id":"91","name":"3.000 G-Cash","value":29300,"status":"1","sn":0},{"id":"92","name":"5.000 G-Cash","value":48500,"status":"1","sn":0},{"id":"93","name":"10.000 G-Cash","value":97000,"status":"1","sn":0},{"id":"94","name":"20.000 G-Cash","value":193000,"status":"1","sn":0},{"id":"95","name":"30.000 G-Cash","value":290000,"status":"1","sn":0}],"12":[{"id":"96","name":"Rp 12.000","value":15500,"status":"1","sn":0},{"id":"97","name":"Rp 45.000","value":55500,"status":"1","sn":0},{"id":"98","name":"Rp 60.000","value":73500,"status":"1","sn":0},{"id":"99","name":"Rp 90.000","value":111000,"status":"1","sn":0},{"id":"100","name":"Rp 120.000","value":147000,"status":"1","sn":0},{"id":"101","name":"Rp 250.000","value":305000,"status":"1","sn":0},{"id":"102","name":"Rp 400.000","value":488000,"status":"1","sn":0},{"id":"103","name":"Rp 600.000","value":730000,"status":"1","sn":0}],"13":[{"id":"104","name":"10000 MI Cash","value":9200,"status":"1","sn":0},{"id":"105","name":"20000 MI Cash","value":18300,"status":"1","sn":0},{"id":"106","name":"50000 MI Cash","value":46000,"status":"1","sn":0},{"id":"107","name":"100000 MI Cash","value":92000,"status":"1","sn":0},{"id":"108","name":"210000 MI Cash","value":185000,"status":"1","sn":0},{"id":"109","name":"550000 MI Cash","value":460000,"status":"1","sn":0}],"14":[{"id":"110","name":"Wavegame - 40 Coin","value":9900,"status":"1","sn":0},{"id":"111","name":"Wavegame - 82 Coin","value":19700,"status":"1","sn":0},{"id":"112","name":"210 Coin","value":49100,"status":"1","sn":0},{"id":"113","name":"435 Coin","value":98100,"status":"1","sn":0},{"id":"114","name":"1088 Coin","value":245100,"status":"1","sn":0}],"15":[{"id":"115","name":"1000 O-Cash","value":9300,"status":"1","sn":0},{"id":"116","name":"3000 O-Cash","value":27700,"status":"1","sn":0},{"id":"117","name":"5000 O-Cash","value":46100,"status":"1","sn":0},{"id":"118","name":"10000 O-Cash","value":92100,"status":"1","sn":0}],"18":[{"id":"130","name":"V10","value":9600,"status":"1","sn":0},{"id":"131","name":"V20","value":19100,"status":"1","sn":0},{"id":"132","name":"V50","value":47600,"status":"1","sn":0},{"id":"133","name":"V100","value":95100,"status":"1","sn":0},{"id":"134","name":"V250","value":237600,"status":"1","sn":0}],"19":[{"id":"135","name":"V10","value":9600,"status":"1","sn":0},{"id":"136","name":"V20","value":19100,"status":"1","sn":0},{"id":"137","name":"V50","value":47600,"status":"1","sn":0},{"id":"138","name":"V100","value":95100,"status":"1","sn":0},{"id":"139","name":"V250","value":237600,"status":"1","sn":0}],"20":[{"id":"140","name":"50 Mcash","value":4600,"status":"1","sn":0},{"id":"141","name":"100 Mcash","value":9100,"status":"1","sn":0},{"id":"142","name":"250 Mcash","value":22600,"status":"1","sn":0},{"id":"143","name":"490 Mcash","value":45100,"status":"1","sn":0},{"id":"144","name":"980 Mcash","value":90100,"status":"1","sn":0},{"id":"145","name":"1160 Mcash","value":180100,"status":"1","sn":0}],"21":[{"id":"146","name":"33 Garena Shells","value":9400,"status":"1","sn":0},{"id":"147","name":"66 Garena Shells","value":18900,"status":"1","sn":0},{"id":"148","name":"165 Garena Shells","value":47000,"status":"1","sn":0},{"id":"149","name":"330 Garena Shells","value":94000,"status":"1","sn":0}],"22":[{"id":"150","name":"2300 Qash","value":9100,"status":"1","sn":0},{"id":"151","name":"6900 Qash","value":27100,"status":"1","sn":0},{"id":"152","name":"11500 Qash","value":45100,"status":"1","sn":0},{"id":"153","name":"23000 Qash","value":90100,"status":"1","sn":0},{"id":"154","name":"69000 Qash","value":270100,"status":"1","sn":0},{"id":"155","name":"115000 Qash","value":450100,"status":"1","sn":0},{"id":"156","name":"230000 Qash","value":900100,"status":"1","sn":0}],"23":[{"id":"157","name":"1000 NC","value":9300,"status":"1","sn":0},{"id":"158","name":"2000 NC","value":18500,"status":"1","sn":0},{"id":"159","name":"5000 NC","value":46200,"status":"1","sn":0},{"id":"160","name":"10000 NC","value":92300,"status":"1","sn":0},{"id":"161","name":"20000 NC","value":184200,"status":"1","sn":0}],"24":[{"id":"162","name":"2500 Koin","value":9600,"status":"1","sn":0},{"id":"163","name":"5500 Koin","value":19100,"status":"1","sn":0},{"id":"164","name":"20000 Koin","value":62600,"status":"1","sn":0},{"id":"165","name":"57000 Koin","value":166350,"status":"1","sn":0},{"id":"166","name":"163000 Koin","value":475100,"status":"1","sn":0}],"25":[{"id":"167","name":"200 MOLPoints","value":19900,"status":"1","sn":0},{"id":"168","name":"500 MOLPoints","value":49600,"status":"1","sn":0},{"id":"169","name":"1000 MOLPoints","value":99200,"status":"1","sn":0},{"id":"170","name":"2000 MOLPoints","value":198200,"status":"1","sn":0},{"id":"171","name":"5000 MOLPoints","value":495300,"status":"1","sn":0}],"26":[{"id":"172","name":"50000 Faveo Cash","value":47600,"status":"1","sn":0},{"id":"173","name":"100000 Faveo Cash","value":95100,"status":"1","sn":0},{"id":"174","name":"250000 Faveo Cash","value":237600,"status":"1","sn":0},{"id":"175","name":"500000 Faveo Cash","value":475100,"status":"1","sn":0},{"id":"176","name":"1000000 Faveo Cash","value":950100,"status":"1","sn":0},{"id":"177","name":"2000000 Faveo Cash","value":1900100,"status":"1","sn":0}],"27":[{"id":"178","name":"50pts","value":22400,"status":"1","sn":0},{"id":"179","name":"150pts","value":66100,"status":"1","sn":0},{"id":"180","name":"350pts","value":147800,"status":"1","sn":0},{"id":"181","name":"450pts","value":190900,"status":"1","sn":0},{"id":"182","name":"1000pts","value":419900,"status":"1","sn":0}],"28":[{"id":"183","name":"5000 CC","value":48100,"status":"1","sn":0},{"id":"184","name":"10000 CC","value":95600,"status":"1","sn":0},{"id":"185","name":"30000 CC","value":286100,"status":"1","sn":0}],"29":[{"id":"186","name":"50 Points","value":21100,"status":"1","sn":0},{"id":"187","name":"100 Points","value":41600,"status":"1","sn":0},{"id":"188","name":"200 Points","value":82600,"status":"1","sn":0},{"id":"189","name":"500 Points","value":205600,"status":"1","sn":0},{"id":"190","name":"1000 Points","value":411100,"status":"1","sn":0},{"id":"191","name":"2000 Points","value":822100,"status":"1","sn":0},{"id":"192","name":"3000 Points","value":1212100,"status":"1","sn":0}],"30":[{"id":"193","name":"100","value":9600,"status":"1","sn":0},{"id":"194","name":"250","value":18600,"status":"1","sn":0},{"id":"195","name":"500","value":46600,"status":"1","sn":0},{"id":"196","name":"1000","value":92600,"status":"1","sn":0},{"id":"197","name":"2000","value":184600,"status":"1","sn":0}],"31":[{"id":"198","name":"5000 @Cash","value":54000,"status":"1","sn":0},{"id":"199","name":"10000 @Cash","value":106500,"status":"1","sn":0},{"id":"200","name":"30000 @Cash","value":320000,"status":"1","sn":0}],"32":[{"id":"201","name":"300 Funnel","value":39100,"status":"1","sn":0},{"id":"202","name":"1000 Funnel","value":123600,"status":"1","sn":0},{"id":"203","name":"2000 Funnel","value":247100,"status":"1","sn":0},{"id":"204","name":"5000 Funnel","value":617100,"status":"1","sn":0}],"33":[{"id":"205","name":"500 Points","value":21100,"status":"1","sn":0},{"id":"206","name":"2000 Points","value":82600,"status":"1","sn":0},{"id":"207","name":"5000 Points","value":205600,"status":"1","sn":0}],"4":[{"id":"71","name":"Rp 5.000","value":4200,"status":"1","sn":1},{"id":"6","name":"Rp 10.000","value":8300,"status":"1","sn":1},{"id":"7","name":"Rp 25.000","value":20600,"status":"1","sn":1},{"id":"8","name":"Rp 50.000","value":41100,"status":"1","sn":1},{"id":"9","name":"Rp 100.000","value":82100,"status":"1","sn":1}]};
    var selTipe = -1;
    var bankdata = {"1":{"name":"BCA","uniquecode":19,"minimum":10000,"maximum":-1},"2":{"name":"Mandiri","uniquecode":3,"minimum":1000,"maximum":-1},"3":{"name":"BNI","uniquecode":2,"minimum":1000,"maximum":-1}};
    var defaultPage = 3;
    var defaultTab = 1;
</script>
<script src="<?=base_url()?>my-assets/modern/js/cekpulsa.js"></script>
</body>

</html>

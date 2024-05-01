<?php
include 'include/auth.php';
$usr = $_SESSION['usr'];
if (isset($_SESSION['usr']))
{

}else{
  echo '<script language="javascript">';
  echo 'alert("Anda harus login terlebih dahulu!!! ");';
  echo ' window.location.replace("../");';
  echo '</script>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="../asset/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="../asset/fontawesome-free-6.4.0/css/all.css" rel="stylesheet" id="bootstrap-css">
    <link href="../asset/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="../asset/css/style.css" rel="stylesheet">
</head>
<body>
<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">
                <img src="../asset/img/logo.png" alt="LOGO">
            </a>
        </div>

        <ul class="nav navbar-right top-nav">
            <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
                </a>
            </li>
            <li>
                <a href="#" ><i class="fa fa-fw fa-user-circle"></i> <?php echo $usr; ?></a>
            </li>        
            <li>
                <a href="../" >Logout<b class="fa fa-sign-out"></b></a>
            </li>
        </ul>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href=""><i class="fa fa-fw fa-home"></i> Dashboard</a>
                </li>
                <li>
                    <a href="View/user/"><i class="fa fa-fw fa-users"></i> User</a>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-database"></i> Data Master <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-1" class="collapse">
                        <li><a href="View/pemasok/"><i class="fa fa-angle-double-right"></i> Data Pemasok</a></li>
                        <li><a href="View/barang/"><i class="fa fa-angle-double-right"></i> Data Barang</a></li>
                        <li><a href="View/pelanggan/"><i class="fa fa-angle-double-right"></i> Data Pelanggan</a></li>
                    </ul>
                </li>
                <li>
                    <a href="View/pembelian"><i class="fa fa-fw fa-cart-plus"></i> Pembelian</a>
                </li>
                <li>
                    <a href="View/penjualan"><i class="fa fa-fw fa-cart-arrow-down"></i> Penjualan</a>
                </li>
                <li>
                    <a href="View/konversi"><i class="fa fa-fw fa-exchange"></i> Konversi</a>
                </li>
                <li>
                    <a href="View/penyesuaian"><i class="fa fa-retweet"></i> Penyesuaian</a>
                </li>
                <li>
                    <a href="View/retur"><i class="	fa fa-external-link-square"></i> Retur</a>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-book"></i> Laporan <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-2" class="collapse">
                        <li><a href="View/laporan-pembelian"><i class="fa fa-angle-double-right"></i> Laporan Pembelian</a></li>
                        <li><a href="View/laporan-penjualan"><i class="fa fa-angle-double-right"></i> Laporan Penjualan</a></li>
                        <li><a href="View/laporan-stok"><i class="fa fa-angle-double-right"></i> Laporan Stok Barang</a></li>
                        <li><a href="View/laporan-retur"><i class="fa fa-angle-double-right"></i> Laporan Retur</a></li>
                        <li><a href="View/jurnal-umum"><i class="fa fa-angle-double-right"></i> Jurnal Umum</a></li>
                        <li><a href="View/hpp"><i class="fa fa-angle-double-right"></i> HPP</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row" id="main" >
                <div class="col-sm-12 col-md-12" id="content">
                    <center>
                    <h1>SELAMAT DATANG DI SISTEM INFORMASI</h1>
                    <h1>UD.SILALAHI</h1>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script src="../asset/js/jquery.min.js"></script>
<script src="../asset/js/bootstrap.min.js"></script>
<script src="../asset/js/jquery.dataTables.js"></script>
<script src="../asset/js/dataTables.bootstrap4.min.js"></script>
<script src="../asset/js/popper.min.js"></script>
<script src="../asset/js/script.js"></script>

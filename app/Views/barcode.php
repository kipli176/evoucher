<?php //print_r($_id);?><!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/logo.png" type="image/png">
    <title>eVoucher Jasa Raharja</title>
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/icofont/icofont.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="/css/demo.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="bg-white shadow-sm p-3">
        <div class="d-flex align-items-center">
            <div class="gap-3 d-flex align-items-center">
                <a onclick="history.go(-2)"><i class="bi bi-arrow-left d-flex text-danger h2 m-0 back-page"></i></a>
                <h3 class="fw-bold m-0">QRCode</h3>
            </div>
            <div class="ms-auto gap-3 d-flex align-items-center">
                <!-- <a href="notifications.html" class="link-dark"><i class="bi bi-bell d-flex m-0 h2"></i></a> -->
                <!-- <a class="toggle osahan-toggle text-dark m-0" href="#"><i class="bi bi-list d-flex m-0 h1"></i></a> -->
            </div>
        </div>
    </div>
    <div class="my-5">
        <div class="text-center">
            <div class="mb-3 px-5"><img src="/home/qr/<?=$_id;?>" class="img-fluid px-5" alt="#"></div>
            <div class="h1 text-success mb-1">Berhasil!</div>
            <div class="fs-5">Tunjukin kode QR ini ke kasir/pelayanan di <?=$usere['nama_merchant'];?> untuk mendapatkan Voucher maupun Diskon</div>
        </div>
    </div>

    <div class="d-grid fixed-bottom gap-2 p-3">
        <!-- <a href="order-details.html" class="btn btn-outline-danger btn-lg">Order Details</a> -->
        <a href="/tutup" class="btn btn-danger btn-lg">Tutup</a>
    </div>

     

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" type="text/javascript"></script>

    <script src="/js/hc-offcanvas-nav.js" type="text/javascript"></script>
    <script src="/js/custom.js" type="text/javascript"></script>
</body>

</html>
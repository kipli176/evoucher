<?php //print_r($_id);?><!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.png" type="image/png">
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
                <a onclick="history.back()"><i class="bi bi-arrow-left d-flex text-danger h2 m-0 back-page"></i></a>
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
            <div class="fs-5">Tunjukin kode QR ini ke kasir/pelayanan di tempat yang kamu pilih.</div>
        </div>
    </div>

    <div class="d-grid fixed-bottom gap-2 p-3">
        <!-- <a href="order-details.html" class="btn btn-outline-danger btn-lg">Order Details</a> -->
        <a href="/tutup" class="btn btn-danger btn-lg">Tutup</a>
    </div>

    <nav id="main-nav">
        <ul class="second-nav">
            <li>
                <a href="edit-profile.html"
                    class="bg-danger sidebar-user d-flex align-items-center p-3 border-0 mb-0 rounded-4">
                    <img src="img/user.jpeg" class="img-fluid rounded-pill me-3 ch-50" alt="#">
                    <div class="text-white">
                        <h6 class="mb-0">Hi Your Name</h6>
                        <small>+91 12345-67890</small><br>
                        <span class="f-10 text-white-50">Version 1.32</span>
                    </div>
                </a>
            </li>
            <li><a href="index.html"><i class="bi bi-house me-2"></i> Homepage</a></li>
            <li><a href="enable-location.html"><i class="bi bi-geo-alt me-2"></i> Enable Location</a></li>
            <li><a href="location.html"><i class="bi bi-geo me-2"></i> Add Location</a></li>
            <li>
                <a href="#"><i class="bi bi-key me-2"></i> Authentication</a>
                <ul>
                    <li><a href="signup.html">Sign In/Up</a></li>
                    <li><a href="otp-verify.html">Verification</a></li>
                </ul>
            </li>
            <li><a href="coupons.html"><i class="bi bi-ticket-detailed me-2"></i> Coupons</a></li>
            <li><a href="offers.html"><i class="bi bi-percent me-2"></i> Offers</a></li>
            <li><a href="wallet.html"><i class="bi bi-wallet me-2"></i> Wallet</a></li>
            <li><a href="notification-setting.html"><i class="bi bi-bell-slash me-2"></i> Notification Setting</a></li>
            <li><a href="notifications.html"><i class="bi bi-bell me-2"></i> Notifications</a></li>
            <li><a href="setting.html"><i class="bi bi-gear me-2"></i> Setting</a></li>
            <li><a href="search-list.html"><i class="bi bi-search me-2"></i> Search List</a></li>
            <li><a href="store.html"><i class="bi bi-shop me-2"></i> Store</a></li>
            <li><a href="cart.html"><i class="bi bi-bag me-2"></i> Cart</a></li>
            <li><a href="checkout.html"><i class="bi bi-cart me-2"></i> Checkout</a></li>
            <li><a href="payment.html"><i class="bi bi-credit-card me-2"></i> Payment</a></li>
            <li><a href="add-card.html"><i class="bi bi-credit-card-2-front me-2"></i> Add Card</a></li>
            <li><a href="personal-info.html"><i class="bi bi-person me-2"></i> Personal Info</a></li>
            <li><a href="edit-profile.html"><i class="bi bi-pencil me-2"></i> Edit Profile</a></li>
            <li><a href="my-address.html"><i class="bi bi-map me-2"></i> My Address</a></li>
            <li><a href="your-order.html"><i class="bi bi-view-list me-2"></i> Your Order</a></li>
            <li><a href="order-confirm.html"><i class="bi bi-bag-check me-2"></i> Order Confirm</a></li>
            <li><a href="order-details.html"><i class="bi bi-list-nested me-2"></i> Order Details</a></li>
            <li><a href="support.html"><i class="bi bi-question-circle me-2"></i> Support</a></li>
        </ul>
        <ul class="bottom-nav">
            <li class="email">
                <a class="text-danger nav-item text-center" href="index.html" tabindex="0">
                    <p class="h5 m-0"><i class="icofont-ui-home text-danger"></i></p>
                    Home
                </a>
            </li>
            <li class="github">
                <a href="offers.html" class="nav-item text-center" tabindex="0">
                    <p class="h5 m-0"><i class="icofont-sale-discount"></i></p>
                    Offer
                </a>
            </li>
            <li class="ko-fi">
                <a href="support.html" class="nav-item text-center" tabindex="0">
                    <p class="h5 m-0"><i class="icofont-support-faq"></i></p>
                    Help
                </a>
            </li>
        </ul>
    </nav>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" type="text/javascript"></script>

    <script src="/js/hc-offcanvas-nav.js" type="text/javascript"></script>
    <script src="/js/custom.js" type="text/javascript"></script>
</body>

</html>
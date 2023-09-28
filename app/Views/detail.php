<?php //print_r($nopol);?><!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/logo.png" type="image/png">
    <title>eVoucher Jasa Raharja</title>
 
    <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pace-js@latest/pace-theme-default.min.css">
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
                <h3 class="fw-bold m-0">Detail Kendaraan</h3>
            </div>
            <div class="ms-auto gap-3 d-flex align-items-center">
                <!-- <a href="notifications.html" class="link-dark"><i class="bi bi-bell d-flex m-0 h2"></i></a> -->
                <!-- <a class="toggle osahan-toggle text-dark m-0" href="#"><i class="bi bi-list d-flex m-0 h1"></i></a> -->
            </div>
        </div>
    </div>

    <div class="p-3">
        <div class="pb-4">
            <div class="h3 fw-bold">Detail Kendaraan</div>
            <div class="fs-6 text-muted">Berikut ini merupakan data kendaraan Anda.</div>
        </div>
        <div class="accordion-body">

        <div class="row align-items-center mb-2">
                <div class="col-12">
                    <div class="d-flex align-items-start gap-3">
                        <div><span
                                class="bg-success rounded-circle cw-20 ch-20 d-flex align-items-center justify-content-center small"><i
                                    class="fa-solid fa-check text-white"></i></span></div>
                        <div>
                            <h6 class="fw-bold mb-1">Nama Pemilik</h6>
                            <p><?=$nopol['pemilik'];?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-2">
                <div class="col-12">
                    <div class="d-flex align-items-start gap-3">
                        <div><span
                                class="bg-success rounded-circle cw-20 ch-20 d-flex align-items-center justify-content-center small"><i
                                    class="fa-solid fa-check text-white"></i></span></div>
                        <div>
                            <h6 class="fw-bold mb-1">Nomor Handphone</h6>
                            <p><?=$nopol['wa'];?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-2">
                <div class="col-12">
                    <div class="d-flex align-items-start gap-3">
                        <div><span
                                class="bg-success rounded-circle cw-20 ch-20 d-flex align-items-center justify-content-center small"><i
                                    class="fa-solid fa-check text-white"></i></span></div>
                        <div>
                            <h6 class="fw-bold mb-1">Nomor TNKB</h6>
                            <p><?=$nopol['tnkb'];?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-items-center mb-2">
                <div class="col-12">
                    <div class="d-flex align-items-start gap-3">
                        <div><span
                                class="bg-success rounded-circle cw-20 ch-20 d-flex align-items-center justify-content-center small"><i
                                    class="fa-solid fa-check text-white"></i></span></div>
                        <div>
                            <h6 class="fw-bold mb-1">Alamat</h6>
                            <p><?=$nopol['alamat'];?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-items-center mb-2">
                <div class="col-12">
                    <div class="d-flex align-items-start gap-3">
                        <div><span
                                class="bg-success rounded-circle cw-20 ch-20 d-flex align-items-center justify-content-center small"><i
                                    class="fa-solid fa-check text-white"></i></span></div>
                        <div>
                            <h6 class="fw-bold mb-1">Jenis Kendaraan</h6>
                            <p><?=$nopol['jenis_kendaraan'];?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-items-center mb-2">
                <div class="col-12">
                    <div class="d-flex align-items-start gap-3">
                        <div><span
                                class="bg-success rounded-circle cw-20 ch-20 d-flex align-items-center justify-content-center small"><i
                                    class="fa-solid fa-check text-white"></i></span></div>
                        <div>
                            <h6 class="fw-bold mb-1">Tahun</h6>
                            <p><?=$nopol['tahun'];?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-2">
                <div class="col-12">
                    <div class="d-flex align-items-start gap-3">
                        <div><span
                                class="bg-success rounded-circle cw-20 ch-20 d-flex align-items-center justify-content-center small"><i
                                    class="fa-solid fa-check text-white"></i></span></div>
                        <div>
                            <h6 class="fw-bold mb-1">Warna</h6>
                            <p><?=$nopol['warna'];?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-items-center mb-2">
                <div class="col-12">
                    <div class="d-flex align-items-start gap-3">
                        <div><span
                                class="bg-success rounded-circle cw-20 ch-20 d-flex align-items-center justify-content-center small"><i
                                    class="fa-solid fa-check text-white"></i></span></div>
                        <div>
                            <h6 class="fw-bold mb-1">Jatuh tempo</h6>
                            <p><?=date('d F Y',strtotime($nopol['jatuh_tempo']));?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-2">
                <div class="col-12">
                    <div class="d-flex align-items-start gap-3">
                        <div><span
                                class="<?php if($nopol['status']=='Belum Lunas'){echo 'bg-danger';}else{echo 'bg-success';}?> rounded-circle cw-20 ch-20 d-flex align-items-center justify-content-center small"><i
                                    class="fa-solid fa-check text-white"></i></span></div>
                        <div>
                            <h6 class="fw-bold mb-1">Status</h6>
                            <p><?=$nopol['status'];?></p>
                        </div>
                    </div>
                </div>
            </div>
 
 
        </div>
        <hr>
        <!-- <div>
            <div class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat perferendis explicabo
                voluptatem nihil placeat adipisci tenetur dolorum non, exercitationem enim natus sint laudantium esse
                rem nostrum dolor aliquid vero neque?</div>
            <div class="fw-bold text-muted">At Eatsome, your food is in safe hands, and your safety is our number one
                priority</div>
        </div> -->
    </div>
    <div class="bg-light p-3">
        <div>
            <div class="fw-bold text-uppercase mb-1">catatan</div>
            <div class="small text-muted">Jika data kendaraan anda diatas berbeda, silahkan menunggu 3x24jam untuk sinkronisasi data.</div>
        </div>
        <div class="d-flex align-items-center mt-3">
            <div class="d-flex align-items-center gap-2">
                <img src="/img/logo.png" alt class="img-fluid ch-30 cw-30">
                <p class="m-0">Mantap men!</p>
            </div>
            <!-- <img src="/img/hand-wash.png" alt class="img-fluid ch-30 cw-30 ms-auto"> -->
        </div>
    </div>
    <div class="pt-4 pb-5 bg-light"></div>
    <form action="/barcode" method="post">
    <div class="fixed-bottom p-3">
    <button id="lanjut" class="btn btn-danger btn-lg d-grid w-100 g-recaptcha" onclick="var e=this;setTimeout(function(){e.disabled=true;e.text='Loading…';},0);return true;" data-sitekey="6LdAjeUZAAAAAIp-wc9u3EQ2lFARIcIrlRWzl7wX" data-callback='onSubmit' data-action='submit' >Lanjutkan</button>
    </div></form>

     

    <!-- <script src="https://www.google.com/recaptcha/api.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" type="text/javascript"></script>

    <script src="/js/hc-offcanvas-nav.js" type="text/javascript"></script>
    <script src="/js/custom.js" type="text/javascript"></script>
    <script>
    <?php if($nopol['status']=='Belum Lunass'){?>
        $('#lanjut').attr('href', '#');
    <?php  }else{?>
        $('#lanjut').attr('href', '/barcode/<?=$nopol['id_merchant'];?>');
    <?php }?>
    </script>
</body>

</html>
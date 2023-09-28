<!doctype html>
<html lang="id">

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
    
    <!-- <link rel="stylesheet" href="https://askbootstrap.com/preview/eatsome/css/style.css"> -->
</head>

<body>

    <div class="bg-white sticky-top shadow-sm p-3">
        <div class="d-flex align-items-center">
            <div class="gap-3 d-flex align-items-center">
                <a onclick="history.back()"><i class="bi bi-arrow-left d-flex text-danger h2 m-0 back-page"></i></a>
                <h3 class="fw-bold m-0">Verifikasi NOPOL</h3>
            </div>
            <!-- <div class="ms-auto gap-3 d-flex align-items-center"> -->
                <!-- <a href="notifications.html" class="link-dark"><i class="bi bi-bell d-flex m-0 h2"></i></a> -->
                <!-- <a class="toggle osahan-toggle text-dark m-0" href="#"><i class="bi bi-list d-flex m-0 h1"></i></a> -->
            <!-- </div> -->
        </div>
    </div>

    <div class="text-center my-5 h5">
        <div>Silahkan masukkan nomor kendaraan dan nomor handphone Anda</div>
        <div class="fw-bold mt-2">R-1234-AA</div>
    </div>
    <form id="form" action="/verifikasi" method="post">
    <div class="text-center px-5">
        <div class="d-flex gap-3 mb-3">
            <input class="shadow-none form-control px-0 text-center" type="text" name="dp" placeholder="R" aria-label="default input example"  maxlength="1" onBlur="javascript:{this.value = this.value.toUpperCase();}">
            <input class="shadow-none form-control px-0 text-center" id="nomor" name="tg" type="text" onkeypress="return onlyNumberKey(event)" placeholder="1234" aria-label="default input example" maxlength="4" >
            <input class="shadow-none form-control px-0 text-center" type="text" name="bl" placeholder="AA" aria-label="default input example" maxlength="3" onBlur="javascript:{this.value = this.value.toUpperCase();}">
        </div>
        <div class="d-flex d-grid gap-2 mb-3">
        <input class="shadow-none form-control px-0 text-center" type="text" placeholder="Nomor HP 085xxxx" name="hp" aria-label="default input example"  maxlength="13" onkeypress="return onlyNumberKey(event)">
        <input type="hidden" name="id_merchant" value="<?=$id_merchant;?>">
            <!-- <button type="button" class="btn btn-outline-secondary w-50 btn-sm">Call me in 15</button> -->
        </div>
        <?php if (isset($errors) && !empty($errors)) {?>          
        <div>
            <h3  class="text-decoration-none link-danger"><?php 
                                foreach ($errors as $error) :
						            echo esc($error);
					            endforeach;?></h3>
        </div><?php }?> 
    </div>

    <div class="bg-white fixed-bottom p-3">
        <button id="lanjut" class="btn btn-danger btn-lg d-grid w-100 g-recaptcha" onclick="var e=this;setTimeout(function(){e.disabled=true;e.text='Loading…';},0);return true;" data-sitekey="6LdAjeUZAAAAAIp-wc9u3EQ2lFARIcIrlRWzl7wX" data-callback='onSubmit' data-action='submit' >Lanjutkan</button>
    </div>
    </form> 
    <!-- <script src="https://www.google.com/recaptcha/api.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" type="text/javascript"></script>

    <script src="/js/hc-offcanvas-nav.js" type="text/javascript"></script>
    <script src="/js/custom.js" type="text/javascript"></script>
    <script>
$('#nomor').on('keyup', function() {
    limitText(this, 4)
});
function onSubmit(token) {
     document.getElementById("form").submit();
   }
function limitText(field, maxChar){
    var ref = $(field),
        val = ref.val();
    if ( val.length >= maxChar ){
        ref.val(function() {
            console.log(val.substr(0, maxChar))
            return val.substr(0, maxChar);       
        });
    }
}
function onlyNumberKey(evt) {
             
             // Only ASCII character in that range allowed
             var ASCIICode = (evt.which) ? evt.which : evt.keyCode
             if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                 return false;
             return true;
         }
    </script>
</body>

</html>
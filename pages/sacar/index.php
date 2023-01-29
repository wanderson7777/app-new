<!------------ init includes ----------->
<?php $page_name = 'sacar'; ?>
<?php session_start(); ?>
<?php include('../../app/sql_conection.php'); ?>
<?php include('../../app/user_vars.php'); ?>
<?php include('../../app/app_vars.php'); ?>
<?php include('../../app/bootstrap.php'); ?>
<!----------- finish includes ---------->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Prêmios</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="manifest" href="/assets/img/fav/site.webmanifest">

  <!-- <meta http-equiv="refresh" content="0"> -->



 <body>

 <!-- Modal Saque -->
 <div class="modal fade" id="modal_saque" tabindex="-1" aria-labelledby="modal_saqueLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="modal_saqueLabel">Atenção! ⚠️</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	        <p style="font-weight: 300; line-height: 175% !important;" class="body_modal">Saldo insufuciente para resgatar esse item!</p>
	      </div>
	    </div>
	  </div>
	</div>

<div class="box_login">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <a href="../dashboard/"><label class="back"><i class="fa-solid fa-rotate-left"></i>  Voltar</label></a>
        </div>
        <div class="col-6">
          <label style="float: right;" class="saldo"><i class="fa-solid fa-arrow-trend-up"></i>  <?php echo number_format($user_balance,2,",",".") ?></label>
        </div>


<div class="conteiner">
    <h2 class="chakra-heading css-zfor1k">Prêmios</h2>
  <div class="box">
    <button class="btn" data-bs-toggle="modal" data-bs-target="#modal_saque">
        <div class="photo1">
            <img alt="iPhone 13" src="https://www.goimports.com.br/image/catalog/iPhone%2013/iphone-13-midnight-select-2021.png" class="chakra-image css-epvdjg" draggable="false">
        </div>
        <div class="text">
            <p class="ipn">iPhone 13</p>
            <div class="value">
                <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                <p class="chakra-text css-wjomy9">53.991</p>
            </div>
        </div>
    </button>
    <button class="btn" data-bs-toggle="modal" data-bs-target="#modal_saque">
        <div class="photo1">
            <img alt="Macbook Air M1" src="https://pngimg.com/uploads/macbook/small/macbook_PNG76.png" class="chakra-image css-epvdjg" draggable="false">
        </div>
        <div class="text">
            <p class="ipn">Macbook Air M1</p>
            <div class="value">
                <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                <p class="chakra-text css-wjomy9">75.990</p>
            </div>
        </div>
    </button>
    <button class="btn" data-bs-toggle="modal" data-bs-target="#modal_saque">
        <div class="photo1">
            <img alt="Moto" src="https://cartelcaipira.com/rs2/wp-content/uploads/2017/08/51-moto-png-image-motorcycle-png-picture-download-Copia.png" class="chakra-image css-epvdjg" draggable="false">
        </div>
        <div class="text">
            <p class="ipn">Moto</p>
            <div class="value">
                <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                <p class="chakra-text css-wjomy9">350.000</p>
            </div>
        </div>
    </button>
    <button class="btn" data-bs-toggle="modal" data-bs-target="#modal_saque">
        <div class="photo1">
            <img alt="Geladeira" src="https://electrolux.vtexassets.com/arquivos/ids/211052-800-800?v=637638815007700000&amp;width=800&amp;height=800&amp;aspect=true" class="chakra-image css-epvdjg" draggable="false">
        </div>
        <div class="text">
            <p class="ipn">Geladeira</p>
            <div class="value">
                <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                <p class="chakra-text css-wjomy9">26.961</p>
            </div>
        </div>
    </button>
    <button class="btn" data-bs-toggle="modal" data-bs-target="#modal_saque">
        <div class="photo1">
            <img alt="R$ 500,00" src="https://preview.free3d.com/img/2016/07/2188249672890451640/6y8ksm57-900.jpg" class="chakra-image css-epvdjg" draggable="false">
        </div>
        <div class="text">
            <p class="ipn">R$ 500,00</p>
            <div class="value">
                <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                <p class="chakra-text css-wjomy9">10.000</p>
            </div>
        </div>
    </button>
    <button class="btn" data-bs-toggle="modal" data-bs-target="#modal_saque">
        <div class="photo1">
            <img alt="R$ 1000,00" src="https://preview.free3d.com/img/2016/07/2188249672890451640/6y8ksm57-900.jpg" class="chakra-image css-epvdjg" draggable="false">
        </div>
        <div class="text">
            <p class="ipn">R$ 1000,00</p>
            <div class="value">
                <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                <p class="chakra-text css-wjomy9">20.000</p>
            </div>
        </div>
    </button>
    
  </div>
</div>
    </body>
</html>
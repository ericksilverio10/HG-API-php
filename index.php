<?php
  require_once 'app/config/config.php';
  require_once 'app/modules/hg-api.php';

  $hg = new HG_API(HG_API_KEY);
  $dolar = $hg -> dolar_quotation();
  $wheater = $hg -> request('weather');

  $wheater_data = $wheater['results']['description'];

  echo $wheater_data;

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Cotação Dólar</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p>Cotação Dólar</p>
            <?php if($dolar['variation'] > 0):?>
              <p>USD <span class="badge badge-pill badge-primary"><?= $dolar['buy']?></span><i class="fa fa-arrow-up" aria-hidden="true"></i><?=$dolar['variation']?></p>
            <?php else:?>
              <p>USD <span class="badge badge-pill badge-danger"><?= $dolar['buy']?></span><i class="fa fa-arrow-down" aria-hidden="true"></i><?=$dolar['variation']?></p>
            <?php endif?>
          </div>
        </div>
      </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<style>
  i{
    padding: 0 10px;
  }
</style>
<?php

require_once 'app/config/config.php';
require_once 'app/modules/hg-api.php';

$hg = new HG_API(HG_API_KEY);

$dolar = $hg->dolar_quotation();

var_dump($dolar);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cotação  Dolar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>Cotação Dólar</p>
                <p>USD <span class="badge rounded-pill bg-primary">XXX</span></p>

            </div>
        </div>
    </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
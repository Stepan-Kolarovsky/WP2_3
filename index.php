<?php 
$amount = filter_input(INPUT_POST, 'amount');
define('EUR_CZK', 27);
define('GBP_CZK', 30);
define('USD_CZK', 23);
$sub = filter_input(INPUT_POST, 'odeslat');
$switch =  filter_input(INPUT_POST, 'switch');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
if (isset($sub)) {

    switch ($switch) {
      case 'czk_eur': ?>
      <?
      $final = $amount / CZK_EUR;
      $currencyFrom = 'CZK'
      $currencyTo = 'EUR'
      ?>
    <?php
        break;

      case 'eur_czk': ?>
<?
      $final = $amount * EUR_CZK;
      $currencyFrom = 'EUR'
      $currencyTo = 'CZK'
      ?>
    <?php
        break;
        
    case 'czk_gbp': ?>
    <?
        $final = $amount * CZK_GBP;
      $currencyFrom = 'CZK'
      $currencyTo = 'GBP'
      ?>
    <?php
        break;
    
    case 'gpb_czk': ?>
    <?
      $final = $amount / GBP_CZK;
      $currencyFrom = 'GBP'
      $currencyTo = 'CZK'
      ?>
    <?php
        break;

    case 'czk_usd': ?>
     <?
      $final = $amount / CZK_USD;
      $currencyFrom = 'CZK'
      $currencyTo = 'USD'
     ?> 
    <?php
        break;
            
    default: ?>
    <?
      $final = $amount * USD_CZK;
      $currencyFrom = 'USD'
      $currencyTo = 'CZK'
      ?>
    <?php
        break;
                    }
    ?>
                    Převod peněz z <?= $amount ?> <?= $currencyFrom ?> na <?= $final ?> <?= $currencyTo ?> 
 <?
} else { ?>
    <form action="index.php" method="post">
Peníze: <input type="text" name="amount" id="amount"> <br>
        CZK to EUR: <input type="radio" name="switch" value="czk_eur" id="switch"><br>
        EUR to CZK: <input type="radio" name="switch" value="eur_czk" id="switch"><br>
        CZK to GBP: <input type="radio" name="switch" value="czk_gbp" id="switch"><br>
        GBP to CZK: <input type="radio" name="switch" value="gbp_czk" id="switch"><br>
        CZK to USD: <input type="radio" name="switch" value="czk_usd" id="switch"><br>
        USD to CZK: <input type="radio" name="switch" value="usd_czk" id="switch"><br>
        <input type="submit" value="odeslat" name="odeslat">
    </form>
<?php
} ?>

</body>
</html>
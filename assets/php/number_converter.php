<?php
// Shortens a number and attaches K, M, B, etc. accordingly
function number_shorten($number, $precision = 0, $divisors = null) {

  if (strpos($number, '|') == false) {
    // Setup default $divisors if not provided
    if (!isset($divisors)) {
      $divisors = array(
        pow(1000, 0) => '', // 1000^0 == 1
        pow(1000, 1) => 'k', // Thousand
        pow(1000, 2) => 'mln', // Million
        pow(1000, 3) => 'B', // Billion
        pow(1000, 4) => 'T', // Trillion
        pow(1000, 5) => 'Qa', // Quadrillion
        pow(1000, 6) => 'Qi', // Quintillion
      );
    }

    // Loop through each $divisor and find the
    // lowest amount that matches
    foreach ($divisors as $divisor => $shorthand) {
      if (abs($number) < ($divisor * 1000)) {
        // We found a match!
        break;
      }
    }

    // We found our match, or there were no matches.
    // Either way, use the last defined value for $divisor.
    return number_format($number / $divisor, $precision) ." ". $shorthand;
  }else{
    $numbers = explode("|", $number);
    $generatedString = "";

    foreach ($numbers as $number){
      // Setup default $divisors if not provided
      if (!isset($divisors)) {
        $divisors = array(
          pow(1000, 0) => '', // 1000^0 == 1
          pow(1000, 1) => 'k', // Thousand
          pow(1000, 2) => 'mln', // Million
          pow(1000, 3) => 'B', // Billion
          pow(1000, 4) => 'T', // Trillion
          pow(1000, 5) => 'Qa', // Quadrillion
          pow(1000, 6) => 'Qi', // Quintillion
        );
      }

      // Loop through each $divisor and find the
      // lowest amount that matches
      foreach ($divisors as $divisor => $shorthand) {
        if (abs($number) < ($divisor * 1000)) {
          // We found a match!
          break;
        }
      }

      // We found our match, or there were no matches.
      // Either way, use the last defined value for $divisor.
      $generatedString .= number_format($number / $divisor, $precision) ." ". $shorthand."  ";
    }

    $generatedString = trim($generatedString);
    $generatedString = str_replace("  ", " To ", $generatedString);
    $generatedString = "From " . $generatedString;

    return $generatedString;
  }
}

function add_currency_symbol($currency){
  $currency_symbol = "";
  if($currency == "Euro"){
    $currency_symbol = "€";
  }else if($currency == "Dollar"){
    $currency_symbol = "$";
  }else if($currency == "Canadian Dollar"){
    $currency_symbol = "C$";
  }else if($currency == "Pound"){
    $currency_symbol = "£";
  }else if($currency == "Australian Dollar"){
    $currency_symbol = "A$";
  }else if($currency == "Yen"){
    $currency_symbol = "¥";
  }else if($currency == "Swedish Krona"){
    $currency_symbol = "SEK";
  }else if($currency == "Danish Krona"){
    $currency_symbol = "DKK";
  }
  return $currency_symbol;
}

?>

<?php
// Shortens a number and attaches K, M, B, etc. accordingly
function number_shorten($number, $precision = 2, $divisors = null) {

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
    $numbers_temp = preg_split("/[\s,|]+/", $number);
    $generatedString = "";

    $numbers[0] = min($numbers_temp);
    $numbers[1] = max($numbers_temp);

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

function generateLocationTags($countries, $cities){
  $country_list = explode("|", $countries);
  $city_list = explode("|", $cities);
  $output_string = "";
  for($i = 0; $i < sizeof($country_list); $i++){
    if($country_list[$i] == "All"){
      $output_string .= "<span class='location-tag-span'>Global</span>";
    }else{
      if($city_list[$i]){
        $output_string .= "<span class='location-tag-span'>".$city_list[$i] . " - " . $country_list[$i]."</span>";
      }else{
        $output_string .= "<span class='location-tag-span'>". $country_list[$i]."</span>";
      }
    }
  }
  return $output_string;
}

function shorten_number_range($type, $min, $max, $precision = 2, $divisors = null){
  $formatted_currency = "";
  if($type == "undisclosed"){
    $formatted_currency = "Undisclosed";
  }else if($type == "fixed"){
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
      if (abs($min) < ($divisor * 1000)) {
        // We found a match!
        break;
      }
    }

    // We found our match, or there were no matches.
    // Either way, use the last defined value for $divisor.
    return number_format($min / $divisor, $precision) ." ". $shorthand;
  }else if($type == "range"){
    if($min == 0){
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
        if (abs($max) < ($divisor * 1000)) {
          // We found a match!
          break;
        }
      }

      // We found our match, or there were no matches.
      // Either way, use the last defined value for $divisor.
      return "From 0 To ".number_format($max / $divisor, $precision) ." ". $shorthand;
    }else if($max == 1000000000){
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
        if (abs($min) < ($divisor * 1000)) {
          // We found a match!
          break;
        }
      }

      // We found our match, or there were no matches.
      // Either way, use the last defined value for $divisor.
      return "Above ".number_format($min / $divisor, $precision) ." ". $shorthand;
    }else{
      $generatedString = "";

      $numbers[0] = $min;
      $numbers[1] = $max;

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

}


?>

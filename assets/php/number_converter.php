<?php
function formatPipeValue($pipedValue){
  $values_array = explode(",", join(",", explode("|", $pipedValue)));
  sort($values_array);
  $output_string_1 = "";
  $output_string_2 = "";
  if($values_array[0] == "0"){
    $output_string_1 = "Less than " . number_shorten($values_array[1]);
  }else{
    $output_string_1 = "From " . number_shorten($values_array[0]);
  }
  if($values_array[sizeof($values_array) -1] == "1000000000"){
    $output_string_2 = "To More than " . number_shorten($values_array[sizeof($values_array) -2]);
  }else{
    $output_string_2 = "To " . number_shorten($values_array[sizeof($values_array) -1]);
  }
  if($values_array[0] == "0" && sizeof($values_array) == 2){
    $output_string_1 = "Less than " . number_shorten($values_array[1]);
    $output_string_2 = "";
  }
  if($values_array[sizeof($values_array) -1] == "1000000000" && sizeof($values_array) == 2){
    $output_string_1 = "";
    $output_string_2 = "More than " . number_shorten($values_array[0]);
  }
  return $output_string_1 . " " . $output_string_2;
}
// Shortens a number and attaches K, M, B, etc. accordingly
function number_shorten($number, $precision = 2, $divisors = null) {

  if (strpos($number, '|') == false) {
    // Setup default $divisors if not provided
    if (!isset($divisors)) {
      $divisors = array(
        pow(1000, 0) => '', // 1000^0 == 1
        pow(1000, 1) => 'k', // Thousand
        pow(1000, 2) => 'M', // Million
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
    if($shorthand == 'k'){
      return number_format($number, 0);
    }else{
      return floatval(number_format($number / $divisor, $precision)) . $shorthand;
    }
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
          pow(1000, 2) => 'M', // Million
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
      if($shorthand == 'k'){
        $generatedString .= number_format($number, 0)."  ";
      }else{
        $generatedString .= floatval(number_format($number / $divisor, $precision)) . $shorthand."  ";
      }
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
    $currency_symbol = "???";
  }else if($currency == "Dollar"){
    $currency_symbol = "$";
  }else if($currency == "Canadian Dollar"){
    $currency_symbol = "C$";
  }else if($currency == "Pound"){
    $currency_symbol = "??";
  }else if($currency == "Australian Dollar"){
    $currency_symbol = "A$";
  }else if($currency == "Yen"){
    $currency_symbol = "??";
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


function generateSurfaceArea($min, $max){
  $output_string = "";
  if($min === $max){
    $output_string = $min . " sqm";
  }else if($min == 0){
    $output_string = "Less than " . $max . " sqm";
  }else{
    $output_string = "From " . $min . " To " . $max . " sqm";
  }
  return $output_string;
}

function shorten_number_range($type, $min, $max, $precision = 1, $divisors = null){
  $formatted_currency = "";
  if($type == "undisclosed"){
    $formatted_currency = "Undisclosed";
  }else if($type == "fixed"){
    // Setup default $divisors if not provided
    if (!isset($divisors)) {
      $divisors = array(
        pow(1000, 0) => '', // 1000^0 == 1
        pow(1000, 1) => 'k', // Thousand
        pow(1000, 2) => 'M', // Million
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
    if($shorthand == 'k'){
      return number_format($min, 0);
    }else{
      return floatval(number_format($min / $divisor, $precision)) . $shorthand;
    }
  }else if($type == "range"){
    if($min == 0){
      // Setup default $divisors if not provided
      if (!isset($divisors)) {
        $divisors = array(
          pow(1000, 0) => '', // 1000^0 == 1
          pow(1000, 1) => 'k', // Thousand
          pow(1000, 2) => 'M', // Million
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
      if($shorthand == 'k'){
        return "Less than ".number_format($max, 0);
      }else{
        return "Less than ".floatval(number_format($max / $divisor, $precision)) . $shorthand;
      }
    }else if($max == 1000000000){
      // Setup default $divisors if not provided
      if (!isset($divisors)) {
        $divisors = array(
          pow(1000, 0) => '', // 1000^0 == 1
          pow(1000, 1) => 'k', // Thousand
          pow(1000, 2) => 'M', // Million
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
      if($shorthand == 'k'){
        return "More than ".number_format($min, 0);
      }else{
        return "More than ".floatval(number_format($min / $divisor, $precision)) . $shorthand;
      }
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
            pow(1000, 2) => 'M', // Million
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
        if($shorthand == 'k'){
          $generatedString .= number_format($number, 0)."  ";
        }else{
          $generatedString .= floatval(number_format($number / $divisor, $precision)) . $shorthand."  ";
        }
      }

      $generatedString = trim($generatedString);
      $generatedString = str_replace("  ", " To ", $generatedString);
      $generatedString = "From " . $generatedString;

      return $generatedString;
    }
  }

}


function shorten_number_range_2($type, $value, $maxRange, $value_format, $precision = 1, $divisors = null){
  if($type == "undisclosed"){
    return "Undisclosed";
  }else if($type == "fixed"){
    // Setup default $divisors if not provided
    if (!isset($divisors)) {
      $divisors = array(
        pow(1000, 0) => '', // 1000^0 == 1
        pow(1000, 1) => 'k', // Thousand
        pow(1000, 2) => 'M', // Million
        pow(1000, 3) => 'B', // Billion
        pow(1000, 4) => 'T', // Trillion
        pow(1000, 5) => 'Qa', // Quadrillion
        pow(1000, 6) => 'Qi', // Quintillion
      );
    }

    // Loop through each $divisor and find the
    // lowest amount that matches
    foreach ($divisors as $divisor => $shorthand) {
      if (abs($value) < ($divisor * 1000)) {
        // We found a match!
        break;
      }
    }

    // We found our match, or there were no matches.
    // Either way, use the last defined value for $divisor.
    if($shorthand == 'k'){
      return number_format($value, 0).$value_format;
    }else{
      return floatval(number_format($value / $divisor, $precision)) . $shorthand.$value_format;
    }
  }else if($type == "range"){
    $values_array = explode(",", join(",", explode("|", $value)));
    $min = $values_array[0];
    $max = $values_array[1];
    if($min == 0){
      // Setup default $divisors if not provided
      if (!isset($divisors)) {
        $divisors = array(
          pow(1000, 0) => '', // 1000^0 == 1
          pow(1000, 1) => 'k', // Thousand
          pow(1000, 2) => 'M', // Million
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
      if($shorthand == 'k'){
        return "Less than ".number_format($max, 0).$value_format;
      }else{
        return "Less than ".floatval(number_format($max / $divisor, $precision)) . $shorthand.$value_format;
      }
    }else if($max == $maxRange){
      // Setup default $divisors if not provided
      if (!isset($divisors)) {
        $divisors = array(
          pow(1000, 0) => '', // 1000^0 == 1
          pow(1000, 1) => 'k', // Thousand
          pow(1000, 2) => 'M', // Million
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
      if($shorthand == 'k'){
        return "More than ".number_format($min, 0).$value_format;
      }else{
        return "More than ".floatval(number_format($min / $divisor, $precision)) . $shorthand.$value_format;
      }
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
            pow(1000, 2) => 'M', // Million
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
        if($shorthand == 'k'){
          $generatedString .= number_format($number, 0)."  ";
        }else{
          $generatedString .= floatval(number_format($number / $divisor, $precision)) . $shorthand."  ";
        }
      }

      $generatedString = trim($generatedString);
      $generatedString = str_replace("  ", " To ", $generatedString);
      $generatedString = "From " . $generatedString;

      return $generatedString.$value_format;
    }
  }

}


function generateCardTitle($type, $deal, $title_1, $title_2, $title3 = null){
  $type = strtolower($type);
  $generated_title = "";
  if($deal == "sell"){
    if($type == "business company" || $type == "start up"){
      if($title_1 == "Fundraising"){
        $generated_title .= $title_1 . " for a <b>" . $title_2 . ($title3 ? (", " . $title3) : "") . "</b>";
      }else if($title_1 == "Sell minority"){
        $generated_title .= $title_1 . " of a <b>" . $title_2 . ($title3 ? (", " . $title3) : "") . "</b>";
      }else if($title_1 == "Sell majority"){
        $generated_title .= $title_1 . " of a <b>" . $title_2 . ($title3 ? (", " . $title3) : "") . "</b>";
      }else if($title_1 == "Sell totality"){
        $generated_title .= $title_1 . " of a <b>" . $title_2 . ($title3 ? (", " . $title3) : "") . "</b>";
      }else if($title_1 == "IPO"){
        $generated_title .= $title_1 . " of a <b>" . $title_2 . ($title3 ? (", " . $title3) : "") . "</b>";
      }else if($title_1 == "Partnership"){
        $generated_title .= $title_1 . " for a <b>" . $title_2 . ($title3 ? (", " . $title3) : "") . "</b>";
      }else if($title_1 == "Collaboration"){
        $generated_title .= $title_1 . " for a <b>" . $title_2 . ($title3 ? (", " . $title3) : "") . "</b>";
      }else if($title_1 == "Joint venture"){
        $generated_title .= $title_1 . " for a <b>" . $title_2 . ($title3 ? (", " . $title3) : "") . "</b>";
      }else if($title_1 == "Debt Raising"){
        $generated_title .= $title_1 . " for a <b>" . $title_2 . ($title3 ? (", " . $title3) : "") . "</b>";
      }
    }else if($type == "real estate"){
      if($title_1 == "Totality Selling"){
        $generated_title .= $title_1 . " of a <b>" . $title_2 . "</b>";
      }else if($title_1 == "Looking for Co-Investors"){
        $generated_title .= $title_1 . " for a <b>" . $title_2 . "</b>";
      }else if($title_1 == "Looking for Investors"){
        $generated_title .= $title_1 . " <b>" . $title_2 . "</b>";
      }
    }else if($type == "credits"){
      $generated_title .= $title_1 . " <b>" . $title_2 . "</b>";
    }else if($type == "npe"){
      $generated_title .= $title_1 . " <b>" . $title_2 . "</b>";
    }
  }else{
    if($type == "business company" || $type == "start up"){
      if($title_1 == "Buy majority"){
        $generated_title .= $title_1 . " of a <b>" . $title_2 . ($title3 ? (", " . $title3) : "") . "</b>";
      }else if($title_1 == "Buy minority"){
        $generated_title .= $title_1 . " of a <b>" . $title_2 . ($title3 ? (", " . $title3) : "") . "</b>";
      }else if($title_1 == "Buy totality"){
        $generated_title .= $title_1 . " of a <b>" . $title_2 . ($title3 ? (", " . $title3) : "") . "</b>";
      }else if($title_1 == "Partnership"){
        $generated_title .= $title_1 . " with a <b>" . $title_2 . ($title3 ? (", " . $title3) : "") . "</b>";
      }else if($title_1 == "Collaboration"){
        $generated_title .= $title_1 . " with a <b>" . $title_2 . ($title3 ? (", " . $title3) : "") . "</b>";
      }else if($title_1 == "Joint venture"){
        $generated_title .= $title_1 . " with a <b>" . $title_2 . ($title3 ? (", " . $title3) : "") . "</b>";
      }else if($title_1 == "Lending"){
        $generated_title .= $title_1 . " of a <b>" . $title_2 . ($title3 ? (", " . $title3) : "") . "</b>";
      }
    }else if($type == "real estate"){
      $generated_title .= ucfirst($title_1) . " of a <b>" . $title_2 . "</b>";
    }else if($type == "credits"){
      $generated_title .= $title_1 . " <b>" . $title_2 . ", " . $title3 . "</b>";
    }else if($type == "npe"){
      $generated_title .= $title_1 . " <b>" . $title_2 . "</b>";
    }
  }

  return $generated_title;
}


function generateLocationTitle($who_i_am, $countries, $cities){
  $country_list = explode("|", $countries);
  $city_list = explode("|", $cities);
  $output_string = "<span class='location-card-subheading'><b>" . $who_i_am . "</b> searching in ";
  if($country_list[0] == "All"){
    $output_string .= "<b>Global</b></span>";
  }else{
    if($city_list[0]){
      $output_string .= "<b>".$city_list[0] . ", " . $country_list[0]."</b></span>";
    }else{
      $output_string .= "<b>". $country_list[0]."</b></span>";
    }
  }
  return $output_string;
}


function formatMaturity($type, $min, $max){
  $formatted_string = "";
  if($type== "undisclosed"){
    $formatted_string = "Undisclosed";
  }else{
    $formatted_string = $min . " - " . $max;
  }
  return $formatted_string;
}
?>

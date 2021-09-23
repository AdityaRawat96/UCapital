<?php
/**
 * Build a configuration array to pass to `Hybridauth\Hybridauth`
 */

 // First step is to build a configuration array to pass to `Hybridauth\Hybridauth`
 $config = [
   // Location where to redirect users once they authenticate with a provider
   'callback' => 'http://localhost/UCapital/vendor/hybridauth/hybridauth/examples/example_06/callback.php',

   // Providers specifics
   'providers' => [
     'Twitter' => [
       'enabled' => true,     // Optional: indicates whether to enable or disable Twitter adapter. Defaults to false
       'keys' => [
         'key' => '6aDMnlmww4b1bsHUPT4albHm4', // Required: your Twitter consumer key
         'secret' => '7OiAruAR5AixAPGukJUOyBoyTASygDOw3YLo8DYokn9D7cZSN9'  // Required: your Twitter consumer secret
       ]
     ],
     'Google' => ['enabled' => true, 'keys' => ['id' => '637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com', 'secret' => '9a1AO6Ca3IT0wg3SrBnT8PiY']], // To populate in a similar way to Twitter
     'LinkedIn' => ['enabled' => true, 'keys' => ['id' => '...', 'secret' => '...']], // To populate in a similar way to Twitter
     'Facebook' => ['enabled' => true, 'keys' => ['id' => '...', 'secret' => '...']]  // And so on
   ],
 ];

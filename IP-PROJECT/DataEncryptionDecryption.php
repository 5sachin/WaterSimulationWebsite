<?php 
  function encrypt_decrypt($action,$string)
  {
      $ciphering = "AES-128-CTR";
      $iv_length = openssl_cipher_iv_length($ciphering); 
      $options = 0;
      $encryption_iv = '1234567891011121'; 
      $encryption_key = "GeeksforGeeks";

      if($action == "encrypt")
      {
          $encryption = openssl_encrypt($string, $ciphering, $encryption_key, $options, $encryption_iv);
          $output = $encryption;
      }
      else if($action == "decrypt")
      {
          $decryption=openssl_decrypt($string, $ciphering, $encryption_key, $options, $encryption_iv);
          $output = $decryption;
      }
      else
      {
        $output = "Some Error Occured";
      }
      return $output;
    }
?> 

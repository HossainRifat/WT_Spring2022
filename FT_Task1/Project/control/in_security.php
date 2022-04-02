<?php

class inde{

    private $ciphering;
    private $options;
    private $iv;
    private $key;

    function __construct()
    {
        // Store the cipher method
        $this->ciphering = "AES-128-CTR";
  
        // Use OpenSSl Encryption method
        ////$iv_length = openssl_cipher_iv_length($ciphering);
        $this->options = 0;
  
        // Non-NULL Initialization Vector for encryption
       $this->iv = '1234567891011121';
  
        // Store the encryption key
       $this->key = "HelloRifat";

    }
             

    function encryption($data){
  
        // Use openssl_encrypt() function to encrypt the data
        $encryption = openssl_encrypt($data, $this->ciphering, $this->key, $this->options, $this->iv);
  
        // Display the encrypted string
        //echo "Encrypted String: " . $encryption . "\n";
        
        return $encryption;
        
    }

    function decryption($data){
          
        // Use openssl_decrypt() function to decrypt the data
        $decryption=openssl_decrypt ($data, $this->ciphering, $this->key, $this->options, $this->iv);
  
        // Display the decrypted string
        //echo "Decrypted String: " . $decryption;
        return $decryption;
        
    }
}

//$obj = new inde();
//$obj->decryption("JCBPr/JSIojAuLIjoWrleWAs");
// $obj->encryption("rh140025@gmail.com");
?>
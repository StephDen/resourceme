<?php
//IDK HOW THIS WORKS PLEASE DONT TOUCH
// Encrypted cookie functions
// requires mcrypt: http://php.net/manual/en/book.mcrypt.
class encrypt
{
    //digitial signiture section------------------------------
    /**
     * @param $string
     * @return string
     */
    public static function signtoken($string)
    {
        // Using $salt makes it hard to guess how $checksum is generated
        // Caution: changing salt will invalidate all signed strings
        $salt = "Mysalt";
        $checksum = sha1($string . $salt); // A random hash algorithm
        // return the string with the checksum at the end
        return $string . '--' . $checksum;
    }

    /**
     * @param $signed_string
     * @return bool|string
     */
	public static function validatetoken($signed_string) {
        $array = explode('--', $signed_string);

        if(count($array) != 2) {
            // string is malformed or not signed
            return false;
        }

        // Sign the string portion again. Should create same
        // checksum and therefore the same signed string.
        $new_signed_string = encrypt::signtoken($array[0]);
        if($new_signed_string == $signed_string) {
            return true;
        } else {
            return false;
        }
    }
//----------------------------------------------------------------------
//encryption section
    public static function encrypt_string($string) {
        $output = false;
        $encrypt_method = "AES-256-CBC";
        $secret_key = 'This is my secret key';
        $secret_iv = 'This is my secret iv';
        // hash
        $key = hash('sha256', $secret_key);

        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);

        return $output;
    }

    public static function decrypt_string($string) {
        $output = false;
        $encrypt_method = "AES-256-CBC";
        $secret_key = 'This is my secret key';
        $secret_iv = 'This is my secret iv';
        // hash
        $key = hash('sha256', $secret_key);

        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        return $output;
    }


}
?>

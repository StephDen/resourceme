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
    /**
     * @param $salt
     * @param $string
     * @return string
     */
    public static function encrypt_string($string) {
        // Configuration (must match decryption)
        $cipher_type = MCRYPT_RIJNDAEL_256;
        $cipher_mode = MCRYPT_MODE_CBC;
        $salt = 'MySalt';
        // Using initialization vector adds more security
        $iv_size = mcrypt_get_iv_size($cipher_type, $cipher_mode);
        $iv =  mcrypt_create_iv($iv_size, MCRYPT_RAND);

        $encrypted_string = mcrypt_encrypt($cipher_type, $salt, $string, $cipher_mode, $iv);

        // Return initialization vector + encrypted string
        // We'll need the $iv when decoding.
        return base64_encode($iv . $encrypted_string);
    }

    /**
     * @param $salt
     * @param $iv_with_string
     * @return string
     */
    public static function decrypt_string($iv_with_string) {
        //decoding the encryption
        $iv_with_string = base64_decode($iv_with_string);
        // Configuration (must match encryption)
        $cipher_type = MCRYPT_RIJNDAEL_256;
        $cipher_mode = MCRYPT_MODE_CBC;
        $salt = 'MySalt';
        // Extract the initialization vector from the encrypted string.
        // The $iv comes before encrypted string and has fixed size.
        $iv_size = mcrypt_get_iv_size($cipher_type, $cipher_mode);
        $iv = substr($iv_with_string, 0, $iv_size);
        $encrypted_string = substr($iv_with_string, $iv_size);

        $string = mcrypt_decrypt($cipher_type, $salt, $encrypted_string, $cipher_mode, $iv);
        return $string;
    }

}
?>

<?php
//IDK HOW THIS WORKS PLEASE DONT TOUCH
// Encrypted cookie functions
// requires mcrypt: http://php.net/manual/en/book.mcrypt.
class encrypt
{
    /**
     * @param $string
     * @return string
     */
    public static function sign_string($string)
    {
        // Using $salt makes it hard to guess how $checksum is generated
        // Caution: changing salt will invalidate all signed strings
        $salt = "Simple salt";
        $checksum = sha1($string . $salt); // A random hash algorithm
        // return the string with the checksum at the end
        return $string . '--' . $checksum;
    }

    /**
     * @param $signed_string
     * @return bool|string
     */
	public static function signed_string_is_valid($signed_string) {
        $array = explode('--', $signed_string);

        if(count($array) != 2) {
            // string is malformed or not signed
            return false;
        }

        // Sign the string portion again. Should create same
        // checksum and therefore the same signed string.
        $new_signed_string = encrypt::sign_string($array[0]);
        if($new_signed_string == $signed_string) {
            return true;
        } else {
            return false;
        }
    }

    public static function decrypt_string($signed_string){

    }
}
?>

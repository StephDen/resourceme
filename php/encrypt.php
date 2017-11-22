<?php
//IDK HOW THIS WORKS PLEASE DONT TOUCH
// Encrypted cookie functions
// requires mcrypt: http://php.net/manual/en/book.mcrypt.php

function sign_string($string) {
	// Using $salt makes it hard to guess how $checksum is generated
	// Caution: changing salt will invalidate all signed strings
	$salt = "Simple salt";
	$checksum = sha1($string.$salt); // Any hash algorithm would work
	// return the string with the checksum at the end
	return encrypt_string_and_encode($salt, $string.'--'.$checksum);
}

function signed_string_is_valid($signed_string) {
	$salt = "Simple salt";
	//decrypting the string ad then exploding
	$array = explode('--', decrypt_string_and_decode($salt, $signed_string));

	if(count($array) != 2) {
		// string is malformed or not signed
		return false;
	}

	// Sign the string portion again. Should create same
	// checksum and therefore the same signed string.
	$new_signed_string = sign_string($array[0]);
	if($new_signed_string == $signed_string) {
		return true;
	} else {
		return false;
	}
}

function encrypt_string($salt, $string) {
	// Configuration (must match decryption)
	$cipher_type = MCRYPT_RIJNDAEL_256;
	$cipher_mode = MCRYPT_MODE_CBC;

	// Using initialization vector adds more security
	$iv_size = mcrypt_get_iv_size($cipher_type, $cipher_mode);
	$iv =  mcrypt_create_iv($iv_size, MCRYPT_RAND);

	$encrypted_string = mcrypt_encrypt($cipher_type, $salt, $string, $cipher_mode, $iv);

	// Return initialization vector + encrypted string
	// We'll need the $iv when decoding.
	return $iv . $encrypted_string;
}

function decrypt_string($salt, $iv_with_string) {
	// Configuration (must match encryption)
	$cipher_type = MCRYPT_RIJNDAEL_256;
	$cipher_mode = MCRYPT_MODE_CBC;

	// Extract the initialization vector from the encrypted string.
	// The $iv comes before encrypted string and has fixed size.
	$iv_size = mcrypt_get_iv_size($cipher_type, $cipher_mode);
	$iv = substr($iv_with_string, 0, $iv_size);
	$encrypted_string = substr($iv_with_string, $iv_size);

	$string = mcrypt_decrypt($cipher_type, $salt, $encrypted_string, $cipher_mode, $iv);
	return $string;
}

// Encode after encryption to ensure encrypted characters are savable
function encrypt_string_and_encode($salt, $string) {
	return base64_encode(encrypt_string($salt, $string));
}

// Decode before decryption
function decrypt_string_and_decode($salt, $string) {
	return decrypt_string($salt, base64_decode($string));
}

?>
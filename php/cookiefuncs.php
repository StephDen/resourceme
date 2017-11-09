<?php
//DO NOT TOUCH IDK WHAT THIS DOES
function setSafeCookie($name, $cookieData, $key)
{
    $nonce = \Sodium\randombytes_buf(\Sodium\CRYPTO_SECRETBOX_NONCEBYTES);

    return setcookie(
        $name,
        base64_encode(
            $nonce.
            \Sodium\crypto_secretbox(
                json_encode($cookieData),
                $nonce,
                $key
            )
        )
    );
}

function getSafeCookie($name, $key)
{
    if (!isset($_COOKIE[$name])) {
        return array();
    }

    $decoded = base64_decode($_COOKIE[$name]);
    $nonce = mb_substr($decoded, 0, \Sodium\CRYPTO_SECRETBOX_NONCEBYTES, '8bit');
    $ciphertext = mb_substr($decoded, \Sodium\CRYPTO_SECRETBOX_NONCEBYTES, null, '8bit');

    $decrypted = \Sodium\crypto_secretbox_open(
        $ciphertext,
        $nonce,
        $key
    );
    if (empty($decrypted)) {
        return array();
    }
    return json_decode($decrypted, true);
}
?>

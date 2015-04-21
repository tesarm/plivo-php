<?php
namespace plivo;

class Validator
{
    public static function validateSignature($uri, $post_params = array(), $signature, $auth_token)
    {
        ksort($post_params);
        foreach ($post_params as $key => $value) {
            $uri .= "$key$value";
        }
        $generated_signature = base64_encode(hash_hmac("sha1", $uri, $auth_token, true));
        return $generated_signature == $signature;
    }
}
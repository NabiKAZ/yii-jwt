<?php

/**
 * JSON Web Tokens (JWT) Class
 *
 * @author Nabi KaramAliZadeh <nabikaz@gmail.com>
 * @link www.nabi.ir
 * @project https://github.com/NabiKAZ/yii-jwt
 * @since 2017-03-09
 * @version 1.0
 * @license GNU General Public License v3
 * @copyright 2017 Nabi Karamalizadeh
 *
 */
class JWT
{
    public $key;

    public function init()
    {
        require dirname(__FILE__) . '/src/JWT.php';
        require dirname(__FILE__) . '/src/BeforeValidException.php';
        require dirname(__FILE__) . '/src/ExpiredException.php';
        require dirname(__FILE__) . '/src/SignatureInvalidException.php';

    }

    public function encode($payload)
    {
        return \Firebase\JWT\JWT::encode($payload, $this->key);
    }

    public function decode($msg)
    {
        return \Firebase\JWT\JWT::decode($msg, $this->key, array('HS256'));
    }
}
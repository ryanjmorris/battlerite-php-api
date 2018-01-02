<?php

namespace BattleriteAPIToken;

class BattleriteAPIToken
{
    /**
     * API Token given for the Battlerite API
     * @var string
     */
    public $token = '';

    /**
     * Static variable for the token with the API
     *
     * @var string
     */
    private static $_token;

    public static function init()
    {
        if (self::$_token === null) {
            self::$_token = new self();
        }

        return self::$_token;
    }

    public function setToken($token)
    {
        $this->token = $token;
    }

    public function getToken()
    {
        return $this->token;
    }
}
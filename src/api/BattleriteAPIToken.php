<?php

namespace BattleriteAPIToken;

class BattleriteAPIToken
{
    /**
     * API Token given for the Battlerite API
     * @var string
     */
    public $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJqdGkiOiJjZWQ4MDJjMC1iYWYwLTAxMzUtODI4NC0wYTU4NjQ2MGE3NDUiLCJpc3MiOiJnYW1lbG9ja2VyIiwiaWF0IjoxNTEyMzcxNzE5LCJwdWIiOiJzdHVubG9jay1zdHVkaW9zIiwidGl0bGUiOiJiYXR0bGVyaXRlIiwiYXBwIjoiYmFwaXJpdGUiLCJzY29wZSI6ImNvbW11bml0eSIsImxpbWl0IjoxMH0.6irEd8QFHqBXUQmi7g9BSpS5MaaJWK1Q2W4useSU944';

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
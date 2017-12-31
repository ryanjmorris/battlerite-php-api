<?php
/**
 * BattleritePHPWrapper - BattleriteAPITokenTest.php
 * Initial version author: Ryan Morris <ryanmorris1232@gmail.com>
 * @author: Ryan Morris
 * @copyright: Copyright (c) 2017
 *
 * Date: 12/24/2017.
 * Time: 9:18 PM.
 */

declare(strict_types=1);

namespace test\src\api;

use BattleriteAPIToken\BattleriteAPIToken;
use BattleriteWebApi\BattleriteWebApi;

final class BattleriteAPITokenTest extends \PHPUnit_Framework_TestCase
{
    private $token;

    public function testInit()
    {
        $this->assertEquals('hehe', 'hehe');

        return 'hehe xD';
    }

    public function testSetToken()
    {

    }

    public function testGetToken()
    {

    }

    public function testRenderReturnsHelloWorld()
    {
        /*$pages = new BattleriteAPIToken();

        $expected = $pages->setToken('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJqdGkiOiJjZWQ4MDJjMC1iYWYwLTAxMzUtODI4NC0wYTU4NjQ2MGE3NDUiLCJpc3MiOiJnYW1lbG9ja2VyIiwiaWF0IjoxNTEyMzcxNzE5LCJwdWIiOiJzdHVubG9jay1zdHVkaW9zIiwidGl0bGUiOiJiYXR0bGVyaXRlIiwiYXBwIjoiYmFwaXJpdGUiLCJzY29wZSI6ImNvbW11bml0eSIsImxpbWl0IjoxMH0.6irEd8QFHqBXUQmi7g9BSpS5MaaJWK1Q2W4useSU944');

        $this->assertEquals($expected, BattleriteAPIToken::init());*/
    }
}

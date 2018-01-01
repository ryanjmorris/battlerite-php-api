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

        $expected = $pages->setToken('abc');

        $this->assertEquals($expected, BattleriteAPIToken::init());*/
    }
}

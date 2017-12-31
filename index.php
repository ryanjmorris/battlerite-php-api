<?php

require_once('vendor/autoload.php');
require_once('src/api/BattleriteWebApi.php');
require_once('src/api/BattleriteAPIToken.php');

use BattleriteWebApi\BattleriteWebApi;
use BattleriteAPIToken\BattleriteAPIToken;

/*$webToken = BattleriteAPIToken::init();*/ // Singleton pattern has our API key already.
/*$webToken->setToken('set token.');*/ // If you want to set a key manually.
/*var_dump($webToken);*/

$webAPI = new BattleriteWebApi(BattleriteAPIToken::init());

$webAPI->getFullStatus();
/*echo $webAPI->getReleasedAt();
echo "<br/> <br/> " . $webAPI->getVersion();*/

/*echo "<br/> <br/> " . $webAPI->getRandomMatch('');*/
$webAPI->getPlayerByName(['ryanmorris']);

echo "<br/> <br/>";

/*$webAPI->getPlayer('931740539043360768');
echo "<br/> <br/>";
$webAPI->getMatch('931740539043360768');*/

?>

<html>
<head>
    <title>Battlerite PHP API Wrapper</title>
</head>

<body>
    <header>

    </header>

    <main>
        <h1>
            Status
        </h1>

        <h2>
            Time
        </h2>

        <p><?= date('F d, Y', strtotime($webAPI->getReleasedAt())); ?></p>

        <h2>Version</h2>

        <p><?= $webAPI->getVersion(); ?></p>
    </main>

    <footer>

    </footer>
</body>
</html>
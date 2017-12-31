<?php

namespace BattleriteWebApi;

class BattleriteWebApi
{
    /**
     * Battlerites API key. Generally is set from the BattleriteAPIToken class.
     *
     * @var string
     */
    private $apiKey;

    /**
     * cURL initializer
     *
     * @var string
     */
    private $ch;

    /**
     * cURL data output that generally is in json_decode format.
     *
     * @var string
     */
    private $data;

    private $releasedAt;

    private $version;

    /**
     * BattleriteWebApi constructor.
     * @param $apiKey
     */
    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @return mixed|string
     */
    public function getFullStatus()
    {
        $this->getAPIData($this->apiKey->token, "https://api.dc01.gamelockerapp.com/status");
        $this->setReleasedAt($this->data->data->attributes->releasedAt);
        $this->setVersion($this->data->data->attributes->version);

        var_dump($this->data);

        return $this->data;
    }

    /**
     * @param $releasedAt
     */
    private function setReleasedAt($releasedAt)
    {
        $this->releasedAt = $releasedAt;
    }

    /**
     * @return mixed
     */
    public function getReleasedAt()
    {
        return $this->releasedAt;
    }

    /**
     * @param $version
     */
    private function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param $playerID
     * @return mixed|string
     */
    public function getPlayer($playerID)
    {
        $this->getAPIData($this->apiKey->token, "https://api.dc01.gamelockerapp.com/shards/global/players/{$playerID}");

        var_dump($this->data);

        return $this->data;
    }

    /**
     * @param $playerID
     * @return mixed|string
     */
    public function getMatch($playerID)
    {
        $this->getAPIData($this->apiKey->token, "https://api.dc01.gamelockerapp.com/shards/global/matches?filter[playerIds]={$playerID}");

        var_dump($this->data);

        return $this->data;
    }

    /**
     * @param array $playerName
     * @return string
     */
    public function getPlayerByName($playerName = [])
    {
        $player = '';

        foreach ($playerName as $players) {
            $player .= $players . ',';
        }

        $this->getAPIData($this->apiKey->token, "https://api.dc01.gamelockerapp.com/shards/global/players?filter[playerNames]={$player}");

        var_dump($this->data);

        return $this->data;
    }

    /**
     * If you've got a matchID in specific, then that can be set and grabbed. Otherwise, it chooses a random
     * matchID and gives the information based on that.
     *
     * @param $matchID
     * @return string
     */
    public function getRandomMatch($matchID)
    {
        $this->getAPIData($this->apiKey->token, "https://api.dc01.gamelockerapp.com/shards/global/matches/{$matchID}");

        var_dump($this->data);

        return $this->data;
    }

    /**
     * Typical structure for grabbing the API data directly.
     * Submit the API key, and the URL from http://battlerite-docs.readthedocs.io/en/master/introduction.html list
     * of options to choose from. Any additional API calls can then be created as a method to then input the
     * URL to grab the API data.
     *
     * @param $apiKey
     * @param $URL
     * @return mixed|string
     */
    public function getAPIData($apiKey, $URL)
    {
        $cURL = curl_init($URL);

        curl_setopt($cURL, CURLOPT_HTTPHEADER, ["Authorization: Bearer {$apiKey}", "Accept: application/vnd.api+json"]);
        curl_setopt($cURL, CURLOPT_TIMEOUT, 5);
        curl_setopt($cURL, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($cURL, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($cURL, CURLOPT_RETURNTRANSFER, TRUE);

        $this->data = curl_exec($cURL);
        $this->data = json_decode($this->data);

        curl_close($cURL);

        if ($this->data) {
            return $this->data;
        } else {
            return 'No API data was returned. Make sure your API key is correct.';
        }
    }
}
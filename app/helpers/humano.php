<?php
class HumanRobot
{
    private $publicKey = "6LdQipsUAAAAAAeBMkLqvcJgiATBo-k8q_rxrKZd";
    private $secretKey = "6LdQipsUAAAAAFnlNdepXm89ls7YShEGWvzSW4CV";
    private $url = "https://www.google.com/recaptcha/api/siteverify";

    public function getPublicKey()
    {
        return $this->publicKey;
    }
    public function getSecretKey()
    {
        return $this->secretKey;
    }
    public function getUrl()
    {
        return $this->url;
    }
    public function responseRecaptcha($response_key)
    {
        $response = file_get_contents($this->getUrl() . "?secret=" . $this->getSecretKey() . "&response=" . $response_key . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
        $response = json_decode($response);
        return $response->success;
    }
}
?>
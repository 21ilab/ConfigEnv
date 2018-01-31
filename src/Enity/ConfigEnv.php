<?php
/**
 * Created by Afroze.S.
 * Date: 31/1/18
 * Time: 5:10 PM
 */

namespace ConfigEnv\Entity;


class ConfigEnv
{
    private $config;

    public function __construct()
    {
        $file = __DIR__.'/../etc/ConfigEnv.php';

        $this->config = (file_exists($file)) ? require $file : [];
    }

    public function getEnv($key) {
        return isset($this->config[$key]) ? $this->config[$key] : false;
    }
}
<?php
/**
 * Created by Afroze.S.
 * Date: 31/1/18
 * Time: 5:10 PM
 */

namespace MagentoEnv\Entity;


class ConfigEnv
{
    private $config;

    public function __construct()
    {
        $file = __DIR__.'/../../../app/etc/ConfigEnv.php';

        $this->config = (file_exists($file)) ? require $file : array();
    }

    public function getEnv($key) {
        return isset($this->config[$key]) ? $this->config[$key] : false;
    }
}
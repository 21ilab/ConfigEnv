Configuration Environment Variables
===

Installation
* Add below block in your repositories section
```
{
    "type":"vcs",
    "url":"https://github.com/ahmed-oz/ConfigEnv.git"
}
```
* Add below line in your composer json
```"ahmed-oz/config-env": "*"```
* Or simple run below command
```composer require ahmed-oz/config-env```

* Run ```composer update```
* You might be asked to create github token, create one and update on terminal where it asks

This should be used as composer packages, and its implemented project should have a php file  ```etc/ConfigEnv.php``` in its root directory with below array format

```
<?
return [
    "var1" => "var 1 value",
    "var2" => "var 2 value"
];
```

Usage
---
After having setup config file as mentioned above follow below code to get environment variable

```
use MagentoEnv\Entity\ConfigEnv;
//Remember to use/import the Vendor class to havev its visility

$config = new ConfigEnv();
$var1 = $config->getEnv('var1'); //as mentioned in etc/ConfigEnv.php array file

echo $var1; //This should be "var 1 value" as configured in etc/ConfigEnv.php array file
```


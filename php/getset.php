#!/usr/bin/php
<?php
class Singleton {
    private static $props = array();
    public function __construct() {}
    public function __get($name)
    {
        if(array_key_exists($name, self::$props)) {
            return self::$props[$name];
        }
    }
    public function __set($name, $value)
    {
        self::$props[$name] = $value;
    }
}
$a = new Singleton;
$b = new Singleton;
$a->property = "hello world";
print $b->property . PHP_EOL;
exit(0);
?>

<?php
$user = array(
    'first_name' => 'PHP',
    'last_name' => 'Mongo',
);

$dbhost = 'localhost';
$dbname = 'test';

$m = new Mongo("mongodb://$dbhost");
$db = $m->$dbname;

$c_users = $db->users;

$user = $c_users->findOne($user);
var_dump($user);

?>

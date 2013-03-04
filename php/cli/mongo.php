<?php
$user = array(
    'first_name' => 'PHP',
    'last_name' => 'Mongo',
    'tags' => array('dev', 'user')
);

$dbhost = 'localhost';
$dbname = 'test';

$m = new Mongo("mongodb://$dbhost");
$db = $m->$dbname;

$c_users = $db->users;

$c_users->save($user);

?>

--TEST-- 
--FILE--
<?php
include 'return.php'; //this test checks if api returns json
$city = 'moscow';
var_dump($data->name);
?>
--EXPECT--
string(6) "moscow"
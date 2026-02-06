<?php
$count = file_get_contents('count.txt');
$result=($count .'!');
file_put_contents('count.txt' , $result );
echo $result
?>
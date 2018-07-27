<?php
$i=$_GET['nom'];
$b=json_encode($i);
file_put_contents('../data/last_message.json',$b);
?>
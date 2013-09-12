<?php
$data = $_POST['data'];
file_put_contents("files/targets.txt", $data);
?>
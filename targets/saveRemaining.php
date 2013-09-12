<?php
$data = $_POST['data'];
file_put_contents("files/remaining.txt", $data);
?>
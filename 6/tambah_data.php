<?php

include("koneksi.php");

$tipe = $_POST["tipe"];
if ($tipe == "skill") {
	$id = $_POST["id"];
$skill = $_POST["data"];
echo $skill.$id;
try {
	$kirim = mysqli_query($kon,"INSERT INTO skills (name,user_id) VALUES ('". $skill ."','". $id ."')");
} catch (Exception $e) {
print_r($e);
}
}

elseif ($tipe == "users") {

$user = $_POST["data"];
	try {
	$kirim = mysqli_query($kon,"INSERT INTO users(name) VALUES ('". $user ."')");
} catch (Exception $e) {
	print_r($e);
}
}



?>
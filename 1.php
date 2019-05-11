<?php

function getDataJSON($name__,$address__,$hobbies__,$is_married__,$school__,$skill__)
{
	$data = array(
		'name' => $name__,
		'address' => $address__,
		'hobbies' => $hobbies__,
		'is_married' => $is_married__,
		'school' => $school__,
		'skills' => $skill__ 
	);

	return json_encode($data);
}

$nama = "Angga Nur Prasetya";
$alamat = "Banjarnegara";
$hoby = array("makan","tidur","koding");
$menikah = false;
$sekolah = array(
	'highSchool' => "SMKN 1 Bawang",
	'university' => "Unknown"
);

$kemampuan = array(
	array('name' => "Koding",
	'score' => "9"),
	array('name' => "Tidur",
	'score' => "10"),
);

echo getDataJSON($nama,$alamat,$hoby,$menikah,$sekolah,$kemampuan);




?>


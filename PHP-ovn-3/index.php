<?php

$code = array("JS", "Python", "Java", "#C");
print_r($code);
echo "<br>";

$bakery = array(
    array("bulla",1.50,10),
    array("kaka",5.00,10),
    array("Pirog",2.50,12)
);

echo "pris: ";
echo $bakery[0][1]. " .<br>";
echo "mängd: ";
echo $bakery[2][2]. "<br>";
echo "antal olika bakelser: ";
echo count($bakery);

$total_products = 0;

foreach($bakery as $value) {
    $total_products += $value[count($value)-1];
}

echo "<br>" . "totalt antal: " . $total_products;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>PHP Övning</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>

	</body>
</html>
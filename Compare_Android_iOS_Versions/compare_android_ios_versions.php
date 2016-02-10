<?php

$v[0] = "4.4.4";
$v[1] = "4.2";
$v[2] = "4.1.2";
$v[3] = "5.3.1.3";
$v[4] = "3.4.0.0.5";
$v[5] = "4.2.2";


foreach ($v as $a)
{
	$test = "4.2.2";
	list ($deviceHuman, $deviceVersion) = ver2int($test);
	list ($human, $minVersion) = ver2int($a);

	echo "Device Version = " . $a . "\n";
	echo "Device Version3= " . $deviceHuman . "\n";
	echo "Device VersionI= " . $deviceVersion . "\n";
	echo "Min Version    = " . $human . "\n";
	echo "Min Version    = " . $minVersion . "\n";
	echo "Calculation: " . $minVersion . " >= " . $deviceVersion . "\n";
	echo "Calculation: " . int2ver($minVersion) . " >= " . int2ver($deviceVersion) . "\n"; 
	echo "RESULT     : ";
	if ($deviceVersion <= $minVersion)
		echo "ACCEPTED";
	else
		echo "DENIED";

	echo "\n\n\n----------\n";
}


function ver2int ($v, $amount=3)
{
	$parts  = explode ('.', $v);
	$human  = "";
	for ($i=0;$i<$amount;$i++)
	{
		if (!isset ($parts[$i]))
			$parts[$i] = 0;
		$human .= $parts[$i];
		if ($amount-$i-1)
			$human .= ".";
	}
	$number = ($parts[0] << 24) | ($parts[1] << 16) | ($parts[2] << 8);
	return Array ($human, $number);
}
function int2ver ($v, $amount=3)
{

	$ip = long2ip ($v);
	$parts = explode ('.', $ip);
	$human = "";
	for ($i=0;$i<$amount;$i++)
		if ($amount-$i-1)
			$human .= $parts[$i] .".";	
		else 	
			$human .= $parts[$i];
	return $human;
}

?>

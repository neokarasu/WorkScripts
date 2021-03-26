<?php

// Performs a simple dig for the A-record of a domain on 3 of the domain's nameservers as well as the Google resolver 8.8.8.8 and shows the output.
// Usage: DigAll.php $domain where $domain is the domain name the digs should be performed for.

if (isset($argv[1]))
{
	$domain = $argv[1];
	$nsFull = shell_exec("dig +short NS $domain");
	$nsFullArray = explode("\n", $nsFull);

	$end_item = end($nsFullArray);
	if (empty($end_item))
	{
    		array_pop($nsFullArray);
	}

	foreach($nsFullArray as $ns)
	{
		echo "Output from " . substr($ns, 0, -1) . " is: " . shell_exec("dig A $domain @$ns +short");
	}
	echo "Output from Google Resolver is: " . shell_exec("dig A $domain @8.8.8.8 +short");
}

else
{
	echo PHP_EOL . 'Error: Domain name is missing in the input.' . PHP_EOL;
}

?>


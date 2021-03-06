<?php

// Performs a dig for the DNSKEy of a domain name, then generates a SHA256 DS key for it.
// Dependency: bind9utils
// Usage: DNSSEC-DSFromKey.php $domain where $domain is the domain name the DS key needs to be generated for.

if (isset($argv[1]))
{
	$domain = $argv[1];
	$nsFull = shell_exec("dig +short NS $domain");
	$nsFullArray = explode("\n", $nsFull);

	echo PHP_EOL . 'The DS-record is as follows:' . PHP_EOL;
	echo shell_exec("dig DNSKEY $domain @$nsFullArray[0] | dnssec-dsfromkey -1 -a SHA256 -f - $domain");
}

else
{
	echo PHP_EOL . 'Error: Domain name is missing in the input.' . PHP_EOL;
}

?>
